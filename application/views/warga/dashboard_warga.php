<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>

    </div>

    <!-- Content Row line 1-->

    <!-- SUKET USAHA -->
    <div class="row">
        <div class="col-xl-4 col-md-3 mb-3">
            <div class="card border-left-primary shadow h-100 py-1">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h5 mb-0 font-weight-bold text-primary ">SURAT KET. USAHA</div> <br>

                        </div>
                        <div>
                            <a class="btn btn-primary far fa-edit" href="<?= base_url() ?>warga/form_suket001/<?= $warga['id_warga'] ?>" role="button"> Buat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SUKET DOMISILI-->
        <div class="col-xl-4 col-md-3 mb-3">
            <div class="card border-left-primary shadow h-100 py-1">
                <div class="card-body">
                    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>
                    <?php if ($this->session->flashdata('success')) : ?>
                    <?php endif; ?>
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h5 mb-0 font-weight-bold text-primary ">SURAT KET. DOMISILI</div> <br>

                        </div>
                        <div>
                            <a class="btn btn-primary far fa-edit" href="<?= base_url() ?>warga/form_suket002/<?= $warga['id_warga'] ?>" role="button"> Buat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SUKET BELUM MEMILIKI RUMAH -->
        <div class="col-xl-4 col-md-3 mb-3">
            <div class="card border-left-primary shadow h-100 py-1">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h5 mb-0 font-weight-bold text-primary ">SUKET. BELUM MEMILIKI RUMAH</div> <br>

                        </div>
                        <div>
                            <a class="btn btn-primary far fa-edit" href="<?= base_url() ?>warga/form_suket003/<?= $warga['id_warga'] ?>" role="button"> Buat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row">

        <!-- SUKET BEDA NAMA -->
        <div class="col-xl-4 col-md-3 mb-3">
            <div class="card border-left-primary shadow h-100 py-1">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h5 mb-0 font-weight-bold text-primary ">SURAT KET. BEDA NAMA</div> <br>

                        </div>
                        <div>
                            <a class="btn btn-primary far fa-edit" href="<?= base_url() ?>warga/form_suket004/<?= $warga['id_warga'] ?>" role="button"> Buat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SUKET IZIN KERAMAIAN -->
        <div class="col-xl-4 col-md-3 mb-3">
            <div class="card border-left-primary shadow h-100 py-1">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h5 mb-0 font-weight-bold text-primary ">SURAT KET. IZIN KERAMAIAN</div> <br>

                        </div>
                        <div>
                            <a class="btn btn-primary far fa-edit" href="<?= base_url() ?>warga/form_suket005/<?= $warga['id_warga'] ?>" role="button"> Buat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SUKET BELUM PERNAH MENIKAH -->
        <div class="col-xl-4 col-md-3 mb-3">
            <div class="card border-left-primary shadow h-100 py-1">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h5 mb-0 font-weight-bold text-primary ">SUKET. BELUM PERNAH MENIKAH</div>

                        </div>
                        <div>
                            <a class="btn btn-primary far fa-edit" href="<?= base_url() ?>warga/form_suket006/<?= $warga['id_warga'] ?>" role="button"> Buat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <div class="row">
        <!-- SUKET TIDAK MAMPU -->
        <div class="col-xl-4 col-md-3 mb-3">
            <div class="card border-left-primary shadow h-100 py-1">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h5 mb-0 font-weight-bold text-primary ">SURAT KET. TIDAK MAMPU</div> <br>

                        </div>
                        <div>
                            <a class="btn btn-primary far fa-edit" href="<?= base_url() ?>warga/form_suket007/<?= $warga['id_warga'] ?>" role="button"> Buat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SUKET JANDA -->
        <div class="col-xl-4 col-md-3 mb-3">
            <div class="card border-left-primary shadow h-100 py-1">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h5 mb-0 font-weight-bold text-primary ">SURAT KET. JANDA</div> <br>

                        </div>
                        <div>
                            <a class="btn btn-primary far fa-edit" href="<?= base_url() ?>warga/form_suket008/<?= $warga['id_warga'] ?>" role="button"> Buat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SUKET KEMATIAN -->
        <div class="col-xl-4 col-md-3 mb-3">
            <div class="card border-left-primary shadow h-100 py-1">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h5 mb-0 font-weight-bold text-primary ">SUKET. KEMATIAN</div> <br>

                        </div>
                        <div>
                            <a class="btn btn-primary far fa-edit" href="<?= base_url() ?>warga/form_suket009/<?= $warga['id_warga'] ?>" role="button"> Buat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- SUKET KELAHIRAN -->
        <div class="col-xl-4 col-md-3 mb-3">
            <div class="card border-left-primary shadow h-100 py-1">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h5 mb-0 font-weight-bold text-primary ">SURAT KET. KELAHIRAN</div> <br>

                        </div>
                        <div>
                            <a class="btn btn-primary far fa-edit" href="<?= base_url() ?>warga/form_suket010/<?= $warga['id_warga'] ?>" role="button"> Buat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- SUKET PENGANTAR KTP -->
        <div class="col-xl-4 col-md-3 mb-3">
            <div class="card border-left-primary shadow h-100 py-1">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h5 mb-0 font-weight-bold text-primary ">SURAT KET. PENGANTAR KTP</div> <br>

                        </div>
                        <div>
                            <a class="btn btn-primary far fa-edit" href="<?= base_url() ?>warga/form_suket011/<?= $warga['id_warga'] ?>" role="button"> Buat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SUKET PENGANTAR KK -->
        <div class="col-xl-4 col-md-3 mb-3">
            <div class="card border-left-primary shadow h-100 py-1">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h5 mb-0 font-weight-bold text-primary ">SUKET. PENGANTAR KK</div> <br>

                        </div>
                        <div>
                            <a class="btn btn-primary far fa-edit" href="<?= base_url() ?>warga/form_suket012/<?= $warga['id_warga'] ?>" role="button"> Buat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- SUKET PENGHASILAN -->
        <div class="col-xl-4 col-md-3 mb-3">
            <div class="card border-left-primary shadow h-100 py-1">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h5 mb-0 font-weight-bold text-primary ">SURAT KET. PENGHASILAN</div> <br>

                        </div>
                        <div>
                            <a class="btn btn-primary far fa-edit" href="<?= base_url() ?>warga/form_suket013/<?= $warga['id_warga'] ?>" role="button"> Buat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SUKET PINDAH -->
        <div class="col-xl-4 col-md-3 mb-3">
            <div class="card border-left-primary shadow h-100 py-1">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h5 mb-0 font-weight-bold text-primary ">SURAT KET. PINDAH</div> <br>

                        </div>
                        <div>
                            <a class="btn btn-primary far fa-edit" href="<?= base_url() ?>warga/form_suket014/<?= $warga['id_warga'] ?>" role="button"> Buat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SUKET KEPEMILIKAN TANAH -->
        <div class="col-xl-4 col-md-3 mb-3">
            <div class="card border-left-success shadow h-100 py-1">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h5 mb-0 font-weight-bold text-success ">SUKET. KEPEMILIKAN TANAH</div>

                        </div>
                        <div>
                            <button class="btn btn-success"><i class="fa fa-download" aria-hidden="true"> Unduh</i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-4 col-md-3 mb-3">
            <div class="card border-left-success shadow h-100 py-1">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h5 mb-0 font-weight-bold text-success ">SUKET. PENYERAHAN WARIS </div>

                        </div>
                        <div>
                            <button class="btn btn-success"><i class="fa fa-download" aria-hidden="true"> Unduh</i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-3 mb-3">
            <div class="card border-left-success shadow h-100 py-1">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h5 mb-0 font-weight-bold text-success ">SUKET. AHLI WARIS</div> <br>

                        </div>
                        <div>
                            <button class="btn btn-success"><i class="fa fa-download" aria-hidden="true"> Unduh</i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-3 mb-3">
            <div class="card border-left-success shadow h-100 py-1">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h5 mb-0 font-weight-bold text-success ">SUKET. PENGANTAR NIKAH</div>

                        </div>
                        <div>
                            <button class="btn btn-success"><i class="fa fa-download" aria-hidden="true"> Unduh</i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-4 col-md-3 mb-3">
            <div class="card border-left-success shadow h-100 py-1">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h5 mb-0 font-weight-bold text-success ">SUKET. PENYERAHAN TANAH</div> <br>

                        </div>
                        <div>
                            <button class="btn btn-success"><i class="fa fa-download" aria-hidden="true"> Unduh</i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-3 mb-3">
            <div class="card border-left-success shadow h-100 py-1">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h5 mb-0 font-weight-bold text-success ">SUKET. REKOMENDASI IMB</div> <br>
                        </div>
                        <div>
                            <button class="btn btn-success"><i class="fa fa-download" aria-hidden="true"> Unduh</i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-3 mb-3">
            <div class="card border-left-success shadow h-100 py-1">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h5 mb-0 font-weight-bold text-success ">SUKET. REKOMENDASI USAHA MIKRO KECIL</div>

                        </div>
                        <div>
                            <button class="btn btn-success"><i class="fa fa-download" aria-hidden="true"> Unduh</i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>