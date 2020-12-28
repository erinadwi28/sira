<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Surat Keterangan Kelahiran</title>
    <!--Tittle Icon-->
    <link rel="shortcut icon" href="<?= base_url('assets/dashboard/') ?>img/tittle.png" type="image/png" />

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/dashboard/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

    <!-- Custom styles for this template-->
    <!-- <link href="<?= base_url('assets/dashboard/') ?>css/sb-admin-2.min.css" rel="stylesheet" /> -->
    <!-- <link href="<?= base_url('assets/dashboard/') ?>css/preview.css" rel="stylesheet" /> -->

    <link href="<?= base_url('assets/dashboard/') ?>css/validation.css" rel="stylesheet" />
    <link href="<?= base_url('assets/dashboard/') ?>css/validation_warga.css" rel="stylesheet" />

    <link href="<?= base_url('assets/dashboard/') ?>css/lightbox.min.css" rel="stylesheet" />

    <!-- Custom styles for this page -->
    <link href="<?= base_url('assets/dashboard/') ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" />

    <style>
        /* surat kelurahan */
        .kopsurat1 p {
            font-weight: bold;
            line-height: 0.5em;
        }

        .card-body {
            padding: 2rem;
            color: black;
        }

        .badan_surat1 {
            opacity: 0.8;
        }

        .badan_surat1 {
            font-family: 'Book Antiqua';
        }

        .no_surat1 {
            font-weight: bold;
            font-size: 11pt;
        }

        .paragraf1 {
            /* text-indent: 2.8125em; */
            text-align: justify;
        }

        .isi_surat1 {
            margin-top: -1em;
            margin-left: 0.0375em;
            font-size: 9pt;
            line-height: 1.2em;
        }

        .identitas1 {
            margin-top: -1em;
            margin-bottom: -1em;
            margin-left: 2.8125em;
            /* margin-bottom: 0.3125em; */
        }

        .h4_bawah {
            margin-top: -2px;
        }

        h4 {
            margin-bottom: -2px;
        }

        .img_ttd1 {
            width: 130px;
        }

        .ttd_kades1 {
            display: block;
            position: absolute;
            float: left;
            margin-top: 40px;
            margin-right: -400px;
        }

        .img-fluid1 {
            max-width: 100%;
            height: auto;
        }

        .container-fluid1 {
            width: 100%;
            padding-right: 0.75rem;
            padding-left: 0.75rem;
            margin-right: auto;
            margin-left: auto;
        }

        .bawah1 {
            display: block;
            position: absolute;
            float: right;
            margin-right: 160px;
        }

        .kades1 {
            display: block;
            position: absolute;
            float: left;
            margin-top: 175px;
            margin-right: -770px;
        }

        /* surat kecamatan */
        .kopsurat p {
            font-weight: bold;
            line-height: 1em;
        }

        .card-body {
            padding: 2rem;
            color: black;
        }

        .badan_surat {
            opacity: 0.8;
        }

        .badan_surat1 {
            opacity: 0.8;
        }

        .badan_surat {
            font-family: 'Book Antiqua';
        }

        .no_surat {
            font-weight: bold;
            font-size: 12pt;
        }

        .no_surat1 {
            font-weight: bold;
            font-size: 11pt;
        }

        .paragraf {
            /* text-indent: 2.8125em; */
            text-align: justify;
        }

        .isi_surat {
            margin-left: 0.0375em;
            font-size: 10pt;
            line-height: 1.2em;
            margin-top: -1em;
        }

        .identitas {
            margin-left: 2.8125em;
            margin-bottom: 0.3125em;
        }

        .img_ttd {
            width: 130px;
        }

        .kec {
            margin-left: 400px;
        }

        .ttd_kades {
            display: block;
            position: absolute;
            float: right;
        }

        .img-fluid {
            max-width: 100%;
            height: auto;
        }

        .container-fluid {
            width: 100%;
            padding-right: 0.75rem;
            padding-left: 0.75rem;
            margin-right: auto;
            margin-left: auto;
        }

        .bawah {
            display: block;
            position: absolute;
            float: right;
        }

        .kades {
            display: block;
            position: absolute;
            float: left;
            margin-top: 40px;
        }

        /* css */

        .row {
            display: flex;
            flex-wrap: wrap;
            margin-right: -0.75rem;
            margin-left: -0.75rem;
        }

        .col-1,
        .col-2,
        .col-3,
        .col-4,
        .col-5,
        .col-6,
        .col-7,
        .col-8,
        .col-9,
        .col-10,
        .col-11,
        .col-12,
        .col,
        .col-auto,
        .col-sm-1,
        .col-sm-2,
        .col-sm-3,
        .col-sm-4,
        .col-sm-5,
        .col-sm-6,
        .col-sm-7,
        .col-sm-8,
        .col-sm-9,
        .col-sm-10,
        .col-sm-11,
        .col-sm-12,
        .col-sm,
        .col-sm-auto,
        .col-md-1,
        .col-md-2,
        .col-md-0,
        .col-md-3,
        .col-md-4,
        .col-md-5,
        .col-md-6,
        .col-md-7,
        .col-md-8,
        .col-md-9,
        .col-md-10,
        .col-md-11,
        .col-md-12,
        .col-md,
        .col-md-auto,
        .col-lg-1,
        .col-lg-2,
        .col-lg-3,
        .col-lg-4,
        .col-lg-5,
        .col-lg-6,
        .col-lg-7,
        .col-lg-8,
        .col-lg-9,
        .col-lg-10,
        .col-lg-11,
        .col-lg-12,
        .col-lg,
        .col-lg-auto,
        .col-xl-1,
        .col-xl-2,
        .col-xl-3,
        .col-xl-4,
        .col-xl-5,
        .col-xl-6,
        .col-xl-7,
        .col-xl-8,
        .col-xl-9,
        .col-xl-10,
        .col-xl-11,
        .col-xl-12,
        .col-xl,
        .col-xl-auto {
            position: relative;
            width: 100%;
            padding-right: 0.75rem;
            padding-left: 0.75rem;
        }

        .col-md-12 {
            flex: 0 0 100%;
            max-width: 100%;
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid #e3e6f0;
            border-radius: 0.35rem;
        }

        .shadow {
            box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15) !important;
        }

        .mb-4,
        .my-4 {
            margin-bottom: 1.5rem !important;
        }

        .col-md-5 {
            flex: 0 0 41.66667%;
            max-width: 41.66667%;
        }

        .card-body {
            flex: 1 1 auto;
            padding: 1.25rem;
        }

        .col-md-6 {
            flex: 0 0 50%;
            max-width: 50%;
        }

        .col-md-7 {
            flex: 0 0 58.33333%;
            max-width: 58.33333%;
        }

        .mb-3,
        .my-3 {
            margin-bottom: 1rem !important;
        }
    </style>

