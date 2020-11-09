<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Form Ubah Permohonan Surat Izin Keramaian</h1>
        <?php
        foreach ($detail_suket as $detail) {

        ?>
            <a href="<?= base_url('warga/detail_suket005/' . $detail->id_surat . '/' . $detail->id_permohonan_surat) ?>">
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

                    <form class="form-horizontal" id="form_suket005" enctype="multipart/form-data" action="<?= base_url('warga/aksi_ubah_suket005') ?>" method="POST">
                        <div class="form-group">
                            <div class="form-group">
                                <div class="form-group" style="margin-top: 15px;">
                                    <div class="form-group row" style="margin-left: 10px;">
                                        <label for="Nama" class="col-sm-3 col-form-label">Nama</label>
                                        <div class="col-sm-8">
                                            <div class="form-line focused">
                                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $detail->nama; ?>" required="">
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
                            <div class="form-group">
                                <div class="form-group" style="margin-top: 15px;">
                                    <div class="form-group row" style="margin-left: 10px;">
                                        <label for="Nama_kegiatan" class="col-sm-3 col-form-label">Nama Kegiatan</label>
                                        <div class="col-sm-8">
                                            <div class="form-line focused">
                                                <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan" placeholder="Contoh : Pernikahan,Pengajian Akbar,dll..." value="<?= $detail->nama_kegiatan ?>" required="">
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
                                    <label for="Hari_kegiatan" class="col-sm-3 col-form-label">Hari</label>
                                    <div class="col-sm-8">
                                        <div class="form-line">
                                            <select class="form-control" id="hari_kegiatan" name="hari_kegiatan">
                                                <option value="Senin" <?= ($detail->hari_kegiatan == 'Senin' ? ' selected' : ''); ?> class="form-user-input">Senin</option>
                                                <option value="Selasa" <?= ($detail->hari_kegiatan == 'Selasa' ? ' selected' : ''); ?> class="form-user-input">Selasa</option>
                                                <option value="Rabu" <?= ($detail->hari_kegiatan == 'Rabu' ? ' selected' : ''); ?> class="form-user-input">Rabu</option>
                                                <option value="Kamis" <?= ($detail->hari_kegiatan == 'Kamis' ? ' selected' : ''); ?> class="form-user-input">Kamis</option>
                                                <option value="Jumat" <?= ($detail->hari_kegiatan == 'Jumat' ? ' selected' : ''); ?> class="form-user-input">Jumat</option>
                                                <option value="Sabtu" <?= ($detail->hari_kegiatan == 'Sabtu' ? ' selected' : ''); ?> class="form-user-input">Sabtu</option>
                                                <option value="Minggu" <?= ($detail->hari_kegiatan == 'Minggu' ? ' selected' : ''); ?> class="form-user-input">Minggu</option>
                                            </select>
                                            <i class=" fas fa-check-circle"></i>
                                            <i class="fas fa-exclamation-circle"></i>
                                            <small>Error massage</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-group row" style="margin-left: 10px;">
                                    <label for="Tanggal_kegiatan" class="col-sm-3 col-form-label">Tanggal
                                        Kegiatan</label>
                                    <div class="col-sm-8">
                                        <div class="form-line focused">
                                            <input type="date" class="form-control" id="tanggal_kegiatan" name="tanggal_kegiatan" placeholder="Isi Tanggal Kegiatan..." value="<?= $detail->tanggal_kegiatan ?>" required="">
                                            <i class=" fas fa-check-circle"></i>
                                            <i class="fas fa-exclamation-circle"></i>
                                            <small>Error massage</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-group row" style="margin-left: 10px;">
                                    <label for="tempat" class="col-sm-3 col-form-label">Tempat Kegiatan</label>
                                    <div class="col-sm-8">
                                        <div class="form-line">
                                            <textarea class="form-control" id="tempat" name="tempat" rows="3" placeholder="Alamat Tempat kegiatan ditulis lengkap..."><?= $detail->tempat ?></textarea>
                                            <i class=" fas fa-check-circle"></i>
                                            <i class="fas fa-exclamation-circle"></i>
                                            <small>Error massage</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-group row" style="margin-left: 10px;">
                                    <label for="jam" class="col-sm-3 col-form-label">Jam Kegiatan</label>
                                    <div class="col-sm-8">
                                        <div class="form-line focused">
                                            <input type="text" class="form-control" id="jam" name="jam" placeholder="Isi Jam Kegiatan..." value="<?= $detail->jam ?>" required="">
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
                        <a href="#">
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
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->