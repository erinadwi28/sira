<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Form Ubah Permohonan Surat Keterangan Kematian</h1>
        <?php
        foreach ($detail_suket as $detail) {

        ?>
            <a href="<?= base_url('warga/detail_suket009/' . $detail->id_surat . '/' . $detail->id_permohonan_surat) ?>">
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

                    <form class="form-horizontal" id="form_ubah_suket009" action="<?= base_url('warga/aksi_ubah_suket009') ?>" method="POST">
                        <div class="form-group">
                            <div class="form-group" style="margin-top: 15px;">
                                <div class="form-group row" style="margin-left: 10px;">
                                    <label for="Nama_alm" class="col-sm-3 col-form-label">Nama Alm/Almh</label>
                                    <div class="col-sm-8">
                                        <div class="form-line focused">
                                            <input type="text" class="form-control" id="nama_alm" name="nama_alm" placeholder="Isi nama alm/almh..." value="<?= $detail->nama_alm; ?>" >
                                            <i class=" fas fa-check-circle"></i>
                                            <i class="fas fa-exclamation-circle"></i>
                                            <small>Error massage</small>
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
                            <div class="form-group">
                                <div class="form-group row" style="margin-left: 10px;">
                                    <label for="Tempat_kematian" class="col-sm-3 col-form-label">Tempat Kematian</label>
                                    <div class="col-sm-8">
                                        <div class="form-line focused">
                                            <textarea class="form-control" id="tempat_meninggal" name="tempat_meninggal" rows="3" placeholder="Isikan Tempat kematian..."><?= $detail->tempat_meninggal; ?></textarea>
                                            <i class=" fas fa-check-circle"></i>
                                            <i class="fas fa-exclamation-circle"></i>
                                            <small>Error massage</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-group row" style="margin-left: 10px;">
                                    <label for="Umur" class="col-sm-3 col-form-label">Umur</label>
                                    <div class="col-sm-8">
                                        <div class="form-line focused">
                                            <input type="text" class="form-control" id="umur" name="umur" placeholder="Isikan umur alm/almh..." value="<?= $detail->umur; ?>" >
                                            <i class=" fas fa-check-circle"></i>
                                            <i class="fas fa-exclamation-circle"></i>
                                            <small>Error massage</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-group row" style="margin-left: 10px;">
                                    <label for="Tempat_kediaman" class="col-sm-3 col-form-label">Tempat Kediaman</label>
                                    <div class="col-sm-8">
                                        <div class="form-line focused">
                                            <textarea class="form-control" id="tempat_kediaman" name="tempat_kediaman" rows="3" placeholder="Isikan alamat alm/amlh..."><?= $detail->tempat_kediaman; ?></textarea>
                                            <i class=" fas fa-check-circle"></i>
                                            <i class="fas fa-exclamation-circle"></i>
                                            <small>Error massage</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-group row" style="margin-left: 10px;">
                                    <label for="hari_meninggal" class="col-sm-3 col-form-label">Hari Meninggal</label>
                                    <div class="col-sm-8">
                                        <div class="form-line">
                                            <select class="form-control" id="hari_meninggal" name="hari_meninggal">
                                                <option value="Senin" <?= ($detail->hari_meninggal == 'Senin' ? ' selected' : ''); ?> class="form-user-input">Senin</option>
                                                <option value="Selasa" <?= ($detail->hari_meninggal == 'Selasa' ? ' selected' : ''); ?> class="form-user-input">Selasa</option>
                                                <option value="Rabu" <?= ($detail->hari_meninggal == 'Rabu' ? ' selected' : ''); ?> class="form-user-input">Rabu</option>
                                                <option value="Kamis" <?= ($detail->hari_meninggal == 'Kamis' ? ' selected' : ''); ?> class="form-user-input">Kamis</option>
                                                <option value="Jumat" <?= ($detail->hari_meninggal == 'Jumat' ? ' selected' : ''); ?> class="form-user-input">Jumat</option>
                                                <option value="Sabtu" <?= ($detail->hari_meninggal == 'Sabtu' ? ' selected' : ''); ?> class="form-user-input">Sabtu</option>
                                                <option value="Minggu" <?= ($detail->hari_meninggal == 'Minggu' ? ' selected' : ''); ?> class="form-user-input">Minggu</option>
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
                                    <label for="Tanggal_Meninggal" class="col-sm-3 col-form-label">Tanggal Meninggal</label>
                                    <div class="col-sm-8">
                                        <div class="form-line">
                                            <input type="date" class="form-control" id="tanggal_meninggal" name="tanggal_meninggal" value="<?= $detail->tanggal_meninggal; ?>" >
                                            <i class=" fas fa-check-circle"></i>
                                            <i class="fas fa-exclamation-circle"></i>
                                            <small>Error massage</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-group row" style="margin-left: 10px;">
                                    <label for="Alasan_meninggal" class="col-sm-3 col-form-label">Alasan Meninggal</label>
                                    <div class="col-sm-8">
                                        <div class="form-line">
                                            <textarea class="form-control" id="alasan_meninggal" name="alasan_meninggal" rows="3" placeholder="Contoh : sakit,dll..."><?= $detail->alasan_meninggal; ?></textarea>
                                            <i class=" fas fa-check-circle"></i>
                                            <i class="fas fa-exclamation-circle"></i>
                                            <small>Error massage</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" class="form-control" id="id_surat" name="id_surat"  value="<?= $detail->id_surat ?>">
                        <input type="hidden" class="form-control" id="id_permohonan_surat" name="id_permohonan_surat"  value="<?= $detail->id_permohonan_surat; ?>">
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
                    </form>
                <?php } ?>
                </div>
                </form>
            </div>
        </div>
        <!--End Content Profile-->
    </div>
    <!-- End of Main Content -->
