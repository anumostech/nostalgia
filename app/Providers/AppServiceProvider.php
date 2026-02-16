<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Models\Category;
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
        Paginator::useBootstrap();

        view()->composer('*', function ($view) {
            $categories = Category::with(['products' => function ($query) {
                $query->where('status', 1)->latest();
            }])
                ->where('status', 1)
                ->get();

            $view->with('categories', $categories);
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
