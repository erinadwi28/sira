<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Arsip Surat Keluar</h1>
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
						<button class="btn btn-sm btn-warning" type="submit">
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
							<th>Nomor Surat</th>
							<th>Tanggal</th>
							<th>Tujuan</th>
							<th>Perihal</th>
							<th>Isi Singkat Surat</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>77/Kw/H/6/2020</td>
							<td>25/08/2020</td>
							<td>Bupati</td>
							<td>Himbauan Pencegahan Penyebaran Covid-19</td>
							<td>Larangan untuk mengadakan kegiatan-kegiatan yang melibatkan banyak
								masyarakat</td>
						</tr>
						<tr>
							<td>2</td>
							<td>77/Kw/H/6/2020</td>
							<td>26/08/2020</td>
							<td>Bupati</td>
							<td>Himbauan Pencegahan Penyebaran Covid-19</td>
							<td>Larangan untuk mengadakan kegiatan-kegiatan yang melibatkan banyak
								masyarakat</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="card-footer">
			<span>
				<button class="btn btn-sm btn-primary float-right ml-1" type="submit"><i class="fa fa-print"></i>
					Cetak</button>
			</span>
		</div>
	</div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
