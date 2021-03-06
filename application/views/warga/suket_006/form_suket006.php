<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Form Pengajuan Surat Keterangan Belum Pernah Menikah</h1>
		<a href="<?= base_url('warga') ?>">
			<button id="btn_kembali" class="btn btn-sm btn-warning" type="">
				<i class="fa fa-arrow-left">
				</i> Kembali
			</button>
		</a>
	</div>

	<!--Begin Content Profile-->
	<div class="row clearfix">
		<div class="col-xs-12 col-sm-2"></div>
		<div class="col-xs-12 col-sm-8">
			<div class="card shadow mb-5">
				<div class="body">
					<?php
					foreach ($detail_profil as $detail) {

					?>
						<form class="form-horizontal" id="form6" action="<?= base_url('warga/aksi_tambah_permohonan_suket006') ?>" method="POST">
							<div class="form-group">
								<div class="form-group">
									<div class="form-group" style="margin-top: 15px;">
										<div class="form-group row" style="margin-left: 10px;">
											<label for="Nama" class="col-sm-3 col-form-label">Nama</label>
											<div class="col-sm-8">
												<div class="form-line focused">
													<input type="text" class="form-control" id="nama" name="nama" value="<?= $detail->nama; ?>">
													<i class=" fas fa-check-circle"></i>
													<i class="fas fa-exclamation-circle"></i>
													<small>Error massage</small>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Jenis_kelamin" class="col-sm-3 col-form-label">Jenis Kelamin</label>
										<div class="col-sm-8">
											<div class="form-line">
												<select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
													<option value="Laki-Laki" <?= ($detail->jenis_kelamin == 'Laki-Laki' ? ' selected' : ''); ?> class="form-user-input">Laki-Laki
													</option>
													<option value="Perempuan" <?= ($detail->jenis_kelamin == 'Perempuan' ? ' selected' : ''); ?> class="form-user-input">Perempuan
													</option>
												</select>
												<i class=" fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Error massage</small>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Tempat_lahir" class="col-sm-3 col-form-label">Tempat Lahir</label>
										<div class="col-sm-8">
											<div class="form-line focused">
												<input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?= $detail->tempat_lahir; ?>" value="">
												<i class=" fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Error massage</small>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Tanggal_lahir" class="col-sm-3 col-form-label">Tanggal Lahir</label>
										<div class="col-sm-8">
											<div class="form-line">
												<input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?= $detail->tanggal_lahir; ?>">
												<i class=" fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Error massage</small>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Pekerjaan" class="col-sm-3 col-form-label">Pekerjaan</label>
										<div class="col-sm-8">
											<div class="form-line">
												<input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="<?= $detail->pekerjaan; ?>">
												<i class=" fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Error massage</small>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Alamat_tinggal" class="col-sm-3 col-form-label">Alamat Tinggal</label>
										<div class="col-sm-8">
											<div class="form-line">
												<textarea class="form-control" id="alamat_tinggal" name="alamat_tinggal" rows="3" placeholder="Alamat"><?= $detail->alamat; ?></textarea>
												<i class=" fas fa-check-circle"></i>
												<i class="fas fa-exclamation-circle"></i>
												<small>Error massage</small>
											</div>
										</div>
									</div>
								</div>
							</div>
							<input type="hidden" class="form-control" id="id_nama_surat" name="id_nama_surat" required="" value="6">
							<input type="hidden" class="form-control" id="id_warga" name="id_warga" required="" value="<?= $detail->id_warga; ?>">
							<input type="hidden" class="form-control" id="status" name="status" required="" value="Belum Tuntas">
				</div>
				<div class="card-footer">
					<div class="float-right">
						<a href="#">
							<button id="btn_simpan" class="btn btn-sm btn-success" type="submit">
								<i class="far fa-save nav-icon">
								</i> Simpan
							</button>
						</a>
					</div>
				</div>
				</form>
			<?php } ?>
			</div>
		</div>
		<!--End Content Profile-->
	</div>
</div>
<!-- End of Main Content -->