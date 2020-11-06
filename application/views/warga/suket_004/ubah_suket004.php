<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Form Ubah Permohonan Surat Keterangan Beda Nama</h1>
        <?php
        foreach ($detail_suket as $detail) {

        ?>
            <a href="<?= base_url('warga/detail_suket004/' . $detail->id_surat . '/' . $detail->id_permohonan_surat) ?>">
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

                    <form class="form-horizontal" id="form_suket004" action="<?= base_url('warga/aksi_ubah_suket004') ?>" method="POST">
                        <div class="form-group">
                            <div class="form-group" style="margin-top: 15px;">
                                <div class="form-group row" style="margin-left: 10px;">
                                    <label for="Nama_benar" class="col-sm-3 col-form-label">Nama benar</label>
                                    <div class="col-sm-8">
                                        <div class="form-line focused">
                                            <input type="text" class="form-control" id="nama_benar" name="nama_benar" placeholder="Isi nama benar..." value="<?= $detail->nama_benar; ?>" required="">
                                            <i class=" fas fa-check-circle"></i>
                                            <i class="fas fa-exclamation-circle"></i>
                                            <small>Error massage</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group" style="margin-top: 15px;">
                                <div class="form-group row" style="margin-left: 10px;">
                                    <label for="Nama_dokumen_benar" class="col-sm-3 col-form-label">Dokumen Benar</label>
                                    <div class="col-sm-8">
                                        <div class="form-line">
                                            <input type="text" class="form-control" id="nama_dokumen_benar" placeholder="KTP, KK, Ijazah dll..." name="nama_dokumen_benar" value="<?= $detail->nama_dokumen_benar; ?>" required="">
                                            <i class=" fas fa-check-circle"></i>
                                            <i class="fas fa-exclamation-circle"></i>
                                            <small>Error massage</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group" style="margin-top: 15px;">
                                <div class="form-group row" style="margin-left: 10px;">
                                    <label for="Nama_salah" class="col-sm-3 col-form-label">Nama Salah</label>
                                    <div class="col-sm-8">
                                        <div class="form-line focused">
                                            <input type="text" class="form-control" id="nama_salah" name="nama_salah" placeholder="Isi nama salah..." value="<?= $detail->nama_salah; ?>" required="">
                                            <i class=" fas fa-check-circle"></i>
                                            <i class="fas fa-exclamation-circle"></i>
                                            <small>Error massage</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group" style="margin-top: 15px;">
                                <div class="form-group row" style="margin-left: 10px;">
                                    <label for="nama_dokumen_salah" class="col-sm-3 col-form-label">Dokumen Salah</label>
                                    <div class="col-sm-8">
                                        <div class="form-line">
                                            <input type="text" class="form-control" id="nama_dokumen_salah" placeholder="KTP, KK, Ijazah dll..." name="nama_dokumen_salah" value="<?= $detail->nama_dokumen_salah; ?>" required="">
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
                        <div class="form-group">
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
                                        <textarea class="form-control" id="alamat" name="alamat" rows="3"><?= $detail->alamat; ?></textarea>
                                        <i class=" fas fa-check-circle"></i>
                                        <i class="fas fa-exclamation-circle"></i>
                                        <small>Error massage</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" class="form-control" id="id_surat" name="id_surat" required="" value="<?= $detail->id_surat ?>">
                        <input type="hidden" class="form-control" id="id_permohonan_surat" name="id_permohonan_surat" required="" value="<?= $detail->id_permohonan_surat; ?>">
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
            <!--End Content Profile-->
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->