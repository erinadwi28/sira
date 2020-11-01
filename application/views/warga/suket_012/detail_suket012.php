<?php foreach ($detail_permohonan as $d) { ?>
<?php if ($d->status ==  'Belum Tuntas') { ?>
<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Detail Permohonan Surat</h1>
		<?php foreach ($detail_suket as $w) { ?>
		<a
			href="<?= base_url() ?>warga/update_status_permohonan/<?= $w->id_permohonan_surat ?>/<?= $warga['id_warga'] ?>">
			<button id="btn_selesai" class="btn btn-sm btn-success" type="submit">
				<i class="far fa-save nav-icon">
				</i> Selesai
			</button>
		</a>
		<?php } ?>

	</div>

	<div class="row">
		<div class="col-xs-12 col-sm-2"></div>
		<div class="col-md-12 mb-4">
			<!-- Detail Data -->
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary text-center">SURAT PENGANTAR KARTU KELUARGA</h6>
				</div>
				<div class="card-body">
					<div class="flash-data" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>
					<?php if ($this->session->flashdata('success')) : ?>
					<?php endif; ?>
					<table class="table-hover table-responsive">
						<tbody>
							<?php
									foreach ($detail_suket as $w) {
									?>
							<tr>
								<td><b>Nama Lengkap</b></td>
								<td> </td>
								<td> </td>
								<td>:</td>
								<td><?= $w->nama; ?></td>
							</tr>
							<tr>
								<td><b>Tempat Lahir</b></td>
								<td> </td>
								<td> </td>
								<td>:</td>
								<td><?= $w->tempat_lahir; ?></td>
							</tr>
							<tr>
								<td><b>Tanggal Lahir</b></td>
								<td> </td>
								<td> </td>
								<td>:</td>
								<td><?= format_indo(date($w->tanggal_lahir)); ?></td>
							</tr>
							<tr>
								<td><b>Jenis Kelamin</b></td>
								<td> </td>
								<td> </td>
								<td>:</td>
								<td><?= $w->jenis_kelamin; ?></td>
							</tr>
							<tr>
								<td><b>Status Perkawinan</b></td>
								<td> </td>
								<td> </td>
								<td>:</td>
								<td><?= $w->status_perkawinan; ?></td>
							</tr>
							<tr>
								<td><b>Agama</b></td>
								<td> </td>
								<td> </td>
								<td>:</td>
								<td><?= $w->agama; ?></td>
							</tr>
							<tr>
								<td><b>Kewarganegaraan</b></td>
								<td> </td>
								<td> </td>
								<td>:</td>
								<td><?= $w->kewarganegaraan; ?></td>
							</tr>
							<tr>
								<td><b>Pendidikan Terakhir</b></td>
								<td> </td>
								<td> </td>
								<td>:</td>
								<td><?= $w->pendidikan_terakhir; ?></td>
							</tr>
							<tr>
								<td><b>Pekerjaan</b></td>
								<td> </td>
								<td> </td>
								<td>:</td>
								<td><?= $w->pekerjaan; ?></td>
							</tr>
							<tr>
								<td><b>Alamat</b></td>
								<td> </td>
								<td> </td>
								<td>:</td>
								<td><?= $w->alamat; ?></td>
							</tr>
							</tr>
							<td><b>Tanggal Tinggal</b></td>
							<td> </td>
							<td> </td>
							<td>:</td>
							<td><?= format_indo(date($w->tanggal_tinggal)); ?></td>
							</tr>
							<tr>
								<td><b>Kepindahan dari</b></td>
								<td> </td>
								<td> </td>
								<td>:</td>
								<td><?= $w->kepindahan_dari; ?></td>
							</tr>
							<tr>
								<td><b>Nama Ayah</b></td>
								<td> </td>
								<td> </td>
								<td>:</td>
								<td><?= $w->nama_ayah; ?></td>
							</tr>
							<tr>
								<td><b>Nama Ibu</b></td>
								<td> </td>
								<td> </td>
								<td>:</td>
								<td><?= $w->nama_ibu; ?></td>
							</tr>
							<tr>
								<td><b>Jumlah Pengikut</b></td>
								<td> </td>
								<td> </td>
								<td>:</td>
								<td><?= $w->jml_pengikut; ?></td>
							</tr>
							<?php } ?>

							<?php foreach ($detail_permohonan as $d) { ?>
							<tr>
								<td><b>Tanggal Permohonan</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= format_indo(date($d->tgl_permohonan_surat)); ?></td>
							</tr>
							<?php } ?>

						</tbody>
					</table>
					<br>
				</div>
				<div class="card-footer">
					<div class="float-right">
						<?php foreach ($detail_suket as $w) { ?>
						<a href="<?= base_url() ?>warga/form_ubah_suket012/<?= $w->id_surat ?>">
							<button id=" btn_ubah" class="btn btn-sm btn-primary" type="submit">
								<i class="fa fa-edit nav-icon">
								</i> Ubah
							</button>
						</a>
						<?php } ?>
					</div>
				</div>
			</div>

			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary text-center">DAFTAR PENGIKUT KK</h6>
				</div>
				<div class="card-body">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Lengkap</th>
								<th>Tempat Lahir</th>
								<th>Tanggal Lahir</th>
								<th>Jenis Kelamin</th>
								<th>Umur (tahun)</th>
								<th>Status Perkawinan</th>
								<th>Pendidikan Terakhir</th>
								<th>Nama Ortu</th>
								<th>Hubungan dgn KK</th>
							</tr>
						</thead>
						<tbody>
							<?php
									$no = 1;
									foreach ($pengikut as $m) {
									?>
							<tr>
								<td><?= $no++ ?></td>
								<td><?= $m->nama ?></td>
								<td><?= $m->jenis_kelamin ?></td>
								<td><?= $m->tempat_lahir ?></td>
								<td><?= format_indo(date($m->tanggal_lahir)); ?></td>
								<td><?= $m->umur ?></td>
								<td><?= $m->status_perkawinan ?></td>
								<td><?= $m->pendidikan_terakhir ?></td>
								<td><?= $m->nama_ortu ?></td>
								<td><?= $m->status_hub_kk ?></td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
				<div class="card-footer">
					<div class="float-right">
						<?php foreach ($detail_suket as $w) { ?>
						<a href="<?= base_url() ?>warga/list_pengikut_suket012/<?= $w->id_permohonan_surat ?>">
							<button id=" btn_ubah" class="btn btn-sm btn-primary" type="submit">
								<i class="fa fa-edit nav-icon">
								</i> Ubah
							</button>
						</a>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php } else { ?>
<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Detail History Permohonan</h1>
		<?php foreach ($detail_suket as $w) { ?>
		<a href="<?= base_url() ?>warga/list_history_permohonan/<?= $d->id_warga ?>">
			<button id=" btn_kembali" class="btn btn-sm btn-warning float-right" type="submit">
				<i class="fa fa-arrow-left">
				</i> Kembali
			</button>
		</a>
		<?php } ?>

	</div>

	<div class="row">
		<div class="col-xs-12 col-sm-2"></div>
		<div class="col-md-12 mb-4">
			<!-- Detail Data -->
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary text-center">SURAT PENGANTAR KK</h6>
				</div>
				<div class="card-body">
					<table class="table-hover table-responsive">
						<tbody>
							<?php
									foreach ($detail_suket as $w) {
									?>
							<tr>
								<td><b>Nama Lengkap</b></td>
								<td> </td>
								<td> </td>
								<td>:</td>
								<td><?= $w->nama; ?></td>
							</tr>
							<tr>
								<td><b>Tempat Lahir</b></td>
								<td> </td>
								<td> </td>
								<td>:</td>
								<td><?= $w->tempat_lahir; ?></td>
							</tr>
							<tr>
								<td><b>Tanggal Lahir</b></td>
								<td> </td>
								<td> </td>
								<td>:</td>
								<td><?= format_indo(date($w->tanggal_lahir)); ?></td>
							</tr>
							<tr>
								<td><b>Jenis Kelamin</b></td>
								<td> </td>
								<td> </td>
								<td>:</td>
								<td><?= $w->jenis_kelamin; ?></td>
							</tr>
							<tr>
								<td><b>Status Perkawinan</b></td>
								<td> </td>
								<td> </td>
								<td>:</td>
								<td><?= $w->status_perkawinan; ?></td>
							</tr>
							<tr>
								<td><b>Agama</b></td>
								<td> </td>
								<td> </td>
								<td>:</td>
								<td><?= $w->agama; ?></td>
							</tr>
							<tr>
								<td><b>Kewarganegaraan</b></td>
								<td> </td>
								<td> </td>
								<td>:</td>
								<td><?= $w->kewarganegaraan; ?></td>
							</tr>
							<tr>
								<td><b>Pendidikan Terakhir</b></td>
								<td> </td>
								<td> </td>
								<td>:</td>
								<td><?= $w->pendidikan_terakhir; ?></td>
							</tr>
							<tr>
								<td><b>Pekerjaan</b></td>
								<td> </td>
								<td> </td>
								<td>:</td>
								<td><?= $w->pekerjaan; ?></td>
							</tr>
							<tr>
								<td><b>Alamat</b></td>
								<td> </td>
								<td> </td>
								<td>:</td>
								<td><?= $w->alamat; ?></td>
							</tr>
							<tr>
								<td><b>Tanggal Tinggal</b></td>
								<td> </td>
								<td> </td>
								<td>:</td>
								<td><?= format_indo(date($w->tanggal_tinggal)); ?></td>
							</tr>
							<tr>
								<td><b>Kepindahan dari</b></td>
								<td> </td>
								<td> </td>
								<td>:</td>
								<td><?= $w->kepindahan_dari; ?></td>
							</tr>
							<tr>
								<td><b>Nama Ayah</b></td>
								<td> </td>
								<td> </td>
								<td>:</td>
								<td><?= $w->nama_ayah; ?></td>
							</tr>
							<tr>
								<td><b>Nama Ibu</b></td>
								<td> </td>
								<td> </td>
								<td>:</td>
								<td><?= $w->nama_ibu; ?></td>
							</tr>
							<tr>
								<td><b>Jumlah Pengikut</b></td>
								<td> </td>
								<td> </td>
								<td>:</td>
								<td><?= $w->jml_pengikut; ?></td>
							</tr>

							<?php foreach ($detail_permohonan as $d) { ?>
							<tr>
								<td><b>Tanggal Permohonan</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= format_indo(date($d->tgl_permohonan_surat)); ?></td>
							</tr>

							<!-- tanggal rt -->
							<?php if ($d->status ==  'Menunggu Persetujuan Kelurahan' || $d->status ==  'Selesai') { ?>
								<tr>
									<td><b>Tanggal Disetujui Ketua RT</b></td>
									<td> </td>
									<td> </td>
									<td> </td>
									<td><?= format_indo(date($d->tanggal_persetujuan_rt)); ?></td>
								</tr>
							<?php } elseif($d->status ==  'Ditolak') { ?>
								<tr>
									<td><b>Tanggal Ditolak Ketua RT</b></td>
									<td> </td>
									<td> </td>
									<td> </td>
									<td><?= format_indo(date($d->tanggal_persetujuan_rt)); ?></td>
								</tr>							
							<?php } ?>
							
							<!-- tanggal admin -->
							<?php if ($d->status ==  'Selesai') { ?>
								<tr>
								<td><b>Tanggal Surat Dikeluarkan</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= format_indo(date($d->tgl_persetujuan_admin)); ?></td>
							</tr>
							<?php } elseif($d->status ==  'Ditolak' && $d->tgl_persetujuan_admin != null ) { ?>
								<tr>
									<td><b>Tanggal Ditolak Kelurahan</b></td>
									<td> </td>
									<td> </td>
									<td> </td>
									<td><?= format_indo(date($d->tgl_persetujuan_admin)); ?></td>
								</tr>							
							<?php } ?>	

							<?php if($d->keterangan != null) { ?>
							<tr>
								<td><b>Keterangan</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $d->keterangan; ?></td>
							</tr>
							<?php } ?>
							<?php } ?>

							<?php if($w->nomor_surat_rt != null) { ?>
							<tr>
								<td><b>Nomor Surat Ketua RT</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $w->nomor_surat_rt; ?></td>
							</tr>
							<?php } ?>
							<?php } ?>
						</tbody>
					</table>
					<br>
				</div>
			</div>

			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary text-center">DAFTAR PENGIKUT KK</h6>
				</div>
				<div class="card-body">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Lengkap</th>
								<th>Tempat Lahir</th>
								<th>Tanggal Lahir</th>
								<th>Jenis Kelamin</th>
								<th>Umur (tahun)</th>
								<th>Status Perkawinan</th>
								<th>Pendidikan Terakhir</th>
								<th>Nama Ortu</th>
								<th>Hubungan dgn KK</th>
							</tr>
						</thead>
						<tbody>
							<?php
									$no = 1;
									foreach ($pengikut as $m) {
									?>
							<tr>
								<td><?= $no++ ?></td>
								<td><?= $m->nama ?></td>
								<td><?= $m->jenis_kelamin ?></td>
								<td><?= $m->tempat_lahir ?></td>
								<td><?= format_indo(date($m->tanggal_lahir)); ?></td>
								<td><?= $m->umur ?></td>
								<td><?= $m->status_perkawinan ?></td>
								<td><?= $m->pendidikan_terakhir ?></td>
								<td><?= $m->nama_ortu ?></td>
								<td><?= $m->status_hub_kk ?></td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<?php } ?>
<?php } ?>
