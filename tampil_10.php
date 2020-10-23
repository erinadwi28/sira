				<!-- Begin Page Content -->
				<div class="container-fluid">
					<!-- Page Heading -->
					<a href="<?= base_url() ?>warga/list_permohonan_selesai/<?= $warga['id_warga'] ?>">
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
						<div class="col-md-2">
						</div>
						<div class="col-md-8">
							<div class="card shadow mb-4">
								<div class="card-body">
									<center>
										<div class="kopsurat row">
											<div class="col-md-12 mb-3">
												<object data="" type="image">
													<img class="img-fluid" alt="logo_kop_surat" src="<?= base_url('assets/dashboard/') ?>img/KOP.png">
												</object>
											</div>
										</div>
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
																<td> </td>
																<td> :</td>
																<td><?= $w->hari_lahir; ?></td>
															</tr>
															<tr>
																<td><b>Tanggal</b></td>
																<td> </td>
																<td> </td>
																<td> :</td>
																<td><?= $w->tanggal_lahir; ?></td>
															</tr>
															<tr>
																<td><b>Di</b></td>
																<td> </td>
																<td> </td>
																<td> :</td>
																<td><?= $w->tempat_lahir; ?></td>
															</tr>
															<tr>
																<td><b>Jam</b></td>
																<td> </td>
																<td> </td>
																<td> :</td>
																<td><?= $w->jam_lahir; ?> WITA</td>
															</tr>
														</tbody>
													</table>
												</div>

												<div class="isi_surat paragraf">
													<br>
													<p>telah lahir seorang anak <b><?= $w->jenis_kelamin; ?></b> bernama :</p>
													<center>
														<p> <b> <?= $w->nama_anak; ?></b></p>
													</center>
													<p>Dari seorang ibu :</p>
												</div>

												<div class="isi_surat identitas">
													<table class="table-responsive">
														<tbody>
															<tr>
																<td><b>Nama Ibu</b></td>
																<td> </td>
																<td> </td>
																<td> :</td>
																<td><?= $w->nama_ibu; ?></td>
															</tr>
															<tr>
																<td><b>Alamat</b></td>
																<td> </td>
																<td> </td>
																<td> :</td>
																<td><?= $w->alamat; ?></td>
															</tr>
															<tr>
																<td><b>Istri dari</b></td>
																<td> </td>
																<td> </td>
																<td> :</td>
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
																<td><b>Nama pemohon</b></td>
																<td> </td>
																<td> </td>
																<td> :</td>
																<td><?= $w->nama_pemohon; ?></td>
															</tr>
															<tr>
																<td><b>Hubungan dgn bayi</b></td>
																<td> </td>
																<td> </td>
																<td> :</td>
																<td><?= $w->hubungan_dengan_bayi; ?></td>
															</tr>
														</tbody>
													</table>
												</div>

											</div>
									</center>
								<?php } ?>
								<div class="row">
									<div class="col-md-6">
									</div>
									<div class="col-md-6">
										<div class="badan_surat isi_surat">
											<?php
											foreach ($detail_permohonan as $d) {
											?>
												<center>

													Pangkalan Bun, <?= $d->tgl_persetujuan_admin; ?><br>
													LURAH MENDAWAI

												</center>
											<?php } ?>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6 ">
									</div>
									<div class="col-md-6">
										<div class="badan_surat isi_surat">
											<center><img class="img-fluid" width="50%" alt="ttd_lurah" src="<?= base_url('assets/dashboard/') ?>img/ttd_stempel_daak.png"></center>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
									</div>
									<div class="col-md-6">
										<div class="badan_surat isi_surat">
											<?php
											foreach ($data_kades as $k) {
											?>
												<center>
													<u><b><?= $k->nama; ?></b></u> <br>
													NIP. <?= $k->nip; ?>
												</center>
											<?php } ?>
										</div>
									</div>
								</div>
								</div>
								<div class="card-footer">
									<center>
										<button class="btn btn-sm btn-success" type="submit"><i class="fa fa-print"></i>
											Cetak</button>
									</center>
								</div>
							</div>
						</div>
						<div class="col-md-2">
						</div>
					</div>
				</div>
				<!-- /.container-fluid -->
				</div>
				<!-- End of Main Content -->