</head>

<body id="page-top">
    <!-- Begin Page Content -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow mb-4">
                    <div class="col-md-5">
                        <center>
                            <?php
                            foreach ($detail_suket as $w) {
                            ?>
                                <?php
                                if ($w->no_bulan == 1) {
                                    $bulan = 'I';
                                } elseif ($w->no_bulan == 2) {
                                    $bulan = 'II';
                                } elseif ($w->no_bulan == 3) {
                                    $bulan = 'III';
                                } elseif ($w->no_bulan == 4) {
                                    $bulan = 'IV';
                                } elseif ($w->no_bulan == 5) {
                                    $bulan = 'V';
                                } elseif ($w->no_bulan == 6) {
                                    $bulan = 'VI';
                                } elseif ($w->no_bulan == 7) {
                                    $bulan = 'VII';
                                } elseif ($w->no_bulan == 8) {
                                    $bulan = 'VIII';
                                } elseif ($w->no_bulan == 9) {
                                    $bulan = 'IX';
                                } elseif ($w->no_bulan == 10) {
                                    $bulan = 'X';
                                } elseif ($w->no_bulan == 11) {
                                    $bulan = 'XI';
                                } elseif ($w->no_bulan == 12) {
                                    $bulan = 'XII';
                                } else {
                                    $bulan = '';
                                } ?>
                                <div class="badan_surat1" style="margin-left: 70px;">
                                    <div class="no_surat1">
                                        <center>
                                            <h6>UNTUK ARSIP KELURAHAN</h6>
                                            <p><u>SURAT KELAHIRAN</u><br>
                                                Nomor : <?= $w->no_tupoksi; ?> / <?= $w->no_registrasi; ?> /
                                                <?= $w->no_kelurahan; ?> / <?= $bulan; ?> / <?= $w->no_tahun; ?></p>
                                        </center>
                                    </div>
                                    <div class="isi_surat1 paragraf1">
                                        <p> Yang bertanda tangan dibawah ini, menerangkan bahwa pada :</p>
                                    </div>
                                    <div class="isi_surat1 identitas1">
                                        <table class="table-responsive">
                                            <tbody>
                                                <tr>
                                                    <td><b>Hari</b></td>
                                                    <td> </td>
                                                    <td> </td>
                                                    <td> </td>
                                                    <td>:<?= $w->hari_lahir; ?></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Tanggal</b></td>
                                                    <td> </td>
                                                    <td> </td>
                                                    <td></td>
                                                    <td>:<?= format_indo(date($w->tanggal_lahir)); ?></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Di</b></td>
                                                    <td> </td>
                                                    <td> </td>
                                                    <td> </td>
                                                    <td>:<?= $w->tempat_lahir; ?></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Jam</b></td>
                                                    <td> </td>
                                                    <td> </td>
                                                    <td> </td>
                                                    <td>:<?= $w->jam_lahir; ?> WITA</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="isi_surat1 paragraf1">
                                        <br>
                                        <p>telah lahir seorang anak <b><?= $w->jenis_kelamin; ?></b> bernama :
                                            <br>
                                            <center>
                                                <b> <?= $w->nama_anak; ?></b>
                                            </center>
                                        </p>
                                    </div>
                                    <div class="isi_surat1 identitas1">
                                        <table class="table-responsive">
                                            <tbody>
                                                <tr>
                                                    <td><b>Nama Ibu</b></td>
                                                    <td> </td>
                                                    <td> </td>
                                                    <td> </td>
                                                    <td>:<?= $w->nama_ibu; ?></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Alamat</b></td>
                                                    <td> </td>
                                                    <td> </td>
                                                    <td> </td>
                                                    <td>:<?= $w->alamat_ibu; ?></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Istri dari</b></td>
                                                    <td> </td>
                                                    <td> </td>
                                                    <td></td>
                                                    <td>:<?= $w->nama_ayah; ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <br>
                                    <div class="isi_surat1 paragraf1">
                                        <p>
                                            Surat keterangan ini dibuat atas dasar yang sebenarnya
                                        </p>

                                    </div>
                                    <div class="isi_surat1 identitas1">
                                        <table class="table-responsive">
                                            <tbody>
                                                <tr>
                                                    <td><b>Nama yang melapor</b></td>
                                                    <td> </td>
                                                    <td> </td>
                                                    <td></td>
                                                    <td>:<?= $w->nama_pemohon; ?></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Hubungan dengan bayi</b></td>
                                                    <td> </td>
                                                    <td> </td>
                                                    <td></td>
                                                    <td>:<?= $w->hubungan_dengan_bayi; ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                                <br>
                        </center>
                    <?php } ?>
                    <div class="row bawah">
                        <div class="col-md-6">
                        </div>
                        <div class="col-md-6">
                            <div class="badan_surat1 isi_surat1" style="margin-top: 10px;">
                                <?php
                                foreach ($detail_permohonan as $d) {
                                ?>
                                    <center>

                                        Pangkalan Bun, <?= format_indo(date($d->tgl_persetujuan_admin)); ?><br>
                                    <?php } ?>
                                    <?php
                                    foreach ($detail_suket as $w) {
                                        if ($w->status_tanda_tangan == "Kepala Desa") {
                                            echo "LURAH MENDAWAI";
                                        } elseif ($w->status_tanda_tangan == "Diwakilkan") {
                                            echo "An. LURAH MENDAWAI";
                                            foreach ($data_kades as $k) { ?>
                                                <div class="badan_surat isi_surat">
                                                    <center>
                                                        <b><?= $k->jabatan; ?></b>
                                                    </center>
                                                </div> <?php
                                                    }
                                                }
                                            } ?>

                                    </center>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 ">
                        </div>
                        <div class="col-md-6">
                            <?php
                            foreach ($data_kades as $k) {
                                foreach ($detail_suket as $w) {
                                    if ($w->status_tanda_tangan == "Kepala Desa") { ?>
                                        <div class="badan_surat1 isi_surat1" style="margin-top: 40px; margin-right: -480px;">
                                            <center><img class="img-fluid1 img_ttd1" width="50%" alt="ttd_lurah" src="<?= base_url(); ?>/assets/uploads/kades/<?= $k->foto_ttd_kades; ?>"></center>
                                        </div>
                                    <?php } elseif ($w->status_tanda_tangan == "Diwakilkan") { ?>
                                        <div class="badan_surat1 isi_surat1" style="margin-top: 40px; margin-right: -480px;">
                                            <center><img class="img-fluid1 img_ttd1" width="50%" alt="ttd_lurah" src="<?= base_url(); ?>/assets/uploads/pejabat_berwenang/<?= $k->ttd_pejabat; ?>"></center>
                                        </div>
                                <?php }
                                }
                                ?>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 85px; margin-right: -970px;">
                        <div class="col-md-6">
                        </div>
                        <div class="col-md-6">
                            <div class="badan_surat1 isi_surat1">
                                <center>
                                    <u><b><?= $k->nama; ?></b></u> <br>
                                    NIP. <?= $k->nip; ?>
                                </center>
                            <?php } ?>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="kec">
                        <center>
                            <div class="badan_surat" style="margin-left: 70px;">
                                <div class="no_surat ">
                                    <h6 style="float: right;">ARSIP KECAMATAN</h6>
                                    <center>
                                        <p><u>SURAT KELAHIRAN</u><br>
                                            Nomor : <?= $w->no_tupoksi; ?> / <?= $w->no_registrasi; ?> /
                                            <?= $w->no_kelurahan; ?> / <?= $bulan; ?> / <?= $w->no_tahun; ?></p>
                                    </center>
                                </div>
                                <div class="isi_surat identitas" style="margin-top: -35px;">
                                    <table class="table-responsive">
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <h4 style="margin-left: -210px">
                                                        <center>
                                                            BAYI
                                                        </center>
                                                    </h4>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>1.<b> Nama Lengkap</b></td>
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td>:<?= $w->nama_anak; ?> </td>

                                            </tr>
                                            <tr>
                                                <td>2.<b> Jenis Kelamin</b> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td></td>
                                                <td>:<?= $w->jenis_kelamin; ?> </td>
                                            </tr>
                                            <tr>
                                                <td>3.<b> Dilahirkan</b></td>
                                                <td> </td>
                                                <td> </td>
                                                <td></td>
                                                <td>:<?= $w->tempat_lahir; ?>,
                                                    <?= format_indo(date($w->tanggal_lahir)); ?></td>

                                            </tr>
                                            <tr>
                                                <td>4.<b> Kelahiran</b></td>
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td>:<?= $w->kelahiran; ?></td>

                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><b> Jika kembar, anak ini lahir yang ke
                                                        <?= $w->kembar_ke; ?></b>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td>5.<b> Tempat Bersalin</b></td>
                                                <td> </td>
                                                <td> </td>
                                                <td></td>
                                                <td>:<?= $w->tempat_persalinan; ?></td>
                                            </tr>
                                            <tr>
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td> &nbsp;<?= $w->alamat_persalinan; ?></td>
                                            </tr>
                                            <tr>
                                                <td>6.<b> Penolong Kelahiran</b></td>
                                                <td> </td>
                                                <td> </td>
                                                <td></td>
                                                <td>:<?= $w->penolong_persalinan; ?></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <h4 style="margin-left: -210px" class="h4_bawah">
                                                        <center>
                                                            IBU
                                                        </center>
                                                    </h4>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>7.<b> Nama Lengkap</b></td>
                                                <td> </td>
                                                <td> </td>
                                                <td></td>
                                                <td>:<?= $w->nama_ibu; ?></td>
                                            </tr>
                                            <tr>
                                                <td>8.<b> Alamat</b></td>
                                                <td> </td>
                                                <td> </td>
                                                <td></td>
                                                <td>:<?= $w->alamat_ibu; ?></td>
                                            </tr>
                                            <tr>
                                                <td>9.<b> Dilahirkan</b></td>
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td>:<?= format_indo(date($w->tanggal_lahir_ibu)); ?>
                                                    <b>Umur</b> : <?= $w->umur_ibu; ?> th</td>
                                            </tr>
                                            <tr>
                                                <td>10.<b> Kewarganegaraan</b></td>
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td>:<?= $w->kewarganegaraan_ibu; ?></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <h4 style="margin-left: -210px" class="h4_bawah">
                                                        <center>
                                                            AYAH
                                                        </center>
                                                    </h4>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>11.<b> Nama Lengkap</b></td>
                                                <td> </td>
                                                <td> </td>
                                                <td></td>
                                                <td>:<?= $w->nama_ayah; ?></td>
                                            </tr>
                                            <tr>
                                                <td>12.<b> Dilahirkan</b></td>
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td>: <?= format_indo(date($w->tanggal_lahir_ayah)); ?>
                                                    <b>Umur</b> : <?= $w->umur_ayah; ?> th</td>
                                            </tr>
                                            <tr>
                                                <td>13.<b> Kewarganegaraan</b></td>
                                                <td> </td>
                                                <td> </td>
                                                <td></td>
                                                <td>:<?= $w->kewarganegaraan_ayah; ?></td>
                                            </tr>
                                            <tr>
                                                <td>14.<b> No. Kartu Keluarga</b></td>
                                                <td> </td>
                                                <td> </td>
                                                <td></td>
                                                <td>:<?= $w->no_kk; ?></td>
                                            </tr>

                                            <tr>
                                                <td>15.<b> No. KTP</b></td>
                                                <td> </td>
                                                <td> </td>
                                                <td></td>
                                                <td>:<?= $w->no_ktp; ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <br>
                        </center>
                        <div class="bawah">
                            <div class="col-md-6">
                                <div class="badan_surat isi_surat" style="margin-right: 100px; margin-top: 10px;">
                                    <?php
                                    foreach ($detail_permohonan as $d) {
                                    ?>
                                        <center>

                                            Pangkalan Bun, <?= format_indo(date($d->tgl_persetujuan_admin)); ?><br>
                                        <?php } ?>
                                        <?php
                                        foreach ($detail_suket as $w) {
                                            if ($w->status_tanda_tangan == "Kepala Desa") {
                                                echo "LURAH MENDAWAI";
                                            } elseif ($w->status_tanda_tangan == "Diwakilkan") {
                                                echo "An. LURAH MENDAWAI";
                                                foreach ($data_kades as $k) { ?>
                                                    <div class="badan_surat isi_surat">
                                                        <center>
                                                            <b><?= $k->jabatan; ?></b>
                                                        </center>
                                                    </div> <?php
                                                        }
                                                    }
                                                } ?>

                                        </center>

                                </div>
                            </div>
                        </div>

                        <div class="ttd_kades">
                            <div class="col-md-6">
                                <?php
                                foreach ($data_kades as $k) {
                                    foreach ($detail_suket as $w) {
                                        if ($w->status_tanda_tangan == "Kepala Desa") { ?>
                                            <div class="badan_surat isi_surat" style=" margin-top: 40px; margin-right: -70px;">
                                                <center><img class="img-fluid img_ttd" width="50%" alt="ttd_lurah" src="<?= base_url(); ?>/assets/uploads/kades/<?= $k->foto_ttd_kades; ?>"></center>
                                            </div>
                                        <?php } elseif ($w->status_tanda_tangan == "Diwakilkan") { ?>
                                            <div class="badan_surat isi_surat" style=" margin-top: 40px; margin-right: -70px;">
                                                <center><img class="img-fluid img_ttd" width="50%" alt="ttd_lurah" src="<?= base_url(); ?>/assets/uploads/pejabat_berwenang/<?= $k->ttd_pejabat; ?>"></center>
                                            </div>
                                    <?php }
                                    }
                                    ?>
                            </div>
                        </div>

                        <div class="kades">
                            <div class="col-md-6">
                                <div class="badan_surat isi_surat" style=" margin-top: 90px; margin-right: -475px;">
                                    <center>
                                        <u><b><?= $k->nama; ?></b></u> <br>
                                        NIP. <?= $k->nip; ?>
                                    </center>
                                <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br><br><br><br><br><br><br><br><br><br><br>
                    <div>&nbsp;</div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
    <!-- End of Main Content -->
</body>

</html>