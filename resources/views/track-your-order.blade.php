@include('header')

<!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main">
    <!-- breadcrumb -->
    <div class="bg-gray-13 bg-md-transparent">
        <div class="container">
            <!-- breadcrumb -->
            <div class="my-md-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="{{ route(\App\Constants\RouteNames::HOME) }}">Home</a></li>
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Track your Order</li>
                    </ol>
                </nav>
            </div>
            <!-- End breadcrumb -->
        </div>
    </div>
    <!-- End breadcrumb -->

    <div class="container">
        <div class="mx-xl-10">
            <div class="mb-6 text-center">
                <h1 class="mb-6">Track your Order</h1>
                <p class="text-gray-90 px-xl-10">To track your order please enter your Order ID in the box below and press the "Track" button. This was given to you on your receipt and in the confirmation email you should have received.</p>
            </div>
            <div class="my-4 my-xl-8">
                @if($error)
                    <div class="alert alert-danger text-center mb-5">
                        {{ $error }}
                    </div>
                @endif

                <form action="{{ route(\App\Constants\RouteNames::TRACK_YOUR_ORDER) }}" method="GET" class="js-validate">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <!-- Form Group -->
                            <div class="js-form-message form-group">
                                <label class="form-label" for="orderid">Order ID</label>
                                <input type="text" class="form-control" name="order_id" id="orderid" 
                                    value="{{ request('order_id') }}"
                                    placeholder="Found in your order confirmation email." 
                                    required>
                            </div>
                            <!-- End Form Group -->
                        </div>
                        <div class="col-md-6 mb-3">
                            <!-- Form Group -->
                            <div class="js-form-message form-group">
                                <label class="form-label" for="billingemail">Billing email</label>
                                <input type="email" class="form-control" name="email" id="billingemail" 
                                    value="{{ request('email') }}"
                                    placeholder="Email you used during checkout." required>
                            </div>
                            <!-- End Form Group -->
                        </div>
                        <!-- Button -->
                        <div class="col mb-5">
                            <button type="submit" class="btn btn-soft-secondary mb-3 mb-md-0 font-weight-normal px-5 px-md-4 px-lg-5 w-100 w-md-auto">Track Order</button>
                        </div>
                        <!-- End Button -->
                    </div>
                </form>

                @if($order)
                <div class="card border-0 shadow-sm mt-5">
                    <div class="card-body p-md-5">
                        <div class="d-flex justify-content-between align-items-center mb-4 pb-3 border-bottom">
                            <div>
                                <h3 class="h5 mb-1">Order Details</h3>
                                <p class="text-muted mb-0">Placed on {{ $order->created_at->format('M d, Y') }}</p>
                            </div>
                            <div class="text-right">
                                <span class="badge badge-{{ $order->order_status == 'delivered' ? 'success' : ($order->order_status == 'cancelled' ? 'danger' : 'warning') }} py-2 px-3 fs-13">
                                    {{ strtoupper($order->order_status) }}
                                </span>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-sm-6">
                                <p class="text-muted mb-1">Order ID:</p>
                                <p class="font-weight-bold">{{ $order->order_number }}</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="text-muted mb-1">Total Amount:</p>
                                <p class="font-weight-bold">AED {{ number_format($order->total_amount, 2) }}</p>
                            </div>
                        </div>

                        <h4 class="h6 mb-3">Items Summary</h4>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="bg-gray-1">
                                    <tr>
                                        <th>Product</th>
                                        <th class="text-center">Qty</th>
                                        <th class="text-right">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($order->items as $item)
                                    <tr>
                                        <td>{{ $item->product_name }}</td>
                                        <td class="text-center">{{ $item->quantity }}</td>
                                        <td class="text-right">AED {{ number_format($item->total, 2) }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</main>
<!-- ========== END MAIN CONTENT ========== -->
@include('footer')
</body>

<!-- Mirrored from transvelo.github.io/electro-html/2.0/html/home/home-v3.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Feb 2026 11:04:04 GMT -->

</html>