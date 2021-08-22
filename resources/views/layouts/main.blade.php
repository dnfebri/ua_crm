<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{{ $title ?? config('app.name') }}</title>

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="{{ url('dist/fontawesome-free/css/all.min.css') }}">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

	<!-- Theme style -->
	<link rel="stylesheet" href="{{ url('dist/css/adminlte.min.css') }}">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ url('dist/css/bootstrap.min.css') }}">
	{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
			integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"> --}}

	{{-- Sweetalert --}}
	<script src="{{ url('dist/sweetalert/sweetalert2.min.js') }}"></script>
	<link rel="stylesheet" href="{{ url('dist/sweetalert/sweetalert2.min.css') }}">


</head>

<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">

		<!-- Navbar -->
		@include('layouts.navbar')
		<!-- /.navbar -->

		<!-- Sidebar -->
		@include('layouts.sidebar')
		<!-- /.Sidebar -->

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">

			@yield('contents')

		</div>
		<!-- /.content-wrapper -->
		<footer class="main-footer">
			<strong>Copyright &copy; 2021 <a href="#">Urban Athletes</a>.</strong>
			All rights reserved.
			<!-- <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.1.0
      </div> -->
		</footer>

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->

	<!-- jQuery -->
	<script src="{{ url('dist/jquery/jquery.min.js') }}"></script>
	<!-- Bootstrap 4 -->
	<script src="{{ url('dist/js/bootstrap.min.js') }}"></script>
	<script src="{{ url('dist/js/bootstrap.bundle.min.js') }}"></script>
	<!-- Option 1: Bootstrap Bundle with Popper -->
	{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script> --}}



	<!-- AdminLTE App -->
	<script src="{{ url('dist/js/adminlte.js') }}"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="{{ url('dist/js/demo.js') }}"></script>

	{{-- My Script --}}
	<script src="{{ url('js/massage.js') }}"></script>
	<script src="{{ url('js/script.js') }}"></script>
</body>

</html>