<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-dark accordion" style="background: -webkit-linear-gradient(top, #2dfbff 0%, #000080 100%);" id="accordionSidebar">

	<!-- Sidebar - Brand -->
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
		<div class="">
			<img src="<?= base_url('assets/dashboard/') ?>img/logo_SIRA.png" width="90" />
		</div>
		<div class="sidebar-brand-text mx-3">Warga</div>
	</a>

	<!-- Divider -->
	<hr class="sidebar-divider my-0">

	<!-- Nav Item - Dashboard -->
	<li class="nav-item active">
		<a class="nav-link" href="<?= base_url() ?>warga">
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
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menupermohonan" for=""
			aria-expanded="true" aria-controls="collapsePages">
			<i class="fa fa-book"></i>
			<span>Permohonan Surat</span>
		</a>
		<div id="menupermohonan" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<a class="collapse-item" href="<?= base_url('warga/list_data_sedang_proses_rt') ?>">Sedang Proses Ketua RT</a>
				<a class="collapse-item" href="<?= base_url('warga/list_data_sedang_proses_admin') ?>">Sedang Proses Kelurahan</a>
				<a class="collapse-item" href="<?= base_url() ?>warga/list_data_permohonan_ditolak/<?= $warga['id_warga'] ?>">Ditolak</a>
				<a class="collapse-item" href="<?= base_url() ?>warga/list_permohonan_selesai/<?= $warga['id_warga'] ?>">Selesai</a>
			</div>
		</div>
	</li>
	
	<li class="nav-item">
		<a class="nav-link " href="<?= base_url() ?>warga/list_history_permohonan/<?= $warga['id_warga'] ?>">
			<i class="fa fa-book"></i>
			<span>Riwayat Permohonan</span>
		</a>
	</li>
	<!-- Divider -->
	<hr class="sidebar-divider d-none d-md-block">

	<!-- Sidebar Toggler (Sidebar) -->
	<div class="text-center d-none d-md-inline">
		<button class="rounded-circle border-0" id="sidebarToggle"></button>
	</div>

</ul>
<!-- End of Sidebar -->
