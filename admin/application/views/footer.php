<!-- Footer -->
<footer class="sticky-footer bg-white shadow">
	<div class="container my-auto">
		<div class="copyright text-center my-auto">
			<span>Copyright © siramendawaibersinergi.com 2020</span>
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
<script src="<?= base_url('../assets/dashboard/') ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('../assets/dashboard/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('../assets/dashboard/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('../assets/dashboard/') ?>js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?= base_url('../assets/dashboard/') ?>vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url('../assets/dashboard/') ?>js/demo/chart-area-demo.js"></script>
<script src="<?= base_url('../assets/dashboard/') ?>js/demo/chart-pie-demo.js"></script>

<!-- Page level plugins -->
<script src="<?= base_url('../assets/dashboard/') ?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('../assets/dashboard/') ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url('../assets/dashboard/') ?>js/demo/datatables-demo.js"></script>


<!-- Sweet alert -->
<script src="<?= base_url('../assets/dashboard/') ?>js/sweetalert2/dist/sweetalert2.all.min.js"></script>

<!-- Lightbox Ekko -->
<script src="<?= base_url('../assets/dashboard/') ?>vendor/lightbox/dist/ekko-lightbox.min.js"></script>

<!-- Validation -->
<script src="<?= base_url('assets/dashboard/') ?>js/form_validation.js"></script>
<script src="<?= base_url('assets/dashboard/') ?>js/form_validation_tambah.js"></script>
<script src="<?= base_url('assets/dashboard/') ?>js/validation_upload_foto_admin.js"></script>
<script src="<?= base_url('assets/dashboard/') ?>js/validation_pass.js"></script>
<script src="<?= base_url('assets/dashboard/') ?>js/validation_cek_nik.js"></script>
<script src="<?= base_url('assets/dashboard/') ?>js/validation_ubah_sandi.js"></script>

<!--lihat kata sandi -->
<script>
	$(document).ready(function() {
		var cek = $(".form-checkbox").val();
		$(".form-checkbox").click(function() {
			if ($(this).is(":checked")) {
				$(".form-password").attr("type", "text");
			} else {
				$(".form-password").attr("type", "password");
			}
		});
	});
</script>

<!-- ganti nama form upload foto -->
<script>
	$('#file-upload-profil').change(function() {
		var i = $(this).prev('label').clone();
		var file = $('#file-upload-profil')[0].files[0].name;
		$(this).prev('label').text(file);
	});

	$('#file-upload-ktp').change(function() {
		var i = $(this).prev('label').clone();
		var file = $('#file-upload-ktp')[0].files[0].name;
		$(this).prev('label').text(file);
	});

	$('#file-upload-kk').change(function() {
		var i = $(this).prev('label').clone();
		var file = $('#file-upload-kk')[0].files[0].name;
		$(this).prev('label').text(file);
	});

	$('#file-upload-ttd').change(function() {
		var i = $(this).prev('label').clone();
		var file = $('#file-upload-ttd')[0].files[0].name;
		$(this).prev('label').text(file);
	});
</script>


<!-- tambah data dan hapus data -->
<script>
	const flashData = $('.flash-data').data('flashdata');
	if (flashData) {
		Swal.fire({
			icon: 'success',
			title: 'Berhasil !',
			text: 'Data telah ' + flashData,
			type: 'success'
		});
	}
</script>

<!-- hapus data -->
<script type="text/javascript">
	$('.hapus').on('click', function(e) {

		e.preventDefault();
		const href = $(this).attr('href');

		// var ambilid = $(this).attr('id_warga');
		// var id_warga = 'id_warga='+ambilid;

		Swal.fire({
			title: 'Apakah anda yakin ?',
			text: "Data ini akan dinonaktifkan atau dihapus",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Ya',
			cancelButtonText: 'Tidak',
			reverseButtons: true,
		}).then((result) => {
			if (result.value) {
				document.location.href = href;
			}
		})

	});
</script>
<!-- Script Lightbox Ekko -->
<script>
	$(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });
</script>

<!-- random password form tambah kades -->
<script>

function randomPassword(length) {
	var chars = "ABCDEFGHIJKLMNOPQRSTUVWZYZabcdefghijklmnopqrstuvwxyz1234567890";
	var pass = "";
	for (var x = 0; x < length;x++) {
		var i = Math.floor(Math.random() * chars.length);
		pass += chars.charAt(i);
	}
	return pass;
}

function generate() {
	formTambah.row_password.value = randomPassword(formTambah.length.value);
	// formwarga.row_password.value = randomPassword(formwarga.length.value);
}

</script>

</script>

<!-- random password form tambah warga -->
<script>

function randomPassword1(length) {
	var chars = "ABCDEFGHIJKLMNOPQRSTUVWZYZabcdefghijklmnopqrstuvwxyz1234567890";
	var pass = "";
	for (var x = 0; x < length;x++) {
		var i = Math.floor(Math.random() * chars.length);
		pass += chars.charAt(i);
	}
	return pass;
}

function generate1() {
	// formTambah.row_password.value = randomPassword(formTambah.length.value);
	formwarga.row_password.value = randomPassword(formwarga.length.value);
}

</script>

<!-- random password form tambah rt -->
<script>

function randomPassword2(length) {
	var chars = "ABCDEFGHIJKLMNOPQRSTUVWZYZabcdefghijklmnopqrstuvwxyz1234567890";
	var pass = "";
	for (var x = 0; x < length;x++) {
		var i = Math.floor(Math.random() * chars.length);
		pass += chars.charAt(i);
	}
	return pass;
}

function generate2() {
	// formTambah.row_password.value = randomPassword(formTambah.length.value);
	formrt.row_password.value = randomPassword(formrt.length.value);
}

</script>

</body>

</html>
