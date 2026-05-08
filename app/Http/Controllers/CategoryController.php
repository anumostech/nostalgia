<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
            
        return view('categories', compact('categories'));
    }

    public function indexAdminCategory()
    {
        $admin_categories = Category::latest()
            ->paginate(50);

        return view('admin.categories.list-categories', [
            'admin_categories' => $admin_categories
        ]);
    }

    /**
     * Display products by category (slug based)
     */
    public function showCategory(Request $request, $id)
    {
        $category = Category::where('id', $id)
            ->where('status', 1)
            ->firstOrFail();

        $query = Product::with('category')->where('category_id', $category->id)
            ->where('status', 1);

        if ($request->has('price_range')) {
            $range = explode(';', $request->price_range);
            if (count($range) == 2) {
                $min = (float)$range[0];
                $max = (float)$range[1];
                $query->whereBetween('price', [$min, $max]);
            }
        }

        switch ($request->sort_by) {
            case 'price_low_high':
                $query->orderBy('price', 'asc');
                break;
            case 'price_high_low':
                $query->orderBy('price', 'desc');
                break;
            case 'latest':
                $query->latest();
                break;
            default:
                $query->latest();
                break;
        }

        $products = $query->paginate(15);

        if ($request->ajax()) {
            return view('components.product-items', compact('products'))->render();
        }

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

    public function addCategory()
    {
        return view('admin.categories.add-category');
    }

    public function storeCategory(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = null;

        if ($request->hasFile('category_image')) {
            $file = $request->file('category_image');
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('categories', $imageName, 'public');
        }

        Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'description' => $request->description,
            'image' => $imageName,
            'status' => $request->status ?? 1,
        ]);

        return redirect()->route(\App\Constants\RouteNames::ADMIN_CATEGORY_LIST)->with('success', 'Category created successfully');
    }

    public function editCategory($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.categories.edit', compact('category'));
    }

    public function updateCategory(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = [
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'description' => $request->description,
            'status' => $request->status ?? 1,
        ];

        if ($request->hasFile('category_image')) {
            // Delete old image
            if ($category->image && \Illuminate\Support\Facades\Storage::disk('public')->exists('categories/' . $category->image)) {
                \Illuminate\Support\Facades\Storage::disk('public')->delete('categories/' . $category->image);
            }

            $file = $request->file('category_image');
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('categories', $imageName, 'public');
            $data['image'] = $imageName;
        }

        $category->update($data);

        return redirect()->route(\App\Constants\RouteNames::ADMIN_CATEGORY_LIST)->with('success', 'Category updated successfully');
    }

    public function deleteCategory($id)
    {
        $category = Category::findOrFail($id);

        if ($category->image && \Illuminate\Support\Facades\Storage::disk('public')->exists('categories/' . $category->image)) {
            \Illuminate\Support\Facades\Storage::disk('public')->delete('categories/' . $category->image);
        }

        $category->delete();

        return redirect()->route(\App\Constants\RouteNames::ADMIN_CATEGORY_LIST)->with('success', 'Category deleted successfully');
    }
}
