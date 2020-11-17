<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-dark accordion"
	style="background: -webkit-linear-gradient(top, #2dfbff 0%, #000080 100%);" id="accordionSidebar">

	<!-- Sidebar - Brand -->
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
		<div class="">
			<img src="<?= base_url('assets/dashboard/') ?>img/logo_SIRA.png" width="90" />
		</div>
		<div class="sidebar-brand-text mx-0">KEPALA DESA</div>
	</a>

	<!-- Divider -->
	<hr class="sidebar-divider my-0">

	<!-- Nav Item - Dashboard -->
	<li class="nav-item active">
		<a class="nav-link" href="<?= base_url('kades') ?>">
			<i class="fas fa-fw fa-tachometer-alt"></i>
			<span>Dashboard</span></a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Heading -->
	<div class="sidebar-heading">
		MENU
	</div>

	<!-- Nav Item - Main Menu -->

	<li class="nav-item">
		<a class="nav-link" href="<?= base_url('kades/list_data_admin') ?>">
			<i class="fa fa-users"></i>
			<span>Data Admin</span>
		</a>
	</li>

	<li class="nav-item">
		<a class="nav-link" href="<?= base_url('kades/list_data_rt') ?>">
			<i class="fa fa-users"></i>
			<span>Data ketua RT</span>
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="<?= base_url('kades/list_data_warga') ?>">
			<i class="fa fa-users"></i>
			<span>Data Warga</span>
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="<?= base_url('kades/list_riwayat_permohonan') ?>">
			<i class="fa fa-book"></i>
			<span>Permohonan Surat</span>
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menukedinasan" for=""
			aria-expanded="true" aria-controls="collapsePages">
			<i class="fa fa-book"></i>
			<span>Arsip Surat Kedinasan</span>
		</a>
		<div id="menukedinasan" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<a class="collapse-item" href="<?= base_url('kades/list_surat_masuk') ?>">Data Surat Masuk</a>
				<a class="collapse-item" href="<?= base_url('kades/list_surat_keluar') ?>">Data Surat Keluar</a>
			</div>
		</div>
	</li>

<!-- Divider -->
	<hr class="sidebar-divider">

	<li class="nav-item">
		<a class="nav-link " href="<?= base_url('kades/list_feedback') ?>">
			<i class="fa fa-comments"></i>
			<span>Feedback</span>
		</a>
	</li>


	<!-- Sidebar Toggler (Sidebar) -->
	<div class="text-center d-none d-md-inline">
		<button class="rounded-circle border-0" id="sidebarToggle"></button>
	</div>

</ul>
<!-- End of Sidebar -->
