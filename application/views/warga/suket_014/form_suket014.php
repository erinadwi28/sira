<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Form Pengajuan Surat Pindah</h1>
	</div>

	<!--Begin Content Profile-->
	<div class="row clearfix">
		<div class="col-xs-12 col-sm-2"></div>
		<div class="col-xs-12 col-sm-8">
			<div class="card">
				<div class="body">
					<form class="form-horizontal" id="form14" action="" method="">
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
								<div class="form-group row" style="margin-left: 10px;">
									<label for="kewarganegaraan" class="col-sm-3 col-form-label">Kewarganegaraan</label>
									<div class="col-sm-8">
										<div class="form-line">
											<select class="form-control " id="kewarganegaraan">
												<option>Pilih Kewarganegaraan...</option>
												<option value="WNI">WNI</option>
												<option value="WNA">WNA</option>
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
									<label for="pendidikan_terakhir" class="col-sm-3 col-form-label">Pendidikan Terakhir</label>
									<div class="col-sm-8">
										<div class="form-line">
											<select class="form-control" id="pendidikan_terakhir">
												<option>Pilih Pendidikan Terakhir...</option>
												<option value="TAMAT SD / SEDERAJAT" class="form-user-input">TAMAT SD / SEDERAJAT</option>
												<option value="SLTP / SEDERAJAT" class="form-user-input">SLTP / SEDERAJAT</option>
												<option value="TIDAK / BELUM SEKOLAH" class="form-user-input">TIDAK / BELUM SEKOLAH</option>
												<option value="SLTA / SEDERAJAT" class="form-user-input">SLTA / SEDERAJAT</option>
												<option value="BELUM TAMAT SD / SEDERAJAT" class="form-user-input">BELUM TAMAT SD / SEDERAJAT</option>
												<option value="DIPLOMA IV / STRATA I" class="form-user-input">DIPLOMA IV / STRATA I</option>
												<option value="AKADEMI / DIPLOMA III / S.MUDA" class="form-user-input">AKADEMI / DIPLOMA III / S.MUDA</option>
												<option value="DIPLOMA I / II" class="form-user-input">DIPLOMA I / II</option>
												<option value="STRATA II" class="form-user-input">STRATA II</option>
												<option value="STRATA III" class="form-user-input">STRATA III</option>
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
									<label for="Pekerjaan" class="col-sm-3 col-form-label">Pekerjaan</label>
									<div class="col-sm-8">
										<div class="form-line">
											<select class="form-control" id="pekerjaan">
												<option>Pilih Jenis Pekerjaan...</option>
												<option value="PNS">PNS</option>
												<option value="Swasta">Swasta</option>
												<option value="Wirausaha">Wirausaha</option>
												<option value="Buruh">Buruh</option>
												<option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
												<option value="Lainnya">Lainnya</option>
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
									<label for="alamat_asal" class="col-sm-3 col-form-label">Alamat Asal</label>
									<div class="col-sm-8">
										<div class="form-line">
											<textarea class="form-control" id="alamat_asal" name="alamat_asal" rows="3" placeholder="Alamat"></textarea>
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
									<label for="Tanggal_kk" class="col-sm-3 col-form-label">Tanggal KK</label>
									<div class="col-sm-8">
										<div class="form-line">
											<input type="date" class="form-control" id="tanggal_kk" name="tanggal_kk" value="">
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
									<label for="alamat_pindah" class="col-sm-3 col-form-label">Alamat Pindah</label>
									<div class="col-sm-8">
										<div class="form-line">
											<input class="form-control" id="alamat_pindah" name="alamat_pindah" rows="3" placeholder="Alamat"></input>
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
									<label for="kelurahan_pindah" class="col-sm-3 col-form-label">kelurahan Pindah</label>
									<div class="col-sm-8">
										<div class="form-line">
											<input class="form-control" id="kelurahan_pindah" name="kelurahan_pindah" rows="3" placeholder="Kelurahan"></input>
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
									<label for="kecamatan_pindah" class="col-sm-3 col-form-label">kecamatan Pindah</label>
									<div class="col-sm-8">
										<div class="form-line">
											<input class="form-control" id="kecamatan_pindah" name="kecamatan_pindah" rows="3" placeholder="Kecamatan"></input>
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
									<label for="kabupaten_pindah" class="col-sm-3 col-form-label">Kabupaten Pindah</label>
									<div class="col-sm-8">
										<div class="form-line">
											<input class="form-control" id="kabupaten_pindah" name="kabupaten_pindah" rows="3" placeholder="Kabupaten"></input>
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
									<label for="provinsi_pindah" class="col-sm-3 col-form-label">Provinsi Pindah</label>
									<div class="col-sm-8">
										<div class="form-line">
											<input class="form-control" id="provinsi_pindah" name="provinsi_pindah" rows="3" placeholder="Provinsi"></input>
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
									<label for="Tanggal_pindah" class="col-sm-3 col-form-label">Tanggal Pindah</label>
									<div class="col-sm-8">
										<div class="form-line">
											<input type="date" class="form-control" id="tanggal_pindah" name="tanggal_pindah" value="">
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
									<label for="jumlah_pengikut" class="col-sm-3 col-form-label">Jml Pengikut</label>
									<div class="col-sm-8">
										<div class="form-line">
											<input type="number" class="form-control" id="jumlah_pengikut" name="jumlah_pengikut">
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
