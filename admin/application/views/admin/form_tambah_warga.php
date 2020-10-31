<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->

	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-2 text-gray-800">Tambah Data Warga</h1>
		<a href="<?= base_url('admin/list_data_warga') ?>">
			<button id="btn_kembali" class="btn btn-sm btn-warning" type="submit">
				<i class="fa fa-arrow-left">
				</i> Kembali
			</button>
		</a>
	</div>


	<!-- Content Row line 1-->
	<div class="row">
		<div class="col-md-12 mb-4">
			<!-- Detail Data -->
			<div class="card shadow mb-4">
				<div class="card-body">
					<!-- <table class="table-responsive">

					</table> -->
					
					<form action="<?= base_url('admin/aksi_tambah_warga') ?>" enctype="multipart/form-data" method="POST" accept-charset="utf-8" id="formwarga" name="formwarga">
					<input type="hidden" name="length" value="10">
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
									<label class="label-control" for="nik"><b>NIK</b></label>
									<input type="text" class="form-control form-user-input" placeholder="Isikan NIK Anda" name="nik" id="nik">
									<i class="fas fa-check-circle"></i>
									<i class="fas fa-exclamation-circle"></i>
									<small>Error Message</small>
								</div>

								<div class="form-group">
									<label class="label-control" for="nama"><b>Nama Lengkap</b></label>
									<input type="text" class="form-control form-user-input" placeholder="Isikan Nama" name="nama" id="nama">
									<i class="fas fa-check-circle"></i>
									<i class="fas fa-exclamation-circle"></i>
									<small>Error Message</small>
								</div>
								<div class="form-group">
									<label class="label-control" for="tempat_lahir"><b>Tempat
											Lahir</b></label>
									<input type="text" class="form-control form-user-input" placeholder="Isikan Tempat Lahir" name="tempat_lahir" id="tempat_lahir">
									<i class="fas fa-check-circle"></i>
									<i class="fas fa-exclamation-circle"></i>
									<small>Error Message</small>
								</div>
								<div class="form-group">
									<label class="label-control" for="tanggal_lahir"><b>Tanggal
											Lahir</b></label>
									<input type="date" class="form-control form-user-input" name="tanggal_lahir" id="tanggal_lahir">
									<i class="fas fa-check-circle"></i>
									<i class="fas fa-exclamation-circle"></i>
									<small>Error Message</small>
								</div>
								<div class="form-group">
									<label class="label-control" for="jenis_kelamin"><b>Jenis
											Kelamin</b></label>
									<select class="form-control form-user-input" name="jenis_kelamin" id="jenis_kelamin">
										<option class="form-user-input" selected>pilih jenis kelamin ...
										</option>
										<option value="Laki-Laki" class="form-user-input">Laki-Laki
										</option>
										<option value="Perempuan" class="form-user-input">Perempuan
										</option>
									</select>
									<i class="fas fa-check-circle"></i>
									<i class="fas fa-exclamation-circle"></i>
									<small>Error Message</small>
								</div>
								<div class="form-group">
									<label class="label-control" for="goldar"><b>Golongan
											Darah</b></label>
									<select class="form-control form-user-input" name="golongan_darah" id="golongan_darah">
										<option class="form-user-input" selected>pilih golongan darah ...</option>
										<option value="AB" class="form-user-input">AB</option>
										<option value="A" class="form-user-input">A</option>
										<option value="B" class="form-user-input">B</option>
										<option value="O" class="form-user-input">O</option>
									</select>
									<i class="fas fa-check-circle"></i>
									<i class="fas fa-exclamation-circle"></i>
									<small>Error Message</small>
								</div>
								<div class="form-group">
									<label class="label-control" for="agama"><b>Agama</b></label>
									<select class="form-control form-user-input" name="agama" id="agama">
										<option class="form-user-input" selected>pilih agama ...</option>
										<option value="Islam" class="form-user-input">Islam</option>
										<option value="Protestan" class="form-user-input">Protestan
										</option>
										<option value="Katholik" class="form-user-input">Katholik
										</option>
										<option value="Hindu" class="form-user-input">Hindu</option>
										<option value="Budha" class="form-user-input">Budha</option>
										<option value="Khonghucu" class="form-user-input">Khonghucu
										</option>
									</select>
									<i class="fas fa-check-circle"></i>
									<i class="fas fa-exclamation-circle"></i>
									<small>Error Message</small>
								</div>
								
						</div>
						<div class="col-md-4">
									<div class="form-group">
									<label class="label-control" for="alamat"><b>Alamat Lengkap</b></label>
									<input type="text" class="form-control form-user-input" placeholder="Isikan Alamat Anda" name="alamat" id="alamat">
									<i class="fas fa-check-circle"></i>
									<i class="fas fa-exclamation-circle"></i>
									<small>Error Message</small>
								</div>
								<div class="form-group">
									<label class="label-control" for="rt"><b>RT</b></label>
									<input type="text" class="form-control form-user-input" placeholder="RT" name="rt" id="rt">
									<i class="fas fa-check-circle"></i>
									<i class="fas fa-exclamation-circle"></i>
									<small>Error Message</small>
								</div>
								<div class="form-group">
									<label class="label-control" for="kelurahan"><b>Kelurahan</b></label>
									<input type="text" class="form-control form-user-input" placeholder="Kelurahan" name="kelurahan" id="kelurahan">
									<i class="fas fa-check-circle"></i>
									<i class="fas fa-exclamation-circle"></i>
									<small>Error Message</small>
								</div>
								<div class="form-group">
									<label class="label-control" for="kecamatan"><b>Kecamatan</b></label>
									<input type="text" class="form-control form-user-input" placeholder="Kecamatan" name="kecamatan" id="kecamatan">
									<i class="fas fa-check-circle"></i>
									<i class="fas fa-exclamation-circle"></i>
									<small>Error Message</small>
								</div>
								<div class="form-group">
									<label class="label-control" for="status_perkawinan"><b>Status
											Perkawinan</b></label>
									<select class="form-control form-user-input" name="status_perkawinan" id="status_perkawinan">
										<option class="form-user-input">pilih status perkawinan ...</option>
										<option value="Kawin" class="form-user-input">Kawin</option>
										<option value="Belum Kawin" class="form-user-input">Belum Kawin
										</option>
									</select>
									<i class="fas fa-check-circle"></i>
									<i class="fas fa-exclamation-circle"></i>
									<small>Error Message</small>
								</div>

								<div class="form-group">
									<label class="label-control" for="pekerjaan"><b>Pekerjaan</b></label>
									<input type="text" class="form-control form-user-input" placeholder="Isikan Pekerjaan Anda" name="pekerjaan" id="pekerjaan">
									<i class="fas fa-check-circle"></i>
									<i class="fas fa-exclamation-circle"></i>
									<small>Error Message</small>
								</div>
								<div class="form-group">
									<label class="label-control" for="kewarganegaraan"><b>Kewarganegaraan</b></label>
									<select class="form-control form-user-input" name="kewarganegaraan" id="kewarganegaraan">
										<option class="form-user-input" selected>pilih kewarganegaraan ...</option>
										<option value="WNI" class="form-user-input">WNI</option>
										<option value="WNA" class="form-user-input">WNA</option>
									</select>
									<i class="fas fa-check-circle"></i>
									<i class="fas fa-exclamation-circle"></i>
									<small>Error Message</small>
								</div>
								
								
						</div>
						<div class="col-md-4">
								<div class="form-group">
									<label class="label-control" for="no_kk"><b>No KK</b></label>
									<input type="text" class="form-control form-user-input" placeholder="Isikan No. KK" name="no_kk" id="no_kk">
									<i class="fas fa-check-circle"></i>
									<i class="fas fa-exclamation-circle"></i>
									<small>Error Message</small>
								</div>
								<div class="form-group">
									<label class="label-control" for="pendidikan_terakhir" selected><b>Pendidikan
											Terakhir</b></label>
									<select class="form-control form-user-input" name="pendidikan_terakhir" id="pendidikan_terakhir">
										<option class="form-user-input" selected>pilih pendidikan terakhir ...</option>
										<option value="TAMAT SD / SEDERAJAT" class="form-user-input">
											TAMAT SD /
											SEDERAJAT</option>
										<option value="SLTP / SEDERAJAT" class="form-user-input">SLTP /
											SEDERAJAT
										</option>
										<option value="TIDAK / BELUM SEKOLAH" class="form-user-input">
											TIDAK / BELUM
											SEKOLAH</option>
										<option value="SLTA / SEDERAJAT" class="form-user-input">SLTA /
											SEDERAJAT
										</option>
										<option value="BELUM TAMAT SD / SEDERAJAT" class="form-user-input">BELUM
											TAMAT SD / SEDERAJAT</option>
										<option value="DIPLOMA IV / STRATA I" class="form-user-input">
											DIPLOMA IV /
											STRATA I</option>
										<option value="AKADEMI / DIPLOMA III / S.MUDA" class="form-user-input">
											AKADEMI / DIPLOMA III / S.MUDA</option>
										<option value="DIPLOMA I / II" class="form-user-input">DIPLOMA I
											/ II
										</option>
										<option value="STRATA II" class="form-user-input">STRATA II
										</option>
										<option value="STRATA III" class="form-user-input">STRATA III
										</option>
									</select>
									<i class="fas fa-check-circle"></i>
									<i class="fas fa-exclamation-circle"></i>
									<small>Error Message</small>
								</div>
								<div class="form-group">
									<label class="label-control" for="status_hub_kel"><b>Status Hub
											Keluarga</b></label>
									<select class="form-control form-user-input" name="status_hub_kel" id="status_hub_kel">
										<option class="form-user-input" selected>pilih status hubungan keluarga ...</option>
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
									<small>Error Message</small>
								</div>
								<div class="form-group">
									<label class="label-control" for="no_hp"><b>No HandPhone</b></label>
									<input type="text" class="form-control form-user-input" placeholder="Isikan No. HP Anda" name="no_hp" id="no_hp">
									<i class="fas fa-check-circle"></i>
									<i class="fas fa-exclamation-circle"></i>
									<small>Error Message</small>
								</div>
								<div class="form-group">
									
									<label class="label-control" for="kata_sandi"><b>Kata
											Sandi</b></label>
									<input type="text" class="form-control" name="row_password" id="kata_sandi" placeholder="Klik Acak Password" >&nbsp;
									<i class="fas fa-check-circle"></i>
									<i class="fas fa-exclamation-circle"></i>
									<small>Error Message</small>
								
									<input style="margin-top: 15px;" type="button" class="button btn-sm btn-primary" value="Acak Password" onclick="generate1();" tabindex="2">
									
									<br />


								</div>

							<!-- hidden -->
							<input type="hidden" value="Foto Profil" name="keterangan">
							<input type="hidden" value="Foto KTP" name="keterangan">
							<input type="hidden" value="Foto KK" name="keterangan">
						</div>
					</div>
					
					<br>
					<hr>
					<div>
						<div class="float-right">
							<a href="">
								<button id="btn_batal" class="btn btn-sm btn-danger" type="reset">
									<i class="fa fa-times nav-icon">
									</i> Batal
								</button>
							</a>
							<a href="">
								<button id="btn_simpan" class="btn btn-sm btn-primary" type="submit">
									<i class="far fa-save nav-icon">
									</i> Simpan
								</button>
							</a>
						</div>
					</div>
					</form>
					
				</div>

			</div>
			
		</div>


	</div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->