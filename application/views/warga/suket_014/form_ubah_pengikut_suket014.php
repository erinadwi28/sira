<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Form Ubah Pengikut/Anggota Pindah</h1>

    </div>
    <!--Begin Content Profile-->
    <div class="row clearfix">
        <div class="col-xs-12 col-sm-2"></div>
        <div class="col-xs-12 col-sm-8">
            <div class="card">
                <div class="body">
                    <?php
                    foreach ($detail_pengikut as $detail) {

                    ?>
                        <form class="form-horizontal" id="form_tambah_pengikut_suket014" action="<?= base_url('warga/aksi_ubah_pengikut_suket014') ?>" method="POST">
                            <div class="form-group">
                                <div class="form-group" style="margin-top: 15px;">
                                    <div class="form-group">
                                        <div class="form-group row" style="margin-left: 10px;">
                                            <label for="Nama" class="col-sm-3 col-form-label">Nama Lengkap</label>
                                            <div class="col-sm-8">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="masukan nama... " id="nama" name="nama" value="<?= $detail->nama; ?>" required="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-group row" style="margin-left: 10px;">
                                            <label for="Tempat_lahir" class="col-sm-3 col-form-label">Tempat Lahir</label>
                                            <div class="col-sm-8">
                                                <div class="form-line focused">
                                                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="masukan tempat lahir... " value="<?= $detail->tempat_lahir; ?>" required="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-group row" style="margin-left: 10px;">
                                            <label for="Tanggal_lahir" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                            <div class="col-sm-8">
                                                <div class="form-line">
                                                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="masukan tanggal lahir... " value="<?= $detail->tanggal_lahir; ?>" required="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-group" style="margin-top: 20px;">
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
                                    </div>
                                    <div class="form-group">
                                        <div class="form-group row" style="margin-left: 10px;">
                                            <label for="umur" class="col-sm-3 col-form-label">Umur</label>
                                            <div class="col-sm-8">
                                                <div class="form-line focused">
                                                    <input type="text" class="form-control" id="umur" name="umur" placeholder="masukan umur..." value="<?= $detail->umur; ?>" required="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-group" style="margin-top: 20px;">
                                            <div class="form-group row" style="margin-left: 10px;">
                                                <label for="status_perkawinan" class="col-sm-3 col-form-label">Status Perkawinan</label>
                                                <div class="col-sm-8">
                                                    <div class="form-line">
                                                        <select class="form-control " id="status_perkawinan" name="status_perkawinan">
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
                                    </div>
                                    <div class="form-group">
                                        <div class="form-group" style="margin-top: 20px;">
                                            <div class="form-group row" style="margin-left: 10px;">
                                                <label for="pendidikan_terakhir" class="col-sm-3 col-form-label">Pendidikan Terakhir</label>
                                                <div class="col-sm-8">
                                                    <div class="form-line">
                                                        <select class="form-control" id="pendidikan_terakhir" name="pendidikan_terakhir">
                                                            <option value="TAMAT SD / SEDERAJAT" <?= ($detail->pendidikan_terakhir == 'TAMAT SD / SEDERAJAT' ? ' selected' : ''); ?> class="form-user-input">
                                                                TAMAT SD /
                                                                SEDERAJAT</option>
                                                            <option value="SLTP / SEDERAJAT" <?= ($detail->pendidikan_terakhir == 'SLTP / SEDERAJAT' ? ' selected' : ''); ?> class="form-user-input">SLTP /
                                                                SEDERAJAT
                                                            </option>
                                                            <option value="TIDAK / BELUM SEKOLAH" <?= ($detail->pendidikan_terakhir == 'TIDAK / BELUM SEKOLAH' ? ' selected' : ''); ?> class="form-user-input">
                                                                TIDAK / BELUM
                                                                SEKOLAH</option>
                                                            <option value="SLTA / SEDERAJAT" <?= ($detail->pendidikan_terakhir == 'SLTA / SEDERAJAT' ? ' selected' : ''); ?> class="form-user-input">SLTA /
                                                                SEDERAJAT
                                                            </option>
                                                            <option value="BELUM TAMAT SD / SEDERAJAT" <?= ($detail->pendidikan_terakhir == 'BELUM TAMAT SD / SEDERAJAT' ? ' selected' : ''); ?> class="form-user-input">BELUM
                                                                TAMAT SD / SEDERAJAT</option>
                                                            <option value="DIPLOMA IV / STRATA I" <?= ($detail->pendidikan_terakhir == 'DIPLOMA IV / STRATA I' ? ' selected' : ''); ?> class="form-user-input">
                                                                DIPLOMA IV /
                                                                STRATA I</option>
                                                            <option value="AKADEMI / DIPLOMA III / S.MUDA" <?= ($detail->pendidikan_terakhir == 'AKADEMI / DIPLOMA III / S.MUDA' ? ' selected' : ''); ?> class="form-user-input">
                                                                AKADEMI / DIPLOMA III / S.MUDA</option>
                                                            <option value="DIPLOMA I / II" <?= ($detail->pendidikan_terakhir == 'DIPLOMA I / II' ? ' selected' : ''); ?> class="form-user-input">DIPLOMA I
                                                                / II
                                                            </option>
                                                            <option value="STRATA II" <?= ($detail->pendidikan_terakhir == 'STRATA II' ? ' selected' : ''); ?> class="form-user-input">STRATA II
                                                            </option>
                                                            <option value="STRATA III" <?= ($detail->pendidikan_terakhir == 'STRATA III' ? ' selected' : ''); ?> class="form-user-input">STRATA III
                                                            </option>
                                                        </select>
                                                        <i class="fas fa-check-circle"></i>
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
                                                <label for="Nama_ortu" class="col-sm-3 col-form-label">Nama Ortu</label>
                                                <div class="col-sm-8">
                                                    <div class="form-line focused">
                                                        <input type="text" class="form-control" id="nama_ortu" name="nama_ortu" placeholder="masukan nama orang tua... " value="<?= $detail->nama_ortu; ?>" required="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-group" style="margin-top: 15px;">
                                            <div class="form-group row" style="margin-left: 10px;">
                                                <label for="status_hub_kk" class="col-sm-3 col-form-label">Hubungan dgn KK</label>
                                                <div class="col-sm-8">
                                                    <div class="form-line focused">
                                                        <select class="form-control form-user-input" name="status_hub_kk" id="status_hub_kk">
                                                            <option value="Kepala Keluarga" <?= ($detail->status_hub_kk == 'Kepala Keluarga' ? 'selected' : ''); ?> class="form-user-input">Kepala Keluarga</option>
                                                            <option value="Suami" <?= ($detail->status_hub_kk == 'Suami' ? 'selected' : ''); ?> class="form-user-input">Suami</option>
                                                            <option value="Isteri" <?= ($detail->status_hub_kk == 'Isteri' ? 'selected' : ''); ?> class="form-user-input">Isteri</option>
                                                            <option value="Anak" <?= ($detail->status_hub_kk == 'Anak' ? 'selected' : ''); ?> class="form-user-input">Anak</option>
                                                            <option value="Menantu" <?= ($detail->status_hub_kk == 'Menantu' ? 'selected' : ''); ?> class="form-user-input">Menantu</option>
                                                            <option value="Cucu" <?= ($detail->status_hub_kk == 'Cucu' ? 'selected' : ''); ?> class="form-user-input">Cucu</option>
                                                            <option value="Orang Tua" <?= ($detail->status_hub_kk == 'Orang Tua' ? 'selected' : ''); ?> class="form-user-input">Orang Tua
                                                            </option>
                                                            <option value="Mertua" <?= ($detail->status_hub_kk == 'Mertua' ? 'selected' : ''); ?> class="form-user-input">Mertua</option>
                                                            <option value="Famili Lain" <?= ($detail->status_hub_kk == 'Famili Lain' ? 'selected' : ''); ?> class="form-user-input">Famili Lain
                                                            </option>
                                                            <option value="Pembantu" <?= ($detail->status_hub_kk == 'Pembantu' ? 'selected' : ''); ?> class="form-user-input">Pembantu
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" class="form-control" id="id_permohonan_surat" name="id_permohonan_surat" required="" value="<?= $detail->id_permohonan_surat; ?>">
                            <input type="hidden" class="form-control" id="id_pengikut" name="id_pengikut" required="" value="<?= $detail->id_pengikut; ?>">
                </div>
                <div class="card-footer">
                    <div class="float-right">
                        <a href="#">
                            <button id="btn_setuju" class="btn btn-sm btn-success" type="submit">
                                <i class="far fa-save nav-icon"> Simpan
                                </i>
                            </button>
                        </a>
                    </div>
                </div>
                </form>
            <?php } ?>
            </div>
        </div>
    </div>
</div>
<!--End Content Profile-->