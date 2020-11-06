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
						<div class="col-md-1">
						</div>
						<div class="col-md-10">
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
														<p><u>SURAT KETERANGAN PINDAH</u><br>

															Nomor : <?= $w->no_tupoksi; ?> / <?= $w->no_registrasi; ?> / <?= $w->no_kelurahan; ?> / <?= $w->no_kecamatan; ?> / <?= $bulan; ?> / <?= $w->no_keterangan; ?> /<?= $w->no_tahun; ?></p>
													</center>
												</div>
												<br>
												<div class="isi_surat identitas">
													<table class="table-responsive">
														<tbody>
															<tr>
																<td> 1. </td>
																<td><b>Nama</b></td>
																<td> </td>

																<td> :</td>
																<td><?= $w->nama; ?></td>
															</tr>
															<tr>
																<td> 2. </td>
																<td><b>Jenis Kelamin</b></td>
																<td> </td>
																<td> :</td>
																<td><?= $w->jenis_kelamin; ?></td>
															</tr>
															<tr>
																<td> 3. </td>
																<td><b>Dilahirkan</b></td>
																<td> </td>
																<td> :</td>
																<td><?= $w->tempat_lahir; ?>, <?= format_indo(date($w->tanggal_lahir)); ?></td>
															</tr>
															<tr>
																<td> 4. </td>
																<td><b>Kewarganegaraan</b></td>
																<td> </td>
																<td> :</td>
																<td><?= $w->kewarganegaraan; ?></td>
															</tr>
															<tr>
																<td> 5. </td>
																<td><b>Agama</b></td>
																<td> </td>
																<td> :</td>
																<td><?= $w->agama; ?></td>
															</tr>
															<tr>
																<td> 6. </td>
																<td><b>Status Perkawinan</b></td>
																<td> </td>
																<td> :</td>
																<td><?= $w->status_perkawinan; ?></td>
															</tr>
															<tr>
																<td> 7. </td>
																<td><b>Pekerjaan</b></td>
																<td> </td>
																<td> :</td>
																<td><?= $w->pekerjaan; ?></td>
															</tr>
															<tr>
																<td> 8. </td>
																<td><b>Pendidikan</b></td>
																<td> </td>
																<td> :</td>
																<td><?= $w->pendidikan_terakhir; ?></td>
															</tr>
															<tr>
																<td> 9. </td>
																<td><b>Alamat Asal</b></td>
																<td> </td>
																<td> :</td>
																<td><?= $w->alamat_asal; ?></td>
															</tr>
															<tr>
																<td> 10. </td>
																<td><b>No. dan Tanggal KK</b></td>
																<td> </td>
																<td> :</td>
																<td><?= $w->no_kk; ?>, <?= format_indo(date($w->tanggal_kk)); ?></td>
															</tr>
															<tr>
																<td> 11. </td>
																<td><b>Pindah Ke</b></td>
																<td> </td>
																<td> :</td>
																<td><?= $w->alamat_pindah; ?></td>
															</tr>
															<tr>
																<td> </td>
																<td><b>Desa/Kelurahan</b></td>
																<td> </td>
																<td> :</td>
																<td>Baru</td>
															</tr>
															<tr>
																<td> </td>
																<td><b>Desa/Kelurahan</b></td>
																<td> </td>
																<td> :</td>
																<td><?= $w->kelurahan_pindah; ?></td>
															</tr>
															<tr>
																<td> </td>
																<td><b>Kecamatan</b></td>
																<td> </td>
																<td> :</td>
																<td><?= $w->kecamatan_pindah; ?></td>
															</tr>
															<tr>
																<td> </td>
																<td><b>Kab. /Kota</b></td>
																<td> </td>
																<td> :</td>
																<td><?= $w->kabupaten_pindah; ?></td>
															</tr>
															<tr>
																<td> </td>
																<td><b>Provinsi</b></td>
																<td> </td>
																<td> :</td>
																<td><?= $w->provinsi_pindah; ?></td>
															</tr>
															<tr>
																<td> </td>
																<td><b>Pada Tanggal</b></td>
																<td> </td>
																<td> :</td>
																<td><?= format_indo(date($w->tanggal_pindah)); ?></td>
															</tr>
															<tr>
																<td>12. </td>
																<td><b>Alasan Pindah</b></td>
																<td> </td>
																<td> :</td>
																<td><?= $w->alasan_pindah; ?></td>
															</tr>
															<tr>
																<td> 13. </td>
																<td><b>Pengikut</b></td>
																<td> </td>
																<td> :</td>
																<td><?= $w->jumlah_pengikut; ?> Orang</td>
															</tr>

														</tbody>
													<?php } ?>
													</table>

													<!--Tabel pengikut -->
													<table class="table table-bordered table-hover mt-3" style="border-color: #3A3A3A" width="100%" cellspacing="0">
														<thead>
															<tr>
																<th>No</th>
																<th>Nama</th>
																<th>Jenis Kelamin</th>
																<th>Tempat Lahir</th>
																<th>Tanggal Lahir</th>
																<th>Status</th>
																<th>Pendidikan</th>
																<th>Keterangan</th>
															</tr>
														</thead>
														<tbody>
															<?php
															$no = 1;
															foreach ($pengikut as $m) {
															?>
																<tr>
																	<td><?= $no++ ?></td>
																	<td><?= $m->nama ?></td>
																	<td><?= $m->jenis_kelamin ?></td>
																	<td><?= $m->tempat_lahir ?></td>
																	<td><?= format_indo(date($m->tanggal_lahir)); ?></td>
																	<td><?= $m->status_perkawinan ?></td>
																	<td><?= $m->pendidikan_terakhir ?></td>
																	<td><?= $m->status_hub_kk ?></td>
																</tr>
															<?php } ?>
														</tbody>
													</table>
												</div>
									</center>
									<div class="row">
										<div class="col-md-6">
										</div>
										<div class="col-md-6">
											<div class="badan_surat isi_surat">
												<?php
												foreach ($detail_permohonan as $d) {
												?>
													<center>

														Pangkalan Bun, <?= format_indo(date($d->tgl_persetujuan_admin)); ?><br>
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
											<?php
											foreach ($data_kades as $k) {
											?>
												<div class="badan_surat isi_surat">
													<center><img class="img-fluid" width="50%" alt="ttd_lurah" src="<?= base_url(); ?>/assets/uploads/kades/<?= $k->foto_ttd_kades; ?>"></center>
												</div>
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
								<div class="card-footer">
									<center>
										<a href="<?= base_url() ?>warga/cetak_surat014/<?php foreach ($detail_suket as $w) { ?><?= $w->id_permohonan_surat ?> <?php } ?>">
											<button class="btn btn-sm btn-success" type="submit"><i class="fa fa-print"></i>
												Cetak</button>
										</a>
									</center>
								</div>
							</div>
						</div>
						<div class="col-md-1">
						</div>
					</div>
				</div>
				<!-- /.container-fluid -->
				</div>
				<!-- End of Main Content -->