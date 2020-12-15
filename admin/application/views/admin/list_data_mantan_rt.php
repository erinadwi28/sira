<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Mantan Ketua RT</h1>
    </div>

    <!-- DataTables Warga -->
    <div class="card shadow mb-4">
        <div class="card-body" style="padding: 20px;">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Status Kepegawaan</th>
                            <th>Tanggal Dinonaktifkan</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data_rt as $rt) {
                        ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $rt->nik ?></td>
                                <td><?php echo $rt->nama ?></td>
                                <td><?php echo $rt->alamat ?></td>
                                <td><label class="badge badge-danger"><i class="fas fa-user-alt-slash"></i> <?php echo $rt->status_kepegawaian ?></label></td>
                                <td><?php echo $rt->tanggal_dinonaktifkan ?></td>
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