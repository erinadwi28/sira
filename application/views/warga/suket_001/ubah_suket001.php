<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Form Ubah Permohonan Surat Keterangan Usaha</h1>
        <?php
        foreach ($detail_suket as $detail) {

        ?>
            <a href="<?= base_url('warga/detail_suket001/' . $detail->id_surat . '/' . $detail->id_permohonan_surat) ?>">
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

                    <form class="form-horizontal" id="form_suket001" action="<?= base_url('warga/aksi_ubah_suket001') ?>" method="POST">
                        <div class="form-group">
                            <div class="form-group">
                                <div class="form-group" style="margin-top: 15px;">
                                    <div class="form-group row" style="margin-left: 10px;">
                                        <label for="Nama" class="col-sm-3 col-form-label">Nama</label>
                                        <div class="col-sm-8">
                                            <div class="form-line focused">
                                                <input type="text" class="form-control" id="nama" name="nama" required="" value="<?= $detail->nama; ?>">
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
                            <div class="form-group row" style="margin-left: 10px;">
                                <label for="Tempat_lahir" class="col-sm-3 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-8">
                                    <div class="form-line focused">
                                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?= $detail->tempat_lahir; ?>" required="">
                                        <i class=" fas fa-check-circle"></i>
                                        <i class="fas fa-exclamation-circle"></i>
                                        <small>Error massage</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" form-group">
                            <div class="form-group row" style="margin-left: 10px;">
                                <label for="Tanggal_lahir" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-8">
                                    <div class="form-line">
                                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?= $detail->tanggal_lahir; ?>" required="">
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
                                        <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="<?= $detail->pekerjaan; ?>" required="">
                                        <i class=" fas fa-check-circle"></i>
                                        <i class="fas fa-exclamation-circle"></i>
                                        <small>Error massage</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group row" style="margin-left: 10px;">
                                <label for="Alamat" class="col-sm-3 col-form-label">Alamat</label>
                                <div class="col-sm-8">
                                    <div class="form-line">
                                        <textarea class="form-control" id="alamat" name="alamat" rows="3" required="Isikan Alamat"><?= $detail->alamat; ?></textarea>
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
                                    <label for="nama_usaha" class="col-sm-3 col-form-label">Nama Usaha</label>
                                    <div class="col-sm-8">
                                        <div class="form-line focused">
                                            <input type="text" class="form-control" id="nama_usaha" name="nama_usaha" value="<?= $detail->nama_usaha; ?>" required="">
                                            <i class=" fas fa-check-circle"></i>
                                            <i class="fas fa-exclamation-circle"></i>
                                            <small>Error massage</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" class="form-control" id="id_surat" name="id_surat" required="" value="<?= $detail->id_surat ?>">
                        <input type="hidden" class="form-control" id="id_permohonan_surat" name="id_permohonan_surat" required="" value="<?= $detail->id_permohonan_surat; ?>">
                </div>
                <div class="card-footer">
                    <div class="float-right">
                        <a href="">
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
<script type="text/javascript" src="jquery/jquery-1.9.1.js"></script>
<script type="text/javascript" src="jquery.validate.min.js"></script>
<script type="text/javascript">
    $("#form_suket001").validate()
</script>