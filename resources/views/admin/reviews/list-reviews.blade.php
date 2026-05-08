<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Nostalgia Sweets Admin | Reviews</title>
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
                        <h5 class="m-b-10">Reviews</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route(\App\Constants\RouteNames::DASHBOARD) }}">Home</a></li>
                        <li class="breadcrumb-item">Reviews</li>
                    </ul>
                </div>
            </div>
            <div class="main-content">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Customer Reviews</h5>
                            </div>
                            <div class="card-body custom-card-action p-0">
                                <div class="table-responsive" style="overflow: visible;">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr class="border-b">
                                                <th scope="row">Product</th>
                                                <th>Customer</th>
                                                <th>Rating</th>
                                                <th>Comment</th>
                                                <th>Status</th>
                                                <th>Date</th>
                                                <th class="text-end">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($reviews as $review)
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="avatar-image">
                                                            <img src="{{ asset('storage/products/'.$review->product->image) }}" alt="" class="img-fluid" />
                                                        </div>
                                                        <a href="{{ url('product/'.$review->product->id) }}" target="_blank">
                                                            <span class="d-block">{{ $review->product->name }}</span>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="d-block">{{ $review->name }}</span>
                                                    <span class="text-muted small">{{ $review->email }}</span>
                                                </td>
                                                <td>
                                                    <div class="text-warning">
                                                        @for($i = 1; $i <= 5; $i++)
                                                            <i class="{{ $i <= $review->rating ? 'fas' : 'far' }} fa-star"></i>
                                                        @endfor
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="d-block text-truncate" style="max-width: 250px;" title="{{ $review->comment }}">
                                                        {{ $review->comment }}
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="badge {{ $review->status ? 'bg-soft-success text-success' : 'bg-soft-danger text-danger' }}">
                                                        {{ $review->status ? 'Approved' : 'Pending' }}
                                                    </span>
                                                </td>
                                                <td>{{ $review->created_at->format('M d, Y') }}</td>
                                                <td class="text-end">
                                                     <div class="dropdown">
                                                         <a href="javascript:void(0);" data-bs-toggle="dropdown" class="avatar-text avatar-md"><i class="feather-more-horizontal"></i></a>
                                                         <div class="dropdown-menu dropdown-menu-end">
                                                              <a href="{{ route('administrator.reviews.edit', $review->id) }}" class="dropdown-item"><i class="feather-edit-3 me-2"></i>Edit</a>
                                                              <div class="dropdown-divider"></div>
                                                              <a href="{{ route('administrator.reviews.delete', $review->id) }}" class="dropdown-item delete-item"><i class="feather-trash-2 me-2"></i>Delete</a>
                                                         </div>
                                                     </div>
                                                </td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="7" class="text-center">No Reviews Found</td>
                                            </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                                {{ $reviews->links() }}
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
