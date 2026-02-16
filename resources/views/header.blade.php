<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from transvelo.github.io/electro-html/2.0/html/home/home-v3.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Feb 2026 11:03:54 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <!-- Title -->
    <title>Nostalgia Sweets | Bringing Childhood Flavors Back to Life</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/logo/logo.png') }}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;display=swap" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-electro.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/vendor/animate.css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/hs-megamenu/src/hs.megamenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/fancybox/jquery.fancybox.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/slick-carousel/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}">

    <!-- CSS Electro Template -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">

</head>

<body>

    <!-- ========== HEADER ========== -->
    <header id="header" class="u-header u-header-left-aligned-nav">
        <div class="u-header__section">
            <!-- Topbar -->
            <div class="u-header-topbar py-2 d-none d-xl-block">
                <div class="container">
                    <div class="d-flex align-items-center">
                        <div class="topbar-left">
                            <a href="#" class="text-gray-110 font-size-13 u-header-topbar__nav-link">Nostalgia Sweets | Flavors That Feel Like Home</a>
                        </div>
                        <div class="topbar-right ml-auto">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border">
                                    <a href="#" class="u-header-topbar__nav-link"><i class="ec ec-map-pointer mr-1"></i> Al Sajaah Industrial Area-Sharjah</a>
                                </li>
                                <li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border">
                                    <a href="track-your-order.php" class="u-header-topbar__nav-link"><i class="ec ec-transport mr-1"></i> Track Your Order</a>
                                </li>
                                <li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border u-header-topbar__nav-item-no-border u-header-topbar__nav-item-border-single">
                                    <div class="d-flex align-items-center">
                                        <!-- Language -->
                                        <div class="position-relative">
                                            <a id="languageDropdownInvoker" class="dropdown-nav-link dropdown-toggle d-flex align-items-center u-header-topbar__nav-link font-weight-normal no-arrow" href="javascript:;" role="button"
                                                aria-controls="languageDropdown"
                                                aria-haspopup="true"
                                                aria-expanded="false"
                                                data-unfold-event="hover"
                                                data-unfold-target="#languageDropdown"
                                                data-unfold-type="css-animation"
                                                data-unfold-duration="300"
                                                data-unfold-delay="300"
                                                data-unfold-hide-on-scroll="true"
                                                data-unfold-animation-in="slideInUp"
                                                data-unfold-animation-out="fadeOut">
                                                <span class="d-inline-block d-sm-none">US</span>
                                                <span class="d-none d-sm-inline-flex align-items-center"> AED</span>
                                            </a>

                                            <!--<div id="languageDropdown" class="dropdown-menu dropdown-unfold" aria-labelledby="languageDropdownInvoker">-->
                                            <!--    <a class="dropdown-item active" href="#">English</a>-->
                                            <!--    <a class="dropdown-item" href="#">Deutsch</a>-->
                                            <!--    <a class="dropdown-item" href="#">Español</a>-->
                                            <!--</div>-->
                                        </div>
                                        <!-- End Language -->
                                    </div>
                                </li>
                                <li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border">
                                    <!-- Account Sidebar Toggle Button -->
                                    <a id="sidebarNavToggler" href="javascript:;" role="button" class="u-header-topbar__nav-link"
                                        aria-controls="sidebarContent"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                        data-unfold-event="click"
                                        data-unfold-hide-on-scroll="false"
                                        data-unfold-target="#sidebarContent"
                                        data-unfold-type="css-animation"
                                        data-unfold-animation-in="fadeInRight"
                                        data-unfold-animation-out="fadeOutRight"
                                        data-unfold-duration="500">
                                        <i class="ec ec-user mr-1"></i> Register <span class="text-gray-50">or</span> Sign in
                                    </a>
                                    <!-- End Account Sidebar Toggle Button -->
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Topbar -->

            <!-- Logo-Search-header-icons -->
            <div class="py-2 py-xl-3 bg-primary-down-lg">
                <div class="container my-0dot5 my-xl-0">
                    <div class="row align-items-center">
                        <!-- Logo-offcanvas-menu -->
                        <div class="col-auto">
                            <!-- Nav -->
                            <nav class="navbar navbar-expand u-header__navbar py-0 justify-content-xl-between max-width-270 min-width-270">
                                <!-- Logo -->
                                <a class="order-1 order-xl-0 navbar-brand u-header__navbar-brand u-header__navbar-brand-center" href="{{ route(\App\Constants\RouteNames::HOME) }}" aria-label="Electro">
                                    <img src="{{ asset('assets/img/logo/logo.png') }}" alt="logo-img" />
                                </a>
                                <!-- End Logo -->

                                <!-- Fullscreen Toggle Button -->
                                <button id="sidebarHeaderInvokerMenu" type="button" class="navbar-toggler d-block btn u-hamburger mr-3 mr-xl-0"
                                    aria-controls="sidebarHeader"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                    data-unfold-event="click"
                                    data-unfold-hide-on-scroll="false"
                                    data-unfold-target="#sidebarHeader1"
                                    data-unfold-type="css-animation"
                                    data-unfold-animation-in="fadeInLeft"
                                    data-unfold-animation-out="fadeOutLeft"
                                    data-unfold-duration="500">
                                    <span id="hamburgerTriggerMenu" class="u-hamburger__box">
                                        <span class="u-hamburger__inner"></span>
                                    </span>
                                </button>
                                <!-- End Fullscreen Toggle Button -->
                            </nav>
                            <!-- End Nav -->

                            <!-- ========== HEADER SIDEBAR ========== -->
                            <aside id="sidebarHeader1" class="u-sidebar u-sidebar--left" aria-labelledby="sidebarHeaderInvokerMenu">
                                <div class="u-sidebar__scroller">
                                    <div class="u-sidebar__container">
                                        <div class="u-header-sidebar__footer-offset pb-0">
                                            <!-- Toggle Button -->
                                            <div class="position-absolute top-0 right-0 z-index-2 pt-4 pr-7">
                                                <button type="button" class="close ml-auto"
                                                    aria-controls="sidebarHeader"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"
                                                    data-unfold-event="click"
                                                    data-unfold-hide-on-scroll="false"
                                                    data-unfold-target="#sidebarHeader1"
                                                    data-unfold-type="css-animation"
                                                    data-unfold-animation-in="fadeInLeft"
                                                    data-unfold-animation-out="fadeOutLeft"
                                                    data-unfold-duration="500">
                                                    <span aria-hidden="true"><i class="ec ec-close-remove text-gray-90 font-size-20"></i></span>
                                                </button>
                                            </div>
                                            <!-- End Toggle Button -->

                                            <!-- Content -->
                                            <div class="js-scrollbar u-sidebar__body">
                                                <div id="headerSidebarContent" class="u-sidebar__content u-header-sidebar__content">
                                                    <!-- Logo -->
                                                    <a class="d-flex ml-0 navbar-brand u-header__navbar-brand u-header__navbar-brand-vertical" href="{{ route(\App\Constants\RouteNames::HOME) }}" aria-label="Electro">
                                                        <img src="{{ asset('assets/img/logo/logo.png') }}" alt="logo-img" />
                                                    </a>
                                                    <!-- End Logo -->

                                                    <!-- List -->
                                                    <ul id="headerSidebarList" class="u-header-collapse__nav">
                                                        <!-- Home Section -->
                                                        <li class="u-has-submenu u-header-collapse__submenu">
                                                            <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer  no-arrow" href="{{ route(\App\Constants\RouteNames::HOME) }}" role="button" aria-expanded="false" aria-controls="headerSidebarHomeCollapse">
                                                                Home
                                                            </a>

                                                        </li>
                                                        <!-- End Home Section -->

                                                        <!-- Product Categories -->
                                                        <li class="u-has-submenu u-header-collapse__submenu">
                                                            <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="{{ route(\App\Constants\RouteNames::PRODUCT_LIST) }}" data-toggle="collapse" data-target="#headerSidebarBlogCollapse" role="button" aria-expanded="false" aria-controls="headerSidebarBlogCollapse">
                                                                Product Categories
                                                            </a>

                                                            <div id="headerSidebarBlogCollapse" class="collapse" data-parent="#headerSidebarContent">
                                                                <ul id="headerSidebarBlogMenu" class="u-header-collapse__nav-list">
                                                                    @foreach($categories as $category)
                                                                    <!-- 4 Column Sidebar -->
                                                                    <li><a class="u-header-collapse__nav-link" href="{{ route(\App\Constants\RouteNames::CATEGORY_SHOW, [ 'category_id' => $category->id ]) }}">{{ $category->name }}</a></li>
                                                                    <!-- End 4 Column Sidebar -->
                                                                    @endforeach

                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <!-- End Product Categories -->

                                                        <!-- Single Product Pages -->
                                                        <li class="u-has-submenu u-header-collapse__submenu">
                                                            <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer no-arrow" href="{{ route(\App\Constants\RouteNames::PRODUCT_LIST) }}" data-target="#headerSidebarShopCollapse" role="button" aria-expanded="false" aria-controls="headerSidebarShopCollapse">
                                                                Products
                                                            </a>

                                                        </li>
                                                        <!-- End Single Product Pages -->
                                                        <!-- Shop Pages -->
                                                        <li class="u-has-submenu u-header-collapse__submenu">
                                                            <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer no-arrow" href="about.php" data-target="#headerSidebarPagesCollapse" role="button" aria-expanded="false" aria-controls="headerSidebarPagesCollapse">
                                                                About Us
                                                            </a>

                                                        </li>
                                                        <li class="u-has-submenu u-header-collapse__submenu">
                                                            <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer no-arrow" href="contact.php" data-target="#headerSidebarPagesCollapse" role="button" aria-expanded="false" aria-controls="headerSidebarPagesCollapse">
                                                                Contact Us
                                                            </a>

                                                        </li>
                                                        <!-- End Shop Pages -->


                                                        <!-- Ecommerce Pages -->
                                                        <li class="u-has-submenu u-header-collapse__submenu">
                                                            <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer no-arrow" href="faq.php" data-target="#headerSidebarDemosCollapse" role="button" aria-expanded="false" aria-controls="headerSidebarDemosCollapse">
                                                                FAQ
                                                            </a>

                                                        </li>
                                                        <!-- End Ecommerce Pages -->

                                                        <!-- Shop Columns -->
                                                        <li class="u-has-submenu u-header-collapse__submenu">
                                                            <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer no-arrow" href="privacy.php" data-target="#headerSidebardocsCollapse" role="button" aria-expanded="false" aria-controls="headerSidebardocsCollapse">
                                                                Privacy
                                                            </a>

                                                        </li>
                                                        <!-- End Shop Columns -->

                                                        <!-- Blog Pages -->
                                                        <li class="u-has-submenu u-header-collapse__submenu">
                                                            <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer no-arrow" href="terms-and-conditions.php" data-target="#headerSidebarblogsCollapse" role="button" aria-expanded="false" aria-controls="headerSidebarblogsCollapse">
                                                                Terms Of Use
                                                            </a>

                                                        </li>
                                                        <!-- End Blog Pages -->
                                                    </ul>
                                                    <!-- End List -->
                                                </div>
                                            </div>
                                            <!-- End Content -->
                                        </div>
                                    </div>
                                </div>
                            </aside>
                            <!-- ========== END HEADER SIDEBAR ========== -->
                        </div>
                        <!-- End Logo-offcanvas-menu -->
                        <!-- Search Bar -->
                        <div class="col d-none d-xl-block">
                            <form class="js-focus-state">
                                <label class="sr-only" for="searchproduct">Search</label>
                                <div class="input-group">
                                    <input type="email" class="form-control py-2 pl-5 font-size-15 border-right-0 height-40 border-width-2 rounded-left-pill border-primary" name="email" id="searchproduct-item" placeholder="Search your favorite childhood sweets…" aria-label="Search your favorite childhood sweets…" aria-describedby="searchProduct1" required>
                                    <div class="input-group-append">
                                        <!-- Select -->
                                        <select class="js-select selectpicker dropdown-select custom-search-categories-select"
                                            data-style="btn height-40 text-gray-60 font-weight-normal border-top border-bottom border-left-0 rounded-0 border-primary border-width-2 pl-0 pr-5 py-2">
                                            <option value="" selected>All Categories</option>
                                            @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                        <!-- End Select -->
                                        <button class="btn btn-primary height-40 py-2 px-3 rounded-right-pill" type="button" id="searchProduct1">
                                            <span class="ec ec-search font-size-24"></span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- End Search Bar -->
                        <!-- Header Icons -->
                        <div class="col col-xl-auto text-right text-xl-left pl-0 pl-xl-3 position-static">
                            <div class="d-inline-flex">
                                <ul class="d-flex list-unstyled mb-0 align-items-center">
                                    <!-- Search -->
                                    <li class="col d-xl-none px-2 px-sm-3 position-static">
                                        <a id="searchClassicInvoker" class="font-size-22 text-gray-90 text-lh-1 btn-text-secondary" href="javascript:;" role="button"
                                            data-toggle="tooltip"
                                            data-placement="top"
                                            title="Search"
                                            aria-controls="searchClassic"
                                            aria-haspopup="true"
                                            aria-expanded="false"
                                            data-unfold-target="#searchClassic"
                                            data-unfold-type="css-animation"
                                            data-unfold-duration="300"
                                            data-unfold-delay="300"
                                            data-unfold-hide-on-scroll="true"
                                            data-unfold-animation-in="slideInUp"
                                            data-unfold-animation-out="fadeOut">
                                            <span class="ec ec-search"></span>
                                        </a>

                                        <!-- Input -->
                                        <div id="searchClassic" class="dropdown-menu dropdown-unfold dropdown-menu-right left-0 mx-2" aria-labelledby="searchClassicInvoker">
                                            <form class="js-focus-state input-group px-3">
                                                <input class="form-control" type="search" placeholder="Search Product">
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary px-3" type="button"><i class="font-size-18 ec ec-search"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- End Input -->
                                    </li>
                                    <!-- End Search -->
                                    <!--<li class="col d-none d-xl-block"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.php" class="text-gray-90" data-toggle="tooltip" data-placement="top" title="Compare"><i class="font-size-22 ec ec-compare"></i></a></li>-->
                                    <li class="col d-none d-xl-block"><a href="wishlist.php" class="text-gray-90" data-toggle="tooltip" data-placement="top" title="Favorites"><i class="font-size-22 ec ec-favorites"></i></a></li>
                                    <li class="col d-xl-none px-2 px-sm-3"><a href="my-account.php" class="text-gray-90" data-toggle="tooltip" data-placement="top" title="My Account"><i class="font-size-22 ec ec-user"></i></a></li>
                                    <li class="col pr-xl-0 px-2 px-sm-3">
                                        <a href="cart.php" class="text-gray-90 position-relative d-flex " data-toggle="tooltip" data-placement="top" title="Cart">
                                            <i class="font-size-22 ec ec-shopping-bag"></i>
                                            <span class="bg-lg-down-black width-22 height-22 bg-primary position-absolute d-flex align-items-center justify-content-center rounded-circle left-12 top-8 font-weight-bold font-size-12">2</span>
                                            <!--<span class="d-none d-xl-block font-weight-bold font-size-16 text-gray-90 ml-3">AED1785.00</span>-->
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Header Icons -->
                    </div>
                </div>
            </div>
            <!-- End Logo-Search-header-icons -->

            <!-- Primary-menu-wide -->
            <div class="d-none d-xl-block bg-primary">
                <div class="container">
                    <div class="min-height-45">
                        <!-- Nav -->
                        <nav class="js-mega-menu navbar navbar-expand-md u-header__navbar u-header__navbar--wide u-header__navbar--no-space">
                            <!-- Navigation -->
                            <div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse">
                                <ul class="navbar-nav u-header__navbar-nav">
                                    <!-- Home -->
                                    <li class="nav-item hs-has-mega-menu u-header__nav-item"
                                        data-event="hover"
                                        data-animation-in="slideInUp"
                                        data-animation-out="fadeOut"
                                        data-position="left">
                                        <a id="homeMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="{{ route(\App\Constants\RouteNames::HOME) }}" aria-haspopup="true" aria-expanded="false">Home</a>

                                        <!-- Home - Mega Menu -->
                                        <div class="hs-mega-menu w-100 u-header__sub-menu" aria-labelledby="homeMegaMenu">
                                            <div class="row u-header__mega-menu-wrapper">
                                                <div class="col-md-3">
                                                    <span class="u-header__sub-menu-title">Home & Other Pages</span>
                                                    <ul class="u-header__sub-menu-nav-group">
                                                        <li><a href="{{ route(\App\Constants\RouteNames::HOME) }}" class="nav-link u-header__sub-menu-nav-link">Home</a></li>
                                                        <li><a href="about.php" class="nav-link u-header__sub-menu-nav-link">About Us</a></li>
                                                        <li><a href="contact.php" class="nav-link u-header__sub-menu-nav-link">Contact Us</a></li>
                                                        <li><a href="faq.php" class="nav-link u-header__sub-menu-nav-link">FAQ</a></li>
                                                        <li><a href="privacy.php" class="nav-link u-header__sub-menu-nav-link">Privacy</a></li>
                                                        <li><a href="terms-and-conditions.php" class="nav-link u-header__sub-menu-nav-link">Terms Of Use</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3">
                                                    <span class="u-header__sub-menu-title">Product Categories</span>
                                                    <ul class="u-header__sub-menu-nav-group">
                                                        @foreach($categories as $category)
                                                        <li><a href="{{ route(\App\Constants\RouteNames::CATEGORY_SHOW, ['category_id' => $category->id]) }}" class="nav-link u-header__sub-menu-nav-link">{{ $category->name }}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <div class="col-md-3">
                                                    <a href="{{ route(\App\Constants\RouteNames::PRODUCT_LIST) }}" class="d-block mb-3">
                                                        <img class="img-fluid" src="{{ asset('assets/img/products/11.png') }}" alt="Image Description">
                                                    </a>
                                                </div>
                                                <div class="col-md-3">
                                                    <a href="{{ route(\App\Constants\RouteNames::PRODUCT_LIST) }}" class="d-block mb-3">
                                                        <img class="img-fluid" src="{{ asset('assets/img/products/12.png') }}" alt="Image Description">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Home - Mega Menu -->
                                    </li>
                                    <!-- End Home -->
                                    @foreach($categories as $category)
                                    <li class="nav-item hs-has-mega-menu u-header__nav-item"
                                        data-event="hover"
                                        data-animation-in="slideInUp"
                                        data-animation-out="fadeOut">

                                        <a class="nav-link u-header__nav-link u-header__nav-link-toggle"
                                            href="{{ route(\App\Constants\RouteNames::CATEGORY_SHOW, [ 'category_id' => $category->id ]) }}">
                                            {{ $category->name }}
                                        </a>

                                        <div class="hs-mega-menu w-100 u-header__sub-menu">
                                            <div class="row u-header__mega-menu-wrapper">

                                                @php
                                                $chunks = $category->products->take(12)->chunk(4);
                                                @endphp

                                                @foreach($chunks as $chunk)
                                                <div class="col-md-3">
                                                    <ul class="u-header__sub-menu-nav-group mb-3">
                                                        @foreach($chunk as $product)
                                                        <li>
                                                            <a href="{{ route(\App\Constants\RouteNames::PRODUCT_SHOW, [ 'product_id' => $product->id ]) }}"
                                                                class="nav-link u-header__sub-menu-nav-link">
                                                                {{ $product->name }}
                                                            </a>
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                @endforeach

                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <!-- End Navigation -->
                        </nav>
                        <!-- End Nav -->
                    </div>
                </div>
            </div>
            <!-- End Primary-menu-wide -->
        </div>
    </header>
    <!-- ========== END HEADER ========== -->