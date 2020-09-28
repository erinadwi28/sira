<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Form Ubah Kata Sandi Saya</h1>
		<a href="<?= base_url('kades') ?>">
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
		<div class="col-md-2 mb-4">
			<!-- Foto -->
			<div class="mb-4">

			</div>
		</div>
		<div class="col-md-8 mb-4">
			<!-- Detail Data -->
			<div class="row">
				<div class="col-md-12 mb-3">
					<!-- Detail Data -->
					<div class="card shadow mb-3">
						<div class="card-body">
							<label class="label-control" for="nik"><b>Masukkan Kata Sandi yang baru</b></label>
							<form role="form" action="<?= base_url() ?>kades/aksi_ubah_kata_sandi_profil_saya/"
								method="post" id="formUbah">
								<div class="row">
									<div class="col-md-7">
										<div class="form-group">
											<input type="password" placeholder="masukkan disini..."
												class="form-control form-user-input form-password" name="kata_sandi"
												id="kata_sandi">
											<input type="checkbox" class="form-checkbox" /> lihat
											kata sandi
											<br />

											<input type="hidden" class="form-control form-user-input " name="id_kades"
												id="id_kades" value="<?= $kades['id_kades'] ?>">
										</div>
									</div>
									<div class="col-md-3">
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
			</div>
		</div>
	</div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
