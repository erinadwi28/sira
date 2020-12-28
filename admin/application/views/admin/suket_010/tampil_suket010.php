<!-- Begin Page Content -->

<div class="container-fluid">
	<!-- Page Heading -->
	<a href="<?= base_url() ?>admin/list_data_permohonan_selesai">
		<button id=" btn_kembali" class="btn btn-sm btn-warning float-right" type="submit">
			<i class="fa fa-arrow-left">
			</i> Kembali
		</button>
	</a>
	<div class="preview">
		<center>
			<h1 class="h3 mb-30 text-gray-800">Preview Permohonan Surat</h1>
		</center>
	</div>
	<div class="row">
		<div class="col-md-0">
		</div>
		<div class="col-md-12">
			<div class="card shadow mb-4">
				<div class="row">
					<div class="col-md-5">
						<div class="card-body">
							<center>
								<!-- <div class="kopsurat row " style="margin-top: 50px"> <br> <br> <br> <br>
									<div class="col-md-12 mb-3">
										<object data="" type="image">
											<img class="img-fluid" alt="logo_kop_surat" src="<?= base_url('assets/dashboard/') ?>img/KOP.png">
										</object>
									</div>
								</div> -->

								<!-- <hr class="hr_kop"> -->
								<?php
								foreach ($detail_suket as $w) {
								?>
									<?php
									if ($w->no_bulan == 1) {
										$bulan = 'I';
									} elseif ($w->no_bulan == 2) {
										$bulan = 'II';
									} elseif ($w->no_bulan == 3) {
										$bulan = 'III';
									} elseif ($w->no_bulan == 4) {
										$bulan = 'IV';
									} elseif ($w->no_bulan == 5) {
										$bulan = 'V';
									} elseif ($w->no_bulan == 6) {
										$bulan = 'VI';
									} elseif ($w->no_bulan == 7) {
										$bulan = 'VII';
									} elseif ($w->no_bulan == 8) {
										$bulan = 'VIII';
									} elseif ($w->no_bulan == 9) {
										$bulan = 'IX';
									} elseif ($w->no_bulan == 10) {
										$bulan = 'X';
									} elseif ($w->no_bulan == 11) {
										$bulan = 'XI';
									} elseif ($w->no_bulan == 12) {
										$bulan = 'XII';
									} else {
										$bulan = '';
									} ?>
									<div class="badan_surat">
										<div class="no_surat">
											<center>
												<b>
													<p>UNTUK ARSIP KELURAHAN</p>
												</b>
												<p><u>SURAT KELAHIRAN</u><br>
													Nomor : <?= $w->no_tupoksi; ?> / <?= $w->no_registrasi; ?> / <?= $w->no_kelurahan; ?> / <?= $bulan; ?> / <?= $w->no_tahun; ?></p>
											</center>
										</div>
										<div class="isi_surat paragraf">
											<p> Yang bertanda tangan dibawah ini, menerangkan bahwa pada :</p>
										</div>
										<div class="isi_surat identitas">
											<table class="table-responsive">
												<tbody>
													<tr>
														<td><b>Hari</b></td>
														<td> </td>
														<td>:</td>
														<td> </td>
														<td><?= $w->hari_lahir; ?></td>
													</tr>
													<tr>
														<td><b>Tanggal</b></td>
														<td> </td>
														<td>:</td>
														<td> </td>
														<td><?= format_indo(date($w->tanggal_lahir)); ?></td>
													</tr>
													<tr>
														<td><b>Di</b></td>
														<td> </td>
														<td>:</td>
														<td> </td>
														<td><?= $w->tempat_lahir; ?></td>
													</tr>
													<tr>
														<td><b>Jam</b></td>
														<td> </td>
														<td>:</td>
														<td> </td>
														<td><?= $w->jam_lahir; ?> WIB</td>
													</tr>
												</tbody>
											</table>
										</div>

										<div class="isi_surat paragraf">
											<br>
											<p>telah lahir seorang anak <b><?= $w->jenis_kelamin; ?></b> bernama :</p>
											<p> <b>
													<center>
														<p> <b> <?= $w->nama_anak; ?></b></p>
													</center>
												</b></p>
										</div>

										<div class="isi_surat identitas">
											<table class="table-responsive">
												<tbody>
													<tr>
														<td><b>Nama Ibu</b></td>
														<td> </td>
														<td>:</td>
														<td> </td>
														<td><?= $w->nama_ibu; ?></td>
													</tr>
													<tr>
														<td><b>Alamat</b></td>
														<td> </td>
														<td>:</td>
														<td> </td>
														<td><?= $w->alamat_ibu; ?></td>
													</tr>
													<tr>
														<td><b>Istri dari</b></td>
														<td> </td>
														<td>:</td>
														<td> </td>
														<td><?= $w->nama_ayah; ?></td>
													</tr>
												</tbody>
											</table>
										</div>
										<br>
										<div class="isi_surat paragraf">
											<p>
												Surat keterangan ini dibuat atas dasar yang sebenarnya
											</p>

										</div>
										<div class="isi_surat identitas">
											<table class="table-responsive">
												<tbody>
													<tr>
														<td><b>Nama yang melapor</b></td>
														<td> </td>
														<td>:</td>
														<td> </td>
														<td><?= $w->nama_pemohon; ?></td>
													</tr>
													<tr>
														<td><b>Hubungan dengan bayi</b></td>
														<td> </td>
														<td>:</td>
														<td> </td>
														<td><?= $w->hubungan_dengan_bayi; ?></td>
													</tr>
												</tbody>
											</table>
										</div>

									</div>
									<br>
									<br>
							</center>
						<?php } ?>
						<div class="row">
							<div class="col-md-6">
							</div>
							<div class="col-md-6">
								<div class="badan_surat isi_surat">
									<?php
									foreach ($detail_suket as $d) {
									?>
										<center>

											Pangkalan Bun, <?= format_indo(date($d->tgl_persetujuan_admin)); ?><br>
										<?php } ?>
										<?php
										foreach ($detail_suket as $w) {
											if ($w->status_tanda_tangan == "Kepala Desa") {
												echo "LURAH MENDAWAI";
											} elseif ($w->status_tanda_tangan == "Diwakilkan") {
												echo "An. LURAH MENDAWAI";
												foreach ($data_kades as $k) { ?>
													<div class="badan_surat isi_surat">
														<center>
															<b><?= $k->jabatan; ?></b>
														</center>
													</div> <?php
														}
													}
												} ?>
										</center>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 ">
							</div>
							<div class="col-md-6">
								<?php
								foreach ($data_kades as $k) {
									foreach ($detail_suket as $w) {
										if ($w->status_tanda_tangan == "Kepala Desa") { ?>
											<div class="badan_surat isi_surat">
												<center><img class="img-fluid" width="50%" alt="ttd_lurah" src="<?= base_url(); ?>../assets/uploads/kades/<?= $k->foto_ttd_kades; ?>"></center>
											</div>
										<?php } elseif ($w->status_tanda_tangan == "Diwakilkan") { ?>
											<div class="badan_surat isi_surat">
												<center><img class="img-fluid" width="50%" alt="ttd_lurah" src="<?= base_url(); ?>../assets/uploads/pejabat_berwenang/<?= $k->ttd_pejabat; ?>"></center>
											</div>
									<?php }
									}
									?>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
							</div>
							<div class="col-md-6">
								<div class="badan_surat isi_surat">
									<center>
										<u><b><?= $k->nama; ?></b></u> <br>
										NIP. <?= $k->nip; ?>
									</center>
								<?php } ?>
								</div>
							</div>
						</div>
						</div>

					</div>
					<div class="col-md-7">
						<div class="card-body">
							<center>
								<!-- <div class="kopsurat row">
									<div class="col-md-12 mb-3">
										<object data="" type="image">
											<img class="img-fluid" alt="logo_kop_surat" src="<?= base_url('assets/dashboard/') ?>img/KOP.png">
										</object>
									</div>
								</div> -->
								<!-- <hr class="hr_kop"> -->
								<div class="badan_surat">
									<b>
										<p style="float: right;">ARSIP KECAMATAN</p> <br><br>
									</b>
									<div class="no_surat">
										<center>
											<p><u>SURAT KELAHIRAN</u><br>
												Nomor : <?= $w->no_tupoksi; ?> / <?= $w->no_registrasi; ?> / <?= $w->no_kelurahan; ?> / <?= $bulan; ?> / <?= $w->no_tahun; ?></p>
										</center>
									</div>

									<div class="isi_surat identitas" style="margin-top: -50px;">
										<table class="table-responsive">
											<tbody>
												<tr>
													<td>
														<p style="text-align: center">
															<h6 style="margin-left: 180px">
																<center>
																	BAYI
																</center>
															</h6>
														</p>
													</td>
												</tr>

												<tr>
													<td>1.<b> Nama Lengkap</b></td>
													<td>:<?= $w->nama_anak; ?> </td>

												</tr>
												<tr>
													<td>2.<b> Jenis Kelamin</b> </td>

													<td>:<?= $w->jenis_kelamin; ?> </td>
												</tr>
												<tr>
													<td>3.<b> Dilahirkan</b></td>

													<td>:<?= $w->tempat_lahir; ?>, <?= format_indo(date($w->tanggal_lahir)); ?></td>

												</tr>
												<tr>
													<td>4.<b> Kelahiran</b></td>

													<td>:<?= $w->kelahiran; ?></td>

												</tr>
												<tr>
													<td>
														<p> <b> Jika kembar, anak ini lahir yang ke <?= $w->kembar_ke; ?></b></p>
													</td>

												</tr>

												<tr>
													<td>5.<b> Tempat Bersalin</b></td>

													<td>:<?= $w->tempat_persalinan; ?></td>
												</tr>
												<tr>

													<td> </td>
													<td> <?= $w->alamat_persalinan; ?></td>
												</tr>
												<tr>
													<td>6.<b> Penolong Kelahiran</b></td>

													<td>:<?= $w->penolong_persalinan; ?></td>
												</tr>
												<br>
												<tr>
													<td>
														<p style="text-align: center">
															<h6 style="margin-left: 180px">
																<center>
																	IBU
																</center>
															</h6>
														</p>
													</td>
												</tr>
												<tr>
													<td>7.<b> Nama Lengkap</b></td>
													<td>:<?= $w->nama_ibu; ?></td>
												</tr>
												<tr>
													<td>8.<b> Alamat</b></td>

													<td>:<?= $w->alamat_ibu; ?></td>
												</tr>
												<tr>
													<td>9.<b> Dilahirkan</b></td>

													<td>:<?= format_indo(date($w->tanggal_lahir_ibu)); ?> <b>Umur</b> : <?= $w->umur_ibu; ?> th</td>
												</tr>
												<tr>
													<td>10.<b> Kewarganegaraan</b></td>

													<td>:<?= $w->kewarganegaraan_ibu; ?></td>
												</tr>
												<br>
												<tr>
													<td>
														<p style="text-align: center">
															<h6 style="margin-left: 180px">
																<center>
																	AYAH
																</center>
															</h6>
														</p>
													</td>
												</tr>
												<tr>
													<td>11.<b> Nama Lengkap</b></td>
													<td>:<?= $w->nama_ayah; ?></td>
												</tr>
												<tr>
													<td>12.<b> Dilahirkan</b></td>
													<td>:<?= format_indo(date($w->tanggal_lahir_ayah)); ?> <b>Umur</b> : <?= $w->umur_ayah; ?> th</td>
												</tr>
												<tr>
													<td>13.<b> Kewarganegaraan</b></td>
													<td>:<?= $w->kewarganegaraan_ayah; ?></td>
												</tr>
												<tr>
													<td>14.<b> No. Kartu Keluarga</b></td>
													<td>:<?= $w->no_kk; ?></td>
												</tr>
												<tr>
													<td>15.<b> No. KTP</b></td>
													<td>:<?= $w->no_ktp; ?></td>
												</tr>




											</tbody>
										</table>
									</div>

								</div>
								<br>
								<br>
							</center>
							<div class="row">
								<div class="col-md-6">
								</div>
								<div class="col-md-6">
									<div class="badan_surat isi_surat">
										<?php
										foreach ($detail_suket as $d) {
										?>
											<center>

												Pangkalan Bun, <?= format_indo(date($d->tgl_persetujuan_admin)); ?><br>
											<?php } ?>
											<?php
											foreach ($detail_suket as $w) {
												if ($w->status_tanda_tangan == "Kepala Desa") {
													echo "LURAH MENDAWAI";
												} elseif ($w->status_tanda_tangan == "Diwakilkan") {
													echo "An. LURAH MENDAWAI";
													foreach ($data_kades as $k) { ?>
														<div class="badan_surat isi_surat">
															<center>
																<b><?= $k->jabatan; ?></b>
															</center>
														</div> <?php
															}
														}
													} ?>
											</center>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 ">
								</div>
								<div class="col-md-6">
									<?php
									foreach ($data_kades as $k) {
										foreach ($detail_suket as $w) {
											if ($w->status_tanda_tangan == "Kepala Desa") { ?>
												<div class="badan_surat isi_surat">
													<center><img class="img-fluid" width="50%" alt="ttd_lurah" src="<?= base_url(); ?>../assets/uploads/kades/<?= $k->foto_ttd_kades; ?>"></center>
												</div>
											<?php } elseif ($w->status_tanda_tangan == "Diwakilkan") { ?>
												<div class="badan_surat isi_surat">
													<center><img class="img-fluid" width="50%" alt="ttd_lurah" src="<?= base_url(); ?>../assets/uploads/pejabat_berwenang/<?= $k->ttd_pejabat; ?>"></center>
												</div>
										<?php }
										}
										?>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
								</div>
								<div class="col-md-6">
									<div class="badan_surat isi_surat">
										<center>
											<u><b><?= $k->nama; ?></b></u> <br>
											NIP. <?= $k->nip; ?>
										</center>
									<?php } ?>
									</div>
								</div>
							</div>
						</div>
						<!-- <div class="card-footer">
									<center>
										<a href="<?= base_url() ?>warga/cetak_surat010/<?php foreach ($detail_suket as $w) { ?><?= $w->id_permohonan_surat ?> <?php } ?>">
											<button class="btn btn-sm btn-success" type="submit"><i class="fa fa-print"></i>
												Cetak</button>
										</a>
									</center>
								</div> -->


					</div>
				</div>
				<div class="card-footer">
					<center>
						<a href="<?= base_url() ?>admin/cetak_surat010/<?php foreach ($detail_suket as $w) { ?><?= $w->id_permohonan_surat ?> <?php } ?>">
							<button class="btn btn-sm btn-success" type="submit"><i class="fa fa-print"></i>
								Cetak</button>
						</a>
						<!-- <a href="#">
											<button class="btn btn-sm btn-success" onclick="window.print()" type="submit"><i class="fa fa-print"></i>
												Cetak</button>
										</a> -->

					</center>
				</div>
			</div>
		</div>
		<div class="col-md-0">
		</div>
	</div>
</div>
<!-- /.container-fluid -->
</div>

<!-- End of Main Content -->