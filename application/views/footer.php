	<!-- Footer -->
	<footer class="sticky-footer bg-white">
		<div class="container my-auto">
			<div class="copyright text-center my-auto">
				<span>Copyright © sira.com 2020</span>
			</div>
		</div>
	</footer>
	<!-- End of Footer -->
	</div>
	<!-- End of Content Wrapper -->
	</div>
	<!-- End of Page Wrapper -->

	<!-- Scroll to Top Button-->
	<a class="scroll-to-top rounded" href="#page-top" style="display: none;">
		<i class="fas fa-angle-up"></i>
	</a>

	<!-- Logout Modal-->
	<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin Ingin Keluar ?</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					Tekan Logout untuk melanjutkan <br>
					Tekan Cancel untuk membatalkan
				</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">
						Cancel
					</button>
					<a class="btn btn-primary" href="<?= base_url('login/logout') ?>">Logout</a>
				</div>
			</div>
		</div>
	</div>

	<!-- Bootstrap core JavaScript-->
	<script src="<?= base_url('assets/dashboard/') ?>vendor/jquery/jquery.min.js"></script>
	<script src="<?= base_url('assets/dashboard/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Core plugin JavaScript-->
	<script src="<?= base_url('assets/dashboard/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

	<!-- Custom scripts for all pages-->
	<script src="<?= base_url('assets/dashboard/') ?>js/sb-admin-2.min.js"></script>

	<!-- Validasi -->
	<script src="<?= base_url('assets/dashboard/') ?>js/validation.js"></script>

	<!-- ValidasiUbah Profil -->
	<script src="<?= base_url('assets/dashboard/') ?>js/validation_warga.js"></script>

	<!-- Page level plugins -->
	<script src="<?= base_url('assets/dashboard/') ?>vendor/chart.js/Chart.min.js"></script>

	<!-- Page level custom scripts -->
	<script src="<?= base_url('assets/dashboard/') ?>js/demo/chart-area-demo.js"></script>
	<script src="<?= base_url('assets/dashboard/') ?>js/demo/chart-pie-demo.js"></script>

	<!-- Sweet alert -->
	<script src="<?= base_url('assets/dashboard/') ?>js/sweetalert2/dist/sweetalert2.all.min.js"></script>

	<!-- simpan data permohonan -->
	<!-- <script type="text/javascript">
		$('form').on('submit', function(e) {

			e.preventDefault();
			const form = $(this).attr('action');

			// var ambilid = $(this).attr('id_warga');
			// var id_warga = 'id_warga='+ambilid;

			Swal.fire({
				title: 'Apakah anda yakin  ?',
				text: "Data ini sudah benar",
				icon: 'success',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Ya, Simpan Data',
				cancelButtonText: 'Batal',
				reverseButtons: true,
			}).then((result) => {
				if (result.value) {
					document.location.form = form;
				}
			})

		});
	</script> -->

	<!-- tambah data dan hapus data -->
	<script>
		const flashData = $('.flash-data').data('flashdata');
		if (flashData) {
			Swal.fire({
				icon: 'success',
				title: 'Berhasil !',
				text: 'Data berhasil ' + flashData,
				type: 'success'
			});
		}
	</script>



	</body>

	</html>