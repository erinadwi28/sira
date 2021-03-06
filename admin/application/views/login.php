<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />

	<title>SIRA - Login</title>
	<!--Tittle Icon-->
	<link rel="shortcut icon" href="<?= base_url('assets/dashboard/') ?>img/tittle.png" type="image/png" />

	<!-- Custom fonts for this template-->
	<link href="<?= base_url('assets/dashboard/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
	<link
		href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
		rel="stylesheet" />

	<!-- Custom styles for this template-->
	<link href="<?= base_url('assets/dashboard/') ?>css/sb-admin-2.min.css" rel="stylesheet" />
	<link href="<?= base_url('assets/dashboard/') ?>css/validation_login_admin.css" rel="stylesheet" />
</head>

<body class="bg-gradient-primary">
	<div class="container">
		<!-- Outer Row -->
		<div class="row justify-content-center">
			<div class="col-xl-10 col-lg-12 col-md-9">
				<div class="card o-hidden border-0 shadow-lg my-5">
					<div class="card-body p-0">
						<!-- Nested Row within Card Body -->
						<div class="row">
							<div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
							<div class="col-lg-6">
								<div class="p-5">
									
									<?php if ($this->session->flashdata('success')) : ?>
										<div class="alert alert-success alert-dismissible fade show" role="alert">
											<?= $this->session->flashdata('success') ?>
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
									<?php elseif($this->session->flashdata('error')) : ?>
										<div class="alert alert-danger alert-dismissible fade show" role="alert">
											<?= $this->session->flashdata('error') ?>
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
									<?php endif ?>

									<div class="text-center">
										<img src="<?= base_url('assets/dashboard/') ?>img/login_SIRA.png" />
										<!--  <h1 class="h4 text-gray-900 mb-4">LOGIN</h1> -->
									</div>
									
									<form action="<?= base_url('login/aksi_login'); ?>" method="post" id="formLoginAdmin">
										<div class="form-group-login">
											<label>NIK</label>
											<input type="text" class="form-control" id="nik" name="nik"/>
											<i class="fas fa-check-circle"></i>
											<i class="fas fa-exclamation-circle"></i>
											<small> Error Message </small>
										</div>
										<div class="form-group-login">
											<label style="margin-top: 10px;">Kata Sandi</label>
											<input type="password" class="form-control form-password" id="kata_sandi" name="kata_sandi" />
											<input type="checkbox" class="form-checkbox" /> lihat
											kata sandi
											<br />
											<i class="fas fa-check-circle"></i>
											<i class="fas fa-exclamation-circle"></i>
											<small> Error Message </small>
											<input type="hidden" class="form-control" id="status_delete" name="status_delete" value="0" />
										</div>
										<br />
										<button type="submit" class="btn btn-primary btn-user btn-block" id="masuk">
											Login
										</button>
									</form>
									<br>
									<hr />
									<!-- <center><small><a href="<?= base_url('landing_page'); ?>"> <i class="fas fa-arrow-left"></i> Kembali Ke Beranda</a></small></center> -->
								</div>
							</div>
						</div>
					</div>
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
	<script src="<?= base_url('assets/dashboard/') ?>js/validation_login_admin.js"></script>

	

	<script>
		$(document).ready(function () {
			var cek = $(".form-checkbox").val();
			$(".form-checkbox").click(function () {
				if ($(this).is(":checked")) {
					$(".form-password").attr("type", "text");
				} else {
					$(".form-password").attr("type", "password");
				}
			});
		});

	</script>
</body>

</html>
