<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function indexHome()
    {
        $categories = Category::where('status', 1)->get();

        $productsByCategory = [];

        foreach ($categories as $category) {
            $productsByCategory[$category->id] = Product::with('category')
                ->where('status', 1)
                ->where('category_id', $category->id)
                ->latest()
                ->take(8)
                ->get();
        }

        $featured_products = Product::with('category')->where('status', 1)
            ->where('is_featured', 1)
            ->limit(6)
            ->get();

        $on_sale_products = Product::with('category')->where('status', 1)
            ->where('is_onsale', 1)
            ->limit(6)
            ->get();

        $top_rated_products = Product::with('category')->where('status', 1)
            ->where('is_top_rated', 1)
            ->limit(6)
            ->get();

        $products = Product::with('category')->where('status', 1)
            ->latest()
            ->paginate(12);

        $topCategories = Category::with(['products' => function ($query) {
            $query->where('status', 1)
                ->latest()
                ->take(3);
        }])
            ->where('status', 1)
            ->latest()
            ->take(4)
            ->get();

        $nostalgiaProducts = Product::with('category')->where('status', 1)
            ->latest()
            ->take(15)
            ->get();

        return view('index', compact(
            'products',
            'categories',
            'productsByCategory',
            'featured_products',
            'on_sale_products',
            'top_rated_products',
            'topCategories',
            'nostalgiaProducts'
        ));
    }

    public function indexAbout()
    {
        return view('about');
    }

    public function indexCart()
    {
        return view('cart');
    }

    public function indexCheckout()
    {
        return view('checkout');
    }

    public function indexContact()
    {
        return view('contact');
    }

    public function indexFaq()
    {
        return view('faq');
    }

    public function indexMyAccount()
    {
        return view('my-account');
    }

    public function indexPrivacy()
    {
        return view('privacy');
    }

    public function indexTermsandConditions()
    {
        return view('terms-and-conditions');
    }

    public function indexTrackYourOrder()
    {
        return view('track-your-order');
    }

    public function indexWishlist()
    {
        return view('wishlist');
    }
}
