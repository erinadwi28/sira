<?php foreach ($detail_permohonan as $d) { ?>
<?php if ($d->status ==  'Belum Tuntas') { ?>
<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Detail Permohonan</h1>

	</div>

	<div class="row">
		<div class="col-xs-12 col-sm-2"></div>
		<div class="col-md-8 mb-4">
			<!-- Detail Data -->
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary text-center">SURAT KETERANGAN JANDA</h6>
				</div>
				<div class="card-body">
					<div class="flash-data" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>
					<?php if ($this->session->flashdata('success')) : ?>
					<?php endif; ?>
					<table class="table-hover table-responsive">
						<tbody>
							<?php
									foreach ($detail_suket as $w) {
									?>
							<tr>
								<td><b>Nama Isteri</b></td>
								<td> </td>
								<td> </td>
								<td>:</td>
								<td><?= $w->nama_istri ?></td>
							</tr>
							<tr>
								<td><b>Tempat Lahir</b></td>
								<td> </td>
								<td> </td>
								<td>:</td>
								<td><?= $w->tempat_lahir_istri ?></td>
							</tr>
							<tr>
								<td><b>Tanggal Lahir</b></td>
								<td> </td>
								<td> </td>
								<td>:</td>
								<td><?= format_indo(date($w->tanggal_lahir_istri)); ?></td>
							</tr>
							<tr>
								<td><b>Pekerjaan Isteri</b></td>
								<td> </td>
								<td> </td>
								<td>:</td>
								<td><?= $w->pekerjaan_istri ?></td>
							</tr>
							<tr>
								<td><b>Alamat Tinggal </b></td>
								<td> </td>
								<td> </td>
								<td>:</td>
								<td><?= $w->alamat_tinggal ?></td>
							</tr>
							<tr>
								<td><b>Nama Suami</b></td>
								<td> </td>
								<td> </td>
								<td>:</td>
								<td><?= $w->nama_suami ?></td>
							</tr>
							<tr>
								<td><b>Tempat, Tanggal Lahir Suami</b></td>
								<td> </td>
								<td> </td>
								<td>:</td>
								<td><?= $w->tempat_lahir_suami ?>, <?= format_indo(date($w->tanggal_lahir_suami)); ?></td>
							</tr>
							<tr>
								<td><b>Pekerjaan Suami</b></td>
								<td> </td>
								<td> </td>
								<td>:</td>
								<td><?= $w->pekerjaan_suami ?></td>
							</tr>
							<tr>
								<td><b>Telah pergi meninggalkan isterinya karena</b></td>
								<td> </td>
								<td> </td>
								<td>:</td>
								<td><?= $w->alasan ?></td>
							</tr>
							<?php } ?>

							<?php foreach ($detail_permohonan as $d) { ?>
							<tr>
								<td><b>Tanggal Permohonan</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= format_indo(date($d->tgl_permohonan_surat)); ?></td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
				<div class="card-footer">
					<div class="float-right">
						<?php foreach ($detail_suket as $w) { ?>
						<a href="<?= base_url() ?>warga/form_ubah_suket008/<?= $w->id_surat ?>">
							<button id=" btn_ubah" class="btn btn-sm btn-primary" type="submit">
								<i class="fa fa-edit nav-icon">
								</i> Ubah
							</button>
						</a>
						<a
							href="<?= base_url() ?>warga/update_status_permohonan/<?= $w->id_permohonan_surat ?>/<?= $warga['id_warga'] ?>">
							<button id="btn_selesai" class="btn btn-sm btn-success" type="submit">
								<i class="far fa-save nav-icon">
								</i> Selesai
							</button>
						</a>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--End Content Profile-->
</div>
<!-- /.container-fluid -->
<?php } else { ?>
<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Detail Permohonan Surat</h1>
		<a href="<?= base_url() ?>warga/list_history_permohonan/<?= $d->id_warga ?>">
			<button id=" btn_kembali" class="btn btn-sm btn-warning float-right" type="submit">
				<i class="fa fa-arrow-left">
				</i> Kembali
			</button>
		</a>
	</div>

	<div class="row">
		<div class="col-xs-12 col-sm-2"></div>
		<div class="col-md-8 mb-4">
			<!-- Detail Data -->
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary text-center">SURAT KETERANGAN JANDA</h6>
				</div>
				<div class="card-body">
					<table class="table-hover table-responsive">
						<tbody>
							<?php
									foreach ($detail_suket as $w) {
									?>
							<tr>
								<td><b>Nama Isteri</b></td>
								<td> </td>
								<td> </td>
								<td>:</td>
								<td><?= $w->nama_istri ?></td>
							</tr>
							<tr>
								<td><b>Tempat Lahir</b></td>
								<td> </td>
								<td> </td>
								<td>:</td>
								<td><?= $w->tempat_lahir_istri ?></td>
							</tr>
							<tr>
								<td><b>Tanggal Lahir</b></td>
								<td> </td>
								<td> </td>
								<td>:</td>
								<td><?= format_indo(date($w->tanggal_lahir_istri)); ?></td>
							</tr>
							<tr>
								<td><b>Pekerjaan Isteri</b></td>
								<td> </td>
								<td> </td>
								<td>:</td>
								<td><?= $w->pekerjaan_istri ?></td>
							</tr>
							<tr>
								<td><b>Alamat Tinggal </b></td>
								<td> </td>
								<td> </td>
								<td>:</td>
								<td><?= $w->alamat_tinggal ?></td>
							</tr>
							<tr>
								<td><b>Nama Suami</b></td>
								<td> </td>
								<td> </td>
								<td>:</td>
								<td><?= $w->nama_suami ?></td>
							</tr>
							<tr>
								<td><b>Tempat, Tanggal Lahir Suami</b></td>
								<td> </td>
								<td> </td>
								<td>:</td>
								<td><?= $w->tempat_lahir_suami ?>, <?= format_indo(date($w->tanggal_lahir_suami)); ?></td>
							</tr>
							<tr>
								<td><b>Pekerjaan Suami</b></td>
								<td> </td>
								<td> </td>
								<td>:</td>
								<td><?= $w->pekerjaan_suami ?></td>
							</tr>
							<tr>
								<td><b>Telah pergi meninggalkan isterinya karena</b></td>
								<td> </td>
								<td> </td>
								<td>:</td>
								<td><?= $w->alasan ?></td>
							</tr>

							<?php foreach ($detail_permohonan as $d) { ?>
							<tr>
								<td><b>Tanggal Permohonan</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= format_indo(date($d->tgl_permohonan_surat)); ?></td>
							</tr>

							<!-- tanggal rt -->
							<?php if ($d->status ==  'Menunggu Persetujuan Kelurahan' || $d->status ==  'Selesai' || $d->status ==  'Ditolak Kelurahan') { ?>
								<tr>
									<td><b>Tanggal Disetujui Ketua RT</b></td>
									<td> </td>
									<td> </td>
									<td> </td>
									<td><?= format_indo(date($d->tanggal_persetujuan_rt)); ?></td>
								</tr>
							<?php } elseif($d->status ==  'Ditolak Ketua RT') { ?>
								<tr>
									<td><b>Tanggal Ditolak Ketua RT</b></td>
									<td> </td>
									<td> </td>
									<td> </td>
									<td><?= format_indo(date($d->tanggal_persetujuan_rt)); ?></td>
								</tr>							
							<?php } ?>
							
							<!-- tanggal admin -->
							<?php if ($d->status ==  'Selesai') { ?>
								<tr>
								<td><b>Tanggal Surat Dikeluarkan</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= format_indo(date($d->tgl_persetujuan_admin)); ?></td>
							</tr>
							<?php } elseif($d->status ==  'Ditolak Kelurahan' && $d->tgl_persetujuan_admin != null ) { ?>
								<tr>
									<td><b>Tanggal Ditolak Kelurahan</b></td>
									<td> </td>
									<td> </td>
									<td> </td>
									<td><?= format_indo(date($d->tgl_persetujuan_admin)); ?></td>
								</tr>							
							<?php } ?>	

							<?php if($d->keterangan != null) { ?>
							<tr>
								<td><b>Keterangan</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $d->keterangan; ?></td>
							</tr>
							<?php } ?>
							<?php } ?>

							<?php if($w->no_registrasi != null && $w->no_kelurahan  != null && $w->no_bulan != null && $w->no_tahun != null ) { ?>
							<tr>
								<td><b>Nomor Surat Kelurahan</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $w->no_registrasi; ?>/<?= $w->no_kelurahan; ?>/<?= $w->no_bulan; ?>/<?= $w->no_tahun; ?>
								</td>
							</tr>
							<?php } ?>

							<?php if($w->nomor_surat_rt != null) { ?>
							<tr>
								<td><b>Nomor Surat Ketua RT</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $w->nomor_surat_rt; ?></td>
							</tr>
							<?php } ?>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<!--End Content Profile-->
</div>
<!-- /.container-fluid -->
<?php } ?>
<?php } ?>
