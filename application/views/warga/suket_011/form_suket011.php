<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Form Pengajuan Surat Pengantar KTP</h1>
		<div class="float-right">
			<a href="#">
				<button id="btn_kembali" class="btn btn-sm btn-warning" type="reset">
					<i class="fa fa-arrow-left">
					</i> Kembali
				</button>
			</a>
		</div>
	</div>

	<!--Begin Content Profile-->
	<div class="row clearfix">
		<div class="col-xs-12 col-sm-2"></div>
		<div class="col-xs-12 col-sm-8">
			<div class="card">
				<div class="body">
					<form class="form-horizontal" id="form11" action="" method="">
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
									<label for="Nik" class="col-sm-3 col-form-label">NIK</label>
									<div class="col-sm-8">
										<div class="form-line">
											<input type="text" class="form-control" id="nik" name="nik" placeholder="NIK" value="">
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
									<label for="Nama" class="col-sm-3 col-form-label">Nama</label>
									<div class="col-sm-8">
										<div class="form-line">
											<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" value="">
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
											<textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Alamat"></textarea>
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
									<label for="rt" class="col-sm-3 col-form-label">Rt</label>
									<div class="col-sm-8">
										<div class="form-line">
											<input type="text" class="form-control" id="rt" name="rt" placeholder="rt" value="">
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
									<label for="kelurahan" class="col-sm-3 col-form-label">Kelurahan</label>
									<div class="col-sm-8">
										<div class="form-line">
											<input type="text" class="form-control" id="kelurahan" name="kelurahan" placeholder="kelurahan" value="">
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
									<label for="kecamatan" class="col-sm-3 col-form-label">Kecamatan</label>
									<div class="col-sm-8">
										<div class="form-line">
											<input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="kecamatan" value="">
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
									<label for="Agama" class="col-sm-3 col-form-label">Agama</label>
									<div class="col-sm-8">
										<div class="form-line">
											<select class="form-control" id="agama">
												<option>Pilih jenis agama...</option>
												<option value="Islam">Islam</option>
												<option value="Protestan">Protestan</option>
												<option value="Katholik">Katholik</option>
												<option value="Hindu">Hindu</option>
												<option value="Budha">Budha</option>
												<option value="Khonghucu">Khonghucu</option>
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
											<input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="">
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
									<label for="status_perkawinan" class="col-sm-3 col-form-label">Status Perkawinan</label>
									<div class="col-sm-8">
										<div class="form-line">
											<select class="form-control " id="status_perkawinan">
												<option>Pilih Status Perkawinan...</option>
												<option value="Kawin">Kawin</option>
												<option value="Belum Kawin">Belum Kawin</option>
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
									<label for="golongan_darah" class="col-sm-3 col-form-label">Golongan Darah</label>
									<div class="col-sm-8">
										<div class="form-line">
											<select class="form-control" id="golongan_darah">
												<option>Pilih Golongan Darah...</option>
												<option value="AB">AB</option>
												<option value="A">A</option>
												<option value="B">B</option>
												<option value="O">O</option>
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
									<label for="no_kk" class="col-sm-3 col-form-label">No. KK</label>
									<div class="col-sm-8">
										<div class="form-line">
											<input type="text" class="form-control" id="no_kk" name="no_kk" placeholder="No. KK" value="">
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
									<label for="Tanggal_tinggal" class="col-sm-3 col-form-label">Tanggal tinggal</label>
									<div class="col-sm-8">
										<div class="form-line">
											<input type="date" class="form-control" id="tanggal_tinggal" name="tanggal_tinggal" value="">
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
									<label for="no_surat_pindah" class="col-sm-3 col-form-label">No. Surat Pindah</label>
									<div class="col-sm-8">
										<div class="form-line">
											<input type="text" class="form-control" id="no_surat_pindah" name="no_surat_pindah" placeholder="No. surat_pindah" value="">
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
									<label for="tgl_surat_pindah" class="col-sm-3 col-form-label">Tgl. Surat Pindah</label>
									<div class="col-sm-8">
										<div class="form-line">
											<input type="date" class="form-control" id="tgl_surat_pindah" name="tgl_surat_pindah" value="">
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
									<label for="pas_foto" class="col-sm-3 col-form-label">Pas Foto</label>
									<div class="col-sm-8">
										<div class="input-group">
											<div class="custom-file">
												<input type="file" class="custom-file-input" id="pas_foto" name="pas_foto">
												<label class="custom-file-label upload-area" for="exampleInputFile">Upload Pas Foto</label>
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
									<label for="foto_kk" class="col-sm-3 col-form-label">Foto KK</label>
									<div class="col-sm-8">
										<div class="input-group">
											<div class="custom-file">
												<input type="file" class="custom-file-input" id="foto_kk" name="foto_kk">
												<label class="custom-file-label upload-area" for="exampleInputFile">Upload Foto KK</label>
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
									<label for="foto_surat_pindah" class="col-sm-3 col-form-label">Foto Surat Pindah</label>
									<div class="col-sm-8">
										<div class="input-group">
											<div class="custom-file">
												<input type="file" class="custom-file-input" id="foto_surat_pindah" name="foto_surat_pindah">
												<label class="custom-file-label upload-area" for="exampleInputFile">Upload Foto Surat Pindah</label>
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
