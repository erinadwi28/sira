<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Form Pengajuan Surat Keterangan Janda</h1>
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
						<form class="form-horizontal" id="form8" action="<?= base_url('warga/aksi_tambah_permohonan_suket008') ?>" method="POST">

							<div class="form-group">
								<div class="form-group" style="margin-top: 15px;">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="nama_istri" class="col-sm-3 col-form-label">Nama Isteri</label>
										<div class="col-sm-8">
											<div class="form-line focused">
												<input type="text" class="form-control" id="nama_istri" name="nama_istri" placeholder="Nama Lengkap" value="<?= $detail->nama; ?>">
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
									<label for="Tempat_lahir_istri" class="col-sm-3 col-form-label">Tempat Lahir</label>
									<div class="col-sm-8">
										<div class="form-line focused">
											<input type="text" class="form-control" id="tempat_lahir_istri" name="tempat_lahir_istri" placeholder="Tempat Lahir Istri" value="<?= $detail->tempat_lahir; ?>">
											<i class=" fas fa-check-circle"></i>
											<i class="fas fa-exclamation-circle"></i>
											<small>Error massage</small>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="form-group row" style="margin-left: 10px;">
									<label for="Tanggal_lahir_istri" class="col-sm-3 col-form-label">Tanggal Lahir</label>
									<div class="col-sm-8">
										<div class="form-line">
											<input type="date" class="form-control" id="tanggal_lahir_istri" name="tanggal_lahir_istri" value="<?= $detail->tanggal_lahir; ?>">
											<i class=" fas fa-check-circle"></i>
											<i class="fas fa-exclamation-circle"></i>
											<small>Error massage</small>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="form-group row" style="margin-left: 10px;">
									<label for="Pekerjaan_istri" class="col-sm-3 col-form-label">Pekerjaan Isteri</label>
									<div class="col-sm-8">
										<div class="form-line">
											<input type="text" class="form-control" id="pekerjaan_istri" name="pekerjaan_istri" value="<?= $detail->pekerjaan; ?>">
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
											<textarea class="form-control" id="alamat_tinggal" name="alamat_tinggal" rows="3" placeholder="Alamat Tinggal"><?= $detail->alamat; ?></textarea>
											<i class=" fas fa-check-circle"></i>
											<i class="fas fa-exclamation-circle"></i>
											<small>Error massage</small>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="form-group" style="margin-top: 15px;">
									<div class="form-group row" style="margin-left: 10px;">
										<label for="Nama_suami" class="col-sm-3 col-form-label">Nama Suami</label>
										<div class="col-sm-8">
											<div class="form-line focused">
												<input type="text" class="form-control" id="nama_suami" name="nama_suami" placeholder="masukan nama lengkap suami di sini...">
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
									<label for="Tempat_lahir_suami" class="col-sm-3 col-form-label">Tempat Lahir
										Suami</label>
									<div class="col-sm-8">
										<div class="form-line focused">
											<input type="text" class="form-control" id="tempat_lahir_suami" name="tempat_lahir_suami" placeholder="masukan tempat lahir suami di sini...">
											<i class=" fas fa-check-circle"></i>
											<i class="fas fa-exclamation-circle"></i>
											<small>Error massage</small>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="form-group row" style="margin-left: 10px;">
									<label for="Tanggal_lahir_suami" class="col-sm-3 col-form-label">Tanggal Lahir
										Suami</label>
									<div class="col-sm-8">
										<div class="form-line">
											<input type="date" class="form-control" id="tanggal_lahir_suami" name="tanggal_lahir_suami">
											<i class=" fas fa-check-circle"></i>
											<i class="fas fa-exclamation-circle"></i>
											<small>Error massage</small>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="form-group row" style="margin-left: 10px;">
									<label for="Pekerjaan_suami" class="col-sm-3 col-form-label">Pekerjaan Suami</label>
									<div class="col-sm-8">
										<div class="form-line">
											<input type="text" class="form-control" id="pekerjaan_suami" name="pekerjaan_suami" placeholder="masukan pekerjaan suami di sini...">
											<i class=" fas fa-check-circle"></i>
											<i class="fas fa-exclamation-circle"></i>
											<small>Error massage</small>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="form-group row" style="margin-left: 10px;">
									<label for="alasan" class="col-sm-3 col-form-label">Telah pergi meninggalkan isterinya karena</label>
									<div class="col-sm-8">
										<div class="form-line">
											<textarea class="form-control" id="alasan" name="alasan" rows="3" placeholder="masukan alasan di sini..."></textarea>
											<i class=" fas fa-check-circle"></i>
											<i class="fas fa-exclamation-circle"></i>
											<small>Error massage</small>
										</div>
									</div>
								</div>
								<input type="hidden" class="form-control" id="id_nama_surat" name="id_nama_surat" value="8">
								<input type="hidden" class="form-control" id="id_warga" name="id_warga" value="<?= $detail->id_warga; ?>">
								<input type="hidden" class="form-control" id="status" name="status" value="Belum Tuntas">
							</div>
				</div>
				<div class="card-footer">
					<div class="float-right">
						<a href="#">
							<button id="btn_setuju" class="btn btn-sm btn-success" type="submit">
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
	<!-- End of Main Content -->
</div>