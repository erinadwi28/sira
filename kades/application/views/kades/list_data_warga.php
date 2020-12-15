<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Data Warga</h1>
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
							<th>NIK</th>
							<th>Nama</th>
							<th>Alamat</th>
							<th>RT</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$no = 1;
						foreach ($data_warga as $w) {
						?>
							<tr>
								<td><?= $no++ ?></td>
								<td><?= $w->nik ?></td>
								<td><?= $w->nama ?></td>
								<td><?= $w->alamat ?></td>
								<td><?= $w->rt ?></td>
								<td>
									<div>
										<a href="<?= base_url() ?>kades/detail_data_warga/<?= $w->id_warga ?>" class="btn btn-primary btn-sm">
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