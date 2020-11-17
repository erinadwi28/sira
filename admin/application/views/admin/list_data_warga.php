<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Data Warga</h1>
		<a href="<?= base_url('admin/form_tambah_warga') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa fa-user-plus fa-sm text-white-50"></i> Tambah
			Data</a>
	</div>
	<!-- DataTables Warga -->
	<div class="card shadow mb-4">
		<div class="card-body" >

			<div class="flash-data" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>
			<?php if ($this->session->flashdata('success')) : ?>
			<?php endif; ?>

			<div class="">
				<table class="table table-bordered table-hover table-responsive" id="dataTable" width="100%" cellspacing="0">
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
										<a href="<?= base_url() ?>admin/detail_data_warga/<?= $w->id_warga ?>" class="btn btn-primary btn-sm mb-1">
											<i class="far fa-eye nav-icon"></i>
											Detail
										</a>

										<a href="<?= base_url() ?>admin/aksi_hapus_warga/<?= $w->id_warga ?>" class="btn btn-danger btn-sm hapus">
											<i class="far fa-trash-alt nav-icon"></i>
											Hapus
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