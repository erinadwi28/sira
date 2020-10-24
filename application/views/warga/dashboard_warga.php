<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="align-items-center justify-content-between mb-4">
		<center>
			<h1 class="h3 mb-0 text-gray-800">Halaman Utama Warga RT <?= $warga['rt'] ?></h1>
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
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $kades->nama; ?></div>
							<?php } ?>
						</div>
						<div class="col-auto">
							<i class="fa fa fa-user fa-2x text-gray-300"></i>
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-md-12">
							<!-- <center>
								<a href="<?= base_url('admin/list_data_kades') ?>"
									class="badge badge-danger">Selengkapnya <i class="fas fa-arrow-right"></i></a>
							</center> -->
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
								Ketua RT</div>
							<?php 
							foreach($data_rt as $rt){ ?>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $rt->nama; ?></div>
							<?php } ?>
						</div>
						<div class="col-auto">
							<i class="fa fa fa-user fa-2x text-gray-300"></i>
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-md-12">
							<!-- <center>
								<a href="<?= base_url() ?>rt/profil_saya/"
									class="badge badge-warning">Selengkapnya <i class="fas fa-arrow-right"></i></a>
							</center> -->
						</div>
					</div>
				</div>
			</div>
		</div>`
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
								Menunggu Persetujuan Ketua RT</div>
							<?php 
							foreach($jumlah_persetujuan_rt as $rt){ ?>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $rt->total_persetujuan_rt; ?></div>
							<?php } ?>
						</div>
						<div class="col-auto">
							<i class="fa fa fa-envelope-open-text fa-2x text-gray-300"></i>
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-md-12">
							<center>
								<a href="<?= base_url('warga/list_data_sedang_proses_rt') ?>"
									class="badge badge-danger">Selengkapnya <i class="fas fa-arrow-right"></i></a>
							</center>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Data Permohonan Disetujui -->
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-warning shadow h-100 p-0">
				<div class="card-body px-3 py-3 ">
					<div class="row no-gutters align-items-center">
						<div class="col mr-0">
							<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
								Menunggu Persetujuan Admin</div>
							<?php 
							foreach($jumlah_persetujuan_admin as $admin){ ?>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $admin->total_persetujuan_admin; ?>
							</div>
							<?php } ?>
						</div>
						<div class="col-auto">
							<i class="fa fa fa-clipboard-check fa-2x text-gray-300"></i>
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-md-12">
							<center>
								<a href="<?= base_url('warga/list_data_sedang_proses_admin') ?>"
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
								Permohonan Selesai</div>
							<?php 
							foreach($jumlah_permohonan_selesai as $permohonan_selesai){ ?>
							<div class="h5 mb-0 font-weight-bold text-gray-800">
								<?= $permohonan_selesai->total_permohonan_selesai; ?></div>
							<?php } ?>
						</div>
						<div class="col-auto">
							<i class="fa fa fa-clipboard-check fa-2x text-gray-300"></i>
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-md-12">
							<center>
								<a href="<?= base_url('warga/list_data_permohonan_selesai') ?>"
									class="badge badge-success">Selengkapnya <i class="fas fa-arrow-right"></i></a>
							</center>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- History Permohonan -->
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-info shadow h-100 p-0">
				<div class="card-body px-3 py-3 ">
					<div class="row no-gutters align-items-center">
						<div class="col mr-0">
							<div class="text-xs font-weight-bold text-info text-uppercase mb-1">
								Riwayat Permohonan</div>
							<?php 
							foreach($jumlah_riwayat_permohonan as $riwayat){ ?>
							<div class="h5 mb-0 font-weight-bold text-gray-800">
								<?= $riwayat->total_riwayat_permohonan; ?></div>
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
	</div>

	<!-- Page Heading Data Surat-->
	<div class="card shadow h-100 p-0 mb-3">
		<div class="card-body px-3 py-2" style="background-color: #3366CC; border-radius: 5px;">
			<div class="d-sm-flex align-items-center justify-content-between">
				<h1 class="h5 mb-0 text-light">Pengajuan Surat</h1>
			</div>
		</div>
	</div>
    <div class="row">
        <div class="col-xl-4 col-md-3 mb-3">
            <div class="card border-left-primary shadow h-100 py-1">
                <div class="card-body px-3 py-3">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h6 mb-0 font-weight-bold text-primary ">SURAT KET. USAHA</div> <br>

                        </div>
                        <div>
                            <a class="btn btn-primary far fa-edit btn-sm" href="<?= base_url() ?>warga/form_suket001/<?= $warga['id_warga'] ?>" role="button"> Buat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SUKET DOMISILI-->
        <div class="col-xl-4 col-md-3 mb-3">
            <div class="card border-left-primary shadow h-100 py-1">
                <div class="card-body px-3 py-3">
                    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>
                    <?php if ($this->session->flashdata('success')) : ?>
                    <?php endif; ?>
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h6 mb-0 font-weight-bold text-primary ">SURAT KET. DOMISILI</div> <br>

                        </div>
                        <div>
                            <a class="btn btn-primary far fa-edit btn-sm" href="<?= base_url() ?>warga/form_suket002/<?= $warga['id_warga'] ?>" role="button"> Buat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SUKET BELUM MEMILIKI RUMAH -->
        <div class="col-xl-4 col-md-3 mb-3">
            <div class="card border-left-primary shadow h-100 py-1">
                <div class="card-body px-3 py-3">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h6 mb-0 font-weight-bold text-primary ">SUKET. BELUM MEMILIKI RUMAH</div> <br>

                        </div>
                        <div>
                            <a class="btn btn-primary far fa-edit btn-sm" href="<?= base_url() ?>warga/form_suket003/<?= $warga['id_warga'] ?>" role="button"> Buat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
	<div class="row">

		<!-- SUKET BEDA NAMA -->
		<div class="col-xl-4 col-md-3 mb-3">
			<div class="card border-left-primary shadow h-100 py-1">
				<div class="card-body  px-3 py-3 ">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="h6 mb-0 font-weight-bold text-primary ">SURAT KET. BEDA NAMA</div> <br>

						</div>
						<div>
							<a class="btn btn-primary far fa-edit btn-sm"
								href="<?= base_url() ?>warga/form_suket004/<?= $warga['id_warga'] ?>" role="button">
								Buat</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- SUKET IZIN KERAMAIAN -->
		<div class="col-xl-4 col-md-3 mb-3">
			<div class="card border-left-primary shadow h-100 py-1">
				<div class="card-body  px-3 py-3 ">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="h6 mb-0 font-weight-bold text-primary ">SURAT KET. IZIN KERAMAIAN</div> <br>

						</div>
						<div>
							<a class="btn btn-primary far fa-edit btn-sm"
								href="<?= base_url() ?>warga/form_suket005/<?= $warga['id_warga'] ?>" role="button">
								Buat</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- SUKET BELUM PERNAH MENIKAH -->
		<div class="col-xl-4 col-md-3 mb-3">
			<div class="card border-left-primary shadow h-100 py-1">
				<div class="card-body  px-3 py-3 ">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="h6 mb-0 font-weight-bold text-primary ">SUKET. BELUM PERNAH MENIKAH</div>

						</div>
						<div>
							<a class="btn btn-primary far fa-edit btn-sm"
								href="<?= base_url() ?>warga/form_suket006/<?= $warga['id_warga'] ?>" role="button">
								Buat</a>
						</div>
					</div>
				</div>
			</div>
		</div>


	</div>
	<div class="row">
		<!-- SUKET TIDAK MAMPU -->
		<div class="col-xl-4 col-md-3 mb-3">
			<div class="card border-left-primary shadow h-100 py-1">
				<div class="card-body px-3 py-3">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="h6 mb-0 font-weight-bold text-primary ">SURAT KET. TIDAK MAMPU</div> <br>

						</div>
						<div>
							<a class="btn btn-primary far fa-edit btn-sm"
								href="<?= base_url() ?>warga/form_suket007/<?= $warga['id_warga'] ?>" role="button">
								Buat</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- SUKET JANDA -->
		<div class="col-xl-4 col-md-3 mb-3">
			<div class="card border-left-primary shadow h-100 py-1">
				<div class="card-body px-3 py-3">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="h6 mb-0 font-weight-bold text-primary ">SURAT KET. JANDA</div> <br>

						</div>
						<div>
							<a class="btn btn-primary far fa-edit btn-sm"
								href="<?= base_url() ?>warga/form_suket008/<?= $warga['id_warga'] ?>" role="button">
								Buat</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- SUKET KEMATIAN -->
		<div class="col-xl-4 col-md-3 mb-3">
			<div class="card border-left-primary shadow h-100 py-1">
				<div class="card-body px-3 py-3">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="h6 mb-0 font-weight-bold text-primary ">SUKET. KEMATIAN</div> <br>

						</div>
						<div>
							<a class="btn btn-primary far fa-edit btn-sm"
								href="<?= base_url() ?>warga/form_suket009/<?= $warga['id_warga'] ?>" role="button">
								Buat</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<!-- SUKET KELAHIRAN -->
		<div class="col-xl-4 col-md-3 mb-3">
			<div class="card border-left-primary shadow h-100 py-1">
				<div class="card-body px-3 py-3">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="h6 mb-0 font-weight-bold text-primary ">SURAT KET. KELAHIRAN</div> <br>

						</div>
						<div>
							<a class="btn btn-primary far fa-edit btn-sm"
								href="<?= base_url() ?>warga/form_suket010/<?= $warga['id_warga'] ?>" role="button">
								Buat</a>
						</div>
					</div>
				</div>
			</div>
		</div>


		<!-- SUKET PENGANTAR KTP -->
		<div class="col-xl-4 col-md-3 mb-3">
			<div class="card border-left-primary shadow h-100 py-1">
				<div class="card-body px-3 py-3">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="h6 mb-0 font-weight-bold text-primary ">SURAT KET. PENGANTAR KTP</div> <br>

						</div>
						<div>
							<a class="btn btn-primary far fa-edit btn-sm"
								href="<?= base_url() ?>warga/form_suket011/<?= $warga['id_warga'] ?>" role="button">
								Buat</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- SUKET PENGANTAR KK -->
		<div class="col-xl-4 col-md-3 mb-3">
			<div class="card border-left-primary shadow h-100 py-1">
				<div class="card-body px-3 py-3">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="h6 mb-0 font-weight-bold text-primary ">SUKET. PENGANTAR KK</div> <br>

						</div>
						<div>
							<a class="btn btn-primary far fa-edit btn-sm"
								href="<?= base_url() ?>warga/form_suket012/<?= $warga['id_warga'] ?>" role="button">
								Buat</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<!-- SUKET PENGHASILAN -->
		<div class="col-xl-4 col-md-3 mb-3">
			<div class="card border-left-primary shadow h-100 py-1">
				<div class="card-body px-3 py-3">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="h6 mb-0 font-weight-bold text-primary ">SURAT KET. PENGHASILAN</div> <br>

						</div>
						<div>
							<a class="btn btn-primary far fa-edit btn-sm"
								href="<?= base_url() ?>warga/form_suket013/<?= $warga['id_warga'] ?>" role="button">
								Buat</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- SUKET PINDAH -->
		<div class="col-xl-4 col-md-3 mb-3">
			<div class="card border-left-primary shadow h-100 py-1">
				<div class="card-body px-3 py-3">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="h6 mb-0 font-weight-bold text-primary ">SURAT KET. PINDAH</div> <br>

						</div>
						<div>
							<a class="btn btn-primary far fa-edit btn-sm"
								href="<?= base_url() ?>warga/form_suket014/<?= $warga['id_warga'] ?>" role="button">
								Buat</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- SUKET KEPEMILIKAN TANAH -->
		<div class="col-xl-4 col-md-3 mb-3">
			<div class="card border-left-success shadow h-100 py-1">
				<div class="card-body px-3 py-3">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="h6 mb-0 font-weight-bold text-success ">SUKET. KEPEMILIKAN TANAH</div>

						</div>
						<div>
							<button class="btn btn-success btn-sm"><i class="fa fa-download" aria-hidden="true">
									Unduh</i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-xl-4 col-md-3 mb-3">
			<div class="card border-left-success shadow h-100 py-1">
				<div class="card-body px-3 py-3">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="h6 mb-0 font-weight-bold text-success ">SUKET. PENYERAHAN WARIS </div>

						</div>
						<div>
							<button class="btn btn-success btn-sm"><i class="fa fa-download" aria-hidden="true">
									Unduh</i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-4 col-md-3 mb-3">
			<div class="card border-left-success shadow h-100 py-1">
				<div class="card-body px-3 py-3">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="h6 mb-0 font-weight-bold text-success ">SUKET. AHLI WARIS</div> <br>

						</div>
						<div>
							<button class="btn btn-success btn-sm"><i class="fa fa-download" aria-hidden="true">
									Unduh</i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-4 col-md-3 mb-3">
			<div class="card border-left-success shadow h-100 py-1">
				<div class="card-body px-3 py-3">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="h6 mb-0 font-weight-bold text-success ">SUKET. PENGANTAR NIKAH</div>

						</div>
						<div>
							<button class="btn btn-success btn-sm"><i class="fa fa-download" aria-hidden="true">
									Unduh</i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xl-4 col-md-3 mb-3">
			<div class="card border-left-success shadow h-100 py-1">
				<div class="card-body px-3 py-3">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="h6 mb-0 font-weight-bold text-success ">SUKET. PENYERAHAN TANAH</div> <br>

						</div>
						<div>
							<button class="btn btn-success btn-sm"><i class="fa fa-download" aria-hidden="true">
									Unduh</i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-4 col-md-3 mb-3">
			<div class="card border-left-success shadow h-100 py-1">
				<div class="card-body px-3 py-3">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="h6 mb-0 font-weight-bold text-success ">SUKET. REKOMENDASI IMB</div> <br>
						</div>
						<div>
							<button class="btn btn-success btn-sm"><i class="fa fa-download" aria-hidden="true">
									Unduh</i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-4 col-md-3 mb-3">
			<div class="card border-left-success shadow h-100 py-1">
				<div class="card-body px-3 py-3">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="h6 mb-0 font-weight-bold text-success ">SUKET. REKOMENDASI USAHA MIKRO KECIL
							</div>

						</div>
						<div>
							<button class="btn btn-success btn-sm"><i class="fa fa-download" aria-hidden="true">
									Unduh</i></button>
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
