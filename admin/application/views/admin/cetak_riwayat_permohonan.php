<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Laporan Pelayanan Surat Kelurahan Mendawai(Periode &nbsp;<?= format_indo(date($tgl_awal)); ?>&nbsp;-&nbsp;<?= format_indo(date($tgl_akhir)); ?>)</title>
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
            margin-top: 175px;
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
            color: #858796;
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
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <center>
                <h2 class="h3 mb-0 text-gray-800">Laporan Pelayanan Surat Kelurahan Mendawai</h2><br>
                Periode &nbsp;<?= format_indo(date($tgl_awal)); ?>&nbsp;-&nbsp;<?= format_indo(date($tgl_akhir)); ?>
            </center>
        </div>

        <!-- DataTables Warga -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal Permohonan</th>
                                <th>Nama Surat</th>
                                <th>NIK Pemohon</th>
                                <th>Nama Pemohon</th>
                                <th>Status</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($data_riwayat_permohonan as $permohonan) {
                            ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= date("d-m-Y", strtotime($permohonan->tgl_permohonan_surat)); ?></td>
                                    <td><?= $permohonan->nama_surat ?></td>
                                    <td><?= $permohonan->nik ?></td>
                                    <td><?= $permohonan->nama ?></td>
                                    <td><?= $permohonan->status ?></td>
                                    <td><?= $permohonan->keterangan ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->
</body>

</html>