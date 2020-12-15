<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Surat Pengantar KK</title>
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
            color: #000000;
        }

        .badan_surat {
            opacity: 0.8;
        }

        .badan_surat {
            font-family: 'Book Antiqua';
        }

        .no_surat {
            font-weight: bold;
            font-size: 11pt;
        }

        .paragraf {

            text-align: justify;
        }

        .isi_surat {
            margin-left: 0.0375em;
            font-size: 10pt;
            line-height: 1.2em;
        }

        .identitas {
            margin-left: 2.8125em;
            margin-bottom: 0.3125em;
        }

        .img_ttd {
            width: 150px;
        }

        .ttd_kades {
            display: block;
            position: absolute;
            float: left;
            margin-top: 40px;
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
            margin-top: 145px;
            margin-right: -800px;
        }

        .mengetahui {
            display: block;
            position: absolute;
            float: left;
            margin-right: 300px;
        }

        .pemohon {
            display: block;
            position: absolute;
            float: right;
            margin-right: 200px;
        }

        .table {
            width: 100%;
            margin-bottom: 0.5rem;
            color: #000000;
        }

        .table-bordered {
            border: 1px solid #3A3A3A;
            margin-top: 10px;
        }

        .table-bordered th,
        .table-bordered td {
            border: 1px solid #3A3A3A;
        }

        .table-bordered thead th,
        .table-bordered thead td {
            border-bottom-width: 2px;
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
                            <!-- <hr class="hr_kop"> -->
                            <div class="badan_surat">
                                <div class="no_surat">
                                    <center>
                                        <p><u>PERMOHONAN UNTUK MENDAPATKAN KARTU KELUARGA</u>
                                        </p>
                                    </center>
                                </div>
                                <div class="isi_surat paragraf">
                                    <p> Saya yang bertandatangan dibawah ini, menerangkan dengan sebenarnya :</p>
                                </div>
                                <div class="isi_surat identitas">
                                    <table class="table-responsive">
                                        <?php
                                        foreach ($detail_suket as $w) {
                                        ?>
                                            <tbody>
                                                <tr>
                                                    <td> 1. </td>
                                                    <td><b>Nama Lengkap</b></td>
                                                    <td> </td>
                                                    <td>:</td>
                                                    <td> </td>
                                                    <td><?= $w->nama ?></td>
                                                </tr>
                                                <tr>
                                                    <td> 2. </td>
                                                    <td><b>Tempat, Tanggal Lahir</b></td>
                                                    <td> </td>
                                                    <td>:</td>
                                                    <td> </td>
                                                    <td><?= $w->tempat_lahir ?>, <?= format_indo(date($w->tanggal_lahir)); ?></td>
                                                </tr>
                                                <tr>
                                                    <td> 3. </td>
                                                    <td><b>Status Perkawinan</b></td>
                                                    <td> </td>
                                                    <td>:</td>
                                                    <td> </td>
                                                    <td><?= $w->status_perkawinan ?></td>
                                                </tr>
                                                <tr>
                                                    <td> 4. </td>
                                                    <td><b>Agama</b></td>
                                                    <td> </td>
                                                    <td>:</td>
                                                    <td> </td>
                                                    <td><?= $w->agama ?></td>
                                                </tr>
                                                <tr>
                                                    <td> 5. </td>
                                                    <td><b>Kewarganegaraan</b></td>
                                                    <td> </td>
                                                    <td>:</td>
                                                    <td> </td>
                                                    <td><?= $w->kewarganegaraan ?></td>
                                                </tr>
                                                <tr>
                                                    <td> 6. </td>
                                                    <td><b>Pendidikan Terakhir</b></td>
                                                    <td> </td>
                                                    <td>:</td>
                                                    <td> </td>
                                                    <td><?= $w->pendidikan_terakhir ?></td>
                                                </tr>
                                                <tr>
                                                    <td> 7. </td>
                                                    <td><b>Pekerjaan/ Jabatan</b></td>
                                                    <td> </td>
                                                    <td>:</td>
                                                    <td> </td>
                                                    <td><?= $w->pekerjaan ?></td>
                                                </tr>

                                                <tr>
                                                    <td> 8. </td>
                                                    <td><b>Alamat</b></td>
                                                    <td> </td>
                                                    <td>:</td>
                                                    <td> </td>
                                                    <td><?= $w->alamat ?></td>
                                                </tr>
                                                <tr>
                                                    <td> 9. </td>
                                                    <td><b>Tgl mulai tinggal di kelurahan</b></td>
                                                    <td> </td>
                                                    <td>:</td>
                                                    <td> </td>
                                                    <td><?= format_indo(date($w->tanggal_tinggal)); ?></td>
                                                </tr>
                                                <tr>
                                                    <td> 10. </td>
                                                    <td><b>Kepindahan dari</b></td>
                                                    <td> </td>
                                                    <td>:</td>
                                                    <td> </td>
                                                    <td><?= $w->kepindahan_dari ?></td>
                                                </tr>
                                                <tr>
                                                    <td>11. </td>
                                                    <td><b>Nama Orang Tua</b></td>
                                                    <td> </td>
                                                    <td>:</td>
                                                    <td> </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td> </td>
                                                    <td> <b> a. Ayah</b></td>
                                                    <td> </td>
                                                    <td>:</td>
                                                    <td> </td>
                                                    <td><?= $w->nama_ayah ?></td>
                                                </tr>
                                                <tr>
                                                    <td> </td>
                                                    <td> <b> b. Ibu</b></td>
                                                    <td> </td>
                                                    <td>:</td>
                                                    <td> </td>
                                                    <td><?= $w->nama_ibu ?></td>
                                                </tr>
                                                <tr>
                                                    <td>12. </td>
                                                    <td> <B> Pengikut KK</B></td>
                                                    <td> </td>
                                                    <td>:</td>
                                                    <td> </td>
                                                    <td><?= $w->jml_pengikut ?></td>
                                                </tr>
                                            </tbody>
                                        <?php } ?>
                                    </table>

                                    <!--Tabel pengikut -->
                                    <table class="table table-bordered" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Tempat, Tanggal Lahir</th>
                                                <th>Status</th>
                                                <th>Pendidikan Terakhir</th>
                                                <th>Nama Orang Tua</th>
                                                <th>Hub. Dengan KK</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($pengikut as $m) {
                                            ?>
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $m->nama ?></td>
                                                    <td><?= $m->tempat_lahir ?>, <?= format_indo(date($m->tanggal_lahir)); ?></td>
                                                    <td><?= $m->status_perkawinan ?></td>
                                                    <td><?= $m->pendidikan_terakhir ?></td>
                                                    <td><?= $m->nama_ortu ?></td>
                                                    <td><?= $m->status_hub_kk ?></td>

                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>

                                </div>
                                <div class="isi_surat paragraf">
                                    <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian data yang kami isikan merupakan data yang sebenarnya, dan bilamana
                                        terbukti saya memberikan data yang tidak sebenarnya / memalsukan data tersebut
                                        maka saya sanggup dan bersedia untuk dituntut sesuai peraturan perundang-undangan
                                        yang berlaku tanpa melibatkan pihak yang telah memproses data saya tersebut diatas.
                                    </p>
                                </div>
                        </center>
                        <div class="row ">
                            <div class="col-md-6 mengetahui">
                                <div class="badan_surat isi_surat">
                                    <?php
                                    foreach ($data_kades as $k) {
                                    ?>
                                        <center>
                                            Mengetahui <br>
                                            LURAH MENDAWAI <br><br><br>
                                            <img class="img-fluid img_ttd" width="50%" alt="ttd_lurah" src="<?= base_url(); ?>../assets/uploads/kades/<?= $k->foto_ttd_kades; ?>"> <br>
                                            <u><b><?= $k->nama; ?></b></u> <br>
                                            NIP. <?= $k->nip; ?>
                                        </center>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="col-md-6 pemohon">
                                <div class="badan_surat isi_surat">
                                    <?php
                                    foreach ($detail_suket as $d) {
                                    ?>
                                        <center>
                                            Pangkalan Bun, <?= format_indo(date($d->tgl_persetujuan_admin)); ?> <br>
                                            Yang Mengisis Data <br><br><br><br><br><br>
                                        </center>
                                    <?php } ?>
                                    <?php
                                    foreach ($detail_suket as $w) {
                                    ?>
                                        <center>
                                            <br>
                                            <br>
                                            <br>
                                            <br>

                                            <u><b><?= $w->nama; ?></b></u>
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