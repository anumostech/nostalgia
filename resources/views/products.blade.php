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
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Shop</li>
                    </ol>
                </nav>
            </div>
            <!-- End breadcrumb -->
        </div>
    </div>
    <!-- End breadcrumb -->

    <div class="container">
        <div class="row mb-8">
            <div class="d-none d-xl-block col-xl-3 col-wd-2gdot5">
                <div class="mb-6 border border-width-2 border-color-3 borders-radius-6">
                    <!-- List -->
                    <ul id="sidebarNav" class="list-unstyled mb-0 sidebar-navbar view-all">
                        <li>
                            <div class="dropdown-title">Browse Categories</div>
                        </li>
                        @foreach($filter_categories as $category)
                        <li>
                            <a class="dropdown-toggle dropdown-toggle-collapse"
                                href="{{ url('products?category='.$category->id) }}"
                                role="button"
                                data-toggle="collapse"
                                aria-expanded="false">

                                {{ $category->name }}
                                <span class="text-gray-25 font-size-12 font-weight-normal">
                                    ({{ $category->products_count }})
                                </span>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                    <!-- End List -->
                </div>
                <div class="mb-6">
                    <div class="border-bottom border-color-1 mb-5">
                        <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Filters</h3>
                    </div>
                    <div class="range-slider">
                        <h4 class="font-size-14 mb-3 font-weight-bold">Price</h4>
                        <!-- Range Slider -->
                        <input class="form-control" type="text"
                            data-extra-classes="u-range-slider u-range-slider-indicator u-range-slider-grid"
                            data-type="double"
                            data-grid="false"
                            data-hide-from-to="true"
                            data-prefix="$"
                            data-min="0"
                            data-max="3456"
                            data-from="0"
                            data-to="3456"
                            data-result-min="#rangeSliderExample3MinResult"
                            data-result-max="#rangeSliderExample3MaxResult">
                        <!-- End Range Slider -->
                        <div class="mt-1 text-gray-111 d-flex mb-4">
                            <span class="mr-0dot5">Filter Price Range: </span>
                            <span>AED 1</span>
                            <span id="rangeSliderExample3MinResult" class=""></span>
                            <span class="mx-0dot5"> — </span>
                            <span>AED 2</span>
                            <span id="rangeSliderExample3MaxResult" class=""></span>
                        </div>
                        <button type="submit" class="btn px-4 btn-primary-dark-w py-2 rounded-lg">Filter</button>
                    </div>
                </div>
                <div class="mb-8">
                    <div class="border-bottom border-color-1 mb-5">
                        <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Latest Products</h3>
                    </div>
                    <ul class="list-unstyled">
                        @foreach($latest as $product)

                        <li class="mb-4">
                            <div class="row">

                                <div class="col-auto">
                                    <a href="{{ url('product/'.$product->id) }}" class="d-block width-75">
                                        <img class="img-fluid"
                                            src="{{ asset('storage/products/'.$product->image) }}"
                                            alt="{{ $product->name }}">
                                    </a>
                                </div>

                                <div class="col">
                                    <h3 class="text-lh-1dot2 font-size-14 mb-0">
                                        <a href="{{ url('product/'.$product->id) }}">
                                            {{ $product->name }}
                                        </a>
                                    </h3>

                                    <div class="text-warning text-ls-n2 font-size-16 mb-1" style="width: 80px;">
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="far fa-star text-muted"></small>
                                    </div>

                                    <div class="font-weight-bold">

                                        @if($product->old_price)
                                        <del class="font-size-11 text-gray-9 d-block">
                                            AED {{ number_format($product->old_price, 2) }}
                                        </del>
                                        @endif

                                        <ins class="font-size-15 text-red text-decoration-none d-block">
                                            AED {{ number_format($product->price, 2) }}
                                        </ins>

                                    </div>
                                </div>

                            </div>
                        </li>

                        @endforeach

                    </ul>
                </div>
            </div>
            <div class="col-xl-9 col-wd-9gdot5">
                <!-- Recommended Products -->
                <div class="mb-6 d-none d-xl-block">
                    <div class="position-relative">
                        <div class="border-bottom border-color-1 mb-2">
                            <h3 class="d-inline-block section-title section-title__full mb-0 pb-2 font-size-22">Recommended Products</h3>
                        </div>
                        <div class="js-slick-carousel u-slick position-static overflow-hidden u-slick-overflow-visble pb-7 pt-2 px-1"
                            data-pagi-classes="text-center right-0 bottom-1 left-0 u-slick__pagination u-slick__pagination--long mb-0 z-index-n1 mt-3 mt-md-0"
                            data-slides-show="5"
                            data-slides-scroll="1"
                            data-arrows-classes="position-absolute top-0 font-size-17 u-slick__arrow-normal top-10"
                            data-arrow-left-classes="fa fa-angle-left right-1"
                            data-arrow-right-classes="fa fa-angle-right right-0"
                            data-responsive='[{
                                      "breakpoint": 1400,
                                      "settings": {
                                        "slidesToShow": 4
                                      }
                                    }, {
                                        "breakpoint": 1200,
                                        "settings": {
                                          "slidesToShow": 4
                                        }
                                    }, {
                                      "breakpoint": 992,
                                      "settings": {
                                        "slidesToShow": 3
                                      }
                                    }, {
                                      "breakpoint": 768,
                                      "settings": {
                                        "slidesToShow": 2
                                      }
                                    }, {
                                      "breakpoint": 554,
                                      "settings": {
                                        "slidesToShow": 2
                                      }
                                    }]'>
                            @foreach($recommend_products as $product)

                            <div class="js-slide products-group">
                                <div class="product-item">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-wd-4 p-2 p-md-3">

                                            <div class="product-item__body pb-xl-2">

                                                <div class="mb-2">
                                                    <a href="{{ url('products?category='.$product->category_id) }}"
                                                        class="font-size-12 text-gray-5">
                                                        {{ $product->category->name ?? 'Category' }}
                                                    </a>
                                                </div>

                                                <h5 class="mb-1 product-item__title">
                                                    <a href="{{ url('product/'.$product->id) }}"
                                                        class="text-blue font-weight-bold">
                                                        {{ $product->name }}
                                                    </a>
                                                </h5>

                                                <div class="mb-2">
                                                    <a href="{{ url('product/'.$product->id) }}"
                                                        class="d-block text-center">
                                                        <img class="img-fluid"
                                                            src="{{ asset('storage/products/'.$product->image) }}"
                                                            alt="{{ $product->name }}">
                                                    </a>
                                                </div>

                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">
                                                            AED {{ number_format($product->price, 2) }}
                                                        </div>
                                                    </div>

                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="{{ url('product/'.$product->id) }}"
                                                            class="btn-add-cart btn-primary transition-3d-hover">
                                                            <i class="ec ec-add-to-cart"></i>
                                                        </a>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="{{ url('wishlist/'.$product->id) }}"
                                                        class="text-gray-6 font-size-13">
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
                <!-- End Recommended Products -->
                <!-- Shop-control-bar Title -->
                <div class="flex-center-between mb-3">
                    <h3 class="font-size-25 mb-0">Shop</h3>
                </div>
                <!-- End shop-control-bar Title -->
                <!-- Shop-control-bar -->
                <div class="bg-gray-1 flex-center-between borders-radius-9 py-1">
                    <div class="d-xl-none">
                        <!-- Account Sidebar Toggle Button -->
                        <a id="sidebarNavToggler1" class="btn btn-sm py-1 font-weight-normal" href="javascript:;" role="button"
                            aria-controls="sidebarContent1"
                            aria-haspopup="true"
                            aria-expanded="false"
                            data-unfold-event="click"
                            data-unfold-hide-on-scroll="false"
                            data-unfold-target="#sidebarContent1"
                            data-unfold-type="css-animation"
                            data-unfold-animation-in="fadeInLeft"
                            data-unfold-animation-out="fadeOutLeft"
                            data-unfold-duration="500">
                            <i class="fas fa-sliders-h"></i> <span class="ml-1">Filters</span>
                        </a>
                        <!-- End Account Sidebar Toggle Button -->
                    </div>
                    <div class="px-3 d-none d-xl-block">
                        <ul class="nav nav-tab-shop" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-one-example1-tab" data-toggle="pill" href="#pills-one-example1" role="tab" aria-controls="pills-one-example1" aria-selected="false">
                                    <div class="d-md-flex justify-content-md-center align-items-md-center">
                                        <i class="fa fa-th"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-three-example1-tab" data-toggle="pill" href="#pills-three-example1" role="tab" aria-controls="pills-three-example1" aria-selected="true">
                                    <div class="d-md-flex justify-content-md-center align-items-md-center">
                                        <i class="fa fa-list"></i>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="d-flex">
                        <form method="get">
                            <!-- Select -->
                            <select class="js-select selectpicker dropdown-select max-width-200 max-width-160-sm right-dropdown-0 px-2 px-xl-0"
                                data-style="btn-sm bg-white font-weight-normal py-2 border text-gray-20 bg-lg-down-transparent border-lg-down-0">
                                <option value="one" selected>Default sorting</option>
                                <option value="two">Sort by popularity</option>
                                <option value="three">Sort by average rating</option>
                                <option value="four">Sort by latest</option>
                                <option value="five">Sort by price: low to high</option>
                                <option value="six">Sort by price: high to low</option>
                            </select>
                            <!-- End Select -->
                        </form>

                    </div>
                </div>
                <!-- End Shop-control-bar -->
                <!-- Shop Body -->
                <!-- Tab Content -->
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade pt-2 show active" id="pills-one-example1" role="tabpanel" aria-labelledby="pills-one-example1-tab" data-target-group="groups">
                        <ul class="row list-unstyled products-group no-gutters">
                            @foreach($products as $product)

                            <li class="col-6 col-md-3 col-wd-2gdot4 product-item
                        @if($loop->iteration % 5 == 4) remove-divider-md-lg remove-divider-xl @endif
                        @if($loop->iteration % 5 == 0) remove-divider-wd @endif">

                                <div class="product-item__outer h-100">
                                    <div class="product-item__inner px-xl-4 p-3">
                                        <div class="product-item__body pb-xl-2">

                                            <div class="mb-2">
                                                <a href="{{ url('products?category='.$product->category_id) }}" class="font-size-12 text-gray-5">
                                                    {{ $product->category->name ?? 'Category' }}
                                                </a>
                                            </div>

                                            <h5 class="mb-1 product-item__title">
                                                <a href="{{ url('product/'.$product->id) }}" class="text-blue font-weight-bold">
                                                    {{ $product->name }}
                                                </a>
                                            </h5>

                                            <div class="mb-2">
                                                <a href="{{ url('product/'.$product->id) }}" class="d-block text-center">
                                                    <img class="img-fluid"
                                                        src="{{ asset('storage/products/'.$product->image) }}"
                                                        alt="{{ $product->name }}">
                                                </a>
                                            </div>

                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">
                                                        AED {{ number_format($product->price, 2) }}
                                                    </div>
                                                </div>

                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="{{ url('product/'.$product->id) }}" class="btn-add-cart btn-primary transition-3d-hover">
                                                        <i class="ec ec-add-to-cart"></i>
                                                    </a>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="{{ url('wishlist/'.$product->id) }}" class="text-gray-6 font-size-13">
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
                        <ul class="d-block list-unstyled products-group prodcut-list-view">

                            @foreach($products as $product)

                            <li class="product-item remove-divider">
                                <div class="product-item__outer w-100">
                                    <div class="product-item__inner remove-prodcut-hover py-4 row">

                                        <div class="product-item__header col-6 col-md-4">
                                            <div class="mb-2">
                                                <a href="{{ url('product/'.$product->id) }}" class="d-block text-center">
                                                    <img class="img-fluid"
                                                        src="{{ asset('storage/products/'.$product->image) }}"
                                                        alt="{{ $product->name }}">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="product-item__body col-6 col-md-5">
                                            <div class="pr-lg-10">

                                                <div class="mb-2">
                                                    <a href="{{ url('products?category='.$product->category_id) }}" class="font-size-12 text-gray-5">
                                                        {{ $product->category->name ?? 'Category' }}
                                                    </a>
                                                </div>

                                                <h5 class="mb-2 product-item__title">
                                                    <a href="{{ url('product/'.$product->id) }}" class="text-blue font-weight-bold">
                                                        {{ $product->name }}
                                                    </a>
                                                </h5>

                                                <div class="prodcut-price mb-2 d-md-none">
                                                    <div class="text-gray-100">
                                                        AED {{ number_format($product->price, 2) }}
                                                    </div>
                                                </div>

                                                <ul class="font-size-12 p-0 text-gray-110 mb-4 d-none d-md-block">
                                                    {{ Str::limit($product->description, 80) }}
                                                </ul>

                                            </div>
                                        </div>

                                        <div class="product-item__footer col-md-3 d-md-block">
                                            <div class="mb-3">
                                                <div class="prodcut-price mb-2">
                                                    <div class="text-gray-100">
                                                        AED {{ number_format($product->price, 2) }}
                                                    </div>
                                                </div>

                                                <div class="prodcut-add-cart">
                                                    <a href="{{ url('product/'.$product->id) }}"
                                                        class="btn btn-sm btn-block btn-primary-dark btn-wide transition-3d-hover">
                                                        Add to cart
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="flex-horizontal-center justify-content-between justify-content-wd-center flex-wrap">
                                                <a href="{{ url('wishlist/'.$product->id) }}"
                                                    class="text-gray-6 font-size-13 mx-wd-3">
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
                <!-- End Shop Body -->
                <!-- Shop Pagination -->
                <nav class="d-md-flex justify-content-between align-items-center border-top pt-3" aria-label="Page navigation example">
                    {{ $products->links() }}
                </nav>
                <!-- End Shop Pagination -->
            </div>
        </div>
        <!-- Brand Carousel -->
        <!-- <div class="mb-6">
            <div class="py-2 border-top border-bottom">
                <div class="js-slick-carousel u-slick my-1"
                    data-slides-show="5"
                    data-slides-scroll="1"
                    data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-normal u-slick__arrow-centered--y"
                    data-arrow-left-classes="fa fa-angle-left u-slick__arrow-classic-inner--left z-index-9"
                    data-arrow-right-classes="fa fa-angle-right u-slick__arrow-classic-inner--right"
                    data-responsive='[{
                                "breakpoint": 992,
                                "settings": {
                                    "slidesToShow": 2
                                }
                            }, {
                                "breakpoint": 768,
                                "settings": {
                                    "slidesToShow": 1
                                }
                            }, {
                                "breakpoint": 554,
                                "settings": {
                                    "slidesToShow": 1
                                }
                            }]'>
                    <div class="js-slide">
                        <a href="#" class="link-hover__brand">
                            <img class="img-fluid m-auto max-height-50" src="../../assets/img/200X60/img1.png" alt="Image Description">
                        </a>
                    </div>
                    <div class="js-slide">
                        <a href="#" class="link-hover__brand">
                            <img class="img-fluid m-auto max-height-50" src="../../assets/img/200X60/img2.png" alt="Image Description">
                        </a>
                    </div>
                    <div class="js-slide">
                        <a href="#" class="link-hover__brand">
                            <img class="img-fluid m-auto max-height-50" src="../../assets/img/200X60/img3.png" alt="Image Description">
                        </a>
                    </div>
                    <div class="js-slide">
                        <a href="#" class="link-hover__brand">
                            <img class="img-fluid m-auto max-height-50" src="../../assets/img/200X60/img4.png" alt="Image Description">
                        </a>
                    </div>
                    <div class="js-slide">
                        <a href="#" class="link-hover__brand">
                            <img class="img-fluid m-auto max-height-50" src="../../assets/img/200X60/img5.png" alt="Image Description">
                        </a>
                    </div>
                    <div class="js-slide">
                        <a href="#" class="link-hover__brand">
                            <img class="img-fluid m-auto max-height-50" src="../../assets/img/200X60/img6.png" alt="Image Description">
                        </a>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- End Brand Carousel -->
    </div>
</main>
<!-- ========== END MAIN CONTENT ========== -->
@include('footer')