<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Detail Data Pejabat Berwenang</h1>
		<a href="<?= base_url('admin/list_data_pejabat_berwenang') ?>">
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

			<!-- Foto TTD -->
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<center>
						<h6 class="m-0 font-weight-bold text-primary">Foto Tanda Tangan</h6>
					</center>
				</div>

				<div class="card-body" style="padding: 15px;">
					<center>
						<?php
						foreach ($foto_ttd as $detail) {
						?>
							<a href="<?= base_url(); ?>../assets/uploads/pejabat_berwenang/<?= $detail->ttd_pejabat; ?>" data-gallery="mygallery" data-title="Foto TTD" data-toggle="lightbox">
								<img src="<?= base_url(); ?>../assets/uploads/pejabat_berwenang/<?= $detail->ttd_pejabat; ?>" alt="foto ttd" class="img-fluid" width="200px">
							</a>
						<?php } ?>
					</center>
				</div>

				<!-- Upload Foto TTD -->
				<div class="card-footer py-3">
					<form action="<?= base_url('admin/upload_foto_ttd_pejabat_berwenang') ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8" id="form_upload_detail_ttd_kades">
						<?php
						foreach ($detail_pejabat as $detail) {
						?>
							<div class="form-group ml-2 mr-2">
								<div class="input-group">
									<div class="form-group-upload">
										<div class="custom-file">
											<label class="custom-file-label" for="file-upload-ttd">pilih foto ttd...</label>
											<input type="file" class="custom-file-input" id="file-upload-ttd" name="berkas">
											<input type="hidden" class="form-control form-user-input" name="id_pejabat_berwenang" id="id_pejabat_berwenang" value="<?= $detail->id_pejabat_berwenang  ?>">
											<i class=" fas fa-exclamation-circle"></i>
											<h6>Error massage</h6>
										</div>
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
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-8 mb-4">
			<!-- Detail Data -->
			<div class="card shadow mb-4">
				<div class="card-body">
					<?php
					foreach ($detail_pejabat as $detail) { ?>
						<table class="table-hover table-responsive">
							<tbody>
								<tr>
									<td><b>NIP</b></td>
									<td> </td>
									<td> </td>
									<td>:</td>
									<td><?= $detail->nip; ?></td>
								</tr>
								<tr>
									<td><b>Nama Lengkap</b></td>
									<td> </td>
									<td> </td>
									<td>:</td>
									<td><?= $detail->nama; ?></td>
								</tr>
								<tr>
									<td><b>Jabatan</b></td>
									<td> </td>
									<td> </td>
									<td>:</td>
									<td><?= $detail->jabatan; ?></td>
								</tr>
								<tr>
									<td><b>Pangkat Gol</b></td>
									<td> </td>
									<td> </td>
									<td>:</td>
									<td><?= $detail->pangkat_gol; ?></td>
								</tr>
								<tr>
									<td><b>Status Jabatan</b></td>
									<td> </td>
									<td> </td>
									<td>:</td>
									<td><?= $detail->status_jabatan; ?></td>
								</tr>
							<?php } ?>
							</tbody>
						</table>
				</div>
				<div class="card-footer">
					<div class="float-right">
						<a href="<?= base_url() ?>admin/form_ubah_pejabat_berwenang/<?= $detail->id_pejabat_berwenang  ?>">
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