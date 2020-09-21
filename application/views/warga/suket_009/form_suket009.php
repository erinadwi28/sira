<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Form Pengajuan Surat Keterangan Kematian</h1>
	</div>

	<!--Begin Content Profile-->
	<div class="row clearfix">
		<div class="col-xs-12 col-sm-2"></div>
		<div class="col-xs-12 col-sm-8">
			<div class="card">
				<div class="body">
					<form class="form-horizontal" id="form9" action="" method="">
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
									<label for="Nama_alm" class="col-sm-3 col-form-label">Nama Alm</label>
									<div class="col-sm-8">
										<div class="form-line">
											<input type="text" class="form-control" id="nama_alm" name="nama_alm" placeholder="Nama Lengkap Alm" value="">
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
									<label for="Jenis_kelamin" class="col-sm-3 col-form-label">Jenis Kelamin</label>
									<div class="col-sm-8">
										<div class="form-line">
											<select class="form-control " id="jenis_kelamin">
												<option>Pilih jenis kelamin...</option>
												<option value="Laki-laki">Laki-laki</option>
												<option value="Perempuan">Perempuan</option>
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
										<label for="tempat_kematian" class="col-sm-3 col-form-label">Tempat Kematian</label>
										<div class="col-sm-8">
											<div class="form-line">
												<textarea class="form-control" id="tempat_kematian" name="tempat_kematian" rows="3" placeholder="Tempat/Alamat Kematian"></textarea>
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
									<div class="form-group row" style="margin-left: 10px; ">
										<label for="Umur" class="col-sm-3 col-form-label">Umur</label>
										<div class="col-sm-8">
											<div class="form-line">
												<input type="text" class="form-control" id="umur" name="umur" placeholder="Umur" value="">
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
										<label for="tempat_kediaman" class="col-sm-3 col-form-label">Tempat Kediaman</label>
										<div class="col-sm-8">
											<div class="form-line">
												<textarea class="form-control" id="tempat_kediaman" name="tempat_kediaman" rows="3" placeholder="Tempat/Alamat Kematian"></textarea>
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
										<label for="Hari_meninggal" class="col-sm-3 col-form-label">Hari meninggal</label>
										<div class="col-sm-8">
											<div class="form-line">
												<select class="form-control " id="hari_meninggal">
													<option>Pilih Hari Meninggal...</option>
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
										<label for="Tanggal_meninggal" class="col-sm-3 col-form-label">Tanggal meninggal</label>
										<div class="col-sm-8">
											<div class="form-line">
												<input type="date" class="form-control" id="tanggal_meninggal" name="tanggal_kegiatan">
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
										<label for="Alasan_meninggal" class="col-sm-3 col-form-label">Alasan Meninggal</label>
										<div class="col-sm-8">
											<div class="form-line">
												<input type="text" class="form-control" id="alasan_meninggal" name="alasan_meninggal" placeholder="alasan_meninggal" value="">
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
										<label for="tanggal_permohonan" class="col-sm-3 col-form-label">Tgl. Permohonan</label>
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
