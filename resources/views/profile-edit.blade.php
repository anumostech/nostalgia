@include('header')

<main id="content" role="main">
    <div class="bg-gray-13 bg-md-transparent">
        <div class="container">
            <div class="my-md-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="{{ route(\App\Constants\RouteNames::HOME) }}">Home</a></li>
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="{{ route(\App\Constants\RouteNames::MY_ACCOUNT) }}">My Account</a></li>
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Edit Profile</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="container mb-10">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-white">
                        <h5 class="mb-0">Edit Profile Information</h5>
                    </div>
                    <div class="card-body">
                        @if(session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif

                        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="text-center mb-4">
                                <img src="{{ $user->avatar ? asset('storage/' . $user->avatar) : asset('assets/img/default-avatar.jpg') }}"
                                    alt="Avatar" class="rounded-circle mb-3" width="120" height="120" style="object-fit: cover;">
                                <div class="form-group">
                                    <label for="avatar" class="btn btn-outline-primary btn-sm">Change Avatar</label>
                                    <input type="file" name="avatar" id="avatar" class="d-none" accept="image/*">
                                    @error('avatar') <div class="text-danger small">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Full Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="name" value="{{ old('name', $user->name) }}" required>
                                    @error('name') <div class="text-danger small">{{ $message }}</div> @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Email Address <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" name="email" value="{{ old('email', $user->email) }}" required>
                                    @error('email') <div class="text-danger small">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-md-12">
                                    <label class="form-label">Phone Number</label>
                                    <input type="text" class="form-control" name="phone" value="{{ old('phone', $user->phone) }}">
                                    @error('phone') <div class="text-danger small">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="{{ route(\App\Constants\RouteNames::MY_ACCOUNT) }}" class="btn btn-secondary">Cancel</a>
                                <button type="submit" class="btn btn-primary-dark-w px-5">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@include('footer')

<script>
document.getElementById('avatar').addEventListener('change', function(e) {
    if (this.files && this.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            document.querySelector('.rounded-circle').setAttribute('src', e.target.result);
        }
        reader.readAsDataURL(this.files[0]);
    }
});
</script>
</body>
</html>
