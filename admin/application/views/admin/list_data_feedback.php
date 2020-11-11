<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Data Feedback Dari Pengguna</h1>
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
							<th>Tanggal Posting</th>
							<th>Nama</th>
							<th>No HP</th>
							<th>Isi</th>
							<th>Actions</th>
						</tr>
					</thead>

					<tbody>
						<?php
						$no = 1;
						foreach ($data_feedback as $fb) {
						?>
							<tr>
								<td><?php echo $no++ ?></td>
								<td><?php echo $fb->tanggal_kirim ?></td>
								<td><?php echo $fb->nama ?></td>
								<td><?php echo $fb->no_hp ?></td>
								<td><?= character_limiter($fb->isi, 20); ?></td>
								<td>
									<div>
										<a href="<?= base_url() ?>admin/detail_data_feedback/<?= $fb->id_pesan ?>" class="btn btn-primary btn-sm">
											<i class="far fa-eye nav-icon"></i>
											Detail
										</a>
									</div>
								</td>
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