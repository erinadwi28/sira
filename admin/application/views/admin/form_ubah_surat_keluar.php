<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<?php foreach ($detail_surat_keluar as $detail) {?>
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Ubah Data Surat Keluar</h1>
		<a href="<?= base_url()?>admin/detail_surat_keluar/<?= $detail->id_sk ?>">
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
					<!-- <table class="table-responsive">
                    </table> -->
					<form role="form" action="<?= base_url('admin/aksi_ubah_surat_keluar') ?>" method="post"
						id="formUbah">
						<div class="form-group row">
							<label for="nomor_surat" class="col-sm-3 col-form-label">Nomor Surat</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="nomor_surat" name="nomor_surat"
									value="<?= $detail->nomor_surat; ?>">
							</div>
						</div>
						<div class="form-group row">
							<label for="tanggal" class="col-sm-3 col-form-label">Tanggal</label>
							<div class="col-sm-9">
								<input type="date" class="form-control date" id="tanggal" name="tanggal"
									value="<?= $detail->tanggal; ?>">
							</div>
						</div>
						<div class="form-group row">
							<label for="tujuan" class="col-sm-3 col-form-label">Tujuan</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="tujuan" name="tujuan"
									value="<?= $detail->tujuan; ?>">
							</div>
						</div>
						<div class="form-group row">
							<label for="perihal" class="col-sm-3 col-form-label">Perihal</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="perihal" name="perihal"
									value="<?= $detail->perihal; ?>">
							</div>
						</div>
						<div class="form-group row">
							<label for="isi" class="col-sm-3 col-form-label">Isi Surat</label>
							<div class="col-sm-9">
								<textarea class="form-control" id="isi" name="isi"
									rows="3"><?= $detail->isi; ?></textarea>
							</div>
						</div>
						<br>
						<hr />
						<div class="">
							<div class="float-right">
								<a href="">
									<button id="btn_simpan" class="btn btn-sm btn-primary" type="submit">
										<i class="far fa-save nav-icon">
										</i> Simpan
									</button>
								</a>
							</div>
						</div>
						<input type="hidden" class="form-control form-user-input " name="id_sk" id="id_sk"
							value="<?= $detail->id_sk; ?>">
					</form>
					<?php } ?>
				</div>
			</div>
		</div>
		<div class="col-md-2"></div>
	</div>
	<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
