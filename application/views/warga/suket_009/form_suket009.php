<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Form Pengajuan Surat Keterangan Kematian</h1>
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
						<form class="form-horizontal" id="form_suket009" action="<?= base_url('warga/aksi_tambah_permohonan_suket009') ?>" method="POST">
							<div class="form-group">
								<div class="form-group" style="margin-top: 15px;">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Nama_alm" class="col-sm-3 col-form-label">Nama Alm/Almh</label>
										<div class="col-sm-8">
											<div class="form-line focused">
												<input type="text" class="form-control" id="nama_alm" name="nama_alm" placeholder="Isi nama alm/almh..." value="" required="">
												<i class=" fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Error massage</small>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Jenis_kelamin" class="col-sm-3 col-form-label">Jenis Kelamin</label>
										<div class="col-sm-8">
											<div class="form-line">
												<select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
													<option value="Laki-Laki" class="form-user-input">Laki-Laki
													</option>
													<option value="Perempuan" class="form-user-input">Perempuan
													</option>
												</select>
												<i class=" fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Error massage</small>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Tempat_kematian" class="col-sm-3 col-form-label">Tempat Kematian</label>
										<div class="col-sm-8">
											<div class="form-line focused">
												<textarea class="form-control" id="tempat_meninggal" name="tempat_meninggal" rows="3" placeholder="Isikan Tempat kematian..."></textarea>
												<i class=" fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Error massage</small>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Umur" class="col-sm-3 col-form-label">Umur</label>
										<div class="col-sm-8">
											<div class="form-line focused">
												<input type="text" class="form-control" id="umur" name="umur" placeholder="Isikan umur alm/almh..." value="" required="">
												<i class=" fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Error massage</small>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Tempat_kediaman" class="col-sm-3 col-form-label">Tempat Kediaman</label>
										<div class="col-sm-8">
											<div class="form-line focused">
												<textarea class="form-control" id="tempat_kediaman" name="tempat_kediaman" rows="3" placeholder="Isikan alamat alm/amlh..."></textarea>
												<i class=" fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Error massage</small>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="hari_meninggal" class="col-sm-3 col-form-label">Hari Meninggal</label>
										<div class="col-sm-8">
											<div class="form-line">
												<select class="form-control" id="hari hari_meninggal" name="hari_meninggal">
													<option value="Senin" class="form-user-input">Senin</option>
													<option value="Selasa" class="form-user-input">Selasa</option>
													<option value="Rabu" class="form-user-input">Rabu</option>
													<option value="Kamis" class="form-user-input">Kamis</option>
													<option value="Jumat" class="form-user-input">Jumat</option>
													<option value="Sabtu" class="form-user-input">Sabtu</option>
													<option value="Minggu" class="form-user-input">Minggu</option>
												</select>
												<i class=" fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Error massage</small>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Tanggal_Meninggal" class="col-sm-3 col-form-label">Tanggal Meninggal</label>
										<div class="col-sm-8">
											<div class="form-line">
												<input type="date" class="form-control" id="tanggal_meninggal" name="tanggal_meninggal" value="" required="">
												<i class=" fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Error massage</small>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Alasan_meninggal" class="col-sm-3 col-form-label">Alasan Meninggal</label>
										<div class="col-sm-8">
											<div class="form-line">
												<textarea class="form-control" id="alasan_meninggal" name="alasan_meninggal" rows="3" placeholder="Contoh : sakit,dll..."></textarea>
												<i class=" fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Error massage</small>
											</div>
										</div>
									</div>
								</div>
							</div>
							<input type="hidden" class="form-control" id="id_nama_surat" name="id_nama_surat" required="" value="9">
							<input type="hidden" class="form-control" id="id_warga" name="id_warga" required="" value="<?= $detail->id_warga; ?>">
							<input type="hidden" class="form-control" id="status" name="status" required="" value="Menunggu Persetujuan RT">
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
					</form>
				<?php } ?>
				</div>
				</form>
			</div>
		</div>
		<!--End Content Profile-->
	</div>
	<!-- End of Main Content -->