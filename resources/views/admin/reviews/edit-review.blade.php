<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Nostalgia Sweets Admin | Edit Review</title>
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
                        <h5 class="m-b-10">Edit Review</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route(\App\Constants\RouteNames::DASHBOARD) }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('administrator.reviews.index') }}">Reviews</a></li>
                        <li class="breadcrumb-item">Edit</li>
                    </ul>
                </div>
            </div>
            <div class="main-content">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Edit Review Details</h5>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('administrator.reviews.update', $review->id) }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Product</label>
                                            <input type="text" class="form-control" value="{{ $review->product->name }}" readonly disabled>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Customer Name</label>
                                            <input type="text" class="form-control" value="{{ $review->name }}" readonly disabled>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Rating</label>
                                            <select name="rating" class="form-control">
                                                @for($i = 1; $i <= 5; $i++)
                                                    <option value="{{ $i }}" {{ $review->rating == $i ? 'selected' : '' }}>{{ $i }} Stars</option>
                                                @endfor
                                            </select>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Status</label>
                                            <select name="status" class="form-control">
                                                <option value="1" {{ $review->status == 1 ? 'selected' : '' }}>Approved</option>
                                                <option value="0" {{ $review->status == 0 ? 'selected' : '' }}>Pending</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label class="form-label">Comment</label>
                                            <textarea name="comment" class="form-control" rows="5" required>{{ $review->comment }}</textarea>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-start gap-2 mt-4">
                                        <button type="submit" class="btn btn-primary">Update Review</button>
                                        <a href="{{ route('administrator.reviews.index') }}" class="btn btn-light-brand">Cancel</a>
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
