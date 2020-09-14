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
								<div class="form-group" style="margin-top: 15px;">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Nama_alm" class="col-sm-3 col-form-label">Nama Alm/Almh</label>
										<div class="col-sm-8">
											<div class="form-line focused">
												<input type="text" class="form-control" id="nama_alm" name="nama_alm" placeholder="Nama ALmm/Almh" value="" required="">
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Jenis_kelamin" class="col-sm-3 col-form-label">Jenis Kelamin</label>
										<div class="col-sm-8">
											<div class="form-line">
												<select class="form-control" id="jenis_kelamin">
													<option>Laki-laki</option>
													<option>Perempuan</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Tempat_kematian" class="col-sm-3 col-form-label">Tempat Kematian</label>
										<div class="col-sm-8">
											<div class="form-line focused">
												<textarea class="form-control" id="tempat_kematian" name="tempat_kematian" rows="3" placeholder="Alamat"></textarea>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Umur" class="col-sm-3 col-form-label">Umur</label>
										<div class="col-sm-8">
											<div class="form-line focused">
												<input type="text" class="form-control" id="umur" name="umur" placeholder="Umur" value="" required="">
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Tempat_kediaman" class="col-sm-3 col-form-label">Tempat Kediaman</label>
										<div class="col-sm-8">
											<div class="form-line focused">
												<textarea class="form-control" id="tempat_kediaman" name="tempat_kediaman" rows="3" placeholder="Alamat">Jalan Abdul Ancis, Rt. 21, Kel. Mendwai, Kec. Arut Selatan, Kab. Kotawaringin Barat</textarea>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Hari_meninggal" class="col-sm-3 col-form-label">Hari Meninggal</label>
										<div class="col-sm-8">
											<div class="form-line">
												<select class="form-control" id="hari">
													<option>Senin</option>
													<option>Selasa</option>
													<option>Rabu</option>
													<option>Kamis</option>
													<option>Jumat</option>
													<option>Sabtu</option>
													<option>Minggu</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Tanggal_Meninggal" class="col-sm-3 col-form-label">Tanggal Meninggal</label>
										<div class="col-sm-8">
											<div class="form-line">
												<input type="date" class="form-control" id="tanggal_kematian" name="tanggal_kematian" value="" required="">
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Alasan_meninggal" class="col-sm-3 col-form-label">Alasan Meninggal</label>
										<div class="col-sm-8">
											<div class="form-line">
												<textarea class="form-control" id="alasan_meninggal" name="alasan_meninggal" rows="3" placeholder="Sakit,dll"></textarea>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Tanggal_permohonan" class="col-sm-3 col-form-label">Tanggal Permohonan</label>
										<div class="col-sm-8">
											<div class="form-line">
												<input type="date" class="form-control" id="Tanggal_permohonan" name="Tanggal_permohonan" value="" required="">
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<!-- <label for="Tanggal_pembuatan" class="col-sm-3 col-form-label">Tanggal Pembuatan</label> -->
										<div class="col-sm-8">
											<div class="form-line">
												<input type="hidden" class="form-control" id="Tanggal_pembuatan" name="Tanggal_pembuatan" value="" required="">
											</div>
										</div>
									</div>
								</div>
							</div>
					</div>
					<div class="card-footer">
						<div class="float-left">
							<a href="#">
								<button id="btn_kembali" class="btn btn-sm btn-warning" type="submit">
									<i class="fa fa-arrow-left">
									</i> Kembali
								</button>
							</a>
						</div>
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
				</div>
			</div>
			<!--End Content Profile-->
		</div>
		<!-- /.container-fluid -->
	</div>
	<!-- End of Main Content -->
