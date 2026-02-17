@include('header')

<!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main">
    <!-- Slider Section -->
    <div class="mb-4">
        <div class="bg-img-hero" style="background-image: url(../../assets/img/1920X422/img2.jpg);">
            <div class="container overflow-hidden">
                <div class="js-slick-carousel u-slick"
                    data-pagi-classes="text-center position-absolute right-0 bottom-0 left-0 u-slick__pagination u-slick__pagination--long justify-content-center mb-3 mb-md-4">
                    <div class="js-slide">
                        <div class="row pt-7 py-md-0">
                            <div class="d-none d-wd-block offset-1"></div>
                            <div class="col-xl col col-md-6 mt-md-8 mt-lg-10">
                                <div class="ml-xl-4">
                                    <h6 class="font-size-15 font-weight-bold mb-2 text-cyan"
                                        data-scs-animation-in="fadeInUp">
                                        SHOP TO GET WHAT YOU LOVE
                                    </h6>
                                    <h1 class="font-size-46 text-lh-50 font-weight-light mb-8"
                                        data-scs-animation-in="fadeInUp"
                                        data-scs-animation-delay="200">
                                        Taste the Candies <stong class="font-weight-bold">You Grew Up With.</stong>
                                    </h1>
                                    <a href="products.php" class="btn btn-primary transition-3d-hover rounded-lg font-weight-normal py-2 px-md-7 px-3 font-size-16"
                                        data-scs-animation-in="fadeInUp"
                                        data-scs-animation-delay="300">
                                        Shop Now
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-7 col-6 d-flex align-items-end ml-auto ml-md-0"
                                data-scs-animation-in="fadeInRight"
                                data-scs-animation-delay="500">
                                <img class="img-fluid ml-auto mr-10 mr-wd-auto" src="{{ asset('assets/img/ban1.png') }}" alt="Image Description">
                            </div>
                        </div>
                    </div>
                    <div class="js-slide">
                        <div class="row pt-7 py-md-0">
                            <div class="d-none d-wd-block offset-1"></div>
                            <div class="col-xl col col-md-6 mt-md-8 mt-lg-10">
                                <div class="ml-xl-4">
                                    <h6 class="font-size-15 font-weight-bold mb-2 text-cyan"
                                        data-scs-animation-in="fadeInUp">
                                        SHOP TO GET WHAT YOU LOVE
                                    </h6>
                                    <h1 class="font-size-46 text-lh-50 font-weight-light mb-8"
                                        data-scs-animation-in="fadeInUp"
                                        data-scs-animation-delay="200">
                                        The Taste of Yesterday, <stong class="font-weight-bold"> Delivered Today.</stong>
                                    </h1>
                                    <a href="products.php" class="btn btn-primary transition-3d-hover rounded-lg font-weight-normal py-2 px-md-7 px-3 font-size-16"
                                        data-scs-animation-in="fadeInUp"
                                        data-scs-animation-delay="300">
                                        Shop Now
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-7 col-6 flex-horizontal-center ml-auto ml-md-0"
                                data-scs-animation-in="fadeInRight"
                                data-scs-animation-delay="500">
                                <img class="img-fluid ml-auto mr-10 mr-wd-auto h-100" src="{{ asset('assets/img/ban1.png') }}" alt="Image Description">
                            </div>
                        </div>
                    </div>
                    <div class="js-slide">
                        <div class="row pt-7 py-md-0">
                            <div class="d-none d-wd-block offset-1"></div>
                            <div class="col-xl col col-md-6 mt-md-8 mt-lg-10">
                                <div class="ml-xl-4">
                                    <h6 class="font-size-15 font-weight-bold mb-2 text-cyan"
                                        data-scs-animation-in="fadeInUp">
                                        SHOP TO GET WHAT YOU LOVE
                                    </h6>
                                    <h1 class="font-size-46 text-lh-50 font-weight-light mb-8"
                                        data-scs-animation-in="fadeInUp"
                                        data-scs-animation-delay="200">
                                        Relive Your Childhood, <stong class="font-weight-bold">One Candy at a Time.</stong>
                                    </h1>
                                    <a href="products.php" class="btn btn-primary transition-3d-hover rounded-lg font-weight-normal py-2 px-md-7 px-3 font-size-16"
                                        data-scs-animation-in="fadeInUp"
                                        data-scs-animation-delay="300">
                                        Shop Now
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-7 col-6 flex-horizontal-center ml-auto ml-md-0"
                                data-scs-animation-in="fadeInRight"
                                data-scs-animation-delay="500">
                                <img class="img-fluid ml-auto mr-10 mr-wd-auto h-100" src="{{ asset('assets/img/ban1.png') }}" alt="Image Description">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Slider Section -->
    <div class="container">
        <!-- Banner -->
        <div class="row mb-6 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
            <?php
            $categories = [
                "Nostalgia Candies",
                "Nostalgia Chocolates",
                "Nostalgia Syrups",
                "Nostalgia Own Products"
            ];

            for ($i = 0; $i < count($categories); $i++) { ?>
                <div class="col-md-6 mb-4 mb-xl-0 col-xl-4 col-wd-3 flex-shrink-0 flex-xl-shrink-1 <?php if ($i == 4) { ?>d-xl-none d-wd-block <?php } ?>">
                    <a href="products.php" class="min-height-146 py-1 py-xl-2 py-wd-1 banner-bg d-flex align-items-center text-gray-90">
                        <div class="col-6 col-xl-7 col-wd-6 pr-0">
                            <img class="img-fluid" src="../../assets/img/categories/<?php echo ($i + 1); ?>.jpg" alt="Image Description">
                        </div>
                        <div class="col-6 col-xl-5 col-wd-6 pr-xl-4 pr-wd-3">
                            <div class="mb-2 pb-1 font-size-18 font-weight-light text-ls-n1 text-lh-23">
                                <?php echo $categories[$i]; ?>
                            </div>
                            <div class="link text-gray-90 font-weight-bold font-size-15" href="#">
                                Shop now
                                <span class="link__icon ml-1">
                                    <span class="link__icon-inner"><i class="ec ec-arrow-right-categproes"></i></span>
                                </span>
                            </div>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
        <!-- End Banner -->
        <!-- Feature List -->
        <div class="mb-6 row border rounded-lg mx-0 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
            <!-- Feature List -->
            <div class="media col px-6 px-xl-4 px-wd-8 flex-shrink-0 flex-xl-shrink-1 min-width-270-all py-3">
                <div class="u-avatar mr-2">
                    <i class="text-primary ec ec-transport font-size-46"></i>
                </div>
                <div class="media-body text-center">
                    <span class="d-block font-weight-bold text-dark">Free Delivery</span>
                    <div class=" text-secondary">from AED50</div>
                </div>
            </div>
            <!-- End Feature List -->

            <!-- Feature List -->
            <div class="media col px-6 px-xl-4 px-wd-8 flex-shrink-0 flex-xl-shrink-1 min-width-270-all border-left py-3">
                <div class="u-avatar mr-2">
                    <i class="text-primary ec ec-customers font-size-56"></i>
                </div>
                <div class="media-body text-center">
                    <span class="d-block font-weight-bold text-dark">99 % Customer</span>
                    <div class=" text-secondary">Feedbacks</div>
                </div>
            </div>
            <!-- End Feature List -->

            <!-- Feature List -->
            <div class="media col px-6 px-xl-4 px-wd-8 flex-shrink-0 flex-xl-shrink-1 min-width-270-all border-left py-3">
                <div class="u-avatar mr-2">
                    <i class="text-primary ec ec-returning font-size-46"></i>
                </div>
                <div class="media-body text-center">
                    <span class="d-block font-weight-bold text-dark">365 Days</span>
                    <div class=" text-secondary">for free return</div>
                </div>
            </div>
            <!-- End Feature List -->

            <!-- Feature List -->
            <div class="media col px-6 px-xl-4 px-wd-8 flex-shrink-0 flex-xl-shrink-1 min-width-270-all border-left py-3">
                <div class="u-avatar mr-2">
                    <i class="text-primary ec ec-payment font-size-46"></i>
                </div>
                <div class="media-body text-center">
                    <span class="d-block font-weight-bold text-dark">Payment</span>
                    <div class=" text-secondary">Secure System</div>
                </div>
            </div>
            <!-- End Feature List -->

            <!-- Feature List -->
            <div class="media col px-6 px-xl-4 px-wd-8 flex-shrink-0 flex-xl-shrink-1 min-width-270-all border-left py-3">
                <div class="u-avatar mr-2">
                    <i class="text-primary ec ec-tag font-size-46"></i>
                </div>
                <div class="media-body text-center">
                    <span class="d-block font-weight-bold text-dark">Only Best</span>
                    <div class=" text-secondary">Brands</div>
                </div>
            </div>
            <!-- End Feature List -->
        </div>
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
                        <?php
                        $products = [
                            "Juzt Jelly",
                            "Alpanlibe Gold",
                            "Big Babool",
                            "Milk Éclair",
                            "Fruit Candy",
                            "Jelly Candy"
                        ];

                        for ($i = 0; $i < count($products); $i++) { ?>
                            <li class="col-6 col-md-4 col-xl product-item <?php if ($i == (count($products) - 1)) { ?>remove-divider-wd remove-divider-md-lg <?php } ?>">
                                <div class="product-item__outer h-100 w-100">
                                    <div class="product-item__inner px-xl-4 p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2">
                                                <a href="products.php" class="d-block text-center"><img class="img-fluid" src="../../assets/img/products/<?php echo ($i + 1); ?>.png" alt="Image Description"></a>
                                            </div>
                                            <div class="mb-2"><a href="products.php" class="font-size-12 text-gray-5">Nostalgia Candies</a></div>
                                                <h5 class="mb-1 product-item__title"><a href="products.php" class="text-blue font-weight-bold"><?php echo $products[$i]; ?></a></h5>
                                            <div class="flex-center-between mb-1">
                                                
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">20.00 AED</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="cart.php" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <!--<a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.php" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>-->
                                                <a href="wishlist.php" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php } ?>

                    </ul>
                </div>
                <div class="tab-pane fade pt-2" id="pills-two-example1" role="tabpanel" aria-labelledby="pills-two-example1-tab" data-target-group="groups">
                    <ul class="row list-unstyled products-group no-gutters">
                        <?php
                        $products = [
                            "Juzt Jelly",
                            "Alpanlibe Gold",
                            "Big Babool",
                            "Milk Éclair",
                            "Fruit Candy",
                            "Jelly Candy",
                            "Joker Candy",
                            "Mango Bite",
                            "Orange Bite",
                            "Orange Éclair",
                            "Party Time",
                            "Popys",
                            "Poppins",
                            "Sweet Crisp Candy",
                            "Coffy Bite",
                            "Crazy Car Toy Candy",
                            "Toy Lollipop Candy",
                            "Uppum Mulakum",
                            "Crazy Cycle Candy",
                            "Mysur Pack"
                        ];
                        for ($i = 7; $i <= 12; $i++) { ?>
                            <li class="col-6 col-md-4 col-xl product-item<?php if ($i == 12) { ?> remove-divider-wd remove-divider-md-lg <?php } ?>">
                                <div class="product-item__outer h-100 w-100">
                                    <div class="product-item__inner px-xl-4 p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="products.php" class="font-size-12 text-gray-5">Nostalgia Candies</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="products.php" class="text-blue font-weight-bold"><?php echo $products[$i]; ?></a></h5>
                                            <div class="mb-2">
                                                <a href="products.php" class="d-block text-center"><img class="img-fluid" src="../../assets/img/products/<?php echo $i; ?>.png" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">25.00 AED</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="cart.php" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <!--<a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.php" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>-->
                                                <a href="wishlist.php" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php } ?>

                    </ul>
                </div>
                <div class="tab-pane fade pt-2" id="pills-three-example1" role="tabpanel" aria-labelledby="pills-three-example1-tab" data-target-group="groups">
                    <ul class="row list-unstyled products-group no-gutters">
                        <?php
                        $products = [
                            "Juzt Jelly",
                            "Alpanlibe Gold",
                            "Big Babool",
                            "Milk Éclair",
                            "Fruit Candy",
                            "Jelly Candy",
                            "Joker Candy",
                            "Mango Bite",
                            "Orange Bite",
                            "Orange Éclair",
                            "Party Time",
                            "Popys",
                            "Poppins",
                            "Sweet Crisp Candy",
                            "Coffy Bite",
                            "Crazy Car Toy Candy",
                            "Toy Lollipop Candy",
                            "Uppum Mulakum",
                            "Crazy Cycle Candy",
                            "Mysur Pack"
                        ];
                        for ($i = 13; $i <= 18; $i++) { ?>
                            <li class="col-6 col-md-4 col-xl product-item<?php if ($i == 18) { ?>remove-divider-wd remove-divider-md-lg <?php } ?>">
                                <div class="product-item__outer h-100 w-100">
                                    <div class="product-item__inner px-xl-4 p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="products.php" class="font-size-12 text-gray-5">Nostalgia Candies</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="products.php" class="text-blue font-weight-bold"><?php echo $products[$i]; ?></a></h5>
                                            <div class="mb-2">
                                                <a href="products.php" class="d-block text-center"><img class="img-fluid" src="../../assets/img/products/<?php echo $i; ?>.png" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">25.00 AED</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="cart.php" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <!--<a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.php" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>-->
                                                <a href="wishlist.php" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php } ?>

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
                        <?php
                        $products = [
                            ["name" => "Juzt Jelly", "image" => "1.png", "price" => "25.00 AED"],
                            ["name" => "Alpanlibe Gold", "image" => "2.png", "price" => "25.00 AED"],
                            ["name" => "Big Babool", "image" => "3.png", "price" => "25.00 AED"],
                            ["name" => "Milk Éclair", "image" => "4.png", "price" => "25.00 AED"],
                            ["name" => "Fruit Candy", "image" => "5.png", "price" => "25.00 AED"],
                            ["name" => "Jelly Candy", "image" => "6.png", "price" => "25.00 AED"],
                            ["name" => "Joker Candy", "image" => "7.png", "price" => "25.00 AED"],
                            ["name" => "Mango Bite", "image" => "8.png", "price" => "25.00 AED"],
                            ["name" => "Orange Bite", "image" => "9.png", "price" => "25.00 AED"],
                            ["name" => "Orange Éclair", "image" => "10.png", "price" => "25.00 AED"],
                            ["name" => "Party Time", "image" => "11.png", "price" => "25.00 AED"],
                            ["name" => "Popys", "image" => "12.png", "price" => "25.00 AED"]
                        ];
                        $slides = array_chunk($products, 4);
                        foreach ($slides as $slide) {
                        ?>
                            <div class="js-slide">
                                <ul class="row list-unstyled products-group no-gutters mb-0 overflow-visible">

                                    <?php foreach ($slide as $product) { ?>
                                        <li class="col-md-6 product-item product-item__card mb-2 remove-divider pr-md-2 border-bottom-0">
                                            <div class="product-item__outer h-100 w-100">
                                                <div class="product-item__inner p-md-3 row no-gutters bg-white max-width-334">

                                                    <!-- Image -->
                                                    <div class="col col-lg-auto product-media-left">
                                                        <a href="#" class="max-width-120 d-block">
                                                            <img class="img-fluid"
                                                                src="../../assets/img/products/<?php echo $product['image']; ?>"
                                                                alt="<?php echo $product['name']; ?>">
                                                        </a>
                                                    </div>

                                                    <!-- Content -->
                                                    <div class="col product-item__body pl-2 pl-lg-3 pr-3 pt-1">
                                                        <div class="mb-2">
                                                            <div class="mb-2">
                                                                <span class="font-size-12 text-gray-5">Nostalgia Candies</span>
                                                            </div>

                                                            <h5 class="product-item__title">
                                                                <a href="#" class="text-blue font-weight-bold">
                                                                    <?php echo $product['name']; ?>
                                                                </a>
                                                            </h5>
                                                        </div>

                                                        <div class="flex-center-between mb-2">
                                                            <div class="prodcut-price">
                                                                <div class="text-gray-100">
                                                                    <?php echo $product['price']; ?>
                                                                </div>
                                                            </div>

                                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                                <a href="#" class="btn-add-cart btn-primary transition-3d-hover">
                                                                    <i class="ec ec-add-to-cart"></i>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="product-item__footer bg-white">
                                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                                <a href="#" class="text-gray-6 font-size-13">
                                                                    <i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist
                                                                </a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    <?php } ?>

                                </ul>
                            </div>
                        <?php } ?>

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
                <?php
                $nostalgiaProducts = [
                    ["name" => "Juzt Jelly", "image" => "1.png"],
                    ["name" => "Alpanlibe Gold", "image" => "2.png"],
                    ["name" => "Big Babool", "image" => "3.png"],
                    ["name" => "Milk Éclair", "image" => "4.png"],
                    ["name" => "Fruit Candy", "image" => "5.png"],
                    ["name" => "Jelly Candy", "image" => "6.png"],
                    ["name" => "Joker Candy", "image" => "7.png"],
                    ["name" => "Mango Bite", "image" => "8.png"],
                    ["name" => "Orange Bite", "image" => "9.png"],
                    ["name" => "Orange Éclair", "image" => "10.png"],
                    ["name" => "Party Time", "image" => "11.png"],
                    ["name" => "Popys", "image" => "12.png"],
                    ["name" => "Joker Candy", "image" => "7.png"],
                    ["name" => "Mango Bite", "image" => "8.png"],
                    ["name" => "Orange Bite", "image" => "9.png"],
                    ["name" => "Orange Éclair", "image" => "10.png"],
                    ["name" => "Party Time", "image" => "11.png"],
                    ["name" => "Popys", "image" => "12.png"]
                ];
                $slides = array_chunk($nostalgiaProducts, 6);

                foreach ($slides as $slide) { ?>
                    <div class="js-slide">
                        <ul class="row list-unstyled products-group no-gutters mb-0 overflow-visible">

                            <?php foreach ($slide as $product) { ?>
                                <li class="col-md-4 product-item product-item__card pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
                                    <div class="product-item__outer h-100 w-100">
                                        <div class="product-item__inner p-md-3 row no-gutters">

                                            <!-- Image -->
                                            <div class="col col-lg-auto col-xl-5 col-wd-auto product-media-left">
                                                <a href="#" class="max-width-150 d-block">
                                                    <img class="img-fluid"
                                                        src="../../assets/img/products/<?php echo $product['image']; ?>"
                                                        alt="<?php echo $product['name']; ?>">
                                                </a>
                                            </div>

                                            <!-- Content -->
                                            <div class="col col-xl-7 col-wd product-item__body pl-2 pl-lg-3 pl-xl-0 pl-wd-3 mr-wd-1">
                                                <div class="mb-4 mb-xl-2 mb-wd-6">
                                                    <div class="mb-2">
                                                        <span class="font-size-12 text-gray-5">Nostalgia Candies</span>
                                                    </div>

                                                    <h5 class="product-item__title">
                                                        <a href="#" class="text-blue font-weight-bold">
                                                            <?php echo $product['name']; ?>
                                                        </a>
                                                    </h5>
                                                </div>

                                                <div class="flex-center-between mb-3">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">25.00 AED</div>
                                                    </div>

                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="#" class="btn-add-cart btn-primary transition-3d-hover">
                                                            <i class="ec ec-add-to-cart"></i>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="#" class="text-gray-6 font-size-13">
                                                            <i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                            <?php } ?>

                        </ul>
                    </div>
                <?php } ?>


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
                <?php
                $nostalgiaProducts = [
                    ["name" => "Juzt Jelly", "image" => "1.png"],
                    ["name" => "Alpanlibe Gold", "image" => "2.png"],
                    ["name" => "Big Babool", "image" => "3.png"],
                    ["name" => "Milk Éclair", "image" => "4.png"],
                    ["name" => "Fruit Candy", "image" => "5.png"],
                    ["name" => "Jelly Candy", "image" => "6.png"],
                    ["name" => "Joker Candy", "image" => "7.png"],
                    ["name" => "Mango Bite", "image" => "8.png"]
                ];
                $slides = array_chunk($nostalgiaProducts, 4);

                foreach ($slides as $slide) { ?>
                    <div class="js-slide">
                        <ul class="row list-unstyled products-group no-gutters mb-0 overflow-visible">

                            <?php foreach ($slide as $product) { ?>
                                <li class="col-md-3 product-item product-item__card pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
                                    <div class="product-item__outer h-100 w-100">
                                        <div class="product-item__inner p-md-3 row no-gutters">

                                            <!-- Image -->
                                            <div class="col col-lg-auto col-xl-5 col-wd-auto product-media-left">
                                                <a href="#" class="max-width-150 d-block">
                                                    <img class="img-fluid"
                                                        src="../../assets/img/products/<?php echo $product['image']; ?>"
                                                        alt="<?php echo $product['name']; ?>">
                                                </a>
                                            </div>

                                            <!-- Content -->
                                            <div class="col col-xl-7 col-wd product-item__body pl-2 pl-lg-3 pl-xl-0 pl-wd-3 mr-wd-1">
                                                <div class="mb-4 mb-xl-2 mb-wd-6">
                                                    <div class="mb-2">
                                                        <span class="font-size-12 text-gray-5">Nostalgia Candies</span>
                                                    </div>

                                                    <h5 class="product-item__title">
                                                        <a href="#" class="text-blue font-weight-bold">
                                                            <?php echo $product['name']; ?>
                                                        </a>
                                                    </h5>
                                                </div>

                                                <div class="flex-center-between mb-3">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">25.00 AED</div>
                                                    </div>

                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="#" class="btn-add-cart btn-primary transition-3d-hover">
                                                            <i class="ec ec-add-to-cart"></i>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="#" class="text-gray-6 font-size-13">
                                                            <i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                            <?php } ?>

                        </ul>
                    </div>
                <?php } ?>
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
                        <li class="nav-item flex-shrink-0 flex-lg-shrink-1">
                            <a class="nav-link rounded-pill active" id="Tpills-one-example1-tab" data-toggle="pill" href="#Tpills-one-example1" role="tab" aria-controls="Tpills-one-example1" aria-selected="true">Candies</a>
                        </li>
                        <li class="nav-item flex-shrink-0 flex-lg-shrink-1">
                            <a class="nav-link rounded-pill" id="Tpills-two-example1-tab" data-toggle="pill" href="#Tpills-two-example1" role="tab" aria-controls="Tpills-two-example1" aria-selected="false">Chocolates</a>
                        </li>
                        <li class="nav-item flex-shrink-0 flex-lg-shrink-1">
                            <a class="nav-link rounded-pill" id="Tpills-three-example1-tab" data-toggle="pill" href="#Tpills-three-example1" role="tab" aria-controls="Tpills-three-example1" aria-selected="false">Syrups</a>
                        </li>
                        <li class="nav-item flex-shrink-0 flex-lg-shrink-1">
                            <a class="nav-link rounded-pill" id="Tpills-four-example1-tab" data-toggle="pill" href="#Tpills-four-example1" role="tab" aria-controls="Tpills-four-example1" aria-selected="false">Own Products</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End Nav Pills -->

            <!-- Tab Content -->
            <div class="tab-content" id="Tpills-tabContent">
                <div class="tab-pane fade pt-2 show active" id="Tpills-one-example1" role="tabpanel" aria-labelledby="Tpills-one-example1-tab">
                    <div class="row no-gutters">
                        <div class="col-md-6 col-lg-7 col-wd-8 d-md-flex d-wd-block">
                            <?php
                            $products = [
                                ["name" => "Juzt Jelly", "image" => "1.png"],
                                ["name" => "Alpanlibe Gold", "image" => "2.png"],
                                ["name" => "Big Babool", "image" => "3.png"],
                                ["name" => "Milk Éclair", "image" => "4.png"],
                                ["name" => "Fruit Candy", "image" => "5.png"],
                                ["name" => "Jelly Candy", "image" => "6.png"],
                                ["name" => "Joker Candy", "image" => "7.png"],
                                ["name" => "Mango Bite", "image" => "8.png"]
                            ];
                            ?>
                            <ul class="row list-unstyled products-group no-gutters mb-0">
                                <?php foreach ($products as $index => $product) { ?>

                                    <li class="col-md-6 col-lg-4 col-wd-3 product-item 
                                                <?php echo (($index + 1) % 4 == 0) ? 'remove-divider' : ''; ?>">

                                        <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                            <div class="product-item__inner bg-white p-3">

                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2">
                                                        <span class="font-size-12 text-gray-5">Nostalgia Candies</span>
                                                    </div>

                                                    <h5 class="mb-1 product-item__title">
                                                        <a href="#" class="text-blue font-weight-bold">
                                                            <?php echo $product['name']; ?>
                                                        </a>
                                                    </h5>

                                                    <div class="mb-2">
                                                        <a href="#" class="d-block text-center">
                                                            <img class="img-fluid"
                                                                src="../../assets/img/products/<?php echo $product['image']; ?>"
                                                                alt="<?php echo $product['name']; ?>">
                                                        </a>
                                                    </div>

                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">25.00 AED</div>
                                                        </div>

                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="#" class="btn-add-cart btn-primary transition-3d-hover">
                                                                <i class="ec ec-add-to-cart"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <!--<a href="#" class="text-gray-6 font-size-13">-->
                                                        <!--    <i class="ec ec-compare mr-1 font-size-15"></i> Compare-->
                                                        <!--</a>-->
                                                        <a href="#" class="text-gray-6 font-size-13">
                                                            <i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist
                                                        </a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </li>

                                <?php } ?>
                            </ul>

                        </div>
                        <div class="col-md-6 col-lg-5 col-wd-4 products-group-1">
                            <ul class="row list-unstyled products-group no-gutters bg-white h-100 mb-0">
                                <li class="col product-item remove-divider">
                                    <div class="product-item__outer h-100 w-100 w-100 prodcut-box-shadow">
                                        <div class="product-item__inner bg-white p-3">
                                            <div class="product-item__body d-flex flex-column">
                                                <div class="mb-1">
                                                    <div class="mb-2"><a href="products.php" class="font-size-12 text-gray-5">Nostalgia Chocolates</a></div>
                                                    <h5 class="mb-0 product-item__title"><a href="products.php" class="text-blue font-weight-bold">Toy lollipop candy</a></h5>
                                                </div>
                                                <div class="mb-1 min-height-8-1">
                                                    <a href="#" class="d-block text-center my-4 mb-xl-5 mb-lg-0 mt-xl-0 mb-xl-0 mb-wd-5"><img class="img-fluid" src="../../assets/img/img4.JPG" alt="Image Description"></a>
                                                    <!-- Gallery -->
                                                    <div class="row mx-gutters-2 mb-3">
                                                        <div class="col-auto">
                                                            <!-- Gallery -->
                                                            <a class="js-fancybox max-width-60 u-media-viewer" href="javascript:;"
                                                                data-src="../../assets/img/products/13.png"
                                                                data-fancybox="fancyboxGallery6"
                                                                data-caption="Electro in frames - image #01"
                                                                data-speed="700"
                                                                data-is-infinite="true">
                                                                <img class="img-fluid border" src="../../assets/img/products/13.png" alt="Image Description">

                                                                <span class="u-media-viewer__container">
                                                                    <span class="u-media-viewer__icon">
                                                                        <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                            <!-- End Gallery -->
                                                        </div>

                                                        <div class="col-auto">
                                                            <!-- Gallery -->
                                                            <a class="js-fancybox max-width-60 u-media-viewer" href="javascript:;"
                                                                data-src="../../assets/img/products/4.png"
                                                                data-fancybox="fancyboxGallery6"
                                                                data-caption="Electro in frames - image #02"
                                                                data-speed="700"
                                                                data-is-infinite="true">
                                                                <img class="img-fluid border" src="../../assets/img/products/4.png" alt="Image Description">

                                                                <span class="u-media-viewer__container">
                                                                    <span class="u-media-viewer__icon">
                                                                        <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                            <!-- End Gallery -->
                                                        </div>

                                                        <div class="col-auto">
                                                            <!-- Gallery -->
                                                            <a class="js-fancybox max-width-60 u-media-viewer" href="javascript:;"
                                                                data-src="../../assets/img/products/5.png"
                                                                data-fancybox="fancyboxGallery6"
                                                                data-caption="Electro in frames - image #03"
                                                                data-speed="700"
                                                                data-is-infinite="true">
                                                                <img class="img-fluid border" src="../../assets/img/products/5.png" alt="Image Description">

                                                                <span class="u-media-viewer__container">
                                                                    <span class="u-media-viewer__icon">
                                                                        <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                            <!-- End Gallery -->
                                                        </div>
                                                        <div class="col"></div>
                                                    </div>
                                                    <!-- End Gallery -->
                                                </div>
                                                <div class="flex-center-between">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">25.00 AED</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="cart.php" class="btn-add-cart btn-add-cart__wide btn-primary transition-3d-hover"><i class="ec ec-add-to-cart mr-2"></i> Add to Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <!--<a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.php" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>-->
                                                    <a href="wishlist.php" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade pt-2" id="Tpills-two-example1" role="tabpanel" aria-labelledby="Tpills-one-example1-tab">
                    <div class="row no-gutters">
                        <div class="col-md-6 col-lg-7 col-wd-8 d-md-flex d-wd-block">
                            <?php
                            $products = [
                                ["name" => "Juzt Jelly", "image" => "1.png"],
                                ["name" => "Alpanlibe Gold", "image" => "2.png"],
                                ["name" => "Big Babool", "image" => "3.png"],
                                ["name" => "Milk Éclair", "image" => "4.png"],
                                ["name" => "Fruit Candy", "image" => "5.png"],
                                ["name" => "Jelly Candy", "image" => "6.png"],
                                ["name" => "Joker Candy", "image" => "7.png"],
                                ["name" => "Mango Bite", "image" => "8.png"]
                            ];
                            ?>
                            <ul class="row list-unstyled products-group no-gutters mb-0">
                                <?php foreach ($products as $index => $product) { ?>

                                    <li class="col-md-6 col-lg-4 col-wd-3 product-item 
                                                <?php echo (($index + 1) % 4 == 0) ? 'remove-divider' : ''; ?>">

                                        <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                            <div class="product-item__inner bg-white p-3">

                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2">
                                                        <span class="font-size-12 text-gray-5">Nostalgia Candies</span>
                                                    </div>

                                                    <h5 class="mb-1 product-item__title">
                                                        <a href="#" class="text-blue font-weight-bold">
                                                            <?php echo $product['name']; ?>
                                                        </a>
                                                    </h5>

                                                    <div class="mb-2">
                                                        <a href="#" class="d-block text-center">
                                                            <img class="img-fluid"
                                                                src="../../assets/img/products/<?php echo $product['image']; ?>"
                                                                alt="<?php echo $product['name']; ?>">
                                                        </a>
                                                    </div>

                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">25.00 AED</div>
                                                        </div>

                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="#" class="btn-add-cart btn-primary transition-3d-hover">
                                                                <i class="ec ec-add-to-cart"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <!--<a href="#" class="text-gray-6 font-size-13">-->
                                                        <!--    <i class="ec ec-compare mr-1 font-size-15"></i> Compare-->
                                                        <!--</a>-->
                                                        <a href="#" class="text-gray-6 font-size-13">
                                                            <i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist
                                                        </a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </li>

                                <?php } ?>
                            </ul>


                        </div>
                        <div class="col-md-6 col-lg-5 col-wd-4 products-group-1">
                            <ul class="row list-unstyled products-group no-gutters bg-white h-100 mb-0">
                                <li class="col product-item remove-divider">
                                    <div class="product-item__outer h-100 w-100 w-100 prodcut-box-shadow">
                                        <div class="product-item__inner bg-white p-3">
                                            <div class="product-item__body d-flex flex-column">
                                                <div class="mb-1">
                                                    <div class="mb-2"><a href="products.php" class="font-size-12 text-gray-5">Nostalgia Chocolates</a></div>
                                                    <h5 class="mb-0 product-item__title"><a href="products.php" class="text-blue font-weight-bold">Toy lollipop candy</a></h5>
                                                </div>
                                                <div class="mb-1 min-height-8-1">
                                                    <a href="#" class="d-block text-center my-4 mb-xl-5 mb-lg-0 mt-xl-0 mb-xl-0 mb-wd-5"><img class="img-fluid" src="../../assets/img/img4.JPG" alt="Image Description"></a>
                                                    <!-- Gallery -->
                                                    <div class="row mx-gutters-2 mb-3">
                                                        <div class="col-auto">
                                                            <!-- Gallery -->
                                                            <a class="js-fancybox max-width-60 u-media-viewer" href="javascript:;"
                                                                data-src="../../assets/img/products/13.png"
                                                                data-fancybox="fancyboxGallery6"
                                                                data-caption="Electro in frames - image #01"
                                                                data-speed="700"
                                                                data-is-infinite="true">
                                                                <img class="img-fluid border" src="../../assets/img/products/13.png" alt="Image Description">

                                                                <span class="u-media-viewer__container">
                                                                    <span class="u-media-viewer__icon">
                                                                        <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                            <!-- End Gallery -->
                                                        </div>

                                                        <div class="col-auto">
                                                            <!-- Gallery -->
                                                            <a class="js-fancybox max-width-60 u-media-viewer" href="javascript:;"
                                                                data-src="../../assets/img/products/4.png"
                                                                data-fancybox="fancyboxGallery6"
                                                                data-caption="Electro in frames - image #02"
                                                                data-speed="700"
                                                                data-is-infinite="true">
                                                                <img class="img-fluid border" src="../../assets/img/products/4.png" alt="Image Description">

                                                                <span class="u-media-viewer__container">
                                                                    <span class="u-media-viewer__icon">
                                                                        <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                            <!-- End Gallery -->
                                                        </div>

                                                        <div class="col-auto">
                                                            <!-- Gallery -->
                                                            <a class="js-fancybox max-width-60 u-media-viewer" href="javascript:;"
                                                                data-src="../../assets/img/products/5.png"
                                                                data-fancybox="fancyboxGallery6"
                                                                data-caption="Electro in frames - image #03"
                                                                data-speed="700"
                                                                data-is-infinite="true">
                                                                <img class="img-fluid border" src="../../assets/img/products/5.png" alt="Image Description">

                                                                <span class="u-media-viewer__container">
                                                                    <span class="u-media-viewer__icon">
                                                                        <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                            <!-- End Gallery -->
                                                        </div>
                                                        <div class="col"></div>
                                                    </div>
                                                    <!-- End Gallery -->
                                                </div>
                                                <div class="flex-center-between">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">25.00 AED</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="cart.php" class="btn-add-cart btn-add-cart__wide btn-primary transition-3d-hover"><i class="ec ec-add-to-cart mr-2"></i> Add to Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <!--<a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.php" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>-->
                                                    <a href="wishlist.php" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade pt-2" id="Tpills-three-example1" role="tabpanel" aria-labelledby="Tpills-one-example1-tab">
                    <div class="row no-gutters">
                        <div class="col-md-6 col-lg-7 col-wd-8 d-md-flex d-wd-block">
                            <?php
                            $products = [
                                ["name" => "Juzt Jelly", "image" => "1.png"],
                                ["name" => "Alpanlibe Gold", "image" => "2.png"],
                                ["name" => "Big Babool", "image" => "3.png"],
                                ["name" => "Milk Éclair", "image" => "4.png"],
                                ["name" => "Fruit Candy", "image" => "5.png"],
                                ["name" => "Jelly Candy", "image" => "6.png"],
                                ["name" => "Joker Candy", "image" => "7.png"],
                                ["name" => "Mango Bite", "image" => "8.png"]
                            ];
                            ?>
                            <ul class="row list-unstyled products-group no-gutters mb-0">
                                <?php foreach ($products as $index => $product) { ?>

                                    <li class="col-md-6 col-lg-4 col-wd-3 product-item 
                                                <?php echo (($index + 1) % 4 == 0) ? 'remove-divider' : ''; ?>">

                                        <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                            <div class="product-item__inner bg-white p-3">

                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2">
                                                        <span class="font-size-12 text-gray-5">Nostalgia Candies</span>
                                                    </div>

                                                    <h5 class="mb-1 product-item__title">
                                                        <a href="#" class="text-blue font-weight-bold">
                                                            <?php echo $product['name']; ?>
                                                        </a>
                                                    </h5>

                                                    <div class="mb-2">
                                                        <a href="#" class="d-block text-center">
                                                            <img class="img-fluid"
                                                                src="../../assets/img/products/<?php echo $product['image']; ?>"
                                                                alt="<?php echo $product['name']; ?>">
                                                        </a>
                                                    </div>

                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">25.00 AED</div>
                                                        </div>

                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="#" class="btn-add-cart btn-primary transition-3d-hover">
                                                                <i class="ec ec-add-to-cart"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <!--<a href="#" class="text-gray-6 font-size-13">-->
                                                        <!--    <i class="ec ec-compare mr-1 font-size-15"></i> Compare-->
                                                        <!--</a>-->
                                                        <a href="#" class="text-gray-6 font-size-13">
                                                            <i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist
                                                        </a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </li>

                                <?php } ?>
                            </ul>


                        </div>
                        <div class="col-md-6 col-lg-5 col-wd-4 products-group-1">
                            <ul class="row list-unstyled products-group no-gutters bg-white h-100 mb-0">
                                <li class="col product-item remove-divider">
                                    <div class="product-item__outer h-100 w-100 w-100 prodcut-box-shadow">
                                        <div class="product-item__inner bg-white p-3">
                                            <div class="product-item__body d-flex flex-column">
                                                <div class="mb-1">
                                                    <div class="mb-2"><a href="products.php" class="font-size-12 text-gray-5">Nostalgia Chocolates</a></div>
                                                    <h5 class="mb-0 product-item__title"><a href="products.php" class="text-blue font-weight-bold">Toy lollipop candy</a></h5>
                                                </div>
                                                <div class="mb-1 min-height-8-1">
                                                    <a href="#" class="d-block text-center my-4 mb-xl-5 mb-lg-0 mt-xl-0 mb-xl-0 mb-wd-5"><img class="img-fluid" src="../../assets/img/img4.JPG" alt="Image Description"></a>
                                                    <!-- Gallery -->
                                                    <div class="row mx-gutters-2 mb-3">
                                                        <div class="col-auto">
                                                            <!-- Gallery -->
                                                            <a class="js-fancybox max-width-60 u-media-viewer" href="javascript:;"
                                                                data-src="../../assets/img/products/13.png"
                                                                data-fancybox="fancyboxGallery6"
                                                                data-caption="Electro in frames - image #01"
                                                                data-speed="700"
                                                                data-is-infinite="true">
                                                                <img class="img-fluid border" src="../../assets/img/products/13.png" alt="Image Description">

                                                                <span class="u-media-viewer__container">
                                                                    <span class="u-media-viewer__icon">
                                                                        <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                            <!-- End Gallery -->
                                                        </div>

                                                        <div class="col-auto">
                                                            <!-- Gallery -->
                                                            <a class="js-fancybox max-width-60 u-media-viewer" href="javascript:;"
                                                                data-src="../../assets/img/products/4.png"
                                                                data-fancybox="fancyboxGallery6"
                                                                data-caption="Electro in frames - image #02"
                                                                data-speed="700"
                                                                data-is-infinite="true">
                                                                <img class="img-fluid border" src="../../assets/img/products/4.png" alt="Image Description">

                                                                <span class="u-media-viewer__container">
                                                                    <span class="u-media-viewer__icon">
                                                                        <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                            <!-- End Gallery -->
                                                        </div>

                                                        <div class="col-auto">
                                                            <!-- Gallery -->
                                                            <a class="js-fancybox max-width-60 u-media-viewer" href="javascript:;"
                                                                data-src="../../assets/img/products/5.png"
                                                                data-fancybox="fancyboxGallery6"
                                                                data-caption="Electro in frames - image #03"
                                                                data-speed="700"
                                                                data-is-infinite="true">
                                                                <img class="img-fluid border" src="../../assets/img/products/5.png" alt="Image Description">

                                                                <span class="u-media-viewer__container">
                                                                    <span class="u-media-viewer__icon">
                                                                        <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                            <!-- End Gallery -->
                                                        </div>
                                                        <div class="col"></div>
                                                    </div>
                                                    <!-- End Gallery -->
                                                </div>
                                                <div class="flex-center-between">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">25.00 AED</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="cart.php" class="btn-add-cart btn-add-cart__wide btn-primary transition-3d-hover"><i class="ec ec-add-to-cart mr-2"></i> Add to Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <!--<a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.php" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>-->
                                                    <a href="wishlist.php" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade pt-2" id="Tpills-four-example1" role="tabpanel" aria-labelledby="Tpills-one-example1-tab">
                    <div class="row no-gutters">
                        <div class="col-md-6 col-lg-7 col-wd-8 d-md-flex d-wd-block">
                            <?php
                            $products = [
                                ["name" => "Juzt Jelly", "image" => "1.png"],
                                ["name" => "Alpanlibe Gold", "image" => "2.png"],
                                ["name" => "Big Babool", "image" => "3.png"],
                                ["name" => "Milk Éclair", "image" => "4.png"],
                                ["name" => "Fruit Candy", "image" => "5.png"],
                                ["name" => "Jelly Candy", "image" => "6.png"],
                                ["name" => "Joker Candy", "image" => "7.png"],
                                ["name" => "Mango Bite", "image" => "8.png"]
                            ];
                            ?>
                            <ul class="row list-unstyled products-group no-gutters mb-0">
                                <?php foreach ($products as $index => $product) { ?>

                                    <li class="col-md-6 col-lg-4 col-wd-3 product-item 
                                                <?php echo (($index + 1) % 4 == 0) ? 'remove-divider' : ''; ?>">

                                        <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                            <div class="product-item__inner bg-white p-3">

                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2">
                                                        <span class="font-size-12 text-gray-5">Nostalgia Candies</span>
                                                    </div>

                                                    <h5 class="mb-1 product-item__title">
                                                        <a href="#" class="text-blue font-weight-bold">
                                                            <?php echo $product['name']; ?>
                                                        </a>
                                                    </h5>

                                                    <div class="mb-2">
                                                        <a href="#" class="d-block text-center">
                                                            <img class="img-fluid"
                                                                src="../../assets/img/products/<?php echo $product['image']; ?>"
                                                                alt="<?php echo $product['name']; ?>">
                                                        </a>
                                                    </div>

                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">25.00 AED</div>
                                                        </div>

                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="#" class="btn-add-cart btn-primary transition-3d-hover">
                                                                <i class="ec ec-add-to-cart"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <!--<a href="#" class="text-gray-6 font-size-13">-->
                                                        <!--    <i class="ec ec-compare mr-1 font-size-15"></i> Compare-->
                                                        <!--</a>-->
                                                        <a href="#" class="text-gray-6 font-size-13">
                                                            <i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist
                                                        </a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </li>

                                <?php } ?>
                            </ul>


                        </div>
                        <div class="col-md-6 col-lg-5 col-wd-4 products-group-1">
                            <ul class="row list-unstyled products-group no-gutters bg-white h-100 mb-0">
                                <li class="col product-item remove-divider">
                                    <div class="product-item__outer h-100 w-100 w-100 prodcut-box-shadow">
                                        <div class="product-item__inner bg-white p-3">
                                            <div class="product-item__body d-flex flex-column">
                                                <div class="mb-1">
                                                    <div class="mb-2"><a href="products.php" class="font-size-12 text-gray-5">Nostalgia Chocolates</a></div>
                                                    <h5 class="mb-0 product-item__title"><a href="products.php" class="text-blue font-weight-bold">Toy lollipop candy</a></h5>
                                                </div>
                                                <div class="mb-1 min-height-8-1">
                                                    <a href="#" class="d-block text-center my-4 mb-xl-5 mb-lg-0 mt-xl-0 mb-xl-0 mb-wd-5"><img class="img-fluid" src="../../assets/img/img4.JPG" alt="Image Description"></a>
                                                    <!-- Gallery -->
                                                    <div class="row mx-gutters-2 mb-3">
                                                        <div class="col-auto">
                                                            <!-- Gallery -->
                                                            <a class="js-fancybox max-width-60 u-media-viewer" href="javascript:;"
                                                                data-src="../../assets/img/products/13.png"
                                                                data-fancybox="fancyboxGallery6"
                                                                data-caption="Electro in frames - image #01"
                                                                data-speed="700"
                                                                data-is-infinite="true">
                                                                <img class="img-fluid border" src="../../assets/img/products/13.png" alt="Image Description">

                                                                <span class="u-media-viewer__container">
                                                                    <span class="u-media-viewer__icon">
                                                                        <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                            <!-- End Gallery -->
                                                        </div>

                                                        <div class="col-auto">
                                                            <!-- Gallery -->
                                                            <a class="js-fancybox max-width-60 u-media-viewer" href="javascript:;"
                                                                data-src="../../assets/img/products/4.png"
                                                                data-fancybox="fancyboxGallery6"
                                                                data-caption="Electro in frames - image #02"
                                                                data-speed="700"
                                                                data-is-infinite="true">
                                                                <img class="img-fluid border" src="../../assets/img/products/4.png" alt="Image Description">

                                                                <span class="u-media-viewer__container">
                                                                    <span class="u-media-viewer__icon">
                                                                        <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                            <!-- End Gallery -->
                                                        </div>

                                                        <div class="col-auto">
                                                            <!-- Gallery -->
                                                            <a class="js-fancybox max-width-60 u-media-viewer" href="javascript:;"
                                                                data-src="../../assets/img/products/5.png"
                                                                data-fancybox="fancyboxGallery6"
                                                                data-caption="Electro in frames - image #03"
                                                                data-speed="700"
                                                                data-is-infinite="true">
                                                                <img class="img-fluid border" src="../../assets/img/products/5.png" alt="Image Description">

                                                                <span class="u-media-viewer__container">
                                                                    <span class="u-media-viewer__icon">
                                                                        <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                            <!-- End Gallery -->
                                                        </div>
                                                        <div class="col"></div>
                                                    </div>
                                                    <!-- End Gallery -->
                                                </div>
                                                <div class="flex-center-between">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">25.00 AED</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="cart.php" class="btn-add-cart btn-add-cart__wide btn-primary transition-3d-hover"><i class="ec ec-add-to-cart mr-2"></i> Add to Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <!--<a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.php" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>-->
                                                    <a href="wishlist.php" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
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

                <?php
                $nostalgiaCategories = [
                    [
                        "title" => "Nostalgia Candies",
                        "image" => "1.png",
                        "products" => [
                            "Juzt jelly",
                            "Alpanlibe Gold",
                            "Big Babool"
                        ]
                    ],
                    [
                        "title" => "Nostalgia Chocolates",
                        "image" => "2.png",
                        "products" => [
                            "Milk eclair",
                            "Fruit candy",
                            "Jelly candy"
                        ]
                    ],
                    [
                        "title" => "Nostalgia Syrups",
                        "image" => "3.png",
                        "products" => [
                            "Joker candy",
                            "Mango bite",
                            "Orange bite"
                        ]
                    ],
                    [
                        "title" => "Nostalgia Own Products",
                        "image" => "4.png",
                        "products" => [
                            "Popys",
                            "Poppins",
                            "Sweet crisp candy"
                        ]
                    ]
                ];
                ?>

                <div class="row">
                    <?php foreach ($nostalgiaCategories as $index => $category) {

                        // base column class
                        $colClass = 'col-4 col-wd-3 border-right border-lg-down-0 mb-8';

                        // custom border rules like your original HTML
                        if ($index == 2) {
                            $colClass .= ' remove-bd-xl-only';
                        }
                        if ($index == 3) {
                            $colClass .= ' remove-bd-wd';
                        }
                    ?>
                        <div class="<?php echo $colClass; ?>">
                            <div class="row align-items-center align-items-xl-start">

                                <!-- Image -->
                                <div class="col-md-5 mb-3 mb-md-0">
                                    <a href="#" class="d-block">
                                        <img class="img-fluid"
                                            src="../../assets/img/products/<?php echo $category['image']; ?>"
                                            alt="<?php echo $category['title']; ?>">
                                    </a>
                                </div>

                                <!-- Content -->
                                <div class="col-md-7 pl-lg-0">
                                    <h4 class="font-size-18 mb-0 mb-xl-2 font-size-14-down-lg text-center text-md-left">
                                        <a href="#" class="underline-on-hover">
                                            <?php echo $category['title']; ?>
                                        </a>
                                    </h4>

                                    <ul class="mb-1 font-size-13 list-unstyled text-lh-21 d-none d-xl-block">
                                        <?php foreach ($category['products'] as $product) { ?>
                                            <li>
                                                <a href="#" class="text-gray-15 underline-on-hover">
                                                    <?php echo $product; ?>
                                                </a>
                                            </li>
                                        <?php } ?>
                                    </ul>

                                    <a href="#" class="d-none d-xl-block text-right font-weight-bold text-gray-15 underline-on-hover">
                                        See all
                                    </a>
                                </div>

                            </div>
                        </div>
                    <?php } ?>
                </div>




            </div>
        </div>
        <!-- End Top Categories this Month -->

        <!-- Recommendation for you -->
        <div class="position-relative">
            <div class="border-bottom border-color-1 mb-2">
                <h3 class="section-title section-title__full d-inline-block mb-0 pb-2 font-size-22">Recommendation for you</h3>
            </div>
            <?php
            $nostalgiaProducts = [
                [
                    "category" => "Nostalgia Candies",
                    "title" => "Juzt Jelly",
                    "image" => "1.png",
                    "price" => "25.00"
                ],
                [
                    "category" => "Nostalgia Candies",
                    "title" => "Alpenliebe Gold",
                    "image" => "2.png",
                    "price" => "25.00"
                ],
                [
                    "category" => "Nostalgia Chocolates",
                    "title" => "Milk Éclair",
                    "image" => "3.png",
                    "price" => "30.00"
                ],
                [
                    "category" => "Nostalgia Chocolates",
                    "title" => "Big Babool",
                    "image" => "4.png",
                    "price" => "20.00"
                ],
                [
                    "category" => "Nostalgia Syrups",
                    "title" => "Rose Syrup",
                    "image" => "5.png",
                    "price" => "55.00"
                ],
                [
                    "category" => "Nostalgia Candies",
                    "title" => "Juzt Jelly",
                    "image" => "6.png",
                    "price" => "25.00"
                ],
                [
                    "category" => "Nostalgia Candies",
                    "title" => "Alpenliebe Gold",
                    "image" => "7.png",
                    "price" => "25.00"
                ],
                [
                    "category" => "Nostalgia Chocolates",
                    "title" => "Milk Éclair",
                    "image" => "8.png",
                    "price" => "30.00"
                ],
                [
                    "category" => "Nostalgia Chocolates",
                    "title" => "Big Babool",
                    "image" => "9.png",
                    "price" => "20.00"
                ],
                [
                    "category" => "Nostalgia Syrups",
                    "title" => "Rose Syrup",
                    "image" => "10.png",
                    "price" => "55.00"
                ],
                [
                    "category" => "Nostalgia Candies",
                    "title" => "Juzt Jelly",
                    "image" => "11.png",
                    "price" => "25.00"
                ],
                [
                    "category" => "Nostalgia Candies",
                    "title" => "Alpenliebe Gold",
                    "image" => "12.png",
                    "price" => "25.00"
                ],
                [
                    "category" => "Nostalgia Chocolates",
                    "title" => "Milk Éclair",
                    "image" => "13.png",
                    "price" => "30.00"
                ],
                [
                    "category" => "Nostalgia Chocolates",
                    "title" => "Big Babool",
                    "image" => "14.png",
                    "price" => "20.00"
                ],
                [
                    "category" => "Nostalgia Syrups",
                    "title" => "Rose Syrup",
                    "image" => "15.png",
                    "price" => "55.00"
                ]
            ];
            ?>

            <div class="js-slick-carousel u-slick position-static overflow-hidden u-slick-overflow-visble pb-7 pt-2 px-1"
                data-pagi-classes="text-center right-0 bottom-1 left-0 u-slick__pagination u-slick__pagination--long mb-0 z-index-n1 mt-3 mt-md-0"
                data-slides-show="7"
                data-slides-scroll="1"
                data-arrows-classes="position-absolute top-0 font-size-17 u-slick__arrow-normal top-10"
                data-arrow-left-classes="fa fa-angle-left right-1"
                data-arrow-right-classes="fa fa-angle-right right-0"
                data-responsive='[{
                          "breakpoint": 1400,
                          "settings": {
                            "slidesToShow": 6
                          }
                        }, {
                            "breakpoint": 1200,
                            "settings": {
                              "slidesToShow": 3
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
                <?php foreach ($nostalgiaProducts as $product) { ?>
                    <div class="js-slide products-group">
                        <div class="product-item">
                            <div class="product-item__outer h-100 w-100">
                                <div class="product-item__inner px-wd-4 p-2 p-md-3">

                                    <div class="product-item__body pb-xl-2">
                                        <!-- Category -->
                                        <div class="mb-2">
                                            <a href="#" class="font-size-12 text-gray-5">
                                                <?php echo $product['category']; ?>
                                            </a>
                                        </div>

                                        <!-- Product title -->
                                        <h5 class="mb-1 product-item__title">
                                            <a href="#" class="text-blue font-weight-bold">
                                                <?php echo $product['title']; ?>
                                            </a>
                                        </h5>

                                        <!-- Image -->
                                        <div class="mb-2">
                                            <a href="#" class="d-block text-center">
                                                <img class="img-fluid"
                                                    src="../../assets/img/products/<?php echo $product['image']; ?>"
                                                    alt="<?php echo $product['title']; ?>">
                                            </a>
                                        </div>

                                        <!-- Price -->
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">
                                                    <?php echo number_format($product['price'], 2); ?> AED
                                                </div>
                                            </div>

                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="#" class="btn-add-cart btn-primary transition-3d-hover">
                                                    <i class="ec ec-add-to-cart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Footer -->
                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="#" class="text-gray-6 font-size-13">
                                                <i class="ec ec-compare mr-1 font-size-15"></i> Compare
                                            </a>
                                            <a href="#" class="text-gray-6 font-size-13">
                                                <i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>


            </div>
        </div>
    </div>
    <!-- End Banner 2 columns -->
    </div>

    <!-- End Brand Carousel -->
</main>
<!-- ========== END MAIN CONTENT ========== -->
@include('footer')