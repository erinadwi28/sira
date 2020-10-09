<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Form Pengajuan Surat Pindah</h1>
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
						<form class="form-horizontal" id="form_suket014" action="<?= base_url('warga/aksi_tambah_permohonan_suket014') ?>" method="POST">
							<div class="form-group">
								<div class="form-group" style="margin-top: 20px;">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Nama" class="col-sm-3 col-form-label">Nama</label>
										<div class="col-sm-8">
											<div class="form-line">
												<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" value="<?= $detail->nama; ?>">
												<i class="fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Error massage</small>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="form-group" style="margin-top: 20px;">
									<div class="form-group row" style="margin-left: 10px; ">
										<label for="Tempat_lahir" class="col-sm-3 col-form-label">Tempat Lahir</label>
										<div class="col-sm-8">
											<div class="form-line">
												<input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" value="<?= $detail->tempat_lahir; ?>">
												<i class="fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Error massage</small>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="form-group" style="margin-top: 20px;">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Tanggal_lahir" class="col-sm-3 col-form-label">Tanggal Lahir</label>
										<div class="col-sm-8">
											<div class="form-line">
												<input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?= $detail->tanggal_lahir; ?>">
												<i class="fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Error massage</small>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="form-group" style="margin-top: 20px;">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Jenis_kelamin" class="col-sm-3 col-form-label">Jenis Kelamin</label>
										<div class="col-sm-8">
											<div class="form-line">
												<select class="form-control " id="jenis_kelamin" name="jenis_kelamin">
													<option value="Pilih jenis kelamin..." class="form-user-input">Pilih jenis kelamin...</option>
													<option value="Laki-Laki" <?= ($detail->jenis_kelamin == 'Laki-Laki' ? ' selected' : ''); ?> class="form-user-input">Laki-Laki
													</option>
													<option value="Perempuan" <?= ($detail->jenis_kelamin == 'Perempuan' ? ' selected' : ''); ?> class="form-user-input">Perempuan
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
							<div class="form-group">
								<div class="form-group" style="margin-top: 20px;">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Agama" class="col-sm-3 col-form-label">Agama</label>
										<div class="col-sm-8">
											<div class="form-line">
												<select class="form-control" id="agama" name="agama">
													<option value="Pilih jenis agama..." class="form-user-input">Pilih jenis agama...</option>
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
												<small>Error massage</small>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="form-group" style="margin-top: 20px;">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="kewarganegaraan" class="col-sm-3 col-form-label">Kewarganegaraan</label>
										<div class="col-sm-8">
											<div class="form-line">
												<select class="form-control " id="kewarganegaraan" name="kewarganegaraan">
													<option value="Pilih kewarganegaraan..." class="form-user-input">Pilih kewarganegaraan...</option>
													<option value="WNI" <?= ($detail->kewarganegaraan == 'WNI' ? ' selected' : ''); ?> class="form-user-input">WNI</option>
													<option value="WNA" <?= ($detail->kewarganegaraan == 'WNA' ? ' selected' : ''); ?> class="form-user-input">WNA</option>
												</select>
												<i class="fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Error massage</small>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="form-group" style="margin-top: 20px;">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="pendidikan_terakhir" class="col-sm-3 col-form-label">Pendidikan Terakhir</label>
										<div class="col-sm-8">
											<div class="form-line">
												<select class="form-control" id="pendidikan_terakhir" name="pendidikan_terakhir">
													<option value="Pilih pendidikan terakhir..." class="form-user-input">Pilih pendidikan terakhir...</option>
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
												<small>Error massage</small>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="form-group" style="margin-top: 20px;">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Pekerjaan" class="col-sm-3 col-form-label">Pekerjaan</label>
										<div class="col-sm-8">
											<div class="form-line">
												<input type="text" class="form-control form-user-input" name="pekerjaan" id="pekerjaan" value="<?= $detail->pekerjaan; ?>">
												<i class="fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Error massage</small>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="form-group" style="margin-top: 20px;">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="status_perkawinan" class="col-sm-3 col-form-label">Status Perkawinan</label>
										<div class="col-sm-8">
											<div class="form-line">
												<select class="form-control " id="status_perkawinan" name="status_perkawinan">
													<option value="Belum Kawin" <?= ($detail->status_perkawinan == 'Belum Kawin' ? ' selected' : ''); ?> class="form-user-input">Belum Kawin
													</option>
													<option value="Kawin" <?= ($detail->status_perkawinan == 'Kawin' ? ' selected' : ''); ?> class="form-user-input">Kawin
													</option>
												</select>
												<i class=" fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Error massage</small>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="form-group" style="margin-top: 20px;">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="alamat_asal" class="col-sm-3 col-form-label">Alamat Asal</label>
										<div class="col-sm-8">
											<div class="form-line">
												<textarea class="form-control" id="alamat_asal" name="alamat_asal" rows="3" placeholder="Alamat asal..."></textarea>
												<i class="fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Tidak boleh kosong</small>
											</div>

										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="form-group" style="margin-top: 20px;">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="no_kk" class="col-sm-3 col-form-label">No. KK</label>
										<div class="col-sm-8">
											<div class="form-line">
												<input type="text" class="form-control" id="no_kk" name="no_kk" placeholder="No. KK" value="<?= $detail->no_kk; ?>">
												<i class="fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Error massage</small>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="form-group" style="margin-top: 20px;">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Tanggal_kk" class="col-sm-3 col-form-label">Tanggal KK</label>
										<div class="col-sm-8">
											<div class="form-line">
												<input type="date" class="form-control" id="tanggal_kk" name="tanggal_kk">
												<i class="fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Error massage</small>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="form-group" style="margin-top: 20px;">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="alamat_pindah" class="col-sm-3 col-form-label">Alamat Pindah</label>
										<div class="col-sm-8">
											<div class="form-line">
												<input class="form-control" id="alamat_pindah" name="alamat_pindah" rows="3" placeholder="Alamat pindah ..."></input>
												<i class="fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Tidak boleh kosong</small>
											</div>

										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="form-group" style="margin-top: 20px;">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="kelurahan_pindah" class="col-sm-3 col-form-label">kelurahan Pindah</label>
										<div class="col-sm-8">
											<div class="form-line">
												<input class="form-control" id="kelurahan_pindah" name="kelurahan_pindah" rows="3" placeholder="Kelurahan pindah..."></input>
												<i class="fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Tidak boleh kosong</small>
											</div>

										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="form-group" style="margin-top: 20px;">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="kecamatan_pindah" class="col-sm-3 col-form-label">kecamatan Pindah</label>
										<div class="col-sm-8">
											<div class="form-line">
												<input class="form-control" id="kecamatan_pindah" name="kecamatan_pindah" rows="3" placeholder="Kecamatan pindah..."></input>
												<i class="fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Tidak boleh kosong</small>
											</div>

										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="form-group" style="margin-top: 20px;">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="kabupaten_pindah" class="col-sm-3 col-form-label">Kabupaten Pindah</label>
										<div class="col-sm-8">
											<div class="form-line">
												<input class="form-control" id="kabupaten_pindah" name="kabupaten_pindah" rows="3" placeholder="Kabupaten pindah..."></input>
												<i class="fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Tidak boleh kosong</small>
											</div>

										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="form-group" style="margin-top: 20px;">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="provinsi_pindah" class="col-sm-3 col-form-label">Provinsi Pindah</label>
										<div class="col-sm-8">
											<div class="form-line">
												<input class="form-control" id="provinsi_pindah" name="provinsi_pindah" rows="3" placeholder="Provinsi pindah..."></input>
												<i class="fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Tidak boleh kosong</small>
											</div>

										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="form-group" style="margin-top: 20px;">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Tanggal_pindah" class="col-sm-3 col-form-label">Tanggal Pindah</label>
										<div class="col-sm-8">
											<div class="form-line">
												<input type="date" class="form-control" id="tanggal_pindah" name="tanggal_pindah">
												<i class="fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Error massage</small>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="form-group" style="margin-top: 20px;">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="alasan_pindah" class="col-sm-3 col-form-label">Alasan Pindah</label>
										<div class="col-sm-8">
											<div class="form-line">
												<textarea class="form-control" id="alasan_pindah" name="alasan_pindah" rows="3" placeholder="Alasan Pindah... "></textarea>
												<i class="fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Tidak boleh kosong</small>
											</div>

										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="form-group" style="margin-top: 20px;">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="jumlah_pengikut" class="col-sm-3 col-form-label">Jml Pengikut</label>
										<div class="col-sm-8">
											<div class="form-line">
												<input type="number" class="form-control" id="jumlah_pengikut" placeholder="Jumlah pengikut..." name="jumlah_pengikut">
												<i class="fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Error massage</small>
											</div>
										</div>
									</div>
								</div>
							</div>
							<input type="hidden" class="form-control" id="id_nama_surat" name="id_nama_surat" required="" value="14">
							<input type="hidden" class="form-control" id="id_warga" name="id_warga" required="" value="<?= $detail->id_warga; ?>">
							<input type="hidden" class="form-control" id="status" name="status" required="" value="Belum Tuntas">
				</div>
			</div>
			<div class="card-footer">
				<div class="float-right">
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
		</div>
		<!--End Content Profile-->
	</div>
</div>
<!-- /.container-fluid -->