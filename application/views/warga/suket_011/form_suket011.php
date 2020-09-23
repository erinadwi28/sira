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
			<div class="card">
				<div class="body">
					<?php
					foreach ($detail_profil as $detail) {

					?>
						<form class="form-horizontal">
							<div class="form-group">
								<div class="form-group" style="margin-top: 15px;">
									<div class="form-group row" style="margin-left: 10px;">
										<!-- <label for="Nomor_surat_admin" class="col-sm-3 col-form-label">No.Surat Admin</label> -->
										<div class="col-sm-8">
											<div class="form-line focused">
												<input type="hidden" class="form-control" id="nomor_surat_admin" name="nomor_surat_admin" placeholder="No Surat diisi petugas" value="" required="">
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group" style="margin-top: 15px;">
										<div class="form-group row" style="margin-left: 10px;">
											<!-- 
										<label for="Nomor_surat_rt" class="col-sm-3 col-form-label">No.Surat RT</label> -->
											<div class="col-sm-8">
												<div class="form-line focused">
													<input type="hidden" class="form-control" id="nomor_surat_rt" name="nomor_surat_rt" placeholder="No Surat diisi petugas" value="" required="">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="NIK" class="col-sm-3 col-form-label">NIK</label>
										<div class="col-sm-8">
											<div class="form-line">
												<input type="text" class="form-control" id="nik" name="nik" value="<?= $detail->nik; ?>" required="">
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Nama" class="col-sm-3 col-form-label">Nama Lengkap</label>
										<div class="col-sm-8">
											<div class="form-line">
												<input type="text" class="form-control" id="nama" name="nama" value="<?= $detail->nama; ?>" required="">
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Alamat" class="col-sm-3 col-form-label">Alamat</label>
										<div class="col-sm-8">
											<div class="form-line">
												<input type="text" class="form-control" id="alamat" name="alamat" value="<?= $detail->alamat; ?>" required="">
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Rt" class="col-sm-3 col-form-label">RT</label>
										<div class="col-sm-8">
											<div class="form-line">
												<input type="text" class="form-control" id="rt" name="rt" value="<?= $detail->rt; ?>" required="">
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Kelurahan" class="col-sm-3 col-form-label">Kelurahan</label>
										<div class="col-sm-8">
											<div class="form-line">
												<input type="text" class="form-control" id="kelurahan" name="kelurahan" value="<?= $detail->kelurahan; ?>" required="">
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Kecamatan" class="col-sm-3 col-form-label">Kecamatan</label>
										<div class="col-sm-8">
											<div class="form-line">
												<input type="text" class="form-control" id="kecamatan" name="kecamatan" value="<?= $detail->kecamatan; ?>" required="">
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
													<option value="Laki-Laki" <?= ($detail->jenis_kelamin == 'Laki-Laki' ? ' selected' : ''); ?> class="form-user-input">Laki-Laki
													</option>
													<option value="Perempuan" <?= ($detail->jenis_kelamin == 'Perempuan' ? ' selected' : ''); ?> class="form-user-input">Perempuan
													</option>
												</select>
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
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Tempat_lahir" class="col-sm-3 col-form-label">Tempat Lahir</label>
										<div class="col-sm-8">
											<div class="form-line focused">
												<input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" value="<?= $detail->tempat_lahir; ?>" required="">
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Tanggal_lahir" class="col-sm-3 col-form-label">Tanggal Lahir</label>
										<div class="col-sm-8">
											<div class="form-line">
												<input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?= $detail->tanggal_lahir; ?>" required="">
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
													<option value="Belum Kawin" <?= ($detail->status_perkawinan == 'Belum Kawin' ? ' selected' : ''); ?> class="form-user-input">Belum Kawin
													</option>
													<option value="Kawin" <?= ($detail->status_perkawinan == 'Kawin' ? ' selected' : ''); ?> class="form-user-input">Kawin
													</option>
												</select>
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
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="No_kk" class="col-sm-3 col-form-label">No. KK</label>
										<div class="col-sm-8">
											<div class="form-line">
												<input type="text" class="form-control" id="no_kk" name="no_kk" value="<?= $detail->no_kk; ?>" required="">
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Tanggal_tinggal" class="col-sm-3 col-form-label">Tanggal Tinggal</label>
										<div class="col-sm-8">
											<div class="form-line">
												<input type="date" class="form-control" id="tanggal_tinggal" name="tanggal_tinggal" value="" required="">
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="No_surat_pindah" class="col-sm-3 col-form-label">No. Surat Pindah</label>
										<div class="col-sm-8">
											<div class="form-line">
												<input type="text" class="form-control" id="no_surat_pindah" name="no_surat_pindah" placeholder="Isikan nomor surat pindah..." value="" required="">
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Tgl_surat_pindah" class="col-sm-3 col-form-label">Tgl Surat Pindah</label>
										<div class="col-sm-8">
											<div class="form-line">
												<input type="date" class="form-control" id="tgl_surat_pindah" name="tgl_surat_pindah" value="" required="">
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="pas_foto" class="col-sm-3 col-form-label">Pas Foto</label>
										<div class="col-sm-8">
											<div class="input-group">
												<div class="custom-file">
													<input type="file" class="custom-file-input" id="pas_foto" name="pas_foto">
													<label class="custom-file-label upload-area" for="exampleInputFile">Pilih File...</label>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="foto_kk" class="col-sm-3 col-form-label">Foto KK</label>
										<div class="col-sm-8">
											<div class="input-group">
												<div class="custom-file">
													<input type="file" class="custom-file-input" id="foto_kk" name="foto_kk">
													<label class="custom-file-label upload-area" for="exampleInputFile">Pilih File...</label>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="foto_surat_pindah" class="col-sm-3 col-form-label">Foto Surat Pindah</label>
										<div class="col-sm-8">
											<div class="input-group">
												<div class="custom-file">
													<input type="file" class="custom-file-input" id="foto_surat_pindah" name="foto_surat_pindah">
													<label class="custom-file-label upload-area" for="exampleInputFile">Pilih File...</label>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Tanggal_permohonan" class="col-sm-3 col-form-label">Tanggal Permohonan</label>
										<div class="col-sm-8">
											<div class="form-line">
												<input type="date" class="form-control" id="tanggal_permohonan" name="tanggal_permohonan" value="" required="">
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<!-- <label for="Tanggal_pembuatan" class="col-sm-3 col-form-label">Tanggal Pembuatan</label> -->
										<div class="col-sm-8">
											<div class="form-line">
												<input type="hidden" class="form-control" id="tanggal_pembuatan" name="tanggal_pembuatan" value="" required="">
											</div>
										</div>
									</div>
								</div>
							</div>
				</div>
				<div class="card-footer">
					<div class="float-right">
						<a href="#">
							<button id="btn_tolak" class="btn btn-sm btn-danger" type="reset">
								<i class="fa fa-times nav-icon">
								</i> Batal
							</button>
						</a>
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
		</div>
	</div>
	<!--End Content Profile-->
</div>
<!-- /.container-fluid -->

<!-- End of Main Content -->