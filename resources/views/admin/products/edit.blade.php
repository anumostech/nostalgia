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
    <title>Nostalgia Sweets Admin | Edit Product</title>
    <!--! END:  Apps Title-->
    <!--! BEGIN: Favicon-->
    @include('admin.header')
</head>

<body>
    @include('admin.nav')
    @include('admin.headerbar')
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
                        <li class="breadcrumb-item">Edit Product</li>
                    </ul>
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
                                        <span class="d-block mb-2">Edit Product: {{ $product->name }}</span>
                                    </h5>
                                </div>
                                <hr class="mt-0">
                                <form method="POST" action="{{ route(\App\Constants\RouteNames::PRODUCT_UPDATE, $product->id) }}" id="editProductForm" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-4 mb-4">
                                            <label class="form-label">Select Category</label>
                                            <select class="form-control" data-select2-selector="status" name="category_id">
                                                <option value="">Categories</option>
                                                @foreach($categories as $category)
                                                <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-lg-4 mb-4">
                                            <label class="form-label">Product Name</label>
                                            <input type="text" class="form-control" name="name" value="{{ $product->name }}" placeholder="Product Name" required>
                                        </div>
                                        <div class="col-lg-4 mb-4">
                                            <label class="form-label">Product Image (Leave blank to keep current)</label>
                                            <input type="file" class="form-control" name="product_image">
                                            @if($product->image)
                                                <div class="mt-2">
                                                    <img src="{{ asset('storage/products/'.$product->image) }}" alt="" style="height: 50px;">
                                                </div>
                                            @endif
                                        </div>
                                        <div class="col-lg-4 mb-4">
                                            <label class="form-label">Product Price</label>
                                            <input type="text" class="form-control" name="price" value="{{ $product->price }}" placeholder="Product Price" required>
                                        </div>
                                        <div class="col-lg-4 mb-4">
                                            <label class="form-label">Stock Quantity</label>
                                            <input type="number" class="form-control" name="stock_quantity" value="{{ $product->stock_quantity }}" placeholder="Stock Quantity" required>
                                        </div>
                                        <div class="col-lg-4 mb-4">
                                            <label class="form-label">Product Unit</label>
                                            <input type="text" class="form-control" name="unit" value="{{ $product->unit }}" placeholder="Product Unit" required>
                                        </div>
                                        <div class="col-lg-4 mb-4 d-flex align-items-center">
                                            <div class="item-checkbox ms-1">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input checkbox" id="checkBox_1" name="is_on_sale" {{ $product->is_onsale ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="checkBox_1">On Sale</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-4">
                                            <label class="form-label">Status</label>
                                            <select class="form-control" name="status">
                                                <option value="1" {{ $product->status == 1 ? 'selected' : '' }}>Available</option>
                                                <option value="0" {{ $product->status == 0 ? 'selected' : '' }}>Not Available</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-12 mb-4">
                                            <label class="form-label">Description</label>
                                            <textarea class="form-control" name="description" placeholder="Product Description">{{ $product->description }}</textarea>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper justify-end">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="feather-save me-2"></i>
                                            <span>Update Product</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </main>
    @include('admin.footer')
</body>

</html>
