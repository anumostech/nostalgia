<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Constants\RouteNames;
use Illuminate\Container\Attributes\Storage;

class ProductController extends Controller
{
    public function indexProduct(Request $request)
    {
        $recommend_products = Product::where('status', 1)
            ->where('is_recommend', 1)
            ->get();

        $latest = Product::where('status', 1)
            ->latest()
            ->take(5)
            ->get();

        $products = Product::where('status', 1)
            ->latest()
            ->paginate(15);

        if ($request->ajax()) {
            return view('components.product-items', compact('products'))->render();
        }

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

    public function indexAdminProduct()
    {
        $products = Product::with('category')
            ->latest()
            ->paginate(50);

        return view('admin.products.list-products', [
            'products' => $products
        ]);
    }

    public function showProduct($id)
    {
        $product = Product::with('category')
            ->where('id', $id)
            ->where('status', 1)
            ->firstOrFail();

        $related = Product::with('category')->where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->where('status', 1)
            ->take(6)
            ->get();

        $categories = Category::where('status', 1)->get();

        return view(
            'product',
            [
                'product' => $product,
                'categories' => $categories,
                'related' => $related
            ]
        );
    }

    public function addProduct()
    {
        $categories = Category::where('status', 1)
            ->latest()
            ->get();

        return view('admin.products.add-product', [
            'categories' => $categories
        ]);
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    public function storeProduct(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'stock_quantity' => 'required|integer',
            'unit' => 'required|string|max:50',
            'is_on_sale' => 'nullable',
            'description' => 'nullable|string',
            'product_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle image upload if exists
        $imageName = null;

        if ($request->hasFile('product_image')) {
            $file = $request->file('product_image');
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('products', $imageName, 'public');
        }

        Product::create([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'description' => $request->description,
            'price' => $request->price,
            'vat_percentage' => 5,
            'stock_quantity' => $request->stock_quantity,
            'unit' => $request->unit,
            'is_onsale' => $request->has('is_on_sale') ? 1 : 0,
            'status' => $request->status ?? 1,
            'image' => $imageName,
        ]);

        return redirect()->route(RouteNames::ADMIN_PRODUCT_LIST)
            ->with('success', 'Product created successfully');
    }


    public function editProduct($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::where('status', 1)->get();
        return view('admin.products.edit', compact('product', 'categories'));
    }

    public function updateProduct(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'stock_quantity' => 'required|integer',
            'unit' => 'required|string',
            'product_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = [
            'category_id' => $request->category_id,
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'description' => $request->description,
            'price' => $request->price,
            'stock_quantity' => $request->stock_quantity,
            'unit' => $request->unit,
            'is_onsale' => $request->has('is_on_sale') ? 1 : 0,
            'status' => $request->status ?? 1,
        ];

        if ($request->hasFile('product_image')) {
            // Delete old image
            if ($product->image && \Illuminate\Support\Facades\Storage::disk('public')->exists('products/' . $product->image)) {
                \Illuminate\Support\Facades\Storage::disk('public')->delete('products/' . $product->image);
            }

            $file = $request->file('product_image');
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('products', $imageName, 'public');
            $data['image'] = $imageName;
        }

        $product->update($data);

        return redirect()->route(RouteNames::ADMIN_PRODUCT_LIST)
            ->with('success', 'Product updated successfully');
    }

    public function deleteProduct($id)
    {
        $product = Product::findOrFail($id);

        if ($product->image && \Illuminate\Support\Facades\Storage::disk('public')->exists('products/' . $product->image)) {
            \Illuminate\Support\Facades\Storage::disk('public')->delete('products/' . $product->image);
        }

        $product->delete();

        return redirect()->route(RouteNames::ADMIN_PRODUCT_LIST)->with('success', 'Product deleted successfully');
    }
}
