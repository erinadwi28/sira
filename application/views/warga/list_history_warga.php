<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Riwayat Permohonan Surat</h1>
	</div>
	<!-- Filter Tanggal Permohonan Surat -->
	<div class="card shadow col-md-10 mb-4">
		<div class="card-body row" style="padding: 15px;">
			<div class="col-md-12">
				<h5>Filter Tanggal</h5>
				<form role="form" action="<?= base_url('warga/filter_riwayat_permohonan') ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">

					<div class="row">

						<div class="col-md-2 mt-2">
							<label class="label-control" for="tanggal_mulai"><b>Tanggal
									Mulai</b></label>
						</div>
						<div class="col-md-3 mb-2">
							<input type="date" class="form-control form-user-input" name="tanggal_mulai" id="tanggal_mulai">
						</div>
						<div class="col-md-2 mt-2">
							<label class="label-control" for="tanggal_akhir"><b>Tanggal
									Akhir</b></label>
						</div>
						<div class="col-md-3 mb-2">
							<input type="date" class="form-control form-user-input" name="tanggal_akhir" id="tanggal_akhir">
						</div>
						<div class="col-md-2 mt-1">
							<center>
								<button class="btn btn-sm btn-primary" type="submit">
									<i class="fa fa-search nav-icon"></i>
									Tampilkan
								</button>
							</center>
						</div>
					</div>
				</form>
			</div>
		</div>
		<hr>
		<div>
			<a href="<?= base_url() ?>warga/list_history_permohonan/<?= $warga['id_warga'] ?>">
				<button id="btn_kembali" class="btn btn-sm btn-warning float-right mb-2 mr-2 mt-0" type="">
					<i class="fas fa-sync-alt"></i> Reset
				</button>
			</a>
		</div>
	</div>
	<!-- DataTables Warga -->
	<div class="card shadow mb-4">
		<div class="card-body">
			<div class="flash-data" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>
			<?php if ($this->session->flashdata('success')) : ?>
			<?php endif; ?>
			<div class="table-responsive">
				<table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Surat</th>
							<th>Tgl Permohonan</th>
							<th>Status</th>
							<th>Keterangan</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$no = 1;
						foreach ($permohonan as $w) {
						?>
							<tr>
								<td><?= $no++ ?></td>
								<td><?= $w->nama_surat ?></td>
								<td><?= $w->tgl_permohonan_surat ?></td>
								<?php if ($w->status == 'Menunggu Persetujuan Ketua RT') {
								?><td><label class="badge badge-warning"><i class="far fa-clock"></i> <?= $w->status ?></label></td><?php
																																} elseif ($w->status == 'Menunggu Persetujuan Kelurahan') {
																																	?><td><label class="badge badge-info"><i class="far fa-clock"></i>
											<?= $w->status ?></label></td><?php
																																} elseif ($w->status == 'Ditolak') {
																			?><td><label class="badge badge-danger"><i class="far fa-times-circle"></i> <?= $w->status ?></label></td><?php
																																													} elseif ($w->status == 'Selesai') {
																																														?><td><label class="badge badge-success"><i class="far fa-check-circle"></i>
											<?= $w->status ?></label></td><?php
																																													} elseif ($w->status == 'Belum Tuntas') {
																			?><td>
										<label class="badge badge-dark"><i class="far fa-times-circle"></i>
											<?= $w->status ?></label></td>
								<?php
																																													} ?>
								<td><?= $w->keterangan ?></td>
								<td>
									<form role="form" action="<?= base_url() ?>warga/detail_data_permohonan/<?= $w->id_permohonan_surat ?>/<?= $w->id_nama_surat ?>" method="post" id="formUbah">
										<div>
											<div class="float-right">
												<a href="">
													<button id="btn_simpan" class="btn btn-sm btn-primary" type="submit">
														<i class="far fa-eye nav-icon"></i>
														Detail
													</button>
												</a>
											</div>
										</div>
										<input type="hidden" class="form-control form-user-input " name="notif" id="notif" value="Dibaca">
									</form>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->