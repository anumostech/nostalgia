<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nostalgia Sweets Admin | Orders</title>
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
                        <li class="breadcrumb-item">Orders</li>
                    </ul>
                </div>
            </div>

            <div class="main-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">All Orders</h5>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr>
                                                <th>Order ID</th>
                                                <th>Customer</th>
                                                <th>Subtotal</th>
                                                <th>VAT</th>
                                                <th>Total</th>
                                                <th>Status</th>
                                                <th>Date</th>
                                                <th class="text-end">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($orders as $order)
                                            <tr>
                                                <td>#{{ $order->id }}</td>
                                                <td>{{ $order->user->name ?? 'Guest/Unknown' }}</td>
                                                <td><img src="https://linen-quail-927267.hostingersite.com/assets/img/dihram.webp" height="15" width="15">{{ number_format($order->subtotal, 2) }}</td>
                                                <td><img src="https://linen-quail-927267.hostingersite.com/assets/img/dihram.webp" height="15" width="15">{{ number_format($order->vat_total, 2) }}</td>
                                                <td><img src="https://linen-quail-927267.hostingersite.com/assets/img/dihram.webp" height="15" width="15">{{ number_format($order->total_amount, 2) }}</td>
                                                <td>
                                                     <span class="badge {{ $order->order_status == 'delivered' ? 'bg-soft-success text-success' : ($order->order_status == 'cancelled' ? 'bg-soft-danger text-danger' : 'bg-soft-warning text-warning') }}">
                                                         {{ strtoupper($order->order_status) }}
                                                     </span>
                                                </td>
                                                <td>{{ $order->created_at->format('d M Y, h:i A') }}</td>
                                                <td class="text-end">
                                                    <div class="dropdown">
                                                        <a href="javascript:void(0);" data-bs-toggle="dropdown"><i class="feather-more-vertical"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                             <a href="{{ route(\App\Constants\RouteNames::ADMIN_ORDER_SHOW, $order->id) }}" class="dropdown-item"><i class="feather-eye me-2"></i>View Details</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="8" class="text-center">No orders found.</td>
                                            </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                                {{ $orders->links() }}
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
