<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Mantan Pejabat Berwenang</h1>
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
                            <th>Pangkat Gol</th>
                            <th>Status Kepegawaian</th>
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
                                <td><?php echo $pejabat->pangkat_gol ?></td>
                                <td><label class="badge badge-danger"><i class="fas fa-user-alt-slash"></i>
                                        <?php echo $pejabat->status_jabatan ?></label></td>
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