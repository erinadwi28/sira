<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Data Permohonan Selesai</h1>
	</div>
	<!-- DataTables Warga -->
	<div class="card shadow mb-4">
		<div class="card-body" style="padding: 20px;">

			<div class="flash-data" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>
			<?php if ($this->session->flashdata('success')) : ?>
			<?php endif; ?>

			<div class="table-responsive">
				<table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Surat</th>
							<th>NIK Pemohon</th>
							<th>Nama Pemohon</th>
							<th>Tanggal Permohonan</th>
							<th>Tanggal Selesai</th>
							<th>Status</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$no = 1;
						foreach ($data_permohonan_selesai as $permohonan) { ?>
							<tr>
								<td><?= $no++ ?></td>
								<td><?= $permohonan->nama_surat ?></td>
								<td><?= $permohonan->nik ?></td>
								<td><?= $permohonan->nama ?></td>
								<td><?= date("d-m-Y", strtotime($permohonan->tgl_permohonan_surat)); ?></td>
								<td><?= date("d-m-Y", strtotime($permohonan->tgl_persetujuan_admin)); ?></td>
								<td><label class="badge badge-success"><i class="far fa-check-circle"></i> <?= $permohonan->status ?></label></td>
								<td>
									<div>
										<a href="<?= base_url() ?>admin/lihat_surat/<?= $permohonan->id_permohonan_surat ?>/<?= $permohonan->id_nama_surat ?>" class="btn btn-info btn-sm">
											<i class="far fa-eye nav-icon"></i>
											Lihat Surat
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