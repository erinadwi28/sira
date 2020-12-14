				<div class="row">
					<div class="col-md-2">
					</div>
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-12">
								<?php if ($this->session->flashdata('success')) : ?>
								<div class="alert alert-success alert-dismissible fade show" role="alert">
									<?= $this->session->flashdata('success') ?>
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<?php elseif($this->session->flashdata('error')) : ?>
								<div class="alert alert-danger alert-dismissible fade show" role="alert">
									<?= $this->session->flashdata('error') ?>
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<?php endif ?>
							</div>
						</div>
						<div class="card shadow mb-4">
							<div class="card-body">
								<div class="preview">
									<center>
										<h1 class="h3 mb-30 text-gray-800">Form Cari NIK Ubah Kata Sandi Ketua RT</h1>
									</center>
								</div>
								<div class="preview">
									<center>
										<div class="col-md-12 mb-3 ">
											<br>
											<em class="float-center small text-danger">*Pastikan NIK yag anda masukan benar</em>

											<form role="form" action="<?= base_url('admin/aksi_cari_nik_ubah_kata_sandi_rt') ?>"
												method="post" id="formCariNikRT1">
												<div class="form-row align-items-center">
													<div class="col-md-4"></div>
													<div class="col-auto col-md-4 ">
														<div class="form-group-nik">
															<input type="text" class="form-control mb-2" name="nik" id="nik"
																placeholder="Masukan NIK">
															<i class="fas fa-check-circle"></i>
															<i class="fas fa-exclamation-circle"></i>
															<small>Error Message</small>
														</div>
													</div>
													<div class="col-auto ">
														<a href="">
															<button id="btn_simpan" class="btn btn-sm btn-primary" type="submit"
																style="margin-top: -15px;">
																<i class="fas fa-search fa-sm">
																</i> Cari
															</button>
														</a>
													</div>
												</div>
											</form>
										</div>
									</center>
								</div>
							</div>
						</div>
					</div>
				</div>
				</div>
