<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />

	<title>Surat Pengantar KTP</title>
	<!--Tittle Icon-->
	<link rel="shortcut icon" href="<?= base_url('assets/dashboard/') ?>img/tittle.png" type="image/png" />

	<!-- Custom fonts for this template-->
	<link href="<?= base_url('assets/dashboard/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

	<!-- Custom styles for this template-->
	<link href="sb-admin-2.min.css" rel="stylesheet" />
	<!-- <link href="<?= base_url('assets/dashboard/') ?>css/preview.css" rel="stylesheet" /> -->

	<link href="<?= base_url('assets/dashboard/') ?>css/validation.css" rel="stylesheet" />
	<link href="<?= base_url('assets/dashboard/') ?>css/validation_warga.css" rel="stylesheet" />

	<link href="<?= base_url('assets/dashboard/') ?>css/lightbox.min.css" rel="stylesheet" />

	<!-- Custom styles for this page -->
	<link href="<?= base_url('assets/dashboard/') ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" />

	<style>
		.kopsurat p {
			font-weight: bold;
			line-height: 1em;
		}

		.card-body {
			padding: 2rem;
			color: black;
		}

		.badan_surat {
			opacity: 0.8;
		}

		.badan_surat {
			font-family: 'Book Antiqua';
		}

		.no_surat {
			font-weight: bold;
			font-size: 11pt;
		}

		.paragraf {
			/* text-indent: 2.8125em; */
			text-align: justify;
		}

		.isi_surat {
			margin-left: 0.0375em;
			font-size: 11pt;
			line-height: 1em;
		}

		.identitas {
			margin-left: 2.8125em;
			margin-bottom: 0.3125em;
		}

		.img_ttd {
			width: 150px;
		}

		.ttd_kades {
			display: block;
			position: absolute;
			float: left;
			margin-top: 30px;
			margin-right: -400px;
		}

		.img-fluid {
			max-width: 100%;
			height: auto;
		}

		.container-fluid {
			width: 100%;
			padding-right: 0.75rem;
			padding-left: 0.75rem;
			margin-right: auto;
			margin-left: auto;
		}

		.bawah {
			display: block;
			position: absolute;
			float: right;
			margin-right: 160px;
		}

		.kades {
			display: block;
			position: absolute;
			float: left;
			margin-top: 120px;
			/* margin-right: -830px; */
			margin-right: -800px;
		}

		.pemohon {
			display: block;
			position: absolute;
			float: right;
			margin-right: 160px;
		}

		hr {
			margin-top: 80px;
		}
	</style>

</head>

