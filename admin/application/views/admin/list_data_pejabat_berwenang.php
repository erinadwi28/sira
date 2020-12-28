<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Pejabat Berwenang</h1>
        <a href="<?= base_url('admin/form_tambah_pejabat_berwenang') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa fa-user-plus fa-sm text-white-50"></i> Tambah
            Data</a>
    </div>

    <!-- DataTables Warga -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>
            <?php if ($this->session->flashdata('success')) : ?>
            <?php endif; ?>
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Status Kepegawaian</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data_pejabat as $pejabat) {
                        ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $pejabat->nip ?></td>
                                <td><?php echo $pejabat->nama ?></td>
                                <td><?php echo $pejabat->jabatan ?></td>
                                <td><label class="badge badge-success"><i class="fas fa-user-check"></i>
                                        <?php echo $pejabat->status_jabatan ?></label></td>
                                <td>
                                    <a href="<?= base_url() ?>admin/detail_data_pejabat_berwenang/<?= $pejabat->id_pejabat_berwenang  ?>" class="btn btn-primary btn-sm mb-1">
                                        <small><i class="far fa-eye nav-icon"></i></small>
                                        Detail
                                    </a>

                                    <a href="<?= base_url() ?>admin/aksi_hapus_pejabat_berwenang/<?= $pejabat->id_pejabat_berwenang  ?>" class="btn btn-danger btn-sm hapus">
                                        <small><i class="far fa-trash-alt nav-icon"></i></small>
                                        Nonaktifkan
                                    </a>
                                </td>
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