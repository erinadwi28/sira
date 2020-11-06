<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<?php foreach($detail_warga as $w){ ?>

	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-2 text-gray-800">Ubah Data Warga</h1>
		<a href="<?= base_url()?>admin/detail_data_warga/<?= $w->id_warga ?>">
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
					<form action="<?= base_url('admin/aksi_ubah_warga') ?>" enctype="multipart/form-data" method="POST" accept-charset="utf-8" id="ubahwarga">
					
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
							<label class="label-control" for="nik"><b>NIK</b></label>
									<input type="text" class="form-control form-user-input"  name="nik" id="nik" value="<?= $w->nik; ?>">
									<i class="fas fa-check-circle"></i>
									<i class="fas fa-exclamation-circle"></i>
									<small>Error Message</small>
								
							</div>

							<div class="form-group">
							<label class="label-control" for="nama"><b>Nama Lengkap</b></label>
									<input type="text" class="form-control form-user-input" name="nama" id="nama" value="<?= $w->nama; ?>">
									<i class="fas fa-check-circle"></i>
									<i class="fas fa-exclamation-circle"></i>
									<small>Error Message</small>
								
							</div>

							<div class="form-group">
							<label class="label-control" for="tempat_lahir"><b>Tempat
											Lahir</b></label>
									<input type="text" class="form-control form-user-input" name="tempat_lahir" id="tempat_lahir" value="<?= $w->tempat_lahir; ?>">
									<i class="fas fa-check-circle"></i>
									<i class="fas fa-exclamation-circle"></i>
									<small>Error Message</small>
								
							</div>

							<div class="form-group">
							<label class="label-control" for="tanggal_lahir"><b>Tanggal
											Lahir</b></label>
									<input type="date" class="form-control form-user-input" name="tanggal_lahir" id="tanggal_lahir" value="<?= $w->tanggal_lahir; ?>">
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
										<option value="Laki-Laki" 
										<?= ($w->jenis_kelamin == 'Laki-Laki' ? 'selected' : ''); ?>
										 class="form-user-input">Laki-Laki
										</option>
										<option value="Perempuan" 
										<?= ($w->jenis_kelamin == 'Perempuan' ? 'selected' : ''); ?>
										class="form-user-input">Perempuan
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
										<option value="AB" <?= ($w->golongan_darah == 'AB' ? 'selected' : ''); ?>
										 class="form-user-input">AB</option>
										<option value="A" <?= ($w->golongan_darah == 'A' ? 'selected' : ''); ?> class="form-user-input">A</option>
										<option value="B" <?= ($w->golongan_darah == 'B' ? 'selected' : ''); ?> class="form-user-input">B</option>
										<option value="O" <?= ($w->golongan_darah == 'O' ? 'selected' : ''); ?> class="form-user-input">O</option>
									</select>
									<i class="fas fa-check-circle"></i>
									<i class="fas fa-exclamation-circle"></i>
									<small>Error Message</small>

								
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
							<label class="label-control" for="agama"><b>Agama</b></label>
									<select class="form-control form-user-input" name="agama" id="agama">
										<option class="form-user-input" selected>pilih agama ...</option>
										<option value="Islam" <?= ($w->agama == 'Islam' ? 'selected' : ''); ?>
										 class="form-user-input">Islam</option>
										<option value="Protestan" <?= ($w->agama == 'Protestan' ? 'selected' : ''); ?>
										 class="form-user-input">Protestan
										</option>
										<option value="Katholik" <?= ($w->agama == 'Katholik' ? 'selected' : ''); ?>
										 class="form-user-input">Katholik
										</option>
										<option value="Hindu" <?= ($w->agama == 'Hindu' ? 'selected' : ''); ?>
										 class="form-user-input">Hindu</option>
										<option value="Budha" <?= ($w->agama == 'Budha' ? 'selected' : ''); ?>
										 class="form-user-input">Budha</option>
										<option value="Khonghucu" <?= ($w->agama == 'Khonghucu' ? 'selected' : ''); ?>
										 class="form-user-input">Khonghucu
										</option>
									</select>
									<i class="fas fa-check-circle"></i>
									<i class="fas fa-exclamation-circle"></i>
									<small>Error Message</small>

								
							</div>
							<div class="form-group">
								<label class="label-control" for="alamat"><b>Alamat Lengkap</b></label>
									<input type="text" class="form-control form-user-input" placeholder="Isikan Alamat Anda" name="alamat" id="alamat" value="<?= $w->alamat; ?>">
									<i class="fas fa-check-circle"></i>
									<i class="fas fa-exclamation-circle"></i>
									<small>Error Message</small>

								
							</div>
							<div class="form-group">
								<label class="label-control" for="rt"><b>RT</b></label>
									<input type="text" class="form-control form-user-input" placeholder="RT" name="rt" id="rt" value="<?= $w->rt; ?>">
									<i class="fas fa-check-circle"></i>
									<i class="fas fa-exclamation-circle"></i>
									<small>Error Message</small>

								
							</div>
							<div class="form-group">
									<label class="label-control" for="kelurahan"><b>Kelurahan</b></label>
									<input type="text" class="form-control form-user-input" placeholder="Kelurahan" name="kelurahan" id="kelurahan" value="<?= $w->kelurahan; ?>">
									<i class="fas fa-check-circle"></i>
									<i class="fas fa-exclamation-circle"></i>
									<small>Error Message</small>

								
							</div>
							<div class="form-group">
							<label class="label-control" for="kecamatan"><b>Kecamatan</b></label>
									<input type="text" class="form-control form-user-input" placeholder="Kecamatan" name="kecamatan" id="kecamatan" value="<?= $w->kecamatan; ?>">
									<i class="fas fa-check-circle"></i>
									<i class="fas fa-exclamation-circle"></i>
									<small>Error Message</small>

								
							</div>
							<div class="form-group">
							<label class="label-control" for="status_perkawinan"><b>Status
											Perkawinan</b></label>
									<select class="form-control form-user-input" name="status_perkawinan" id="status_perkawinan">
										<option class="form-user-input">pilih status perkawinan ...</option>
										<option value="Kawin" 
										<?= ($w->status_perkawinan == 'Kawin' ? 'selected' : ''); ?>
										 class="form-user-input">Kawin</option>
										<option value="Belum Kawin" <?= ($w->status_perkawinan == 'Belum Kawin' ? 'selected' : ''); ?>
										 class="form-user-input">Belum Kawin
										</option>
									</select>
									<i class="fas fa-check-circle"></i>
									<i class="fas fa-exclamation-circle"></i>
									<small>Error Message</small>

								
							</div>
							
						</div>
						<div class="col-md-4">
							<div class="form-group">
							<label class="label-control" for="pekerjaan"><b>Pekerjaan</b></label>
									<input type="text" class="form-control form-user-input" placeholder="Isikan Pekerjaan Anda" name="pekerjaan" id="pekerjaan" value="<?= $w->pekerjaan; ?>">
									<i class="fas fa-check-circle"></i>
									<i class="fas fa-exclamation-circle"></i>
									<small>Error Message</small>

							
							</div>
							<div class="form-group">
							<label class="label-control" for="kewarganegaraan"><b>Kewarganegaraan</b></label>
									<select class="form-control form-user-input" name="kewarganegaraan" id="kewarganegaraan">
										<option class="form-user-input" selected>pilih kewarganegaraan ...</option>
										<option value="WNI" <?= ($w->kewarganegaraan == 'WNI' ? 'selected' : ''); ?>
										 class="form-user-input">WNI</option>
										<option value="WNA" <?= ($w->kewarganegaraan == 'WNA' ? 'selected' : ''); ?>
										 class="form-user-input">WNA</option>
									</select>
									<i class="fas fa-check-circle"></i>
									<i class="fas fa-exclamation-circle"></i>
									<small>Error Message</small>

								
							</div>
							
							
						</div>
						<div class="col-md-4">
						<div class="form-group">
							<label class="label-control" for="no_kk"><b>No KK</b></label>
									<input type="text" class="form-control form-user-input" placeholder="Isikan No. KK" name="no_kk" id="no_kk" value="<?= $w->no_kk; ?>">
									<i class="fas fa-check-circle"></i>
									<i class="fas fa-exclamation-circle"></i>
									<small>Error Message</small>

							</div>
						<div class="form-group">
							<label class="label-control" for="pendidikan_terakhir" selected><b>Pendidikan
											Terakhir</b></label>
									<select class="form-control form-user-input" name="pendidikan_terakhir" id="pendidikan_terakhir">
										<option class="form-user-input" selected>pilih pendidikan terakhir ...</option>
										<option value="TAMAT SD / SEDERAJAT" 
										<?= ($w->pendidikan_terakhir == 'TAMAT SD / SEDERAJAT' ? 'selected' : ''); ?>
										 class="form-user-input">
											TAMAT SD /
											SEDERAJAT</option>
										<option value="SLTP / SEDERAJAT"
										<?= ($w->pendidikan_terakhir == 'SLTP / SEDERAJAT' ? 'selected' : ''); ?>
										 class="form-user-input">SLTP /
											SEDERAJAT
										</option>
										<option value="TIDAK / BELUM SEKOLAH"
										<?= ($w->pendidikan_terakhir == 'TIDAK / BELUM SEKOLAH' ? 'selected' : ''); ?>
										 class="form-user-input">
											TIDAK / BELUM
											SEKOLAH</option>
										<option value="SLTA / SEDERAJAT"
										<?= ($w->pendidikan_terakhir == 'SLTA / SEDERAJAT' ? 'selected' : ''); ?>
										 class="form-user-input">SLTA /
											SEDERAJAT
										</option>
										<option value="BELUM TAMAT SD / SEDERAJAT"
										<?= ($w->pendidikan_terakhir == 'BELUM TAMAT SD / SEDERAJAT' ? 'selected' : ''); ?>
										class="form-user-input">BELUM
											TAMAT SD / SEDERAJAT</option>
										<option value="DIPLOMA IV / STRATA I"
										<?= ($w->pendidikan_terakhir == 'DIPLOMA IV / STRATA I' ? 'selected' : ''); ?>
										class="form-user-input">
											DIPLOMA IV /
											STRATA I</option>
										<option value="AKADEMI / DIPLOMA III / S.MUDA"
										<?= ($w->pendidikan_terakhir == 'AKADEMI / DIPLOMA III / S.MUDA' ? 'selected' : ''); ?>
										class="form-user-input">
											AKADEMI / DIPLOMA III / S.MUDA</option>
										<option value="DIPLOMA I / II"
										<?= ($w->pendidikan_terakhir == 'DIPLOMA I / II' ? 'selected' : ''); ?>
										class="form-user-input">DIPLOMA I
											/ II
										</option>
										<option value="STRATA II"
										<?= ($w->pendidikan_terakhir == 'STRATA II' ? 'selected' : ''); ?>
										class="form-user-input">STRATA II
										</option>
										<option value="STRATA III"
										<?= ($w->pendidikan_terakhir == 'STRATA III' ? 'selected' : ''); ?>
										class="form-user-input">STRATA III
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
										<option value="Kepala Keluarga"
										<?= ($w->status_hub_kel == 'Kepala Keluarga' ? 'selected' : ''); ?>
										class="form-user-input">Kepala
											Keluarga
										</option>
										<option value="Suami"
										<?= ($w->status_hub_kel == 'Suami' ? 'selected' : ''); ?>
										class="form-user-input">Suami</option>
										<option value="Isteri"
										<?= ($w->status_hub_kel == 'Isteri' ? 'selected' : ''); ?>
										class="form-user-input">Isteri</option>
										<option value="Anak"
										<?= ($w->status_hub_kel == 'Anak' ? 'selected' : ''); ?>
										class="form-user-input">Anak</option>
										<option value="Menantu"
										<?= ($w->status_hub_kel == 'Menantu' ? 'selected' : ''); ?>
										class="form-user-input">Menantu</option>
										<option value="Cucu"
										<?= ($w->status_hub_kel == 'Cucu' ? 'selected' : ''); ?>
										class="form-user-input">Cucu</option>
										<option value="Orang Tua"
										<?= ($w->status_hub_kel == 'Orang Tua' ? 'selected' : ''); ?>
										class="form-user-input">Orang Tua
										</option>
										<option value="Mertua"
										<?= ($w->status_hub_kel == 'Mertua' ? 'selected' : ''); ?>
										class="form-user-input">Mertua</option>
										<option value="Famili Lain"
										<?= ($w->status_hub_kel == 'Famili Lain' ? 'selected' : ''); ?>
										class="form-user-input">Famili Lain
										</option>
										<option value="Pembantu"
										<?= ($w->status_hub_kel == 'Pembantu' ? 'selected' : ''); ?>
										class="form-user-input">Pembantu
										</option>
									</select>
									<i class="fas fa-check-circle"></i>
									<i class="fas fa-exclamation-circle"></i>
									<small>Error Message</small>

								
							</div>
							<div class="form-group">
									<label class="label-control" for="no_hp"><b>No HandPhone</b></label>
									<input type="text" class="form-control form-user-input" placeholder="Isikan No. HP Anda" name="no_hp" id="no_hp" value="<?= $w->no_hp; ?>">
									<i class="fas fa-check-circle"></i>
									<i class="fas fa-exclamation-circle"></i>
									<small>Error Message</small>

								
							</div>

							
							<input type="hidden" class="form-control form-user-input" name="id_warga" id="warga"
								value="<?= $w->id_warga; ?>">
						</div>
					</div>
					<br>
					<hr>
					<div>
						<div class="float-right">
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
				<?php } ?>

			</div>
		</div>


	</div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
