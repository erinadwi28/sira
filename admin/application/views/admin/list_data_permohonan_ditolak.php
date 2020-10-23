<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Data Permohonan Ditolak</h1>
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
							<th>Tanggal Permohonan</th>
							<th>Tanggal Ditolak</th>
							<th>Nama</th>
							<th>Nama Surat</th>
							<th>Status</th>
							<th>Keterangan</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$no = 1;
						foreach ($data_permohonan_ditolak as $permohonan) {
						?>
							<tr>
								<td><?= $no++ ?></td>
								<td><?= $permohonan->tgl_permohonan_surat ?></td>
								<td><?= $permohonan->tanggal_persetujuan_rt ?></td>
								<td><?= $permohonan->nama ?></td>
								<td><?= $permohonan->nama_surat ?></td>
                                <td><label class="badge badge-danger"><i class="far fa-times-circle"></i> <?= $permohonan->status ?></label></td>
								<td><?= character_limiter($permohonan->keterangan, 20); ?></td>
								<td>
									<div>
										<a href="<?= base_url() ?>admin/detail_data_permohonan/<?= $permohonan->id_permohonan_surat ?>/<?= $permohonan->id_nama_surat ?>" class="btn btn-primary btn-sm">
											<i class="far fa-eye nav-icon"></i>
											Detail
										</a>
									</div>
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