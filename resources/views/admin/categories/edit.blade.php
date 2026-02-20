<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nostalgia Sweets Admin | Edit Category</title>
    @include('admin.header')
</head>

<body>
    @include('admin.nav')
    @include('admin.headerbar')
    <main class="nxl-container">
        <div class="nxl-content">
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Dashboard</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route(\App\Constants\RouteNames::DASHBOARD) }}">Home</a></li>
                        <li class="breadcrumb-item">Categories</li>
                        <li class="breadcrumb-item">Edit Category</li>
                    </ul>
                </div>
            </div>
            <div class="main-content">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="mb-5 d-flex align-items-center justify-content-between">
                                    <h5 class="fw-bold mb-0 me-4">
                                        <span class="d-block mb-2">Edit Category: {{ $category->name }}</span>
                                    </h5>
                                </div>
                                <hr class="mt-0">
                                <form method="POST" action="{{ route(\App\Constants\RouteNames::CATEGORY_UPDATE, $category->id) }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6 mb-4">
                                            <label class="form-label">Category Name</label>
                                            <input type="text" class="form-control" name="name" value="{{ $category->name }}" placeholder="Category Name" required>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <label class="form-label">Category Image (Leave blank to keep current)</label>
                                            <input type="file" class="form-control" name="category_image">
                                            @if($category->image)
                                                <div class="mt-2">
                                                    <img src="{{ asset('storage/categories/'.$category->image) }}" alt="" style="height: 50px;">
                                                </div>
                                            @endif
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <label class="form-label">Status</label>
                                            <select class="form-control" name="status">
                                                <option value="1" {{ $category->status == 1 ? 'selected' : '' }}>Available</option>
                                                <option value="0" {{ $category->status == 0 ? 'selected' : '' }}>Not Available</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-12 mb-4">
                                            <label class="form-label">Description</label>
                                            <textarea class="form-control" name="description" placeholder="Category Description">{{ $category->description }}</textarea>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center gap-2 justify-content-end">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="feather-save me-2"></i>
                                            <span>Update Category</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('admin.footer')
</body>

</html>
