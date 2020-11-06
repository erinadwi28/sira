<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<?php foreach($detail_permohonan_masuk as $detail){ ?>
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Detail Data Permohonan Surat</h1>
		<?php if($detail->status == "Menunggu Persetujuan Ketua RT" || $detail->status == "Menunggu Persetujuan Admin") { ?>
		<a href="<?= base_url('kades/list_data_permohonan')?>">
			<button id="btn_kembali" class="btn btn-sm btn-warning" type="submit">
				<i class="fa fa-arrow-left">
				</i> Kembali
			</button>
		</a>
		<?php } elseif($detail->status == "Ditolak") {?>
		<a href="<?= base_url('kades/list_data_permohonan_ditolak')?>">
			<button id="btn_kembali" class="btn btn-sm btn-warning" type="submit">
				<i class="fa fa-arrow-left">
				</i> Kembali
			</button>
		</a>
		<?php } elseif($detail->status == "Selesai") {?>
		<a href="<?= base_url('kades/list_data_permohonan_selesai')?>">
			<button id="btn_kembali" class="btn btn-sm btn-warning" type="submit">
				<i class="fa fa-arrow-left">
				</i> Kembali
			</button>
		</a> <?php } ?>
	</div>

	<div class="flash-data" data-flashdata="<?= $this->session->flashdata('success');?>"></div>
	<?php if ($this->session->flashdata('success')) : ?>
	<?php endif; ?>

	<!-- Content Row line 1-->
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8 mb-4">
			<div class="card shadow mb-2">
				<div class="card-body">

                    <?php if($detail->status == "Menunggu Persetujuan Admin") { ?>
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
								id="nomor_surat_rt" value="" disabled>
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
								id="nomor_surat_rt" value="<?= $detail->nomor_surat_rt; ?>" disabled>
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
								id="nomor_surat_rt" value="<?= $detail->no_tupoksi; ?>/<?= $detail->no_registrasi; ?>/<?= $detail->no_kelurahan; ?>/<?= $detail->no_bulan; ?>/<?= $detail->no_tahun; ?>" disabled>
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
								id="nomor_surat_rt" value="<?= $detail->nomor_surat_rt; ?>" disabled>
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
								id="nomor_surat_rt" value="" disabled>
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
								id="nomor_surat_rt" value="" disabled>
						</div>
						<div class="col-md-3">
						</div>
                    </div>
                    <?php } ?>

					<table class="table-hover table-responsive">
						<tbody>
							<tr>
								<td><b>Nama Almarhum/Almarhumah</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $detail->nama_alm; ?></td>
							</tr>
							<tr>
								<td><b>Jenis Kelamin</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $detail->jenis_kelamin; ?></td>
							</tr>
							<tr>
								<td><b>Umur</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $detail->umur; ?></td>
							</tr>
							<tr>
								<td><b>Tempat Kediaman</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $detail->tempat_kediaman; ?></td>
							</tr>
							<tr>
								<td><b>Hari Meninggal</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $detail->hari_meninggal; ?></td>
							</tr>
							<tr>
								<td><b>Tanggal Meninggal</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $detail->tanggal_meninggal; ?></td>
							</tr>
							<tr>
								<td><b>Tempat Meninggal</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $detail->tempat_meninggal; ?></td>
							</tr>
							<tr>
								<td><b>Alasan Meninggal</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $detail->alasan_meninggal; ?></td>
							</tr>
							<tr>
								<td><b>Tanggal Permohonan</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $detail->tgl_permohonan_surat; ?></td>
							</tr>
							<tr>
								<td><b>Surat Yang Dimohon</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $detail->nama_surat; ?></td>
							</tr>
							<?php if($detail->keterangan != null) { ?>
							<tr>
								<td><b>Keterangan</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $detail->keterangan; ?></td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
			<?php } ?>
		</div>
		<div class="col-md-2"></div>
	</div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
