	<!-- Begin Page Content -->
	<div class="container-fluid">
	    <!-- Page Heading -->
	    <div class="d-sm-flex align-items-center justify-content-between mb-4">
	        <h1 class="h3 mb-0 text-gray-800">Form Tambah Data Pejabat Berwenang</h1>
	        <a href="<?= base_url('admin/list_data_pejabat_berwenang') ?>">
	            <button id="btn_kembali" class="btn btn-sm btn-warning" type="">
	                <i class="fa fa-arrow-left">
	                </i> Kembali
	            </button>
	        </a>
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
	                    <form role="form" action="<?= base_url('admin/aksi_tambah_pejabat_berwenang') ?>" method="post" id="formTambah" name="formTambah">
	                        <input type="hidden" name="length" value="10">
	                        <div class="form-group-surat">
	                            <div class="form-group row">
	                                <label for="nip" class="col-sm-3 col-form-label">NIP</label>
	                                <div class="col-sm-9">
	                                    <div class="form-line">
	                                        <input type="text" class="form-control" id="nip" name="nip">
	                                        <i class="fas fa-check-circle"></i>
	                                        <i class="fas fa-exclamation-circle"></i>
	                                        <small> Error Message </small>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="form-group-surat">
	                            <div class="form-group row">
	                                <label for="nama" class="col-sm-3 col-form-label">Nama</label>
	                                <div class="col-sm-9">
	                                    <div class="form-line">
	                                        <input type="text" class="form-control" id="nama" name="nama">
	                                        <i class="fas fa-check-circle"></i>
	                                        <i class="fas fa-exclamation-circle"></i>
	                                        <small> Error Message </small>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="form-group-surat">
	                            <div class="form-group row">
	                                <label for="jabatan" class="col-sm-3 col-form-label">Jabatan</label>
	                                <div class="col-sm-9">
	                                    <div class="form-line">
	                                        <textarea class="form-control" id="jabatan" name="jabatan" rows="3"></textarea>
	                                        <i class="fas fa-check-circle"></i>
	                                        <i class="fas fa-exclamation-circle"></i>
	                                        <small> Error Message </small>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="form-group-surat">
	                            <div class="form-group row">
	                                <label for="pangkat_gol" class="col-sm-3 col-form-label">Pangkat Gol</label>
	                                <div class="col-sm-9">
	                                    <div class="form-line">
	                                        <input type="text" class="form-control" id="pangkat_gol" name="pangkat_gol">
	                                        <i class="fas fa-check-circle"></i>
	                                        <i class="fas fa-exclamation-circle"></i>
	                                        <small> Error Message </small>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
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