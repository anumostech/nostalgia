<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nostalgia Sweets Admin | Profile Settings</title>
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
                        <li class="breadcrumb-item">Profile Settings</li>
                    </ul>
                </div>
            </div>
            <div class="main-content">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <h5 class="fw-bold mb-4">Profile Information</h5>
                                <form method="POST" action="{{ route(\App\Constants\RouteNames::PROFILE_UPDATE) }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12 mb-4 text-center">
                                            <div class="avatar-image avatar-xl mb-3">
                                                <img src="{{ $user->avatar ? asset('storage/avatars/'.$user->avatar) : asset('assets/img/default-avatar.jpg') }}" alt="" class="img-fluid rounded-circle" style="width: 100px; height: 100px; object-fit: cover;">
                                            </div>
                                            <input type="file" class="form-control" name="avatar">
                                            <small class="text-muted">Recommended: Square image, max 2MB</small>
                                        </div>
                                        <div class="col-lg-12 mb-4">
                                            <label class="form-label">Full Name</label>
                                            <input type="text" class="form-control" name="name" value="{{ $user->name }}" required>
                                        </div>
                                        <div class="col-lg-12 mb-4">
                                            <label class="form-label">Email Address</label>
                                            <input type="email" class="form-control" name="email" value="{{ $user->email }}" required>
                                        </div>
                                        <div class="col-lg-12 mb-4">
                                            <label class="form-label">Phone Number</label>
                                            <input type="text" class="form-control" name="phone" value="{{ $user->phone }}" required>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <h5 class="fw-bold mb-4">Change Password</h5>
                                <form method="POST" action="{{ route(\App\Constants\RouteNames::PROFILE_CHANGE_PASSWORD) }}">
                                    @csrf
                                    <div class="col-lg-12 mb-4">
                                        <label class="form-label">Current Password</label>
                                        <input type="password" class="form-control" name="current_password" required>
                                    </div>
                                    <div class="col-lg-12 mb-4">
                                        <label class="form-label">New Password</label>
                                        <input type="password" class="form-control" name="new_password" required>
                                    </div>
                                    <div class="col-lg-12 mb-4">
                                        <label class="form-label">Confirm New Password</label>
                                        <input type="password" class="form-control" name="new_password_confirmation" required>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-warning">Update Password</button>
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
