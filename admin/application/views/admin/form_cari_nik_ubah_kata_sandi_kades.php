<div class="row">
    <div class="col-md-2">
    </div>
    <div class="col-md-8">
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="preview">
                    <center>
                        <h1 class="h3 mb-30 text-gray-800">Form Cari NIK Ubah Password</h1>
                    </center>
                </div>
                <div class="preview">
                    <center>
                        <div class="col-md-12 mb-3 ">
                            <br>
                            <em class="float-center small text-danger">*Pastikan NIK yang anda masukan benar</em>

                            <form role="form" action="<?= base_url('admin/aksi_cari_nik_ubah_kata_sandi_kades') ?>" method="post" id="formUbah">
                                <div class="form-row align-items-center">
                                    <div class="col-md-4"></div>
                                    <div class="col-auto col-md-4 ">
                                        <input type="text" class="form-control mb-2" name="nik" id="nik" placeholder="Masukan NIK">
                                    </div>
                                    <div class="col-auto ">
                                        <a href="">
                                            <button id="btn_simpan" class="btn btn-sm btn-primary" type="submit">
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