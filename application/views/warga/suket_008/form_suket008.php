	<!-- Begin Page Content -->
	<div class="container-fluid">

		<!-- Page Heading -->
		<div class="d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h3 mb-0 text-gray-800">Form Pengajuan Surat Keterangan Janda</h1>

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
										<!-- 		<label for="Nomor_surat_admin" class="col-sm-3 col-form-label">No.Surat Admin</label> -->
										<div class="col-sm-8">
											<div class="form-line focused">
												<input type="hidden" class="form-control" id="nomor_surat_admin" name="nomor_surat_admin" placeholder="No Surat diisi petugas" value="" required="">
											</div>
										</div>
									</div>
								</div>
								<div class="form-group" style="margin-top: 15px;">
									<div class="form-group row" style="margin-left: 10px;">
										<!-- 		<label for="Nomor_surat_rt" class="col-sm-3 col-form-label">No.Surat RT</label> -->
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
											<label for="Nama" class="col-sm-3 col-form-label">Nama Istri</label>
											<div class="col-sm-8">
												<div class="form-line focused">
													<input type="text" class="form-control" id="nama_istri" name="nama_istri" placeholder="Nama Lengkap" value="" required="">
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="form-group row" style="margin-left: 10px;">
											<label for="Tempat_lahir_istri" class="col-sm-3 col-form-label">Tempat Lahir</label>
											<div class="col-sm-8">
												<div class="form-line focused">
													<input type="text" class="form-control" id="Tempat_lahir_istri" name="Tempat_lahir_istri" placeholder="Tempat Lahir Istri" value="" required="">
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="form-group row" style="margin-left: 10px;">
											<label for="Tanggal_lahir_istri" class="col-sm-3 col-form-label">Tanggal Lahir</label>
											<div class="col-sm-8">
												<div class="form-line">
													<input type="date" class="form-control" id="Tanggal_lahir_istri" name="Tanggal_lahir_istri" value="" required="">
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="form-group row" style="margin-left: 10px;">
											<label for="Pekerjaan_istri" class="col-sm-3 col-form-label">Pekerjaan Istri</label>
											<div class="col-sm-8">
												<div class="form-line">
													<select class="form-control" id="Pekerjaan_istri">
														<option>PNS</option>
														<option>Swasta</option>
														<option>Wirausaha</option>
														<option>Buruh</option>
														<option>Lainnya</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="form-group row" style="margin-left: 10px;">
											<label for="Alamat_tinggal" class="col-sm-3 col-form-label">Alamat Tinggal</label>
											<div class="col-sm-8">
												<div class="form-line">
													<textarea class="form-control" id="alamat_tinggal" name="alamat_tinggal" rows="3" placeholder="Alamat Tinggal"></textarea>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group" style="margin-top: 15px;">
										<div class="form-group row" style="margin-left: 10px;">
											<label for="Nama)suami" class="col-sm-3 col-form-label">Nama Suami</label>
											<div class="col-sm-8">
												<div class="form-line focused">
													<input type="text" class="form-control" id="nama_suami" name="nama_suami" placeholder="Nama Lengkap" value="" required="">
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="form-group row" style="margin-left: 10px;">
											<label for="Tempat_lahir_suami" class="col-sm-3 col-form-label">Tempat Lahir Suami</label>
											<div class="col-sm-8">
												<div class="form-line focused">
													<input type="text" class="form-control" id="Tempat_lahir_suami" name="Tempat_lahir_suami" placeholder="Tempat Lahir Suami" value="" required="">
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="form-group row" style="margin-left: 10px;">
											<label for="Tanggal_lahir_suami" class="col-sm-3 col-form-label">Tanggal Lahir Suami</label>
											<div class="col-sm-8">
												<div class="form-line">
													<input type="date" class="form-control" id="Tanggal_lahir_suami" name="Tanggal_lahir_suami" value="" required="">
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="form-group row" style="margin-left: 10px;">
											<label for="Pekerjaan_suami" class="col-sm-3 col-form-label">Pekerjaan Suami</label>
											<div class="col-sm-8">
												<div class="form-line">
													<select class="form-control" id="Pekerjaan_suami">
														<option>PNS</option>
														<option>Swasta</option>
														<option>Wirausaha</option>
														<option>Buruh</option>
														<option>Lainnya</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="form-group row" style="margin-left: 10px;">
											<label for="Alasan" class="col-sm-3 col-form-label">Alasan</label>
											<div class="col-sm-8">
												<div class="form-line">
													<textarea class="form-control" id="alasan" name="alasan" rows="3" placeholder="Meninggal Dunia,dll"></textarea>
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
