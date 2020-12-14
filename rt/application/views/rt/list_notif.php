<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Notifikasi</h1>
    </div>

    <!-- Filter Tanggal Permohonan Surat -->


    <!-- DataTables Warga -->
    <div class="card shadow mb-4">
        <div class="card-body" style="padding: 15px;">

            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>
            <?php if ($this->session->flashdata('success')) : ?>
            <?php endif; ?>

            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pemohon</th>
                            <th>Nama Surat</th>
                            <th>Tanggal Permohonan</th>
                            <th>Status</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data_riwayat_permohonan as $permohonan) {
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $permohonan->nama ?></td>
                                <td><?= $permohonan->nama_surat ?></td>
                                <td><?= date("d-m-Y", strtotime($permohonan->tgl_permohonan_surat)); ?></td>
                                <?php if ($permohonan->status == "Ditolak Kelurahan" || $permohonan->status == "Ditolak Ketua RT") { ?>
                                    <td><label class="badge badge-danger"><i class="far fa-times-circle"></i>
                                            <?= $permohonan->status ?></label></td>
                                <?php } elseif ($permohonan->status == "Menunggu Persetujuan Ketua RT") { ?>
                                    <td><label class="badge badge-warning"><i class="far fa-clock"></i>
                                            <?= $permohonan->status ?></label></td>
                                <?php } elseif ($permohonan->status == "Menunggu Persetujuan Kelurahan") { ?>
                                    <td><label class="badge badge-info"><i class="far fa-clock"></i>
                                            <?= $permohonan->status ?></label></td>
                                <?php } elseif ($permohonan->status == "Selesai") { ?>
                                    <td><label class="badge badge-success"><i class="far fa-check-circle"></i>
                                            <?= $permohonan->status ?></label></td>
                                <?php } ?>
                                <td><?= character_limiter($permohonan->keterangan, 20); ?></td>
                                <td>
                                    <div>
                                        <a href="<?= base_url() ?>rt/detail_data_permohonan/<?= $permohonan->id_permohonan_surat ?>/<?= $permohonan->id_nama_surat ?>" class="btn btn-primary btn-sm">
                                            <i class="far fa-eye nav-icon"></i>
                                            Detail
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