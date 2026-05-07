<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nostalgia Sweets Admin | Edit Customer</title>
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
                        <h5 class="m-b-10">Customers</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route(\App\Constants\RouteNames::DASHBOARD) }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route(\App\Constants\RouteNames::CUSTOMER_LIST) }}">Customers</a></li>
                        <li class="breadcrumb-item">Edit Customer</li>
                    </ul>
                </div>
            </div>
            <div class="main-content">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card stretch stretch-full">
                            <div class="card-body lead-status">
                                <div class="mb-5 d-flex align-items-center justify-content-between">
                                    <h5 class="fw-bold mb-0 me-4">
                                        <span class="d-block mb-2">Edit Customer</span>
                                    </h5>
                                </div>
                                <hr class="mt-0">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form method="POST" action="{{ route(\App\Constants\RouteNames::CUSTOMER_UPDATE, $customer->id)}}" id="editCustomerForm" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12 mb-4 text-center">
                                            <div class="avatar-image mb-3">
                                                <img src="{{ $customer->avatar ? asset('storage/'.$customer->avatar) : asset('assets/img/default-avatar.jpg') }}" alt="" class="img-fluid rounded-circle" style="width: 100px; height: 100px; object-fit: cover;" id="avatar-preview" />
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Customer Image</label>
                                                <input type="file" class="form-control" name="avatar" onchange="previewImage(this)">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <label class="form-label">First Name</label>
                                            <input type="text" class="form-control" name="first_name" placeholder="First Name" value="{{ old('first_name', $customer->first_name) }}" required>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <label class="form-label">Last Name</label>
                                            <input type="text" class="form-control" name="last_name" placeholder="Last Name" value="{{ old('last_name', $customer->last_name) }}" required>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control" name="email" placeholder="Email Address" value="{{ old('email', $customer->email) }}" required>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <label class="form-label">Phone</label>
                                            <input type="text" class="form-control" name="phone" placeholder="Phone Number" value="{{ old('phone', $customer->phone) }}" required>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <label class="form-label">Password (Leave blank to keep current)</label>
                                            <input type="password" class="form-control" name="password" placeholder="Password">
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <label class="form-label">Status</label>
                                            <select class="form-control" name="status">
                                                <option value="active" {{ old('status', $customer->status) == 'active' ? 'selected' : '' }}>Active</option>
                                                <option value="inactive" {{ old('status', $customer->status) == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-12 mb-4">
                                            <label class="form-label">Address</label>
                                            <textarea class="form-control" name="address" placeholder="Address">{{ old('address', $customer->address) }}</textarea>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper justify-end mt-3">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="feather-save me-2"></i>
                                            <span>Update Customer</span>
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
    <script>
        function previewImage(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('avatar-preview').setAttribute('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</body>

</html>
