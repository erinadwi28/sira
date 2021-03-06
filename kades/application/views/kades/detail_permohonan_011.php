<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<?php foreach ($detail_permohonan_masuk as $detail) { ?>
		<div class="d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h3 mb-0 text-gray-800">Detail Data Permohonan Surat</h1>
			<a href="<?= base_url('kades/list_riwayat_permohonan') ?>">
				<button id="btn_kembali" class="btn btn-sm btn-warning" type="submit">
					<i class="fa fa-arrow-left">
					</i> Kembali
				</button>
			</a>
		</div>

		<div class="flash-data" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>
		<?php if ($this->session->flashdata('success')) : ?>
		<?php endif; ?>

	<!-- Content Row line 1-->
	<div class="row">
		<div class="col-md-8 mb-4">
			<div class="card shadow mb-2">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary text-center">SURAT PENGANTAR KTP</h6>
				</div>
				<div class="card-body">

			<?php if($detail->status == "Menunggu Persetujuan Kelurahan") { ?>
						<div class="row">
						<div class="col-md-12">
							<center> <b><label for="nomor_surat_rt">Nomor Surat Kelurahan</label></b></center>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
						</div>
						<div class="col-md-6">
							<input type="text" class="form-control form-user-input" name="nomor_surat_rt"
								id="nomor_surat_rt" value="" disabled style="text-align: center;">
						</div>
						<div class="col-md-3">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<center> <b><label for="nomor_surat_rt">Nomor Surat Ketua RT</label></b>
							</center>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
						</div>
						<div class="col-md-6 mb-3">
							<input type="text" class="form-control form-user-input" name="nomor_surat_rt"
								id="nomor_surat_rt" value="<?= $detail->nomor_surat_rt; ?>" disabled style="text-align: center;">
						</div>
						<div class="col-md-3">
						</div>
                    </div>
                    
                    <?php } elseif($detail->status == "Selesai") { ?>
                    
                    <div class="row">
						<div class="col-md-12">
							<center> <b><label for="nomor_surat_rt">Nomor Surat Kelurahan</label></b></center>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
						</div>
						<div class="col-md-6">
							<input type="text" class="form-control form-user-input" name="nomor_surat_rt"
								id="nomor_surat_rt" value="<?= $detail->no_registrasi; ?>/<?= $detail->no_kelurahan; ?>/<?= $detail->no_bulan; ?>/<?= $detail->no_tahun; ?>" disabled style="text-align: center;">
						</div>
						<div class="col-md-3">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<center> <b><label for="nomor_surat_rt">Nomor Surat Ketua RT</label></b>
							</center>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
						</div>
						<div class="col-md-6 mb-3">
							<input type="text" class="form-control form-user-input" name="nomor_surat_rt"
								id="nomor_surat_rt" value="<?= $detail->nomor_surat_rt; ?>" disabled style="text-align: center;">
						</div>
						<div class="col-md-3">
						</div>
                    </div>
                    
					<?php } else { ?>
					<div class="row">
						<div class="col-md-12">
							<center> <b><label for="nomor_surat_rt">Nomor Surat Kelurahan</label></b>
							</center>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
						</div>
						<div class="col-md-6">
							<input type="text" class="form-control form-user-input" name="nomor_surat_rt"
								id="nomor_surat_rt" value="" disabled style="text-align: center;">
						</div>
						<div class="col-md-3">
						</div>
                    </div>
                    <div class="row">
						<div class="col-md-12">
							<center> <b><label for="nomor_surat_rt">Nomor Surat Ketua RT</label></b>
							</center>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
						</div>
						<div class="col-md-6 mb-3">
							<input type="text" class="form-control form-user-input" name="nomor_surat_rt"
								id="nomor_surat_rt" value="<?= $detail->nomor_surat_rt; ?>" disabled style="text-align: center;">
						</div>
						<div class="col-md-3">
						</div>
                    </div>
                    <?php } ?>

					<table class="table-hover table-responsive">
						<tbody>
							<tr>
								<td><b>NIK</b></td>
                                <td> </td>
								<td> </td>
								<td> : </td>
								<td> </td>
								<td> </td>								
								<td><?= $detail->nik; ?></td>
							</tr>
							<tr>
								<td><b>Nama</b></td>
                                <td> </td>
								<td> </td>
								<td> : </td>
								<td> </td>
								<td> </td>								
								<td><?= $detail->nama; ?></td>
							</tr>
							<tr>
								<td><b>Alamat</b></td>
                                <td> </td>
								<td> </td>
								<td> : </td>
								<td> </td>
								<td> </td>								
								<td><?= $detail->alamat; ?></td>
							</tr>
							<tr>
								<td><b>RT</b></td>
                                <td> </td>
								<td> </td>
								<td> : </td>
								<td> </td>
								<td> </td>								
								<td><?= $detail->rt; ?></td>
							</tr>
							<tr>
								<td><b>Kelurahan</b></td>
                                <td> </td>
								<td> </td>
								<td> : </td>
								<td> </td>
								<td> </td>								
								<td><?= $detail->kelurahan; ?></td>
							</tr>
							<tr>
								<td><b>Kecamatan</b></td>
                                <td> </td>
								<td> </td>
								<td> : </td>
								<td> </td>
								<td> </td>								
								<td><?= $detail->kecamatan; ?></td>
							</tr>
							<tr>
								<td><b>Jenis Kelamin</b></td>
                                <td> </td>
								<td> </td>
								<td> : </td>
								<td> </td>
								<td> </td>								
								<td><?= $detail->jenis_kelamin; ?></td>
							</tr>
							<tr>
								<td><b>Agama</b></td>
                                <td> </td>
								<td> </td>
								<td> : </td>
								<td> </td>
								<td> </td>								
								<td><?= $detail->agama; ?></td>
							</tr>
							<tr>
								<td><b>Tempat Lahir</b></td>
                                <td> </td>
								<td> </td>
								<td> : </td>
								<td> </td>
								<td> </td>								
								<td><?= $detail->tempat_lahir; ?></td>
							</tr>
							<tr>
								<td><b>Tanggal Lahir</b></td>
                                <td> </td>
								<td> </td>
								<td> : </td>
								<td> </td>
								<td> </td>								
								<td><?= format_indo(date($detail->tanggal_lahir)); ?></td>
							</tr>
							<tr>
								<td><b>Status Perkawinan</b></td>
                                <td> </td>
								<td> </td>
								<td> : </td>
								<td> </td>
								<td> </td>								
								<td><?= $detail->status_perkawinan; ?></td>
							</tr>
							<tr>
								<td><b>Golongan Darah</b></td>
                                <td> </td>
								<td> </td>
								<td> : </td>
								<td> </td>
								<td> </td>								
								<td><?= $detail->golongan_darah; ?></td>
							</tr>
							<tr>
								<td><b>No Kartu Keluarga</b></td>
                                <td> </td>
								<td> </td>
								<td> : </td>
								<td> </td>
								<td> </td>								
								<td><?= $detail->no_kk; ?></td>
							</tr>
							<tr>
								<td><b>Tanggal Tinggal</b></td>
                                <td> </td>
								<td> </td>
								<td> : </td>
								<td> </td>
								<td> </td>								
								<td><?= format_indo(date($detail->tanggal_tinggal)); ?></td>
							</tr>
							<?php if ($detail->tanggal_surat_pindah != NULL && $detail->no_surat_pindah !=  NULL) { ?>
							<tr>
								<td><b>No Surat Pindah</b></td>
                                <td> </td>
								<td> </td>
								<td> : </td>
								<td> </td>
								<td> </td>								
								<td><?= $detail->no_surat_pindah; ?></td>
							</tr>
							<tr>
								<td><b>Tanggal Surat Pindah</b></td>
                                <td> </td>
								<td> </td>
								<td> : </td>
								<td> </td>
								<td> </td>								
								<td><?= format_indo(date($detail->tanggal_surat_pindah)); ?></td>
							</tr>
							<?php } ?>

							<tr>
								<td><b>Tanggal Permohonan</b></td>
                                <td> </td>
								<td> </td>
								<td> : </td>
								<td> </td>
								<td> </td>								
								<td><?= format_indo(date($detail->tgl_permohonan_surat)); ?></td>
							</tr>
														
								<!-- tanggal RT -->
								<?php if ($detail->status == "Ditolak Ketua RT") { ?>
									<tr>
										<td><b>Tanggal Ditolak Ketua RT</b></td>
                                        <td> </td>
        								<td> </td>
        								<td> : </td>
        								<td> </td>
        								<td> </td>								
										<td><?= format_indo(date($detail->tanggal_persetujuan_rt)); ?></td>
									</tr>
								<?php } else { ?>
									<tr>
										<td><b>Tanggal Disetujui Ketua RT</b></td>
                                        <td> </td>
        								<td> </td>
        								<td> : </td>
        								<td> </td>
        								<td> </td>								
										<td><?= format_indo(date($detail->tanggal_persetujuan_rt)); ?></td>
									</tr>
								<?php } ?>

								<!-- tanggal admin -->
								<?php if ($detail->status == "Ditolak Kelurahan") { ?>
									<tr>
										<td><b>Tanggal Ditolak Kelurahan</b></td>
                                        <td> </td>
        								<td> </td>
        								<td> : </td>
        								<td> </td>
        								<td> </td>								
										<td><?= format_indo(date($detail->tgl_persetujuan_admin)); ?></td>
									</tr>
								<?php } elseif ($detail->status == "Selesai") { ?>
									<tr>
										<td><b>Tanggal Surat Dikeluarkan</b></td>
                                        <td> </td>
        								<td> </td>
        								<td> : </td>
        								<td> </td>
        								<td> </td>								
										<td><?= format_indo(date($detail->tgl_persetujuan_admin)); ?></td>
									</tr>
								<?php } ?>

								<?php if ($detail->keterangan != null) { ?>
									<tr>
										<td><b>Keterangan</b></td>
                                        <td> </td>
        								<td> </td>
        								<td> : </td>
        								<td> </td>
        								<td> </td>								
										<td><?= $detail->keterangan; ?></td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			
			<div class="col-md-4 mb-4">
				<!-- Pas Foto -->
				<div class="card shadow mb-4">
					<div class="card-header py-3">
						<center>
							<h6 class="m-0 font-weight-bold text-primary">Lampiran Pas Foto 2 X 3</h6>
						</center>
					</div>
					<div class="card-body" style="padding: 15px;">
						<center>
							<div class="mb-2">
								<a href="<?= base_url(); ?>../assets/uploads/warga/suket_011/<?= $detail->pas_foto; ?>" data-gallery="mygallery" data-title="Pas Foto" data-toggle="lightbox">
									<img src="<?= base_url(); ?>../assets/uploads/warga/suket_011/<?= $detail->pas_foto; ?>" alt="pas foto" class="img-fluid" width="200px">
								</a>
							</div>
						</center>
					</div>
				</div>

				<!-- Foto KK -->
				<div class="card shadow mb-4">
					<div class="card-header py-3">
						<center>
							<h6 class="m-0 font-weight-bold text-primary">Lampiran Foto KK</h6>
						</center>
					</div>
					<div class="card-body" style="padding: 15px;">
					<center>
						<div class="mb-2">
							<a href="<?= base_url(); ?>../assets/uploads/warga/suket_011/<?= $detail->foto_kk; ?>" data-gallery="mygallery" data-title="Foto KK" data-toggle="lightbox">
								<img src="<?= base_url(); ?>../assets/uploads/warga/suket_011/<?= $detail->foto_kk; ?>" alt="foto kk" class="img-fluid" width="200px">
							</a>
						</div>
						</center>
					</div>
				</div>

				<!-- Foto Surat Pindah -->
			<?php if ($detail->tanggal_surat_pindah != NULL && $detail->no_surat_pindah !=  NULL) { ?>
				<div class="card shadow mb-4">
					<div class="card-header py-3">
						<center>
							<h6 class="m-0 font-weight-bold text-primary">Lampiran Foto Surat Pindah</h6>
						</center>
					</div>
					<div class="card-body" style="padding: 15px;">
					<center>
						<div class="mb-2">
							<a href="<?= base_url(); ?>../assets/uploads/warga/suket_011/<?= $detail->foto_surat_pindah; ?>" data-gallery="mygallery" data-title="Foto Surat Pindah" data-toggle="lightbox">
								<img src="<?= base_url(); ?>../assets/uploads/warga/suket_011/<?= $detail->foto_surat_pindah; ?>" alt="foto surat pindah" class="img-fluid" width="200px">
							</a>
						</div>
						</center>
					</div>
				</div>
			</div>
			<?php } ?>
        </div>
        <?php } ?>
	</div>
</div>
<!-- /.container-fluid -->

<!-- End of Main Content -->
