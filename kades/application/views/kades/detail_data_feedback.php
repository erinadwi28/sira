<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<?php foreach($detail_feedback as $detail){ ?>
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Detail Feedback Dari Pengguna</h1>
		<a href="<?= base_url('kades/list_feedback')?>">
			<button id="btn_kembali" class="btn btn-sm btn-warning" type="submit">
				<i class="fa fa-arrow-left">
				</i> Kembali
			</button>
		</a>
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
					<table class="table-hover table-responsive">
						<tbody>
							<tr>
								<td><b>Tanggal Masuk</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $detail->tanggal_kirim; ?></td>
							</tr>
							<tr>
								<td><b>Nama</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $detail->nama; ?></td>
							</tr>
							<tr>
								<td><b>No HandPhone</b></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td><?= $detail->no_hp; ?></td>
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
			</div>
			<?php } ?>
		</div>
		<div class="col-md-2"></div>
	</div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
