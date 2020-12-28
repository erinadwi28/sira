	<!-- Begin Page Content -->
	<div class="container-fluid">
		<!-- Page Heading -->

		<div class="d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h3 mb-0 text-gray-800">Form Pilih Tanda Tangan</h1>
			<?php
			foreach ($permohonan as $detail) {
			?>
				<a href="<?= base_url('admin/list_data_pejabat_berwenang') ?>">
					<a href="<?= base_url('admin/detail_data_permohonan/' . $detail->id_permohonan_surat . '/' . $detail->id_nama_surat) ?>">
						<button id="btn_kembali" class="btn btn-sm btn-warning" type="">
							<i class="fa fa-arrow-left">
							</i> Kembali
						</button>
					</a>
				<?php } ?>
		</div>

		<!-- Content Row line 1-->
		<div class="row mb-4">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<!-- Detail Data -->
				<div class="card shadow mb-4">
					<div class="card-body">
						<!-- <table class="table-responsive">
											
										</table> -->
						<form role="form" action="<?= base_url('admin/aksi_tanda_tangan') ?>" method="post" id="formTambah" name="formTambah">
							<input type="hidden" name="length" value="10">
							<div class="form-check">
								<input class="form-check-input" type="radio" name="status_tanda_tangan" id="status_tanda_tangan_kades" value="Kepala Desa">
								<label class="form-check-label" for="status_tanda_tangan_kades">
									<h3>Lurah Mendawai</h3>
								</label>
							</div>
							<?php
							foreach ($kades as $detail) {
							?>
								<div class="form-check ml-3">
									<input class="form-check-input" type="checkbox" name="id_penanda_tangan" id="id_penanda_tangan_kades" value="<?= $detail->id_kades ?>">
									<label class="form-check-label" for="id_penanda_tangan_kades">
										<h5><?= $detail->nama ?></h5>
									</label>
								</div>
							<?php } ?>

							<div class="form-check">
								<input class="form-check-input" type="radio" name="status_tanda_tangan" id="status_tanda_tangan_pejabat" value="Diwakilkan">
								<label class="form-check-label" for="status_tanda_tangan_pejabat">
									<h3>Diwakilkan Pejabat Berwenang</h3>
								</label>
							</div>

							<?php
							foreach ($pejabat as $detail) {
							?>
								<div class="form-check ml-3">
									<input class="form-check-input" type="checkbox" name="id_penanda_tangan" id="status_tanda_tangan_pejabat_berwenang" value="<?= $detail->id_pejabat_berwenang ?>">
									<label class="form-check-label" for="status_tanda_tangan_pejabat_berwenang">
										<h5><?= $detail->nama ?></h5>
									</label>
								</div>
							<?php } ?>

							<?php
							foreach ($permohonan as $detail) {
							?>
								<input type="hidden" class="form-control" id="id_permohonan_surat" name="id_permohonan_surat" value="<?= $detail->id_permohonan_surat ?>">
							<?php } ?>

							<input type="hidden" class="form-control form-user-input" name="status" id="status" value="Selesai">
					</div>

					<div class="card-footer">
						<div class="float-right">
							<a href="">
								<button id="btn_simpan" class="btn btn-sm btn-primary" type="submit">
									<i class="far fa-save nav-icon">
									</i> Simpan
								</button>
							</a>
						</div>
					</div>

				</div>
				</form>
			</div>
		</div>
	</div>
	<!-- /.container-fluid -->
	</div>
	<!-- End of Main Content -->