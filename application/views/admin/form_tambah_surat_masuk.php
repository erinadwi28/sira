<!-- Begin Page Content -->
<div class="container-fluid">
					<!-- Page Heading -->
					<div class="d-sm-flex align-items-center justify-content-between mb-4">
						<h1 class="h3 mb-0 text-gray-800">Tambah Data surat Masuk</h1>
					</div>

					<!-- Content Row line 1-->
					<div class="row">
						<div class="col-md-2"></div>
						<div class="col-md-8 mb-4">
							<!-- Detail Data -->
							<div class="card shadow mb-4">
								<div class="card-body">
									<form>
										<div class="form-group row">
											<label for="nomor_surat" class="col-sm-3 col-form-label">Nomor Surat</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" id="nomor_surat"
													name="nomor_surat" value="">
											</div>
										</div>
										<div class="form-group row">
											<label for="tanggal" class="col-sm-3 col-form-label">Tanggal</label>
											<div class="col-sm-9">
												<input type="text" class="form-control date" id="tanggal" name="tanggal"
													value="">
											</div>
										</div>
										<div class="form-group row">
											<label for="pengirim" class="col-sm-3 col-form-label">Pengirim</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" id="pengirim" name="pengirim"
													value="">
											</div>
										</div>
										<div class="form-group row">
											<label for="perihal" class="col-sm-3 col-form-label">Perihal</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" id="perihal" name="perihal"
													value="">
											</div>
										</div>
										<div class="form-group row">
											<label for="isi_surat" class="col-sm-3 col-form-label">Isi Surat</label>
											<div class="col-sm-9">
												<textarea class="form-control" id="isi_surat" name="isi_surat"
													rows="3"></textarea>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-3 col-form-label" for="foto_surat"><b>Foto
													Surat</b></label>
											<div class="col-sm-9">
												<div class="custom-file">
													<input type="file" class="custom-file-input" id="foto_surat"
														name="foto_surat">
													<label class="custom-file-label upload-area"
														for="exampleInputFile">Pilih File...</label>
												</div>
											</div>
										</div>
									</form>
								</div>
								<div class="card-footer">
									<span>
										<button class="btn btn-sm btn-primary float-right ml-1" type="submit"><i
												class="far fa-save"></i> Simpan</button>
									</span>
									<span>
										<button class="btn btn-sm btn-warning float-right" type="submit"><i
												class="fa fa-ban"></i> Batal</button>
									</span>
								</div>
							</div>
						</div>
						<div class="col-md-2"></div>
					</div>
				</div>
				<!-- /.container-fluid -->
			</div>
			<!-- End of Main Content -->