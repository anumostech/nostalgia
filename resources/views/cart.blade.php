@include('header')

<!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main" class="cart-page">
    <!-- breadcrumb -->
    <div class="bg-gray-13 bg-md-transparent">
        <div class="container">
            <!-- breadcrumb -->
            <div class="my-md-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="https://transvelo.github.io/electro-html/2.0/html/home/index.html">Home</a></li>
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Cart</li>
                    </ol>
                </nav>
            </div>
            <!-- End breadcrumb -->
        </div>
    </div>
    <!-- End breadcrumb -->

    <div class="container">
        <div class="mb-4">
            <h1 class="text-center">Cart</h1>
        </div>
        <div class="mb-10 cart-table">
            @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            @if($cartItems->count() > 0 && $subtotal < $threshold)
                <div class="alert alert-primary d-flex align-items-center" style="color:#000;">
                <i class="fas fa-info-circle mr-2"></i>
                <p style="margin:0;">Your cart total is <img src="{{  asset('assets/img/dihram.webp') }}" height="18" width="17" /> {{ number_format($subtotal, 2) }}. You need a minimum of <img src="{{  asset('assets/img/dihram.webp') }}" height="18" width="17" /><strong> {{ number_format($threshold, 2) }}</strong> to proceed to checkout.</div>
        </div>
        @endif
        @if($cartItems->count() > 0)
        <div id="cart-content-wrapper">
            <table class="table" cellspacing="0">
                <thead>
                    <tr>
                        <th class="product-remove">&nbsp;</th>
                        <th class="product-thumbnail">&nbsp;</th>
                        <th class="product-name">Product</th>
                        <th class="product-price">Price</th>
                        <th class="product-quantity w-lg-15">Quantity</th>
                        <th class="product-subtotal">Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cartItems as $item)
                    <tr class="" data-cart-item-id="{{ $item->id }}">
                        <td class="text-center">
                            <a href="{{ route(\App\Constants\RouteNames::CART_REMOVE, $item->id) }}" class="text-gray-32 font-size-26 cart-remove-link">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3 6H21" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                    <path d="M8 6V4H16V6" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                    <path d="M6 6L7 20H17L18 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                    <path d="M10 11V17" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                    <path d="M14 11V17" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                </svg>
                            </a>
                        </td>
                        <td class="d-none d-md-table-cell">
                            <a href="{{ route(\App\Constants\RouteNames::PRODUCT_SHOW, $item->product->id) }}">
                                <img class="img-fluid max-width-100 p-1 border border-color-1" src="{{ asset('storage/products/' . $item->product->image) }}" alt="{{ $item->product->name }}">
                            </a>
                        </td>

                        <td data-title="Product">
                            <a href="{{ route(\App\Constants\RouteNames::PRODUCT_SHOW, $item->product->id) }}" class="text-gray-90">{{ $item->product->name }}</a>
                        </td>

                        <td data-title="Price">
                            <span class="">
                                <div class="d-flex align-items-center"><img src="{{  asset('assets/img/dihram.webp') }}" height="20" width="20" />{{ number_format($item->price, 2) }}</div>
                            </span>
                        </td>

                        <td data-title="Quantity">
                            <span class="sr-only">Quantity</span>
                            <!-- Quantity -->
                            <div class="border rounded-pill py-1 w-xl-80 px-1 border-color-1">
                                <div class="js-quantity row align-items-center">
                                    <div class="col d-flex align-items-center justify-content-center">
                                        <a class="btn btn-icon btn-xs btn-outline-secondary rounded-circle border-0 update-cart-qty d-flex align-items-center justify-content-center"
                                            href="javascript:;" data-action="decrement" data-cart-item-id="{{ $item->id }}">
                                            <small class="fas {{ $item->quantity == 1 ? 'fa-trash' : 'fa-minus' }} btn-icon__inner"></small>
                                        </a>
                                        <span class="mx-2 font-weight-bold qty-display-{{ $item->id }}">{{ $item->quantity }}</span>
                                        <a class="btn btn-icon btn-xs btn-outline-secondary rounded-circle border-0 update-cart-qty d-flex align-items-center justify-content-center"
                                            href="javascript:;" data-action="increment" data-cart-item-id="{{ $item->id }}">
                                            <small class="fas fa-plus btn-icon__inner"></small>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Quantity -->
                        </td>

                        <td data-title="Total">
                            <span class="">
                                <div class="d-flex align-items-center"><img src="{{  asset('assets/img/dihram.webp') }}" height="20" width="20" /><span class="item-total-{{ $item->id }}">{{ number_format($item->price * $item->quantity, 2) }}</span></div>
                            </span>
                        </td>
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="6" class="border-top space-top-2 justify-content-center">
                            <div class="pt-md-3">
                                <div class="d-block d-md-flex flex-center-between">
                                    <div class="mb-3 mb-md-0 w-xl-40">
                                        <!-- Apply coupon Form (Placeholder) -->
                                        <div class="js-focus-state">
                                            <label class="sr-only" for="couponCode">Coupon code</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="coupon" id="couponCode" placeholder="Coupon code">
                                                <div class="input-group-append">
                                                    <button class="btn btn-block btn-dark px-4" type="button"><span class="d-none d-md-inline">Apply coupon</span></button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Apply coupon Form -->
                                    </div>
                                    <div class="d-md-flex" id="checkout-buttons-container">
                                        @if($subtotal >= $threshold)
                                        <a href="{{ route(\App\Constants\RouteNames::CHECKOUT) }}" class="btn btn-primary-dark-w ml-md-2 px-5 px-md-4 px-lg-5 w-100 w-md-auto">Proceed to checkout</a>
                                        @else
                                        <button type="button" class="btn btn-secondary ml-md-2 px-5 px-md-4 px-lg-5 w-100 w-md-auto" disabled title="Minimum threshold not met">Proceed to checkout</button>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        @else
        <div class="text-center py-5">
            <img src="{{  asset('assets/img/cart-empty.png') }}" alt="Empty Cart" style="width:130px;height:100px;" />
            <h3>Your cart is empty</h3>
            <a href="{{ route(\App\Constants\RouteNames::PRODUCT_LIST) }}" class="btn btn-primary-dark-w mt-4">Go to Shop</a>
        </div>
        @endif
    </div>

    @if($cartItems->count() > 0)
    <div class="mb-8 cart-total">
        <div class="row">
            <div class="col-xl-5 col-lg-6 offset-lg-6 offset-xl-7 col-md-8 offset-md-4">
                <div class="border-bottom border-color-1 mb-3">
                    <h3 class="d-inline-block section-title mb-0 pb-2 font-size-26">Cart totals</h3>
                </div>
                <table class="table mb-3 mb-md-0">
                    <tbody>
                        <tr class="cart-subtotal">
                            <th>Subtotal</th>
                            <td data-title="Subtotal" align="right">
                                <span class="amount">
                                    <div class="d-flex align-items-center"><img src="{{  asset('assets/img/dihram.webp') }}" height="15" width="15" /><span id="subtotal-display">{{ number_format($subtotal, 2) }}</span></div>
                                </span>
                            </td>
                        </tr>
                        <tr class="shipping">
                            <!-- <th>Shipping</th> -->
                            <th>VAT (5%)</th>
                            <td data-title="Shipping" align="right">
                                <span class="amount">
                                    <div class="d-flex align-items-center"><img src="{{  asset('assets/img/dihram.webp') }}" height="15" width="15" /><span id="vat-display">{{ number_format($vat, 2) }}</span></div>
                                </span>
                                <!-- <div class="d-inline-flex align-items-center">VAT (5%) : <img src="{{  asset('assets/img/dihram.webp') }}" height="12" width="12" /></div>
                                    <br><div class="d-inline-flex align-items-center">Shipping : Free</div> -->
                                <!-- <div class="mt-1">
                                        <a class="font-size-12 text-gray-90 text-decoration-on underline-on-hover font-weight-bold mb-3 d-inline-block" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                            Calculate Shipping
                                        </a>
                                        <div class="collapse mb-3" id="collapseExample">
                                            <div class="form-group mb-4">
                                                <input class="form-control mb-4" type="text" placeholder="" value="UAE" readonly>
                                            </div>
                                            <div class="form-group mb-4">
                                                <select class="js-select selectpicker dropdown-select right-dropdown-0-all w-100"
                                                    data-style="bg-white font-weight-normal border border-color-1 text-gray-20">
                                                    <option value="">Emirates</option>
                                                    <option value="Abu Dhabi">Abu Dhabi</option>
                                                    <option value="Dubai">Dubai</option>
                                                    <option value="Sharjah">Sharjah</option>
                                                    <option value="Ajman">Ajman</option>
                                                    <option value="Fujairah">Fujairah</option>
                                                    <option value="Umm Al Quwain">Umm Al Quwain</option>
                                                    <option value="Ras Al Khaimah">Ras Al Khaimah</option>
                                                </select>
                                            </div>
                                            <input class="form-control mb-4" type="text" placeholder="Postcode / ZIP">
                                            <button type="button" class="btn btn-soft-secondary mb-3 mb-md-0 font-weight-normal px-5 px-md-4 px-lg-5 w-100 w-md-auto">Update Totals</button>
                                        </div>
                                    </div> -->
                            </td>
                        </tr>
                        <tr class="order-total">
                            <th>Total</th>
                            <td data-title="Total" align="right"><strong><span class="amount">
                                        <div class="d-flex align-items-center"><img src="{{  asset('assets/img/dihram.webp') }}" height="15" width="15" /><span id="total-display">{{ number_format($total, 2) }}</span></div>
                                    </span></strong></td>
                        </tr>
                    </tbody>
                </table>
                @if($subtotal >= $threshold)
                <a href="{{ route(\App\Constants\RouteNames::CHECKOUT) }}" class="btn btn-primary-dark-w ml-md-2 px-5 px-md-4 px-lg-5 w-100 w-md-auto d-none d-md-inline-block mt-4">Proceed to checkout</a>
                <a href="{{ route(\App\Constants\RouteNames::CHECKOUT) }}" class="btn btn-primary-dark-w ml-md-2 px-5 px-md-4 px-lg-5 w-100 w-md-auto d-md-none">Proceed to checkout</a>
                @else
                <button type="button" class="btn btn-secondary ml-md-2 px-5 px-md-4 px-lg-5 w-100 w-md-auto d-none d-md-inline-block mt-4" disabled>Proceed to checkout</button>
                <button type="button" class="btn btn-secondary ml-md-2 px-5 px-md-4 px-lg-5 w-100 w-md-auto d-md-none" disabled>Proceed to checkout</button>
                @endif
            </div>
        </div>
    </div>
    @endif
    </div>
</main>

<!-- ========== END MAIN CONTENT ========== -->
@include('footer')
</body>

<!-- Mirrored from transvelo.github.io/electro-html/2.0/html/home/home-v3.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Feb 2026 11:04:04 GMT -->

</html>