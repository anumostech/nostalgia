@include('header')

<!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main" class="checkout-page">
    <!-- breadcrumb -->
    <div class="bg-gray-13 bg-md-transparent">
        <div class="container">
            <!-- breadcrumb -->
            <div class="my-md-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="https://transvelo.github.io/electro-html/2.0/html/home/index.html">Home</a></li>
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Checkout</li>
                    </ol>
                </nav>
            </div>
            <!-- End breadcrumb -->
        </div>
    </div>
    <!-- End breadcrumb -->

    <div class="container">
        <div class="mb-5">
            <h1 class="text-center">Checkout</h1>
        </div>
        <!-- Accordion -->
        <div id="shopCartAccordion" class="accordion rounded mb-5">
            <!-- Card -->
            <div class="card border-0">
                <div id="shopCartHeadingOne" class="alert alert-primary mb-0" role="alert">
                    Returning customer? <a href="#" class="alert-link" data-toggle="collapse" data-target="#shopCartOne" aria-expanded="false" aria-controls="shopCartOne">Click here to login</a>
                </div>
                <div id="shopCartOne" class="collapse border border-top-0" aria-labelledby="shopCartHeadingOne" data-parent="#shopCartAccordion" style="">
                    <!-- Form -->
                    <form class="js-validate p-5">
                        <!-- Title -->
                        <div class="mb-5">
                            <p class="text-gray-90 mb-2">Welcome back! Sign in to your account.</p>
                            <p class="text-gray-90">If you have shopped with us before, please enter your details below. If you are a new customer, please proceed to the Billing & Shipping section.</p>
                        </div>
                        <!-- End Title -->

                        <div class="row">
                            <div class="col-lg-6">
                                <!-- Form Group -->
                                <div class="js-form-message form-group">
                                    <label class="form-label" for="signinSrEmailExample3">Email address</label>
                                    <input type="email" class="form-control" name="email" id="signinSrEmailExample3" placeholder="Email address" aria-label="Email address"
                                        data-msg="Please enter a valid email address."
                                        data-error-class="u-has-error"
                                        data-success-class="u-has-success">
                                </div>
                                <!-- End Form Group -->
                            </div>
                            <div class="col-lg-6">
                                <!-- Form Group -->
                                <div class="js-form-message form-group">
                                    <label class="form-label" for="signinSrPasswordExample2">Password</label>
                                    <input type="password" class="form-control" name="password" id="signinSrPasswordExample2" placeholder="********" aria-label="********"
                                        data-msg="Your password is invalid. Please try again."
                                        data-error-class="u-has-error"
                                        data-success-class="u-has-success">
                                </div>
                                <!-- End Form Group -->
                            </div>
                        </div>

                        <!-- Checkbox -->
                        <div class="js-form-message mb-3">
                            <div class="custom-control custom-checkbox d-flex align-items-center">
                                <input type="checkbox" class="custom-control-input" id="rememberCheckbox" name="rememberCheckbox"
                                    data-error-class="u-has-error"
                                    data-success-class="u-has-success">
                                <label class="custom-control-label form-label" for="rememberCheckbox">
                                    Remember me
                                </label>
                            </div>
                        </div>
                        <!-- End Checkbox -->

                        <!-- Button -->
                        <div class="mb-1">
                            <div class="mb-3">
                                <button type="button" class="btn btn-primary-dark-w px-5">Login</button>
                            </div>
                            <div class="mb-2">
                                <a class="text-blue" href="#">Lost your password?</a>
                            </div>
                        </div>
                        <!-- End Button -->
                    </form>
                    <!-- End Form -->
                </div>
            </div>
            <!-- End Card -->
        </div>
        <!-- End Accordion -->

        <!-- Accordion -->
        <div id="shopCartAccordion1" class="accordion rounded mb-6">
            <!-- Card -->
            <div class="card border-0">
                <div id="shopCartHeadingTwo" class="alert alert-primary mb-0" role="alert">
                    Have a coupon? <a href="#" class="alert-link" data-toggle="collapse" data-target="#shopCartTwo" aria-expanded="false" aria-controls="shopCartTwo">Click here to enter your code</a>
                </div>
                <div id="shopCartTwo" class="collapse border border-top-0" aria-labelledby="shopCartHeadingTwo" data-parent="#shopCartAccordion1" style="">
                    <form class="js-validate p-5" novalidate="novalidate">
                        <p class="w-100 text-gray-90">If you have a coupon code, please apply it below.</p>
                        <div class="input-group input-group-pill max-width-660-xl">
                            <input type="text" class="form-control" name="name" placeholder="Coupon code" aria-label="Promo code">
                            <div class="input-group-append">
                                <button type="button" class="btn btn-block btn-dark font-weight-normal btn-pill px-4">
                                    <i class="fas fa-tags d-md-none"></i>
                                    <span class="d-none d-md-inline">Apply coupon</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End Card -->
        </div>
        <!-- End Accordion -->
        <form id="checkoutForm" class="js-validate" method="POST" novalidate>
            @csrf
            <div class="row">
                <div class="col-lg-5 order-lg-2 mb-7 mb-lg-0">
                    <div class="pl-lg-3 ">
                        <div class="bg-gray-1 rounded-lg">
                            <!-- Order Summary -->
                            <div class="p-4 mb-4 checkout-table">
                                <!-- Title -->
                                <div class="border-bottom border-color-1 mb-5">
                                    <h3 class="section-title mb-0 pb-2 font-size-25">Your order</h3>
                                </div>
                                <!-- End Title -->

                                <!-- Product Content -->
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="product-name">Product</th>
                                            <th class="product-total" style="text-align:left;">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $subtotal = 0;
                                        $vat = 0;
                                        $cart = App\Models\Cart::where(function($query) {
                                        if (Auth::check() && !Auth::user()->isAdmin()) {
                                        $query->where('user_id', Auth::id());
                                        } else {
                                        $query->where('session_id', Session::getId());
                                        }
                                        })->first();
                                        $cartItems = $cart ? $cart->items : collect();
                                        @endphp
                                        @foreach($cartItems as $item)
                                        @php
                                        $itemSubtotal = $item->price * $item->quantity;
                                        $subtotal += $itemSubtotal;
                                        $vat += ($itemSubtotal * $item->vat_percentage) / 100;
                                        @endphp
                                        <tr class="cart_item">
                                            <td>{{ $item->product->name }}&nbsp;<strong class="product-quantity">× {{ $item->quantity }}</strong></td>
                                            <td align="right">
                                                <div class="d-flex align-items-center">
                                                    <div class="d-flex align-items-center"><img src="{{  asset('assets/img/dihram.webp') }}" height="15" width="15" /> {{ number_format($itemSubtotal, 2) }}</div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Subtotal</th>
                                            <td align="right">
                                                <div class="d-flex align-items-center"><img src="{{  asset('assets/img/dihram.webp') }}" height="15" width="15" /> {{ number_format($subtotal, 2) }}</div>
                                            </td>
                                        </tr>
                                        <!-- <tr>
                                            <th>Shipping :</th>
                                            <td>Free</td>
                                        </tr> -->
                                        <tr>
                                            <th>VAT :</th>
                                            <td align="right">
                                                <div class="d-flex align-items-center"><img src="{{  asset('assets/img/dihram.webp') }}" height="15" width="15" /> {{ number_format($vat, 2) }}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Total</th>
                                            <td align="right"><strong>
                                                    <div class="d-flex align-items-center">
                                                        <div class="d-flex align-items-center"><img src="{{  asset('assets/img/dihram.webp') }}" height="15" width="15" />{{ number_format($subtotal + $vat, 2) }}</div>
                                                </strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                                <!-- End Product Content -->
                                <div class="border-top border-width-3 border-color-1 pt-3 mb-3">
                                    <!-- Basics Accordion -->
                                    <div id="basicsAccordion1">
                                        <!-- Card -->
                                        <div class="border-bottom border-color-1 border-dotted-bottom">
                                            <div class="p-3" id="basicsHeadingThree">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" id="thirdstylishRadio1" name="stylishRadio" checked>
                                                    <label class="custom-control-label form-label" for="thirdstylishRadio1"
                                                        data-toggle="collapse"
                                                        data-target="#basicsCollapseThree"
                                                        aria-expanded="true"
                                                        aria-controls="basicsCollapseThree">
                                                        Cash on delivery
                                                    </label>
                                                </div>
                                            </div>
                                            <div id="basicsCollapseThree" class="collapse show border-top border-color-1 border-dotted-top bg-dark-lighter"
                                                aria-labelledby="basicsHeadingThree"
                                                data-parent="#basicsAccordion1">
                                                <div class="p-4">
                                                    Pay with cash upon delivery.
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Card -->
                                        <!-- 
                                                <div class="border-bottom border-color-1 border-dotted-bottom">
                                                    <div class="p-3" id="basicsHeadingOne">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" class="custom-control-input" id="stylishRadio1" name="stylishRadio" checked>
                                                            <label class="custom-control-label form-label" for="stylishRadio1"
                                                                data-toggle="collapse"
                                                                data-target="#basicsCollapseOnee"
                                                                aria-expanded="true"
                                                                aria-controls="basicsCollapseOnee">
                                                                Direct bank transfer
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div id="basicsCollapseOnee" class="collapse show border-top border-color-1 border-dotted-top bg-dark-lighter"
                                                        aria-labelledby="basicsHeadingOne"
                                                        data-parent="#basicsAccordion1">
                                                        <div class="p-4">
                                                            Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="border-bottom border-color-1 border-dotted-bottom">
                                                    <div class="p-3" id="basicsHeadingTwo">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" class="custom-control-input" id="secondStylishRadio1" name="stylishRadio">
                                                            <label class="custom-control-label form-label" for="secondStylishRadio1"
                                                                data-toggle="collapse"
                                                                data-target="#basicsCollapseTwo"
                                                                aria-expanded="false"
                                                                aria-controls="basicsCollapseTwo">
                                                                Check payments
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div id="basicsCollapseTwo" class="collapse border-top border-color-1 border-dotted-top bg-dark-lighter"
                                                        aria-labelledby="basicsHeadingTwo"
                                                        data-parent="#basicsAccordion1">
                                                        <div class="p-4">
                                                            Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="border-bottom border-color-1 border-dotted-bottom">
                                                    <div class="p-3" id="basicsHeadingThree">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" class="custom-control-input" id="thirdstylishRadio1" name="stylishRadio">
                                                            <label class="custom-control-label form-label" for="thirdstylishRadio1"
                                                                data-toggle="collapse"
                                                                data-target="#basicsCollapseThree"
                                                                aria-expanded="false"
                                                                aria-controls="basicsCollapseThree">
                                                                Cash on delivery
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div id="basicsCollapseThree" class="collapse border-top border-color-1 border-dotted-top bg-dark-lighter"
                                                        aria-labelledby="basicsHeadingThree"
                                                        data-parent="#basicsAccordion1">
                                                        <div class="p-4">
                                                            Pay with cash upon delivery.
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="border-bottom border-color-1 border-dotted-bottom">
                                                    <div class="p-3" id="basicsHeadingFour">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" class="custom-control-input" id="FourstylishRadio1" name="stylishRadio">
                                                            <label class="custom-control-label form-label" for="FourstylishRadio1"
                                                                data-toggle="collapse"
                                                                data-target="#basicsCollapseFour"
                                                                aria-expanded="false"
                                                                aria-controls="basicsCollapseFour">
                                                                PayPal <a href="#" class="text-blue">What is PayPal?</a>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div id="basicsCollapseFour" class="collapse border-top border-color-1 border-dotted-top bg-dark-lighter"
                                                        aria-labelledby="basicsHeadingFour"
                                                        data-parent="#basicsAccordion1">
                                                        <div class="p-4">
                                                            Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.
                                                        </div>
                                                    </div>
                                                </div>
                                                End Card -->
                                    </div>
                                    <!-- End Basics Accordion -->
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between px-3 mb-5">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck10" name="terms"
                                            data-msg="Please agree terms and conditions."
                                            data-error-class="u-has-error"
                                            data-success-class="u-has-success">
                                        <label class="form-check-label" for="defaultCheck10">
                                            I have read and agree to the website <a href="#" class="text-blue">terms and conditions </a>
                                            <span class="text-danger">*</span>
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary-dark-w btn-block btn-pill font-size-20 mb-3 py-3">Place order</button>
                            </div>
                            <!-- End Order Summary -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 order-lg-1">
                    <div class="pb-7 mb-7">
                        <!-- Title -->
                        <div class="border-bottom border-color-1 mb-5">
                            <h3 class="section-title mb-0 pb-2 font-size-25">Billing details</h3>
                        </div>
                        <!-- End Title -->

                        <!-- Billing Form -->
                        <div class="row">
                            <div class="col-md-6">
                                <!-- Input -->
                                <div class="js-form-message mb-6">
                                    <label class="form-label">
                                        First name
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" name="firstName" placeholder="First name" aria-label="" data-msg="Please enter your first name." data-error-class="u-has-error" data-success-class="u-has-success" autocomplete="off">
                                    @error('firstName')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <!-- End Input -->
                            </div>

                            <div class="col-md-6">
                                <!-- Input -->
                                <div class="js-form-message mb-6">
                                    <label class="form-label">
                                        Last name
                                        <!-- <span class="text-danger">*</span> -->
                                    </label>
                                    <input type="text" class="form-control" name="lastName" placeholder="Last name" aria-label="" data-msg="Please enter your last name." data-error-class="u-has-error" data-success-class="u-has-success">
                                </div>
                                <!-- End Input -->
                            </div>

                            <div class="w-100"></div>

                            <div class="col-md-12">
                                <!-- Input -->
                                <div class="js-form-message mb-6">
                                    <label class="form-label">
                                        Company name (optional)
                                    </label>
                                    <input type="text" class="form-control" name="companyName" placeholder="Company Name" aria-label="Company Name" data-msg="Please enter a company name." data-error-class="u-has-error" data-success-class="u-has-success">
                                </div>
                                <!-- End Input -->
                            </div>

                            <div class="col-md-12">
                                <!-- Input -->
                                <div class="js-form-message mb-6">
                                    <label class="form-label">
                                        Country
                                        <!-- <span class="text-danger">*</span> -->
                                    </label>
                                    <input class="form-control mb-4" type="text" placeholder="" value="UAE" readonly>
                                </div>
                                <!-- End Input -->
                            </div>

                            <div class="col-md-8">
                                <!-- Input -->
                                <div class="js-form-message mb-6">
                                    <label class="form-label">
                                        Street address
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" name="streetAddress" placeholder="Street Address" aria-label="" data-msg="Please enter a valid address." data-error-class="u-has-error" data-success-class="u-has-success">
                                    @error('streetAddress')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <!-- End Input -->
                            </div>

                            <div class="col-md-4">
                                <!-- Input -->
                                <div class="js-form-message mb-6">
                                    <label class="form-label">
                                        Apt, suite, etc.
                                    </label>
                                    <input type="text" class="form-control" placeholder="Apt, suite, etc" aria-label="" data-msg="Please enter a valid address." data-error-class="u-has-error" data-success-class="u-has-success">
                                </div>
                                <!-- End Input -->
                            </div>

                            <div class="col-md-6">
                                <!-- Input -->
                                <div class="js-form-message mb-6">
                                    <label class="form-label">
                                        City
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" name="cityAddress" placeholder="City" aria-label="" data-msg="Please enter a valid address." data-error-class="u-has-error" data-success-class="u-has-success" autocomplete="off">
                                    @error('cityAddress')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <!-- End Input -->
                            </div>

                            <div class="col-md-6">
                                <!-- Input -->
                                <div class="js-form-message mb-6">
                                    <label class="form-label">
                                        Postcode/Zip
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" name="postcode" placeholder="Postcode" aria-label="" data-msg="Please enter a postcode or zip code." data-error-class="u-has-error" data-success-class="u-has-success">
                                    @error('postcode')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <!-- End Input -->
                            </div>

                            <div class="w-100"></div>

                            <div class="col-md-12">
                                <!-- Input -->
                                <div class="js-form-message mb-6">
                                    <label class="form-label">
                                        Emirate
                                        <span class="text-danger">*</span>
                                    </label>
                                    <select class="form-control js-select selectpicker dropdown-select" name="emirate" data-msg="Please select state." data-error-class="u-has-error" data-success-class="u-has-success"
                                        data-live-search="true"
                                        data-style="form-control border-color-1 font-weight-normal">
                                        <option value="">Emirates</option>
                                        <option value="Abu Dhabi">Abu Dhabi</option>
                                        <option value="Dubai">Dubai</option>
                                        <option value="Sharjah">Sharjah</option>
                                        <option value="Ajman">Ajman</option>
                                        <option value="Fujairah">Fujairah</option>
                                        <option value="Umm Al Quwain">Umm Al Quwain</option>
                                        <option value="Ras Al Khaimah">Ras Al Khaimah</option>
                                    </select>
                                    @error('emirate')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <!-- End Input -->
                            </div>

                            <div class="col-md-6">
                                <!-- Input -->
                                <div class="js-form-message mb-6">
                                    <label class="form-label">
                                        Email address
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="email" class="form-control" name="emailAddress" placeholder="Email" aria-label="Email" data-msg="Please enter a valid email address." data-error-class="u-has-error" data-success-class="u-has-success">
                                    @error('emailAddress')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <!-- End Input -->
                            </div>

                            <div class="col-md-6">
                                <!-- Input -->
                                <div class="js-form-message mb-6">
                                    <label class="form-label">
                                        Phone
                                    </label>
                                    <input type="text" class="form-control" name="phone" placeholder="Phone" aria-label="Phone" data-msg="Please enter your last name." data-error-class="u-has-error" data-success-class="u-has-success" value="{{ Auth::check() ? Auth::user()->phone : '' }}">
                                    @error('phone')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <!-- End Input -->
                            </div>

                            <div class="w-100"></div>
                        </div>
                        <!-- End Billing Form -->

                        <!-- Accordion -->
                        <div id="shopCartAccordion2" class="accordion rounded mb-6">
                            <!-- Card -->
                            <div class="card border-0">
                                <div id="shopCartHeadingThree" class="custom-control custom-checkbox d-flex align-items-center">
                                    <input type="checkbox" class="custom-control-input" id="createAnaccount" name="createAnaccount">
                                    <label class="custom-control-label form-label" for="createAnaccount" data-toggle="collapse" data-target="#shopCartThree" aria-expanded="false" aria-controls="shopCartThree">
                                        Create an account?
                                    </label>
                                </div>
                                <div id="shopCartThree" class="collapse" aria-labelledby="shopCartHeadingThree" data-parent="#shopCartAccordion2" style="">
                                    <!-- Form Group -->
                                    <div class="js-form-message form-group py-5">
                                        <label class="form-label" for="signinSrPasswordExample1">
                                            Create account password
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="position-relative">
                                            <input type="password" class="form-control js-password" name="password" id="signinSrPasswordExample1" placeholder="Secure your account with a password" aria-label="********"
                                                data-msg="Enter password."
                                                data-error-class="u-has-error"
                                                data-success-class="u-has-success">
                                            <span class="js-toggle-password position-absolute" style="right: 15px; top: 12px; cursor: pointer;">
                                                <i class="fas fa-eye text-muted"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- End Form Group -->
                                </div>
                            </div>
                            <!-- End Card -->
                        </div>
                        <!-- End Accordion -->
                        <!-- Title -->
                        <div class="border-bottom border-color-1 mb-5">
                            <h3 class="section-title mb-0 pb-2 font-size-25">Shipping Details</h3>
                        </div>
                        <!-- End Title -->
                        <!-- Accordion -->
                        <div id="shopCartAccordion3" class="accordion rounded mb-5">
                            <!-- Card -->
                            <div class="card border-0">
                                <div id="shopCartHeadingFour" class="custom-control custom-checkbox d-flex align-items-center">
                                    <input type="checkbox" class="custom-control-input" id="shippingdiffrentAddress" name="shippingdiffrentAddress">
                                    <label class="custom-control-label form-label" for="shippingdiffrentAddress" data-toggle="collapse" data-target="#shopCartfour" aria-expanded="false" aria-controls="shopCartfour">
                                        Ship to a different address?
                                    </label>
                                </div>
                                <div id="shopCartfour" class="collapse mt-5" aria-labelledby="shopCartHeadingFour" data-parent="#shopCartAccordion3" style="">
                                    <!-- Shipping Form -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <!-- Input -->
                                            <div class="js-form-message mb-6">
                                                <label class="form-label">
                                                    First name
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="text" class="form-control" name="shipping_firstName" placeholder="First name" aria-label="" data-msg="Please enter your frist name." data-error-class="u-has-error" data-success-class="u-has-success" autocomplete="off">
                                            </div>
                                            <!-- End Input -->
                                        </div>

                                        <div class="col-md-6">
                                            <!-- Input -->
                                            <div class="js-form-message mb-6">
                                                <label class="form-label">
                                                    Last name
                                                    <!-- <span class="text-danger">*</span> -->
                                                </label>
                                                <input type="text" class="form-control" name="shipping_lastName" placeholder="Last name" aria-label="" data-msg="Please enter your last name." data-error-class="u-has-error" data-success-class="u-has-success">
                                            </div>
                                            <!-- End Input -->
                                        </div>

                                        <div class="w-100"></div>

                                        <div class="col-md-12">
                                            <!-- Input -->
                                            <div class="js-form-message mb-6">
                                                <label class="form-label">
                                                    Company name (optional)
                                                </label>
                                                <input type="text" class="form-control" name="shipping_companyName" placeholder="Company Name" aria-label="Company Name" data-msg="Please enter a company name." data-error-class="u-has-error" data-success-class="u-has-success">
                                            </div>
                                            <!-- End Input -->
                                        </div>

                                        <div class="col-md-12">
                                            <!-- Input -->
                                            <div class="js-form-message mb-6">
                                                <label class="form-label">
                                                    Country
                                                    <!-- <span class="text-danger">*</span> -->
                                                </label>
                                                <!-- <select name="shipping_country" class="form-control js-select selectpicker dropdown-select"  data-msg="Please select country." data-error-class="u-has-error" data-success-class="u-has-success"
                                                    data-live-search="true"
                                                    data-style="form-control border-color-1 font-weight-normal">
                                                    <option value="">Select country</option>
                                                    <option value="AF">Afghanistan</option>
                                                    <option value="AX">Åland Islands</option>
                                                    <option value="AL">Albania</option>
                                                    <option value="DZ">Algeria</option>
                                                </select> -->
                                                <input class="form-control mb-4" type="text" placeholder="" value="UAE" name="shipping_country" readonly>
                                            </div>
                                            <!-- End Input -->
                                        </div>

                                        <div class="col-md-8">
                                            <!-- Input -->
                                            <div class="js-form-message mb-6">
                                                <label class="form-label">
                                                    Street address
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="text" class="form-control" name="shipping_streetAddress" placeholder="Address" aria-label="" data-msg="Please enter a valid address." data-error-class="u-has-error" data-success-class="u-has-success">
                                            </div>
                                            <!-- End Input -->
                                        </div>

                                        <div class="col-md-4">
                                            <!-- Input -->
                                            <div class="js-form-message mb-6">
                                                <label class="form-label">
                                                    Apt, suite, etc.
                                                </label>
                                                <input type="text" class="form-control" name="shipping_apartment" placeholder="Apt, suite, etc." aria-label="" data-msg="Please enter a valid address." data-error-class="u-has-error" data-success-class="u-has-success">
                                            </div>
                                            <!-- End Input -->
                                        </div>

                                        <div class="col-md-6">
                                            <!-- Input -->
                                            <div class="js-form-message mb-6">
                                                <label class="form-label">
                                                    City
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="text" class="form-control" name="shipping_cityAddress" placeholder="City" aria-label="" data-msg="Please enter a valid address." data-error-class="u-has-error" data-success-class="u-has-success" autocomplete="off">
                                            </div>
                                            <!-- End Input -->
                                        </div>

                                        <div class="col-md-6">
                                            <!-- Input -->
                                            <div class="js-form-message mb-6">
                                                <label class="form-label">
                                                    Postcode/Zip
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="text" class="form-control" name="shipping_postcode" placeholder="Postcode" aria-label="99999" data-msg="Please enter a Postcode or zip code." data-error-class="u-has-error" data-success-class="u-has-success">
                                            </div>
                                            <!-- End Input -->
                                        </div>

                                        <div class="w-100"></div>

                                        <div class="col-md-12">
                                            <!-- Input -->
                                            <div class="js-form-message mb-6">
                                                <label class="form-label">
                                                    Emirate
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <select class="form-control js-select selectpicker dropdown-select" name="shipping_emirate" data-msg="Please select state." data-error-class="u-has-error" data-success-class="u-has-success"
                                                    data-live-search="true"
                                                    data-style="form-control border-color-1 font-weight-normal">
                                                    <option value="">Emirates</option>
                                                    <option value="Abu Dhabi">Abu Dhabi</option>
                                                    <option value="Dubai">Dubai</option>
                                                    <option value="Sharjah">Sharjah</option>
                                                    <option value="Ajman">Ajman</option>
                                                    <option value="Fujairah">Fujairah</option>
                                                    <option value="Umm Al Quwain">Umm Al Quwain</option>
                                                    <option value="Ras Al Khaimah">Ras Al Khaimah</option>
                                                </select>
                                                @error('emirate')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <!-- End Input -->
                                        </div>

                                        <div class="col-md-6">
                                            <!-- Input -->
                                            <div class="js-form-message mb-6">
                                                <label class="form-label">
                                                    Email address
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="email" class="form-control" name="shipping_emailAddress" placeholder="Email" aria-label="Email" data-msg="Please enter a valid email address." data-error-class="u-has-error" data-success-class="u-has-success">
                                            </div>
                                            <!-- End Input -->
                                        </div>

                                        <div class="col-md-6">
                                            <!-- Input -->
                                            <div class="js-form-message mb-6">
                                                <label class="form-label">
                                                    Phone
                                                </label>
                                                <input type="text" class="form-control" name="shipping_phone" placeholder="Phone" aria-label="Phone" data-msg="Please enter your last name." data-error-class="u-has-error" data-success-class="u-has-success">
                                            </div>
                                            <!-- End Input -->
                                        </div>

                                        <div class="w-100"></div>
                                    </div>
                                    <!-- End Shipping Form -->
                                </div>
                            </div>
                            <!-- End Card -->
                        </div>
                        <!-- End Accordion -->
                        <!-- Input -->
                        <div class="js-form-message mb-6">
                            <label class="form-label">
                                Order notes (optional)
                            </label>

                            <div class="input-group">
                                <textarea class="form-control p-5" rows="4" name="text" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                            </div>
                        </div>
                        <!-- End Input -->
                        <button type="submit" class="d-lg-none btn btn-primary-dark-w btn-block btn-pill font-size-20 mb-3 py-3">Place order</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</main>
