<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<?php foreach($detail_permohonan_masuk as $detail){ ?>
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Detail Data Permohonan Surat</h1>
		<a href="<?= base_url('kades/list_riwayat_permohonan')?>">
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
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary text-center">SURAT PENGANTAR KARTU KELUARGA</h6>
				</div>
				<div class="card-body">

			<?php if($detail->status == "Menunggu Persetujuan Kelurahan") { ?>
					<!-- <div class="row">
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
					</div> -->
					<div class="row">
						<div class="col-md-12">
							<center> <b><label for="nomor_surat_rt">Nomor Surat Ketua RT</label></b>
							</center>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
						</div>
						<div class="col-md-6  mb-3">
							<input type="text" class="form-control form-user-input" name="nomor_surat_rt"
								id="nomor_surat_rt" value="<?= $detail->nomor_surat_rt; ?>" disabled style="text-align: center;">
						</div>
						<div class="col-md-3">
						</div>
                    </div>
                    
                    <?php } elseif($detail->status == "Selesai") { ?>
                    
                    <!-- <div class="row">
						<div class="col-md-12">
							<center> <b><label for="nomor_surat_rt">Nomor Surat Kelurahan</label></b></center>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
						</div>
						<div class="col-md-6 mb-3">
							<input type="text" class="form-control form-user-input" name="nomor_surat_rt"
								id="nomor_surat_rt" value="<?= $detail->no_registrasi; ?>/<?= $detail->no_kelurahan; ?>/<?= $detail->no_kelurahan; ?>/<?= $detail->no_kecamatan; ?>/<?= $detail->no_bulan; ?>/<?= $detail->no_tahun; ?>/<?= $detail->no_keterangan; ?>" disabled>
						</div>
						<div class="col-md-3">
						</div>
					</div> -->

					<div class="row">
						<div class="col-md-12">
							<center> <b><label for="nomor_surat_rt">Nomor Surat Ketua RT</label></b>
							</center>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
						</div>
						<div class="col-md-6">
							<input type="text" class="form-control form-user-input" name="nomor_surat_rt"
								id="nomor_surat_rt" value="<?= $detail->nomor_surat_rt; ?>" disabled style="text-align: center;">
						</div>
						<div class="col-md-3">
						</div>
                    </div>
                    
					<?php } else { ?>
					<!-- <div class="row">
						<div class="col-md-12">
							<center> <b><label for="nomor_surat_rt">Nomor Surat Kelurahan</label></b>
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
                    </div> -->
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
								<td><b>Nama</b></td>
                                <td> </td>
								<td> </td>
								<td> : </td>
								<td> </td>
								<td> </td>								
								<td><?= $detail->nama; ?></td>
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
								<td><b>Jenis Kelamin</b></td>
                                <td> </td>
								<td> </td>
								<td> : </td>
								<td> </td>
								<td> </td>								
								<td><?= $detail->jenis_kelamin; ?></td>
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
								<td><b>Agama</b></td>
                                <td> </td>
								<td> </td>
								<td> : </td>
								<td> </td>
								<td> </td>								
								<td><?= $detail->agama; ?></td>
							</tr>
							<tr>
								<td><b>Kewarganegaraan</b></td>
                                <td> </td>
								<td> </td>
								<td> : </td>
								<td> </td>
								<td> </td>								
								<td><?= $detail->kewarganegaraan; ?></td>
							</tr>
							<tr>
								<td><b>Pendidikan Terakhir</b></td>
                                <td> </td>
								<td> </td>
								<td> : </td>
								<td> </td>
								<td> </td>								
								<td><?= $detail->pendidikan_terakhir; ?></td>
							</tr>
							<tr>
								<td><b>Pekerjaan</b></td>
                                <td> </td>
								<td> </td>
								<td> : </td>
								<td> </td>
								<td> </td>								
								<td><?= $detail->pekerjaan; ?></td>
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
								<td><b>Tanggal Tinggal</b></td>
                                <td> </td>
								<td> </td>
								<td> : </td>
								<td> </td>
								<td> </td>								
								<td><?= format_indo(date($detail->tanggal_tinggal)); ?></td>
							</tr>
							<tr>
								<td><b>Kepindahan Dari</b></td>
                                <td> </td>
								<td> </td>
								<td> : </td>
								<td> </td>
								<td> </td>								
								<td><?= $detail->kepindahan_dari; ?></td>
							</tr>
							<tr>
								<td><b>Nama Ayah</b></td>
                                <td> </td>
								<td> </td>
								<td> : </td>
								<td> </td>
								<td> </td>								
								<td><?= $detail->nama_ayah; ?></td>
							</tr>
							<tr>
								<td><b>Nama Ibu</b></td>
                                <td> </td>
								<td> </td>
								<td> : </td>
								<td> </td>
								<td> </td>								
								<td><?= $detail->nama_ibu; ?></td>
							</tr>
							<tr>
								<td><b>Jumlah Pengikut</b></td>
                                <td> </td>
								<td> </td>
								<td> : </td>
								<td> </td>
								<td> </td>								
								<td><?= $detail->jml_pengikut; ?></td>
							</tr>
							<tr>
								<td><b>Tanggal permohonan</b></td>
                                <td> </td>
								<td> </td>
								<td> : </td>
								<td> </td>
								<td> </td>								
								<td><?= format_indo(date($detail->tgl_permohonan_surat)); ?></td>
							</tr>
														
							<!-- tanggal RT -->
							<?php if($detail->status == "Ditolak Ketua RT") { ?>
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
							<?php if($detail->status == "Ditolak Kelurahan") { ?>
								<tr>
									<td><b>Tanggal Ditolak Kelurahan</b></td>
                                    <td> </td>
    								<td> </td>
    								<td> : </td>
    								<td> </td>
    								<td> </td>								
									<td><?= format_indo(date($detail->tgl_persetujuan_admin)); ?></td>
								</tr>							
							<?php } elseif($detail->status == "Selesai") { ?>
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

							<?php if($detail->keterangan != null) { ?>
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
                    <h5 class="mt-3"><b>Data Pengikut</b></h5>
					<!--Tabel pengikut -->
					<div class=" table-responsive mt-3">
					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama</th>
								<th>Tempat Lahir</th>
								<th>Tanggal Lahir</th>
								<th>Umur</th>
								<th>Status Perkawinan</th>
								<th>Pendidikan Terakhir</th>
								<th>Nama Orangtua</th>
								<th>Hubungan Dengan KK</th>
							</tr>
						</thead>
						<tbody>
							<?php
                            $no = 1;
                            foreach ($detail_pengikut as $pengikut) { ?>
							<tr>
								<td><?= $no++ ?></td>
								<td><?= $pengikut->nama; ?></td>
								<td><?= $pengikut->tempat_lahir; ?></td>
								<td><?= format_indo(date($pengikut->tanggal_lahir)); ?></td>
								<td><?= $pengikut->umur; ?></td>
								<td><?= $pengikut->status_perkawinan; ?></td>
								<td><?= $pengikut->pendidikan_terakhir; ?></td>
								<td><?= $pengikut->nama_ortu; ?></td>
								<td><?= $pengikut->status_hub_kk; ?></td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
					</div>
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
