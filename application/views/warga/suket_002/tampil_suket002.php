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
														<p><u>SURAT KETERANGAN DOMISILI</u><br>
															Nomor : <?= $w->no_registrasi; ?> / <?= $w->no_kelurahan; ?> / <?= $w->no_kecamatan; ?> / <?= $bulan; ?> / <?= $w->no_tahun; ?></p>
													</center>
												</div>
												<div class="isi_surat paragraf">
													<p> Yang bertanda tangan dibawah ini, Lurah Mendawai, Kecamatan Arut
														Selatan, Kabupaten Kotawaringin Barat,
														Provinsi Kalimantan Tengah, dengan ini menerangkan bahwa :</p>
												</div>
												<div class="isi_surat identitas">
													<table class="table-responsive">
														<tbody>
															<tr>
																<td><b>Nama</b></td>
																<td> </td>
                                								<td> </td>
                                								<td>:</td>
                                								<td> </td>
                                								<td> </td>
																<td><?= $w->nama; ?></td>
															</tr>
															<tr>
																<td><b>Tempat, Tanggal Lahir</b></td>
																<td> </td>
                                								<td> </td>
                                								<td>:</td>
                                								<td> </td>
                                								<td> </td>
																<td><?= $w->tempat_lahir; ?>, <?= format_indo(date($w->tanggal_lahir)); ?></td>
															</tr>
															<tr>
																<td><b>Jenis Kelamin</b></td>
																<td> </td>
                                								<td> </td>
                                								<td>:</td>
                                								<td> </td>
                                								<td> </td>
																<td><?= $w->jenis_kelamin; ?></td>
															</tr>
															<tr>
																<td><b>Agama</b></td>
																<td> </td>
                                								<td> </td>
                                								<td>:</td>
                                								<td> </td>
                                								<td> </td>
																<td><?= $w->agama; ?></td>
															</tr>
															<tr>
																<td><b>Pekerjaan</b></td>
																<td> </td>
                                								<td> </td>
                                								<td>:</td>
                                								<td> </td>
                                								<td> </td>
																<td><?= $w->pekerjaan; ?></td>
															</tr>
															<tr>
																<td><b>Alamat Tinggal </b></td>
																<td> </td>
                                								<td> </td>
                                								<td>:</td>
                                								<td> </td>
                                								<td> </td>
																<td><?= $w->alamat_tinggal; ?></td>
															</tr>
															<tr>
																<td><b>Alamat KK </b></td>
																<td> </td>
                                								<td> </td>
                                								<td>:</td>
                                								<td> </td>
                                								<td> </td>
																<td><?= $w->alamat_kk; ?></td>
															</tr>
														</tbody>
													</table>
												</div>
												<br>
												<div class="isi_surat paragraf">
													<p>
														Berdasarkan Surat Keterangan dari Ketua Rukun Tetangga ( RT ) <?= $warga['rt'] ?> Kelurahan Mendawai, Nomor :
														<?= $w->nomor_surat_rt; ?> tanggal <?php foreach ($detail_permohonan as $d) { ?> <?= format_indo(date($d->tanggal_persetujuan_rt)); ?> <?php } ?>,
															bahwa nama tersebut diatas memang benar Berdomisili di RT. <?= $warga['rt'] ?> Kelurahan Mendawai Kecamatan Arut Selatan Kabupaten Kotawaringin Barat.
													</p>
													<p>
														Demikian Surat Keterangan ini kami berikan, agar dapat dipergunakan sebagaimana mestinya.
													</p>
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
										<a href="<?= base_url() ?>warga/cetak_surat002/<?php foreach ($detail_suket as $w) { ?><?= $w->id_permohonan_surat ?> <?php } ?>">
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