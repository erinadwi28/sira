<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Tambah Data Surat Masuk</h1>
		<a href="<?= base_url('admin/list_surat_masuk') ?>">
			<button id="btn_kembali" class="btn btn-sm btn-warning" type="">
				<i class="fa fa-arrow-left">
				</i> Kembali
			</button>
		</a>
	</div>

	<!-- Content Row line 1-->
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8 mb-4">
			<!-- Detail Data -->
			<div class="card shadow mb-4">
				<div class="card-body">
					<form role="form" action="<?= base_url('admin/aksi_tambah_surat_masuk') ?>"
						enctype="multipart/form-data" method="post" accept-charset="utf-8" id="formSuratMasuk">

						<div class="form-group-surat">
							<div class="form-group row">
								<label for="nomor_surat" class="col-sm-3 col-form-label">Nomor Surat</label>
								<div class="col-sm-9">
									<div class="form-line">
										<input type="text" class="form-control" id="nomor_surat" name="nomor_surat">
										<i class="fas fa-check-circle"></i>
										<i class="fas fa-exclamation-circle"></i>
										<small> Error Message </small>
									</div>
								</div>
							</div>
						</div>

						<div class="form-group-surat">
							<div class="form-group row">
								<label for="tanggal" class="col-sm-3 col-form-label">Tanggal</label>
								<div class="col-sm-9">
									<div class="form-line">
										<input type="date" class="form-control date" id="tanggal" name="tanggal">
										<i class="fas fa-check-circle"></i>
										<i class="fas fa-exclamation-circle"></i>
										<small> Error Message </small>
									</div>
								</div>
							</div>
						</div>

						<div class="form-group-surat">
							<div class="form-group row">
								<label for="pengirim" class="col-sm-3 col-form-label">Pengirim</label>
								<div class="col-sm-9">
									<div class="form-line">
										<input type="text" class="form-control" id="pengirim" name="pengirim" value="">
										<i class="fas fa-check-circle"></i>
										<i class="fas fa-exclamation-circle"></i>
										<small> Error Message </small>
									</div>
								</div>
							</div>
						</div>

						<div class="form-group-surat">
							<div class="form-group row">
								<label for="perihal" class="col-sm-3 col-form-label">Perihal</label>
								<div class="col-sm-9">
									<div class="form-line">
										<input type="text" class="form-control" id="perihal" name="perihal" value="">
										<i class="fas fa-check-circle"></i>
										<i class="fas fa-exclamation-circle"></i>
										<small> Error Message </small>
									</div>
								</div>
							</div>
						</div>

						<div class="form-group-surat">
							<div class="form-group row">
								<label for="isi_surat" class="col-sm-3 col-form-label">Isi Surat</label>
								<div class="col-sm-9">
									<div class="form-line">
										<textarea class="form-control" id="isi" name="isi" rows="3"></textarea>
										<i class="fas fa-check-circle"></i>
										<i class="fas fa-exclamation-circle"></i>
										<small> Error Message </small>
									</div>
								</div>
							</div>
						</div>

						<div class="form-group-surat">
							<div class="form-group row">
								<div class="input-group">
									<label class="col-sm-3 col-form-label">File Lampiran</label>
									<div class="custom-file ml-3 mr-3">
										<div class="form-line">
											<label class="custom-file-label" for="file-upload-profil">pilih
												file...</label>
											<input type="file" class="custom-file-input" id="file-upload-profil"
												name="berkas[]">
										</div>
									</div>
								</div>
							</div>
						</div>
						<br>
						<hr />
						<div class="">
							<div class="float-right mb-0">
								<a href="">
									<button id="btn_batal" class="btn btn-sm btn-danger" type="reset">
										<i class="fa fa-times nav-icon">
										</i> Batal
									</button>
								</a>
								<a href="">
									<button id="btn_simpan" class="btn btn-sm btn-primary" type="submit">
										<i class="far fa-save nav-icon">
										</i> Simpan
									</button>
								</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-2"></div>
	</div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
