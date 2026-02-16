<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
    /**
     * Display all categories
     */
    public function index()
    {
        $categories = Category::where('status', 1)
            ->latest()
            ->get();
    }

    /**
     * Display products by category (slug based)
     */
    public function showCategory($id)
    {
        $category = Category::where('id', $id)
            ->where('status', 1)
            ->firstOrFail();

        $products = Product::where('category_id', $category->id)
            ->where('status', 1)
            ->latest()
            ->paginate(15);
        
        $recommend_products = Product::where('status', 1)
            ->where('is_recommend', 1)
            ->get();

        $latest = Product::where('status', 1)
            ->latest()
            ->take(5)
            ->get();

        $filter_categories = Category::withCount(['products' => function ($query) {
            $query->where('status', 1);
        }])->get();

        $categories = Category::where('status', 1)->get();

        return view('products', [
            'products' => $products,
            'categories' => $categories,
            'filter_categories' => $filter_categories,
            'recommend_products' => $recommend_products,
            'latest' => $latest
        ]);
    }
}
