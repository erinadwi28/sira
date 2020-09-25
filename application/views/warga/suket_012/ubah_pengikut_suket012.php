<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Form Ubah Pengikut/Anggota KK</h1>

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
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Nama" class="col-sm-3 col-form-label">Nama Lengkap</label>
										<div class="col-sm-8">
											<div class="form-line">
												<input type="text" class="form-control" id="nama" name="nama" value="" required="">
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Tempat_lahir" class="col-sm-3 col-form-label">Tempat Lahir</label>
										<div class="col-sm-8">
											<div class="form-line focused">
												<input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" value="" required="">
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Tanggal_lahir" class="col-sm-3 col-form-label">Tanggal Lahir</label>
										<div class="col-sm-8">
											<div class="form-line">
												<input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="" required="">
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
										<label for="Status_perkawinan" class="col-sm-3 col-form-label">Status Perkawinan</label>
										<div class="col-sm-8">
											<div class="form-line">
												<select class="form-control" id="status_perkawinan">
													<option>Kawin</option>
													<option>Belum Kawin</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Pendidikan_terakhir" class="col-sm-3 col-form-label">Pendidikan Terakhir</label>
										<div class="col-sm-8">
											<div class="form-line">
												<select class="form-control" id="pendidikan_terakhir">
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
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group" style="margin-top: 15px;">
										<div class="form-group row" style="margin-left: 10px;">
											<label for="Nama_ortu" class="col-sm-3 col-form-label">Nama Ortu</label>
											<div class="col-sm-8">
												<div class="form-line focused">
													<input type="text" class="form-control" id="nama_ortu" name="nama_ortu" placeholder="Nama Ortu" value="" required="">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group" style="margin-top: 15px;">
										<div class="form-group row" style="margin-left: 10px;">
											<label for="Hubungan_dgn_kk" class="col-sm-3 col-form-label">Hubungan dgn KK</label>
											<div class="col-sm-8">
												<div class="form-line focused">
													<input type="text" class="form-control" id="hubungan_dgn_kk" name="hubungan_dgn_kk" placeholder="Nama Ortu" value="" required="">
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
							<button id="btn_setuju" class="btn btn-sm btn-success" type="submit">
								<i class="far fa-save nav-icon"> Simpan
								</i>
							</button>
						</a>
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!--End Content Profile-->
