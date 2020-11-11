<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Form Tambah Pengikut/Anggota KK</h1>

	</div>
	<!--Begin Content Profile-->
	<div class="row clearfix">
		<div class="col-xs-12 col-sm-2"></div>
		<div class="col-xs-12 col-sm-8">
			<div class="card shadow mb-5">
				<div class="body">
					<form class="form-horizontal" id="form_tambah_pengikut_suket012" action="<?= base_url('warga/aksi_tambah_pengikut_suket012') ?>" method="POST">
						<div class="form-group">
							<div class="form-group" style="margin-top: 15px;">
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Nama" class="col-sm-3 col-form-label">Nama Lengkap</label>
										<div class="col-sm-8">
											<div class="form-line">
												<input type="text" class="form-control" placeholder="masukan nama lengkap disini..." id="nama" name="nama">
												<i class="fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Error massage</small>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Tempat_lahir" class="col-sm-3 col-form-label">Tempat Lahir</label>
										<div class="col-sm-8">
											<div class="form-line focused">
												<input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="masukan tempat lahir disini...">
												<i class="fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Error massage</small>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Tanggal_lahir" class="col-sm-3 col-form-label">Tanggal Lahir</label>
										<div class="col-sm-8">
											<div class="form-line">
												<input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir">
												<i class="fas fa-check-circle"></i>
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
													<option class="form-user-input">pilih jenis kelamin...
													</option>
													<option value="Laki-Laki" class="form-user-input">Laki-Laki
													</option>
													<option value="Perempuan" class="form-user-input">Perempuan
													</option>
												</select>
												<i class="fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Error massage</small>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="umur" class="col-sm-3 col-form-label">Umur</label>
										<div class="col-sm-8">
											<div class="form-line focused">
												<input type="text" class="form-control" id="umur" name="umur" placeholder="masukan umur...">
												<i class="fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Error massage</small>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Status_perkawinan" class="col-sm-3 col-form-label">Status Perkawinan</label>
										<div class="col-sm-8">
											<div class="form-line">
												<select class="form-control form-user-input" name="status_perkawinan" id="status_perkawinan">
													<option class="form-user-input" selected>pilih status perkawinan...
													</option>
													<option value="Kawin" class="form-user-input">Kawin</option>
													<option value="Belum Kawin" class="form-user-input">Belum Kawin
													</option>
												</select>
												<i class="fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Error massage</small>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Pendidikan_terakhir" class="col-sm-3 col-form-label">Pendidikan Terakhir</label>
										<div class="col-sm-8">
											<div class="form-line">
												<select class="form-control" id="pendidikan_terakhir" name="pendidikan_terakhir">
													<option class="form-user-input">pilih pendidikan terakhir... </option>
													<option value="TIDAK / BELUM SEKOLAH" class="form-user-input">TIDAK / BELUM SEKOLAH</option>
													<option value="BELUM TAMAT SD / SEDERAJAT" class="form-user-input">BELUM TAMAT SD / SEDERAJAT</option>
													<option value="TAMAT SD / SEDERAJAT" class="form-user-input">TAMAT SD / SEDERAJAT</option>
													<option value="SLTP / SEDERAJAT" class="form-user-input">SLTP / SEDERAJAT</option>
													<option value="SLTA / SEDERAJAT" class="form-user-input">SLTA / SEDERAJAT</option>
													<option value="DIPLOMA I / II" class="form-user-input">DIPLOMA I / II</option>
													<option value="AKADEMI / DIPLOMA III / S.MUDA" class="form-user-input">AKADEMI / DIPLOMA III / S.MUDA</option>
													<option value="DIPLOMA IV / STRATA I" class="form-user-input">DIPLOMA IV / STRATA I</option>
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
								<div class="form-group">
									<div class="form-group" style="margin-top: 15px;">
										<div class="form-group row" style="margin-left: 10px;">
											<label for="Nama_ortu" class="col-sm-3 col-form-label">Nama Ortu</label>
											<div class="col-sm-8">
												<div class="form-line focused">
													<input type="text" class="form-control" id="nama_ortu" name="nama_ortu" placeholder="masukan nama orang tua disini... ">
													<i class="fas fa-check-circle"></i>
													<i class="fas fa-exclamation-circle"></i>
													<small>Error massage</small>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group" style="margin-top: 15px;">
										<div class="form-group row" style="margin-left: 10px;">
											<label for="status_hub_kk" class="col-sm-3 col-form-label">Hubungan dgn KK</label>
											<div class="col-sm-8">
												<div class="form-line focused">
													<select class="form-control form-user-input" name="status_hub_kk" id="status_hub_kk">
														<option class="form-user-input" selected>pilih status hubungan
															keluarga...
														</option>
														<option value="Kepala Keluarga" class="form-user-input">Kepala
															Keluarga
														</option>
														<option value="Suami" class="form-user-input">Suami</option>
														<option value="Isteri" class="form-user-input">Isteri</option>
														<option value="Anak" class="form-user-input">Anak</option>
														<option value="Menantu" class="form-user-input">Menantu</option>
														<option value="Cucu" class="form-user-input">Cucu</option>
														<option value="Orang Tua" class="form-user-input">Orang Tua
														</option>
														<option value="Mertua" class="form-user-input">Mertua</option>
														<option value="Famili Lain" class="form-user-input">Famili Lain
														</option>
														<option value="Pembantu" class="form-user-input">Pembantu
														</option>
													</select>
													<i class="fas fa-check-circle"></i>
													<i class="fas fa-exclamation-circle"></i>
													<small>Error massage</small>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<input type="hidden" class="form-control" id="id_permohonan_surat" name="id_permohonan_surat" value="<?= $id_permohonan['id_permohonan_surat']; ?>">
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
