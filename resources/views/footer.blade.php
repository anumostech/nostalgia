    <!-- ========== FOOTER ========== -->
    <footer>
        <!-- Footer-top-widget -->
        <div class="container d-none d-lg-block mb-3">
            <div class="row">

                <div class="col-wd-3 col-lg-4">
                    <div class="widget-column">
                        <div class="border-bottom border-color-1 mb-5">
                            <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Featured Products</h3>
                        </div>
                        <ul class="list-unstyled products-group">
                            @foreach($featuredProducts as $product)
                            <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                                <div class="col-auto">
                                    <a href="{{ route(\App\Constants\RouteNames::PRODUCT_SHOW, [ 'product_id' => $product->id ]) }}" class="d-block width-75 text-center">
                                        <img class="img-fluid"
                                            src="{{ asset('storage/products/'.$product->image) }}"
                                            alt="{{ $product->name }}">
                                    </a>
                                </div>

                                <div class="col pl-4 d-flex flex-column">
                                    <h5 class="product-item__title mb-0">
                                        <a href="{{ route(\App\Constants\RouteNames::PRODUCT_SHOW, [ 'product_id' => $product->id ]) }}"
                                            class="text-blue font-weight-bold">
                                            {{ $product->name }}
                                        </a>
                                    </h5>

                                    <div class="prodcut-price mt-auto">
                                        <div class="font-size-15">
                                            <div class="d-flex align-items-center"><img src="{{  asset('assets/img/dihram.webp') }}" height="20" width="20" /> {{ number_format($product->price, 2) }}</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>

                    </div>
                </div>
                <div class="col-wd-3 col-lg-4">
                    <div class="border-bottom border-color-1 mb-5">
                        <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">On Sale Products</h3>
                    </div>
                    <ul class="list-unstyled products-group">
                        @foreach($onSaleProducts as $product)
                        <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                            <div class="col-auto">
                                <a href="{{ route(\App\Constants\RouteNames::PRODUCT_SHOW, [ 'product_id' => $product->id ]) }}" class="d-block width-75 text-center">
                                    <img class="img-fluid"
                                        src="{{ asset('storage/products/'.$product->image) }}"
                                        alt="{{ $product->name }}">
                                </a>
                            </div>

                            <div class="col pl-4 d-flex flex-column">
                                <h5 class="product-item__title mb-0">
                                    <a href="{{ route(\App\Constants\RouteNames::PRODUCT_SHOW, [ 'product_id' => $product->id ]) }}"
                                        class="text-blue font-weight-bold">
                                        {{ $product->name }}
                                    </a>
                                </h5>

                                <div class="prodcut-price mt-auto">
                                    <div class="font-size-15">
                                        <div class="d-flex align-items-center"><img src="{{  asset('assets/img/dihram.webp') }}" height="20" width="20" /> {{ number_format($product->price, 2) }}</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>

                </div>
                <div class="col-wd-3 col-lg-4">
                    <div class="border-bottom border-color-1 mb-5">
                        <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Top Rated Products</h3>
                    </div>
                    <ul class="list-unstyled products-group">
                        @foreach($topRatedProducts as $product)
                        <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                            <div class="col-auto">
                                <a href="{{ route(\App\Constants\RouteNames::PRODUCT_SHOW, [ 'product_id' => $product->id ]) }}" class="d-block width-75 text-center">
                                    <img class="img-fluid"
                                        src="{{ asset('storage/products/'.$product->image) }}"
                                        alt="{{ $product->name }}">
                                </a>
                            </div>

                            <div class="col pl-4 d-flex flex-column">
                                <h5 class="product-item__title mb-0">
                                    <a href="{{ route(\App\Constants\RouteNames::PRODUCT_SHOW, [ 'product_id' => $product->id ]) }}"
                                        class="text-blue font-weight-bold">
                                        {{ $product->name }}
                                    </a>
                                </h5>

                                <div class="prodcut-price mt-auto">
                                    <div class="font-size-15">
                                        <div class="d-flex align-items-center"><img src="{{  asset('assets/img/dihram.webp') }}" height="20" width="20" /> {{ number_format($product->price, 2) }}</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>

                </div>
                <div class="col-wd-3 d-none d-wd-block">
                    <a href="products.php" class="d-block"><img class="img-fluid" src="{{ asset('assets/img/img5.webp') }}" alt="Image Description"></a>
                </div>
            </div>
        </div>
        <!-- End Footer-top-widget -->
        <!-- Footer-newsletter -->
        <div class="bg-primary py-3">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 mb-md-3 mb-lg-0">
                        <div class="row align-items-center">
                            <div class="col-auto flex-horizontal-center">
                                <i class="ec ec-newsletter font-size-40"></i>
                                <h2 class="font-size-20 mb-0 ml-3">Sign up to Newsletter</h2>
                            </div>
                            <div class="col my-4 my-md-0">
                                <!--<h5 class="font-size-15 ml-4 mb-0">...and receive <strong>AED20 coupon for first shopping.</strong></h5>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <!-- Subscribe Form -->
                        <form class="js-validate js-form-message">
                            <label class="sr-only" for="subscribeSrEmail">Email address</label>
                            <div class="input-group input-group-pill">
                                <input type="email" class="form-control border-0 height-40" name="email" id="subscribeSrEmail" placeholder="Email address" aria-label="Email address" aria-describedby="subscribeButton" required
                                    data-msg="Please enter a valid email address.">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-dark btn-sm-wide height-40 py-2" id="subscribeButton">Sign Up</button>
                                </div>
                            </div>
                        </form>
                        <!-- End Subscribe Form -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer-newsletter -->
        <!-- Footer-bottom-widgets -->
        <div class="pt-8 pb-4 bg-gray-13">
            <div class="container mt-1">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="mb-6">
                            <a href="{{ route(\App\Constants\RouteNames::HOME) }}" class="d-inline-block">
                                <img src="{{ asset('assets/img/logo/logo.png') }}" alt="logo-img" />
                            </a>
                        </div>
                        <div class="mb-4">
                            <div class="row no-gutters">
                                <div class="col-auto">
                                    <i class="ec ec-support text-primary font-size-56"></i>
                                </div>
                                <div class="col pl-3">
                                    <div class="font-size-13 font-weight-light">Got questions? Call us 24/7!</div>
                                    <a href="tel:+80080018588" class="font-size-20 text-gray-90">+971 67 152 229</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-12 col-md mb-4 mb-md-0 mb-3 d-flex align-items-center">
                                <!--<h6 class="mb-3 font-weight-bold">Find it Fast</h6>-->
                                <!-- List Group -->
                                <ul class="list-group list-group-flush list-group-borderless mb-0 list-group-transparent">
                                    <li><a class="list-group-item list-group-item-action" href="{{ route(\App\Constants\RouteNames::HOME) }}">Home</a></li>
                                    <li><a class="list-group-item list-group-item-action" href="{{ route(\App\Constants\RouteNames::ABOUT) }}">About Us</a></li>
                                    <li><a class="list-group-item list-group-item-action" href="{{ route(\App\Constants\RouteNames::CONTACT) }}">Contact Us</a></li>
                                </ul>
                                <!-- End List Group -->
                            </div>

                            <div class="col-12 col-md mb-4 mb-md-0 d-flex align-items-center">
                                <!-- List Group -->
                                <ul class="list-group list-group-flush list-group-borderless mb-0 list-group-transparent">
                                    <li><a class="list-group-item list-group-item-action" href="{{ route(\App\Constants\RouteNames::PRIVACY) }}">Privacy</a></li>
                                    <li><a class="list-group-item list-group-item-action" href="{{ route(\App\Constants\RouteNames::FAQ) }}">FAQ</a></li>
                                    <li><a class="list-group-item list-group-item-action" href="{{ route(\App\Constants\RouteNames::TERMS_AND_CONDITIONS ) }}">Terms Of Use</a></li>
                                </ul>
                                <!-- End List Group -->
                            </div>

                            <div class="col-12 col-md mb-4 mb-md-0 d-flex align-items-center">
                                <div>
                                    <div class="mb-4">
                                        <h6 class="mb-1 font-weight-bold">Contact info</h6>
                                        <address class="">
                                            Al Sajaah Industrial Area-Sharjah
                                        </address>
                                    </div>
                                    <div class="my-4 my-md-4">
                                        <ul class="list-inline mb-0 opacity-7">
                                            <li class="list-inline-item mr-0">
                                                <a class="btn font-size-20 btn-icon btn-soft-dark btn-bg-transparent rounded-circle" href="#">
                                                    <span class="fab fa-facebook-f btn-icon__inner"></span>
                                                </a>
                                            </li>
                                            <li class="list-inline-item mr-0">
                                                <a class="btn font-size-20 btn-icon btn-soft-dark btn-bg-transparent rounded-circle" href="http://instagram.com/nostalgiasweets.ae">
                                                    <span class="fab fa-instagram btn-icon__inner"></span>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>

                                <!-- End List Group -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer-bottom-widgets -->
        <!-- Footer-copy-right -->
        <div class="bg-gray-14 py-2">
            <div class="container">
                <div class="flex-center-between d-block d-md-flex">
                    <div class="mb-3 mb-md-0">© <a href="{{ route(\App\Constants\RouteNames::HOME) }}" class="font-weight-bold text-gray-90">Nostalgia</a> - All rights Reserved</div>
                    <div class="text-md-right">
                        <span class="d-inline-block bg-white border rounded p-1">
                            <img class="max-width-5" src="../../assets/img/100X60/img1.jpg" alt="Image Description">
                        </span>
                        <span class="d-inline-block bg-white border rounded p-1">
                            <img class="max-width-5" src="../../assets/img/100X60/img2.jpg" alt="Image Description">
                        </span>
                        <span class="d-inline-block bg-white border rounded p-1">
                            <img class="max-width-5" src="../../assets/img/100X60/img3.jpg" alt="Image Description">
                        </span>
                        <span class="d-inline-block bg-white border rounded p-1">
                            <img class="max-width-5" src="../../assets/img/100X60/img4.jpg" alt="Image Description">
                        </span>
                        <span class="d-inline-block bg-white border rounded p-1">
                            <img class="max-width-5" src="../../assets/img/100X60/img5.jpg" alt="Image Description">
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer-copy-right -->
    </footer>
    <!-- ========== END FOOTER ========== -->

    <!-- Go to Top -->
    <a class="js-go-to u-go-to" href="#"
        data-position='{"bottom": 15, "right": 15 }'
        data-type="fixed"
        data-offset-top="400"
        data-compensation="#header"
        data-show-effect="slideInUp"
        data-hide-effect="slideOutDown">
        <span class="fas fa-arrow-up u-go-to__inner"></span>
    </a>
    <!-- End Go to Top -->

    <!-- JS Global Compulsory -->
    <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-migrate/dist/jquery-migrate.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/bootstrap.min.js') }}"></script>


    <!-- JS Implementing Plugins -->
    <script src="{{ asset('assets/vendor/appear.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/hs-megamenu/src/hs.megamenu.js') }}"></script>
    <script src="{{ asset('assets/vendor/svg-injector/dist/svg-injector.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-validation/dist/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/fancybox/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/ion-rangeslider/js/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/typed.js/lib/typed.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/slick-carousel/slick/slick.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>

    <!-- JS Electro -->
    <script src="{{ asset('assets/js/hs.core.js') }}"></script>
    <script src="{{ asset('assets/js/components/hs.countdown.js') }}"></script>
    <script src="{{ asset('assets/js/components/hs.header.js') }}"></script>
    <script src="{{ asset('assets/js/components/hs.hamburgers.js') }}"></script>
    <script src="{{ asset('assets/js/components/hs.unfold.js') }}"></script>
    <script src="{{ asset('assets/js/components/hs.focus-state.js') }}"></script>
    <script src="{{ asset('assets/js/components/hs.malihu-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/js/components/hs.validation.js') }}"></script>
    <script src="{{ asset('assets/js/components/hs.fancybox.js') }}"></script>
    <script src="{{ asset('assets/js/components/hs.onscroll-animation.js') }}"></script>
    <script src="{{ asset('assets/js/components/hs.slick-carousel.js') }}"></script>
    <script src="{{ asset('assets/js/components/hs.range-slider.js') }}"></script>
    <script src="{{ asset('assets/js/components/hs.show-animation.js') }}"></script>
    <script src="{{ asset('assets/js/components/hs.svg-injector.js') }}"></script>
    <script src="{{ asset('assets/js/components/hs.go-to.js') }}"></script>
    <script src="{{ asset('assets/js/components/hs.selectpicker.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- JS Plugins Init. -->
    <script>
        $(window).on('load', function() {
            // initialization of HSMegaMenu component
            $('.js-mega-menu').HSMegaMenu({
                event: 'hover',
                direction: 'horizontal',
                pageContainer: $('.container'),
                breakpoint: 767.98,
                hideTimeOut: 0
            });
        });

        $(document).on('ready', function() {
            // initialization of header
            $.HSCore.components.HSHeader.init($('#header'));

            // initialization of animation
            $.HSCore.components.HSOnScrollAnimation.init('[data-animation]');

            // initialization of unfold component
            $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
                afterOpen: function() {
                    $(this).find('input[type="search"]').focus();
                }
            });

            // initialization of popups
            $.HSCore.components.HSFancyBox.init('.js-fancybox');

            // initialization of countdowns
            var countdowns = $.HSCore.components.HSCountdown.init('.js-countdown', {
                yearsElSelector: '.js-cd-years',
                monthsElSelector: '.js-cd-months',
                daysElSelector: '.js-cd-days',
                hoursElSelector: '.js-cd-hours',
                minutesElSelector: '.js-cd-minutes',
                secondsElSelector: '.js-cd-seconds'
            });

            // initialization of malihu scrollbar
            $.HSCore.components.HSMalihuScrollBar.init($('.js-scrollbar'));

            // initialization of forms
            $.HSCore.components.HSFocusState.init();

            // initialization of form validation
            $.HSCore.components.HSValidation.init('.js-validate', {
                rules: {
                    confirmPassword: {
                        equalTo: '#signupPassword'
                    }
                }
            });

            // initialization of show animations
            $.HSCore.components.HSShowAnimation.init('.js-animation-link');

            // initialization of fancybox
            $.HSCore.components.HSFancyBox.init('.js-fancybox');

            // initialization of slick carousel
            $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

            // initialization of forms
            $.HSCore.components.HSRangeSlider.init('.js-range-slider');

            // initialization of go to
            $.HSCore.components.HSGoTo.init('.js-go-to');

            // initialization of hamburgers
            $.HSCore.components.HSHamburgers.init('#hamburgerTrigger');

            // initialization of unfold component
            $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
                beforeClose: function() {
                    $('#hamburgerTrigger').removeClass('is-active');
                },
                afterClose: function() {
                    $('#headerSidebarList .collapse.show').collapse('hide');
                }
            });

            $('#headerSidebarList [data-toggle="collapse"]').on('click', function(e) {
                e.preventDefault();

                var target = $(this).data('target');

                if ($(this).attr('aria-expanded') === "true") {
                    $(target).collapse('hide');
                } else {
                    $(target).collapse('show');
                }
            });

            // initialization of select picker
            $.HSCore.components.HSSelectPicker.init('.js-select');
        });

        // Global Cart AJAX Handlers
        document.addEventListener('DOMContentLoaded', function() {
            // Function to sync all cart-related UIs
            function syncAllCartUIs(data) {
                // Update Sidebar/Navbar Cart Count
                const countElements = document.querySelectorAll('#cart-count');
                countElements.forEach(el => {
                    el.innerText = data.cart_count;
                });

                // Update all quantity displays and buttons across the page
                // First, reset all "Add to Cart" buttons if they are not in the cart data
                const allCartControls = document.querySelectorAll('.prodcut-add-cart');
                allCartControls.forEach(container => {
                    const productId = container.id.replace('cart-control-', '');
                    const itemInCart = data.cart_items.find(item => item.product_id == productId);

                    if (itemInCart) {
                        updateCartControlUI(productId, itemInCart.id, itemInCart.quantity);
                    } else {
                        resetToAddToCartButton(container, productId);
                    }
                });

                // If we are on the cart page, update rows and totals
                if (window.location.pathname.includes('/cart')) {
                    updateCartPageRowsAndTotals(data);
                }
            }

            function resetToAddToCartButton(container, productId) {
                // Check if it's the main product page style or listing style
                const isMainProduct = container.querySelector('.main-product') !== null || container.closest('.product-details') !== null;

                if (container.querySelector('form.add-to-cart-form')) return; // Already a form

                if (isMainProduct && container.querySelector('.main-product')) {
                    // This is the main product page style
                    container.innerHTML = `
                        <form class="add-to-cart-form" action="{{ route(\App\Constants\RouteNames::CART_ADD) }}" method="POST" data-product-id="${productId}">
                            @csrf
                            <input type="hidden" name="product_id" value="${productId}">
                            <div class="d-md-flex align-items-end mb-3">
                                <div class="max-width-150 mb-4 mb-md-0 main-product">
                                    <h6 class="font-size-12">Quantity</h6>
                                    <!-- Quantity -->
                                    <div class="border rounded-pill py-2 px-3 border-color-1">
                                        <div class="js-quantity row align-items-center">
                                            <div class="col-auto">
                                                <a class="js-minus btn btn-icon btn-xs btn-outline-secondary rounded-circle border-0" href="javascript:;">
                                                    <small class="fas fa-minus btn-icon__inner"></small>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <input class="js-result form-control h-auto border-0 rounded p-0 shadow-none" type="text" name="quantity" value="1">
                                            </div>
                                            <div class="col-auto">
                                                <a class="js-plus btn btn-icon btn-xs btn-outline-secondary rounded-circle border-0" href="javascript:;">
                                                    <small class="fas fa-plus btn-icon__inner"></small>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                <!-- End Quantity -->
                                </div>
                                <div class="ml-md-3">
                                    <button type="submit" class="btn btn-primary-dark-w px-5"><i class="ec ec-add-to-cart mr-2 font-size-20"></i> Add to Cart</button>
                                </div>
                            </div>
                        </form>
                    `;
                } else if (container.querySelector('.btn-add-cart__wide')) {
                    // Bestsellers/Featured wide button style
                    container.innerHTML = `
                        <form action="{{ route(\App\Constants\RouteNames::CART_ADD) }}" method="POST" class="add-to-cart-form" data-product-id="${productId}">
                            @csrf
                            <input type="hidden" name="product_id" value="${productId}">
                            <input type="hidden" name="quantity" value="1">
                            <button type="submit" class="btn-add-cart btn-add-cart__wide btn-primary transition-3d-hover">
                                <i class="ec ec-add-to-cart mr-2"></i> Add to Cart
                            </button>
                        </form>
                     `;
                } else {
                    // Regular listing style
                    container.innerHTML = `
                        <form class="add-to-cart-form" action="{{ route(\App\Constants\RouteNames::CART_ADD) }}" method="POST" data-product-id="${productId}">
                            @csrf
                            <input type="hidden" name="product_id" value="${productId}">
                            <input type="hidden" name="quantity" value="1">
                            <button type="submit" class="btn-add-cart btn-primary transition-3d-hover">
                                <i class="ec ec-add-to-cart"></i>
                            </button>
                        </form>
                    `;
                }
            }

            function updateCartControlUI(productId, cartItemId, quantity) {
                const containers = document.querySelectorAll('#cart-control-' + productId);
                containers.forEach(container => {
                    const isMainProduct = container.querySelector('.main-product') !== null || container.innerHTML.includes('Quantity');
                    const leftIconClass = quantity === 1 ? 'fa-trash' : 'fa-minus';

                    if (isMainProduct) {
                        container.innerHTML = `
                            <div class="d-md-flex align-items-center mb-3">
                                <div class="max-width-150 mb-4 mb-md-0 main-product">
                                    <h6 class="font-size-12">Quantity in Cart</h6>
                                    <div class="d-flex align-items-center justify-content-center bg-primary rounded-pill py-2 px-3">
                                        <button type="button" class="btn btn btn-primary update-cart-qty" data-cart-item-id="${cartItemId}" data-action="decrement" style="padding:0.5rem 0.5rem;font-size:0.5rem;">
                                            <i class="fa ${leftIconClass} font-size-12"></i>
                                        </button>
                                        <span class="mx-4 font-weight-bold text-white qty-display-${cartItemId}">${quantity}</span>
                                        <button type="button" class="btn btn btn-primary update-cart-qty" data-cart-item-id="${cartItemId}" data-action="increment" style="padding:0.5rem 0.5rem;font-size:0.5rem;">
                                            <i class="fa fa-plus font-size-12"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="ml-md-3">
                                    <span class="text-success font-weight-bold"><i class="fas fa-check-circle mr-1"></i> Already in Cart</span>
                                </div>
                            </div>
                        `;
                    } else {
                        container.innerHTML = `
                            <div class="d-flex align-items-center justify-content-center bg-primary rounded-pill">
                                <button type="button" class="btn btn btn-primary update-cart-qty" data-cart-item-id="${cartItemId}" data-action="decrement" style="padding:0.5rem 0.5rem;font-size:0.5rem;">
                                    <i class="fa ${leftIconClass} font-size-10"></i>
                                </button>
                                <span class="mx-2 font-weight-bold text-white qty-display-${cartItemId}">${quantity}</span>
                                <button type="button" class="btn btn btn-primary update-cart-qty" data-cart-item-id="${cartItemId}" data-action="increment" style="padding:0.5rem 0.5rem;font-size:0.5rem;">
                                    <i class="fa fa-plus font-size-10"></i>
                                </button>
                            </div>
                        `;
                    }
                });
            }

            function updateCartPageRowsAndTotals(data) {
                const tbody = document.querySelector('.cart-table tbody');
                if (!tbody) return;

                // Update Row totals and check if any rows need to be removed
                const existingRows = tbody.querySelectorAll('tr[data-cart-item-id]');
                existingRows.forEach(row => {
                    const cartItemId = row.getAttribute('data-cart-item-id');
                    const item = data.cart_items.find(i => i.id == cartItemId);

                    if (item) {
                        const totalEl = row.querySelector(`.item-total-${cartItemId}`);
                        if (totalEl) totalEl.innerText = item.total.toLocaleString(undefined, {
                            minimumFractionDigits: 2
                        });
                        const qtyInput = row.querySelector('.qty-display-' + cartItemId);
                        if (qtyInput) qtyInput.innerText = item.quantity;

                        // Update icons (trash vs minus)
                        const decBtn = row.querySelector('.update-cart-qty[data-action="decrement"]');
                        if (decBtn) {
                            const icon = decBtn.querySelector('i, small');
                            if (icon) {
                                if (item.quantity === 1) {
                                    icon.classList.remove('fa-minus');
                                    icon.classList.add('fa-trash');
                                } else {
                                    icon.classList.remove('fa-trash');
                                    icon.classList.add('fa-minus');
                                }
                            }
                        }
                    } else {
                        row.remove();
                    }
                });

                // If cart is empty, show empty message
                if (data.cart_items.length === 0) {
                    const cartTable = document.querySelector('.cart-table');
                    cartTable.innerHTML = `
                        <div class="text-center py-5">
                            <img src="{{ asset('assets/img/cart-empty.png') }}" alt="Empty Cart" style="width:130px;height:100px;"/>
                            <h3>Your cart is empty</h3>
                            <a href="{{ route(\App\Constants\RouteNames::PRODUCT_LIST) }}" class="btn btn-primary-dark-w mt-4">Go to Shop</a>
                        </div>
                    `;
                    const cartTotalSection = document.querySelector('.cart-total');
                    if (cartTotalSection) cartTotalSection.remove();
                    return;
                }

                // Update Grand Totals
                if (document.getElementById('subtotal-display'))
                    document.getElementById('subtotal-display').innerText = data.subtotal.toLocaleString(undefined, {
                        minimumFractionDigits: 2
                    });
                if (document.getElementById('vat-display'))
                    document.getElementById('vat-display').innerText = data.vat.toLocaleString(undefined, {
                        minimumFractionDigits: 2
                    });
                if (document.getElementById('total-display'))
                    document.getElementById('total-display').innerText = data.total.toLocaleString(undefined, {
                        minimumFractionDigits: 2
                    });

                // Update checkout buttons based on threshold
                const checkoutContainers = document.querySelectorAll('#checkout-buttons-container, .cart-total');
                checkoutContainers.forEach(container => {
                    const proceedBtns = container.querySelectorAll('a[href*="checkout"], button.btn-secondary');
                    proceedBtns.forEach(btn => {
                        if (data.can_checkout) {
                            if (btn.tagName === 'BUTTON') {
                                const newBtn = document.createElement('a');
                                newBtn.href = "{{ route(\App\Constants\RouteNames::CHECKOUT) }}";
                                newBtn.className = btn.className.replace('btn-secondary', 'btn-primary-dark-w');
                                newBtn.innerText = btn.innerText;
                                btn.parentNode.replaceChild(newBtn, btn);
                            }
                        } else {
                            if (btn.tagName === 'A') {
                                const newBtn = document.createElement('button');
                                newBtn.type = "button";
                                newBtn.className = btn.className.replace('btn-primary-dark-w', 'btn-secondary');
                                newBtn.disabled = true;
                                newBtn.innerText = btn.innerText;
                                btn.parentNode.replaceChild(newBtn, btn);
                            }
                        }
                    });
                });

                // Update threshold alert if it exists, or create it if missing and subtotal < threshold
                let thresholdAlert = document.querySelector('.alert-warning');
                if (!data.can_checkout) {
                    if (!thresholdAlert) {
                        // Create alert if it doesn't exist
                        const alertDiv = document.createElement('div');
                        alertDiv.className = 'alert alert-warning d-flex align-items-center mb-4';
                        alertDiv.style.color = '#000';
                        alertDiv.setAttribute('role', 'alert');
                        alertDiv.innerHTML = `
                            <i class="fas fa-info-circle mr-2"></i>
                            <div class="d-flex align-items-center">Your cart total is <div class="d-flex align-items-center ml-1 mr-1"><img src="/assets/img/dihram.webp" height="15" width="15" /> <span>${data.subtotal.toLocaleString(undefined, {minimumFractionDigits: 2})}</span></div>. You need a minimum of <div class="d-flex align-items-center mr-1 ml-1"><img src="/assets/img/dihram.webp" height="15" width="15" /> <span><strong>${data.threshold.toLocaleString(undefined, {minimumFractionDigits: 2})} </strong></span></div>to proceed to checkout.</div>
                        `;

                        const cartTable = document.querySelector('.cart-table');
                        if (cartTable) {
                            // Insert before the table content wrapper or as the first child of cart-table
                            const wrapper = document.getElementById('cart-content-wrapper');
                            if (wrapper) {
                                wrapper.parentNode.insertBefore(alertDiv, wrapper);
                            } else {
                                cartTable.prepend(alertDiv);
                            }
                        }
                    } else {
                        // Update existing alert
                        const alertSpan = thresholdAlert.querySelector('span'); // First span is subtotal
                        if (alertSpan) alertSpan.innerText = data.subtotal.toLocaleString(undefined, {
                            minimumFractionDigits: 2
                        });
                    }
                } else if (thresholdAlert) {
                    // Remove alert if subtotal >= threshold
                    thresholdAlert.remove();
                }
            }

            // Subscriptions/Events
            document.addEventListener('submit', function(e) {
                if (e.target.classList.contains('add-to-cart-form')) {
                    e.preventDefault();
                    const form = e.target;
                    const formData = new FormData(form);
                    const submitBtn = form.querySelector('button[type="submit"]');
                    const originalBtnContent = submitBtn ? submitBtn.innerHTML : null;

                    if (submitBtn) {
                        submitBtn.disabled = true;
                        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i>';
                    }

                    axios.post(form.action || '{{ route(\App\Constants\RouteNames::CART_ADD) }}', formData)
                        .then(response => {
                            if (response.data.success) {
                                syncAllCartUIs(response.data);
                                Swal.fire({
                                    toast: true,
                                    position: 'top-end',
                                    showConfirmButton: false,
                                    timer: 2000,
                                    icon: 'success',
                                    title: response.data.message || 'Added to cart'
                                });
                            } else {
                                throw new Error(response.data.message || 'Failed to add to cart');
                            }
                        })
                        .catch(error => {
                            console.error('Error adding to cart:', error);
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: (error.response && error.response.data && error.response.data.message) ? error.response.data.message : (error.message || 'Something went wrong!')
                            });
                        })
                        .finally(() => {
                            if (submitBtn) {
                                submitBtn.disabled = false;
                                submitBtn.innerHTML = originalBtnContent;
                            }
                        });
                }
            });

            document.addEventListener('click', function(e) {
                const btn = e.target.closest('.update-cart-qty');
                if (btn) {
                    e.preventDefault();
                    const cartItemId = btn.getAttribute('data-cart-item-id');
                    const action = btn.getAttribute('data-action');
                    const displayElements = document.querySelectorAll('.qty-display-' + cartItemId);

                    if (!displayElements.length) return;

                    let currentQty = parseInt(displayElements[0].innerText);

                    if (action === 'decrement' && currentQty === 1) {
                        // Trash icon clicked -> Remove item
                        const originalContent = btn.innerHTML;
                        btn.disabled = true;
                        btn.innerHTML = '<i class="fas fa-spinner fa-spin font-size-10"></i>';

                        axios.get('{{ url("cart/remove") }}/' + cartItemId, {
                                headers: {
                                    'X-Requested-With': 'XMLHttpRequest'
                                }
                            })
                            .then(response => {
                                if (response.data.success) {
                                    syncAllCartUIs(response.data);
                                } else {
                                    throw new Error(response.data.message || 'Remove failed');
                                }
                            })
                            .catch(error => {
                                console.error('Error removing from cart:', error);
                                Swal.fire({
                                    toast: true,
                                    position: 'top-end',
                                    icon: 'error',
                                    title: 'Failed to remove item'
                                });
                                btn.disabled = false;
                                btn.innerHTML = originalContent;
                            });
                        return;
                    }

                    let newQty = action === 'increment' ? currentQty + 1 : currentQty - 1;
                    if (newQty < 1) return;

                    const originalContent = btn.innerHTML;
                    btn.disabled = true;
                    btn.innerHTML = '<i class="fas fa-spinner fa-spin font-size-10"></i>';

                    axios.post('{{ route(\App\Constants\RouteNames::CART_UPDATE) }}', {
                            items: [{
                                id: cartItemId,
                                quantity: newQty
                            }],
                            _token: '{{ csrf_token() }}'
                        }, {
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest'
                            }
                        })
                        .then(response => {
                            if (response.data.success) {
                                syncAllCartUIs(response.data);
                                btn.innerHTML = originalContent;
                            } else {
                                throw new Error(response.data.message || 'Update failed');
                            }
                        })
                        .catch(error => {
                            console.error('Error updating cart quantity:', error);
                            Swal.fire({
                                toast: true,
                                position: 'top-end',
                                icon: 'error',
                                title: 'Failed to update'
                            });
                            btn.disabled = false;
                            btn.innerHTML = originalContent;
                        });
                }

                // Handle regular remove links on cart page via AJAX
                const removeLink = e.target.closest('a[href*="/cart/remove/"]');
                if (removeLink && window.location.pathname.includes('/cart')) {
                    e.preventDefault();
                    const url = removeLink.href;

                    axios.get(url, {
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest'
                            }
                        })
                        .then(response => {
                            if (response.data.success) {
                                syncAllCartUIs(response.data);
                            }
                        })
                        .catch(error => console.error('Error removing item:', error));
                }
            });
        });
    </script>
    <script>
        $(document).on('click', '.js-plus', function() {
            let container = $(this).closest('.js-quantity');
            let input = container.find('.js-result');
            let currentVal = parseInt(input.val()) || 0;
            input.val(currentVal + 1);
        });

        $(document).on('click', '.js-minus', function() {
            let container = $(this).closest('.js-quantity');
            let input = container.find('.js-result');
            let currentVal = parseInt(input.val()) || 0;

            if (currentVal > 1) {
                input.val(currentVal - 1);
            }
        });
    </script>