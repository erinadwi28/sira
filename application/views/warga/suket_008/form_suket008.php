<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Form Pengajuan Surat Keterangan Janda</h1>
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
					<form class="form-horizontal" id="form8" action="" method="">
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
									<label for="Nama_istri" class="col-sm-3 col-form-label">Nama Istri</label>
									<div class="col-sm-8">
										<div class="form-line">
											<input type="text" class="form-control" id="nama_istri" name="nama_istri" placeholder="Nama Lengkap Istri">
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
									<label for="Tempat_lahir_istri" class="col-sm-3 col-form-label">Tempat Lahir Istri</label>
									<div class="col-sm-8">
										<div class="form-line">
											<input type="text" class="form-control" id="tempat_lahir_istri" name="tempat_lahir_istri" placeholder="Tempat Lahir Istri">
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
									<label for="Tanggal_lahir_istri" class="col-sm-3 col-form-label">Tanggal Lahir Istri</label>
									<div class="col-sm-8">
										<div class="form-line">
											<input type="date" class="form-control" id="tanggal_lahir_istri" name="tanggal_lahir_istri" value="">
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
									<label for="Pekerjaan_istri" class="col-sm-3 col-form-label">Pekerjaan Istri</label>
									<div class="col-sm-8">
										<div class="form-line">
											<select class="form-control" id="pekerjaan_istri">
												<option>Pilih jenis pekerjaan...</option>
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
									<label for="Alamat_tinggal" class="col-sm-3 col-form-label">Alamat_tinggal</label>
									<div class="col-sm-8">
										<div class="form-line">
											<textarea class="form-control" id="alamat_tinggal" name="alamat_tinggal" rows="3" placeholder="Alamat Tinggal Lengkap"></textarea>
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
									<label for="Nama_suami" class="col-sm-3 col-form-label">Nama suami</label>
									<div class="col-sm-8">
										<div class="form-line">
											<input type="text" class="form-control" id="nama_suami" name="nama_suami" placeholder="Nama Lengkap suami">
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
									<label for="Tempat_lahir_suami" class="col-sm-3 col-form-label">Tempat Lahir suami</label>
									<div class="col-sm-8">
										<div class="form-line">
											<input type="text" class="form-control" id="tempat_lahir_suami" name="tempat_lahir_suami" placeholder="Tempat Lahir suami">
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
									<label for="Tanggal_lahir_suami" class="col-sm-3 col-form-label">Tanggal Lahir suami</label>
									<div class="col-sm-8">
										<div class="form-line">
											<input type="date" class="form-control" id="tanggal_lahir_suami" name="tanggal_lahir_suami" value="">
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
									<label for="Pekerjaan_suami" class="col-sm-3 col-form-label">Pekerjaan suami</label>
									<div class="col-sm-8">
										<div class="form-line">
											<select class="form-control" id="pekerjaan_suami">
												<option>Pilih jenis pekerjaan...</option>
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
									<label for="Alasan" class="col-sm-3 col-form-label">Alasan</label>
									<div class="col-sm-8">
										<div class="form-line">
											<input type="text" class="form-control" id="alasan" name="alasan" placeholder="alasan" value="">
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
