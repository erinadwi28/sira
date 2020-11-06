<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Detail Data Surat Masuk</h1>
		<a href="<?= base_url('admin/list_surat_masuk') ?>">
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
			<!-- Lampiran -->
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<center>
						<h6 class="m-0 font-weight-bold text-primary">Lampiran</h6>
					</center>
				</div>

				<div class="card-body" style="padding: 20px;">
					<?php 
					foreach($lampiran as $sm){ ?>
					<center>
						<?php if($sm->lampiran != null) { ?>
							<p><?= $sm->lampiran; ?></p>
							<a id="btn_ubah" class="btn btn-sm btn-success"
							href="<?= base_url() ?>admin/download_lampiran_surat_masuk/<?= $sm->id_sm; ?>">
							<i class="fa fa-download nav-icon">
							</i> Download untuk melihat
						</a>
						<?php }  elseif($sm->lampiran == null) { ?>
							<p>Belum ada lampiran <br> Silahkan unggah terlebih dahulu</p>
						<?php }?>
					</center>
					<?php } ?>
				</div>

				<div class="card-footer py-3">
					<?= form_open_multipart('admin/upload_lampiran_surat_masuk') ?>
					<?php 
					foreach($detail_surat_masuk as $sm){ ?>
					<div class="form-group ml-2 mr-2">
						<div class="input-group">
							<div class="custom-file">
								<label class="custom-file-label" for="file-upload-profil">pilih lampiran...</label>
								<input type="file" class="custom-file-input" id="file-upload-profil" name="berkas[]">
								<!-- <input type="hidden" value="Foto Profil" name="keterangan[]"> -->
								<input type="hidden" class="form-control form-user-input" name="id_sm" id="id_sm"
									value="<?= $sm->id_sm; ?>">
							</div>
						</div>
					</div>
					<?php } ?>
					<center>
						<button class="btn btn-sm btn-primary" type="submit">
							<i class="fa fa-upload">
							</i> Unggah lampiran
						</button>
					</center>
					<?= form_close() ?>
				</div>
			</div>
		</div>

		<div class="col-md-8 mb-4">
			<!-- Detail Data -->
			<div class="card shadow mb-4">
				<?php
				foreach ($detail_surat_masuk as $detail) { ?>
				<div class="card-body">
					<table class="table-hover table-responsive">
						<tbody>
							<tr>
								<td><b>Nomor Surat</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $detail->nomor_surat; ?></td>
							</tr>
							<tr>
								<td><b>Tanggal</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= format_indo(date($detail->tanggal)); ?></td>
							</tr>
							<tr>
								<td><b>Pengirim</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $detail->pengirim; ?></td>
							</tr>
							<tr>
								<td><b>Perihal</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $detail->perihal; ?></td>
							</tr>
							<tr>
								<td><b>Isi</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $detail->isi; ?></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="card-footer">
					<div class="float-right">
						<a href="<?= base_url() ?>admin/form_ubah_surat_masuk/<?= $detail->id_sm ?>">
							<button id="btn_ubah" class="btn btn-sm btn-primary" type="submit">
								<i class="fa fa-edit nav-icon">
								</i> Ubah
							</button>
						</a>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
