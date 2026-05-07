<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Models\Category;
use App\Models\Cart;
use App\Models\Product;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::defaultView('vendor.pagination.custom');

        view()->composer('*', function ($view) {
            $categories = Category::with(['products' => function ($query) {
                $query->where('status', 1)->latest();
            }])
                ->where('status', 1)
                ->get();

            $cartCount = 0;
            $cartItemQuantities = [];
            $cartProductIds = [];
            if (request()->hasSession()) {
                if (auth()->check()) {
                    $cart = Cart::where('user_id', auth()->id())->first();
                } else {
                    $cart = Cart::where('session_id', \Illuminate\Support\Facades\Session::getId())->first();
                }
                if ($cart) {
                    $cartItems = $cart->items()
                        ->select('id', 'product_id', 'quantity')
                        ->get();

                    $cartCount = $cartItems->sum('quantity');
                    $cartItemQuantities = $cartItems->keyBy('product_id');
                    $cartProductIds = $cartItemQuantities->keys()->toArray();
                }
            }


            $view->with([
                'categories' => $categories,
                'cartCount' => $cartCount,
                'cartItemQuantities' => $cartItemQuantities,
                'cartProductIds' => $cartProductIds
            ]);
        });

        view()->composer('footer', function ($view) {

            $featuredProducts = Product::where('status', 1)
                ->where('is_featured', 1)
                ->latest()
                ->take(3)
                ->get();

            $onSaleProducts = Product::where('status', 1)
                ->where('is_onsale', 1)
                ->latest()
                ->take(3)
                ->get();

            $topRatedProducts = Product::where('status', 1)
                ->where('is_top_rated', 1)
                ->latest()
                ->take(3)
                ->get();

            $view->with([
                'featuredProducts' => $featuredProducts,
                'onSaleProducts'   => $onSaleProducts,
                'topRatedProducts' => $topRatedProducts,
            ]);
        });
    }
}
