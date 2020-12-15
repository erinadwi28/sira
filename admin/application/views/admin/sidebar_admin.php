<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-dark accordion" style="background: -webkit-linear-gradient(top, #2dfbff 0%, #000080 100%);" id="accordionSidebar">

	<!-- Sidebar - Brand -->
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
		<div class="">
			<img src="<?= base_url('assets/dashboard/') ?>img/logo_SIRA.png" width="90" />
		</div>
		<div class="sidebar-brand-text mx-3">Admin</div>
	</a>

	<!-- Divider -->
	<hr class="sidebar-divider my-0">

	<!-- Nav Item - Dashboard -->
	<li class="nav-item active">
		<a class="nav-link" href="<?= base_url('admin') ?>"> 
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
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menukades" for="" aria-expanded="true" aria-controls="collapsePages">
			<i class="fa fa-users"></i>
			<span>Data Kepala Desa</span>
		</a>
		<div id="menukades" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<a class="collapse-item" href="<?= base_url('admin/list_data_kades') ?>">Data Kepala Desa</a>
				<a class="collapse-item" href="<?= base_url('admin/list_data_mantan_kades') ?>">Data Mantan Kepala Desa</a>
				<a class="collapse-item" href="<?= base_url('admin/form_cari_nik_ubah_kata_sandi_kades') ?>">Ubah Password Kades</a>
			</div>
		</div>
	</li>
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menurt" for="" aria-expanded="true" aria-controls="collapsePages">
			<i class="fa fa-users"></i>
			<span>Data Ketua RT</span>
		</a>
		<div id="menurt" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<a class="collapse-item" href="<?= base_url('admin/list_data_rt') ?>">Data Ketua RT</a>
				<a class="collapse-item" href="<?= base_url('admin/list_data_mantan_rt') ?>">Data Mantan Ketua RT</a>
				<a class="collapse-item" href="<?= base_url('admin/form_cari_nik_ubah_kata_sandi_rt') ?>">Ubah Password Ketua RT</a>
			</div>
		</div>
	</li>
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menuwarga" for="" aria-expanded="true" aria-controls="collapsePages">
			<i class="fa fa-users"></i>
			<span>Data Warga</span>
		</a>
		<div id="menuwarga" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<a class="collapse-item" href="<?= base_url('admin/list_data_warga') ?>">Data Warga</a>
				<a class="collapse-item" href="<?= base_url('admin/form_cari_nik_ubah_kata_sandi_warga') ?>">Ubah Password Warga</a>
			</div>
		</div>
	</li>
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menupermohonan" for=""
			aria-expanded="true" aria-controls="collapsePages">
			<i class="fa fa-book"></i>
			<span>Arsip Permohonan Surat</span>
		</a>
		<div id="menupermohonan" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<a class="collapse-item" href="<?= base_url('admin/list_data_permohonan') ?>">Permohonan Masuk</a>
				<a class="collapse-item" href="<?= base_url('admin/list_data_permohonan_selesai') ?>">Permohonan Selesai</a>
				<a class="collapse-item" href="<?= base_url('admin/list_data_permohonan_ditolak') ?>">Permohonan Ditolak</a>
				<a class="collapse-item" href="<?= base_url('admin/list_riwayat_permohonan') ?>">Riwayat Permohonan</a>
			</div>
		</div>
	</li>
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menukedinasan" for=""
			aria-expanded="true" aria-controls="collapsePages">
			<i class="fa fa-book"></i>
			<span>Arsip Surat Kedinasan</span>
		</a>
		<div id="menukedinasan" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<a class="collapse-item" href="<?= base_url('admin/list_surat_masuk') ?>">Data Surat Masuk</a>
				<a class="collapse-item" href="<?= base_url('admin/list_surat_keluar') ?>">Data Surat Keluar</a>
			</div>
		</div>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider">

	<li class="nav-item">
		<a class="nav-link " href="<?= base_url('admin/list_feedback') ?>">
			<i class="fa fa-comments"></i>
			<span>Data Pengaduan</span>
		</a>
	</li>
	
	<!-- Sidebar Toggler (Sidebar) -->
	<div class="text-center d-none d-md-inline">
		<button class="rounded-circle border-0" id="sidebarToggle"></button>
	</div>

</ul>
<!-- End of Sidebar -->