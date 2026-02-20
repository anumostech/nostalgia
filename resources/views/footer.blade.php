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
                                            <div class="d-flex align-items-center"><img src="{{  asset('assets/img/dihram.webp') }}" height="20" width="20"/> {{ number_format($product->price, 2) }}</div>
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
                        <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Onsale Products</h3>
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
                                        <div class="d-flex align-items-center"><img src="{{  asset('assets/img/dihram.webp') }}" height="20" width="20"/> {{ number_format($product->price, 2) }}</div>
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
                                        <div class="d-flex align-items-center"><img src="{{  asset('assets/img/dihram.webp') }}" height="20" width="20"/> {{ number_format($product->price, 2) }}</div>
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

            // initialization of unfold component
            $.HSCore.components.HSUnfold.init($('[data-unfold-target]'));

            // initialization of select picker
            $.HSCore.components.HSSelectPicker.init('.js-select');
        });
    </script>

    </body>

    <!-- Mirrored from transvelo.github.io/electro-html/2.0/html/home/home-v3.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Feb 2026 11:04:04 GMT -->

    </html>