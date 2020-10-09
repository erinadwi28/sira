<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Form Pengajuan Surat Keterangan Kelahiran</h1>
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
						<form class="form-horizontal" id="form10" action="<?= base_url('warga/aksi_tambah_permohonan_suket010') ?>" method="POST">
							<div class="form-group">
								<div class="form-group" style="margin-top: 15px;">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Nama_anak" class="col-sm-3 col-form-label">Nama Anak</label>
										<div class="col-sm-8">
											<div class="form-line focused">
												<input type="text" class="form-control" id="nama_anak" name="nama_anak" placeholder="Isikan nama anak...">
												<i class=" fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Error massage</small>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="form-group row" style="margin-left: 10px;">
									<label for="Hari_lahir" class="col-sm-3 col-form-label">Hari Lahir</label>
									<div class="col-sm-8">
										<div class="form-line">
											<select class="form-control" id="hari_lahir" name="hari_lahir">
												<option value="Pilih hari lahir..." class="form-user-input">Pilih hari lahir...</option>
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
									<label for="Tempat_lahir" class="col-sm-3 col-form-label">Tempat Lahir</label>
									<div class="col-sm-8">
										<div class="form-line focused">
											<input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Isikan tempat lahir anak...">
											<i class=" fas fa-check-circle"></i>
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
											<input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
											<i class=" fas fa-check-circle"></i>
											<i class="fas fa-exclamation-circle"></i>
											<small>Error massage</small>
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
												<input type="text" class="form-control" id="jam_lahir" name="jam_lahir" placeholder="Isikan jam lahir anak...">
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
													<option value="Pilih jenis kelamin..." class="form-user-input">Pilih jenis kelamin...</option>
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
										<label for="Kelahiran" class="col-sm-3 col-form-label">Kelahiran</label>
										<div class="col-sm-8">
											<div class="form-line">
												<select class="form-control" id="kelahiran" name="kelahiran">
													<option value="Pilih kelahiran..." class="form-user-input">Pilih kelahiran...</option>
													<option value="Tunggal" class="form-user-input">Tunggal
													</option>
													<option value="Kembar" class="form-user-input">Kembar
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
										<label for="tempat_bersalin" class="col-sm-3 col-form-label">Tempat Bersalin</label>
										<div class="col-sm-8">
											<div class="form-line">
												<select class="form-control" id="tempat_bersalin" name="tempat_bersalin">
													<option value="Pilih tempat bersalin..." class="form-user-input">Pilih tempat bersalin...</option>
													<option value="Rumah Bersalin" class="form-user-input"> Rumah Bersalin
													</option>
													<option value="Bukan Rumah Bersalin" class="form-user-input">Bukan Rumah Bersalin
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
										<label for="Alamat_Bersalin" class="col-sm-3 col-form-label">Alamat Persalinan</label>
										<div class="col-sm-8">
											<div class="form-line">
												<textarea class="form-control" id="alamat_bersalin" name="alamat_bersalin" rows="3"></textarea>
												<i class=" fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Error massage</small>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="penolong_persalinan" class="col-sm-3 col-form-label">Tempat Bersalin</label>
										<div class="col-sm-8">
											<div class="form-line">
												<select class="form-control" id="penolong_persalinan" name="penolong_persalinan">
													<option value="Pilih penolong bersalin..." class="form-user-input">Pilih penolong bersalin...</option>
													<option value="Dokter" class="form-user-input"> Dokter</option>
													<option value="Bidan/Perawat" class="form-user-input"> Bidan/Perawat</option>
													<option value="Dukun" class="form-user-input"> Dukun</option>
													<option value="Lainnya" class="form-user-input"> Lainnya</option>

												</select>
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
											<label for="Nama_ibu" class="col-sm-3 col-form-label">Nama Ibu</label>
											<div class="col-sm-8">
												<div class="form-line focused">
													<input type="text" class="form-control" id="nama_ibu" name="nama_ibu" placeholder="Isikan nama ibu...">
													<i class=" fas fa-check-circle"></i>
													<i class="fas fa-exclamation-circle"></i>
													<small>Error massage</small>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Alamat" class="col-sm-3 col-form-label">Alamat</label>
										<div class="col-sm-8">
											<div class="form-line">
												<textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Isikan alamat..."></textarea>
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
												<input type="date" class="form-control" id="tanggal_lahir_ibu" name="tanggal_lahir_ibu">
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
													<input type="number" class="form-control" id="umur_ibu" name="umur_ibu">
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
													<select class="form-control " id="kewarganegaraan_ibu" name="kewarganegaraan_ibu">
														<option value="Pilih kewarganegaraan_ibu..." class="form-user-input">Pilih kewarganegaraan ibu...</option>
														<option value="WNI" <?= ($detail->kewarganegaraan_ibu == 'WNI' ? ' selected' : ''); ?> class="form-user-input">WNI</option>
														<option value="WNA" <?= ($detail->kewarganegaraan_ibu == 'WNA' ? ' selected' : ''); ?> class="form-user-input">WNA</option>
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
									<div class="form-group" style="margin-top: 15px;">
										<div class="form-group row" style="margin-left: 10px;">
											<label for="Nama_ayah" class="col-sm-3 col-form-label">Nama Ayah</label>
											<div class="col-sm-8">
												<div class="form-line focused">
													<input type="text" class="form-control" id="nama_ayah" name="nama_ayah" placeholder="Isikan nama ayah...">
													<i class=" fas fa-check-circle"></i>
													<i class="fas fa-exclamation-circle"></i>
													<small>Error massage</small>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="tanggal_lahir_ayah" class="col-sm-3 col-form-label">Tanggal Lahir Ayah</label>
										<div class="col-sm-8">
											<div class="form-line">
												<input type="date" class="form-control" id="tanggal_lahir_ayah" name="tanggal_lahir_ayah">
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
													<input type="number" class="form-control" id="umur_ayah" name="umur_ayah">
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
											<label for="kewarganegaraan_ayah" class="col-sm-3 col-form-label">Kewarganegaraan</label>
											<div class="col-sm-8">
												<div class="form-line">
													<select class="form-control " id="kewarganegaraan_ayah" name="kewarganegaraan_ayah">
														<option value="Pilih kewarganegaraan_ayah..." class="form-user-input">Pilih kewarganegaraan ayah...</option>
														<option value="WNI" <?= ($detail->kewarganegaraan_ayah == 'WNI' ? ' selected' : ''); ?> class="form-user-input">WNI</option>
														<option value="WNA" <?= ($detail->kewarganegaraan_ayah == 'WNA' ? ' selected' : ''); ?> class="form-user-input">WNA</option>
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
												<input type="text" class="form-control" id="no_kk" name="no_kk" value="">
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
												<input type="text" class="form-control" id="no_ktp" name="no_ktp" value="">
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
											<label for="Nama_pemohon" class="col-sm-3 col-form-label">Nama Pemohon</label>
											<div class="col-sm-8">
												<div class="form-line focused">
													<input type="text" class="form-control" id="nama_pemohon" name="nama_pemohon" placeholder="Nama Pemohon" value="<?= $detail->nama; ?>">
													<i class=" fas fa-check-circle"></i>
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
											<label for="Hubungan_dengan_bayi" class="col-sm-3 col-form-label">Hubungan dgn Bayi</label>
											<div class="col-sm-8">
												<div class="form-line focused">
													<input type="text" class="form-control" id="hubungan_dengan_bayi" name="hubungan_dengan_bayi" placeholder="Isikan hubungan pemohon dengan bayi...">
													<i class=" fas fa-check-circle"></i>
													<i class="fas fa-exclamation-circle"></i>
													<small>Error massage</small>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<input type="hidden" class="form-control" id="id_nama_surat" name="id_nama_surat" value="10">
							<input type="hidden" class="form-control" id="id_warga" name="id_warga" value="<?= $detail->id_warga; ?>">
							<input type="hidden" class="form-control" id="status" name="status" value="Menunggu Persetujuan RT">
				</div>
				<input type="hidden" class="form-control" id="id_nama_surat" name="id_nama_surat" required="" value="10">
				<input type="hidden" class="form-control" id="id_warga" name="id_warga" required="" value="<?= $detail->id_warga; ?>">
				<input type="hidden" class="form-control" id="status" name="status" required="" value="Belum Tuntas">
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