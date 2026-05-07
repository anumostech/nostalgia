<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use App\Models\Order;
use App\Models\BillingAddress;
use App\Models\ShippingAddress;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index()
    {
        $cart = $this->getCart();
        $cartItems = $cart ? $cart->items()->with('product')->get() : collect();

        $subtotal = 0;
        $vat = 0;
        $total = 0;

        foreach ($cartItems as $item) {
            $itemSubtotal = $item->price * $item->quantity;
            $subtotal += $itemSubtotal;
            $vat += ($itemSubtotal * $item->vat_percentage) / 100;
        }

        $total = $subtotal + $vat;
        $threshold = Setting::get('cart_threshold', 0);

        return view('cart', compact('cartItems', 'subtotal', 'vat', 'total', 'threshold'));
    }

    public function add(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $product = Product::findOrFail($request->product_id);
        $cart = $this->getOrCreateCart();

        $cartItem = $cart->items()->where('product_id', $product->id)->first();

        if ($cartItem) {
            $cartItem->quantity += $request->quantity;
            $cartItem->save();
        } else {
            $cartItem = $cart->items()->create([
                'product_id' => $product->id,
                'quantity' => $request->quantity,
                'price' => $product->price,
                'vat_percentage' => 5,
            ]);
        }

        return response()->json(array_merge([
            'status' => 'success',
            'success' => true,
            'message' => 'Product added to cart!',
            'cart_item_id' => $cartItem->id,
            'product_id' => $product->id,
            'quantity' => $cartItem->quantity
        ], $this->getCartState()));
    }

    public function update(Request $request)
    {
        $request->validate([
            'items' => 'required|array',
            'items.*.id' => 'required|exists:cart_items,id',
            'items.*.quantity' => 'required|integer|min:1',
        ]);

        foreach ($request->items as $itemData) {
            $cartItem = CartItem::find($itemData['id']);
            if ($cartItem) {
                $cartItem->quantity = $itemData['quantity'];
                $cartItem->save();
            }
        }

        return response()->json(array_merge([
            'success' => true,
            'status' => 'success',
            'message' => 'Cart updated!',
        ], $this->getCartState()));

    }

    public function remove(Request $request, $id)
    {
        $cartItem = CartItem::findOrFail($id);
        $productId = $cartItem->product_id;
        $cartItem->delete();

            return response()->json(array_merge([
                'success' => true,
                'status' => 'success',
                'message' => 'Item removed from cart!',
                'removed_item_id' => $id,
                'product_id' => $productId
            ], $this->getCartState()));
        

    }

    public function clear()
    {
        $cart = $this->getCart();
        if ($cart) {
            $cart->items()->delete();
        }

        return redirect()->back()->with('success', 'Cart cleared!');
    }

    public function processCheckout(Request $request)
    {
        $cart = $this->getCart();
        if (!$cart || $cart->items->count() == 0) {
            return redirect()->route(\App\Constants\RouteNames::CART)->with('error', 'Your cart is empty.');
        }

        if ($request->ajax()) {
            try {
                $request->validate([
                    'firstName' => 'required|string|max:100',
                    'emailAddress' => 'required|email|max:150',
                    'phone' => 'nullable|string|max:20',
                    'streetAddress' => 'required|string',
                    'cityAddress' => 'required|string',
                    'emirate' => 'required|string',
                    'postcode' => 'required|string',
                ], [
                    'firstName.required' => 'First name is required.',
                    'emailAddress.required' => 'Email address is required.',
                    'emailAddress.email' => 'Please enter a valid email address.',
                    'streetAddress.required' => 'Street address is required.',
                    'cityAddress.required' => 'City is required.',
                    'emirate.required' => 'Emirate is required.',
                    'postcode.required' => 'Postcode is required.',
                ]);
            } catch (\Illuminate\Validation\ValidationException $e) {
                return response()->json([
                    'success' => false,
                    'errors' => $e->errors()
                ], 422);
            }
        } else {
            $request->validate([
                'firstName' => 'required|string|max:100',
                // 'lastName' => 'required|string|max:100',
                'emailAddress' => 'required|email|max:150',
                'phone' => 'nullable|string|max:20',
                'streetAddress' => 'required|string',
                'cityAddress' => 'required|string',
                'emirate' => 'required|string',
                'postcode' => 'required|string',
            ], [
                'firstName.required' => 'First name is required.',
                // 'lastName.required' => 'Last name is required.',
                'emailAddress.required' => 'Email address is required.',
                'emailAddress.email' => 'Please enter a valid email address.',
                'streetAddress.required' => 'Street address is required.',
                'cityAddress.required' => 'City is required.',
                'emirate.required' => 'Emirate is required.',
                'postcode.required' => 'Postcode is required.',
            ]);
        }

        $subtotal = 0;
        $vat = 0;
        foreach ($cart->items as $item) {
            $itemSubtotal = $item->price * $item->quantity;
            $subtotal += $itemSubtotal;
            $vat += ($itemSubtotal * $item->vat_percentage) / 100;
        }
        $total = $subtotal + $vat;

        $billingAddress = BillingAddress::create([
            'billing_first_name' => $request->firstName,
            'billing_last_name' => $request->lastName,
            'billing_email' => $request->emailAddress,
            'billing_phone' => $request->phone,
            'billing_company_name' => $request->companyName,
            'billing_country' => 'UAE',
            'billing_address' => $request->streetAddress,
            'billing_apartment' => $request->apartment,
            'billing_city' => $request->cityAddress,
            'billing_postcode' => $request->postcode,
            'billing_emirate' => $request->emirate,
        ]);

        $shippingAddress = null;

        if ($request->has('shippingdifferentAddress')) {
            $shippingAddress = ShippingAddress::create([
                'shipping_first_name' => $request->shipping_firstName,
                'shipping_last_name' => $request->shipping_lastName,
                'shipping_company_name' => $request->shipping_companyName,
                'shipping_country' => $request->shipping_country,
                'shipping_address' => $request->shipping_streetAddress,
                'shipping_apartment' => $request->shipping_apartment,
                'shipping_city' => $request->shipping_cityAddress,
                'shipping_postcode' => $request->shipping_postcode,
                'shipping_emirate' => $request->shipping_emirate,
            ]);
        }

        $order = Order::create([
            'user_id' => Auth::check() && !Auth::user()->isAdmin() ? Auth::id() : 0,
            'order_number' => 'ORD-' . strtoupper(uniqid()),
            'subtotal' => $subtotal,
            'vat_total' => $vat,
            'total_amount' => $total,
            'payment_status' => 'pending',
            'order_status' => 'pending',
            'payment_method' => 'Cash on Delivery',
            'billing_address_id' => $billingAddress->id,
            'ship_to_different_address' => $request->has('shippingdifferentAddress'),
            'shipping_address_id' => $shippingAddress ? $shippingAddress->id : null,
            'order_notes' => $request->text,
        ]);

        foreach ($cart->items as $item) {
            $order->items()->create([
                'product_id' => $item->product_id,
                'product_name' => $item->product->name,
                'price' => $item->price,
                'quantity' => $item->quantity,
                'vat_percentage' => $item->vat_percentage,
                'vat_amount' => ($item->price * $item->quantity * $item->vat_percentage) / 100,
                'total' => ($item->price * $item->quantity) * (1 + $item->vat_percentage / 100),
            ]);
        }

        $cart->items()->delete();
        $cart->delete();

        // Send Order Confirmation Email
        try {
            \Illuminate\Support\Facades\Mail::to($billingAddress->billing_email)->send(new \App\Mail\OrderConfirmation($order));
        } catch (\Exception $e) {
            \Illuminate\Support\Facades\Log::error('Order Confirmation Email failed for Order ' . $order->order_number . ': ' . $e->getMessage());
        }

        return response()->json([
            'success' => true,
            'redirect_url' => route(\App\Constants\RouteNames::ORDER_SUCCESS, ['order_id' => $order->id]),
            'order_id' => $order->id,
            'message' => 'Order placed successfully!'
        ]);
    }

    public function orderSuccess($order_id)
    {
        $order = Order::findOrFail($order_id);

        return view('order-success', compact('order'));
    }

    private function getCartState()
    {
        $cart = $this->getCart();
        $cartCount = $cart ? $cart->items()->sum('quantity') : 0;
        $cartItems = $cart ? $cart->items : collect();

        $subtotal = 0;
        $vat = 0;
        $items_data = [];

        foreach ($cartItems as $item) {
            $itemSubtotal = $item->price * $item->quantity;
            $subtotal += $itemSubtotal;
            $vat += ($itemSubtotal * $item->vat_percentage) / 100;
            $items_data[] = [
                'id' => $item->id,
                'product_id' => $item->product_id,
                'quantity' => $item->quantity,
                'price' => $item->price,
                'total' => $itemSubtotal
            ];
        }

        $total = $subtotal + $vat;
        $threshold = (float)Setting::get('cart_threshold', 0);

        return [
            'cart_count' => $cartCount,
            'subtotal' => $subtotal,
            'vat' => $vat,
            'total' => $total,
            'threshold' => $threshold,
            'can_checkout' => $subtotal >= $threshold,
            'cart_items' => $items_data
        ];
    }

    private function getCart()
    {
        if (Auth::check() && !Auth::user()->isAdmin()) {
            return Cart::where('user_id', Auth::id())->first();
        }

        $sessionId = Session::getId();
        if (!Session::has('cart_id')) {
            Session::put('session_started', true);
        }
        return Cart::where('session_id', $sessionId)->first();
    }

    private function getOrCreateCart()
    {
        if (Auth::check() && !Auth::user()->isAdmin()) {
            return Cart::firstOrCreate(['user_id' => Auth::id()]);
        }

        $sessionId = Session::getId();
        Session::put('session_started', true);
        return Cart::firstOrCreate(['session_id' => $sessionId], ['user_id' => 0]);
    }
}
