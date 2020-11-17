<?php foreach ($detail_permohonan as $d) { ?>
	<?php if ($d->status ==  'Belum Tuntas') { ?>
		<!-- Begin Page Content -->
		<div class="container-fluid">

			<!-- Page Heading -->
			<div class="d-sm-flex align-items-center justify-content-between mb-4">
				<h1 class="h3 mb-0 text-gray-800">Detail Permohonan Surat</h1>

			</div>

			<div class="row">
				<div class="col-md-4 mb-4">

					<!-- Foto Profil -->
					<div class="card shadow mb-4">
						<div class="card-header py-3">
							<center>
								<h6 class="m-0 font-weight-bold text-primary">Foto KTP</h6>
							</center>
						</div>

						<div class="card-body" style="padding: 15px;">
							<?php
							foreach ($detail_suket as $foto) { ?>
								<center>
									<a href="<?= base_url(); ?>/assets/uploads/warga/suket_005/<?= $foto->foto_ktp; ?>" data-gallery="mygallery" data-title="Foto KTP" data-toggle="lightbox">
										<img src="<?= base_url(); ?>/assets/uploads/warga/suket_005/<?= $foto->foto_ktp; ?>" alt="foto KTP" class="img-fluid" width="150px">
									</a>
								</center>
							<?php } ?>
						</div>

						<div class="card-footer py-3">
							<form action="http://localhost/sira/warga/update_foto_ktp" enctype="multipart/form-data" method="post" accept-charset="utf-8" id="form_upload_ktp_suket005">
								<?php
								foreach ($detail_suket as $w) {
								?>
									<div class="form-group ml-2 mr-2">
										<div class="input-group">
											<div class="form-group-upload">
												<div class="custom-file">
													<label class="custom-file-label" for="file-upload-ktp">pilih foto KTP...</label>
													<input type="file" class="custom-file-input" id="file-upload-ktp" name="berkas[]">
													<!-- <input type="hidden" value="Foto Profil" name="keterangan[]"> -->
													<input type="hidden" class="form-control form-user-input" name="id_surat" id="id_surat" value="<?= $w->id_surat ?>">
													<input type="hidden" class="form-control form-user-input" name="id_permohonan_surat" id="id_permohonan_surat" value="<?= $w->id_permohonan_surat ?>">
													<i class=" fas fa-exclamation-circle"></i>
													<h6>Error massage</h6>
												</div>
											</div>
										</div>
									</div>
								<?php } ?>
								<center>
									<button class="btn btn-sm btn-primary" type="submit">
										<i class="fa fa-upload">
										</i> Upload
									</button>
								</center>
							</form>
						</div>
					</div>
				</div>


				<div class="col-md-8 mb-4">
					<!-- Detail Data -->
					<div class="card shadow mb-4">
						<div class="card-header py-3">
							<h6 class="m-0 font-weight-bold text-primary text-center">SURAT KETERANGAN IZIN KERAMAIAN</h6>
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
											<td><b>Nama</b></td>
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
											<td><?= format_indo(date($w->tanggal_lahir)); ?></td>
										</tr>
										<tr>
											<td><b>Alamat</b></td>
											<td> </td>
											<td> </td>
											<td>:</td>
											<td><?= $w->alamat ?></td>
										</tr>
										<tr>
											<td><b>Kegiatan</b></td>
											<td> </td>
											<td> </td>
											<td>:</td>
											<td><?= $w->nama_kegiatan ?></td>
										</tr>
										<tr>
											<td><b>Hari</b></td>
											<td> </td>
											<td> </td>
											<td>:</td>
											<td><?= $w->hari_kegiatan ?></td>
										</tr>
										<tr>
											<td><b>Tanggal</b></td>
											<td> </td>
											<td> </td>
											<td>:</td>
											<td><?= format_indo(date($w->tanggal_kegiatan)); ?></td>
										</tr>
										<tr>
											<td><b>Tempat</b></td>
											<td> </td>
											<td> </td>
											<td>:</td>
											<td><?= $w->tempat ?></td>
										</tr>
										<tr>
											<td><b>Jam</b></td>
											<td> </td>
											<td> </td>
											<td>:</td>
											<td><?= $w->jam ?></td>
										</tr>
									<?php } ?>

									<?php foreach ($detail_permohonan as $d) { ?>
										<tr>
											<td><b>Tanggal Permohonan</b></td>
											<td> </td>
											<td> </td>
											<td>:</td>
											<td><?= format_indo(date($d->tgl_permohonan_surat)); ?></td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
						<div class="card-footer">
							<div class="float-right">
								<?php foreach ($detail_suket as $w) { ?>
									<a href="<?= base_url() ?>warga/form_ubah_suket005/<?= $w->id_surat ?>">
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
				<div class="col-md-4 mb-4">

					<!-- Foto Profil -->
					<div class="card shadow mb-4">
						<div class="card-header py-3">
							<center>
								<h6 class="m-0 font-weight-bold text-primary">Foto KTP</h6>
							</center>
						</div>

						<div class="card-body" style="padding: 15px;">
							<?php
							foreach ($detail_suket as $foto) { ?>
								<center>
									<a href="<?= base_url(); ?>/assets/uploads/warga/suket_005/<?= $foto->foto_ktp; ?>" data-gallery="mygallery" data-title="Foto KTP" data-toggle="lightbox">
										<img src="<?= base_url(); ?>/assets/uploads/warga/suket_005/<?= $foto->foto_ktp; ?>" alt="foto KTP" class="img-fluid" width="200px">
									</a>
								</center>


							<?php } ?>
						</div>
					</div>
				</div>
				<div class="col-md-8 mb-4">
					<!-- Detail Data -->
					<div class="card shadow mb-4">
						<div class="card-header py-3">
							<h6 class="m-0 font-weight-bold text-primary text-center">SURAT KETERANGAN IZIN KERAMAIAN</h6>
						</div>
						<div class="card-body">
							<table class="table-hover table-responsive">
								<tbody>
									<?php
									foreach ($detail_suket as $w) {
									?>
										<tr>
											<td><b>Nama</b></td>
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
											<td><?= format_indo(date($w->tanggal_lahir)); ?></td>
										</tr>
										<tr>
											<td><b>Alamat</b></td>
											<td> </td>
											<td> </td>
											<td>:</td>
											<td><?= $w->alamat ?></td>
										</tr>
										<tr>
											<td><b>Kegiatan</b></td>
											<td> </td>
											<td> </td>
											<td>:</td>
											<td><?= $w->nama_kegiatan ?></td>
										</tr>
										<tr>
											<td><b>Hari</b></td>
											<td> </td>
											<td> </td>
											<td>:</td>
											<td><?= $w->hari_kegiatan ?></td>
										</tr>
										<tr>
											<td><b>Tanggal</b></td>
											<td> </td>
											<td> </td>
											<td>:</td>
											<td><?= format_indo(date($w->tanggal_kegiatan)); ?></td>
										</tr>
										<tr>
											<td><b>Tempat</b></td>
											<td> </td>
											<td> </td>
											<td>:</td>
											<td><?= $w->tempat ?></td>
										</tr>
										<tr>
											<td><b>Jam</b></td>
											<td> </td>
											<td> </td>
											<td>:</td>
											<td><?= $w->jam ?></td>
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
											<?php if ($d->status ==  'Menunggu Persetujuan Kelurahan' || $d->status ==  'Selesai' || $d->status ==  'Ditolak Kelurahan') { ?>
												<tr>
													<td><b>Tanggal Disetujui Ketua RT</b></td>
													<td> </td>
													<td> </td>
													<td> </td>
													<td><?= format_indo(date($d->tanggal_persetujuan_rt)); ?></td>
												</tr>
											<?php } elseif ($d->status ==  'Ditolak Ketua RT') { ?>
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
											<?php } elseif ($d->status ==  'Ditolak Kelurahan' && $d->tgl_persetujuan_admin != null) { ?>
												<tr>
													<td><b>Tanggal Ditolak Kelurahan</b></td>
													<td> </td>
													<td> </td>
													<td> </td>
													<td><?= format_indo(date($d->tgl_persetujuan_admin)); ?></td>
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
											<?php } elseif ($d->status ==  'Ditolak' && $d->tgl_persetujuan_admin != null) { ?>
												<tr>
													<td><b>Tanggal Ditolak Kelurahan</b></td>
													<td> </td>
													<td> </td>
													<td> </td>
													<td><?= format_indo(date($d->tgl_persetujuan_admin)); ?></td>
												</tr>
											<?php } ?>

											<?php if ($d->keterangan != null) { ?>
												<tr>
													<td><b>Keterangan</b></td>
													<td> </td>
													<td> </td>
													<td> </td>
													<td><?= $d->keterangan; ?></td>
												</tr>
											<?php } ?>
										<?php } ?>

										<?php if ($w->no_tupoksi != null && $w->no_registrasi != null && $w->no_kelurahan  != null && $w->no_kecamatan != null && $w->no_bulan != null && $w->no_tahun != null) { ?>
											<tr>
												<td><b>Nomor Surat Kelurahan</b></td>
												<td> </td>
												<td> </td>
												<td> </td>
												<td><?= $w->no_tupoksi; ?>/<?= $w->no_registrasi; ?>/<?= $w->no_kelurahan; ?>/<?= $w->no_kecamatan; ?>/<?= $w->no_bulan; ?>/<?= $w->no_tahun; ?>
												</td>
											</tr>
										<?php } ?>

										<?php if ($w->nomor_surat_rt != null) { ?>
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