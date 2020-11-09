<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Form Pengajuan Surat Pengantar KTP</h1>
		<a href="<?= base_url('warga') ?>">
			<button id="btn_kembali" class="btn btn-sm btn-warning" type="">
				<i class="fa fa-arrow-left">
				</i> Kembali
			</button>
		</a>

	</div>

	<!--Begin Content Profile-->
	<div class="row clearfix">
		<div class="col-xs-12 col-sm-2"></div>
		<div class="col-xs-12 col-sm-8">
			<div class="card mb-5">
				<div class="body">
					<?php
					foreach ($detail_profil as $detail) {

					?>
						<form class="form-horizontal" id="form11" action="<?= base_url('warga/aksi_tambah_permohonan_suket011') ?>" method="POST">
							<div class="form-group">
								<div class="form-group">
									<div class="form-group row" style="margin-top: 15px; margin-left: 10px;">
										<label for="NIK" class="col-sm-3 col-form-label">NIK</label>
										<div class="col-sm-8">
											<div class="form-line">
												<input type="text" class="form-control" id="nik" name="nik" value="<?= $detail->nik; ?>">
												<i class=" fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Error massage</small>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Nama" class="col-sm-3 col-form-label">Nama Lengkap</label>
										<div class="col-sm-8">
											<div class="form-line">
												<input type="text" class="form-control" id="nama" name="nama" value="<?= $detail->nama; ?>">
												<i class=" fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Error massage</small>
											</div>
										</div>

									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Alamat" class="col-sm-3 col-form-label">Alamat</label>
										<div class="col-sm-8">
											<div class="form-line">
												<input type="text" class="form-control" id="alamat" name="alamat" value="<?= $detail->alamat; ?>">
												<i class=" fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Error massage</small>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Rt" class="col-sm-3 col-form-label">RT</label>
										<div class="col-sm-8">
											<div class="form-line">
												<input type="text" class="form-control" id="rt" name="rt" value="<?= $detail->rt; ?>">
												<i class=" fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Error massage</small>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Kelurahan" class="col-sm-3 col-form-label">Kelurahan</label>
										<div class="col-sm-8">
											<div class="form-line">
												<input type="text" class="form-control" id="kelurahan" name="kelurahan" value="<?= $detail->kelurahan; ?>">
												<i class=" fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Error massage</small>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Kecamatan" class="col-sm-3 col-form-label">Kecamatan</label>
										<div class="col-sm-8">
											<div class="form-line">
												<input type="text" class="form-control" id="kecamatan" name="kecamatan" value="<?= $detail->kecamatan; ?>">
												<i class=" fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Error massage</small>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Jenis_kelamin" class="col-sm-3 col-form-label">Jenis Kelamin</label>
										<div class="col-sm-8">
											<div class="form-line">
												<select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
													<option value="pilih jenis kelamin..." class="form-user-input">Pilih jenis kelamin...</option>
													<option value="Laki-Laki" <?= ($detail->jenis_kelamin == 'Laki-Laki' ? ' selected' : ''); ?> class="form-user-input">Laki-Laki
													</option>
													<option value="Perempuan" <?= ($detail->jenis_kelamin == 'Perempuan' ? ' selected' : ''); ?> class="form-user-input">Perempuan
													</option>
												</select>
												<i class=" fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Error massage</small>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Agama" class="col-sm-3 col-form-label">Agama</label>
										<div class="col-sm-8">
											<div class="form-line">
												<select class="form-control form-user-input" name="agama" id="agama">
													<option value="Pilih jenis agama..." class="form-user-input">Pilih jenis agama...</option>
													<option value="Islam" <?= ($detail->agama == 'Islam' ? ' selected' : ''); ?> class="form-user-input">Islam</option>
													<option value="Protestan" <?= ($detail->agama == 'Protestan' ? ' selected' : ''); ?> class="form-user-input">Protestan
													</option>
													<option value="Katholik" <?= ($detail->agama == 'Katholik' ? ' selected' : ''); ?> class="form-user-input">Katholik
													</option>
													<option value="Hindu" <?= ($detail->agama == 'Hindu' ? ' selected' : ''); ?> class="form-user-input">Hindu</option>
													<option value="Budha" <?= ($detail->agama == 'Budha' ? ' selected' : ''); ?> class="form-user-input">Budha</option>
													<option value="Khonghucu" <?= ($detail->agama == 'Khonghucu' ? ' selected' : ''); ?> class="form-user-input">Khonghucu
													</option>
												</select>
												<i class=" fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Error massage</small>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="pekerjaan" class="col-sm-3 col-form-label">Pekerjaan</label>
										<div class="col-sm-8">
											<div class="form-line">
												<input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="<?= $detail->pekerjaan; ?>">
												<i class=" fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Error massage</small>
											</div>
										</div>

									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Tempat_lahir" class="col-sm-3 col-form-label">Tempat Lahir</label>
										<div class="col-sm-8">
											<div class="form-line focused">
												<input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" value="<?= $detail->tempat_lahir; ?>">
												<i class=" fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Error massage</small>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Tanggal_lahir" class="col-sm-3 col-form-label">Tanggal Lahir</label>
										<div class="col-sm-8">
											<div class="form-line">
												<input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?= $detail->tanggal_lahir; ?>">
												<i class=" fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Error massage</small>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="status_perkawinan" class="col-sm-3 col-form-label">Status Perkawinan</label>
										<div class="col-sm-8">
											<div class="form-line">
												<select class="form-control" id="status_perkawinan" name="status_perkawinan">
													<option value="Pilih status perkawinan..." class="form-user-input">Pilih status perkawinan...</option>
													<option value="Belum Kawin" <?= ($detail->status_perkawinan == 'Belum Kawin' ? ' selected' : ''); ?> class="form-user-input">Belum Kawin
													</option>
													<option value="Kawin" <?= ($detail->status_perkawinan == 'Kawin' ? ' selected' : ''); ?> class="form-user-input">Kawin
													</option>
												</select>
												<i class=" fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Error massage</small>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="golongan_darah" class="col-sm-3 col-form-label">Golongan Darah</label>
										<div class="col-sm-8">
											<div class="form-line">
												<select class="form-control" id="golongan_darah" name="golongan_darah">
													<option value="AB" <?= ($detail->golongan_darah == 'AB' ? ' selected' : ''); ?> class="form-user-input">AB</option>
													<option value="A" <?= ($detail->golongan_darah == 'A' ? ' selected' : ''); ?> class="form-user-input">A</option>
													<option value="B" <?= ($detail->golongan_darah == 'B' ? ' selected' : ''); ?> class="form-user-input">B</option>
													<option value="O" <?= ($detail->golongan_darah == 'O' ? ' selected' : ''); ?> class="form-user-input">O</option>
													<option value="Tidak tau" <?= ($detail->golongan_darah == 'Tidak tau' ? ' selected' : ''); ?> class="form-user-input">Tidak tau</option>
												</select>
												<i class=" fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Error massage</small>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="No_kk" class="col-sm-3 col-form-label">No. KK</label>
										<div class="col-sm-8">
											<div class="form-line">
												<input type="text" class="form-control" id="no_kk" name="no_kk" value="<?= $detail->no_kk; ?>">
												<i class=" fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Error massage</small>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Tanggal_tinggal" class="col-sm-3 col-form-label">Tanggal Tinggal</label>
										<div class="col-sm-8">
											<div class="form-line">
												<input type="date" class="form-control" id="tanggal_tinggal" name="tanggal_tinggal">
												<i class=" fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Error massage</small>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="No_surat_pindah" class="col-sm-3 col-form-label">No. Surat Pindah</label>
										<div class="col-sm-8">
											<div class="form-line">
												<input type="text" class="form-control" id="no_surat_pindah" name="no_surat_pindah" placeholder="masukkan nomor surat pindah disini...">
												<em class="float-center small text-danger">*Optional</em>
												<i class=" fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Error massage</small>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Tgl_surat_pindah" class="col-sm-3 col-form-label">Tgl Surat Pindah</label>
										<div class="col-sm-8">
											<div class="form-line">
												<input type="date" class="form-control" id="tgl_surat_pindah" name="tgl_surat_pindah">
												<em class="float-center small text-danger">*Optional</em>
												<i class=" fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Error massage</small>
											</div>
										</div>
									</div>
								</div>

								<input type="hidden" class="form-control" id="id_nama_surat" name="id_nama_surat" value="11">
								<input type="hidden" class="form-control" id="id_warga" name="id_warga" value="<?= $detail->id_warga; ?>">
								<input type="hidden" class="form-control" id="status" name="status" value="Belum Tuntas">
							</div>
				</div>
				<div class="card-footer">
					<div class="float-right">
						<a href="#">
							<button id="btn_setuju" class="btn btn-sm btn-success" type="submit">
								<i class="far fa-save nav-icon">
								</i> Simpan
							</button>
						</a>
					</div>
				</div>
				</form>
			<?php } ?>
			</div>
			</form>
		</div>
	</div>
	<!--End Content Profile-->
</div>
</div>
<!-- /.container-fluid -->

<!-- End of Main Content -->
