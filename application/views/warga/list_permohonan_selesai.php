<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Permohonan Surat Selesai</h1>
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
                            <th>Nama Surat</th>
                            <th>Tgl Permohonan</th>
                            <th>Tgl Disetujui</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($permohonan as $w) {
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $w->nama_surat ?></td>
                                <td><?= date("d-m-Y", strtotime($w->tgl_permohonan_surat)); ?></td>
                                <td><?= date("d-m-Y", strtotime($w->tgl_persetujuan_admin)); ?></td>
                                <td><label class="badge badge-success"><i class="far fa-times-cicrle"></i> <?= $w->status ?></label></td>
                                <td>
                                    <div>
                                        <a href="<?= base_url() ?>warga/lihat_surat/<?= $w->id_permohonan_surat ?>/<?= $w->id_nama_surat ?>" class="btn btn-sm btn-info">
                                            <i class="far fa-eye nav-icon"></i>
                                            Lihat Surat
                                        </a>
                                    </div>
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