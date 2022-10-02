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
    <link href="/backend/vendors/bower_components/datatables/media/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>

	<!-- Custom CSS -->
	<link href="/backend/dist/css/style.css" rel="stylesheet" type="text/css">
    @yield('css')
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
	<!-- JavaScript -->

	<!-- jQuery -->
     <!-- jQuery -->
     <script src="/backend/vendors/bower_components/jquery/dist/jquery.min.js"></script>

     <!-- Bootstrap Core JavaScript -->
     <script src="/backend/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

     <!-- Data table JavaScript -->
     <script src="/backend/vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
     <script src="/backend/dist/js/dataTables-data.js"></script>

     <!-- Slimscroll JavaScript -->
     <script src="/backend/dist/js/jquery.slimscroll.js"></script>

     <!-- Owl JavaScript -->
     <script src="/backend/vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>

     <!-- Switchery JavaScript -->
     <script src="/backend/vendors/bower_components/switchery/dist/switchery.min.js"></script>

     <!-- Fancy Dropdown JS -->
     <script src="/backend/dist/js/dropdown-bootstrap-extended.js"></script>

     <!-- Init JavaScript -->
     <script src="/backend/dist/js/init.js"></script>

	@yield('js')

</body>

</html>
