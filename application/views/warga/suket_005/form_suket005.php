<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Form Pengajuan Surat Izin Keramaian</h1>
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
								<div class="form-group" style="margin-top: 15px;">
									<div class="form-group row" style="margin-left: 10px;">
										<!-- 	<label for="Nomor_surat_rt" class="col-sm-3 col-form-label">No.Surat RT</label> -->
										<div class="col-sm-8">
											<div class="form-line focused">
												<input type="hidden" class="form-control" id="nomor_surat_rt" name="nomor_surat_rt" placeholder="No Surat diisi petugas" value="" required="">
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group" style="margin-top: 15px;">
										<div class="form-group row" style="margin-left: 10px;">
											<label for="Nama" class="col-sm-3 col-form-label">Nama</label>
											<div class="col-sm-8">
												<div class="form-line focused">
													<input type="text" class="form-control" id="nama" name="nama" value="<?= $detail->nama; ?>" required="">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Tempat_lahir" class="col-sm-3 col-form-label">Tempat Lahir</label>
										<div class="col-sm-8">
											<div class="form-line focused">
												<input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?= $detail->tempat_lahir; ?>" required="">
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
										<label for="Alamat" class="col-sm-3 col-form-label">Alamat</label>
										<div class="col-sm-8">
											<div class="form-line">
												<textarea class="form-control" id="alamat" name="alamat" rows="3"><?= $detail->alamat; ?></textarea>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group" style="margin-top: 15px;">
										<div class="form-group row" style="margin-left: 10px;">
											<label for="Nama_kegiatan" class="col-sm-3 col-form-label">Nama Kegiatan</label>
											<div class="col-sm-8">
												<div class="form-line focused">
													<input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan" placeholder="Contoh : Pernikahan,Pengajian Akbar,dll..." value="" required="">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Hari_kegiatan" class="col-sm-3 col-form-label">Hari</label>
										<div class="col-sm-8">
											<div class="form-line">
												<select class="form-control" id="hari" name="hari">
													<option value="Senin" class="form-user-input">Senin</option>
													<option value="Selasa" class="form-user-input">Selasa</option>
													<option value="Rabu" class="form-user-input">Rabu</option>
													<option value="Kamis" class="form-user-input">Kamis</option>
													<option value="Jumat" class="form-user-input">Jumat</option>
													<option value="Sabtu" class="form-user-input">Sabtu</option>
													<option value="Minggu" class="form-user-input">Minggu</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Tanggal_kegiatan" class="col-sm-3 col-form-label">Tanggal Kegiatan</label>
										<div class="col-sm-8">
											<div class="form-line focused">
												<input type="date" class="form-control" id="tanggal_kegiatan" name="tanggal_kegiatan" placeholder="Isi Tanggal Kegiatan..." value="" required="">
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Tempat_kegiatan" class="col-sm-3 col-form-label">Tempat</label>
										<div class="col-sm-8">
											<div class="form-line">
												<textarea class="form-control" id="tempat_kegiatan" name="tempat_kegiatan" rows="3" placeholder="Tempat ditulis lengkap..."></textarea>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Jam_kegiatan" class="col-sm-3 col-form-label">Jam Kegiatan</label>
										<div class="col-sm-8">
											<div class="form-line focused">
												<input type="text" class="form-control" id="jam_kegiatan" name="jam_kegiatan" placeholder="Isi Jam Kegiatan..." value="" required="">
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
									<div class="form-group">
										<div class="form-group row" style="margin-left: 10px;">
											<label for="foto_ktp" class="col-sm-3 col-form-label">Foto KTP</label>
											<div class="col-sm-8">
												<div class="input-group">
													<div class="custom-file">
														<input type="file" class="custom-file-input" id="foto_ktp" name="foto_ktp">
														<label class="custom-file-label upload-area" for="exampleInputFile">Pilih File...</label>
													</div>
												</div>
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
</div>
<!-- End of Main Content -->