<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>

    </div>

    <!-- Content Row line 1-->
    <div class="row">
        <!-- SUKET USAHA -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <h6>SUKET. USAHA</h6>
                            </div>
                        </div>
                        <!-- <div class="col-auto">
                        <i class="fa fa fa-user fa-2x text-gray-300"></i>
                    </div> -->
                        <div>
                            <a class="btn btn-primary far fa-edit" href="<?= base_url() ?>warga/form_suket001/<?= $warga['id_warga'] ?>" role="button"> Buat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SUKET DOMISILI-->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>
                    <?php if ($this->session->flashdata('success')) : ?>
                    <?php endif; ?>
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <h6>SUKET. DOMISILI</h6>
                            </div>
                        </div>
                        <!-- <div class="col-auto">
                        <i class="fa fa fa-user fa-2x text-gray-300"></i>
                    </div> -->
                        <div>
                            <a class="btn btn-primary far fa-edit" href="<?= base_url() ?>warga/form_suket002/<?= $warga['id_warga'] ?>" role="button"> Buat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <h6>SUKET. KEPEMILIKAN TANAH</h6>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-success"><i class="fa fa-download" aria-hidden="true"> Download</i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- SUKET BLM MEMILIKI RUMAH -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <h6>SUKET. BELUM MEMILIKI RUMAH</h6>
                            </div>
                        </div>
                        <!-- <div class="col-auto">
                        <i class="fa fa fa-user fa-2x text-gray-300"></i>
                    </div> -->
                        <div>
                            <a class="btn btn-primary far fa-edit" href="<?= base_url() ?>warga/form_suket003/<?= $warga['id_warga'] ?>" role="button"> Buat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SUKET BEDA NAMA -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <h6>SUKET. BEDA NAMA</h6>
                            </div>
                        </div>
                        <!-- <div class="col-auto">
                        <i class="fa fa fa-user fa-2x text-gray-300"></i>
                    </div> -->
                        <div>
                            <a class="btn btn-primary far fa-edit" href="<?= base_url() ?>warga/form_suket004/<?= $warga['id_warga'] ?>" role="button"> Buat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SUKET PENYERAHAN WARIS -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <h6>SUKET. PENYERAHAN WARIS</h6>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-success"><i class="fa fa-download" aria-hidden="true"> Download</i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- SUKET IZIN KERAMAIAN-->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <h6>SUKET. IZIN KERAMAIAN</h6>
                            </div>
                        </div>
                        <!-- <div class="col-auto">
                        <i class="fa fa fa-user fa-2x text-gray-300"></i>
                    </div> -->
                        <div>
                            <a class="btn btn-primary far fa-edit" href="<?= base_url() ?>warga/form_suket005/<?= $warga['id_warga'] ?>" role="button"> Buat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SUKET BLM MENIKAH-->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <h6>SUKET. BELUM MENIKAH</h6>
                            </div>
                        </div>
                        <!-- <div class="col-auto">
                        <i class="fa fa fa-user fa-2x text-gray-300"></i>
                    </div> -->
                        <div>
                            <a class="btn btn-primary far fa-edit" href="<?= base_url() ?>warga/form_suket006/<?= $warga['id_warga'] ?>" role="button"> Buat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SUKET AHLI WARIS -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <h6>SUKET. AHLI WARIS</h6>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-success"><i class="fa fa-download" aria-hidden="true"> Download</i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- SUKET TIDAK MAMPU -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <h6>SUKET. TIDAK MAMPU </h6>
                            </div>
                        </div>
                        <!-- <div class="col-auto">
                        <i class="fa fa fa-user fa-2x text-gray-300"></i>
                    </div> -->
                        <div>
                            <a class="btn btn-primary far fa-edit" href="<?= base_url() ?>warga/form_suket007/<?= $warga['id_warga'] ?>" role="button"> Buat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SUKET JANDA -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <h6>SUKET. JANDA</h6>
                            </div>
                        </div>
                        <!-- <div class="col-auto">
                        <i class="fa fa fa-user fa-2x text-gray-300"></i>
                    </div> -->
                        <div>
                            <a class="btn btn-primary far fa-edit" href="<?= base_url() ?>warga/form_suket008/<?= $warga['id_warga'] ?>" role="button"> Buat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SUKET PENGANTAR NIKAH -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <h6>SUKET. PENGANATR NIKAH</h6>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-success"><i class="fa fa-download" aria-hidden="true"> Download</i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- SUKET KEMATIAN -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <h6>SUKET. KEMATIAN</h6>
                            </div>
                        </div>
                        <!-- <div class="col-auto">
                        <i class="fa fa fa-user fa-2x text-gray-300"></i>
                    </div> -->
                        <div>
                            <a class="btn btn-primary far fa-edit" href="<?= base_url() ?>warga/form_suket009/<?= $warga['id_warga'] ?>" role="button"> Buat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SUKET KELAHIRAN -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <h6>SUKET. KELAHIRAN</h6>
                            </div>
                        </div>
                        <!-- <div class="col-auto">
                        <i class="fa fa fa-user fa-2x text-gray-300"></i>
                    </div> -->
                        <div>
                            <a class="btn btn-primary far fa-edit" href="<?= base_url() ?>warga/form_suket010/<?= $warga['id_warga'] ?>" role="button"> Buat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SUKET PENYERAHAN SEBIDANG TANAH -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <h6>SUKET. PENYERAHAN TANAH</h6>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-success"><i class="fa fa-download" aria-hidden="true"> Download</i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- SURAT PENGANTAR KTP -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <h6>SURAT PENGANTAR KTP</h6>
                            </div>
                        </div>
                        <!-- <div class="col-auto">
                        <i class="fa fa fa-user fa-2x text-gray-300"></i>
                    </div> -->
                        <div>
                            <a class="btn btn-primary far fa-edit" href="<?= base_url() ?>warga/form_suket011/<?= $warga['id_warga'] ?>" role="button"> Buat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SURAT PENGANTAR KK-->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <h6>SURAT PENGANTAR KK</h6>
                            </div>
                        </div>
                        <!-- <div class="col-auto">
                        <i class="fa fa fa-user fa-2x text-gray-300"></i>
                    </div> -->
                        <div>
                            <a class="btn btn-primary far fa-edit" href="<?= base_url() ?>warga/form_suket012/<?= $warga['id_warga'] ?>" role="button"> Buat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SURAT REK. IMB -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <h6>SURAT REKOMENDASI IMB</h6>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-success"><i class="fa fa-download" aria-hidden="true"> Download</i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- SURAT PINDAH -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <h6>SUKET. PINDAH </h6>
                            </div>
                        </div>
                        <!-- <div class="col-auto">
                        <i class="fa fa fa-user fa-2x text-gray-300"></i>
                    </div> -->
                        <div>
                            <a class="btn btn-primary far fa-edit" href="<?= base_url() ?>warga/form_suket014/<?= $warga['id_warga'] ?>" role="button"> Buat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SUKET PENGHASILAN -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <h6>SUKET. PENGHASILAN</h6>
                            </div>
                        </div>
                        <!-- <div class="col-auto">
                        <i class="fa fa fa-user fa-2x text-gray-300"></i>
                    </div> -->
                        <div>
                            <a class="btn btn-primary far fa-edit" href="<?= base_url() ?>warga/form_suket013/<?= $warga['id_warga'] ?>" role="button"> Buat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SUKET REKOMENDASI UMK -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <h6>SUKET REK.USAHA MIKRO KECIL </h6>
                            </div>
                        </div>
                        <!-- <div class="col-auto">
                        <i class="fa fa fa-user fa-2x text-gray-300"></i>
                    </div> -->
                        <div>
                            <button class="btn btn-success"><i class="fa fa-download" aria-hidden="true"> Download</i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->