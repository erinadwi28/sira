<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Detail Data Surat Keluar</h1>
		<a href="<?= base_url('kades/list_surat_keluar') ?>">
			<button id="btn_kembali" class="btn btn-sm btn-warning" type="submit">
				<i class="fa fa-arrow-left">
				</i> Kembali
			</button>
		</a>
	</div>

	<div class="row">
		<div class="col-md-12">
			<div class="flash-data" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>
			<?php if ($this->session->flashdata('success')) : ?>
			<?php endif; ?>
		</div>
	</div>

	<!-- Content Row line 1-->
	<div class="row">
		<div class="col-md-4 mb-4">
			<!-- Lampiran -->
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<center>
						<h6 class="m-0 font-weight-bold text-primary">Lampiran</h6>
					</center>
				</div>

				<div class="card-body" style="padding: 20px;">
					<?php 
					foreach($lampiran as $sk){ ?>
					<center>
						<?php if($sk->lampiran != null) { ?>
							<p><?= $sk->lampiran; ?></p>
							<a id="btn_ubah" class="btn btn-sm btn-success"
							href="<?= base_url() ?>kades/download_lampiran_surat_keluar/<?= $sk->id_sk; ?>">
							<i class="fa fa-download nav-icon">
							</i> Download untuk melihat
						</a>
						<?php }  elseif($sk->lampiran == null) { ?>
							<p>Belum ada lampiran</p>
						<?php }?>
					</center>
					<?php } ?>
				</div>
			</div>
		</div>

		<div class="col-md-8 mb-4">
			<!-- Detail Data -->
			<div class="card shadow mb-4">
				<?php
				foreach ($detail_surat_keluar as $detail) { ?>
				<div class="card-body">
					<table class="table-hover table-responsive">
						<tbody>
							<tr>
								<td><b>Nomor Surat</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $detail->nomor_surat; ?></td>
							</tr>
							<tr>
								<td><b>Tanggal</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= format_indo(date($detail->tanggal)); ?></td>
							</tr>
							<tr>
								<td><b>Pengirim</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $detail->tujuan; ?></td>
							</tr>
							<tr>
								<td><b>Perihal</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $detail->perihal; ?></td>
							</tr>
							<tr>
								<td><b>Isi</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $detail->isi; ?></td>
							</tr>
						</tbody>
					</table>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
