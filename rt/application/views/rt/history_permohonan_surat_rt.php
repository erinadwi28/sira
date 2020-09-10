                <!-- Begin Page Content -->
                <div class="container-fluid">
                	<!-- Page Heading -->
                	<div class="d-sm-flex align-items-center justify-content-between mb-4">
                		<h1 class="h3 mb-0 text-gray-800">Laporan Data Permohonan Surat</h1>
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
                					<input type="date" class="form-control form-user-input" name="tanggal_mulai" id="tanggal_mulai">
                				</div>
                				<div class="col-md-2 mt-2">
                					<label class="label-control" for="tanggal_akhir"><b>Tanggal
                							Akhir</b></label>
                				</div>
                				<div class="col-md-3 mb-2">
                					<input type="date" class="form-control form-user-input" name="tanggal_akhir" id="tanggal_akhir">
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


                	<!-- DataTables History -->
                	<div class="card shadow mb-4">
                		<div class="card-body">
                			<!-- <button class="btn btn-sm btn-success mb-2 float-right" type="submit">
                                <i class="far fa-file-pdf"></i>
                                Export Pdf
                            </button> -->
                			<div class="table-responsive">
                				<table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                					<thead>
                						<tr>
                							<th>No</th>
                							<th>NIK</th>
                							<th>Nama Pemohon</th>
                							<th>Tanggal Permohonan</th>
                							<th>Surat Dimohon</th>
                							<th>Status</th>
                							<th>Keterangan</th>
                							<th>Tanggal Disetujui RT</th>
                							<th>Tanggal Disetujui Admin</th>
                							<th>Actions</th>
                						</tr>
                					</thead>
                					<tbody>
                						<tr>
                							<td>1</td>
                							<td>123456789</td>
                							<td>Hasan</td>
                							<td>21/08/2000</td>
                							<td>Surat Keterangan Pengantar KTP</td>
                							<td><label class="badge badge-info"><i class="far fa-clock"></i> Menunggu
                									Persetujuan Admin</label></td>
                							<td></td>
                							<td>28/08/2020</td>
                							<td></td>
                							<td>
                								<a href="detail_disetujui_surat_menikah.html">
                									<button class="btn btn-sm btn-primary" type="submit">
                										<i class="fa fa-eye"></i> Detail
                									</button></a>
                								<br />
                							</td>
                						</tr>
                						<tr>
                							<td>2</td>
                							<td>123456789</td>
                							<td>Erina</td>
                							<td>21/08/2000</td>
                							<td>Surat Keterangan Pengantar KTP</td>
                							<td><label class="badge badge-warning"><i class="far fa-clock"></i> Menunggu
                									Persetujuan RT</label></td>
                							<td></td>
                							<td></td>
                							<td></td>
                							<td>
                								<a href="detail_disetujui_surat_menikah.html">
                									<button class="btn btn-sm btn-primary" type="submit">
                										<i class="fa fa-eye"></i> Detail
                									</button></a>
                								<br />
                							</td>
                						</tr>
                						<tr>
                							<td>3</td>
                							<td>123456789</td>
                							<td>Erina</td>
                							<td>21/08/2000</td>
                							<td>Surat Keterangan Pengantar KTP</td>
                							<td><label class="badge badge-success"><i class="far fa-check-circle"></i>
                									Selesai</label></td>
                							<td></td>
                							<td>28/08/2020</td>
                							<td>29/08/2020</td>
                							<td>
                								<a href="detail_disetujui_surat_menikah.html">
                									<button class="btn btn-sm btn-primary" type="submit">
                										<i class="fa fa-eye"></i> Detail
                									</button></a>
                								<br />
                							</td>
                						</tr>
                						<tr>
                							<td>4</td>
                							<td>123456789</td>
                							<td>Erina</td>
                							<td>21/08/2000</td>
                							<td>Surat Keterangan Pengantar KTP</td>
                							<td><label class="badge badge-danger"><i class="far fa-times-circle"></i> Ditolak</label></td>
                							<td>Kurang Pas Photo 2 X 3 cm</td>
                							<td>28/08/2020</td>
                							<td></td>
                							<td>
                								<a href="detail_disetujui_surat_menikah.html">
                									<button class="btn btn-sm btn-primary" type="submit">
                										<i class="fa fa-eye"></i> Detail
                									</button></a>
                								<br />
                							</td>
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
