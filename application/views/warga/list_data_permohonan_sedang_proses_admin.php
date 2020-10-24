<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Data Permohonan Dalam Proses</h1>
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
							<th>Nama Surat</th>
							<th>Status</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$no = 1;
						foreach ($data_sedang_proses as $permohonan) {
						?>
						<tr>
							<td><?= $no++ ?></td>
							<td><?= $permohonan->tgl_permohonan_surat ?></td>
							<td><?= $permohonan->nama_surat ?></td>
							<td><label class="badge badge-info"><i class="far fa-clock"></i>
									<?= $permohonan->status ?></label></td>
							<td>
								<div>
									<a href="<?= base_url() ?>warga/detail_data_permohonan/<?= $permohonan->id_permohonan_surat ?>/<?= $permohonan->id_nama_surat ?>"
										class="btn btn-primary btn-sm">
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
