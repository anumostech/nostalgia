<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keyword" content="">
    <meta name="author" content="theme_ocean">
    <!--! The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags !-->
    <!--! BEGIN: Apps Title-->
    <title>Nostalgia Sweets Admin | Dashboard</title>
    <!--! END:  Apps Title-->
    <!--! BEGIN: Favicon-->
    @include('admin.header')
    <!--! END: Custom CSS-->
    <!--! HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries !-->
    <!--! WARNING: Respond.js doesn"t work if you view the page via file: !-->
    <!--[if lt IE 9]>
			<script src="https:oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https:oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
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
                        <li class="breadcrumb-item"><a href="{{ route(\App\Constants\RouteNames::DASHBOARD) }}">Home</a></li>
                        <li class="breadcrumb-item">Products</li>
                        <li class="breadcrumb-item">Add Product</li>
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
                    <div class="col-lg-8">
                        <div class="card stretch stretch-full">
                            <div class="card-body lead-status">
                                <div class="mb-5 d-flex align-items-center justify-content-between">
                                    <h5 class="fw-bold mb-0 me-4">
                                        <span class="d-block mb-2">Add Product</span>
                                    </h5>
                                </div>
                                <hr class="mt-0">
                                <form method="POST" action="{{ route(\App\Constants\RouteNames::PRODUCT_STORE)}}" id="addProductForm" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-4 mb-4">
                                            <label class="form-label">Select Category</label>
                                            <select class="form-control" data-select2-selector="status" name="category_id">
                                                <option value="">Categories</option>
                                                @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-lg-4 mb-4">
                                            <label class="form-label">Product Name</label>
                                            <input type="text" class="form-control" id="fullnameInput" name="name" placeholder="Product Name" required>

                                        </div>
                                        <div class="col-lg-4 mb-4">
                                            <label class="form-label">Product Image</label>
                                            <input type="file" class="form-control" id="fullnameInput" name="product_image" placeholder="Product Name" required>

                                        </div>
                                        <div class="col-lg-4 mb-4">
                                            <label class="form-label">Product Price</label>
                                            <input type="text" class="form-control" id="fullnameInput" name="price" placeholder="Product Price" required>

                                        </div>
                                        <div class="col-lg-4 mb-4">
                                            <label class="form-label">Stock Quantity</label>
                                            <input type="number" class="form-control" id="fullnameInput" name="stock_quantity" placeholder="Stock Quantity" required>

                                        </div>
                                        <div class="col-lg-4 mb-4">
                                            <label class="form-label">Product Unit</label>
                                            <input type="text" class="form-control" id="fullnameInput" name="unit" placeholder="Product Unit" required>
                                        </div>
                                        <div class="col-lg-4 mb-4 d-flex align-items-center">
                                            <div class="item-checkbox ms-1">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input checkbox" id="checkBox_1" name="is_on_sale">
                                                    <label class="custom-control-label" for="checkBox_1">On Sale</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-4">
                                        <label class="form-label">Description</label>
                                        <textarea type="text" class="form-control" id="fullnameInput" name="description" placeholder="Product Description"></textarea>

                                    </div>
                                    </div>
                            </div>
                            <hr class="mt-0">
                            <div class="card-body general-info">
                                <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper justify-end">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="feather-plus me-2"></i>
                                        <span>Submit</span>
                                    </button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Main Content ] end -->
        </div>
        <!-- [ Footer ] start -->

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
    <!--! END: Theme Customizer !-->
</body>

</html>