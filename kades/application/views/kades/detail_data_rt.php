<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Detail Data Ketua RT</h1>
		<a href="<?= base_url('kades/list_data_rt') ?>">
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

			<!-- Foto Profil -->
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<center>
						<h6 class="m-0 font-weight-bold text-primary">Foto Profil</h6>
					</center>
				</div>

				<div class="card-body" style="padding: 15px;">
					<center>
						<?php
						foreach ($foto_profil as $p) { ?>
							<a href="<?= base_url(); ?>../assets/uploads/rt/<?= $p->foto_profil_rt; ?>" data-gallery="mygallery" data-title="Foto Profil" data-toggle="lightbox">
								<img src="<?= base_url(); ?>../assets/uploads/rt/<?= $p->foto_profil_rt; ?>" alt="foto profil" class="img-fluid" width="200px">
							</a>
						<?php } ?>
					</center>
				</div>
			</div>


			<!-- Foto KTP -->
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<center>
						<h6 class="m-0 font-weight-bold text-primary">Foto KTP</h6>
					</center>
				</div>

				<div class="card-body" style="padding: 15px;">
					<center>
						<?php
						foreach ($foto_ktp as $k) {
						?>
							<a href="<?= base_url(); ?>../assets/uploads/warga/<?= $k->foto_ktp_warga; ?>" data-gallery="mygallery" data-title="Foto KTP" data-toggle="lightbox">
								<img src="<?= base_url(); ?>../assets/uploads/warga/<?= $k->foto_ktp_warga; ?>" alt="foto profil" class="img-fluid" width="200px">
							</a>
						<?php } ?>
					</center>
				</div>
			</div>

			<!-- Foto KK -->
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<center>
						<h6 class="m-0 font-weight-bold text-primary">Foto KK</h6>
					</center>
				</div>

				<div class="card-body" style="padding: 15px;">
					<center>
						<?php
						foreach ($foto_kk as $kk) {
						?>
							<a href="<?= base_url(); ?>../assets/uploads/warga/<?= $kk->foto_kk_warga; ?>" data-gallery="mygallery" data-title="Foto KK" data-toggle="lightbox">
								<img src="<?= base_url(); ?>../assets/uploads/warga/<?= $kk->foto_kk_warga; ?>" alt="foto kk" class="img-fluid" width="200px">
							</a>
						<?php } ?>
					</center>
				</div>
			</div>
		</div>

		<div class="col-md-8 mb-4">
			<!-- Detail Data -->
			<div class="card shadow mb-4">
				<div class="card-body">
					<table class="table-hover table-responsive">
						<tbody>
							<?php
							foreach ($detail_rt as $detail) { ?>
								<tr>
									<td><b>NIK</b></td>
									<td> </td>
									<td> </td>
									<td>:</td>
									<td><?= $detail->nik; ?></td>
								</tr>
								<tr>
									<td><b>Nama Lengkap</b></td>
									<td> </td>
									<td> </td>
									<td>:</td>
									<td><?= $detail->nama; ?></td>
								</tr>
								<tr>
									<td><b>Tempat Lahir</b></td>
									<td> </td>
									<td> </td>
									<td>:</td>
									<td><?= $detail->tempat_lahir; ?></td>
								</tr>
								<tr>
									<td><b>Tanggal Lahir</b></td>
									<td> </td>
									<td> </td>
									<td>:</td>
									<td><?= format_indo(date($detail->tanggal_lahir)); ?></td>
								</tr>
								<tr>
									<td><b>Jenis Kelamin</b></td>
									<td> </td>
									<td> </td>
									<td>:</td>
									<td><?= $detail->jenis_kelamin; ?></td>
								</tr>
								<tr>
									<td><b>Golongan Darah</b></td>
									<td> </td>
									<td> </td>
									<td>:</td>
									<td><?= $detail->golongan_darah; ?></td>
								</tr>
								<tr>
									<td><b>Agama</b></td>
									<td> </td>
									<td> </td>
									<td>:</td>
									<td><?= $detail->agama; ?></td>
								</tr>
								<tr>
									<td><b>Alamat</b></td>
									<td> </td>
									<td> </td>
									<td>:</td>
									<td><?= $detail->alamat; ?></td>
								</tr>
								<tr>
									<td><b>RT</b></td>
									<td> </td>
									<td> </td>
									<td>:</td>
									<td><?= $detail->rt; ?></td>
								</tr>
								<tr>
									<td><b>Kelurahan</b></td>
									<td> </td>
									<td> </td>
									<td>:</td>
									<td><?= $detail->kelurahan; ?></td>
								</tr>
								<tr>
									<td><b>Kecamatan</b></td>
									<td> </td>
									<td> </td>
									<td>:</td>
									<td><?= $detail->kecamatan; ?></td>
								</tr>
								<tr>
									<td><b>Status Perkawinan</b></td>
									<td> </td>
									<td> </td>
									<td>:</td>
									<td><?= $detail->status_perkawinan; ?></td>
								</tr>
								<tr>
									<td><b>Pekerjaan</b></td>
									<td> </td>
									<td> </td>
									<td>:</td>
									<td><?= $detail->pekerjaan; ?></td>
								</tr>
								<tr>
									<td><b>Kewarganegaraan</b></td>
									<td> </td>
									<td> </td>
									<td>:</td>
									<td><?= $detail->kewarganegaraan; ?></td>
								</tr>
								<tr>
									<td><b>Nomor Kartu Keluarga</b></td>
									<td> </td>
									<td> </td>
									<td>:</td>
									<td><?= $detail->no_kk; ?></td>
								</tr>
								<tr>
									<td><b>Pendidikan Terakhir</b></td>
									<td> </td>
									<td> </td>
									<td>:</td>
									<td><?= $detail->pendidikan_terakhir; ?></td>
								</tr>
								<tr>
									<td><b>Status Hubungan Dalam Keluarga</b></td>
									<td> </td>
									<td> </td>
									<td>:</td>
									<td><?= $detail->status_hub_kel; ?></td>
								</tr>
								<tr>
									<td><b>Nomor HandPhone</b></td>
									<td> </td>
									<td> </td>
									<td>:</td>
									<td><?= $detail->no_hp; ?></td>
								</tr>
								<tr>
									<td><b>Status Kepegawaian</b></td>
									<td> </td>
									<td> </td>
									<td>:</td>
									<td><?= $detail->status_kepegawaian; ?></td>
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
