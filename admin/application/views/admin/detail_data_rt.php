<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Detail Data RT</h1>
		<a href="<?= base_url('admin/list_data_rt') ?>">
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
			<!-- Foto -->
			<div class="mb-4">
				<?php
				foreach ($detail_rt as $detail) {

				?>
					<!--Foto profile-->
					<div class="card">
						<div class="card-body">
							<img src="img/user.png" alt="foto profil" class="img-fluid">
						</div>
						<div class="card-footer py-3">
							<center>
								<h6 class="m-0 font-weight-bold text-primary">Foto Profil <?= $detail->nama; ?></h6>
							</center>
						</div>
					</div>

					<!--Foto ktp-->
					<div class="card mt-3">
						<div class="card-body">
							<img src="" alt="foto ktp" class="img-fluid">
						</div>
						<div class="card-footer py-3">
							<center>
								<h6 class="m-0 font-weight-bold text-primary">Foto KTP <?= $detail->nama; ?></h6>
							</center>
						</div>
					</div>

					<!--Foto kk-->
					<div class="card mt-3">
						<div class="card-body">
							<img src="" alt="foto kk" class="img-fluid">
						</div>
						<div class="card-footer py-3">
							<center>
								<h6 class="m-0 font-weight-bold text-primary">Foto KK <?= $detail->nama; ?></h6>
							</center>
						</div>
					</div>
			</div>
		</div>
		<div class="col-md-8 mb-4">
			<!-- Detail Data -->
			<div class="card shadow mb-4">
				<div class="card-body">
					<table class="table-hover table-responsive">
						<tbody>

							<tr>
								<td><b>NIK</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $detail->nik; ?></td>
							</tr>
							<tr>
								<td><b>Nama Lengkap</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $detail->nama; ?></td>
							</tr>
							<tr>
								<td><b>Tempat Lahir</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $detail->tempat_lahir; ?></td>
							</tr>
							<tr>
								<td><b>Tanggal Lahir</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $detail->tanggal_lahir; ?></td>
							</tr>
							<tr>
								<td><b>Jenis Kelamin</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $detail->jenis_kelamin; ?></td>
							</tr>
							<tr>
								<td><b>Golongan Darah</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $detail->golongan_darah; ?></td>
							</tr>
							<tr>
								<td><b>Agama</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $detail->agama; ?></td>
							</tr>
							<tr>
								<td><b>Alamat</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $detail->alamat; ?></td>
							</tr>
							<tr>
								<td><b>RT</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $detail->rt; ?></td>
							</tr>
							<tr>
								<td><b>Kelurahan</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $detail->kelurahan; ?></td>
							</tr>
							<tr>
								<td><b>Kecamatan</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $detail->kecamatan; ?></td>
							</tr>
							<tr>
								<td><b>Status Perkawinan</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $detail->status_perkawinan; ?></td>
							</tr>
							<tr>
								<td><b>Pekerjaan</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $detail->pekerjaan; ?></td>
							</tr>
							<tr>
								<td><b>Kewarganegaraan</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $detail->kewarganegaraan; ?></td>
							</tr>
							<tr>
								<td><b>Nomor Kartu Keluarga</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $detail->no_kk; ?></td>
							</tr>
							<tr>
								<td><b>Pendidikan Terakhir</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $detail->pendidikan_terakhir; ?></td>
							</tr>
							<tr>
								<td><b>Status Hubungan Dalam Keluarga</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $detail->status_hub_kel; ?></td>
							</tr>
							<tr>
								<td><b>Nomor HandPhone</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $detail->no_hp; ?></td>
							</tr>
							<tr>
								<td><b>Status Kepegawaian</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $detail->status_kepegawaian; ?></td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
				</div>
				<div class="card-footer">
					<div class="float-right">
						<a href="<?= base_url() ?>admin/form_ubah_rt/<?= $detail->id_rt ?>">
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