<body id="page-top">
	<!-- Begin Page Content -->
	<div class="container-fluid">
		<!-- Page Heading -->
		<div class="row">
			<div class="col-md-2">
			</div>
			<div class="col-md-8">
				<div class="card shadow mb-4">
					<div class="card-body">
						<center>
							<div class="kopsurat row">
								<div class="col-md-12 mb-3">
									<object data="" type="image">
										<img class="img-fluid" alt="logo_kop_surat" src="<?= base_url('assets/dashboard/') ?>img/KOP.png">
									</object>
								</div>
							</div>
							<!-- <hr class="hr_kop"> -->
							<?php
							foreach ($detail_suket as $w) {
							?>
								<?php
								if ($w->no_bulan == 1) {
									$bulan = 'I';
								} elseif ($w->no_bulan == 2) {
									$bulan = 'II';
								} elseif ($w->no_bulan == 3) {
									$bulan = 'III';
								} elseif ($w->no_bulan == 4) {
									$bulan = 'IV';
								} elseif ($w->no_bulan == 5) {
									$bulan = 'V';
								} elseif ($w->no_bulan == 6) {
									$bulan = 'VI';
								} elseif ($w->no_bulan == 7) {
									$bulan = 'VII';
								} elseif ($w->no_bulan == 8) {
									$bulan = 'VIII';
								} elseif ($w->no_bulan == 9) {
									$bulan = 'IX';
								} elseif ($w->no_bulan == 10) {
									$bulan = 'X';
								} elseif ($w->no_bulan == 11) {
									$bulan = 'XI';
								} elseif ($w->no_bulan == 12) {
									$bulan = 'XII';
								} else {
									$bulan = '';
								} ?>
								<div class="badan_surat">
									<div class="">
										<div class="row">
											<div class="col-7">
												<table class="table-responsive">
													<tbody>
														<tr>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
														<tr>
															<td> <b>Perihal</b> </td>
															<td></td>
															<td> <b>:</b> </td>
															<td> <b>Permohonan Untuk Mendapatkan</b></td>
															<td></td>
															<td></td>
															<td></td>
															<td>Kepada</td>

														</tr>
														<tr>
															<td></td>
															<td></td>
															<td></td>
															<td><u> <b>KTP Kabupaten Kota Waringin Barat</b> </u></td>
															<td></td>
															<td></td>
															<td></td>
															<td>Yth.Camat Arut Selatan <br>
																Di Pangkalan Bun
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<br>
									<div class="isi_surat identitas">
										<table class="table-responsive">
											<tbody>
												<tr>
													<td>Nama Lengkap</td>
													<td> </td>
													<td> </td>
													<td>:</td>
													<td> </td>
													<td> </td>
													<td><b><?= $w->nama; ?></b></td>
												</tr>
												<tr>
													<td>Jenis Kelamin</td>
													<td> </td>
													<td> </td>
													<td>:</td>
													<td> </td>
													<td> </td>
													<td><?= $w->jenis_kelamin; ?></td>
												</tr>
												<tr>
													<td>Tempat Tanggal Lahir</td>
													<td> </td>
													<td> </td>
													<td>:</td>
													<td> </td>
													<td> </td>
													<td><?= $w->tempat_lahir; ?>,
														<?= format_indo(date($w->tanggal_lahir)); ?>
													</td>
												</tr>
												<tr>
													<td>Alamat</td>
													<td> </td>
													<td> </td>
													<td>:</td>
													<td> </td>
													<td> </td>
													<td><?= $w->alamat; ?></td>
												</tr>
												<tr>
													<td>RT</td>
													<td> </td>
													<td> </td>
													<td>:</td>
													<td> </td>
													<td> </td>
													<td><?= $w->rt; ?></td>
												</tr>
												<tr>
													<td>Kelurahan</td>
													<td> </td>
													<td> </td>
													<td>:</td>
													<td> </td>
													<td> </td>
													<td><?= $w->kelurahan; ?></td>
												</tr>
												<tr>
													<td>Status Perkawinan</td>
													<td> </td>
													<td> </td>
													<td>:</td>
													<td> </td>
													<td> </td>
													<td><?= $w->status_perkawinan; ?>n</td>
												</tr>
												<tr>
													<td>Gol. Darah</td>
													<td> </td>
													<td> </td>
													<td>:</td>
													<td> </td>
													<td> </td>
													<td><?= $w->golongan_darah; ?></td>
												</tr>
												<tr>
													<td>Agama</td>
													<td> </td>
													<td> </td>
													<td>:</td>
													<td> </td>
													<td> </td>
													<td><?= $w->agama; ?></td>
												</tr>
												<tr>
													<td>Pekerjaan</td>
													<td> </td>
													<td> </td>
													<td>:</td>
													<td> </td>
													<td> </td>
													<td><?= $w->pekerjaan; ?></td>
												</tr>
												<tr>
													<td>No. Kartu Keluarga</td>
													<td> </td>
													<td> </td>
													<td>:</td>
													<td> </td>
													<td> </td>
													<td><?= $w->no_kk; ?></td>
												</tr>

												<tr>
													<td>Tanggal Mulai Tinggal </td>
													<td> </td>
													<td> </td>
													<td>:</td>
													<td> </td>
													<td> </td>
													<td><?= format_indo(date($w->tanggal_tinggal)); ?></td>
												</tr>
												<?php if ($w->tanggal_surat_pindah != NULL && $w->no_surat_pindah !=  NULL) { ?>
													<tr>
														<td>No. Surat Pindah</td>
														<td> </td>
														<td> </td>
														<td>:</td>
														<td> </td>
														<td> </td>
														<td><?= $w->no_surat_pindah; ?></td>
													</tr>
													<tr>
														<td>Tgl. Surat Pindah</td>
														<td> </td>
														<td> </td>
														<td>:</td>
														<td> </td>
														<td> </td>
														<td><?= format_indo(date($w->tanggal_surat_pindah)); ?></td>
													</tr>
												<?php } ?>
											</tbody>
										</table>
									</div>
									<div class="isi_surat paragraf">
										<p>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dengan ini mengajukan
											permohonan kepada Bapak untuk dapat diberikan Kartu Tanda Penduduk (KTP)
											Kabupaten Kotawaringin Barat. <br>
											Untuk melengkapi persyaratan dimaksud bersama ini dilampirkan: <br>
											1. Pas Photo uk. 2 X 3 cm sebanyak 3 (Tiga ) Lembar <br>
											2. Foto copy Kartu Keluarga sebanyak 1 (Satu) Lembar <br>
											3. Surat Keterangan Pindah dari Daerah Asal
										</p>
										<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian Permohonan ini
											disampaikan atas perrkenan Bapak diucapkan terima kasih.</p>
									</div>
								</div>
						</center>
						<div class="row pemohon">
							<div class="col-md-6">
							</div>
							<div class="col-md-6">
								<div class="badan_surat isi_surat">
									<center>
										Hormat Pemohon<br> <br> <br> <br>
									</center>
								</div>
								<div class="badan_surat isi_surat">
									<center>
										<u><b>(<?= $w->nama; ?>)</b></u>

									</center>
								</div>
							</div>
						</div>
						<hr>
						<div class="isi_surat paragraf">
							<h6><b>REKOMENDASI</b></h6>
							<p>
								Bahwa nama tersebut adalah benar Penduduk RT. <?= $warga['rt'] ?> Kelurahan Mendawai
								dengan
								Nomor Induk Penduduk <?= $w->nik; ?> dan keterangan-keterangan yang tertulis dalam
								Permohonan ini adalah benar berdasarkan Data Kependudukan. <br>
							</p>
							<p>
								Demikian Rekomendasi ini dibuat dengan mengingat sumpah Jabatan, apabila ternayata
								keterangan ini tidak benar, kami bersedia diberikan sanksi berdasarkan ketentuan dan
								perundang-undangan yang berlaku. <br>
							</p>
						</div>
					<?php } ?>
					<div class="row">
						<div class="col-md-6">
						</div>
						<div class="col-md-6">
							<div class="badan_surat isi_surat">
								<table class="table-responsive">
									<tbody>
										<tr>
											<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
											<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
											<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
											<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
											<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
											<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
											<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
											<td> <b>Nomor</b></td>
											<td></td>
											<td>:</td>
											<td> <b><?= $w->no_tupoksi; ?>/<?= $w->no_registrasi; ?>/<?= $w->no_kelurahan; ?>
													/ <?= $bulan; ?> / <?= $w->no_tahun; ?></b></td>
										</tr>
										<tr>
											<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
											<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
											<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
											<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
											<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
											<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
											<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
											<td>Tanggal</td>
											<td></td>
											<td>:</td>
											<td>
												<?php
												foreach ($detail_permohonan as $d) {
												?>
													<?= format_indo(date($d->tgl_persetujuan_admin)); ?>

												<?php } ?>
											</td>

										</tr>
										<br>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="row ttd_kades">
						<div class="col-md-6 ">
						</div>
						<div class="col-md-6">
							<div class="badan_surat isi_surat">

								<center>
									<?php
									foreach ($detail_suket as $w) {
										if ($w->status_tanda_tangan == "Kepala Desa") {
											echo "LURAH MENDAWAI";
										} elseif ($w->status_tanda_tangan == "Diwakilkan") {
											echo "An. LURAH MENDAWAI";
											foreach ($data_kades as $k) { ?>
												<div class="badan_surat isi_surat">
													<center>
														<b><?= $k->jabatan; ?></b>
													</center>
												</div> <?php
													}
												}
											} ?>
									<?php
									foreach ($data_kades as $k) {
										foreach ($detail_suket as $w) {
											if ($w->status_tanda_tangan == "Kepala Desa") { ?>

												<center><img class="img-fluid img_ttd" width="50%" alt="ttd_lurah" src="<?= base_url(); ?>/assets/uploads/kades/<?= $k->foto_ttd_kades; ?>"></center>

											<?php } elseif ($w->status_tanda_tangan == "Diwakilkan") { ?>

												<center><img class="img-fluid img_ttd" width="50%" alt="ttd_lurah" src="<?= base_url(); ?>/assets/uploads/pejabat_berwenang/<?= $k->ttd_pejabat; ?>"></center>

										<?php }
										}
										?>
								</center>
							</div>
						</div>
					</div>
					<div class="row kades">
						<div class="col-md-6">
						</div>
						<div class="col-md-6">
							<div class="badan_surat isi_surat ">
								<center>
									<u><b><?= $k->nama; ?></b></u> <br>
									NIP. <?= $k->nip; ?>
								</center>
							<?php } ?>
							</div>
						</div>
					</div>

					<div class="row isi_surat" style="margin-top:150px">
						<hr>
						Berdasarkan Ketentuan dan Perundang - Undangan yang berlaku, Permohonan ini ditolak/ dikabulkan karena <br>
						....................................................................................................................................................................... <br>
						...................................................................................................................................................
					</div>
					</div>
					<div class="col-md-2">
					</div>
				</div>
				<!-- /.container-fluid -->
			</div>
			<!-- End of Main Content -->
</body>

</html>