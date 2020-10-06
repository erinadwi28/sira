<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Profil Saya</h1>
		<a href="<?= base_url('admin') ?>">
			<button id="btn_kembali" class="btn btn-sm btn-warning" type="submit">
				<i class="fa fa-arrow-left">
				</i> Kembali
			</button>
		</a>
	</div>

	<div class="row">
		<div class="col-md-12">
			<div class="flash-data" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>
			<?php if ($this->session->flashdata('success')) : ?>
			<?php endif; ?>
		</div>
	</div>

	<!-- Content Row line 1-->
	<div class="row">
		<div class="col-md-4 mb-4">

			<!-- Foto Profil -->
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<center>
						<h6 class="m-0 font-weight-bold text-primary">Foto Profil</h6>
					</center>
				</div>

				<div class="card-body" style="padding: 20px;">
					<?php
					foreach ($foto_profil as $saya) { ?>
						<a href="<?= base_url(); ?>../assets/uploads/admin/<?= $saya->foto_profil_admin; ?>" data-lightbox="mygallery" data-title="Foto Profil">
							<img src="<?= base_url(); ?>../assets/uploads/admin/<?= $saya->foto_profil_admin; ?>" alt="foto profil" class="img-fluid">
						</a>
					<?php } ?>
				</div>

				<div class="card-footer py-3">
					<?= form_open_multipart('admin/upload_foto_profil_profil_saya') ?>
					<?php
					foreach ($detail_profil_saya as $saya) { ?>
						<div class="form-group ml-2 mr-2">
							<div class="input-group">
								<div class="custom-file">
									<label class="custom-file-label" for="file-upload-profil">pilih foto
										profil...</label>
									<input type="file" class="custom-file-input" id="file-upload-profil" name="berkas[]">
									<input type="hidden" class="form-control form-user-input" name="id_admin" id="id_admin" value="<?= $saya->id_admin; ?>">
								</div>
							</div>
						</div>
					<?php } ?>
					<center>
						<button class="btn btn-sm btn-primary" type="submit">
							<i class="fa fa-upload">
							</i> Upload
						</button>
					</center>
					<?= form_close() ?>
				</div>
			</div>

			<!-- Foto KTP -->
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<center>
						<h6 class="m-0 font-weight-bold text-primary">Foto KTP</h6>
					</center>
				</div>

				<div class="card-body" style="padding: 20px;">
					<?php foreach ($foto_ktp as $saya) { ?>
						<a href="<?= base_url(); ?>../assets/uploads/admin/<?= $saya->foto_ktp_admin; ?>" data-lightbox="mygallery" data-title="Foto KK">
							<img src="<?= base_url(); ?>../assets/uploads/admin/<?= $saya->foto_ktp_admin; ?>" alt="foto profil" class="img-fluid">
						</a>
					<?php } ?>
				</div>

				<div class="card-footer py-3">
					<?= form_open_multipart('admin/upload_foto_ktp_profil_saya') ?>
					<?php
					foreach ($detail_profil_saya as $saya) { ?>
						<div class="form-group ml-2 mr-2">
							<div class="input-group">
								<div class="custom-file">
									<label class="custom-file-label" for="file-upload-ktp">pilih foto ktp...</label>
									<input type="file" class="custom-file-input" id="file-upload-ktp" name="berkas[]">
									<!-- <input type="hidden" value="Foto KTP" name="keterangan[]"> -->
									<input type="hidden" class="form-control form-user-input" name="id_admin" id="id_admin" value="<?= $saya->id_admin; ?>">
								</div>
							</div>
						</div>
					<?php } ?>
					<center>
						<button class="btn btn-sm btn-primary" type="submit">
							<i class="fa fa-upload">
							</i> Upload
						</button>
					</center>
					<?= form_close() ?>
				</div>
			</div>

			<!-- Foto KK -->
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<center>
						<h6 class="m-0 font-weight-bold text-primary">Foto KK</h6>
					</center>
				</div>

				<div class="card-body" style="padding: 20px;">
					<?php
					foreach ($foto_kk as $saya) {
					?>
						<a href="<?= base_url(); ?>../assets/uploads/admin/<?= $saya->foto_kk_admin; ?>" data-lightbox="mygallery" data-title="Foto KK">
							<img src="<?= base_url(); ?>../assets/uploads/admin/<?= $saya->foto_kk_admin; ?>" alt="foto kk" class="img-fluid">
						</a>
					<?php } ?>
				</div>

				<div class="card-footer py-3">
					<?= form_open_multipart('admin/upload_foto_kk_profil_saya') ?>
					<?php
					foreach ($detail_profil_saya as $saya) { ?>
						<div class="form-group ml-2 mr-2">
							<div class="input-group">
								<div class="custom-file">
									<label class="custom-file-label" for="file-upload-kk">pilih foto kk...</label>
									<input type="file" class="custom-file-input" id="file-upload-kk" name="berkas[]">
									<!-- <input type="hidden" value="Foto KTP" name="keterangan[]"> -->
									<input type="hidden" class="form-control form-user-input" name="id_admin" id="id_admin" value="<?= $saya->id_admin; ?>">
								</div>
							</div>
						</div>
					<?php } ?>
					<center>
						<button class="btn btn-sm btn-primary" type="submit">
							<i class="fa fa-upload">
							</i> Upload
						</button>
					</center>
					<?= form_close() ?>
				</div>
			</div>

		</div>
		<div class="col-md-8 mb-4">
			<!-- Detail Data -->
			<div class="card shadow mb-4">
				<div class="card-body">
					<?php
					foreach ($detail_profil_saya as $detail) { ?>
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
									<td><b>NIP</b></td>
									<td> </td>
									<td> </td>
									<td> </td>
									<td><?= $detail->nip; ?></td>
								</tr>
								<tr>
									<td><b>Nama Lengkap</b></td>
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
									<td><b>Jenis Kelamin</b></td>
									<td> </td>
									<td> </td>
									<td> </td>
									<td><?= $detail->jenis_kelamin; ?></td>
								</tr>
								<tr>
									<td><b>Golongan Darah</b></td>
									<td> </td>
									<td> </td>
									<td> </td>
									<td><?= $detail->golongan_darah; ?></td>
								</tr>
								<tr>
									<td><b>Agama</b></td>
									<td> </td>
									<td> </td>
									<td> </td>
									<td><?= $detail->agama; ?></td>
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
									<td><b>Status Perkawinan</b></td>
									<td> </td>
									<td> </td>
									<td> </td>
									<td><?= $detail->status_perkawinan; ?></td>
								</tr>
								<tr>
									<td><b>Pekerjaan</b></td>
									<td> </td>
									<td> </td>
									<td> </td>
									<td><?= $detail->pekerjaan; ?></td>
								</tr>
								<tr>
									<td><b>Kewarganegaraan</b></td>
									<td> </td>
									<td> </td>
									<td> </td>
									<td><?= $detail->kewarganegaraan; ?></td>
								</tr>
								<tr>
									<td><b>Nomor Kartu Keluarga</b></td>
									<td> </td>
									<td> </td>
									<td> </td>
									<td><?= $detail->no_kk; ?></td>
								</tr>
								<tr>
									<td><b>Pendidikan Terakhir</b></td>
									<td> </td>
									<td> </td>
									<td> </td>
									<td><?= $detail->pendidikan_terakhir; ?></td>
								</tr>
								<tr>
									<td><b>Status Hubungan Dalam Keluarga</b></td>
									<td> </td>
									<td> </td>
									<td> </td>
									<td><?= $detail->status_hub_kel; ?></td>
								</tr>
								<tr>
									<td><b>Nomor HandPhone</b></td>
									<td> </td>
									<td> </td>
									<td> </td>
									<td><?= $detail->no_hp; ?></td>
								</tr>
								<tr>
									<td><b>Jabatan</b></td>
									<td> </td>
									<td> </td>
									<td> </td>
									<td><?= $detail->jabatan; ?></td>
								</tr>
								<tr>
									<td><b>Status Kepegawaian</b></td>
									<td> </td>
									<td> </td>
									<td> </td>
									<td><?= $detail->status_kepegawaian; ?></td>
								</tr>
							<?php } ?>
							</tbody>
						</table>
				</div>
				<div class="card-footer">
					<div class="float-right">
						<a href="<?= base_url() ?>admin/form_ubah_profil_saya/<?= $detail->id_admin ?>">
							<button id="btn_ubah" class="btn btn-sm btn-primary" type="submit">
								<i class="fa fa-edit nav-icon">
								</i> Ubah
							</button>
						</a>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
