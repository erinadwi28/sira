<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Surat Keterangan Belum Memiliki Rumah</title>
    <!--Tittle Icon-->
    <link rel="shortcut icon" href="<?= base_url('assets/dashboard/') ?>img/tittle.png" type="image/png" />

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/dashboard/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

    <!-- Custom styles for this template-->
    <link href="sb-admin-2.min.css" rel="stylesheet" />
    <!-- <link href="<?= base_url('assets/dashboard/') ?>css/preview.css" rel="stylesheet" /> -->

    <link href="<?= base_url('assets/dashboard/') ?>css/validation.css" rel="stylesheet" />
    <link href="<?= base_url('assets/dashboard/') ?>css/validation_warga.css" rel="stylesheet" />

    <link href="<?= base_url('assets/dashboard/') ?>css/lightbox.min.css" rel="stylesheet" />

    <!-- Custom styles for this page -->
    <link href="<?= base_url('assets/dashboard/') ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" />

    <style>
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

        .badan_surat {
            font-family: 'Book Antiqua';
        }

        .no_surat {
            font-weight: bold;
            font-size: 14pt;
        }

        .paragraf {
            /* text-indent: 2.8125em; */
            text-align: justify;
            color: #000000;
        }

        .isi_surat {
            margin-left: 0.0375em;
            font-size: 12pt;
            line-height: 1.2em;
        }

        .identitas {
            margin-left: 2.8125em;
            margin-bottom: 0.3125em;
        }

        .img_ttd {
            width: 200px;
            margin-right: 90px;
        }

        .ttd_kades {
            display: block;
            position: absolute;
            float: left;
            margin-top: 50px;
            margin-right: -400px;
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
            margin-right: 160px;
        }

        .kades {
            display: block;
            position: absolute;
            float: left;
            margin-top: 170px;
            margin-right: -510px;
        }
    </style>

</head>

<body id="page-top">
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <center>
                            <div class="kopsurat row">
                                <div class="col-md-12 mb-3">
                                    <object data="" type="image">
                                        <img class="img-fluid" alt="logo_kop_surat" src="<?= base_url('assets/dashboard/') ?>img/KOP.png">
                                    </object>
                                </div>
                            </div>
                            <!-- <hr class="hr_kop"> -->
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
                                <div class="badan_surat">
                                    <div class="no_surat">
                                        <center>
                                            <p><u>SURAT KETERANGAN BELUM MEMILIKI RUMAH</u><br>
                                                Nomor : <?= $w->no_registrasi; ?> / <?= $w->no_kelurahan; ?> / <?= $w->no_kecamatan; ?> / <?= $bulan; ?> / <?= $w->no_tahun; ?></p>
                                        </center>
                                    </div>
                                    <div class="isi_surat paragraf">
                                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang bertanda tangan dibawah ini, Lurah Mendawai, Kecamatan Arut
                                            Selatan, Kabupaten Kotawaringin Barat,
                                            Provinsi Kalimantan Tengah, dengan ini menerangkan bahwa :</p>
                                    </div>
                                    <div class="isi_surat identitas">
                                        <table class="table-responsive">
                                            <tbody>
                                                <tr>
                                                    <td><b>Nama</b></td>
                                                    <td> </td>
                                                    <td>:</td>
                                                    <td> </td>
                                                    <td><?= $w->nama; ?></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Jenis Kelamin</b></td>
                                                    <td> </td>
                                                    <td>:</td>
                                                    <td> </td>
                                                    <td><?= $w->jenis_kelamin; ?></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Tempat, Tanggal Lahir</b></td>
                                                    <td> </td>
                                                    <td>:</td>
                                                    <td> </td>
                                                    <td><?= $w->tempat_lahir; ?>, <?= format_indo(date($w->tanggal_lahir)); ?></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Pekerjaan</b></td>
                                                    <td> </td>
                                                    <td>:</td>
                                                    <td> </td>
                                                    <td><?= $w->pekerjaan; ?></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Alamat</b></td>
                                                    <td> </td>
                                                    <td>:</td>
                                                    <td> </td>
                                                    <td><?= $w->alamat_tinggal; ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <br>
                                    <div class="isi_surat paragraf">
                                        <p>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Berdasarkan Surat Keterangan dari Ketua Rukun Tetangga ( RT ) <?php foreach ($detail_pemohon as $d) { ?> <?= $d->rt; ?> <?php } ?> Kelurahan Mendawai, Nomor : <?= $w->nomor_surat_rt; ?>,
                                            tanggal <?php
                                                    foreach ($detail_suket as $d) {
                                                    ?> <?= format_indo(date($d->tanggal_persetujuan_rt)); ?> <?php } ?>, Bahwa nama tersebut diatas memang benar Penduduk RT. <?php foreach ($detail_pemohon as $d) { ?> <?= $d->rt; ?> <?php } ?> Kelurahan Mendawai Kecamatan Arut Selatan
                                                Kabupaten Kotawaringin Barat, dan menurut pengakuan yang bersangkutan tersebut diatas belum memiliki rumah sendiri.
                                        </p>
                                        <p>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian Surat Keterangan ini dibuat dan diberikan kepada yang bersangkutan untuk dipergunakan
                                            sebagai <?= $w->keperluan; ?>.
                                        </p>
                                    </div>
                                </div>
                        </center>
                    <?php } ?>
                    <div class="row bawah">
                        <div class="col-md-6">
                        </div>
                        <div class="col-md-6">
                            <div class="badan_surat isi_surat">
                                <?php
                                foreach ($detail_suket as $d) {
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
                    <div class="row ttd_kades">
                        <div class="col-md-6 ">
                        </div>
                        <div class="col-md-6">
                            <?php
                            foreach ($data_kades as $k) {
                                foreach ($detail_suket as $w) {
                                    if ($w->status_tanda_tangan == "Kepala Desa") { ?>
                                        <div class="badan_surat isi_surat">
                                            <center><img class="img-fluid img_ttd" width="50%" alt="ttd_lurah" src="<?= base_url(); ?>../assets/uploads/kades/<?= $k->foto_ttd_kades; ?>"></center>
                                        </div>
                                    <?php } elseif ($w->status_tanda_tangan == "Diwakilkan") { ?>
                                        <div class="badan_surat isi_surat">
                                            <center><img class="img-fluid img_ttd" width="50%" alt="ttd_lurah" src="<?= base_url(); ?>../assets/uploads/pejabat_berwenang/<?= $k->ttd_pejabat; ?>"></center>
                                        </div>
                                <?php }
                                }
                                ?>
                        </div>
                    </div>
                    <div class="row kades">
                        <div class="col-md-6">
                        </div>
                        <div class="col-md-6">
                            <div class="badan_surat isi_surat">
                                <center>
                                    <u><b><?= $k->nama; ?></b></u> <br>
                                    NIP. <?= $k->nip; ?>
                                </center>
                            <?php } ?>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->
</body>

</html>