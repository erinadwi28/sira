<?php foreach ($detail_permohonan as $d) { ?>
	<?php if ($d->status ==  'Belum Tuntas') { ?>
		<!-- Begin Page Content -->
		<div class="container-fluid">

			<!-- Page Heading -->
			<div class="d-sm-flex align-items-center justify-content-between mb-4">
				<h1 class="h3 mb-0 text-gray-800">Detail Permohonan</h1>
				<?php foreach ($detail_suket as $w) { ?>
					<a href="<?= base_url() ?>warga/update_status_permohonan/<?= $w->id_permohonan_surat ?>/<?= $warga['id_warga'] ?>">
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
							<h6 class="m-0 font-weight-bold text-primary text-center">SURAT KETERANGAN PINDAH</h6>
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
											<td><?= $w->nama ?></td>
										</tr>
										<tr>
											<td><b>Tempat Lahir</b></td>
											<td> </td>
											<td> </td>
											<td>:</td>
											<td><?= $w->tempat_lahir ?></td>
										</tr>
										<tr>
											<td><b>Tanggal Lahir</b></td>
											<td> </td>
											<td> </td>
											<td>:</td>
											<td><?= $w->tanggal_lahir ?></td>
										</tr>
										<tr>
											<td><b>Jenis Kelamin</b></td>
											<td> </td>
											<td> </td>
											<td>:</td>
											<td><?= $w->jenis_kelamin ?></td>
										</tr>
										<tr>
											<td><b>Agama</b></td>
											<td> </td>
											<td> </td>
											<td>:</td>
											<td><?= $w->agama ?></td>
										</tr>
										<tr>
											<td><b>Kewarganegaraan</b></td>
											<td> </td>
											<td> </td>
											<td>:</td>
											<td><?= $w->kewarganegaraan ?></td>
										</tr>
										<tr>
											<td><b>Pendidikan Terakhir</b></td>
											<td> </td>
											<td> </td>
											<td>:</td>
											<td><?= $w->pendidikan_terakhir ?></td>
										</tr>
										<tr>
											<td><b>Pekerjaan</b></td>
											<td> </td>
											<td> </td>
											<td>:</td>
											<td><?= $w->pekerjaan ?></td>
										</tr>
										<tr>
											<td><b>Status Perkawinan</b></td>
											<td> </td>
											<td> </td>
											<td>:</td>
											<td><?= $w->status_perkawinan ?></td>
										</tr>
										<tr>
											<td><b>Alamat Asal</b></td>
											<td> </td>
											<td> </td>
											<td>:</td>
											<td><?= $w->alamat_asal ?></td>
										</tr>
										</tr>
										<td><b>No KK</b></td>
										<td> </td>
										<td> </td>
										<td>:</td>
										<td><?= $w->no_kk ?></td>
										</tr>
										<tr>
											<td><b>Tanggal KK</b></td>
											<td> </td>
											<td> </td>
											<td>:</td>
											<td><?= $w->tanggal_kk ?></td>
										</tr>
										<tr>
											<td><b>Alamat Pindah</b></td>
											<td> </td>
											<td> </td>
											<td>:</td>
											<td><?= $w->alamat_pindah ?></td>
										</tr>
										<tr>
											<td><b>Kelurahan Pindah</b></td>
											<td> </td>
											<td> </td>
											<td>:</td>
											<td><?= $w->kelurahan_pindah ?></td>
										</tr>
										<tr>
											<td><b>Kecamatan Pindah</b></td>
											<td> </td>
											<td> </td>
											<td>:</td>
											<td><?= $w->kecamatan_pindah ?></td>
										</tr>
										<tr>
											<td><b>Kabupaten Pindah</b></td>
											<td> </td>
											<td> </td>
											<td>:</td>
											<td><?= $w->kabupaten_pindah ?></td>
										</tr>
										<tr>
											<td><b>Provinsi Pindah</b></td>
											<td> </td>
											<td> </td>
											<td>:</td>
											<td><?= $w->provinsi_pindah ?></td>
										</tr>
										<tr>
											<td><b>Tanggal Pindah</b></td>
											<td> </td>
											<td> </td>
											<td>:</td>
											<td><?= $w->tanggal_pindah ?></td>
										</tr>
										<tr>
											<td><b>Alasan Pindah</b></td>
											<td> </td>
											<td> </td>
											<td>:</td>
											<td><?= $w->alasan_pindah ?></td>
										</tr>
										<tr>
											<td><b>Jumlah Pengikut</b></td>
											<td> </td>
											<td> </td>
											<td>:</td>
											<td><?= $w->jumlah_pengikut ?></td>
										</tr>
									<?php } ?>

									<?php foreach ($detail_permohonan as $d) { ?>
										<tr>
											<td><b>Tanggal Permohonan</b></td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td><?= $d->tgl_permohonan_surat; ?></td>
										</tr>
									<?php } ?>

								</tbody>
							</table>
							<br>
						</div>
						<div class="card-footer">
							<div class="float-right">
								<?php foreach ($detail_suket as $w) { ?>
									<a href="<?= base_url() ?>warga/form_ubah_suket014/<?= $w->id_surat ?>">
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
											<td><?= $m->tanggal_lahir ?></td>
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
									<a href="<?= base_url() ?>warga/list_pengikut_suket014/<?= $w->id_permohonan_surat ?>">
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

		<!--End Content Profile-->
		</div>
	<?php } else { ?>
		<!-- Begin Page Content -->
		<div class="container-fluid">

			<!-- Page Heading -->
			<div class="d-sm-flex align-items-center justify-content-between mb-4">
				<h1 class="h3 mb-0 text-gray-800">Detail Permohonan</h1>
				<a href="<?= base_url() ?>warga/list_history_permohonan/<?= $d->id_warga ?>">
					<button id=" btn_kembali" class="btn btn-sm btn-warning float-right" type="submit">
						<i class="fa fa-arrow-left">
						</i> Kembali
					</button>
				</a>
			</div>

			<div class="row">
				<div class="col-xs-12 col-sm-2"></div>
				<div class="col-md-12 mb-4">
					<!-- Detail Data -->
					<div class="card shadow mb-4">
						<div class="card-header py-3">
							<h6 class="m-0 font-weight-bold text-primary text-center">SURAT KETERANGAN PINDAH</h6>
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
											<td><?= $w->nama ?></td>
										</tr>
										<tr>
											<td><b>Tempat Lahir</b></td>
											<td> </td>
											<td> </td>
											<td>:</td>
											<td><?= $w->tempat_lahir ?></td>
										</tr>
										<tr>
											<td><b>Tanggal Lahir</b></td>
											<td> </td>
											<td> </td>
											<td>:</td>
											<td><?= $w->tanggal_lahir ?></td>
										</tr>
										<tr>
											<td><b>Jenis Kelamin</b></td>
											<td> </td>
											<td> </td>
											<td>:</td>
											<td><?= $w->jenis_kelamin ?></td>
										</tr>
										<tr>
											<td><b>Agama</b></td>
											<td> </td>
											<td> </td>
											<td>:</td>
											<td><?= $w->agama ?></td>
										</tr>
										<tr>
											<td><b>Kewarganegaraan</b></td>
											<td> </td>
											<td> </td>
											<td>:</td>
											<td><?= $w->kewarganegaraan ?></td>
										</tr>
										<tr>
											<td><b>Pendidikan Terakhir</b></td>
											<td> </td>
											<td> </td>
											<td>:</td>
											<td><?= $w->pendidikan_terakhir ?></td>
										</tr>
										<tr>
											<td><b>Pekerjaan</b></td>
											<td> </td>
											<td> </td>
											<td>:</td>
											<td><?= $w->pekerjaan ?></td>
										</tr>
										<tr>
											<td><b>Status Perkawinan</b></td>
											<td> </td>
											<td> </td>
											<td>:</td>
											<td><?= $w->status_perkawinan ?></td>
										</tr>
										<tr>
											<td><b>Alamat Asal</b></td>
											<td> </td>
											<td> </td>
											<td>:</td>
											<td><?= $w->alamat_asal ?></td>
										</tr>
										</tr>
										<td><b>No KK</b></td>
										<td> </td>
										<td> </td>
										<td>:</td>
										<td><?= $w->no_kk ?></td>
										</tr>
										<tr>
											<td><b>Tanggal KK</b></td>
											<td> </td>
											<td> </td>
											<td>:</td>
											<td><?= $w->tanggal_kk ?></td>
										</tr>
										<tr>
											<td><b>Alamat Pindah</b></td>
											<td> </td>
											<td> </td>
											<td>:</td>
											<td><?= $w->alamat_pindah ?></td>
										</tr>
										<tr>
											<td><b>Kelurahan Pindah</b></td>
											<td> </td>
											<td> </td>
											<td>:</td>
											<td><?= $w->kelurahan_pindah ?></td>
										</tr>
										<tr>
											<td><b>Kecamatan Pindah</b></td>
											<td> </td>
											<td> </td>
											<td>:</td>
											<td><?= $w->kecamatan_pindah ?></td>
										</tr>
										<tr>
											<td><b>Kabupaten Pindah</b></td>
											<td> </td>
											<td> </td>
											<td>:</td>
											<td><?= $w->kabupaten_pindah ?></td>
										</tr>
										<tr>
											<td><b>Provinsi Pindah</b></td>
											<td> </td>
											<td> </td>
											<td>:</td>
											<td><?= $w->provinsi_pindah ?></td>
										</tr>
										<tr>
											<td><b>Tanggal Pindah</b></td>
											<td> </td>
											<td> </td>
											<td>:</td>
											<td><?= $w->tanggal_pindah ?></td>
										</tr>
										<tr>
											<td><b>Alasan Pindah</b></td>
											<td> </td>
											<td> </td>
											<td>:</td>
											<td><?= $w->alasan_pindah ?></td>
										</tr>
										<tr>
											<td><b>Jumlah Pengikut</b></td>
											<td> </td>
											<td> </td>
											<td>:</td>
											<td><?= $w->jumlah_pengikut ?></td>
										</tr>
									<?php } ?>

									<?php foreach ($detail_permohonan as $d) { ?>
										<tr>
											<td><b>Tanggal Permohonan</b></td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td><?= $d->tgl_permohonan_surat; ?></td>
										</tr>
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
											<td><?= $m->tanggal_lahir ?></td>
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

		<!--End Content Profile-->
		</div>
	<?php } ?>
<?php } ?>