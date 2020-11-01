<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="align-items-center justify-content-between mb-4">
		<center>
			<h1 class="h3 mb-0 text-gray-800">Halaman Utama Admin</h1>
		</center>
	</div> 

	<!-- Page Heading Data Pengguna-->
	<div class="card shadow h-100 p-0 mb-3">
		<div class="card-body px-3 py-2" style="background-color: #3366CC; border-radius: 5px;">
			<div class="d-sm-flex align-items-center justify-content-between">
				<h1 class="h5 mb-0 text-light">Data Pengguna</h1>
			</div>
		</div>
	</div>

	<!-- Content Row line 1-->
	<div class="row">
		<!-- Kepala Desa -->
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-danger shadow h-100 p-0">
				<div class="card-body px-3 py-3 ">
					<div class="row no-gutters align-items-center">
						<div class="col mr-0">
							<div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
								Kepala Desa</div>
							<?php 
							foreach($data_kades as $kades){ ?>
							<div class="h6 mb-0 font-weight-bold text-gray-800"><?= $kades->nama; ?></div>
							<?php } ?>
						</div>
						<div class="col-auto">
							<i class="fa fa fa-user fa-2x text-gray-300 btn-sm"></i>
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-md-12">
							<center>
								<a href="<?= base_url('admin/list_data_kades') ?>"
									class="badge badge-danger">Selengkapnya <i class="fas fa-arrow-right"></i></a>
							</center>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Jumlah Data RT -->
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-warning shadow h-100 p-0">
				<div class="card-body px-3 py-3 ">
					<div class="row no-gutters align-items-center">
						<div class="col mr-0">
							<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
								Data Ketua RT</div>
							<?php 
							foreach($jumlah_rt as $rt){ ?>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $rt->total_rt; ?></div>
							<?php } ?>
						</div>
						<div class="col-auto">
							<i class="fa fa fa-users fa-2x text-gray-300"></i>
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-md-12">
							<center>
								<a href="<?= base_url('admin/list_data_rt') ?>"
									class="badge badge-warning">Selengkapnya <i class="fas fa-arrow-right"></i></a>
							</center>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Jumlah Data Warga -->
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-success shadow h-100 p-0">
				<div class="card-body px-3 py-3 ">
					<div class="row no-gutters align-items-center">
						<div class="col mr-0">
							<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
								Data Warga</div>
							<?php 
							foreach($jumlah_warga as $warga){ ?>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $warga->total_warga; ?></div>
							<?php } ?>
						</div>
						<div class="col-auto">
							<i class="fa fa fa-users fa-2x text-gray-300"></i>
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-md-12">
							<center>
								<a href="<?= base_url('admin/list_data_warga') ?>"
									class="badge badge-success">Selengkapnya <i class="fas fa-arrow-right"></i></a>
							</center>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Page Heading Data Surat-->
	<div class="card shadow h-100 p-0 mb-3">
		<div class="card-body px-3 py-2" style="background-color: #3366CC; border-radius: 5px;">
			<div class="d-sm-flex align-items-center justify-content-between">
				<h1 class="h5 mb-0 text-light">Data Surat Menyurat</h1>
			</div>
		</div>
	</div>

	<!-- Content Row line 2 -->
	<div class="row">

		<!-- Data Permohonan Masuk -->
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-danger shadow h-100 p-0">
				<div class="card-body px-3 py-3 ">
					<div class="row no-gutters align-items-center">
						<div class="col mr-0">
							<div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
								Data Permohonan Masuk</div>
							<?php 
							foreach($jumlah_permohonan_masuk as $permohonan_masuk){ ?>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $permohonan_masuk->total_permohonan_masuk; ?></div>
							<?php } ?>
						</div>
						<div class="col-auto">
							<i class="fa fa fa-envelope-open-text fa-2x text-gray-300"></i>
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-md-12">
							<center>
								<a href="<?= base_url('admin/list_data_permohonan') ?>"
									class="badge badge-danger">Selengkapnya <i class="fas fa-arrow-right"></i></a>
							</center>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Data Permohonan Selesai -->
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-warning shadow h-100 p-0">
				<div class="card-body px-3 py-3 ">
					<div class="row no-gutters align-items-center">
						<div class="col mr-0">
							<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
								Data Permohonan Ditolak</div>
							<?php 
							foreach($jumlah_permohonan_ditolak as $permohonan_ditolak){ ?>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $permohonan_ditolak->total_permohonan_ditolak; ?></div>
							<?php } ?>
						</div>
						<div class="col-auto">
							<i class="fa fa fa-file-excel fa-2x text-gray-300"></i>
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-md-12">
							<center>
								<a href="<?= base_url('admin/list_data_permohonan_ditolak') ?>"
									class="badge badge-warning">Selengkapnya <i class="fas fa-arrow-right"></i></a>
							</center>
						</div>
					</div>
				</div>
			</div>
        </div>
        
		<!-- Data Permohonan Selesai -->
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-success shadow h-100 p-0">
				<div class="card-body px-3 py-3 ">
					<div class="row no-gutters align-items-center">
						<div class="col mr-0">
							<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
								Data Permohonan Selesai</div>
							<?php 
							foreach($jumlah_permohonan_selesai as $permohonan_selesai){ ?>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $permohonan_selesai->total_permohonan_selesai; ?></div>
							<?php } ?>
						</div>
						<div class="col-auto">
							<i class="fa fa fa-clipboard-check fa-2x text-gray-300"></i>
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-md-12">
							<center>
								<a href="<?= base_url('admin/list_data_permohonan_selesai') ?>"
									class="badge badge-success">Selengkapnya <i class="fas fa-arrow-right"></i></a>
							</center>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Data Surat Masuk -->
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-info shadow h-100 p-0">
				<div class="card-body px-3 py-3 ">
					<div class="row no-gutters align-items-center">
						<div class="col mr-0">
							<div class="text-xs font-weight-bold text-info text-uppercase mb-1">
								Riwayat Permohonan</div>
							<?php 
							foreach($jumlah_riwayat_permohonan as $riwayat){ ?>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $riwayat->total_riwayat_permohonan ?></div>
							<?php } ?>
						</div>
						<div class="col-auto">
							<i class="fa fa fa-book fa-2x text-gray-300"></i>
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-md-12">
							<center>
								<a href="<?= base_url('admin/list_riwayat_permohonan') ?>"
									class="badge badge-info">Selengkapnya <i class="fas fa-arrow-right"></i></a>
							</center>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Data Surat Masuk -->
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-danger shadow h-100 p-0">
				<div class="card-body px-3 py-3 ">
					<div class="row no-gutters align-items-center">
						<div class="col mr-0">
							<div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
								Data Surat Masuk Kedinasan</div>
							<?php 
							foreach($jumlah_surat_masuk as $surat_masuk){ ?>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $surat_masuk->total_surat_masuk ?></div>
							<?php } ?>
						</div>
						<div class="col-auto">
							<i class="fa fa fa-book fa-2x text-gray-300"></i>
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-md-12">
							<center>
								<a href="<?= base_url('admin/list_surat_masuk') ?>"
									class="badge badge-danger">Selengkapnya <i class="fas fa-arrow-right"></i></a>
							</center>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Data Surat Keluar -->
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-warning shadow h-100 p-0">
				<div class="card-body px-3 py-3 ">
					<div class="row no-gutters align-items-center">
						<div class="col mr-0">
							<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
								Data Surat Keluar Kedinasan</div>
							<?php 
							foreach($jumlah_surat_keluar as $surat_keluar){ ?>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $surat_keluar->total_surat_keluar ?></div>
							<?php } ?>
						</div>
						<div class="col-auto">
							<i class="fa fa fa-book fa-2x text-gray-300"></i>
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-md-12">
							<center>
								<a href="<?= base_url('admin/list_surat_keluar') ?>"
									class="badge badge-warning">Selengkapnya <i class="fas fa-arrow-right"></i></a>
							</center>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->