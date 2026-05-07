<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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

        $topCategories = Category::with([
            'products' => function ($query) {
                $query->where('status', 1)
                    ->latest()
                    ->take(3);
            }
        ])
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
        $cart = $this->getCart();
        if (!$cart || $cart->items->count() == 0) {
            return redirect()->route(\App\Constants\RouteNames::CART)->with('error', 'Your cart is empty.');
        }

        $subtotal = 0;
        foreach ($cart->items as $item) {
            $subtotal += $item->price * $item->quantity;
        }

        $threshold = Setting::get('cart_threshold', 0);
        if ($subtotal < $threshold) {
            return redirect()->route(\App\Constants\RouteNames::CART)->with('error', 'Your cart total must be at least AED ' . number_format($threshold, 2) . ' to checkout.');
        }

        return view('checkout');
    }

    private function getCart()
    {
        if (Auth::check() && !Auth::user()->isAdmin()) {
            return Cart::where('user_id', Auth::id())->first();
        }

        $sessionId = Session::getId();
        return Cart::where('session_id', $sessionId)->first();
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
        $orders = collect();
        if (auth()->check()) {
            $user = auth()->user();
            $orders = \App\Models\Order::where(function($query) use ($user) {
                    $query->where('user_id', $user->id)
                          ->orWhereHas('billingAddress', function($q) use ($user) {
                              $q->where('billing_email', $user->email);
                          });
                })
                ->with(['items'])
                ->latest()
                ->get();
        }
        return view('my-account', compact('orders'));
    }

    public function indexPrivacy()
    {
        return view('privacy');
    }

    public function indexTermsandConditions()
    {
        return view('terms-and-conditions');
    }

    public function indexTrackYourOrder(Request $request)
    {
        $order = null;
        $error = null;

        // Support both manual form submission (if I add a POST route) and direct links (GET with params)
        if ($request->has('order_id') && $request->has('email')) {
            $request->validate([
                'order_id' => 'required|string',
                'email' => 'required|email',
            ]);

            $order = \App\Models\Order::with(['items', 'billingAddress'])
                ->where('order_number', $request->order_id)
                ->whereHas('billingAddress', function ($query) use ($request) {
                    $query->where('billing_email', $request->email);
                })
                ->first();

            if (!$order) {
                $error = 'No order found with the provided details. Please check and try again.';
            }
        }

        return view('track-your-order', compact('order', 'error'));
    }

    public function indexWishlist()
    {
        return view('wishlist');
    }

    public function cancelOrder($id)
    {
        $order = \App\Models\Order::with('billingAddress')->findOrFail($id);
        $user = Auth::user();

        // Check if order belongs to user or matches email
        $isOwner = $user && ($order->user_id == $user->id || ($order->billingAddress && $order->billingAddress->billing_email == $user->email));

        if (!$isOwner) {
             return redirect()->back()->with('error', 'Unauthorized action.');
        }

        // Only allow cancellation for pending or confirmed orders
        if (in_array($order->order_status, ['pending', 'confirmed'])) {
            $order->update(['order_status' => 'cancelled']);
            return redirect()->back()->with('success', 'Order cancelled successfully.');
        }

        return redirect()->back()->with('error', 'Order cannot be cancelled at this stage.');
    }

    public function editProfile()
    {
        $user = Auth::user();
        return view('profile-edit', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();
        
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'phone' => 'nullable|string|max:20',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->only(['name', 'email', 'phone']);

        if ($request->hasFile('avatar')) {
            $path = $request->file('avatar')->store('avatars', 'public');
            $data['avatar'] = $path;
        }

        $user->update($data);

        return redirect()->route(\App\Constants\RouteNames::MY_ACCOUNT)->with('success', 'Profile updated successfully.');
    }
}
