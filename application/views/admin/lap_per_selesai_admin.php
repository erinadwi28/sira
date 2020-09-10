<!-- Begin Page Content -->
<div class="container-fluid">
					<!-- Page Heading -->
					<div class="d-sm-flex align-items-center justify-content-between mb-4">
						<h1 class="h3 mb-0 text-gray-800">Laporan Data Permohonan Selesai</h1>
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
								<table class="table table-bordered table-hover" id="dataTable" width="100%"
									cellspacing="0">
									<thead>
										<tr>
											<th>No</th>
											<th>Id Permohonan</th>
											<th>Jenis Surat</th>
											<th>Nomor Surat</th>
											<th>Pemohon</th>
											<th>Tanggal Surat</th>
											<th>Tanggal Pembuatan</th>
											<th>Keterangan</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>111</td>
											<td>surat Pengantar Nikah</td>
											<td>SPN/MD/P/25</td>
											<td>Hadi</td>
											<td>17/08/2025</td>
											<td>17/08/2025</td>
											<td>Selesai</td>
											<td>
												<button class="btn btn-sm btn-info">
													<i class="fa fa-eye"></i> Lihat
												</button>
											</td>
										</tr>
										<tr>
											<td>2</td>
											<td>121</td>
											<td>surat Pengantar Nikah</td>
											<td>SPN/MD/P/25</td>
											<td>Hadi</td>
											<td>17/08/2025</td>
											<td>17/08/2025</td>
											<td>bukan merupakan warga mendawai</td>
											<td>
												<button class="btn btn-sm btn-info">
													<i class="fa fa-eye"></i> Lihat
												</button>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="card-footer">
							<span>
								<button class="btn btn-sm btn-primary float-right ml-1" type="submit"><i
										class="fa fa-print"></i> Cetak</button>
							</span>
						</div>
					</div>
				</div>
				<!-- /.container-fluid -->
			</div>
			<!-- End of Main Content -->