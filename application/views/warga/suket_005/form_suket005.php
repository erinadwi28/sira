<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Form Pengajuan Surat Izin Keramaian</h1>
	</div>

	<!--Begin Content Profile-->
	<div class="row clearfix">
		<div class="col-xs-12 col-sm-2"></div>
		<div class="col-xs-12 col-sm-8">
			<div class="card">
				<div class="body">
					<form class="form-horizontal" id="form5" action="" method="">
						<div class="form-group">
							<div class="form-group aria-hidden" style="margin-top: 20px;">
								<div class="form-group row" style="margin-left: 10px;">
									<!-- <label for="Nomor_surat_admin" class="col-sm-3 col-form-label">No.Surat Admin</label> -->
									<div class="col-sm-8">
										<div class="form-line focused">
											<input type="hidden" class="form-control" id="nomor_surat_admin" name="nomor_surat_admin" placeholder="No Surat diisi petugas" value="">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="form-group" style="margin-top: 20px;">
								<div class="form-group row" style="margin-left: 10px;">
									<!-- <label for="Nomor_surat_rt" class="col-sm-3 col-form-label">No.Surat RT</label> -->
									<div class="col-sm-8">
										<div class="form-line focused">
											<input type="hidden" class="form-control" id="nomor_surat_rt" name="nomor_surat_rt" placeholder="No Surat diisi petugas" value="">
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="form-group" style="margin-top: 20px;">
								<div class="form-group row" style="margin-left: 10px;">
									<label for="Nama" class="col-sm-3 col-form-label">Nama Lengkap</label>
									<div class="col-sm-8">
										<div class="form-line">
											<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
											<i class="fas fa-check-circle"></i>
											<i class="fas fa-exclamation-circle"></i>
											<small>Error massage</small>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="form-group" style="margin-top: 20px;">
								<div class="form-group row" style="margin-left: 10px; ">
									<label for="Tempat_lahir" class="col-sm-3 col-form-label">Tempat Lahir</label>
									<div class="col-sm-8">
										<div class="form-line">
											<input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" value="">
											<i class="fas fa-check-circle"></i>
											<i class="fas fa-exclamation-circle"></i>
											<small>Error massage</small>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="form-group" style="margin-top: 20px;">
								<div class="form-group row" style="margin-left: 10px;">
									<label for="Tanggal_lahir" class="col-sm-3 col-form-label">Tanggal Lahir</label>
									<div class="col-sm-8">
										<div class="form-line">
											<input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
											<i class="fas fa-check-circle"></i>
											<i class="fas fa-exclamation-circle"></i>
											<small>Error massage</small>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="form-group" style="margin-top: 20px;">
								<div class="form-group row" style="margin-left: 10px;">
									<label for="Alamat" class="col-sm-3 col-form-label">Alamat</label>
									<div class="col-sm-8">
										<div class="form-line">
											<textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Alamat Lengkap"></textarea>
											<i class="fas fa-check-circle"></i>
											<i class="fas fa-exclamation-circle"></i>
											<small>Tidak boleh kosong</small>
										</div>

									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="form-group" style="margin-top: 20px;">
								<div class="form-group row" style="margin-left: 10px;">
									<label for="Nama_kegiatan" class="col-sm-3 col-form-label">Nama Kegiatan</label>
									<div class="col-sm-8">
										<div class="form-line">
											<input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan" placeholder="Cth.Pernikahan,Pengajian Akbar,dll.">
											<i class="fas fa-check-circle"></i>
											<i class="fas fa-exclamation-circle"></i>
											<small>Error massage</small>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="form-group" style="margin-top: 20px;">
								<div class="form-group row" style="margin-left: 10px;">
									<label for="Hari_kegiatan" class="col-sm-3 col-form-label">Hari Kegiatan</label>
									<div class="col-sm-8">
										<div class="form-line">
											<select class="form-control " id="hari_kegiatan">
												<option>Pilih Hari </option>
												<option value="SENIN">SENIN</option>
												<option value="SELASA">SELASA</option>
												<option value="RABU">RABU</option>
												<option value="KAMIS">KAMIS</option>
												<option value="JUMAT">JUMAT</option>
												<option value="SABTU">SABTU</option>
												<option value="MINGGU">MINGGU</option>
											</select>
											<i class="fas fa-check-circle"></i>
											<i class="fas fa-exclamation-circle"></i>
											<small>Error massage</small>
										</div>
									</div>
								</div>
							</div>
						</div>
							<div class="form-group">
								<div class="form-group" style="margin-top: 20px;">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Tanggal_kegiatan" class="col-sm-3 col-form-label">Tanggal Kegiatan</label>
										<div class="col-sm-8">
											<div class="form-line">
												<input type="date" class="form-control" id="tanggal_kegiatan" name="tanggal_kegiatan">
												<i class="fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Error massage</small>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="form-group" style="margin-top: 20px;">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Tempat_kegiatan" class="col-sm-3 col-form-label">Tempat Kegiatan</label>
										<div class="col-sm-8">
											<div class="form-line">
												<textarea class="form-control" id="tempat_kegiatan" name="tempat_kegiatan" rows="3" placeholder="Tempat ditulis lengkap">
										</textarea>
												<i class="fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Error massage</small>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="form-group" style="margin-top: 20px;">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Jam_kegiatan" class="col-sm-3 col-form-label">Jam Kegiatan</label>
										<div class="col-sm-8">
											<div class="form-line">
												<input type="text" class="form-control" id="jam_kegiatan" name="jam_kegiatan" placeholder="">
												<i class="fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Error massage</small>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="form-group" style="margin-top: 20px;">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Foto_ktp" class="col-sm-3 col-form-label">Foto KTP</label>
										<div class="col-sm-8">
											<div class="input-group">
												<div class="custom-file">
													<input type="file" class="custom-file-input" id="foto_ktp" name="foto_ktp">
													<label class="custom-file-label upload-area" for="exampleInputFile">Upload Foto KTP</label>
													<i class="fas fa-check-circle"></i>
													<i class="fas fa-exclamation-circle"></i>
													<small>Error massage</small>
												</div>
											</div>

										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="form-group" style="margin-top: 20px;">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="tanggal_permohonan" class="col-sm-3 col-form-label">Tanggal Permohonan</label>
										<div class="col-sm-8">
											<div class="form-line">
												<input type="date" class="form-control" id="tanggal_permohonan" name="tanggal_permohonan" value="">
												<i class="fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Error massage</small>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="form-group" style="margin-top: 20px;">
									<div class="form-group row" style="margin-left: 10px;">
										<!-- <label for="Tanggal_pembuatan" class="col-sm-3 col-form-label">Tanggal Pembuatan</label> -->
										<div class="col-sm-8">
											<div class="form-line">
												<input type="hidden" class="form-control" id="tanggal_pembuatan" name="Tanggal_pembuatan" value="">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
				</div>
				<div class="card-footer">
					<div class="float-left">
						<a href="#">
							<button id="btn_kembali" class="btn btn-sm btn-warning" type="reset">
								<i class="fa fa-arrow-left">
								</i> Kembali
							</button>
						</a>
					</div>
					<div class="float-right">
						<a href="#">
							<button id="btn_batal" class="btn btn-sm btn-danger" type="reset">
								<i class="fa fa-times nav-icon">
								</i> Batal
							</button>
						</a>
						<a href="#">
							<button id="btn_simpan" class="btn btn-sm btn-success" type="submit">
								<i class="far fa-save nav-icon">
								</i> Simpan
							</button>
						</a>
					</div>
				</div>
				</form>
			</div>
		</div>
		<!--End Content Profile-->
	</div>
</div>
<!-- /.container-fluid -->
