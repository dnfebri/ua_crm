<nav class="main-header navbar navbar-expand navbar-white navbar-light">
	<!-- Left navbar links -->
	<ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
		</li>
		{{-- <li class="nav-item">
			<a class="nav-link" data-widget="pushmenu" href="#" role="button">Dashboard</a>
		</li> --}}
		<!-- <li class="nav-item d-none d-sm-inline-block">
    <a href="index3.html" class="nav-link">Home</a>
  </li> -->
		<!-- <li class="nav-item d-none d-sm-inline-block">
    <a href="#" class="nav-link">Contact</a>
  </li> -->
	</ul>

	<h4 class="m-0">{{ $side ?? '' }}</h4>

	<!-- Right navbar links -->
	<ul class="navbar-nav ml-auto">
		<li class="nav-item dropdown">

			<div class="info" data-toggle="dropdown">
				<a href="#" class="d-inline mr-3 text-decoration-none text-body">Alexander</a>
				<img src="{{url('img/profile/user2-160x160.jpg')}}" class="img-circle elevation-2 mr-3" style="width: 30px;"
					alt="User Image">
			</div>

			<!-- <a class="nav-link" data-toggle="dropdown" href="#">
      <i class="far fa-bell"></i>
      <span class="badge badge-warning navbar-badge">15</span>
    </a> -->
			<div class="dropdown-menu dropdown-menu dropdown-menu-right">
				<div class="dropdown-divider"></div>
				<a href="#" class="dropdown-item">
					<i class="fas fa-fw fa-user mr-2"></i> Akun
				</a>
				<div class="dropdown-divider"></div>
				<a href="#" class="dropdown-item">
					<i class="fas fa-fw fa-cog mr-2"></i> Seting
					<!-- <span class="float-right text-muted text-sm">12 hours</span> -->
				</a>
				<div class="dropdown-divider"></div>
				<a href="#" class="dropdown-item">
					<i class="fas fa-fw fa-sign-out-alt mr-2"></i> Logout
					<!-- <span class="float-right text-muted text-sm">2 days</span> -->
				</a>
				<div class="dropdown-divider"></div>
				<!-- <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a> -->
			</div>
		</li>

	</ul>
</nav>