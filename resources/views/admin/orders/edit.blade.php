<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Nostalgia Sweets Admin | Edit Order</title>
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
                        <h5 class="m-b-10">Orders</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route(\App\Constants\RouteNames::DASHBOARD) }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route(\App\Constants\RouteNames::ADMIN_ORDER_LIST) }}">Orders</a></li>
                        <li class="breadcrumb-item">Edit Order</li>
                    </ul>
                </div>
            </div>
            <div class="main-content">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Edit Order #{{ $order->order_number }}</h5>
                            </div>
                            <div class="card-body">
                                <form action="{{ route(\App\Constants\RouteNames::ORDER_UPDATE, $order->id) }}" method="POST">
                                    @csrf
                                    <div class="row mb-4">
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label class="form-label">Order Status</label>
                                                <select name="order_status" class="form-control">
                                                    <option value="pending" {{ $order->order_status == 'pending' ? 'selected' : '' }}>Pending</option>
                                                    <option value="confirmed" {{ $order->order_status == 'confirmed' ? 'selected' : '' }}>Confirmed</option>
                                                    <option value="shipped" {{ $order->order_status == 'shipped' ? 'selected' : '' }}>Shipped</option>
                                                    <option value="delivered" {{ $order->order_status == 'delivered' ? 'selected' : '' }}>Delivered</option>
                                                    <option value="cancelled" {{ $order->order_status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label class="form-label">Payment Status</label>
                                                <select name="payment_status" class="form-control">
                                                    <option value="pending" {{ $order->payment_status == 'pending' ? 'selected' : '' }}>Pending</option>
                                                    <option value="paid" {{ $order->payment_status == 'paid' ? 'selected' : '' }}>Paid</option>
                                                    <option value="failed" {{ $order->payment_status == 'failed' ? 'selected' : '' }}>Failed</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <div class="form-group mb-3">
                                                <label class="form-label">Order Notes</label>
                                                <textarea name="order_notes" class="form-control" rows="4">{{ $order->order_notes }}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 d-flex justify-content-start gap-2">
                                            <button type="submit" class="btn btn-primary">Update Order</button>
                                            <a href="{{ route(\App\Constants\RouteNames::ADMIN_ORDER_LIST) }}" class="btn btn-light-brand">Cancel</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- Order Summary for Reference -->
                        <div class="card mt-4">
                            <div class="card-header">
                                <h5>Order Items Summary</h5>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Price</th>
                                                <th>Qty</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($order->items as $item)
                                            <tr>
                                                <td>{{ $item->product->name ?? 'Deleted Product' }}</td>
                                                <td>AED {{ number_format($item->price, 2) }}</td>
                                                <td>{{ $item->quantity }}</td>
                                                <td>AED {{ number_format($item->price * $item->quantity, 2) }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
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
