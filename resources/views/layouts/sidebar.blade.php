<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="index.html" class="brand-link bg-white pb-2 text-decoration-none">
		{{-- <img src="dist/img/bpjskt.png" alt="AdminLTE Logo" class="brand-image img-circle"> --}}
		<b>LOGO</b>
		<span class="brand-text font-weight-light">
			{{-- <img src="dist/img/bpjskt text.png" alt="BPJS Ketenagakerjaan" class="" style="height: 35px;"> --}}
			<b>Urban Athletes</b>
		</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

				<li class="nav-header">ADMINISTRATOR</li>
				<li class="nav-item">
					<a href="/" class="nav-link" data-nav="{{ $side ?? '' }}">
						<i class="nav-icon fas fa-fw fa-tachometer-alt"></i>
						<p>Dashboard</p>
					</a>
				</li>
				{{-- <li class="nav-item">
					<a href="users.html" class="nav-link">
						<i class="nav-icon fas fa-fw fa-users"></i>
						<p>Managemen User</p>
					</a>
				</li> --}}

				<li class="nav-header">USER</li>
				<li class="nav-item">
					<a href="akun.html" class="nav-link">
						<i class="nav-icon fas fa-fw fa-user"></i>
						<p>Akun</p>
					</a>
				</li>

				<li class="nav-header">MASTER DATA</li>
				<li class="nav-item">
					<a href="{{ route('karyawan.index') }}" class="nav-link" data-nav="{{ $side ?? '' }}">
						<i class="nav-icon fa-fw fas fa-user-friends"></i>
						<p>Karyawan</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="{{ route('club.index') }}" class="nav-link" data-nav="{{ $side ?? '' }}">
						<i class="nav-icon fa-fw fas fa-edit"></i>
						<p>Club</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="{{ route('divisi.index') }}" class="nav-link" data-nav="{{ $side ?? '' }}">
						<i class="nav-icon fa-fw fas fa-edit"></i>
						<p>Divisi</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="{{ route('jabatan.index') }}" class="nav-link" data-nav="{{ $side ?? '' }}">
						<i class="nav-icon fa-fw fas fa-edit"></i>
						<p>Jabatan</p>
					</a>
				</li>

		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>