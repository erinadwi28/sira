<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<?php foreach($detail_permohonan_masuk as $detail){ ?>
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Detail Data Permohonan Surat</h1>
		<?php if($detail->status == "Menunggu Persetujuan Kelurahan") { ?>
		<a href="<?= base_url('admin/list_data_permohonan')?>">
			<button id="btn_kembali" class="btn btn-sm btn-warning" type="submit">
				<i class="fa fa-arrow-left">
				</i> Kembali
			</button>
		</a>
		
		<?php } elseif($detail->status == "Ditolak") {?>
		<a href="<?= base_url('admin/list_data_permohonan_ditolak')?>">
			<button id="btn_kembali" class="btn btn-sm btn-warning" type="submit">
				<i class="fa fa-arrow-left">
				</i> Kembali
			</button>
		</a>
		<?php } elseif($detail->status == "Selesai") {?>
		<a href="<?= base_url('admin/list_data_permohonan_selesai')?>">
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
		<div class="col-md-9 mb-4">
			<!-- Detail Data -->
			<?php if($detail->status == "Menunggu Persetujuan Kelurahan") { ?>
			<div class="card shadow mb-2">
				<div class="card-body">
					<form role="form" action="<?= base_url('admin/aksi_setujui_permohonan_005') ?>" method="post" id="suket5">
						<em class="small text-danger">*Pastikan data benar dan Isikan Nomor Surat</em>
                        <div class="row">
							<div class="col-md-12">
								<center> <b><label for="nomor_surat_admin">Masukkan Nomor Surat Kelurahan Untuk
											Menyetujui</label></b> <br>
											<em class="small text-danger">Format Nomor Surat : 300 / No.Registrasi / KM / AS / Bulan / Tahun</em>
								</center>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-1">
							</div>
							<div class="col-md-0 ml-4">
							<div class="form-group">
								<input type="text" class="form-control form-user-input" name="no_tupoksi"
									id="no_tupoksi" value="300" disabled> 
								<small>Error Message</small>
							</div>
							</div>
							<h3>/</h3>
							<div class="col-md-0">
							<div class="form-group">
										<input type="text" class="form-control form-user-input" name="no_registrasi"
										id="no_registrasi"> 
										<small>Error Message</small>
								</div>
							</div>
							<h3>/</h3>
							<div class="col-md-01">
								<input type="text" class="form-control form-user-input" name="no_kelurahan"
									id="no_kelurahan" value="KM" disabled> 
							</div>
							<h3>/</h3>
							<div class="col-md-01">
							<div class="form-group">
								<input type="text" class="form-control form-user-input" name="no_kecamatan"
									id="no_kecamatan" value="AS" disabled> 
								<small>Error Message</small>
							</div>
							</div>
							<h3>/</h3>
							<div class="col-md-01">
							<div class="form-group">
								<input type="text" class="form-control form-user-input" name="no_bulan"
									id="no_bulan" value="<?php echo date("m"); ?>"> 
								<small>Error Message</small>
							</div> 
							</div>
							<h3>/</h3>
							<div class="col-md-03">
							<div class="form-group">
								<input type="text" class="form-control form-user-input" name="no_tahun"
									id="no_tahun" value="<?php echo date("Y"); ?>">
								<small>Error Message</small> 
							</div>
							</div>
						</div>

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
						<div class="row">
							<div class="col-md-3">

							</div>
							<div class="col-md-6 mb-3">
								
								<input type="hidden" class="form-control form-user-input" name="status" id="status"
									value="Selesai">
								<input type="hidden" class="form-control form-user-input" name="id_permohonan_surat"
									id="id_permohonan_surat" value="<?= $detail->id_permohonan_surat; ?>">
							</div>
							<div class="col-md-3">

							</div>
						</div>
						<table class="table-hover table-responsive">
							<tbody>
								<tr>
									<td><b>Nama</b></td>
									<td> </td>
									<td> </td>
									<td> </td>
									<td><?= $detail->nama; ?></td>
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
									<td><?= $detail->tanggal_lahir; ?></td>
								</tr>
								<tr>
									<td><b>Alamat</b></td>
									<td> </td>
									<td> </td>
									<td> </td>
									<td><?= $detail->alamat; ?></td>
								</tr>
								<tr>
									<td><b>Nama Kegiatan</b></td>
									<td> </td>
									<td> </td>
									<td> </td>
									<td><?= $detail->nama_kegiatan; ?></td>
								</tr>
								<tr>
									<td><b>Hari Kegiatan</b></td>
									<td> </td>
									<td> </td>
									<td> </td>
									<td><?= $detail->hari_kegiatan; ?></td>
								</tr>
								<tr>
									<td><b>Tanggal Kegiatan</b></td>
									<td> </td>
									<td> </td>
									<td> </td>
									<td><?= $detail->tanggal_lahir; ?></td>
								</tr>
								<tr>
									<td><b>Waktu Kegiatan</b></td>
									<td> </td>
									<td> </td>
									<td> </td>
									<td><?= $detail->jam; ?></td>
								</tr>
								<tr>
									<td><b>Tempat Kegiatan</b></td>
									<td> </td>
									<td> </td>
									<td> </td>
									<td><?= $detail->tempat; ?></td>
								</tr>
								<tr>
									<td><b>Tanggal Permohonan</b></td>
									<td> </td>
									<td> </td>
									<td> </td>
									<td><?= $detail->tgl_permohonan_surat; ?></td>
								</tr>
								<tr>
									<td><b>Tanggal Disetujui Ketua RT</b></td>
									<td> </td>
									<td> </td>
									<td> </td>
									<td><?= $detail->tanggal_persetujuan_rt; ?></td>
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
						<a href="<?= base_url() ?>admin/form_alasan_tolak/<?= $detail->id_permohonan_surat ?>">
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
									id="nomor_surat_admin" value="<?= $detail->no_tupoksi; ?>/<?= $detail->no_registrasi; ?>/<?= $detail->no_kelurahan; ?>/<?= $detail->no_kecamatan; ?>/<?= $detail->no_bulan; ?>/<?= $detail->no_tahun; ?>" 
									style="text-align: center;" disabled>
							</div>
							<div class="col-md-3">
							</div>
						</div>

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
								<td><b>Nama</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $detail->nama; ?></td>
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
								<td><?= $detail->tanggal_lahir; ?></td>
							</tr>
							<tr>
								<td><b>Alamat</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $detail->alamat; ?></td>
							</tr>
							<tr>
								<td><b>Nama Kegiatan</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $detail->nama_kegiatan; ?></td>
							</tr>
							<tr>
								<td><b>Hari Kegiatan</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $detail->hari_kegiatan; ?></td>
							</tr>
							<tr>
								<td><b>Tanggal Kegiatan</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $detail->tanggal_lahir; ?></td>
							</tr>
							<tr>
								<td><b>Waktu Kegiatan</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $detail->jam; ?></td>
							</tr>
							<tr>
								<td><b>Tempat Kegiatan</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $detail->tempat; ?></td>
							</tr>
							<tr>
								<td><b>Tanggal Permohonan</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $detail->tgl_permohonan_surat; ?></td>
							</tr>
							
							<!-- tanggal RT -->
							<?php if($detail->status == "Ditolak") { ?>
								<tr>
									<td><b>Tanggal Ditolak Ketua RT</b></td>
									<td> </td>
									<td> </td>
									<td> </td>
									<td><?= $detail->tanggal_persetujuan_rt; ?></td>
								</tr>
							<?php } else { ?>
								<tr>
									<td><b>Tanggal Disetujui Ketua RT</b></td>
									<td> </td>
									<td> </td>
									<td> </td>
									<td><?= $detail->tanggal_persetujuan_rt; ?></td>
								</tr>							
							<?php } ?>
							
							<!-- tanggal admin -->
							<?php if($detail->status == "Ditolak") { ?>
								<tr>
									<td><b>Tanggal Surat Ditolak Kelurahan</b></td>
									<td> </td>
									<td> </td>
									<td> </td>
									<td><?= $detail->tgl_persetujuan_admin; ?></td>
								</tr>							
							<?php } else { ?>
								<tr>
									<td><b>Tanggal Surat Dikeluarkan</b></td>
									<td> </td>
									<td> </td>
									<td> </td>
									<td><?= $detail->tgl_persetujuan_admin; ?></td>
								</tr>							
							<?php } ?>

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
		<div class="col-md-3 mb-4">
			<!-- Foto Lampiran -->
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<center>
						<h6 class="m-0 font-weight-bold text-primary">Lampiran Foto KTP</h6>
					</center>
				</div>
				<div class="card-body" style="padding: 20px;">
					<div class="mb-2">
						<img src="<?= base_url(); ?>../assets/uploads/warga/suket_005/<?= $detail->foto_ktp; ?>" alt="foto ktp" class="img-fluid">
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
