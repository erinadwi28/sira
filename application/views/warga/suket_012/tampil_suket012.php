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
							<div class="card shadow mb-5">
								<div class="card-body">
									<center>

										<!-- <hr class="hr_kop"> -->
										<div class="badan_surat">
											<div class="no_surat">
												<center>
													<p><u>PERMOHONAN UNTUK MENDAPATKAN KARTU KELUARGA</u><br>
													</p>
												</center>
											</div>
											<br>
											<div class="isi_surat paragraf">
												<p> Saya yang bertandatangan dibawah ini, menerangkan dengan sebenarnya :</p>
											</div>
											<div class="isi_surat identitas">
												<table class="table-responsive">
													<?php
													foreach ($detail_suket as $w) {
													?>
														<tbody>
															<tr>
																<td> 1. </td>
																<td><b>Nama Lengkap</b></td>
																<td> </td>
																<td> </td>
																<td>:</td>
																<td> </td>
																<td> </td>
																<td><?= $w->nama ?></td>
															</tr>
															<tr>
																<td> 2. </td>
																<td><b>Tempat, Tanggal Lahir</b></td>
																<td> </td>
																<td> </td>
																<td>:</td>
																<td> </td>
																<td> </td>
																<td><?= $w->tempat_lahir ?>, <?= format_indo(date($w->tanggal_lahir)); ?></td>
															</tr>
															<tr>
																<td> 3. </td>
																<td><b>Status Perkawinan</b></td>
																<td> </td>
																<td> </td>
																<td>:</td>
																<td> </td>
																<td> </td>
																<td><?= $w->status_perkawinan ?></td>
															</tr>
															<tr>
																<td> 4. </td>
																<td><b>Agama</b></td>
																<td> </td>
																<td> </td>
																<td>:</td>
																<td> </td>
																<td> </td>
																<td><?= $w->agama ?></td>
															</tr>
															<tr>
																<td> 5. </td>
																<td><b>Kewarganegaraan</b></td>
																<td> </td>
																<td> </td>
																<td>:</td>
																<td> </td>
																<td> </td>
																<td><?= $w->kewarganegaraan ?></td>
															</tr>
															<tr>
																<td> 6. </td>
																<td><b>Pendidikan Terakhir</b></td>
																<td> </td>
																<td> </td>
																<td>:</td>
																<td> </td>
																<td> </td>
																<td><?= $w->pendidikan_terakhir ?></td>
															</tr>
															<tr>
																<td> 7. </td>
																<td><b>Pekerjaan/ Jabatan</b></td>
																<td> </td>
																<td> </td>
																<td>:</td>
																<td> </td>
																<td> </td>
																<td><?= $w->pekerjaan ?></td>
															</tr>

															<tr>
																<td> 8. </td>
																<td><b>Alamat</b></td>
																<td> </td>
																<td> </td>
																<td>:</td>
																<td> </td>
																<td> </td>
																<td><?= $w->alamat ?></td>
															</tr>
															<tr>
																<td> 9. </td>
																<td><b>Tgl mulai tinggal di kelurahan</b></td>
																<td> </td>
																<td> </td>
																<td>:</td>
																<td> </td>
																<td> </td>
																<td><?= format_indo(date($w->tanggal_tinggal)); ?></td>
															</tr>
															<tr>
																<td> 10. </td>
																<td><b>Kepindahan dari</b></td>
																<td> </td>
																<td> </td>
																<td>:</td>
																<td> </td>
																<td> </td>
																<td><?= $w->kepindahan_dari ?></td>
															</tr>
															<tr>
																<td>11. </td>
																<td><b>Nama Orang Tua</b></td>
																<td> </td>
																<td> </td>
																<td>:</td>
																<td> </td>
																<td> </td>
																<td></td>
															</tr>
															<tr>
																<td> </td>
																<td> <b> a. Ayah</b></td>
																<td> </td>
																<td> </td>
																<td>:</td>
																<td> </td>
																<td> </td>
																<td><?= $w->nama_ayah ?></td>
															</tr>
															<tr>
																<td> </td>
																<td> <b> b. Ibu</b></td>
																<td> </td>
																<td> </td>
																<td>:</td>
																<td> </td>
																<td> </td>
																<td><?= $w->nama_ibu ?></td>
															</tr>
															<tr>
																<td>12. </td>
																<td> <B> Pengikut KK</B></td>
																<td> </td>
																<td> </td>
																<td>:</td>
																<td> </td>
																<td> </td>
																<td><?= $w->jml_pengikut ?></td>
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
															<th>Tempat, Tanggal Lahir</th>
															<th>Status</th>
															<th>Pendidikan Terakhir</th>
															<th>Nama Orang Tua</th>
															<th>Hub. Dengan KK</th>
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
																<td><?= $m->tempat_lahir ?>, <?= format_indo(date($m->tanggal_lahir)); ?></td>
																<td><?= $m->status_perkawinan ?></td>
																<td><?= $m->pendidikan_terakhir ?></td>
																<td><?= $m->nama_ortu ?></td>
																<td><?= $m->status_hub_kk ?></td>

															</tr>
														<?php } ?>
													</tbody>
												</table>

											</div>
											<div class="isi_surat paragraf">
												<p> Demikian data yang kami isikan merupakan data yang sebenarnya, dan bilamana
													terbukti saya memberikan data yang tidak sebenarnya / memalsukan data tersebut
													maka saya sanggup dan bersedia untuk dituntut sesuao peraturan perundang-undangan
													yang berlaku tanpa melibatkan pihak yang telah memproses data saya tersebut diatas.
												</p>
											</div>
									</center>
									<div class="row">
										<div class="col-md-6">
											<div class="badan_surat isi_surat">
												<center>
													<br>
													Mengetahui

												</center>
											</div>
										</div>
										<div class="col-md-6">
											<div class="badan_surat isi_surat">
												<?php
												foreach ($detail_permohonan as $d) {
												?>
													<center>

														Pangkalan Bun, <?= format_indo(date($d->tgl_persetujuan_admin)); ?><br>


													</center>
												<?php } ?>
											</div>
										</div>
									</div>


									<div class="row">
										<div class="col-md-6">
											<div class="badan_surat isi_surat">
												<center>

													LURAH MENDAWAI

												</center>
											</div>
										</div>
										<div class="col-md-6">
											<div class="badan_surat isi_surat">
												<center>

													Yang Mengisis Data

												</center>
											</div>
										</div>
									</div>
									<div class="row">
										<?php
										foreach ($data_kades as $k) {
										?>
											<div class="col-md-6 ">
												<div class="badan_surat isi_surat">
													<center><img class="img-fluid" width="50%" alt="ttd_lurah" src="<?= base_url(); ?>/assets/uploads/kades/<?= $k->foto_ttd_kades; ?>"></center>
												</div>
											</div>
											<div class="col-md-6">

											</div>
									</div>
									<div class="row">
										<div class="col-md-1">

										</div>
										<div class="col-md-4">
											<div class="badan_surat isi_surat">
												<center>

													<u><b><?= $k->nama; ?></b></u> <br>
													NIP. <?= $k->nip; ?>
												</center>
											<?php } ?>
											</div>

										</div>
										<div class="col-md-2">

										</div>
										<div class="col-md-4">
											<div class="badan_surat isi_surat">
												<?php
												foreach ($detail_suket as $w) {
												?>
													<center>

														<u><b><?= $w->nama; ?></b></u> <br>
													</center>
												<?php } ?>
											</div>
										</div>
									</div>
								</div>
								<div class="card-footer">
									<center>
										<a href="<?= base_url() ?>warga/cetak_surat012/<?php foreach ($detail_suket as $w) { ?><?= $w->id_permohonan_surat ?> <?php } ?>">
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