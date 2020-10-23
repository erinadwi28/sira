<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-dark accordion"
	style="background: -webkit-linear-gradient(top, #2dfbff 0%, #000080 100%);" id="accordionSidebar">

	<!-- Sidebar - Brand -->
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
		<div class="">
			<img src="<?= base_url('assets/dashboard/') ?>img/logo_SIRA.png" width="90" />
		</div>
		<div class="sidebar-brand-text mx-0">KETUA RT</div>
	</a>

	<!-- Divider -->
	<hr class="sidebar-divider my-0">

	<!-- Nav Item - Dashboard -->
	<li class="nav-item active">
		<a class="nav-link" href="<?= base_url('rt') ?>">
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
		<a class="nav-link" href="<?= base_url('rt/list_data_warga') ?>">
			<i class="fa fa-users"></i>
			<span>Data Warga</span>
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menupermohonan" for=""
			aria-expanded="true" aria-controls="collapsePages">
			<i class="fa fa-book"></i>
			<span>Data Permohonan Surat</span>
		</a>
		<div id="menupermohonan" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<a class="collapse-item" href="<?= base_url('rt/list_data_permohonan') ?>">Permohonan Masuk</a>
				<a class="collapse-item" href="<?= base_url('rt/list_data_permohonan_ditolak') ?>">Permohonan Ditolak</a>
				<a class="collapse-item" href="<?= base_url('rt/list_data_permohonan_disetujui') ?>">Permohonan Disetujui</a>
				<a class="collapse-item" href="<?= base_url('rt/list_data_permohonan_selesai') ?>">Permohonan Selesai</a>
			</div>
		</div>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="<?= base_url('rt/list_riwayat_permohonan') ?>">
			<i class="fa fa-book"></i>
			<span>Riwayat Permohonan</span>
		</a>
	</li>
	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Heading -->


	<!-- Nav Item - Menu Laporan -->

	<!-- Sidebar Toggler (Sidebar) -->
	<div class="text-center d-none d-md-inline">
		<button class="rounded-circle border-0" id="sidebarToggle"></button>
	</div>

</ul>
<!-- End of Sidebar -->
