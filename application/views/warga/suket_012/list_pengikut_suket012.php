<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">List Anggota KK</h1>
		<a href="<?= base_url() ?>warga/form_tambah_pengikut_suket012/<?= $id_permohonan['id_permohonan_surat']; ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa fa-user-plus fa-sm text-white-50"></i> Tambah
			Data</a>

	</div>
	<!--Begin Content Profile-->
	<div class="row clearfix">
		<div class="col-xs-12 col-sm-2"></div>
		<div class="col-xs-12 col-sm-12">
			<div class="card shadow mb-5">
				<!-- /.card-header -->
				<div class="card-body">
					<div class="flash-data" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>
					<?php if ($this->session->flashdata('success')) : ?>
					<?php endif; ?>
					<div class="table-responsive">
						<table class="table table-bordered table-hover" id="" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama Lengkap</th>
									<th>Jenis Kelamin</th>
									<th>Tempat Lahir</th>
									<th>Tanggal Lahir</th>
									<th>Umur</th>
									<th>Status Perkawinan</th>
									<th>Pendidikan Terakhir</th>
									<th>Nama Ortu</th>
									<th>Hubungan KK</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no = 1;
								foreach ($pengikut as $w) {
								?>
									<tr>
										<td><?= $no++ ?></td>
										<td><?= $w->nama ?></td>
										<td><?= $w->jenis_kelamin ?></td>
										<td><?= $w->tempat_lahir ?></td>
										<td><?= $w->tanggal_lahir ?></td>
										<td><?= $w->umur ?></td>
										<td><?= $w->status_perkawinan ?></td>
										<td><?= $w->pendidikan_terakhir ?></td>
										<td><?= $w->nama_ortu ?></td>
										<td><?= $w->status_hub_kk ?></td>
										<td>
											<div>
												<a href="<?= base_url() ?>warga/form_ubah_pengikut_suket012/<?= $w->id_pengikut  ?>" class="btn btn-primary btn-sm">
													<i class="fa fa-edit nav-icon"></i>
													Ubah
												</a>
												<a href="<?= base_url() ?>warga/aksi_hapus_pengikut/<?= $w->id_pengikut  ?>/<?= $w->id_permohonan_surat  ?>" class="mt-2 btn btn-danger btn-sm hapus">
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
				<!-- /.card-body -->
				<div class="card-footer">
					<div class="float-right">
						<a href="<?= base_url() ?>warga/detail_suket012/<?= $id_permohonan['id_surat']; ?>/<?= $id_permohonan['id_permohonan_surat']; ?>">
							<button id="btn_simpan" class="btn btn-sm btn-success" type="submit">
								<i class="far fa-save nav-icon">
								</i> Simpan
							</button>
						</a>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!--End Content Profile-->
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->