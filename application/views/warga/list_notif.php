<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Notifikasi</h1>
	</div>
	<!-- Filter Tanggal Permohonan Surat -->
	
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
							<th>Aksi</th>
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
                            <td><?= date("d-m-Y", strtotime($w->tgl_permohonan_surat)); ?></td>

							<?php if ($w->status == 'Menunggu Persetujuan Ketua RT') { ?>
								<td><label class="badge badge-warning"><i class="far fa-clock"></i> <?= $w->status ?></label></td>
							<?php } elseif ($w->status == 'Menunggu Persetujuan Kelurahan') { ?>
								<td><label class="badge badge-info"><i class="far fa-clock"></i> <?= $w->status ?></label></td>
							<?php } elseif ($w->status == 'Ditolak Ketua RT') { ?>
								<td><label class="badge badge-danger"><i class="far fa-times-circle"></i> <?= $w->status ?></label></td>
							<?php } elseif ($w->status == 'Selesai') { ?>
								<td><label class="badge badge-success"><i class="far fa-check-circle"></i> <?= $w->status ?></label></td>
							<?php } elseif ($w->status == 'Belum Tuntas') { ?>
								<td> <label class="badge badge-dark"><i class="far fa-times-circle"></i> <?= $w->status ?></label></td>
							<?php } elseif ($w->status == 'Ditolak Kelurahan') { ?>
								<td><label class="badge badge-danger"><i class="far fa-times-circle"></i> <?= $w->status ?></label></td>
							<?php } ?>

							<td><?= character_limiter($w->keterangan, 20); ?></td>
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