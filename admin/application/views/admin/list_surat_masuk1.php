<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Surat Masuk</h1>
        <a href="<?= base_url('admin/form_tambah_surat_masuk') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-file-medical text-white-50"></i> Tambah Data</a>
    </div>

    <!-- Filter Tanggal Permohonan Surat -->
    <div class="card shadow col-md-10 mb-4">
        <div class="card-body" style="padding: 15px;">
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>
            <?php if ($this->session->flashdata('success')) : ?>
            <?php endif; ?>
            <h5>Filter Tanggal</h5>
            <form role="form" action="<?= base_url('admin/filter_surat_masuk') ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">

                <div class="row">

                    <div class="col-md-2 mt-2">
                        <label class="label-control" for="tanggal_mulai"><b>Tanggal
                                Mulai</b></label>
                    </div>
                    <div class="col-md-3 mb-2">
                        <input type="date" class="form-control form-user-input" name="tanggal_mulai" value="<?= $tgl_awal ?>" id="tanggal_mulai">
                    </div>
                    <div class="col-md-2 mt-2">
                        <label class="label-control" for="tanggal_akhir"><b>Tanggal
                                Akhir</b></label>
                    </div>
                    <div class="col-md-3 mb-2">
                        <input type="date" class="form-control form-user-input" value="<?= $tgl_akhir ?>" name="tanggal_akhir" id="tanggal_akhir">
                    </div>
                    <div class="col-md-2 mt-1">
                        <center>
                            <button class="btn btn-sm btn-primary" type="submit">
                                <i class="fa fa-search nav-icon"></i>
                                Tampilkan
                            </button>
                        </center>
                    </div>
                </div>
            </form>
        </div>
        <hr>
        <div>
            <a href="<?= base_url() ?>admin/list_surat_masuk">
                <button id="btn_kembali" class="btn btn-sm btn-warning float-right mb-2 mr-2 mt-0" type="">
                    <i class="fas fa-sync-alt"></i> Reset
                </button>
            </a>
        </div>
    </div>


    <!-- DataTables Warga -->
    <div class="card shadow mb-4">
        <div class="card-header">
            <span>
                <a href="<?= base_url() ?>admin/cetak_list_surat_masuk/<?= $tgl_awal ?>/<?= $tgl_akhir ?>">
                    <button id="btn_cetak" class="btn btn-sm btn-primary float-right mb-2 mr-2 mt-0" type="submit">
                        <i class="fa fa-print"></i> Cetak
                    </button>
                </a>
            </span>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nomor Surat</th>
                            <th>Tanggal</th>
                            <th>Pengirim</th>
                            <th>Perihal</th>
                            <th>Isi Surat</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data_surat_masuk as $sm) { ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $sm->nomor_surat ?></td>
                                <td><?= date("d-m-Y", strtotime($sm->tanggal)); ?></td>
                                <td><?php echo $sm->pengirim ?></td>
                                <td><?php echo $sm->perihal ?></td>
                                <td><?= character_limiter($sm->isi, 20); ?></td>
                                <td>
                                    <a href="<?= base_url() ?>admin/detail_surat_masuk/<?= $sm->id_sm ?>" class="btn btn-primary btn-sm">
                                        <i class="far fa-eye nav-icon"></i>
                                        Detail
                                    </a>
                                    <a href="<?= base_url() ?>admin/aksi_hapus_surat_masuk/<?= $sm->id_sm ?>" class="btn btn-danger btn-sm hapus">
                                        <i class="far fa-trash-alt nav-icon"></i>
                                        Hapus
                                    </a>
                                </td>
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