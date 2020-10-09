<?php foreach ($detail_permohonan as $d) { ?>
	<?php if ($d->status ==  'Belum Tuntas') { ?>
		<!-- Begin Page Content -->
		<div class="container-fluid">

			<!-- Page Heading -->
			<div class="d-sm-flex align-items-center justify-content-between mb-4">
				<h1 class="h3 mb-0 text-gray-800">Detail Permohonan</h1>

			</div>

			<div class="row">
				<div class="col-xs-12 col-sm-2"></div>
				<div class="col-md-8 mb-4">
					<!-- Detail Data -->
					<div class="card shadow mb-4">
						<div class="card-header py-3">
							<h6 class="m-0 font-weight-bold text-primary text-center">SURAT KETERANGAN KELAHIRAN</h6>
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
											<td><b>Nama Anak</b></td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td><?= $w->nama_anak ?></td>
										</tr>
										<tr>
											<td><b>Hari Lahir</b></td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td><?= $w->hari_lahir ?></td>
										</tr>
										<tr>
											<td><b>Tempat Lahir</b></td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td><?= $w->tempat_lahir ?></td>
										</tr>
										<tr>
											<td><b>Tanggal Lahir</b></td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td><?= $w->tanggal_lahir ?></td>
										</tr>
										<tr>
											<td><b>Jam Lahir</b></td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td><?= $w->jam_lahir ?></td>
										</tr>
										<tr>
											<td><b>Jenis Kelamin</b></td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td><?= $w->jenis_kelamin ?></td>
										</tr>
										<tr>
											<td><b>Nama Ibu</b></td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td><?= $w->nama_ibu ?></td>
										</tr>
										<tr>
											<td><b>Alamat</b></td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td><?= $w->alamat ?></td>
										</tr>
										<tr>
											<td><b>Nama Ayah</b></td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td><?= $w->nama_ayah ?></td>
										</tr>
										<tr>
											<td><b>Nama Pemohon</b></td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td><?= $w->nama_pemohon ?></td>
										</tr>
										<tr>
											<td><b>Hubungan dgn Bayi</b></td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td><?= $w->hubungan_dengan_bayi ?></td>
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
						</div>
						<div class="card-footer">
							<div class="float-right">
								<?php foreach ($detail_suket as $w) { ?>
									<a href="<?= base_url() ?>warga/form_ubah_suket010/<?= $w->id_surat ?>">
										<button id=" btn_ubah" class="btn btn-sm btn-primary" type="submit">
											<i class="fa fa-edit nav-icon">
											</i> Ubah
										</button>
									</a>
									<a href="<?= base_url() ?>warga/update_status_permohonan/<?= $w->id_permohonan_surat ?>/<?= $warga['id_warga'] ?>">
										<button id="btn_selesai" class="btn btn-sm btn-success" type="submit">
											<i class="far fa-save nav-icon">
											</i> Selesai
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
		<!-- /.container-fluid -->

		<!-- End of Main Content -->
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
				<div class="col-md-8 mb-4">
					<!-- Detail Data -->
					<div class="card shadow mb-4">
						<div class="card-header py-3">
							<h6 class="m-0 font-weight-bold text-primary text-center">SURAT KETERANGAN KELAHIRAN</h6>
						</div>
						<div class="card-body">
							<table class="table-hover table-responsive">
								<tbody>
									<?php
									foreach ($detail_suket as $w) {
									?>
										<tr>
											<td><b>Nama Anak</b></td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td><?= $w->nama_anak ?></td>
										</tr>
										<tr>
											<td><b>Hari Lahir</b></td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td><?= $w->hari_lahir ?></td>
										</tr>
										<tr>
											<td><b>Tempat Lahir</b></td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td><?= $w->tempat_lahir ?></td>
										</tr>
										<tr>
											<td><b>Tanggal Lahir</b></td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td><?= $w->tanggal_lahir ?></td>
										</tr>
										<tr>
											<td><b>Jam Lahir</b></td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td><?= $w->jam_lahir ?></td>
										</tr>
										<tr>
											<td><b>Jenis Kelamin</b></td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td><?= $w->jenis_kelamin ?></td>
										</tr>
										<tr>
											<td><b>Nama Ibu</b></td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td><?= $w->nama_ibu ?></td>
										</tr>
										<tr>
											<td><b>Alamat</b></td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td><?= $w->alamat ?></td>
										</tr>
										<tr>
											<td><b>Nama Ayah</b></td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td><?= $w->nama_ayah ?></td>
										</tr>
										<tr>
											<td><b>Nama Pemohon</b></td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td><?= $w->nama_pemohon ?></td>
										</tr>
										<tr>
											<td><b>Hubungan dgn Bayi</b></td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td><?= $w->hubungan_dengan_bayi ?></td>
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
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--End Content Profile-->
		</div>
		<!-- /.container-fluid -->

		<!-- End of Main Content -->
	<?php } ?>
<?php } ?>