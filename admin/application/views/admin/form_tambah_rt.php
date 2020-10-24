			<!-- Begin Page Content -->
			<div class="container-fluid">
				<!-- Page Heading -->
				<div class="d-sm-flex align-items-center justify-content-between mb-4">
					<h1 class="h3 mb-0 text-gray-800">Tambah Data Ketua RT</h1>
					<a href="<?= base_url('admin/form_tambah_rt') ?>">
						<button id="btn_kembali" class="btn btn-sm btn-warning" type="">
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
								<?php
								foreach ($detail_warga as $detail) {

								?>
									<!-- <table class="table-responsive">
													
												</table> -->
									<form role="form" action="<?= base_url('admin/aksi_tambah_rt') ?>" method="post" id="formrt">
									<input type="hidden" name="length" value="10">
										<div class="row">
											<div class="col-md-4">
												<div class="form-group">
													<label class="label-control" for="nik"><b>NIK</b></label>
													<input type="text" class="form-control form-user-input" name="nik" id="nik" value="<?= $detail->nik; ?>">
													<i class="fas fa-check-circle"></i>
													<i class="fas fa-exclamation-circle"></i>
													<small>Error Message</small>
												</div>

												<div class="form-group">
													<label class="label-control" for="nama"><b>Nama Lengkap</b></label>
													<input type="text" class="form-control form-user-input" name="nama" id="nama" value="<?= $detail->nama; ?>">
													<i class="fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Error Message</small>
												</div>
												<div class="form-group">
													<label class="label-control" for="tempat_lahir"><b>Tempat
															Lahir</b></label>
													<input type="text" class="form-control form-user-input" name="tempat_lahir" id="tempat_lahir" value="<?= $detail->tempat_lahir; ?>">
													<i class="fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Error Message</small>
												</div>
												<div class="form-group">
													<label class="label-control" for="tanggal_lahir"><b>Tanggal
															Lahir</b></label>
													<input type="date" class="form-control form-user-input" name="tanggal_lahir" id="tanggal_lahir" value="<?= $detail->tanggal_lahir; ?>">
													<i class="fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Error Message</small>
												</div>
												<div class="form-group">
													<label class="label-control" for="jenis_kelamin"><b>Jenis
															Kelamin</b></label>
													<select class="form-control form-user-input" name="jenis_kelamin" id="jenis_kelamin">
														<option value="Laki-Laki" <?= ($detail->jenis_kelamin == 'Laki-Laki' ? ' selected' : ''); ?> class="form-user-input">Laki-Laki
														</option>
														<option value="Perempuan" <?= ($detail->jenis_kelamin == 'Perempuan' ? ' selected' : ''); ?> class="form-user-input">Perempuan
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
														<option value="AB" <?= ($detail->golongan_darah == 'AB' ? ' selected' : ''); ?> class="form-user-input">AB</option>
														<option value="A" <?= ($detail->golongan_darah == 'A' ? ' selected' : ''); ?> class="form-user-input">A</option>
														<option value="B" <?= ($detail->golongan_darah == 'B' ? ' selected' : ''); ?> class="form-user-input">B</option>
														<option value="O" <?= ($detail->golongan_darah == 'O' ? ' selected' : ''); ?> class="form-user-input">O</option>
													</select>
													<i class="fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Error Message</small>
												</div>
												<div class="form-group">
													<label class="label-control" for="agama"><b>Agama</b></label>
													<select class="form-control form-user-input" name="agama" id="agama">
														<option value="Islam" <?= ($detail->agama == 'Islam' ? ' selected' : ''); ?> class="form-user-input">Islam</option>
														<option value="Protestan" <?= ($detail->agama == 'Protestan' ? ' selected' : ''); ?> class="form-user-input">Protestan
														</option>
														<option value="Katholik" <?= ($detail->agama == 'Katholik' ? ' selected' : ''); ?> class="form-user-input">Katholik
														</option>
														<option value="Hindu" <?= ($detail->agama == 'Hindu' ? ' selected' : ''); ?> class="form-user-input">Hindu</option>
														<option value="Budha" <?= ($detail->agama == 'Budha' ? ' selected' : ''); ?> class="form-user-input">Budha</option>
														<option value="Khonghucu" <?= ($detail->agama == 'Khonghucu' ? ' selected' : ''); ?> class="form-user-input">Khonghucu
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
													<input type="text" class="form-control form-user-input" name="alamat" id="alamat" value="<?= $detail->alamat; ?>">
													<i class="fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Error Message</small>
												</div>
												<div class="form-group">
													<label class="label-control" for="rt"><b>RT</b></label>
													<input type="text" class="form-control form-user-input" name="rt" id="rt" value="<?= $detail->rt; ?>">
													<i class="fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Error Message</small>
												</div>
												<div class="form-group">
													<label class="label-control" for="kelurahan"><b>Kelurahan</b></label>
													<input type="text" class="form-control form-user-input" name="kelurahan" id="kelurahan" value="<?= $detail->kelurahan; ?>">
													<i class="fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Error Message</small>
												</div>
												<div class="form-group">
													<label class="label-control" for="kecamatan"><b>Kecamatan</b></label>
													<input type="text" class="form-control form-user-input" name="kecamatan" id="kecamatan" value="<?= $detail->kecamatan; ?>">
													<i class="fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Error Message</small>
												</div>
												<div class="form-group">
													<label class="label-control" for="status_perkawinan"><b>Status
															Perkawinan</b></label>
													<select class="form-control form-user-input" name="status_perkawinan" id="status_perkawinan">
														<option value="Kawin" <?= ($detail->status_perkawinan == 'Kawin' ? ' selected' : ''); ?> class="form-user-input">Kawin</option>
														<option value="Belum Kawin" <?= ($detail->status_perkawinan == 'Belum Kawin' ? ' selected' : ''); ?> class="form-user-input">Belum Kawin
														</option>
													</select>
												<i class="fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Error Message</small>
												</div>
												
												<div class="form-group">
												<label class="label-control" for="pekerjaan"><b>Pekerjaan</b></label>
													<input type="text" class="form-control form-user-input" name="pekerjaan" id="pekerjaan" value="<?= $detail->pekerjaan; ?>">
													<i class="fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Error Message</small>
												</div>
												<div class="form-group">
													<label class="label-control" for="kewarganegaraan"><b>Kewarganegaraan</b></label>
													<select class="form-control form-user-input" name="kewarganegaraan" id="kewarganegaraan">
														<option value="WNI" <?= ($detail->kewarganegaraan == 'WNI' ? ' selected' : ''); ?> class="form-user-input">WNI</option>
														<option value="WNA" <?= ($detail->kewarganegaraan == 'WNA' ? ' selected' : ''); ?> class="form-user-input">WNA</option>
													</select>
													<i class="fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Error Message</small>
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<div class="form-group">
														<label class="label-control" for="no_kk"><b>No KK</b></label>
														<input type="text" class="form-control form-user-input" name="no_kk" id="no_kk" value="<?= $detail->no_kk; ?>">
														<i class="fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Error Message</small>
													</div>
													<div class="form-group">
														<label class="label-control" for="pendidikan_terakhir" selected><b>Pendidikan
																Terakhir</b></label>
														<select class="form-control form-user-input" name="pendidikan_terakhir" id="pendidikan_terakhir">
															<option value="TAMAT SD / SEDERAJAT" <?= ($detail->pendidikan_terakhir == 'TAMAT SD / SEDERAJAT' ? ' selected' : ''); ?> class="form-user-input">
																TAMAT SD /
																SEDERAJAT</option>
															<option value="SLTP / SEDERAJAT" <?= ($detail->pendidikan_terakhir == 'SLTP / SEDERAJAT' ? ' selected' : ''); ?> class="form-user-input">SLTP /
																SEDERAJAT
															</option>
															<option value="TIDAK / BELUM SEKOLAH" <?= ($detail->pendidikan_terakhir == 'TIDAK / BELUM SEKOLAH' ? ' selected' : ''); ?> class="form-user-input">
																TIDAK / BELUM
																SEKOLAH</option>
															<option value="SLTA / SEDERAJAT" <?= ($detail->pendidikan_terakhir == 'SLTA / SEDERAJAT' ? ' selected' : ''); ?> class="form-user-input">SLTA /
																SEDERAJAT
															</option>
															<option value="BELUM TAMAT SD / SEDERAJAT" <?= ($detail->pendidikan_terakhir == 'BELUM TAMAT SD / SEDERAJAT' ? ' selected' : ''); ?> class="form-user-input">BELUM
																TAMAT SD / SEDERAJAT</option>
															<option value="DIPLOMA IV / STRATA I" <?= ($detail->pendidikan_terakhir == 'DIPLOMA IV / STRATA I' ? ' selected' : ''); ?> class="form-user-input">
																DIPLOMA IV /
																STRATA I</option>
															<option value="AKADEMI / DIPLOMA III / S.MUDA" <?= ($detail->pendidikan_terakhir == 'AKADEMI / DIPLOMA III / S.MUDA' ? ' selected' : ''); ?> class="form-user-input">
																AKADEMI / DIPLOMA III / S.MUDA</option>
															<option value="DIPLOMA I / II" <?= ($detail->pendidikan_terakhir == 'DIPLOMA I / II' ? ' selected' : ''); ?> class="form-user-input">DIPLOMA I
																/ II
															</option>
															<option value="STRATA II" <?= ($detail->pendidikan_terakhir == 'STRATA II' ? ' selected' : ''); ?> class="form-user-input">STRATA II
															</option>
															<option value="STRATA III" <?= ($detail->pendidikan_terakhir == 'STRATA III' ? ' selected' : ''); ?> class="form-user-input">STRATA III
															</option>
														</select>
														<i class="fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Error Message</small>
													</div>
													<div>
													<label class="label-control" for="status_hub_kel"><b>Status Hub
															Keluarga</b></label>
													<select class="form-control form-user-input" name="status_hub_kel" id="status_hub_kel">
														<option value="Kepala Keluarga" <?= ($detail->status_hub_kel == 'Kepala Keluarga' ? ' selected' : ''); ?> class="form-user-input">Kepala
															Keluarga
														</option>
														<option value="Suami" <?= ($detail->status_hub_kel == 'Suami' ? ' selected' : ''); ?> class="form-user-input">Suami</option>
														<option value="Isteri" <?= ($detail->status_hub_kel == 'Isteri' ? ' selected' : ''); ?> class="form-user-input">Isteri</option>
														<option value="Anak" <?= ($detail->status_hub_kel == 'Anak' ? ' selected' : ''); ?> class="form-user-input">Anak</option>
														<option value="Menantu" <?= ($detail->status_hub_kel == 'Menantu' ? ' selected' : ''); ?> class="form-user-input">Menantu</option>
														<option value="Cucu" <?= ($detail->status_hub_kel == 'Cucu' ? ' selected' : ''); ?> class="form-user-input">Cucu</option>
														<option value="Orang Tua" <?= ($detail->status_hub_kel == 'Orang Tua' ? ' selected' : ''); ?> class="form-user-input">Orang Tua
														</option>
														<option value="Mertua" <?= ($detail->status_hub_kel == 'Mertua' ? ' selected' : ''); ?> class="form-user-input">Mertua</option>
														<option value="Famili Lain" <?= ($detail->status_hub_kel == 'Famili Lain' ? ' selected' : ''); ?> class="form-user-input">Famili Lain
														</option>
														<option value="Pembantu" <?= ($detail->status_hub_kel == 'Pembantu' ? ' selected' : ''); ?> class="form-user-input">Pembantu
														</option>
													</select>
													<i class="fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Error Message</small>
												</div>
												<div class="form-group">
													<label class="label-control" for="no_hp"><b>No HandPhone</b></label>
													<input type="text" class="form-control form-user-input" name="no_hp" id="no_hp" value="<?= $detail->no_hp; ?>">
													<i class="fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Error Message</small>
												</div>
												<div class="form-group">
												
												<label class="label-control" for="kata_sandi"><b>Kata Sandi</b></label>
												<input type="text" class="form-control" name="row_password" id="kata_sandi" placeholder="Klik Acak Password" >&nbsp;
												<i class="fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Error Message</small>																		
												<input style="margin-top: 15px;" type="button" class="button btn-sm btn-primary" value="Acak Password" onclick="generate2();" tabindex="2">
												<br />

											</div>
											</div>
											
										
									
										
										<input type="hidden" class="form-control form-user-input " name="id_warga" id="id_warga" value="<?= $detail->id_warga; ?>">
										</div>
									
								<?php } ?>
							</div>
							<hr>
							<div class="">
											<div class="float-right">
												<a href="">
													<button id="btn_simpan" class="btn btn-sm btn-primary" type="submit">
														<i class="far fa-save nav-icon">
														</i> Simpan
													</button>
												</a>
											</div>
										</div>
										
						</div>
						</form>
					</div>
				</div>

			</div>
			</div>
			<!-- End of Main Content -->