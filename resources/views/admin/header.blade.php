<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/logo/logo.png') }}" />
<!--! END: Favicon-->
<!--! BEGIN: Bootstrap CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/bootstrap.min.css') }}" />
<!--! END: Bootstrap CSS-->
<!--! BEGIN: Vendors CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/vendors/css/vendors.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/vendors/css/daterangepicker.min.css') }}" />
<!--! END: Vendors CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/vendors/css/select2.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/vendors/css/select2-theme.min.css') }}">
<!--! BEGIN: Custom CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/theme.min.css') }}" />

<!-- Toast Container -->
<div class="position-fixed top-0 end-0 p-3" style="z-index: 1055;">
    @if (session('success'))
        <div id="successToast" class="toast align-items-center text-bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body text-white">
                    {{ session('success') }}
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    @endif

    @if ($errors->any())
        <div id="errorToast" class="toast align-items-center text-bg-danger border-0" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body text-white">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    @endif
</div>

<!--! END: Custom CSS-->
<!--! HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries !-->
<!--! WARNING: Respond.js doesn"t work if you view the page via file: !-->
<!--[if lt IE 9]>
			<script src="https:oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https:oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->