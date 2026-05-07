<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nostalgia Sweets Admin | Order #{{ $order->id }} Details</title>
    @include('admin.header')
</head>

<body>
    @include('admin.nav')
    @include('admin.headerbar')

    <main class="nxl-container">
        <div class="nxl-content">
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Order Details</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route(\App\Constants\RouteNames::DASHBOARD) }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route(\App\Constants\RouteNames::ADMIN_ORDER_LIST) }}">Orders</a></li>
                        <li class="breadcrumb-item">#{{ $order->id }}</li>
                    </ul>
                </div>
            </div>

            <div class="main-content">
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <div class="row">
                    <div class="col-lg-8">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Order Items</h5>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                                <th class="text-end">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($order->items as $item)
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-image avatar-sm me-3">
                                                            <img src="{{ $item->product->image ? asset('storage/' . $item->product->image) : asset('assets/img/products/1.png') }}" alt="" class="img-fluid">
                                                        </div>
                                                        <span>{{ $item->product_name }}</span>
                                                    </div>
                                                </td>
                                                <td><img src="https://linen-quail-927267.hostingersite.com/assets/img/dihram.webp" height="15" width="15">{{ number_format($item->price, 2) }}</td>
                                                <td>{{ $item->quantity }}</td>
                                                <td class="text-end"><img src="https://linen-quail-927267.hostingersite.com/assets/img/dihram.webp" height="15" width="15">{{ number_format($item->total, 2) }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="3" class="text-end"><strong>Subtotal</strong></td>
                                                <td class="text-end"><img src="https://linen-quail-927267.hostingersite.com/assets/img/dihram.webp" height="15" width="15">{{ number_format($order->subtotal, 2) }}</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" class="text-end"><strong>VAT (5%)</strong></td>
                                                <td class="text-end"><img src="https://linen-quail-927267.hostingersite.com/assets/img/dihram.webp" height="15" width="15">{{ number_format($order->vat_total, 2) }}</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" class="text-end text-primary"><strong>Grand Total</strong></td>
                                                <td class="text-end text-primary"><strong><img src="https://linen-quail-927267.hostingersite.com/assets/img/dihram.webp" height="15" width="15">{{ number_format($order->total_amount, 2) }}</strong></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="card stretch stretch-full">
                                    <div class="card-header">
                                        <h5 class="card-title">Billing Address</h5>
                                    </div>
                                    <div class="card-body">
                                        <p class="mb-1"><strong>{{ $order->billingAddress->billing_first_name }} {{ $order->billingAddress->billing_last_name }}</strong></p>
                                        <p class="mb-1">{{ $order->billingAddress->billing_address }}</p>
                                        <p class="mb-1">{{ $order->billingAddress->billing_apartment }}</p>
                                        <p class="mb-1">{{ $order->billingAddress->billing_city }}, {{ $order->billingAddress->billing_emirate }}</p>
                                        <p class="mb-1">{{ $order->billingAddress->billing_postcode }}</p>
                                        <p class="mb-0 mt-2"><i class="feather-mail me-2"></i>{{ $order->billingAddress->billing_email }}</p>
                                        <p class="mb-0"><i class="feather-phone me-2"></i>{{ $order->billingAddress->billing_phone }}</p>
                                    </div>
                                </div>
                            </div>
                            @if($order->ship_to_different_address && $order->shippingAddress)
                            <div class="col-md-6">
                                <div class="card stretch stretch-full">
                                    <div class="card-header">
                                        <h5 class="card-title">Shipping Address</h5>
                                    </div>
                                    <div class="card-body">
                                        <p class="mb-1"><strong>{{ $order->shippingAddress->shipping_first_name }} {{ $order->shippingAddress->shipping_last_name }}</strong></p>
                                        <p class="mb-1">{{ $order->shippingAddress->shipping_address }}</p>
                                        <p class="mb-1">{{ $order->shippingAddress->shipping_apartment }}</p>
                                        <p class="mb-1">{{ $order->shippingAddress->shipping_city }}, {{ $order->shippingAddress->shipping_emirate }}</p>
                                        <p class="mb-1">{{ $order->shippingAddress->shipping_postcode }}</p>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Order Status</h5>
                            </div>
                            <div class="card-body">
                                <form action="{{ route(\App\Constants\RouteNames::ADMIN_ORDER_UPDATE_STATUS, $order->id) }}" method="POST">
                                    @csrf
                                    <div class="mb-4">
                                        <label class="form-label">Current Status</label>
                                        <select name="order_status" class="form-control">
                                            <option value="pending" {{ $order->order_status == 'pending' ? 'selected' : '' }}>Pending</option>
                                            <option value="processing" {{ $order->order_status == 'processing' ? 'selected' : '' }}>Processing</option>
                                            <option value="shipped" {{ $order->order_status == 'shipped' ? 'selected' : '' }}>Shipped</option>
                                            <option value="delivered" {{ $order->order_status == 'delivered' ? 'selected' : '' }}>Delivered</option>
                                            <option value="cancelled" {{ $order->order_status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100">Update Status</button>
                                </form>
                                <hr>
                                <div class="mt-3">
                                    <p class="mb-1"><strong>Order Number:</strong> {{ $order->order_number }}</p>
                                    <p class="mb-1"><strong>Payment Method:</strong> {{ $order->payment_method }}</p>
                                    <p class="mb-1"><strong>Payment Status:</strong> 
                                        <span class="badge {{ $order->payment_status == 'paid' ? 'bg-soft-success text-success' : 'bg-soft-warning text-warning' }}">
                                            {{ strtoupper($order->payment_status) }}
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Order Notes</h5>
                            </div>
                            <div class="card-body">
                                <p class="mb-0">{{ $order->order_notes ?? 'No notes provided.' }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('admin.footer')
</body>

</html>
