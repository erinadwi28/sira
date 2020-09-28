<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Form Ubah Kata Sandi Warga</h1>
        <a href="<?= base_url('admin/form_cari_nik_ubah_kata_sandi_warga') ?>">
            <button id="btn_kembali" class="btn btn-sm btn-warning" type="submit">
                <i class="fa fa-arrow-left">
                </i> Kembali
            </button>
        </a>
    </div>

    <!-- Content Row line 1-->
    <div class="row">
        <div class="col-md-2 mb-4">
            <!-- Foto -->
            <div class="mb-4">
                <?php
                foreach ($detail_warga as $detail) {

                ?>

            </div>
        </div>
        <div class="col-md-8 mb-4">
            <!-- Detail Data -->
            <div class="row">
                <div class="col-md-12 mb-3">
                    <!-- Detail Data -->
                    <div class="card shadow mb-3">
                        <div class="card-body">
                            <label class="label-control" for="nik"><b>Inputkan Kata Sandi Yang Baru</b></label>
                            <form role="form" action="<?= base_url('admin/aksi_ubah_kata_sandi_warga') ?>" method="post" id="formUbah">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <input type="password" placeholder="masukan kata sandi baru" class="form-control form-user-input form-password" name="kata_sandi" id="kata_sandi">
                                            <input type="checkbox" class="form-checkbox" /> lihat
                                            kata sandi
                                            <br />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="">
                                            <button id="btn_simpan" class="btn btn-sm btn-primary" type="submit">
                                                <i class="far fa-save nav-icon">
                                                </i> Simpan
                                            </button>
                                        </a>
                                    </div>
                                </div>
                                <input type="hidden" class="form-control form-user-input " name="id_warga" id="id_warga" value="<?= $detail->id_warga; ?>">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow mb-4">
                <div class="card-body">
                    <table class="table-hover table-responsive">
                        <tbody>
                            <tr>
                                <td><b>NIK</b></td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td><?= $detail->nik; ?></td>
                            </tr>
                            <tr>
                                <td><b>Nama Lengkap</b></td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td><?= $detail->nama; ?></td>
                            </tr>
                            <tr>
                                <td><b>Tempat Lahir</b></td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td><?= $detail->tempat_lahir; ?></td>
                            </tr>
                            <tr>
                                <td><b>Tanggal Lahir</b></td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td><?= $detail->tanggal_lahir; ?></td>
                            </tr>
                            <tr>
                                <td><b>Jenis Kelamin</b></td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td><?= $detail->jenis_kelamin; ?></td>
                            </tr>
                            <tr>
                                <td><b>Golongan Darah</b></td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td><?= $detail->golongan_darah; ?></td>
                            </tr>
                            <tr>
                                <td><b>Agama</b></td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td><?= $detail->agama; ?></td>
                            </tr>
                            <tr>
                                <td><b>Alamat</b></td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td><?= $detail->alamat; ?></td>
                            </tr>
                            <tr>
                                <td><b>RT</b></td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td><?= $detail->rt; ?></td>
                            </tr>
                            <tr>
                                <td><b>Kelurahan</b></td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td><?= $detail->kelurahan; ?></td>
                            </tr>
                            <tr>
                                <td><b>Kecamatan</b></td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td><?= $detail->kecamatan; ?></td>
                            </tr>
                            <tr>
                                <td><b>Status Perkawinan</b></td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td><?= $detail->status_perkawinan; ?></td>
                            </tr>
                            <tr>
                                <td><b>Pekerjaan</b></td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td><?= $detail->pekerjaan; ?></td>
                            </tr>
                            <tr>
                                <td><b>Kewarganegaraan</b></td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td><?= $detail->kewarganegaraan; ?></td>
                            </tr>
                            <tr>
                                <td><b>Nomor Kartu Keluarga</b></td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td><?= $detail->no_kk; ?></td>
                            </tr>
                            <tr>
                                <td><b>Pendidikan Terakhir</b></td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td><?= $detail->pendidikan_terakhir; ?></td>
                            </tr>
                            <tr>
                                <td><b>Status Hubungan Dalam Keluarga</b></td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td><?= $detail->status_hub_kel; ?></td>
                            </tr>
                            <tr>
                                <td><b>Nomor HandPhone</b></td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td><?= $detail->no_hp; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            <?php } ?>
            </div>
        </div>


    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->