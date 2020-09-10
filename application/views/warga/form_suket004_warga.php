<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Form Pengajuan Surat Keterangan Beda Nama</h1>

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
						</div>
						<div class="form-group">
							<div class="form-group" style="margin-top: 15px;">
								<div class="form-group row" style="margin-left: 10px;">
									<!-- <label for="Nomor_surat_rt" class="col-sm-3 col-form-label">No.Surat RT</label> -->
									<div class="col-sm-8">
										<div class="form-line focused">
											<input type="hidden" class="form-control" id="nomor_surat_rt" name="nomor_surat_rt" placeholder="No Surat diisi petugas" value="" required="">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="form-group" style="margin-top: 15px;">
								<div class="form-group row" style="margin-left: 10px;">
									<label for="Nama_benar" class="col-sm-3 col-form-label">Nama benar</label>
									<div class="col-sm-8">
										<div class="form-line focused">
											<input type="text" class="form-control" id="nama_benar" name="nama_benar" placeholder="Nama benar" value="" required="">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="form-group" style="margin-top: 15px;">
								<div class="form-group row" style="margin-left: 10px;">
									<label for="Nama_dokumen_benar" class="col-sm-3 col-form-label">Dokumen Benar</label>
									<div class="col-sm-8">
										<div class="form-line">
											<select class="form-control" id="nama_dokumen_benar">
												<option>KTP</option>
												<option>SIM</option>
												<option>AKTA</option>
												<option>IJAZAH</option>
												<option>SERTIFIKAT</option>
												<option>Lainnya</option>
											</select>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="form-group" style="margin-top: 15px;">
								<div class="form-group row" style="margin-left: 10px;">
									<label for="Nama_salah" class="col-sm-3 col-form-label">Nama Salah</label>
									<div class="col-sm-8">
										<div class="form-line focused">
											<input type="text" class="form-control" id="nama_salah" name="nama_salaht" placeholder="Nama salah" value="" required="">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="form-group" style="margin-top: 15px;">
								<div class="form-group row" style="margin-left: 10px;">
									<label for="Nama_dokumen_benar" class="col-sm-3 col-form-label">Dokumen Salah</label>
									<div class="col-sm-8">
										<div class="form-line">
											<select class="form-control" id="nama_dokumen_benar">
												<option>KTP</option>
												<option>SIM</option>
												<option>AKTA</option>
												<option>IJAZAH</option>
												<option>SERTIFIKAT</option>
												<option>Lainnya</option>
											</select>
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
								<label for="Pekerjaan" class="col-sm-3 col-form-label">Pekerjaan</label>
								<div class="col-sm-8">
									<div class="form-line">
										<select class="form-control" id="Pekerjaan">
											<option>PNS</option>
											<option>Swasta</option>
											<option>Wirausaha</option>
											<option>Buruh</option>
											<option>Pelajar/Mahasiswa</option>
											<option>Lainnyas</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="form-group row" style="margin-left: 10px;">
								<label for="Alamat" class="col-sm-3 col-form-label">Alamat</label>
								<div class="col-sm-8">
									<div class="form-line">
										<textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Alamat"></textarea>
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
				<div class="card-footer">
					<div class="form-group">
						<div class=" col-sm-offset-2 col-sm-4" style="float: right;">
							<span><a class="btn btn-danger " href="#" role="button"> <i class="fa fa-times" aria-hidden="true"> Batal</i> </a></span>
							<span><a class="btn btn-primary far fa-save" href="#" role="button"> Simpan</a></span>
						</div>
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
