<!-- Begin Page Content -->
<div class="container-fluid">
            <!-- Page Heading -->
            <div
              class="d-sm-flex align-items-center justify-content-between mb-4"
            >
              <h1 class="h3 mb-0 text-gray-800">Laporan Permohonan Surat</h1>
            </div>

            <!-- Filter Tanggal Permohonan Surat -->
            <div class="card shadow col-md-10 mb-2">
              <div class="card-body">
                <h5>Filter Tanggal</h5>
                <div class="row">
                                  <div class="col-md-2 mt-2">
                                      <label class="label-control" for="tanggal_mulai"><b>Tanggal
                                              Mulai</b></label>
                                  </div>
                                  <div class="col-md-3 mb-2">
                                      <input type="date" class="form-control form-user-input" name="tanggal_mulai"
                                          id="tanggal_mulai">
                                  </div>
                                  <div class="col-md-2 mt-2">
                                      <label class="label-control" for="tanggal_akhir"><b>Tanggal
                                              Akhir</b></label>
                                  </div>
                                  <div class="col-md-3 mb-2">
                                      <input type="date" class="form-control form-user-input" name="tanggal_akhir"
                                          id="tanggal_akhir">
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
              </div>
            </div>
              

            <!-- DataTables Warga -->
            <div class="card shadow mb-4">
              <div class="card-body">
                <div class="table-responsive">
                  <table
                    class="table table-bordered table-hover"
                    id="dataTable"
                    width="100%"
                    cellspacing="0"
                  >
                    <thead>
                      <tr>
                        <th>No Surat</th>
                        <th>Nama Pemohon</th>
                        <th>Tanggal Permohonan</th>
                        <th>Status</th>
                        <th>Tanggal Disetujui</th>
                       
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>206/KM/AS/VIII/2020. Um</td>
                        <td>Hasan</td>
                        <td>19/7/2020</td>
                        <td><label class="badge badge-success"><i class="fas fa-check-circle"></i> Selesai</label></td>
                        <td>20/7/2020</td>
                        
                      </tr>
                      <tr>
                        <td>159/KM/AS/VIII/2020</td>
                        <td>Erina</td>
                        <td>20/7/2020</td>
                        <td><label class="badge badge-success"><i class="fas fa-check-circle"></i> Selesai</label></td>
                        <td>21/7/2020</td>
                        
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->