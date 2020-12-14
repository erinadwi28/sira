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
										<div class="badan_surat">
											<div class="row">
												<div class="col-6">
													<div class="no_surat">
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

															<table class="table-responsive">
																<tbody>
																	<tr>
																		<td>Nomor</td>
																		<td> </td>
																		<td>:</td>
																		<td> </td>
																		<td><?= $w->no_tupoksi; ?> / <?= $w->no_registrasi; ?> / <?= $w->no_kelurahan; ?> / <?= $w->no_kecamatan; ?> / <?= $bulan; ?> / <?= $w->no_tahun; ?></td>
																	</tr>
																	<tr>
																		<td>Lampiran</td>
																		<td> </td>
																		<td>:</td>
																		<td> </td>
																		<td>Foto KTP</td>
																	</tr>
																	<tr>
																		<td>Perihal</td>
																		<td> </td>
																		<td>:</td>
																		<td> </td>
																		<td>Permohonan izin keramaian</td>
																	</tr>
																</tbody>
															</table>
													</div>
												</div>
												<div class="col-6">
													<table class="table-responsive">
														<tbody>
															<tr>
																<td>Kepada</td>
															</tr>
															<tr>
																<td>Yth.Kepala Kepolisian Resort</td>

															</tr>
															<tr>
																<td>Di Pangkalan Bun</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div> <br>



											<div class="isi_surat paragraf">
												<p> Yang bertanda tangan dibawah ini, Lurah Mendawai, Kecamatan Arut
													Selatan, Kabupaten Kotawaringin Barat, Provinsi Kalimantan Tengah : </p>
											</div>
											<div class="isi_surat identitas">
												<table class="table-responsive">
													<?php
															foreach ($data_kades as $k) {
													?>
														<tbody>
															<tr>
																<td><b>Nama</b></td>
																<td> </td>
																<td>:</td>
																<td> </td>
																<td><?= $k->nama; ?></td>
															</tr>
															<tr>
																<td><b>NIP</b></td>
																<td> </td>
																<td>:</td>
																<td> </td>
																<td><?= $k->nip; ?></td>
															</tr>
															<tr>
																<td><b>Jabatan </b></td>
																<td> </td>
																<td>:</td>
																<td> </td>
																<td>Kepala Desa</td>
															</tr>
															<tr>
																<td><b>Alamat</b></td>
																<td> </td>
																<td>:</td>
																<td> </td>
																<td><?= $k->alamat; ?></td>
															</tr>
														</tbody>
													<?php } ?>
												</table>
											</div>
											<br>
											<div class="isi_surat paragraf">
												<p>Berdasarkan Surat dari Ketua Rukun Tetangga ( RT ) <?php foreach ($detail_pemohon as $d) { ?> <?= $d->rt; ?> <?php } ?> Kelurahan Mendawai Kecamatan Arut Selatan Kabupaten Kotawaringin Barat,
													dengan ini menerangkan bahwa : </p>
											</div>
											<div class="isi_surat identitas">
												<table class="table-responsive">
													<tbody>
														<tr>
															<td><b>Nama</b></td>
															<td> </td>
															<td>:</td>
															<td> </td>
															<td><?= $w->nama; ?></td>
														</tr>
														<tr>
															<td><b>TTL</b></td>
															<td> </td>
															<td>:</td>
															<td> </td>
															<td><?= $w->tempat_lahir; ?>, <?= format_indo(date($w->tanggal_lahir)); ?></td>
														</tr>
														<tr>
															<td><b>Alamat</b></td>
															<td> </td>
															<td>:</td>
															<td> </td>
															<td><?= $w->alamat; ?>t</td>
														</tr>
													</tbody>
												</table>
											</div>
											<br>
											<div class="isi_surat paragraf">
												<p>Mengajukan permohonan izin seperti perihal diatas, untuk menyelenggarakan keramaian mengumpulkan orang banyak
													dalam rangka kegiatan <?= $w->nama_kegiatan; ?>,yang akan dilaksanakan pada : </p>
											</div>
											<div class="isi_surat identitas">
												<table class="table-responsive">
													<tbody>
														<tr>
															<td><b>Kegiatan</b></td>
															<td> </td>
															<td>:</td>
															<td> </td>
															<td><?= $w->nama_kegiatan; ?></td>
														</tr>
														<tr>
															<td><b>Hari,Tgl</b></td>
															<td> </td>
															<td>:</td>
															<td> </td>
															<td><?= $w->hari_kegiatan; ?>,<?= format_indo(date($w->tanggal_kegiatan)); ?></td>
														</tr>
														<tr>
															<td><b>Tempat</b></td>
															<td> </td>
															<td>:</td>
															<td> </td>
															<td><?= $w->tempat; ?></td>
														</tr>
														<tr>
															<td><b>Jam</b></td>
															<td> </td>
															<td>:</td>
															<td> </td>
															<td><?= $w->jam; ?> WIB</td>
														</tr>
													</tbody>
												</table>
											</div>
											<br>
											<div class="isi_surat paragraf">
												<p>Demikian Surat Keterangan Izin Keramaian kami buat, agar dapat dipergunakan sebagaimana mestinya.</p>
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
											foreach ($detail_suket as $d) {
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
												<center><img class="img-fluid" width="50%" alt="ttd_lurah" src="<?= base_url(); ?>../assets/uploads/kades/<?= $k->foto_ttd_kades; ?>"></center>
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
										<a href="<?= base_url() ?>admin/cetak_surat005/<?php foreach ($detail_suket as $w) { ?><?= $w->id_permohonan_surat ?> <?php } ?>">
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