<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Form Pengajuan Surat Keterangan Beda Nama</h1>
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
									<label for="Pekerjaan" class="col-sm-3 col-form-label">Pekerjaan</label>
									<div class="col-sm-8">
										<div class="form-line">
											<input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="<?= $detail->pekerjaan; ?>" required="">
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
		<!--End Content Profile-->
	</div>
	<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->