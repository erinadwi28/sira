<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<?php 
							
					foreach($detail_warga as $w){ 
				?>

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
					<?= form_open_multipart('admin/aksi_ubah_warga') ?>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label class="label-control" for="nik"><b>NIK</b></label>
								<input type="text" class="form-control form-user-input" name="nik" id="nik"
									value="<?= $w->nik; ?>">
							</div>

							<div class="form-group">
								<label class="label-control" for="nama"><b>Nama Lengkap</b></label>
								<input type="text" class="form-control form-user-input" name="nama" id="nama"
									value="<?= $w->nama; ?>">
							</div>
							<div class="form-group">
								<label class="label-control" for="tempat_lahir"><b>Tempat
										Lahir</b></label>
								<input type="text" class="form-control form-user-input" name="tempat_lahir"
									id="tempat_lahir" value="<?= $w->tempat_lahir; ?>">
							</div>
							<div class="form-group">
								<label class="label-control" for="tanggal_lahir"><b>Tanggal
										Lahir</b></label>
								<input type="date" class="form-control form-user-input" name="tanggal_lahir"
									id="tanggal_lahir" value="<?= $w->tanggal_lahir; ?>">
							</div>
							<div class="form-group">
								<label class="label-control" for="jenis_kelamin"><b>Jenis
										Kelamin</b></label>
								<select class="form-control form-user-input" name="jenis_kelamin" id="jenis_kelamin">
									<option value="Laki-Laki"
										<?= ($w->jenis_kelamin == 'Laki-Laki' ? 'selected' : ''); ?>
										class="form-user-input">Laki-Laki</option>
									<option value="Perempuan"
										<?= ($w->jenis_kelamin == 'Perempuan' ? 'selected' : ''); ?>
										class="form-user-input">Perempuan</option>
								</select>
							</div>
							<div class="form-group">
								<label class="label-control" for="golongan_darah"><b>Golongan
										Darah</b></label>
								<select class="form-control form-user-input" name="golongan_darah" id="golongan_darah">
									<option value="AB" class="form-user-input">AB</option>
									<option value="A" <?= ($w->golongan_darah == 'A' ? 'selected' : ''); ?>
										class="form-user-input">A</option>
									<option value="B" <?= ($w->golongan_darah == 'B' ? 'selected' : ''); ?>
										class="form-user-input">B</option>
									<option value="O" <?= ($w->golongan_darah == 'O' ? 'selected' : ''); ?>
										class="form-user-input">O</option>
									<option value="AB" <?= ($w->golongan_darah == 'AB' ? 'selected' : ''); ?>
										class="form-user-input">AB</option>
								</select>
							</div>
							<div class="form-group">
								<label class="label-control" for="agama"><b>Agama</b></label>
								<select class="form-control form-user-input" name="agama" id="agama">
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
							</div>
							<div class="form-group">
								<label class="label-control" for="alamat"><b>Alamat Lengkap</b></label>
								<input type="text" class="form-control form-user-input" name="alamat" id="alamat"
									value="<?= $w->alamat; ?>">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label class="label-control" for="rt"><b>RT</b></label>
								<input type="text" class="form-control form-user-input" name="rt" id="rt"
									value="<?= $w->rt; ?>">
							</div>
							<div class="form-group">
								<label class="label-control" for="kelurahan"><b>Kelurahan</b></label>
								<input type="text" class="form-control form-user-input" name="kelurahan" id="kelurahan"
									value="<?= $w->kelurahan; ?>">
							</div>
							<div class="form-group">
								<label class="label-control" for="kecamatan"><b>Kecamatan</b></label>
								<input type="text" class="form-control form-user-input" name="kecamatan" id="kecamatan"
									value="<?= $w->kecamatan; ?>">
							</div>
							<div class="form-group">
								<label class="label-control" for="status_perkawinan"><b>Status
										Perkawinan</b></label>
								<select class="form-control form-user-input" name="status_perkawinan"
									id="status_perkawinan">
									<option value="Kawin" <?= ($w->agama == 'Kawin' ? 'selected' : ''); ?>
										class="form-user-input">Kawin</option>
									<option value="Belum Kawin" <?= ($w->agama == 'Belum Kawin' ? 'selected' : ''); ?>
										class="form-user-input">Belum Kawin
									</option>
								</select>
							</div>
							<label class="label-control" for="pekerjaan"><b>Pekerjaan</b></label>
							<div class="form-group">
								<input type="text" class="form-control form-user-input" name="pekerjaan" id="pekerjaan"
									value="<?= $w->pekerjaan; ?>">
							</div>
							<div class="form-group">
								<label class="label-control" for="kewarganegaraan"><b>Kewarganegaraan</b></label>
								<select class="form-control form-user-input" name="kewarganegaraan"
									id="kewarganegaraan">
									<option value="WNI" <?= ($w->agama == 'WNI' ? 'selected' : ''); ?>
										class="form-user-input">WNI</option>
									<option value="WNA" <?= ($w->agama == 'WNA' ? 'selected' : ''); ?>
										class="form-user-input">WNA</option>
								</select>
							</div>
							<div class="form-group">
								<label class="label-control" for="no_kk"><b>No KK</b></label>
								<input type="text" class="form-control form-user-input" value="<?= $w->no_kk; ?>"
									name="no_kk" id="no_kk">
							</div>
							<div class="form-group">
								<label class="label-control" for="pendidikan_terakhir"><b>Pendidikan
										Terakhir</b></label>
								<select class="form-control form-user-input" name="pendidikan_terakhir"
									id="pendidikan_terakhir">
									<option value="TAMAT SD / SEDERAJAT"
										<?= ($w->agama == 'TAMAT SD / SEDERAJAT' ? 'selected' : ''); ?>
										class="form-user-input">
										TAMAT SD /
										SEDERAJAT</option>
									<option value="SLTP / SEDERAJAT"
										<?= ($w->agama == 'SLTP / SEDERAJAT' ? 'selected' : ''); ?>
										class="form-user-input">SLTP /
										SEDERAJAT
									</option>
									<option value="TIDAK / BELUM SEKOLAH"
										<?= ($w->agama == 'TIDAK / BELUM SEKOLAH' ? 'selected' : ''); ?>
										class="form-user-input">
										TIDAK / BELUM
										SEKOLAH</option>
									<option value="SLTA / SEDERAJAT"
										<?= ($w->agama == 'SLTA / SEDERAJAT' ? 'selected' : ''); ?>
										class="form-user-input">SLTA /
										SEDERAJAT
									</option>
									<option value="BELUM TAMAT SD / SEDERAJAT"
										<?= ($w->agama == 'BELUM TAMAT SD / SEDERAJAT' ? 'selected' : ''); ?>
										class="form-user-input">BELUM
										TAMAT SD / SEDERAJAT</option>
									<option value="DIPLOMA IV / STRATA I" class="form-user-input">
										DIPLOMA IV /
										STRATA I</option>
									<option value="AKADEMI / DIPLOMA III / S.MUDA"
										<?= ($w->agama == 'AKADEMI / DIPLOMA III / S.MUDA' ? 'selected' : ''); ?>
										class="form-user-input">
										AKADEMI / DIPLOMA III / S.MUDA</option>
									<option value="DIPLOMA I / II"
										<?= ($w->agama == 'DIPLOMA I / II' ? 'selected' : ''); ?>
										class="form-user-input">DIPLOMA I
										/ II
									</option>
									<option value="STRATA II" <?= ($w->agama == 'STRATA II' ? 'selected' : ''); ?>
										class="form-user-input">STRATA II
									</option>
									<option value="STRATA III" <?= ($w->agama == 'STRATA III' ? 'selected' : ''); ?>
										class="form-user-input">STRATA III
									</option>
								</select>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label class="label-control" for="status_hub_kel"><b>Status Hub
										Keluarga</b></label>
								<select class="form-control form-user-input" name="status_hub_kel" id="status_hub_kel">
									<option value="Kepala Keluarga"
										<?= ($w->status_hub_kel == 'Kepala Keluarga' ? 'selected' : ''); ?>
										class="form-user-input">Kepala Keluarga</option>
									<option value="Suami" <?= ($w->status_hub_kel == 'Suami' ? 'selected' : ''); ?>
										class="form-user-input">Suami</option>
									<option value="Isteri" <?= ($w->status_hub_kel == 'Isteri' ? 'selected' : ''); ?>
										class="form-user-input">Isteri</option>
									<option value="Anak" <?= ($w->status_hub_kel == 'Anak' ? 'selected' : ''); ?>
										class="form-user-input">Anak</option>
									<option value="Menantu" <?= ($w->status_hub_kel == 'Menantu' ? 'selected' : ''); ?>
										class="form-user-input">Menantu</option>
									<option value="Cucu" <?= ($w->status_hub_kel == 'Cucu' ? 'selected' : ''); ?>
										class="form-user-input">Cucu</option>
									<option value="Orang Tua"
										<?= ($w->status_hub_kel == 'Orang Tua' ? 'selected' : ''); ?>
										class="form-user-input">Orang Tua
									</option>
									<option value="Mertua" <?= ($w->status_hub_kel == 'Mertua' ? 'selected' : ''); ?>
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
							</div>
							<div class="form-group">
								<label class="label-control" for="no_hp"><b>No HandPhone</b></label>
								<input type="text" class="form-control form-user-input" value="<?= $w->no_hp; ?>"
									name="no_hp" id="no_hp">
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
					<?= form_close() ?>
				</div>
				<?php } ?>

			</div>
		</div>


	</div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
