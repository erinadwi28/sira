<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Form Ubah Pengajuan Surat Keterangan Kelahiran</h1>
		<?php
        foreach ($detail_suket as $detail) {

        ?>
		<a href="<?= base_url('warga/detail_suket010/' . $detail->id_surat . '/' . $detail->id_permohonan_surat) ?>">
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
			<div class="card shadow mb-5">
				<div class="body">

					<form class="form-horizontal" id="form_suket010"
						action="<?= base_url('warga/aksi_ubah_suket010') ?>" method="POST">
						<div class="form-group">
							<div class="form-group" style="margin-top: 15px;">
								<div class="form-group row" style="margin-left: 10px;">
									<label for="Nama_anak" class="col-sm-3 col-form-label">Nama Anak</label>
									<div class="col-sm-8">
										<div class="form-line focused">
											<input type="text" class="form-control" id="nama_anak" name="nama_anak"
												placeholder="masukkan nama anak disini..."
												value="<?= $detail->nama_anak; ?>" required="">
											<i class=" fas fa-check-circle"></i>
											<i class="fas fa-exclamation-circle"></i>
											<small>Error massage</small>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group row" style="margin-left: 10px;">
								<label for="Hari_lahir" class="col-sm-3 col-form-label">Hari Lahir</label>
								<div class="col-sm-8">
									<div class="form-line">
										<select class="form-control" id="hari_lahir" name="hari_lahir">
											<option value="Senin"
												<?= ($detail->hari_lahir == 'Senin' ? ' selected' : ''); ?>
												class="form-user-input">Senin</option>
											<option value="Selasa"
												<?= ($detail->hari_lahir == 'Selasa' ? ' selected' : ''); ?>
												class="form-user-input">Selasa</option>
											<option value="Rabu"
												<?= ($detail->hari_lahir == 'Rabu' ? ' selected' : ''); ?>
												class="form-user-input">Rabu</option>
											<option value="Kamis"
												<?= ($detail->hari_lahir == 'Kamis' ? ' selected' : ''); ?>
												class="form-user-input">Kamis</option>
											<option value="Jumat"
												<?= ($detail->hari_lahir == 'Jumat' ? ' selected' : ''); ?>
												class="form-user-input">Jumat</option>
											<option value="Sabtu"
												<?= ($detail->hari_lahir == 'Sabtu' ? ' selected' : ''); ?>
												class="form-user-input">Sabtu</option>
											<option value="Minggu"
												<?= ($detail->hari_lahir == 'Minggu' ? ' selected' : ''); ?>
												class="form-user-input">Minggu</option>
										</select>
										<i class=" fas fa-check-circle"></i>
										<i class="fas fa-exclamation-circle"></i>
										<small>Error massage</small>
									</div>
								</div>
							</div>
							<div class="form-group row" style="margin-left: 10px;">
								<label for="Tempat_lahir" class="col-sm-3 col-form-label">Tempat Lahir</label>
								<div class="col-sm-8">
									<div class="form-line focused">
										<input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"
											placeholder="Isikan tempat lahir anak..."
											value="<?= $detail->tempat_lahir; ?>" required="">
										<i class=" fas fa-check-circle"></i>
										<i class="fas fa-exclamation-circle"></i>
										<small>Error massage</small>
									</div>
								</div>
							</div>
							<div class="form-group row" style="margin-left: 10px;">
								<label for="Tanggal_lahir" class="col-sm-3 col-form-label">Tanggal Lahir</label>
								<div class="col-sm-8">
									<div class="form-line">
										<input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
											value="<?= $detail->tanggal_lahir; ?>" required="">
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
							<label for="Jam_lahir" class="col-sm-3 col-form-label">Jam Lahir</label>
							<div class="col-sm-8">
								<div class="form-line focused">
									<input type="text" class="form-control" id="jam_lahir" name="jam_lahir"
										placeholder="Isikan jam lahir anak..." value="<?= $detail->jam_lahir; ?>"
										required="">
									<i class=" fas fa-check-circle"></i>
									<i class="fas fa-exclamation-circle"></i>
									<small>Error massage</small>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group row" style="margin-left: 10px;">
						<label for="Jenis_kelamin" class="col-sm-3 col-form-label">Jenis Kelamin</label>
						<div class="col-sm-8">
							<div class="form-line">
								<select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
									<option value="Laki-Laki"
										<?= ($detail->jenis_kelamin == 'Laki-Laki' ? ' selected' : ''); ?>
										class="form-user-input">Laki-Laki
									</option>
									<option value="Perempuan"
										<?= ($detail->jenis_kelamin == 'Perempuan' ? ' selected' : ''); ?>
										class="form-user-input">Perempuan
									</option>
								</select>
								<i class=" fas fa-check-circle"></i>
								<i class="fas fa-exclamation-circle"></i>
								<small>Error massage</small>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="form-group row" style="margin-left: 10px;">
							<label for="Kelahiran" class="col-sm-3 col-form-label">Kelahiran</label>
							<div class="col-sm-8">
								<div class="form-line">
									<select class="form-control" id="kelahiran" name="kelahiran">
										<option value="pilih kelahiran..." class="form-user-input">pilih kelahiran...
										</option>
										<option value="Tunggal"
											<?= ($detail->kelahiran == 'Tunggal' ? ' selected' : ''); ?>
											class="form-user-input">Tunggal
										</option>
										<option value="Kembar"
											<?= ($detail->kelahiran == 'Kembar' ? ' selected' : ''); ?>
											class="form-user-input">Kembar
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
							<label for="Kembar_ke" class="col-sm-3 col-form-label">Kembar ke</label>
							<div class="col-sm-8">
								<div class="form-line">
									<select class="form-control" id="kembar_ke" name="kembar_ke">
										<option value="Jika anak kelahiran kembar..." class="form-user-input">Jika anak
											kelahiran kembar...</option>
										<option value="1" <?= ($detail->kembar_ke == '1' ? ' selected' : ''); ?>
											class="form-user-input">1 </option>
										<option value="2" <?= ($detail->kembar_ke == '2' ? ' selected' : ''); ?>
											class="form-user-input">2 </option>
										<option value="3" <?= ($detail->kembar_ke == '3' ? ' selected' : ''); ?>
											class="form-user-input">3 </option>
										<option value="4" <?= ($detail->kembar_ke == '4' ? ' selected' : ''); ?>
											class="form-user-input">4 </option>
										<option value="5" <?= ($detail->kembar_ke == '5' ? ' selected' : ''); ?>
											class="form-user-input">5 </option>
										<option value="Tidak ada" <?= ($detail->kembar_ke == 'Tidak ada' ? ' selected' : ''); ?>
											class="form-user-input">Tidak ada </option>
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
							<label for="tempat_persalinan" class="col-sm-3 col-form-label">Tempat Bersalin</label>
							<div class="col-sm-8">
								<div class="form-line">
									<select class="form-control" id="tempat_persalinan" name="tempat_persalinan">
										<option value="pilih tempat bersalin..." class="form-user-input">pilih tempat
											bersalin...</option>
										<option value="Rumah Bersalin"
											<?= ($detail->tempat_persalinan == 'Rumah Bersalin' ? ' selected' : ''); ?>
											class="form-user-input"> Rumah Bersalin
										</option>
										<option value="Bukan Rumah Bersalin"
											<?= ($detail->tempat_persalinan == 'Bukan Rumah Bersalin' ? ' selected' : ''); ?>
											class="form-user-input">Bukan Rumah Bersalin
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
							<label for="Alamat_persalinan" class="col-sm-3 col-form-label">Alamat Persalinan</label>
							<div class="col-sm-8">
								<div class="form-line">
									<textarea class="form-control" id="alamat_persalinan" name="alamat_persalinan"
										rows="3"
										placeholder="masukkan alamat persalinan disini..."><?= $detail->alamat_persalinan; ?></textarea>
									<i class=" fas fa-check-circle"></i>
									<i class="fas fa-exclamation-circle"></i>
									<small>Error massage</small>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="form-group row" style="margin-left: 10px;">
							<label for="penolong_persalinan" class="col-sm-3 col-form-label">Penolong Bersalin</label>
							<div class="col-sm-8">
								<div class="form-line">
									<select class="form-control" id="penolong_persalinan" name="penolong_persalinan">
										<option value="pilih penolong bersalin..." class="form-user-input">pilih
											penolong bersalin...</option>
										<option value="Dokter"
											<?= ($detail->penolong_persalinan == 'Dokter' ? ' selected' : ''); ?>
											class="form-user-input"> Dokter</option>
										<option value="Bidan/Perawat"
											<?= ($detail->penolong_persalinan == 'Bidan/Perawat' ? ' selected' : ''); ?>
											class="form-user-input"> Bidan/Perawat</option>
										<option value="Dukun"
											<?= ($detail->penolong_persalinan == 'Dukun' ? ' selected' : ''); ?>
											class="form-user-input"> Dukun</option>
										<option value="Lainnya"
											<?= ($detail->penolong_persalinan == 'Lainnya' ? ' selected' : ''); ?>
											class="form-user-input"> Lainnya</option>

									</select>
									<i class=" fas fa-check-circle"></i>
									<i class="fas fa-exclamation-circle"></i>
									<small>Error massage</small>
								</div>
							</div>
						</div>
					</div>

					<div class="form-group" style="margin-top: 15px;">
						<div class="form-group row" style="margin-left: 10px;">
							<label for="Nama_ibu" class="col-sm-3 col-form-label">Nama Ibu</label>
							<div class="col-sm-8">
								<div class="form-line focused">
									<input type="text" class="form-control" id="nama_ibu" name="nama_ibu"
										placeholder="Isikan nama ibu..." value="<?= $detail->nama_ibu; ?>" required="">
									<i class=" fas fa-check-circle"></i>
									<i class="fas fa-exclamation-circle"></i>
									<small>Error massage</small>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="form-group row" style="margin-left: 10px;">
							<label for="Alamat_ibu" class="col-sm-3 col-form-label">Alamat Ibu</label>
							<div class="col-sm-8">
								<div class="form-line">
									<textarea class="form-control" id="alamat_ibu" name="alamat_ibu" rows="3"
										placeholder="masukkan alamat disini..."><?= $detail->alamat_ibu; ?></textarea>
									<i class=" fas fa-check-circle"></i>
									<i class="fas fa-exclamation-circle"></i>
									<small>Error massage</small>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="form-group row" style="margin-left: 10px;">
							<label for="tanggal_lahir_ibu" class="col-sm-3 col-form-label">Tanggal Lahir Ibu</label>
							<div class="col-sm-8">
								<div class="form-line">
									<input type="date" class="form-control" id="tanggal_lahir_ibu"
										name="tanggal_lahir_ibu" value="<?= $detail->tanggal_lahir_ibu; ?>">
									<i class=" fas fa-check-circle"></i>
									<i class="fas fa-exclamation-circle"></i>
									<small>Error massage</small>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="form-group" style="margin-top: 15px;">
							<div class="form-group row" style="margin-left: 10px;">
								<label for="umur_ibu" class="col-sm-3 col-form-label">Umur Ibu</label>
								<div class="col-sm-8">
									<div class="form-line focused">
										<input type="number" class="form-control" id="umur_ibu" name="umur_ibu"
											placeholder="masukkan umur ibu disini..." value="<?= $detail->umur_ibu; ?>">
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
								<label for="kewarganegaraan_ibu" class="col-sm-3 col-form-label">Kewarganegaraan</label>
								<div class="col-sm-8">
									<div class="form-line">
										<select class="form-control " id="kewarganegaraan_ibu"
											name="kewarganegaraan_ibu">
											<option value="pilih kewarganegaraan ibu..." class="form-user-input">pilih
												kewarganegaraan ibu...</option>
											<option value="WNI"
												<?= ($detail->kewarganegaraan_ibu == 'WNI' ? ' selected' : ''); ?>
												class="form-user-input">WNI</option>
											<option value="WNA"
												<?= ($detail->kewarganegaraan_ibu == 'WNA' ? ' selected' : ''); ?>
												class="form-user-input">WNA</option>
										</select>
										<i class="fas fa-check-circle"></i>
										<i class="fas fa-exclamation-circle"></i>
										<small>Error massage</small>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group" style="margin-top: 15px;">
						<div class="form-group row" style="margin-left: 10px;">
							<label for="Nama_ayah" class="col-sm-3 col-form-label">Nama Ayah</label>
							<div class="col-sm-8">
								<div class="form-line focused">
									<input type="text" class="form-control" id="nama_ayah" name="nama_ayah"
										placeholder="Isikan nama ayah..." value="<?= $detail->nama_ayah; ?>"
										required="">
									<i class=" fas fa-check-circle"></i>
									<i class="fas fa-exclamation-circle"></i>
									<small>Error massage</small>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="form-group row" style="margin-left: 10px;">
							<label for="tanggal_lahir_ayah" class="col-sm-3 col-form-label">Tanggal Lahir Ayah</label>
							<div class="col-sm-8">
								<div class="form-line">
									<input type="date" class="form-control" id="tanggal_lahir_ayah"
										name="tanggal_lahir_ayah" value="<?= $detail->tanggal_lahir_ayah; ?>">
									<i class=" fas fa-check-circle"></i>
									<i class="fas fa-exclamation-circle"></i>
									<small>Error massage</small>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="form-group" style="margin-top: 15px;">
							<div class="form-group row" style="margin-left: 10px;">
								<label for="umur_ayah" class="col-sm-3 col-form-label">Umur Ayah</label>
								<div class="col-sm-8">
									<div class="form-line focused">
										<input type="number" class="form-control" id="umur_ayah" name="umur_ayah"
											placeholder="masukkan umur ayah disini..."
											value="<?= $detail->umur_ayah; ?>">
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
								<label for="kewarganegaraan_ayah"
									class="col-sm-3 col-form-label">Kewarganegaraan</label>
								<div class="col-sm-8">
									<div class="form-line">
										<select class="form-control " id="kewarganegaraan_ayah"
											name="kewarganegaraan_ayah">
											<option value="pilih kewarganegaraan ayah..." class="form-user-input">pilih
												kewarganegaraan ayah...</option>
											<option value="WNI"
												<?= ($detail->kewarganegaraan_ayah == 'WNI' ? ' selected' : ''); ?>
												class="form-user-input">WNI</option>
											<option value="WNA"
												<?= ($detail->kewarganegaraan_ayah == 'WNA' ? ' selected' : ''); ?>
												class="form-user-input">WNA</option>
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
						<div class="form-group row" style="margin-left: 10px;">
							<label for="No_kk" class="col-sm-3 col-form-label">No. KK</label>
							<div class="col-sm-8">
								<div class="form-line">
									<input type="text" class="form-control" id="no_kk" name="no_kk"
										value="<?= $detail->no_kk; ?>" placeholder="masukkan NO KK disini...">
									<i class=" fas fa-check-circle"></i>
									<i class="fas fa-exclamation-circle"></i>
									<small>Error massage</small>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="form-group row" style="margin-left: 10px;">
							<label for="No_ktp" class="col-sm-3 col-form-label">No. KTP</label>
							<div class="col-sm-8">
								<div class="form-line">
									<input type="text" class="form-control" id="no_ktp" name="no_ktp"
										value="<?= $detail->no_ktp; ?>" placeholder="masukkan NO KTP disini...">
									<i class=" fas fa-check-circle"></i>
									<i class="fas fa-exclamation-circle"></i>
									<small>Error massage</small>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group" style="margin-top: 15px;">
						<div class="form-group row" style="margin-left: 10px;">
							<label for="Nama_pemohon" class="col-sm-3 col-form-label">Nama Pemohon</label>
							<div class="col-sm-8">
								<div class="form-line focused">
									<input type="text" class="form-control" id="nama_pemohon" name="nama_pemohon"
										placeholder="Nama Pemohon" value="<?= $detail->nama_pemohon; ?>" required="">
									<i class=" fas fa-check-circle"></i>
									<i class="fas fa-exclamation-circle"></i>
									<small>Error massage</small>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group" style="margin-top: 15px;">
						<div class="form-group row" style="margin-left: 10px;">
							<label for="Hubungan_dengan_bayi" class="col-sm-3 col-form-label">Hubungan dgn Bayi</label>
							<div class="col-sm-8">
								<div class="form-line focused">
									<input type="text" class="form-control" id="hubungan_dengan_bayi"
										name="hubungan_dengan_bayi" placeholder="Isikan hubungan pemohon dengan bayi..."
										value="<?= $detail->hubungan_dengan_bayi; ?>" required="">
									<i class=" fas fa-check-circle"></i>
									<i class="fas fa-exclamation-circle"></i>
									<small>Error massage</small>
								</div>
							</div>
						</div>
					</div>
				</div>
				<input type="hidden" class="form-control" id="id_surat" name="id_surat" required=""
					value="<?= $detail->id_surat ?>">
				<input type="hidden" class="form-control" id="id_permohonan_surat" name="id_permohonan_surat"
					required="" value="<?= $detail->id_permohonan_surat; ?>">
				<div class="card-footer">
					<div class="float-right">
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
			</form>
		</div>
	</div>
	<!--End Content Profile-->
</div>
</div>
<!--End Content Profile-->
