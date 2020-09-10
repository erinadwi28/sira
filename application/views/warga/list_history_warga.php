<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">History Permohonan Surat</h1>
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
	<!-- DataTables Warga -->
	<div class="card shadow mb-4">
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Surat</th>
							<th>Tgl Permohonan</th>
							<th>Status</th>
							<th>Keterangan</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Surat Keterangan Usaha</td>
							<td>11/08/2020</td>
							<td>
								<!-- Emphasis Label -->
								<div>
									<label class="badge badge-warning">
										<i class="far fa-clock"></i> Menunggu Persetujuan RT</label>
								</div>
							</td>
							<td>None</td>
							<td>
								<button class="btn btn-sm btn-info" type="submit">
									<i class="far fa-eye nav-icon"></i>
									Detail
								</button>
							</td>
						</tr>
						<tr>
							<td>2</td>
							<td>Surat Izin Keramaian </td>
							<td>12/08/2020</td>
							<td>
								<!-- Emphasis Label -->
								<div>
									<label class="badge badge-info">
										<i class="far fa-clock"></i> Menunggu Persetujuan Admin</label>
								</div>
							</td>
							<td>None</td>
							<td>
								<button class="btn btn-sm btn-info" type="submit">
									<i class="far fa-eye nav-icon"></i>
									Detail
								</button>
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
