<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="keyword" content="" />
    <meta name="author" content="flexilecode" />
    <!--! The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags !-->
    <!--! BEGIN: Apps Title-->
    <title>Nostalgia Sweets Admin | Dashboard</title>
    <!--! END:  Apps Title-->
    @include('admin.header')
</head>

<body>
    <!--! ================================================================ !-->
    <!--! [Start] Navigation Manu !-->
    <!--! ================================================================ !-->
    @include('admin.nav')
    <!--! ================================================================ !-->
    <!--! [End]  Navigation Manu !-->
    <!--! ================================================================ !-->
    <!--! ================================================================ !-->
    <!--! [Start] Header !-->
    <!--! ================================================================ !-->
    @include('admin.headerbar')
    <!--! ================================================================ !-->
    <!--! [End] Header !-->
    <!--! ================================================================ !-->
    <!--! ================================================================ !-->
    <!--! [Start] Main Content !-->
    <!--! ================================================================ !-->
    <main class="nxl-container">
        <div class="nxl-content">
            <!-- [ page-header ] start -->
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Dashboard</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item">Dashboard</li>
                    </ul>
                </div>
                <div class="page-header-right ms-auto">
                    <div class="page-header-right-items">
                        <div class="d-flex d-md-none">
                            <a href="javascript:void(0)" class="page-header-right-close-toggle">
                                <i class="feather-arrow-left me-2"></i>
                                <span>Back</span>
                            </a>
                        </div>
                        <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                            <div id="reportrange" class="reportrange-picker d-flex align-items-center">
                                <span class="reportrange-picker-field"></span>
                            </div>
                            <div class="dropdown filter-dropdown">
                                <a class="btn btn-md btn-light-brand" data-bs-toggle="dropdown" data-bs-offset="0, 10" data-bs-auto-close="outside">
                                    <i class="feather-filter me-2"></i>
                                    <span>Filter</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Role" checked="checked" />
                                            <label class="custom-control-label c-pointer" for="Role">Products</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Team" checked="checked" />
                                            <label class="custom-control-label c-pointer" for="Team">Categories</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-md-none d-flex align-items-center">
                        <a href="javascript:void(0)" class="page-header-right-open-toggle">
                            <i class="feather-align-right fs-20"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- [ page-header ] end -->
            <!-- [ Main Content ] start -->
            <div class="main-content">
                <div class="row">
                    <!-- [Invoices Awaiting Payment] start -->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="d-flex align-items-start justify-content-between mb-4">
                                    <div class="d-flex gap-4 align-items-center">
                                        <div class="avatar-text avatar-lg bg-gray-200">
                                            AED
                                        </div>
                                        <div>
                                            <div class="fs-4 fw-bold text-dark">
                                                <span class="counter">{{ $totalSales ?? 0 }}</span> /
                                                <span class="counter">{{ $totalPaidOrders ?? 0 }}</span>
                                            </div>
                                            <h3 class="fs-13 fw-semibold text-truncate-1-line">Total Sales / Paid Orders</h3>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0);" class="">
                                        <i class="feather-more-vertical"></i>
                                    </a>
                                </div>
                                <div class="pt-4">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="javascript:void(0);" class="fs-12 fw-medium text-muted text-truncate-1-line">Total Sales</a>
                                        <div class="w-100 text-end">
                                            <span class="fs-12 text-dark">${{ $totalSales ?? 0 }}</span>
                                            <span class="fs-11 text-muted">(0%)</span>
                                        </div>
                                    </div>
                                    <div class="progress mt-2 ht-3">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 100%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="d-flex align-items-start justify-content-between mb-4">
                                    <div class="d-flex gap-4 align-items-center">
                                        <div class="avatar-text avatar-lg bg-gray-200">
                                            AED
                                        </div>
                                        <div>
                                            <div class="fs-4 fw-bold text-dark">
                                                <span class="counter">{{ $totalIncome ?? 0 }}</span>
                                            </div>
                                            <h3 class="fs-13 fw-semibold text-truncate-1-line">Total Income</h3>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0);" class="">
                                        <i class="feather-more-vertical"></i>
                                    </a>
                                </div>
                                <div class="pt-4">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="javascript:void(0);" class="fs-12 fw-medium text-muted text-truncate-1-line">Total Income</a>
                                        <div class="w-100 text-end">
                                            <span class="fs-12 text-dark">${{ $totalIncome ?? 0 }}</span>
                                            <span class="fs-11 text-muted">(0%)</span>
                                        </div>
                                    </div>
                                    <div class="progress mt-2 ht-3">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 100%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="d-flex align-items-start justify-content-between mb-4">
                                    <div class="d-flex gap-4 align-items-center">
                                        <div class="avatar-text avatar-lg bg-gray-200">
                                            <i class="feather-briefcase"></i>
                                        </div>
                                        <div>
                                            <div class="fs-4 fw-bold text-dark">
                                                <span class="counter">{{ $totalProducts ?? 0 }}</span>
                                            </div>
                                            <h3 class="fs-13 fw-semibold text-truncate-1-line">Total Products</h3>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0);" class="">
                                        <i class="feather-more-vertical"></i>
                                    </a>
                                </div>
                                <div class="pt-4">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="javascript:void(0);" class="fs-12 fw-medium text-muted text-truncate-1-line">Products Available</a>
                                        <div class="w-100 text-end">
                                            <span class="fs-12 text-dark">{{ $totalProducts ?? 0 }}</span>
                                            <span class="fs-11 text-muted">(0%)</span>
                                        </div>
                                    </div>
                                    <div class="progress mt-2 ht-3">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="d-flex align-items-start justify-content-between mb-4">
                                    <div class="d-flex gap-4 align-items-center">
                                        <div class="avatar-text avatar-lg bg-gray-200">
                                            <i class="feather-activity"></i>
                                        </div>
                                        <div>
                                            <div class="fs-4 fw-bold text-dark">
                                                <span class="counter">{{ $totalPaidOrders ?? 0 }}</span>
                                            </div>
                                            <h3 class="fs-13 fw-semibold text-truncate-1-line">Total Paid Orders</h3>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0);" class="">
                                        <i class="feather-more-vertical"></i>
                                    </a>
                                </div>
                                <div class="pt-4">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="javascript:void(0);" class="fs-12 fw-medium text-muted text-truncate-1-line">Paid Orders</a>
                                        <div class="w-100 text-end">
                                            <span class="fs-12 text-dark">{{ $totalPaidOrders ?? 0 }}</span>
                                            <span class="fs-11 text-muted">(0%)</span>
                                        </div>
                                    </div>
                                    <div class="progress mt-2 ht-3">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 100%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- [Conversion Rate] end -->
                    <!-- [Payment Records] start -->
                    <div class="col-xxl-8">
                        <div class="card">
                            <div class="card-header">
                                <h5>Recent Orders (Last 7 Days)</h5>
                            </div>
                            <div class="card-body">
                                <div id="recent-orders-chart"></div>
                            </div>
                        </div>
                    </div>
                    <!-- [Payment Records] end -->
                    <!-- [Total Sales] start -->
                    <div class="col-xxl-4">
                        <div class="card">
                            <div class="card-header">
                                <h5>Monthly Sales</h5>
                            </div>
                            <div class="card-body">
                                <div id="monthly-sales-chart"></div>
                            </div>
                        </div>
                    </div>
                    <!-- [Total Sales] end !-->
                    <!-- [Latest Leads] end -->
                    <div class="col-xxl-4">
                        <div class="card">
                            <div class="card-header">
                                <h5>Orders</h5>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr class="border-b">
                                                <th scope="row">Order ID</th>
                                                <th>Total</th>
                                                <th>Status</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($orders as $order)
                                            <tr>
                                                <td>#{{ $order->id }}</td>
                                                <td>${{ number_format($order->total_amount ?? 0, 2) }}</td>
                                                <td>
                                                    <span class="badge 
                                    {{ $order->payment_status == 'paid' ? 'bg-success' : 'bg-warning' }}">
                                                        {{ ucfirst($order->payment_status) }}
                                                    </span>
                                                </td>
                                                <td>{{ $order->created_at->format('d M Y') }}</td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="4" class="text-center">No Orders Found</td>
                                            </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [Latest Leads] start -->
                    <div class="col-xxl-8">
                        <div class="card">
                            <div class="card-header">
                                <h5>Product Overview</h5>
                            </div>
                            <div class="card-body custom-card-action p-0">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr class="border-b">
                                                <th scope="row">Name</th>
                                                <th>Category</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                                <th>Sale</th>
                                                <th>Status</th>
                                                <th class="text-end">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($products as $product)
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="avatar-image">
                                                            <img src="{{ asset('storage/products/'.$product->image) }}" alt="" class="img-fluid" />
                                                        </div>
                                                        <a href="javascript:void(0);">
                                                            <span class="d-block">{{ $product->name }}</span>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td> <span class="d-block">{{ $product->category->name ?? '-' }}</span></td>
                                                <td>{{ number_format($product->price ?? 0, 2) }} AED</td>
                                                <td>{{ $product->stock_quantity }}</td>
                                                <td>
                                                    {{ $product->is_onsale != 0 ? 'On Sale' : 'Not In Sale' }}
                                                </td>
                                                <td>
                                                    <span class="badge {{ $product->status == 1 ? 'bg-soft-success text-success' : 'bg-soft-danger text-danger' }}">
                                                        {{ $product->status == 1 ? 'Available' : 'Not Available' }}
                                                    </span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="javascript:void(0);"><i class="feather-more-vertical"></i></a>
                                                </td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="3" class="text-center">No Products Found</td>
                                            </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                                {{ $products->links() }}

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- [ Main Content ] end -->
        </div>
        <!-- [ Footer ] start -->
        <footer class="footer">
            <p class="fs-11 text-muted fw-medium text-uppercase mb-0 copyright">
                <span>Copyright ©</span>
                <script>
                    document.write(new Date().getFullYear());
                </script>
            </p>
            <p class="fs-11 text-muted fw-medium text-uppercase mb-0 copyright"> <span> Nostalgia Sweets</span></p>
            <!-- <div class="d-flex align-items-center gap-4">
                <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Help</a>
                <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Terms</a>
                <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Privacy</a>
            </div> -->
        </footer>
        <!-- [ Footer ] end -->
    </main>
    <!--! ================================================================ !-->
    <!--! [End] Main Content !-->
    <!--! ================================================================ !-->
    <!--! ================================================================ !-->
    <!--! BEGIN: Theme Customizer !-->
    <!--! ================================================================ !-->

    <!--! ================================================================ !-->
    <!--! [End] Theme Customizer !-->
    <!--! ================================================================ !-->
    <!--! ================================================================ !-->
    <!--! Footer Script !-->
    <!--! ================================================================ !-->
    <!--! BEGIN: Vendors JS !-->
    @include('admin.footer')
    <script>
        document.addEventListener("DOMContentLoaded", function() {

            let recentOrdersLabels = @json($recentOrdersLabels ?? []);
            let recentOrdersCounts = @json($recentOrdersCounts ?? []);
            let monthlySalesLabels = @json($monthlySalesLabels ?? []);
            let monthlySalesTotals = @json($monthlySalesTotals ?? []);

            // FORCE fallback if empty
            const recentOrdersData = recentOrdersCounts.length > 0 ? recentOrdersCounts : [0];
            const recentOrdersCats = recentOrdersLabels.length > 0 ? recentOrdersLabels : ['No Data'];

            const monthlySalesData = monthlySalesTotals.length > 0 ? monthlySalesTotals : [0];
            const monthlySalesCats = monthlySalesLabels.length > 0 ? monthlySalesLabels : ['No Data'];

            new ApexCharts(document.querySelector("#recent-orders-chart"), {
                chart: {
                    type: 'area',
                    height: 300,
                    toolbar: {
                        show: false
                    }
                },
                series: [{
                    name: 'Orders',
                    data: recentOrdersData
                }],
                xaxis: {
                    categories: recentOrdersCats
                },
                noData: {
                    text: 'No Orders Found'
                }
            }).render();


            new ApexCharts(document.querySelector("#monthly-sales-chart"), {
                chart: {
                    type: 'bar',
                    height: 300,
                    toolbar: {
                        show: false
                    }
                },
                series: [{
                    name: 'Sales',
                    data: monthlySalesData
                }],
                xaxis: {
                    categories: monthlySalesCats
                },
                noData: {
                    text: 'No Sales Found'
                }
            }).render();

        });
    </script>




    <!--! END: Theme Customizer !-->
</body>

</html>