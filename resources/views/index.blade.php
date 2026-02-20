@include('header')
<!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main">
    <!-- Slider Section -->
    <div class="mb-4">
        <div class="bg-img-hero overflow-hidden">
            <!-- <div class="container"> -->
            <div class="js-slick-carousel u-slick"
                data-pagi-classes="text-center position-absolute right-0 bottom-0 left-0 u-slick__pagination u-slick__pagination--long justify-content-center mb-3 mb-md-4">
                <div class="js-slide">
                    <div class="row py-md-0">
                        <div class="d-none d-wd-block offset-1"></div>
                        <div class="col-xl-12 col-12 d-flex align-items-end ml-auto ml-md-0"
                            data-scs-animation-in="fadeInRight"
                            data-scs-animation-delay="500">
                            <img class="img-fluid ml-auto mr-auto d-lg-block d-none" src="{{ asset('assets/img/banner/1.jpg') }}" alt="Image Description">
                            <img class="img-fluid ml-auto mr-auto d-lg-none" src="{{ asset('assets/img/mobilebanner/1.jpg') }}" alt="Image Description">
                        </div>
                    </div>
                </div>
                <div class="js-slide">
                    <div class="row py-md-0">
                        <div class="d-none d-wd-block offset-1"></div>
                        <div class="col-xl-12 col-12 flex-horizontal-center ml-auto ml-md-0"
                            data-scs-animation-in="fadeInRight"
                            data-scs-animation-delay="500">
                            <img class="img-fluid ml-auto mr-auto d-lg-block d-none" src="{{ asset('assets/img/banner/2.jpg') }}" alt="Image Description">
                            <img class="img-fluid ml-auto mr-auto d-lg-none" src="{{ asset('assets/img/mobilebanner/2.jpg') }}" alt="Image Description">
                        </div>
                    </div>
                </div>
                <div class="js-slide">
                    <div class="row py-md-0">
                        <div class="d-none d-wd-block offset-1"></div>
                        <div class="col-xl-12 col-12 flex-horizontal-center ml-auto ml-md-0"
                            data-scs-animation-in="fadeInRight"
                            data-scs-animation-delay="500">
                            <img class="img-fluid ml-auto mr-auto d-lg-block d-none" src="{{ asset('assets/img/banner/3.jpg') }}" alt="Image Description">
                            <img class="img-fluid ml-auto mr-auto d-lg-none" src="{{ asset('assets/img/mobilebanner/3.jpg') }}" alt="Image Description">
                        </div>
                    </div>
                </div>
            </div>
            <!-- </div> -->
        </div>
    </div>
    <!-- End Slider Section -->
    <div class="container">
        <!-- Banner -->
        <div class="row mb-6">
            @foreach($categories as $category)
            <div class="col-6 col-md-6 mb-4 mb-xl-0 col-xl-4 col-wd-3 flex-shrink-0 flex-xl-shrink-1 text-center">
                <a href="{{ route(\App\Constants\RouteNames::CATEGORY_SHOW, ['category_id' => $category->id] ) }}">
                    <img class="img-fluid" src="{{ asset('storage/categories/'.$category->image) }}" alt="Image Description">
                    <div class="mb-2 mt-4 pb-1 font-size-18 font-weight-light text-ls-n1 text-lh-23 text-center text-blue font-weight-bold">
                        {{ $category->name }}
                    </div>
                </a>

            </div>
            @endforeach
        </div>
        <!-- End Banner -->
        <!-- Feature List -->

        <!-- End Feature List -->
        <!-- Tab Prodcut Section -->
        <div class="mb-6">
            <!-- Nav Classic -->
            <div class="position-relative bg-white text-center z-index-2">
                <ul class="nav nav-classic nav-tab justify-content-center" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active js-animation-link" id="pills-one-example1-tab" data-toggle="pill" href="#pills-one-example1" role="tab" aria-controls="pills-one-example1" aria-selected="true"
                            data-target="#pills-one-example1"
                            data-link-group="groups"
                            data-animation-in="slideInUp">
                            <div class="d-md-flex justify-content-md-center align-items-md-center">
                                Featured
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-animation-link" id="pills-two-example1-tab" data-toggle="pill" href="#pills-two-example1" role="tab" aria-controls="pills-two-example1" aria-selected="false"
                            data-target="#pills-two-example1"
                            data-link-group="groups"
                            data-animation-in="slideInUp">
                            <div class="d-md-flex justify-content-md-center align-items-md-center">
                                On Sale
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-animation-link" id="pills-three-example1-tab" data-toggle="pill" href="#pills-three-example1" role="tab" aria-controls="pills-three-example1" aria-selected="false"
                            data-target="#pills-three-example1"
                            data-link-group="groups"
                            data-animation-in="slideInUp">
                            <div class="d-md-flex justify-content-md-center align-items-md-center">
                                Top Rated
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- End Nav Classic -->
            <!-- Tab Content -->
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade pt-2 show active" id="pills-one-example1" role="tabpanel" aria-labelledby="pills-one-example1-tab" data-target-group="groups">
                    <ul class="row list-unstyled products-group no-gutters">
                        @foreach($featured_products as $key => $product)
                        <li class="col-6 col-md-4 col-xl product-item 
                            {{ $loop->last ? 'remove-divider-wd remove-divider-md-lg' : '' }}">
                            <div class="product-item__outer h-100 w-100">
                                <div class="product-item__inner px-xl-4 p-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2">
                                            <a href="{{ route(\App\Constants\RouteNames::PRODUCT_LIST) }}"
                                                class="d-block text-center">
                                                <img class="img-fluid"
                                                    src="{{ asset('storage/products/'.$product->image) }}"
                                                    alt="{{ $product->name }}">
                                            </a>
                                        </div>

                                        <div class="mb-2">
                                            <a href="{{ route(\App\Constants\RouteNames::PRODUCT_LIST) }}"
                                                class="font-size-12 text-gray-5">
                                                {{ $product->category->name ?? 'N/A' }}
                                            </a>
                                        </div>

                                        <h5 class="mb-1 product-item__title">
                                            <a href="{{ route(\App\Constants\RouteNames::PRODUCT_LIST) }}"
                                                class="text-blue font-weight-bold">
                                                {{ $product->name }}
                                            </a>
                                        </h5>

                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="d-flex align-items-center">
                                                   <img src="{{  asset('assets/img/dihram.webp') }}" height="20" width="20"/> {{ $product->price }} 
                                                </div>
                                            </div>

                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="{{ route(\App\Constants\RouteNames::CART) }}"
                                                    class="btn-add-cart btn-primary transition-3d-hover">
                                                    <i class="ec ec-add-to-cart"></i>
                                                </a>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="{{ route(\App\Constants\RouteNames::WISHLIST) }}"
                                                class="text-gray-6 font-size-13">
                                                <i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </li>
                        @endforeach


                    </ul>
                </div>
                <div class="tab-pane fade pt-2" id="pills-two-example1" role="tabpanel" aria-labelledby="pills-two-example1-tab" data-target-group="groups">
                    <ul class="row list-unstyled products-group no-gutters">
                        @foreach($on_sale_products as $key => $product)
                        <li class="col-6 col-md-4 col-xl product-item 
                            {{ $loop->last ? 'remove-divider-wd remove-divider-md-lg' : '' }}">
                            <div class="product-item__outer h-100 w-100">
                                <div class="product-item__inner px-xl-4 p-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2">
                                            <a href="{{ route(\App\Constants\RouteNames::PRODUCT_LIST) }}"
                                                class="d-block text-center">
                                                <img class="img-fluid"
                                                    src="{{ asset('storage/products/'.$product->image) }}"
                                                    alt="{{ $product->name }}">
                                            </a>
                                        </div>

                                        <div class="mb-2">
                                            <a href="{{ route(\App\Constants\RouteNames::PRODUCT_LIST) }}"
                                                class="font-size-12 text-gray-5">
                                                {{ $product->category->name ?? 'N/A' }}
                                            </a>
                                        </div>

                                        <h5 class="mb-1 product-item__title">
                                            <a href="{{ route(\App\Constants\RouteNames::PRODUCT_LIST) }}"
                                                class="text-blue font-weight-bold">
                                                {{ $product->name }}
                                            </a>
                                        </h5>

                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="d-flex align-items-center">
                                                    {{ $product->price }} <img src="{{  asset('assets/img/dihram.webp') }}" height="20" width="20"/>
                                                </div>
                                            </div>

                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="{{ route(\App\Constants\RouteNames::CART) }}"
                                                    class="btn-add-cart btn-primary transition-3d-hover">
                                                    <i class="ec ec-add-to-cart"></i>
                                                </a>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="{{ route(\App\Constants\RouteNames::WISHLIST) }}"
                                                class="text-gray-6 font-size-13">
                                                <i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="tab-pane fade pt-2" id="pills-three-example1" role="tabpanel" aria-labelledby="pills-three-example1-tab" data-target-group="groups">
                    <ul class="row list-unstyled products-group no-gutters">
                        @foreach($top_rated_products as $key => $product)
                        <li class="col-6 col-md-4 col-xl product-item 
                            {{ $loop->last ? 'remove-divider-wd remove-divider-md-lg' : '' }}">
                            <div class="product-item__outer h-100 w-100">
                                <div class="product-item__inner px-xl-4 p-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2">
                                            <a href="{{ route(\App\Constants\RouteNames::PRODUCT_LIST) }}"
                                                class="d-block text-center">
                                                <img class="img-fluid"
                                                    src="{{ asset('storage/products/'.$product->image) }}"
                                                    alt="{{ $product->name }}">
                                            </a>
                                        </div>

                                        <div class="mb-2">
                                            <a href="{{ route(\App\Constants\RouteNames::PRODUCT_LIST) }}"
                                                class="font-size-12 text-gray-5">
                                                {{ $product->category->name ?? 'N/A' }}
                                            </a>
                                        </div>

                                        <h5 class="mb-1 product-item__title">
                                            <a href="{{ route(\App\Constants\RouteNames::PRODUCT_LIST) }}"
                                                class="text-blue font-weight-bold">
                                                {{ $product->name }}
                                            </a>
                                        </h5>

                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="d-flex align-items-center">
                                                    {{ $product->price }} <img src="{{  asset('assets/img/dihram.webp') }}" height="20" width="20"/>
                                                </div>
                                            </div>

                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="{{ route(\App\Constants\RouteNames::CART) }}"
                                                    class="btn-add-cart btn-primary transition-3d-hover">
                                                    <i class="ec ec-add-to-cart"></i>
                                                </a>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="{{ route(\App\Constants\RouteNames::WISHLIST) }}"
                                                class="text-gray-6 font-size-13">
                                                <i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </li>
                        @endforeach

                    </ul>
                </div>
            </div>
            <!-- End Tab Content -->
        </div>
        <!-- End Tab Prodcut Section -->
    </div>
    <!-- Television Entertainment -->
    <div class="mb-6" style="background-image: url(../../assets/img/1920X1080/img4.jpg);">
        <div class="container">
            <div class="row min-height-564 align-items-center">
                <div class="col-12 col-lg-4 col-xl-5 col-wd-6 d-none d-md-block">
                    <img class="img-fluid" src="../../assets/img/img.png" alt="Image Description">
                </div>
                <div class="col-12 col-lg-8 col-xl-7 col-wd-6 pt-6 pt-md-0">
                    <div class=" d-flex border-bottom border-color-1 mr-md-2">
                        <h3 class="section-title section-title__full mb-0 pb-2 font-size-22">Sweet Classics You’ll Always Love</h3>
                    </div>
                    <div class="js-slick-carousel position-static u-slick u-slick--gutters-2 u-slick overflow-hidden u-slick-overflow-visble py-5"
                        data-arrows-classes="position-absolute top-0 font-size-17 u-slick__arrow-normal top-10 pt-6 pt-md-0"
                        data-arrow-left-classes="fa fa-angle-left right-2"
                        data-arrow-right-classes="fa fa-angle-right right-1"
                        data-pagi-classes="text-center right-0 bottom-1 left-0 u-slick__pagination u-slick__pagination--long mb-0 z-index-n1 mt-4">
                        @php
                        $slides = $products->chunk(4);
                        @endphp

                        @foreach ($slides as $slide)
                        <div class="js-slide">
                            <ul class="row list-unstyled products-group no-gutters mb-0 overflow-visible">

                                @foreach ($slide as $product)
                                <li class="col-6 col-md-6 product-item product-item__card mb-2 remove-divider pr-md-2 border-bottom-0">
                                    <div class="product-item__outer h-100 w-100">
                                        <div class="product-item__inner p-md-3 row no-gutters bg-white max-width-334" style="padding:10px;">

                                            <!-- Image -->
                                            <div class="col-12 col-lg-12 product-media-left">
                                                <a href="{{ url('product/'.$product->id) }}" class="d-block">
                                                    <img class="img-fluid"
                                                        src="{{ asset('storage/products/' . $product->image) }}"
                                                        alt="{{ $product->name }}">
                                                </a>

                                                <div class="mb-2">
                                                    <div class="mb-2">
                                                        <span class="font-size-12 text-gray-5">
                                                            {{ $product->category->name ?? 'N/A' }}
                                                        </span>
                                                    </div>

                                                    <h5 class="product-item__title">
                                                        <a href="{{ url('product/'.$product->id) }}"
                                                            class="text-blue font-weight-bold">
                                                            {{ $product->name }}
                                                        </a>
                                                    </h5>
                                                </div>

                                                <div class="flex-center-between mb-2">
                                                    <div class="prodcut-price">
                                                        <div class="d-flex align-items-center">
                                                            <img src="{{  asset('assets/img/dihram.webp') }}" height="20" width="20"/> {{ number_format($product->price, 2) }}
                                                        </div>
                                                    </div>

                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="{{ route(\App\Constants\RouteNames::CART) }}"
                                                            class="btn-add-cart btn-primary transition-3d-hover">
                                                            <i class="ec ec-add-to-cart"></i>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="product-item__footer bg-white">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="{{ route(\App\Constants\RouteNames::WISHLIST) }}"
                                                            class="text-gray-6 font-size-13">
                                                            <i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                @endforeach

                            </ul>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Television Entertainment -->
    <div class="container">
        <!-- Laptops & Computers -->
        <div class="mb-6 position-relative">
            <dv class="d-flex justify-content-between border-bottom border-color-1 flex-md-nowrap flex-wrap border-sm-bottom-0">
                <h3 class="section-title section-title__full mb-0 pb-2 font-size-22">Our Sweet Collection</h3>
            </dv>
            <div class="js-slick-carousel position-static u-slick u-slick--gutters-1 overflow-hidden u-slick-overflow-visble pt-3 pb-3"
                data-arrows-classes="position-absolute top-0 font-size-17 u-slick__arrow-normal top-10"
                data-arrow-left-classes="fa fa-angle-left right-1"
                data-arrow-right-classes="fa fa-angle-right right-0"
                data-pagi-classes="text-center right-0 bottom-1 left-0 u-slick__pagination u-slick__pagination--long mb-0 z-index-n1 mt-4">
                @php
                $slides = $products->chunk(6);
                @endphp

                @foreach ($slides as $slide)
                <div class="js-slide">
                    <ul class="row list-unstyled products-group no-gutters mb-0 overflow-visible">

                        @foreach ($slide as $product)
                        <li class="col-md-4 product-item product-item__card pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
                            <div class="product-item__outer h-100 w-100">
                                <div class="product-item__inner p-md-3 no-gutters">

                                    <!-- Image -->
                                    <div class="col col-lg-12 col-xl-12 col-wd-auto product-media-left d-flex justify-content-center">
                                        <div>
                                            <a href="{{ url('product/'.$product->id) }}" class="d-block">
                                                <img class="img-fluid"
                                                    src="{{ asset('storage/products/' . $product->image) }}"
                                                    alt="{{ $product->name }}">
                                            </a>

                                            <div class="mb-1">
                                                <div class="mb-2">
                                                    <span class="font-size-12 text-gray-5">
                                                        {{ $product->category->name ?? 'Nostalgia Candies' }}
                                                    </span>
                                                </div>

                                                <h5 class="product-item__title">
                                                    <a href="{{ url('product/'.$product->id) }}"
                                                        class="text-blue font-weight-bold">
                                                        {{ $product->name }}
                                                    </a>
                                                </h5>
                                            </div>

                                            <div class="flex-center-between mb-3">
                                                <div class="prodcut-price">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{  asset('assets/img/dihram.webp') }}" height="20" width="20"/> {{ number_format($product->price, 2) }}
                                                    </div>
                                                </div>

                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="{{ route(\App\Constants\RouteNames::CART ) }}"
                                                        class="btn-add-cart btn-primary transition-3d-hover">
                                                        <i class="ec ec-add-to-cart"></i>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="{{ route(\App\Constants\RouteNames::WISHLIST ) }}"
                                                        class="text-gray-6 font-size-13">
                                                        <i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </li>
                        @endforeach

                    </ul>
                </div>
                @endforeach



            </div>
        </div>
        <!-- End Laptops & Computers -->
        <!-- Trending Products -->
        <div class="mb-8 position-relative">
            <dv class="d-flex justify-content-between border-bottom border-color-1 flex-md-nowrap flex-wrap border-sm-bottom-0">
                <h3 class="section-title section-title__full mb-0 pb-2 font-size-22">Explore Our Products</h3>
            </dv>
            <div class="js-slick-carousel position-static u-slick u-slick--gutters-1 overflow-hidden u-slick-overflow-visble pt-3 pb-3"
                data-arrows-classes="position-absolute top-0 font-size-17 u-slick__arrow-normal top-10"
                data-arrow-left-classes="fa fa-angle-left right-1"
                data-arrow-right-classes="fa fa-angle-right right-0"
                data-pagi-classes="text-center right-0 bottom-1 left-0 u-slick__pagination u-slick__pagination--long mb-0 z-index-n1 mt-4">
                @php
                $slides = $products->chunk(4);
                @endphp

                @foreach ($slides as $slide)
                <div class="js-slide">
                    <ul class="row list-unstyled products-group no-gutters mb-0 overflow-visible">

                        @foreach ($slide as $product)
                        <li class="col-md-3 product-item product-item__card pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
                            <div class="product-item__outer h-100 w-100">
                                <div class="product-item__inner p-md-3 no-gutters">

                                    <!-- Image -->
                                    <div class="col col-lg-auto col-xl-5 col-wd-auto product-media-left d-flex justify-content-center">
                                        <div>
                                            <a href="{{ url('product/'.$product->id) }}" class="d-block">
                                                <img class="img-fluid"
                                                    src="{{ asset('storage/products/' . $product->image) }}"
                                                    alt="{{ $product->name }}">
                                            </a>

                                            <div class="mb-4 mb-xl-2 mb-wd-6">
                                                <div class="mb-2">
                                                    <span class="font-size-12 text-gray-5">
                                                        {{ $product->category->name ?? 'Nostalgia Candies' }}
                                                    </span>
                                                </div>

                                                <h5 class="product-item__title">
                                                    <a href="{{ url('product/'.$product->id) }}"
                                                        class="text-blue font-weight-bold">
                                                        {{ $product->name }}
                                                    </a>
                                                </h5>
                                            </div>

                                            <div class="flex-center-between mb-3">
                                                <div class="prodcut-price">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{  asset('assets/img/dihram.webp') }}" height="20" width="20"/> {{ number_format($product->price, 2) }}
                                                    </div>
                                                </div>

                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="{{ route(\App\Constants\RouteNames::CART ) }}"
                                                        class="btn-add-cart btn-primary transition-3d-hover">
                                                        <i class="ec ec-add-to-cart"></i>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="{{ route(\App\Constants\RouteNames::WISHLIST ) }}"
                                                        class="text-gray-6 font-size-13">
                                                        <i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </li>
                        @endforeach

                    </ul>
                </div>
                @endforeach

            </div>
        </div>
        <!-- End Trending Products -->
    </div>
    <!-- Products-8-1 -->
    <div class="products-group-8-1 space-1 bg-gray-7 mb-6">
        <h2 class="sr-only">Products Grid</h2>
        <div class="container">
            <!-- Nav nav-pills -->
            <div class="position-relative text-center z-index-2 mb-3">
                <div class=" d-flex justify-content-between border-bottom border-color-1 flex-lg-nowrap flex-wrap border-md-down-top-0 border-md-down-bottom-0">
                    <h3 class="section-title mb-0 pb-2 font-size-22">Bestsellers</h3>

                    <ul class="nav nav-pills nav-tab-pill mb-2 pt-3 pt-lg-0 mb-0 border-top border-color-1 border-lg-top-0 align-items-center font-size-15 font-size-15-lg flex-nowrap flex-lg-wrap overflow-auto overflow-lg-visble pr-0" id="pills-tab-1" role="tablist">
                        @foreach($categories as $index => $category)
                        <li class="nav-item flex-shrink-0 flex-lg-shrink-1">
                            <a class="nav-link rounded-pill {{ $index == 0 ? 'active' : '' }}"
                                id="Tpills-{{ $category->id }}-tab"
                                data-toggle="pill"
                                href="#Tpills-{{ $category->id }}"
                                role="tab">
                                {{ $category->name }}
                            </a>
                        </li>
                        @endforeach

                    </ul>
                </div>
            </div>
            <!-- End Nav Pills -->

            <!-- Tab Content -->
            <div class="tab-content" id="Tpills-tabContent">
                @foreach($categories as $index => $category)

                <div class="tab-pane fade pt-2 {{ $index == 0 ? 'show active' : '' }}"
                    id="Tpills-{{ $category->id }}"
                    role="tabpanel">

                    <div class="row no-gutters">

                        <!-- LEFT SIDE PRODUCTS -->
                        <div class="col-md-6 col-lg-7 col-wd-8 d-md-flex d-wd-block">

                            <ul class="row list-unstyled products-group no-gutters mb-0">

                                @foreach($productsByCategory[$category->id] as $i => $product)

                                <li class="col-md-6 col-lg-4 col-wd-3 product-item 
                    {{ (($i + 1) % 4 == 0) ? 'remove-divider' : '' }}">

                                    <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                        <div class="product-item__inner bg-white p-3">
                                            <div class="product-item__body pb-xl-2">

                                                <div class="mb-2">
                                                    <a href="{{ url('product/'.$product->id) }}" class="d-block text-center">
                                                        <img class="img-fluid"
                                                            src="{{ asset('storage/products/' . $product->image) }}"
                                                            alt="{{ $product->name }}">
                                                    </a>
                                                </div>

                                                <div class="mb-2">
                                                    <span class="font-size-12 text-gray-5">
                                                        {{ $category->name }}
                                                    </span>
                                                </div>

                                                <h5 class="mb-1 product-item__title">
                                                    <a href="{{ url('product/'.$product->id) }}" class="text-blue font-weight-bold">
                                                        {{ $product->name }}
                                                    </a>
                                                </h5>

                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="d-flex align-items-center">
                                                            <img src="{{  asset('assets/img/dihram.webp') }}" height="20" width="20"/> {{ number_format($product->price,2) }}
                                                        </div>
                                                    </div>

                                                    <div class="d-block d-xl-block prodcut-add-cart">
                                                        <a href="{{ route(\App\Constants\RouteNames::CART) }}" class="btn-add-cart btn-primary transition-3d-hover">
                                                            <i class="ec ec-add-to-cart"></i>
                                                        </a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </li>

                                @endforeach

                            </ul>

                        </div>


                        <!-- RIGHT SIDE FEATURED PRODUCT -->
                        <div class="col-md-6 col-lg-5 col-wd-4 products-group-1">
                            <ul class="row list-unstyled products-group no-gutters bg-white h-100 mb-0">
                                <li class="col product-item remove-divider">
                                    <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                        <div class="product-item__inner bg-white p-3 d-flex flex-column h-100">

                                            <div class="product-item__body d-flex flex-column flex-grow-1">

                                                <!-- Main Image -->
                                                <div class="mb-4 text-center">
                                                    <a href="{{ url('product/'.$product->id) }}" class="d-block my-4">
                                                        <img class="img-fluid"
                                                            src="{{ asset('storage/products/' . $product->image) }}"
                                                            alt="{{ $product->name }}" style="height:350px;">
                                                    </a>
                                                </div>

                                                <!-- Thumbnails -->
                                                <div class="row mx-gutters-2 mb-4 justify-content-center">
                                                    @foreach($productsByCategory[$category->id]->take(4) as $thumb)
                                                    <div class="col-auto">
                                                        <img class="img-fluid border"
                                                            style="width:60px;"
                                                            src="{{ asset('storage/products/' . $thumb->image) }}"
                                                            alt="{{ $thumb->name }}">
                                                    </div>
                                                    @endforeach
                                                </div>

                                                <!-- Title + Category -->
                                                <div class="mb-2">
                                                    <div class="mb-2">
                                                        <a href="{{ url('product/'.$product->id) }}"
                                                            class="font-size-12 text-gray-5">
                                                            {{ $category->name }}
                                                        </a>
                                                    </div>

                                                    <h5 class="mb-2 product-item__title">
                                                        <a href="{{ url('product/'.$product->id) }}"
                                                            class="text-blue font-weight-bold">
                                                            {{ $product->name }}
                                                        </a>
                                                    </h5>
                                                </div>

                                                <!-- Price -->
                                                <div class="mb-3">
                                                    <div class="d-flex align-items-center font-size-20">
                                                        <img src="{{  asset('assets/img/dihram.webp') }}" height="20" width="20"/> {{ number_format($product->price, 2) }}
                                                    </div>
                                                </div>

                                                <!-- Add To Cart -->
                                                <div class="mt-auto text-center">
                                                    <a href="{{ route(\App\Constants\RouteNames::CART) }}"
                                                        class="btn-add-cart btn-add-cart__wide btn-primary transition-3d-hover">
                                                        <i class="ec ec-add-to-cart mr-2"></i> Add to Cart
                                                    </a>
                                                </div>

                                            </div>

                                            <!-- Footer -->
                                            <!-- <div class="product-item__footer">
                                                <div class="mt-4 pt-2 flex-center-between flex-wrap justify-content-center">
                                                    <a href="{{ route(\App\Constants\RouteNames::WISHLIST ) }}"
                                                        class="text-gray-6 font-size-13">
                                                        <i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist
                                                    </a>
                                                </div>
                                            </div> -->

                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>


                    </div>
                </div>

                @endforeach


            </div>
            <!-- End Tab Content -->
        </div>

        <!-- Content Placeholder -->
        <div class="container space-2 d-none">
            <!-- Nav Pills -->
            <div class="position-relative text-center z-index-2 mb-3">
                <div class=" d-flex justify-content-between border-bottom border-color-1 flex-lg-nowrap flex-wrap border-md-down-top-0 border-md-down-bottom-0">
                    <h3 class="section-title mb-0 pb-2 font-size-22">Bestsellers</h3>

                    <ul class="nav nav-pills nav-tab-pill mb-2 pt-3 pt-lg-0 mb-0 border-top border-color-1 border-lg-top-0 align-items-center font-size-15 font-size-15-lg flex-nowrap flex-lg-wrap overflow-auto overflow-lg-visble pr-0" id="pills-tab-2" role="tablist">
                        <li class="nav-item flex-shrink-0 flex-lg-shrink-1">
                            <a class="nav-link rounded-pill active" id="Gpills-one-example1-tab" data-toggle="pill" href="#Gpills-one-example1" role="tab" aria-controls="Gpills-one-example1" aria-selected="true">Top 20</a>
                        </li>
                        <li class="nav-item flex-shrink-0 flex-lg-shrink-1">
                            <a class="nav-link rounded-pill" id="Gpills-two-example1-tab" data-toggle="pill" href="#Gpills-two-example1" role="tab" aria-controls="Gpills-two-example1" aria-selected="false">Smart Phones & Tablets</a>
                        </li>
                        <li class="nav-item flex-shrink-0 flex-lg-shrink-1">
                            <a class="nav-link rounded-pill" id="Gpills-three-example1-tab" data-toggle="pill" href="#Gpills-three-example1" role="tab" aria-controls="Gpills-three-example1" aria-selected="false">Laptops &amp; Computers</a>
                        </li>
                        <li class="nav-item flex-shrink-0 flex-lg-shrink-1">
                            <a class="nav-link rounded-pill" id="Gpills-four-example1-tab" data-toggle="pill" href="#Gpills-four-example1" role="tab" aria-controls="Gpills-four-example1" aria-selected="false">Video Cameras</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End Nav Pills -->

            <!-- Tab Content -->
            <div class="tab-content" id="Gpills-tabContent">
                <div class="tab-pane fade pt-2 show active" id="Gpills-one-example1" role="tabpanel" aria-labelledby="Gpills-one-example1-tab">
                    <div class="row no-gutters">
                        <div class="col-md-6 col-lg-7 col-wd-8 d-md-flex d-wd-block">
                            <ul class="row list-unstyled products-group no-gutters mb-0 w-100">
                                <li class="col-md-6 col-lg-4 col-wd-3">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 d-md-none d-lg-block">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 d-md-none d-lg-block">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 d-md-none d-wd-block">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 d-md-none d-wd-block">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-lg-5 col-wd-4 products-group-1">
                            <ul class="row list-unstyled products-group no-gutters bg-white h-100 mb-0">
                                <li class="col product-item remove-divider">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="d-flex flex-column">
                                                <div class="mb-1">
                                                    <div class="mb-2">
                                                        <div class="bg-gray-1 bg-animation rounded height-10 w-40"></div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="bg-gray-1 bg-animation rounded height-12 mb-1 w-90"></div>
                                                        <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                    </div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-450"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <!-- Gallery -->
                                                    <div class="row mx-gutters-2">
                                                        <div class="col-auto">
                                                            <div class="bg-gray-1 width-60 height-60"></div>
                                                        </div>

                                                        <div class="col-auto">
                                                            <div class="bg-gray-1 width-60 height-60"></div>
                                                        </div>

                                                        <div class="col-auto">
                                                            <div class="bg-gray-1 width-60 height-60"></div>
                                                        </div>
                                                        <div class="col"></div>
                                                    </div>
                                                    <!-- End Gallery -->
                                                </div>
                                                <div class="flex-center-between">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-40"></div>
                                                    <div class="bg-gray-1 height-35 width-134 rounded-pill"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade pt-2" id="Gpills-two-example1" role="tabpanel" aria-labelledby="Gpills-two-example1-tab">
                    <div class="row no-gutters">
                        <div class="col-md-6 col-lg-7 col-wd-8 d-md-flex d-wd-block">
                            <ul class="row list-unstyled products-group no-gutters mb-0 w-100">
                                <li class="col-md-6 col-lg-4 col-wd-3">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 d-md-none d-lg-block">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 d-md-none d-lg-block">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 d-md-none d-wd-block">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 d-md-none d-wd-block">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-lg-5 col-wd-4 products-group-1">
                            <ul class="row list-unstyled products-group no-gutters bg-white h-100 mb-0">
                                <li class="col product-item remove-divider">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="d-flex flex-column">
                                                <div class="mb-1">
                                                    <div class="mb-2">
                                                        <div class="bg-gray-1 bg-animation rounded height-10 w-40"></div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="bg-gray-1 bg-animation rounded height-12 mb-1 w-90"></div>
                                                        <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                    </div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-450"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <!-- Gallery -->
                                                    <div class="row mx-gutters-2">
                                                        <div class="col-auto">
                                                            <div class="bg-gray-1 width-60 height-60"></div>
                                                        </div>

                                                        <div class="col-auto">
                                                            <div class="bg-gray-1 width-60 height-60"></div>
                                                        </div>

                                                        <div class="col-auto">
                                                            <div class="bg-gray-1 width-60 height-60"></div>
                                                        </div>
                                                        <div class="col"></div>
                                                    </div>
                                                    <!-- End Gallery -->
                                                </div>
                                                <div class="flex-center-between">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-40"></div>
                                                    <div class="bg-gray-1 height-35 width-134 rounded-pill"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade pt-2" id="Gpills-three-example1" role="tabpanel" aria-labelledby="Gpills-three-example1-tab">
                    <div class="row no-gutters">
                        <div class="col-md-6 col-lg-7 col-wd-8 d-md-flex d-wd-block">
                            <ul class="row list-unstyled products-group no-gutters mb-0 w-100">
                                <li class="col-md-6 col-lg-4 col-wd-3">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 d-md-none d-lg-block">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 d-md-none d-lg-block">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 d-md-none d-wd-block">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 d-md-none d-wd-block">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-lg-5 col-wd-4 products-group-1">
                            <ul class="row list-unstyled products-group no-gutters bg-white h-100 mb-0">
                                <li class="col product-item remove-divider">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="d-flex flex-column">
                                                <div class="mb-1">
                                                    <div class="mb-2">
                                                        <div class="bg-gray-1 bg-animation rounded height-10 w-40"></div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="bg-gray-1 bg-animation rounded height-12 mb-1 w-90"></div>
                                                        <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                    </div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-450"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <!-- Gallery -->
                                                    <div class="row mx-gutters-2">
                                                        <div class="col-auto">
                                                            <div class="bg-gray-1 width-60 height-60"></div>
                                                        </div>

                                                        <div class="col-auto">
                                                            <div class="bg-gray-1 width-60 height-60"></div>
                                                        </div>

                                                        <div class="col-auto">
                                                            <div class="bg-gray-1 width-60 height-60"></div>
                                                        </div>
                                                        <div class="col"></div>
                                                    </div>
                                                    <!-- End Gallery -->
                                                </div>
                                                <div class="flex-center-between">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-40"></div>
                                                    <div class="bg-gray-1 height-35 width-134 rounded-pill"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade pt-2" id="Gpills-four-example1" role="tabpanel" aria-labelledby="Gpills-four-example1-tab">
                    <div class="row no-gutters">
                        <div class="col-md-6 col-lg-7 col-wd-8 d-md-flex d-wd-block">
                            <ul class="row list-unstyled products-group no-gutters mb-0 w-100">
                                <li class="col-md-6 col-lg-4 col-wd-3">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 d-md-none d-lg-block">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 d-md-none d-lg-block">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 d-md-none d-wd-block">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 d-md-none d-wd-block">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-lg-5 col-wd-4 products-group-1">
                            <ul class="row list-unstyled products-group no-gutters bg-white h-100 mb-0">
                                <li class="col product-item remove-divider">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="d-flex flex-column">
                                                <div class="mb-1">
                                                    <div class="mb-2">
                                                        <div class="bg-gray-1 bg-animation rounded height-10 w-40"></div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="bg-gray-1 bg-animation rounded height-12 mb-1 w-90"></div>
                                                        <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                    </div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-450"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <!-- Gallery -->
                                                    <div class="row mx-gutters-2">
                                                        <div class="col-auto">
                                                            <div class="bg-gray-1 width-60 height-60"></div>
                                                        </div>

                                                        <div class="col-auto">
                                                            <div class="bg-gray-1 width-60 height-60"></div>
                                                        </div>

                                                        <div class="col-auto">
                                                            <div class="bg-gray-1 width-60 height-60"></div>
                                                        </div>
                                                        <div class="col"></div>
                                                    </div>
                                                    <!-- End Gallery -->
                                                </div>
                                                <div class="flex-center-between">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-40"></div>
                                                    <div class="bg-gray-1 height-35 width-134 rounded-pill"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Tab Content -->
        </div>
        <!-- End Content Placeholder -->
    </div>
    <!-- End Products-8-1 -->
    <div class="container">
        <!-- Top Categories this Month -->
        <div class="mb-2">
            <div class="border-bottom border-color-1 mb-5">
                <h3 class="section-title section-title__full d-inline-block mb-0 pb-2 font-size-22">Top Categories</h3>
            </div>
            <div class="row align-items-start">
                @foreach ($topCategories as $index => $category)

                @php
                $colClass = 'col-6 col-wd-3 border-right border-lg-down-0 mb-8';

                if ($index == 2) {
                $colClass .= ' remove-bd-xl-only';
                }
                if ($index == 3) {
                $colClass .= ' remove-bd-wd';
                }
                @endphp

                <div class="{{ $colClass }}">
                    <div class="row align-items-center align-items-xl-start">

                        <!-- Image -->
                        <div class="col-md-5 mb-3 mb-md-0">
                            <a href="{{ route(\App\Constants\RouteNames::CATEGORY_SHOW, [ 'category_id' => $category->id ]) }}" class="d-block">
                                <img class="img-fluid"
                                    src="{{ asset('storage/categories/' . $category->image) }}"
                                    alt="{{ $category->name }}">
                            </a>
                        </div>

                        <!-- Content -->
                        <div class="col-md-7 pl-lg-0">
                            <h4 class="font-size-18 mb-0 mb-xl-2 font-size-14-down-lg text-center text-md-left">
                                <a href="{{ route(\App\Constants\RouteNames::CATEGORY_SHOW, [ 'category_id' => $category->id ]) }}" class="underline-on-hover">
                                    {{ $category->name }}
                                </a>
                            </h4>

                            <ul class="mb-1 font-size-13 list-unstyled text-lh-21 d-none d-xl-block">
                                @foreach ($category->products as $product)
                                <li>
                                    <a href="{{ url('product/'.$product->id) }}" class="text-gray-15 underline-on-hover">
                                        {{ $product->name }}
                                    </a>
                                </li>
                                @endforeach
                            </ul>

                            <a href="" class="d-none d-xl-block text-right font-weight-bold text-gray-15 underline-on-hover">
                                See all
                            </a>
                        </div>

                    </div>
                </div>

                @endforeach
            </div>

        </div>
        <!-- End Top Categories this Month -->

        <!-- Recommendation for you -->
        <div class="position-relative">
            <div class="border-bottom border-color-1 mb-2">
                <h3 class="section-title section-title__full d-inline-block mb-0 pb-2 font-size-22">Recommendation for you</h3>
            </div>
            <div class="js-slick-carousel u-slick position-static overflow-hidden u-slick-overflow-visble pb-7 pt-2 px-1"
                data-pagi-classes="text-center right-0 bottom-1 left-0 u-slick__pagination u-slick__pagination--long mb-0 z-index-n1 mt-3 mt-md-0"
                data-slides-show="7"
                data-slides-scroll="1"
                data-arrows-classes="position-absolute top-0 font-size-17 u-slick__arrow-normal top-10"
                data-arrow-left-classes="fa fa-angle-left right-1"
                data-arrow-right-classes="fa fa-angle-right right-0"
                data-responsive='[{
      "breakpoint": 1400,
      "settings": { "slidesToShow": 6 }
    }, {
      "breakpoint": 1200,
      "settings": { "slidesToShow": 3 }
    }, {
      "breakpoint": 992,
      "settings": { "slidesToShow": 3 }
    }, {
      "breakpoint": 768,
      "settings": { "slidesToShow": 2 }
    }, {
      "breakpoint": 554,
      "settings": { "slidesToShow": 2 }
    }]'>

                @foreach ($nostalgiaProducts as $product)
                <div class="js-slide products-group">
                    <div class="product-item">
                        <div class="product-item__outer h-100 w-100">
                            <div class="product-item__inner px-wd-4 p-2 p-md-3">

                                <div class="product-item__body pb-xl-2">

                                    <!-- Image -->
                                    <div class="mb-2">
                                        <a href="{{ url('product/'.$product->id) }}" class="d-block text-center">
                                            <img class="img-fluid"
                                                src="{{ asset('assets/img/products/' . $product->image) }}"
                                                alt="{{ $product->title }}">
                                        </a>
                                    </div>

                                    <div class="mb-2">
                                        <a href="{{ route(\App\Constants\RouteNames::CATEGORY_SHOW, [ 'category_id' => $category->id ]) }}" class="font-size-12 text-gray-5">
                                            {{ $product->category->name ?? 'Nostalgia Candies' }}
                                        </a>
                                    </div>

                                    <!-- Product title -->
                                    <h5 class="mb-1 product-item__title">
                                        <a href="{{ url('product/'.$product->id) }}"
                                            class="text-blue font-weight-bold">
                                            {{ $product->name }}
                                        </a>
                                    </h5>

                                    <!-- Price -->
                                    <div class="flex-center-between mb-1">
                                        <div class="prodcut-price">
                                            <div class="d-flex align-items-center">
                                                <img src="{{  asset('assets/img/dihram.webp') }}" height="20" width="20"/> {{ number_format($product->price, 2) }}
                                            </div>
                                        </div>

                                        <div class="d-none d-xl-block prodcut-add-cart">
                                            <a href="{{ route(\App\Constants\RouteNames::CART) }}"
                                                class="btn-add-cart btn-primary transition-3d-hover">
                                                <i class="ec ec-add-to-cart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Footer -->
                                <div class="product-item__footer">
                                    <div class="border-top pt-2 flex-center-between flex-wrap">

                                        <a href="{{ route(\App\Constants\RouteNames::WISHLIST) }}" class="text-gray-6 font-size-13">
                                            <i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>


        </div>
    </div>
    </div>
    <!-- End Banner 2 columns -->
    </div>

    <!-- End Brand Carousel -->
</main>
<!-- ========== END MAIN CONTENT ========== -->
@include('footer')