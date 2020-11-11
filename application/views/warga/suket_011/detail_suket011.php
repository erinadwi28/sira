<?php foreach ($detail_permohonan as $d) { ?>
	<?php if ($d->status ==  'Belum Tuntas') { ?>
		<!-- Begin Page Content -->
		<div class="container-fluid">

			<!-- Page Heading -->
			<div class="d-sm-flex align-items-center justify-content-between mb-4">
				<h1 class="h3 mb-0 text-gray-800">Detail Permohonan Surat</h1>

			</div>

			<div class="row">
				<div class="flash-data" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>
				<?php if ($this->session->flashdata('success')) : ?>
				<?php endif; ?>
				<div class="col-md-4 mb-4">

					<!-- Foto Profil -->
					<div class="card shadow mb-4">
						<div class="card-header py-3">
							<center>
								<h6 class="m-0 font-weight-bold text-primary">Pas Foto</h6>
							</center>
						</div>

						<div class="card-body" style="padding: 15px;">
							<?php
							foreach ($detail_suket as $pas_foto) { ?>
								<center>
									<a href="<?= base_url(); ?>/assets/uploads/warga/suket_011/<?= $pas_foto->pas_foto; ?>" data-gallery="mygallery" data-title="Foto KTP" data-toggle="lightbox">
										<img src="<?= base_url(); ?>/assets/uploads/warga/suket_011/<?= $pas_foto->pas_foto; ?>" alt="pas foto" class="img-fluid" width="200px">
									</a>

								</center>
							<?php } ?>
						</div>

						<div class="card-footer py-3">
							<?= form_open_multipart('warga/upload_pasfoto_suket011') ?>
							<?php
							foreach ($detail_suket as $suket011) { ?>
								<div class="form-group ml-2 mr-2">
									<div class="input-group">
										<div class="custom-file">
											<label class="custom-file-label" for="file-upload-profil">pilih pas foto...</label>
											<input type="file" class="custom-file-input" id="file-upload-profil" name="berkas[]">
											<!-- <input type="hidden" value="Foto Profil" name="keterangan[]"> -->
											<input type="hidden" class="form-control form-user-input" name="id_surat" id="id_surat" value="<?= $suket011->id_surat; ?>">
											<input type="hidden" class="form-control form-user-input" name="id_permohonan_surat" id="id_permohonan_surat" value="<?= $suket011->id_permohonan_surat; ?>">
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
							<?= form_close() ?>
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
							<?php
							foreach ($detail_suket as $foto_kk) {
							?>
								<center>
									<a href="<?= base_url(); ?>/assets/uploads/warga/suket_011/<?= $foto_kk->foto_kk; ?>" data-gallery="mygallery" data-title="Foto KK" data-toggle="lightbox">
										<img src="<?= base_url(); ?>/assets/uploads/warga/suket_011/<?= $foto_kk->foto_kk; ?>" alt="foto kk" class="img-fluid" width="200px">
									</a>
								</center>
							<?php } ?>
						</div>

						<div class="card-footer py-3">
							<?= form_open_multipart('warga/upload_foto_kk_suket011') ?>
							<?php
							foreach ($detail_suket as $suket011) { ?>
								<div class="form-group ml-2 mr-2">
									<div class="input-group">
										<div class="custom-file">
											<label class="custom-file-label" for="file-upload-ktp">pilih foto ktp...</label>
											<input type="file" class="custom-file-input" id="file-upload-ktp" name="berkas[]">
											<!-- <input type="hidden" value="Foto KTP" name="keterangan[]"> -->
											<input type="hidden" class="form-control form-user-input" name="id_surat" id="id_surat" value="<?= $suket011->id_surat; ?>">
											<input type="hidden" class="form-control form-user-input" name="id_permohonan_surat" id="id_permohonan_surat" value="<?= $suket011->id_permohonan_surat; ?>">
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
							<?= form_close() ?>
						</div>
					</div>

					<!-- Foto Surat Pindah -->
					<div class="card shadow mb-4">
						<div class="card-header py-3">
							<center>
								<h6 class="m-0 font-weight-bold text-primary">Foto Surat Pindah</h6>
							</center>
						</div>

						<div class="card-body" style="padding: 15px;">
							<?php
							foreach ($detail_suket as $foto_surat_pindah) {
							?>
								<center>
									<a href="<?= base_url(); ?>/assets/uploads/warga/suket_011/<?= $foto_surat_pindah->foto_surat_pindah; ?>" data-gallery="mygallery" data-title="Foto Surat Pindah" data-toggle="lightbox">
										<img src="<?= base_url(); ?>/assets/uploads/warga/suket_011/<?= $foto_surat_pindah->foto_surat_pindah; ?>" alt="foto surat pindah" class="img-fluid" width="200px">
									</a>
								</center>
							<?php } ?>
						</div>

						<div class="card-footer py-3">
							<?= form_open_multipart('warga/upload_foto_surat_pindah_suket011') ?>
							<?php
							foreach ($detail_suket as $suket011) { ?>
								<div class="form-group ml-2 mr-2">
									<div class="input-group">
										<div class="custom-file">
											<label class="custom-file-label" for="file-upload-ttd">pilih foto surat
												pindah...</label>
											<input type="file" class="custom-file-input" id="file-upload-ttd" name="berkas[]">
											<!-- <input type="hidden" value="Foto KTP" name="keterangan[]"> -->
											<input type="hidden" class="form-control form-user-input" name="id_surat" id="id_surat" value="<?= $suket011->id_surat; ?>">
											<input type="hidden" class="form-control form-user-input" name="id_permohonan_surat" id="id_permohonan_surat" value="<?= $suket011->id_permohonan_surat; ?>">
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
							<?= form_close() ?>
						</div>
					</div>

				</div>

				<div class="col-md-8 mb-4">
					<!-- Detail Data -->
					<div class="card shadow mb-4">
						<div class="card-header py-3">
							<h6 class="m-0 font-weight-bold text-primary text-center">SURAT PENGANTAR KTP</h6>
						</div>
						<div class="card-body">
							<?php foreach ($detail_suket as $detail) { ?>
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
											<td><b>Agama</b></td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td><?= $detail->agama; ?></td>
										</tr>
										<tr>
											<td><b>Pekerjaan</b></td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td><?= $detail->pekerjaan; ?></td>
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
											<td><?= format_indo(date($detail->tanggal_lahir)); ?></td>
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
											<td><b>Golongan Darah</b></td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td><?= $detail->golongan_darah; ?></td>
										</tr>
										<tr>
											<td><b>No. KK</b></td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td><?= $detail->no_kk; ?></td>
										</tr>
										<tr>
											<td><b>Tanggal Tinggal</b></td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td><?= format_indo(date($detail->tanggal_tinggal)); ?></td>
										</tr>
										<tr>
											<td><b>No. Surat Pindah</b></td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td><?= $detail->no_surat_pindah; ?></td>
										</tr>
										<tr>
											<td><b>Tgl Surat Pindah</b></td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td><?= $detail->tanggal_surat_pindah; ?></td>
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

						</div>
						<div class="card-footer">
							<div class="float-right">
								<?php foreach ($detail_suket as $w) { ?>
									<a href="<?= base_url() ?>warga/form_ubah_suket011/<?= $w->id_surat ?>">
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
				<div class="col-md-4 mb-4">

					<!-- Foto Profil -->
					<div class="card shadow mb-4">
						<div class="card-header py-3">
							<center>
								<h6 class="m-0 font-weight-bold text-primary">Pas Foto</h6>
							</center>
						</div>

						<div class="card-body" style="padding: 15px;">
							<?php
							foreach ($detail_suket as $pas_foto) { ?>
								<center>
									<a href="<?= base_url(); ?>/assets/uploads/warga/suket_011/<?= $pas_foto->pas_foto; ?>" data-gallery="mygallery" data-title="Foto KTP" data-toggle="lightbox">
										<img src="<?= base_url(); ?>/assets/uploads/warga/suket_011/<?= $pas_foto->pas_foto; ?>" alt="pas foto" class="img-fluid" width="200px">
									</a>
								</center>
							<?php } ?>
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
							<?php
							foreach ($detail_suket as $foto_kk) {
							?>
								<center>
									<a href="<?= base_url(); ?>/assets/uploads/warga/suket_011/<?= $foto_kk->foto_kk; ?>" data-gallery="mygallery" data-title="Foto KTP" data-toggle="lightbox">
										<img src="<?= base_url(); ?>/assets/uploads/warga/suket_011/<?= $foto_kk->foto_kk; ?>" alt="foto kk" class="img-fluid" width="200px">
									</a>
								</center>
							<?php } ?>
						</div>
					</div>

					<!-- Foto Surat Pindah -->
					<div class="card shadow mb-4">
						<div class="card-header py-3">
							<center>
								<h6 class="m-0 font-weight-bold text-primary">Foto Surat Pindah</h6>
							</center>
						</div>

						<div class="card-body" style="padding: 15px;">
							<?php
							foreach ($detail_suket as $foto_surat_pindah) {
							?>
								<center>
									<a href="<?= base_url(); ?>/assets/uploads/warga/suket_011/<?= $foto_surat_pindah->foto_surat_pindah; ?>" data-gallery="mygallery" data-title="Foto Surat Pindah" data-toggle="lightbox">
										<img src="<?= base_url(); ?>/assets/uploads/warga/suket_011/<?= $foto_surat_pindah->foto_surat_pindah; ?>" alt="foto surat pindah" class="img-fluid" width="200px">
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
							<h6 class="m-0 font-weight-bold text-primary text-center">SURAT PENGANTAR KTP</h6>
						</div>
						<div class="card-body">
							<?php foreach ($detail_suket as $detail) { ?>
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
											<td><b>Agama</b></td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td><?= $detail->agama; ?></td>
										</tr>
										<tr>
											<td><b>Pekerjaan</b></td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td><?= $detail->pekerjaan; ?></td>
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
											<td><?= format_indo(date($detail->tanggal_lahir)); ?></td>
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
											<td><b>Golongan Darah</b></td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td><?= $detail->golongan_darah; ?></td>
										</tr>
										<tr>
											<td><b>No. KK</b></td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td><?= $detail->no_kk; ?></td>
										</tr>
										<tr>
											<td><b>Tanggal Tinggal</b></td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td><?= format_indo(date($detail->tanggal_tinggal)); ?></td>
										</tr>
										<tr>
											<td><b>No. Surat Pindah</b></td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td><?= $detail->no_surat_pindah; ?></td>
										</tr>
										<tr>
											<td><b>Tgl Surat Pindah</b></td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td><?= format_indo(date($detail->tanggal_surat_pindah)); ?></td>
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
											<?php } elseif ($d->status ==  'Ditolak') { ?>
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

										<?php if ($detail->no_tupoksi != null && $detail->no_registrasi != null && $detail->no_kelurahan  != null && $detail->no_bulan != null && $detail->no_tahun != null) { ?>
											<tr>
												<td><b>Nomor Surat Kelurahan</b></td>
												<td> </td>
												<td> </td>
												<td> </td>
												<td><?= $detail->no_tupoksi; ?>/<?= $detail->no_registrasi; ?>/<?= $detail->no_kelurahan; ?>/<?= $detail->no_bulan; ?>/<?= $detail->no_tahun; ?>
												</td>
											</tr>
										<?php } ?>

										<?php if ($detail->nomor_surat_rt != null) { ?>
											<tr>
												<td><b>Nomor Surat Ketua RT</b></td>
												<td> </td>
												<td> </td>
												<td> </td>
												<td><?= $detail->nomor_surat_rt; ?></td>
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
