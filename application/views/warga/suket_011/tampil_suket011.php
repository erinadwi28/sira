				<!-- Begin Page Content -->
				<div class="container-fluid">
					<!-- Page Heading -->
					<a href="<?= base_url() ?>warga/list_permohonan_selesai/<?= $warga['id_warga'] ?>">
						<button id=" btn_kembali" class="btn btn-sm btn-warning float-right" type="submit">
							<i class="fa fa-arrow-left">
							</i> Kembali
						</button>
					</a>
					<div class="d-sm-flex align-items-center justify-content-between mb-4">
						<h1 class="h3 mb-0 text-gray-800">Preview Permohonan Surat</h1>
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
														<p><u>SURAT PENGANTAR KTP</u><br>
															Nomor : <?= $w->no_tupoksi; ?>/<?= $w->no_registrasi; ?>/ <?= $w->no_kelurahan; ?> / <?= $bulan; ?> / <?= $w->no_tahun; ?></p>
													</center>
												</div>
												<div class="isi_surat paragraf">
													<p> Yang bertanda tangan dibawah ini, saya : </p>
												</div>
												<div class="isi_surat identitas">
													<table class="table-responsive">
														<tbody>
															<tr>
																<td>Nama Lengkap</td>
																<td> </td>
																<td> </td>
																<td> </td>
																<td> </td>
																<td> </td>
																<td>:</td>
																<td><b><?= $w->nama; ?></b></td>
															</tr>
															<tr>
																<td>Jenis Kelamin</td>
																<td> </td>
																<td> </td>
																<td> </td>
																<td> </td>
																<td> </td>
																<td>:</td>
																<td><?= $w->jenis_kelamin; ?></td>
															</tr>
															<tr>
																<td>Tempat Tanggal Lahir</td>
																<td> </td>
																<td> </td>
																<td> </td>
																<td> </td>
																<td> </td>
																<td>:</td>
																<td><?= $w->tempat_lahir; ?>, <?= format_indo(date($w->tanggal_lahir)); ?>
																</td>
															</tr>
															<tr>
																<td>Alamat</td>
																<td> </td>
																<td> </td>
																<td> </td>
																<td> </td>
																<td> </td>
																<td>:</td>
																<td><?= $w->alamat; ?></td>
															</tr>
															<tr>
																<td>RT</td>
																<td> </td>
																<td> </td>
																<td> </td>
																<td> </td>
																<td> </td>
																<td>:</td>
																<td><?= $w->rt; ?></td>
															</tr>
															<tr>
																<td>Kelurahan</td>
																<td> </td>
																<td> </td>
																<td> </td>
																<td> </td>
																<td> </td>
																<td>:</td>
																<td><?= $w->kelurahan; ?></td>
															</tr>
															<tr>
																<td>Status Perkawinan</td>
																<td> </td>
																<td> </td>
																<td> </td>
																<td> </td>
																<td> </td>
																<td>:</td>
																<td><?= $w->status_perkawinan; ?>n</td>
															</tr>
															<tr>
																<td>Gol. Darah</td>
																<td> </td>
																<td> </td>
																<td> </td>
																<td> </td>
																<td> </td>
																<td>:</td>
																<td><?= $w->golongan_darah; ?></td>
															</tr>
															<tr>
																<td>Agama</td>
																<td> </td>
																<td> </td>
																<td> </td>
																<td> </td>
																<td> </td>
																<td>:</td>
																<td><?= $w->agama; ?></td>
															</tr>
															<tr>
																<td>Pekerjaan</td>
																<td> </td>
																<td> </td>
																<td> </td>
																<td> </td>
																<td> </td>
																<td>:</td>
																<td><?= $w->pekerjaan; ?></td>
															</tr>
															<tr>
																<td>No. Kartu Keluarga</td>
																<td> </td>
																<td> </td>
																<td> </td>
																<td> </td>
																<td> </td>
																<td>:</td>
																<td><?= $w->no_kk; ?></td>
															</tr>

															<tr>
																<td>Tanggal Mulai Tinggal </td>
																<td> </td>
																<td> </td>
																<td> </td>
																<td> </td>
																<td> </td>
																<td>:</td>
																<td><?= format_indo(date($w->tanggal_tinggal)); ?></td>
															</tr>
															<tr>
																<td>No. Surat Pindah</td>
																<td> </td>
																<td> </td>
																<td> </td>
																<td> </td>
																<td> </td>
																<td>:</td>
																<td><?= $w->no_surat_pindah; ?></td>
															</tr>
															<tr>
																<td>Tgl. Surat Pindah</td>
																<td> </td>
																<td> </td>
																<td> </td>
																<td> </td>
																<td> </td>
																<td>:</td>
																<td><?= format_indo(date($w->tanggal_surat_pindah)); ?></td>
															</tr>

														</tbody>
													</table>
												</div>
												<br>
												<div class="isi_surat paragraf">
													<p>
														Dengan ini mengajukan permohonan kepada Bapak untuk dapat diberikan Kartu Tanda Penduduk (KTP)
														Kabupaten Kotawaringin Barat. <br> <br>
														Untuk melengkapi persyaratan dimaksud bersama ini dilampirkan: <br>
														1. Pas Photo uk. 2 X 3 cm sebanyak 3 (Tiga ) Lembar <br>
														2. Foto copy Kartu Keluarga sebanyak 1 (Satu) Lembar <br>
														3. Surat Keterangan Pindah dari Daerah Asal
													</p>
													<p>Demikian Permohonan ini disampaikan atas perrkenan Bapak diucapkan terima kasih.</p>
												</div>
											</div>
									</center>
									<div class="row">
										<div class="col-md-6">
										</div>
										<div class="col-md-6">
											<div class="badan_surat isi_surat">
												<center>
													Hormat Pemohon<br> <br> <br> <br>
												</center>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-6">
										</div>
										<div class="col-md-6">
											<div class="badan_surat isi_surat">
												<center>
													<u><b>(<?= $w->nama; ?>)</b></u>

												</center>
											</div>
										</div>
									</div>
									<hr>
									<div class="isi_surat paragraf">
										<h6><b>REKOMENDASI</b></h6>
										<p>
											Bahwa nama tersebut adalah benar Penduduk RT. <?= $warga['rt'] ?> Kelurahan Mendawai dengan
											Nomor Induk Penduduk <?= $w->nik; ?> dan keterangan-keterangan yang tertulis dalam Permohonan ini adalah benar berdasarkan Data Kependudukan. <br>
										</p>
										<p>
											Demikian Rekomendasi ini dibuat dengan mengingat sumpah Jabatan, apabila ternayata
											keterangan ini tidak benar, kami bersedia diberikan sanksi berdasarkan ketentuan dan perundang-undangan yang berlaku. <br>
										</p>
									</div>
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
										<div class="badan_surat isi_surat">
											<?php
											foreach ($data_kades as $k) {
											?>
												<center>
													<center><img class="img-fluid" width="50%" alt="ttd_lurah" src="<?= base_url(); ?>/assets/uploads/kades/<?= $k->foto_ttd_kades; ?>"></center>
												</center>
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
										<a href="<?= base_url() ?>warga/cetak_surat011/<?php foreach ($detail_suket as $w) { ?><?= $w->id_permohonan_surat ?> <?php } ?>">
											<button class="btn btn-sm btn-success" type="submit"><i class="fa fa-print"></i>
												Cetak</button>
										</a>
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