@include('footer')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const toggles = document.querySelectorAll('.js-toggle-password');
    toggles.forEach(toggle => {
        toggle.addEventListener('click', function() {
            const input = this.parentElement.querySelector('.js-password');
            const icon = this.querySelector('i');
            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                input.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        });
    });
});
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {

        const $form = $('#checkoutForm');

        if (!$form.length) return;

        function scrollToFirstError() {

            setTimeout(function() {

                let $firstError = $form.find('.is-invalid:visible').first();

                if ($firstError.length) {

                    $('html, body').animate({
                        scrollTop: $firstError.offset().top - 120
                    }, 400);

                    $firstError.focus();
                }

            }, 100);
        }

        $form.validate({

            ignore: ":hidden",

            errorClass: "is-invalid",

            errorElement: "div",

            errorPlacement: function(error, element) {

                error.addClass('invalid-feedback');

                if (element.closest('.js-form-message').length) {
                    element.closest('.js-form-message').append(error);
                } else {
                    element.after(error);
                }
            },

            highlight: function(element) {
                $(element).addClass('is-invalid');
            },

            unhighlight: function(element) {
                $(element).removeClass('is-invalid');
            },

            rules: {
                firstName: {
                    required: true
                },
                streetAddress: {
                    required: true
                },
                cityAddress: {
                    required: true
                },
                postcode: {
                    required: true
                },
                emirate: {
                    required: true
                },
                emailAddress: {
                    required: true,
                    email: true
                },
                terms: {
                    required: true
                }
            },

            messages: {
                firstName: "First name is required",
                streetAddress: "Street address is required",
                cityAddress: "City is required",
                postcode: "Postcode is required",
                emirate: "Please select emirate",
                emailAddress: {
                    required: "Email is required",
                    email: "Enter a valid email address"
                },
                terms: "Please accept terms and conditions"
            },

            invalidHandler: function() {
                scrollToFirstError();
            },

            submitHandler: function(form) {

                const $submitBtn = $(form).find('button[type="submit"]');
                const originalText = $submitBtn.html();

                $submitBtn.prop('disabled', true)
                    .html('<i class="fas fa-spinner fa-spin mr-2"></i> Processing...');

                const formData = new FormData(form);

                axios.post('{{ route(\App\Constants\RouteNames::CHECKOUT_PROCESS) }}', formData)
                    .then(function(response) {

                        if (response.data.success) {

                            if (response.data.redirect_url) {
                                window.location.href = response.data.redirect_url;
                            } else {
                                window.location.href = "/";
                            }

                        } else {
                            throw new Error(response.data.message);
                        }

                    })
                    .catch(function(error) {

                        $submitBtn.prop('disabled', false).html(originalText);

                        $('.server-error-msg').remove();

                        if (error.response && error.response.status === 422) {

                            const errors = error.response.data.errors;

                            Object.keys(errors).forEach(function(field) {

                                const $input = $('[name="' + field + '"]');

                                if ($input.length) {

                                    $input.addClass('is-invalid');

                                    if (!$input.next('.invalid-feedback').length) {
                                        $input.after('<div class="invalid-feedback server-error-msg" style="display:block;">' + errors[field][0] + '</div>');
                                    }
                                }
                            });

                            scrollToFirstError();

                        } else {

                            alert(
                                error.response?.data?.message ||
                                "Something went wrong. Please try again."
                            );
                        }

                    });

                return false; 
            }
        });

    });
</script>
<!-- ========== END MAIN CONTENT ========== -->
</body>

</html>