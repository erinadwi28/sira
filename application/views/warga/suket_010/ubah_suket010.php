<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Form Ubah Pengajuan Surat Keterangan Kelahiran</h1>
        <?php
        foreach ($detail_suket as $detail) {

        ?>
            <a href="<?= base_url('warga/detail_suket010/' . $detail->id_surat . '/' . $detail->id_permohonan_surat) ?>">
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
            <div class="card">
                <div class="body">

                    <form class="form-horizontal" id="form_suket010" action="<?= base_url('warga/aksi_ubah_suket010') ?>" method="POST">
                        <div class="form-group">
                            <div class="form-group" style="margin-top: 15px;">
                                <div class="form-group row" style="margin-left: 10px;">
                                    <label for="Nama_anak" class="col-sm-3 col-form-label">Nama Anak</label>
                                    <div class="col-sm-8">
                                        <div class="form-line focused">
                                            <input type="text" class="form-control" id="nama_anak" name="nama_anak" placeholder="Isikan nama anak..." value="<?= $detail->nama_anak; ?>" required="">
                                            <i class=" fas fa-check-circle"></i>
                                            <i class="fas fa-exclamation-circle"></i>
                                            <small>Error massage</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row" style="margin-left: 10px;">
                                <label for="Hari_lahir" class="col-sm-3 col-form-label">Hari Lahir</label>
                                <div class="col-sm-8">
                                    <div class="form-line">
                                        <select class="form-control" id="hari_lahir" name="hari_lahir">
                                            <option value="Senin" <?= ($detail->hari_lahir == 'Senin' ? ' selected' : ''); ?> class="form-user-input">Senin</option>
                                            <option value="Selasa" <?= ($detail->hari_lahir == 'Selasa' ? ' selected' : ''); ?> class="form-user-input">Selasa</option>
                                            <option value="Rabu" <?= ($detail->hari_lahir == 'Rabu' ? ' selected' : ''); ?> class="form-user-input">Rabu</option>
                                            <option value="Kamis" <?= ($detail->hari_lahir == 'Kamis' ? ' selected' : ''); ?> class="form-user-input">Kamis</option>
                                            <option value="Jumat" <?= ($detail->hari_lahir == 'Jumat' ? ' selected' : ''); ?> class="form-user-input">Jumat</option>
                                            <option value="Sabtu" <?= ($detail->hari_lahir == 'Sabtu' ? ' selected' : ''); ?> class="form-user-input">Sabtu</option>
                                            <option value="Minggu" <?= ($detail->hari_lahir == 'Minggu' ? ' selected' : ''); ?> class="form-user-input">Minggu</option>
                                        </select>
                                        <i class=" fas fa-check-circle"></i>
                                        <i class="fas fa-exclamation-circle"></i>
                                        <small>Error massage</small>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row" style="margin-left: 10px;">
                                <label for="Tempat_lahir" class="col-sm-3 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-8">
                                    <div class="form-line focused">
                                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Isikan tempat lahir anak..." value="<?= $detail->tempat_lahir; ?>" required="">
                                        <i class=" fas fa-check-circle"></i>
                                        <i class="fas fa-exclamation-circle"></i>
                                        <small>Error massage</small>
                                    </div>
                                </div>
                            </div>
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
                </div>
                <div class="form-group">
                    <div class="form-group" style="margin-top: 20px;">
                        <div class="form-group row" style="margin-left: 10px;">
                            <label for="Jam_lahir" class="col-sm-3 col-form-label">Jam Lahir</label>
                            <div class="col-sm-8">
                                <div class="form-line focused">
                                    <input type="text" class="form-control" id="jam_lahir" name="jam_lahir" placeholder="Isikan jam lahir anak..." value="<?= $detail->jam_lahir; ?>" required="">
                                    <i class=" fas fa-check-circle"></i>
                                    <i class="fas fa-exclamation-circle"></i>
                                    <small>Error massage</small>
                                </div>
                            </div>
                        </div>
                    </div>
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

                    <div class="form-group" style="margin-top: 15px;">
                        <div class="form-group row" style="margin-left: 10px;">
                            <label for="Nama_ibu" class="col-sm-3 col-form-label">Nama Ibu</label>
                            <div class="col-sm-8">
                                <div class="form-line focused">
                                    <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" placeholder="Isikan nama ibu..." value="<?= $detail->nama_ibu; ?>" required="">
                                    <i class=" fas fa-check-circle"></i>
                                    <i class="fas fa-exclamation-circle"></i>
                                    <small>Error massage</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row" style="margin-left: 10px;">
                        <label for="Alamat" class="col-sm-3 col-form-label">Alamat</label>
                        <div class="col-sm-8">
                            <div class="form-line">
                                <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Isikan alamat..."><?= $detail->alamat; ?></textarea>
                                <i class=" fas fa-check-circle"></i>
                                <i class="fas fa-exclamation-circle"></i>
                                <small>Error massage</small>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="margin-top: 15px;">
                        <div class="form-group row" style="margin-left: 10px;">
                            <label for="Nama_ayah" class="col-sm-3 col-form-label">Nama Ayah</label>
                            <div class="col-sm-8">
                                <div class="form-line focused">
                                    <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" placeholder="Isikan nama ayah..." value="<?= $detail->nama_ayah; ?>" required="">
                                    <i class=" fas fa-check-circle"></i>
                                    <i class="fas fa-exclamation-circle"></i>
                                    <small>Error massage</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="margin-top: 15px;">
                        <div class="form-group row" style="margin-left: 10px;">
                            <label for="Nama_pemohon" class="col-sm-3 col-form-label">Nama Pemohon</label>
                            <div class="col-sm-8">
                                <div class="form-line focused">
                                    <input type="text" class="form-control" id="nama_pemohon" name="nama_pemohon" placeholder="Nama Pemohon" value="<?= $detail->nama_pemohon; ?>" required="">
                                    <i class=" fas fa-check-circle"></i>
                                    <i class="fas fa-exclamation-circle"></i>
                                    <small>Error massage</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="margin-top: 15px;">
                        <div class="form-group row" style="margin-left: 10px;">
                            <label for="Hubungan_dengan_bayi" class="col-sm-3 col-form-label">Hubungan dgn Bayi</label>
                            <div class="col-sm-8">
                                <div class="form-line focused">
                                    <input type="text" class="form-control" id="hubungan_dengan_bayi" name="hubungan_dengan_bayi" placeholder="Isikan hubungan pemohon dengan bayi..." value="<?= $detail->hubungan_dengan_bayi; ?>" required="">
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
            </form>
        </div>
    </div>
    <!--End Content Profile-->
</div>
</div>
<!--End Content Profile-->