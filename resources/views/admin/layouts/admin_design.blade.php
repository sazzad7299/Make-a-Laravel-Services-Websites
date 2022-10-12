<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>{{env('APP_NAME')}}</title>
	<meta name="csrf-token" content="{{ csrf_token() }}" />

	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="icon" href="favicon.ico" type="image/x-icon">



    @stack('admincss')
    {{-- sweet alert --}}
    {{-- <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script> --}}
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.20/sweetalert2.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.20/sweetalert2.all.min.js"></script>
        <script src="https://unpkg.com/@popperjs/core@2.9.1/dist/umd/popper.min.js" charset="utf-8"></script>
        <link href="{{asset('backend/vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>


    <!-- Custom CSS -->
    <link href="{{asset('backend/dist/css/style.css')}}" rel="stylesheet" type="text/css">



</head>

<body>
	<!-- Preloader -->
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
	<!-- /Preloader -->
	<div class="wrapper box-layout theme-1-active pimary-color-blue ">

		<!-- Top Menu Items -->
		@include('admin.layouts.topbar')
		<!-- /Top Menu Items -->

		<!-- Left Sidebar Menu -->
		@include('admin.layouts.admin_left_sidebar')
		<!-- /Left Sidebar Menu -->

		<!-- Right Sidebar Menu -->
		@include('admin.layouts.admin_right_sidebar')
		<!-- /Right Sidebar Menu -->




		<!-- Main Content -->
		<div class="page-wrapper error-bg-img">
			<div class="container-fluid">
                @include('admin.layouts.breadcrumb')
				@yield('content')
			</div>

			<!-- Footer -->
			@include('admin.layouts.admin_footer')
			<!-- /Footer -->

		</div>
		<!-- /Main Content -->

	</div>
	<!-- /#wrapper -->


    <!-- jQuery -->
		<script src="{{asset('backend/vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="{{asset('backend/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>


        @stack('adminjs')

		<!-- Init JavaScript -->
        <script src="{{asset('backend/dist/js/form-advance-data.js')}}"></script>
        {{-- Sweet alert --}}
	<script src="{{asset('backend/dist/js/init.js')}}"></script>

    @if(Session::has('success'))
    <script>
        window.addEventListener('load',function(){
            Swal.fire({
            position: 'top-end',
            toast:true,
            icon: 'success',
            title: "{!! Session('success') !!}",
            showConfirmButton: false,
            timer: 2000
            })
        });
    </script>
    @endif
    @if(Session::has('error'))
    <script>
        window.addEventListener('load',function(){
            Swal.fire({
            position: 'top-end',
            toast:true,
            icon: 'error',
            title: "{!! Session('error') !!}",
            showConfirmButton: false,
            timer: 2000
            })
        });
    </script>
    @endif
</body>
</html>
