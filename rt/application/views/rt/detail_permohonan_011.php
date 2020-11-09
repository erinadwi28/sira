<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<?php foreach($detail_permohonan_masuk as $detail){ ?>
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Detail Data Permohonan Surat</h1>
		<?php if($detail->status == "Menunggu Persetujuan Ketua RT") { ?>
		<a href="<?= base_url('rt/list_data_permohonan')?>">
			<button id="btn_kembali" class="btn btn-sm btn-warning" type="submit">
				<i class="fa fa-arrow-left">
				</i> Kembali
			</button>
		</a>
		<?php } elseif($detail->status == "Menunggu Persetujuan Kelurahan") {?>
		<a href="<?= base_url('rt/list_data_permohonan_disetujui')?>">
			<button id="btn_kembali" class="btn btn-sm btn-warning" type="submit">
				<i class="fa fa-arrow-left">
				</i> Kembali
			</button>
		</a>
		<?php } elseif($detail->status == "Ditolak") {?>
		<a href="<?= base_url('rt/list_data_permohonan_ditolak')?>">
			<button id="btn_kembali" class="btn btn-sm btn-warning" type="submit">
				<i class="fa fa-arrow-left">
				</i> Kembali
			</button>
		</a>
		<?php } elseif($detail->status == "Selesai") {?>
		<a href="<?= base_url('rt/list_data_permohonan_selesai')?>">
			<button id="btn_kembali" class="btn btn-sm btn-warning" type="submit">
				<i class="fa fa-arrow-left">
				</i> Kembali
			</button>
		</a> <?php } ?>
	</div>

	<div class="flash-data" data-flashdata="<?= $this->session->flashdata('success');?>"></div>
	<?php if ($this->session->flashdata('success')) : ?>
	<?php endif; ?>

	<!-- Content Row line 1-->
	<div class="row">
		<div class="col-md-8 mb-4">
			<!-- Detail Data -->
			<?php if($detail->status == "Menunggu Persetujuan Ketua RT") { ?>
			<div class="card shadow mb-2">
				<div class="card-body">
					<form role="form" action="<?= base_url('rt/aksi_setujui_permohonan_011') ?>" method="post" id="suket011">
						<em class="small text-danger">*Pastikan data benar dan Isikan Nomor Surat Ketua RT</em>
						<div class="row">
							<div class="col-md-12">
								<center> <b><label for="nomor_surat_rt">Masukkan Nomor Surat Ketua RT Untuk
											Menyetujui</label></b>
								</center>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">

							</div>
							<div class="col-md-6 mb-3">
							<div class="form-group-surat">
							<div class="form-line">
								<input type="text" class="form-control form-user-input" name="nomor_surat_rt"
									id="nomor_surat_rt">
								<i class="fas fa-check-circle"></i>
								<i class="fas fa-exclamation-circle"></i>
								<small> Error Message </small>
							</div>
							</div>
								<input type="hidden" class="form-control form-user-input" name="status" id="status"
									value="Menunggu Persetujuan Kelurahan">
								<input type="hidden" class="form-control form-user-input" name="id_permohonan_surat"
									id="id_permohonan_surat" value="<?= $detail->id_permohonan_surat; ?>">
							</div>
							<div class="col-md-3">

							</div>
						</div>
						<table class="table-hover table-responsive">
							<tbody>
								<tr>
									<td><b>NIK</b></td>
									<td> </td>
									<td> </td>
									<td> </td>
									<td><?= $detail->nik; ?></td>
								</tr>
								<tr>
									<td><b>Nama</b></td>
									<td> </td>
									<td> </td>
									<td> </td>
									<td><?= $detail->nama; ?></td>
								</tr>
								<tr>
									<td><b>Alamat</b></td>
									<td> </td>
									<td> </td>
									<td> </td>
									<td><?= $detail->alamat; ?></td>
								</tr>
								<tr>
									<td><b>RT</b></td>
									<td> </td>
									<td> </td>
									<td> </td>
									<td><?= $detail->rt; ?></td>
								</tr>
								<tr>
									<td><b>Kelurahan</b></td>
									<td> </td>
									<td> </td>
									<td> </td>
									<td><?= $detail->kelurahan; ?></td>
								</tr>
								<tr>
									<td><b>Kecamatan</b></td>
									<td> </td>
									<td> </td>
									<td> </td>
									<td><?= $detail->kecamatan; ?></td>
								</tr>
								<tr>
									<td><b>Jenis Kelamin</b></td>
									<td> </td>
									<td> </td>
									<td> </td>
									<td><?= $detail->jenis_kelamin; ?></td>
								</tr>
								<tr>
									<td><b>Agama</b></td>
									<td> </td>
									<td> </td>
									<td> </td>
									<td><?= $detail->agama; ?></td>
								</tr>
								<tr>
									<td><b>Pekerjaan</b></td>
									<td> </td>
									<td> </td>
									<td> </td>
									<td><?= $detail->pekerjaan; ?></td>
								</tr>
								<tr>
									<td><b>Tempat Lahir</b></td>
									<td> </td>
									<td> </td>
									<td> </td>
									<td><?= $detail->tempat_lahir; ?></td>
								</tr>
								<tr>
									<td><b>Tanggal Lahir</b></td>
									<td> </td>
									<td> </td>
									<td> </td>
									<td><?= format_indo(date($detail->tanggal_lahir)); ?></td>
								</tr>
								<tr>
									<td><b>Status Perkawinan</b></td>
									<td> </td>
									<td> </td>
									<td> </td>
									<td><?= $detail->status_perkawinan; ?></td>
								</tr>
								<tr>
									<td><b>Golongan Darah</b></td>
									<td> </td>
									<td> </td>
									<td> </td>
									<td><?= $detail->golongan_darah; ?></td>
								</tr>
								<tr>
									<td><b>No Kartu Keluarga</b></td>
									<td> </td>
									<td> </td>
									<td> </td>
									<td><?= $detail->no_kk; ?></td>
								</tr>
								<tr>
									<td><b>Tanggal Tinggal</b></td>
									<td> </td>
									<td> </td>
									<td> </td>
									<td><?= format_indo(date($detail->tanggal_tinggal)); ?></td>
								</tr>
								<tr>
									<td><b>No Surat Pindah</b></td>
									<td> </td>
									<td> </td>
									<td> </td>
									<td><?= $detail->no_surat_pindah; ?></td>
								</tr>
								<tr>
									<td><b>Tanggal Surat Pindah</b></td>
									<td> </td>
									<td> </td>
									<td> </td>
									<td><?= format_indo(date($detail->tanggal_surat_pindah)); ?></td>
								</tr>
								<tr>
									<td><b>Tanggal Permohonan</b></td>
									<td> </td>
									<td> </td>
									<td> </td>
									<td><?= format_indo(date($detail->tgl_permohonan_surat)); ?></td>
								</tr>
								<tr>
									<td><b>Surat Yang Dimohon</b></td>
									<td> </td>
									<td> </td>
									<td> </td>
									<td><?= $detail->nama_surat; ?></td>
								</tr>
							</tbody>
						</table>
						<br>
						<hr />
						<div class="float-right ml-2">
							<a href="">
								<button id="btn_simpan" class="btn btn-sm btn-success" type="submit">
									<i class="fa fa-check nav-icon">
									</i> Setujui
								</button>
							</a>
						</div>
					</form>
					<div class="float-right">
						<a href="<?= base_url() ?>rt/form_alasan_tolak/<?= $detail->id_permohonan_surat ?>">
							<button id="btn_tolak" class="btn btn-sm btn-danger" type="submit">
								<i class="fa fa-times nav-icon">
								</i> Tolak
							</button>
						</a>
					</div>
				</div>
			</div>
			<?php } else { ?>
			<div class="card shadow mb-2">
				<div class="card-body">
					<?php if($detail->no_tupoksi != null && $detail->no_registrasi != null && $detail->no_kelurahan  != null && $detail->no_bulan != null && $detail->no_tahun != null ) { ?>
					<form action="">
						<div class="row">
							<div class="col-md-12">
								<center> <b><label for="nomor_surat_admin">Nomor Surat Kelurahan</label></b>
								</center>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
							</div>
							<div class="col-md-6">
								<input type="text" class="form-control form-user-input" name="nomor_surat_admin"
									id="nomor_surat_admin"
									value="<?= $detail->no_tupoksi; ?>/<?= $detail->no_registrasi; ?>/<?= $detail->no_kelurahan; ?>/<?= $detail->no_bulan; ?>/<?= $detail->no_tahun; ?>"
									style="text-align: center;" disabled>
							</div>
							<div class="col-md-3">
							</div>
						</div>
					</form>
					<?php } ?>
					<form action="">
						<div class="row">
							<div class="col-md-12">
								<center> <b><label for="nomor_surat_rt">Nomor Surat Ketua RT</label></b>
								</center>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">

							</div>
							<div class="col-md-6 mb-3">
								<input type="text" class="form-control form-user-input" name="nomor_surat_rt"
									id="nomor_surat_rt" value="<?= $detail->nomor_surat_rt; ?>" disabled style="text-align: center;">
							</div>
							<div class="col-md-3">

							</div>
						</div>
					</form>
					<table class="table-hover table-responsive">
						<tbody>
							<tr>
								<td><b>NIK</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $detail->nik; ?></td>
							</tr>
							<tr>
								<td><b>Nama</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $detail->nama; ?></td>
							</tr>
							<tr>
								<td><b>Alamat</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $detail->alamat; ?></td>
							</tr>
							<tr>
								<td><b>RT</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $detail->rt; ?></td>
							</tr>
							<tr>
								<td><b>Kelurahan</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $detail->kelurahan; ?></td>
							</tr>
							<tr>
								<td><b>Kecamatan</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $detail->kecamatan; ?></td>
							</tr>
							<tr>
								<td><b>Jenis Kelamin</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $detail->jenis_kelamin; ?></td>
							</tr>
							<tr>
								<td><b>Agama</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $detail->agama; ?></td>
							</tr>
							<tr>
								<td><b>Pekerjaan</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $detail->pekerjaan; ?></td>
							</tr>
							<tr>
								<td><b>Tempat Lahir</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $detail->tempat_lahir; ?></td>
							</tr>
							<tr>
								<td><b>Tanggal Lahir</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= format_indo(date($detail->tanggal_lahir)); ?></td>
							</tr>
							<tr>
								<td><b>Status Perkawinan</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $detail->status_perkawinan; ?></td>
							</tr>
							<tr>
								<td><b>Golongan Darah</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $detail->golongan_darah; ?></td>
							</tr>
							<tr>
								<td><b>No Kartu Keluarga</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $detail->no_kk; ?></td>
							</tr>
							<tr>
								<td><b>Tanggal Tinggal</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= format_indo(date($detail->tanggal_tinggal)); ?></td>
							</tr>
							<tr>
								<td><b>No Surat Pindah</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $detail->no_surat_pindah; ?></td>
							</tr>
							<tr>
								<td><b>Tanggal Surat Pindah</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= format_indo(date($detail->tanggal_surat_pindah)); ?></td>
							</tr>
							<tr>
								<td><b>Tanggal Permohonan</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= format_indo(date($detail->tgl_permohonan_surat)); ?></td>
							</tr>
							<?php if ($detail->status ==  'Selesai') { ?>
							<tr>
								<td><b>Tanggal Surat</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= format_indo(date($detail->tgl_persetujuan_admin)); ?></td>
							</tr>
							<?php } ?>
							<tr>
								<td><b>Tanggal Disetujui Ketua RT</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= format_indo(date($detail->tanggal_persetujuan_rt)); ?></td>
							</tr>
							<tr>
								<td><b>Surat Yang Dimohon</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $detail->nama_surat; ?></td>
							</tr>
							<?php if($detail->keterangan != null) { ?>
							<tr>
								<td><b>Keterangan</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $detail->keterangan; ?></td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
			<?php } ?>
		</div>
		<div class="col-md-4 mb-4">
			<!-- Pas Foto -->
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<center>
						<h6 class="m-0 font-weight-bold text-primary">Lampiran Pas Foto 2 X 3</h6>
					</center>
				</div>
				<div class="card-body" style="padding: 10px;">
					<center>
						<div class="mb-2">
						<a href="<?= base_url(); ?>../assets/uploads/warga/suket_011/<?= $detail->pas_foto; ?>" data-title="Foto KTP" data-toggle="lightbox">
							<img src="<?= base_url(); ?>../assets/uploads/warga/suket_011/<?= $detail->pas_foto; ?>" alt="foto ktp" class="img-fluid">
						</a>
						</div>
					</center>

				</div>
			</div>

			<!-- Foto KK -->
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<center>
						<h6 class="m-0 font-weight-bold text-primary">Lampiran Foto KK</h6>
					</center>
				</div>
				<div class="card-body" style="padding: 20px;">
					<div class="mb-2">
					<a href="<?= base_url(); ?>../assets/uploads/warga/suket_011/<?= $detail->foto_kk; ?>" data-title="Foto KK" data-toggle="lightbox">
						<img src="<?= base_url(); ?>../assets/uploads/warga/suket_011/<?= $detail->foto_kk; ?>" alt="foto kk" class="img-fluid">
					</a>	
					</div>
				</div>
			</div>

			<!-- Foto Surat Pindah -->
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<center>
						<h6 class="m-0 font-weight-bold text-primary">Lampiran Foto Surat Pindah</h6>
					</center>
				</div>
				<div class="card-body" style="padding: 20px;">
					<div class="mb-2">
					<a href="<?= base_url(); ?>../assets/uploads/warga/suket_011/<?= $detail->foto_surat_pindah; ?>" data-title="Foto Surat Pindah" data-toggle="lightbox">
						<img src="<?= base_url(); ?>../assets/uploads/warga/suket_011/<?= $detail->foto_surat_pindah; ?>" alt="foto kk" class="img-fluid">
					</a>
						
					</div>
				</div>
			</div>
		</div>
		<?php } ?>
	</div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
