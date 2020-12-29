<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="keywords" content="Bootstrap, Landing page, Template, Business, Service" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<meta name="author" content="Grayrids" />
	<title>SIRA - Kelurahan Mendawai</title>
	<!--====== Favicon Icon ======-->
	<link rel="shortcut icon" href="<?= base_url('assets/landing_page/') ?>img/tittle.png" type="image/png" />
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/landing_page/') ?>css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?= base_url('assets/landing_page/') ?>css/animate.css" />
	<link rel="stylesheet" href="<?= base_url('assets/landing_page/') ?>css/LineIcons.css" />
	<link rel="stylesheet" href="<?= base_url('assets/landing_page/') ?>css/owl.carousel.css" />
	<link rel="stylesheet" href="<?= base_url('assets/landing_page/') ?>css/owl.theme.css" />
	<link rel="stylesheet" href="<?= base_url('assets/landing_page/') ?>css/magnific-popup.css" />
	<link rel="stylesheet" href="<?= base_url('assets/landing_page/') ?>css/nivo-lightbox.css" />
	<link rel="stylesheet" href="<?= base_url('assets/landing_page/') ?>css/main.css" />
	<link rel="stylesheet" href="<?= base_url('assets/landing_page/') ?>css/responsive.css" />
	<link rel="stylesheet" href="<?= base_url('assets/landing_page/') ?>css/mantan_carousel.css" />
	<link rel="stylesheet" href="<?= base_url('assets/landing_page/') ?>css/mantan_carousel.css" />
	<!-- Link Swiper's CSS -->
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
</head>

<body>
	<!-- Header Section Start -->
	<header id="home" class="hero-area">
		<div class="overlay">
			<span></span>
			<span></span>
		</div>
		<nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
			<div class="container">
				<a href="#" class="navbar-brand"><img src="<?= base_url('assets/landing_page/') ?>img/logo_SIRA.png" alt="" /></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
					<i class="lni-menu"></i>
				</button>
				<div class="collapse navbar-collapse" id="navbarCollapse">
					<ul class="navbar-nav mr-auto w-100 justify-content-end">
						<li class="nav-item">
							<a class="nav-link page-scroll" href="#home">Beranda</a>
						</li>
						<li class="nav-item">
							<a class="nav-link page-scroll" href="#tatacara">Tata Cara</a>
						</li>
						<li class="nav-item">
							<a class="nav-link page-scroll" href="#features">Surat dan Persyaratannya</a>
						</li>
						<li class="nav-item">
							<a class="nav-link page-scroll" href="#profil">Profil</a>
						</li>
						<li class="nav-item">
							<a class="nav-link page-scroll" href="#contact">Layanan Pengaduan</a>
						</li>
						<li class="nav-item">
							<a class="btn btn-singin" href="<?= base_url('login') ?>">Login</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="container">
			<div class="row space-100">
				<div class="col-lg-6 col-md-12 col-xs-12">
					<div class="contents">
						<h2 class="head-title">Selamat Datang di SIRA</h2>
						<p>
							Sistem Informasi Pelayanan Surat Menyurat Kelurahan Mendawai.
							<br />
							SIRA akan membantu Anda dalam mengajukan permohonan surat secara
							online sehingga lebih cepat dan praktis.
						</p>
						<a href="<?= base_url('login') ?>">
							<button>
								Mulai Buat Surat
							</button>
						</a>
					</div>
				</div>
				<div class="col-lg-6 col-md-12 col-xs-12 p-0">
					<div class="intro-img">
						<img src="<?= base_url('assets/landing_page/') ?>img/header.png" alt="" />
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- Header Section End -->

	<!-- Tata Cara Section Start -->
	<section id="tatacara" class="section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="features-text section-header text-center">
						<div>
							<h2 class="section-title">Tata Cara Penggunaan Aplikasi</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- Start Col -->
				<div class="col-lg-4 col-md-6 col-xs-12">
					<div class="services-item text-center">
						<div class="icon">
							<i class="lni-laptop-phone"></i>
						</div>
						<h4>Login</h4>
						<p>
							Masuk ke akun Anda. Jika Anda baru pertama kali, pastikan untuk
							mengganti kata sandi terlebih dahulu
						</p>
					</div>
				</div>
				<!-- End Col -->
				<!-- Start Col -->
				<div class="col-lg-4 col-md-6 col-xs-12">
					<div class="services-item text-center">
						<div class="icon">
							<i class="lni-keyboard"></i>
						</div>
						<h4>Buat Pengajuan Permohonan Surat</h4>
						<p>
							Pilih surat yang ingin diajukan dan isi formulir dengan lengkap
						</p>
					</div>
				</div>
				<!-- End Col -->
				<!-- Start Col -->
				<div class="col-lg-4 col-md-6 col-xs-12">
					<div class="services-item text-center">
						<div class="icon">
							<i class="lni-printer"></i>
						</div>
						<h4>Cetak Surat</h4>
						<p>
							Jika sudah jadi atau dikirim dari Kelurahan, Anda bisa
							mencetaknya dalam bentuk file pdf
						</p>
					</div>
				</div>
				<!-- End Col -->
			</div>
		</div>
	</section>
	<!-- Tata Cara Section End -->

	<!-- Cool Fetatures Section Start -->
	<section id="features" class="section">
		<div class="container">
			<!-- Start Row -->
			<div class="row">
				<div class="col-lg-12">
					<div class="features-text section-header text-center">
						<div>
							<h2 class="section-title">Surat dan Persyaratannya</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- End Row -->
			<!-- Start Row -->
			<div class="row featured-bg">
				<!-- Start Col -->
				<div class="col-lg-6 col-md-6 col-xs-12 p-0">
					<!-- Start Fetatures -->
					<div class="feature-item featured-border1">
						<div class="feature-icon float-left">
							<i class="lni-files"></i>
						</div>
						<div class="feature-info float-left">
							<h4>Surat Keterangan Usaha</h4>
							<p>KTP, KK</p>
						</div>
					</div>
					<!-- End Fetatures -->
				</div>
				<!-- End Col -->

				<!-- Start Col -->
				<div class="col-lg-6 col-md-6 col-xs-12 p-0">
					<!-- Start Fetatures -->
					<div class="feature-item featured-border1">
						<div class="feature-icon float-left">
							<i class="lni-files"></i>
						</div>
						<div class="feature-info float-left">
							<h4>Surat Keterangan Domisili</h4>
							<p>KTP, KK</p>
						</div>
					</div>
					<!-- End Fetatures -->
				</div>
				<!-- End Col -->

				<!-- Start Col -->
				<div class="col-lg-6 col-md-6 col-xs-12 p-0">
					<!-- Start Fetatures -->
					<div class="feature-item featured-border1">
						<div class="feature-icon float-left">
							<i class="lni-files"></i>
						</div>
						<div class="feature-info float-left">
							<h4>Surat Keterangan Belum Memiliki Rumah</h4>
							<p>KTP</p>
						</div>
					</div>
					<!-- End Fetatures -->
				</div>
				<!-- End Col -->

				<!-- Start Col -->
				<div class="col-lg-6 col-md-6 col-xs-12 p-0">
					<!-- Start Fetatures -->
					<div class="feature-item featured-border1">
						<div class="feature-icon float-left">
							<i class="lni-files"></i>
						</div>
						<div class="feature-info float-left">
							<h4>Surat Keterangan Beda Nama</h4>
							<p>
								KTP, KK, Berkas lain yang mendukung (ijazah, akta lahir, akta
								nikah dan lainnya)
							</p>
						</div>
					</div>
					<!-- End Fetatures -->
				</div>
				<!-- End Col -->

				<!-- Start Col -->
				<div class="col-lg-6 col-md-6 col-xs-12 p-0">
					<!-- Start Fetatures -->
					<div class="feature-item featured-border1">
						<div class="feature-icon float-left">
							<i class="lni-files"></i>
						</div>
						<div class="feature-info float-left">
							<h4>Surat Izin Keramaian</h4>
							<p>KTP, KK</p>
						</div>
					</div>
					<!-- End Fetatures -->
				</div>
				<!-- End Col -->

				<!-- Start Col -->
				<div class="col-lg-6 col-md-6 col-xs-12 p-0">
					<!-- Start Fetatures -->
					<div class="feature-item featured-border1">
						<div class="feature-icon float-left">
							<i class="lni-files"></i>
						</div>
						<div class="feature-info float-left">
							<h4>Surat Keterangan Belum Pernah Menikah</h4>
							<p>KTP, KK</p>
						</div>
					</div>
					<!-- End Fetatures -->
				</div>
				<!-- End Col -->

				<!-- Start Col -->
				<div class="col-lg-6 col-md-6 col-xs-12 p-0">
					<!-- Start Fetatures -->
					<div class="feature-item featured-border1">
						<div class="feature-icon float-left">
							<i class="lni-files"></i>
						</div>
						<div class="feature-info float-left">
							<h4>Surat Keterangan Tidak Mampu</h4>
							<p>KTP, KK</p>
						</div>
					</div>
					<!-- End Fetatures -->
				</div>
				<!-- End Col -->

				<!-- Start Col -->
				<div class="col-lg-6 col-md-6 col-xs-12 p-0">
					<!-- Start Fetatures -->
					<div class="feature-item featured-border1">
						<div class="feature-icon float-left">
							<i class="lni-files"></i>
						</div>
						<div class="feature-info float-left">
							<h4>Surat Keterangan Janda</h4>
							<p>KTP, KK, Surat Keterangan Kematian atau Surat Cerai</p>
						</div>
					</div>
					<!-- End Fetatures -->
				</div>
				<!-- End Col -->

				<!-- Start Col -->
				<div class="col-lg-6 col-md-6 col-xs-12 p-0">
					<!-- Start Fetatures -->
					<div class="feature-item featured-border1">
						<div class="feature-icon float-left">
							<i class="lni-files"></i>
						</div>
						<div class="feature-info float-left">
							<h4>Surat Keterangan Kepemilikan Tanah</h4>
							<p>KTP, KK, KTP Saksi, Butki PBB</p>
						</div>
					</div>
					<!-- End Fetatures -->
				</div>
				<!-- End Col -->

				<!-- Start Col -->
				<div class="col-lg-6 col-md-6 col-xs-12 p-0">
					<!-- Start Fetatures -->
					<div class="feature-item featured-border1">
						<div class="feature-icon float-left">
							<i class="lni-files"></i>
						</div>
						<div class="feature-info float-left">
							<h4>Surat Keterangan Ahli Waris</h4>
							<p>KTP, KK</p>
						</div>
					</div>
					<!-- End Fetatures -->
				</div>
				<!-- End Col -->

				<!-- Start Col -->
				<div class="col-lg-6 col-md-6 col-xs-12 p-0">
					<!-- Start Fetatures -->
					<div class="feature-item featured-border1">
						<div class="feature-icon float-left">
							<i class="lni-files"></i>
						</div>
						<div class="feature-info float-left">
							<h4>Surat Pernyataan Penyerahan Waris</h4>
							<p>KTP, KK</p>
						</div>
					</div>
					<!-- End Fetatures -->
				</div>
				<!-- End Col -->

				<!-- Start Col -->
				<div class="col-lg-6 col-md-6 col-xs-12 p-0">
					<!-- Start Fetatures -->
					<div class="feature-item featured-border1">
						<div class="feature-icon float-left">
							<i class="lni-files"></i>
						</div>
						<div class="feature-info float-left">
							<h4>Surat Keterangan Pindah</h4>
							<p>KTP, KK</p>
						</div>
					</div>
					<!-- End Fetatures -->
				</div>
				<!-- End Col -->

				<!-- Start Col -->
				<div class="col-lg-6 col-md-6 col-xs-12 p-0">
					<!-- Start Fetatures -->
					<div class="feature-item featured-border1">
						<div class="feature-icon float-left">
							<i class="lni-files"></i>
						</div>
						<div class="feature-info float-left">
							<h4>Surat Penyerahan Sebidang Tanah</h4>
							<p>KTP, KK</p>
						</div>
					</div>
					<!-- End Fetatures -->
				</div>
				<!-- End Col -->

				<!-- Start Col -->
				<div class="col-lg-6 col-md-6 col-xs-12 p-0">
					<!-- Start Fetatures -->
					<div class="feature-item featured-border1">
						<div class="feature-icon float-left">
							<i class="lni-files"></i>
						</div>
						<div class="feature-info float-left">
							<h4>Surat Keterangan Kematian</h4>
							<p>
								KTP(Orang Yang Meninggal, Pelapor, Saksi), KK (Orang yang
								meninggal dan pelapor), Surat Keterangan Kematian dari RS atau
								dokter
							</p>
						</div>
					</div>
					<!-- End Fetatures -->
				</div>
				<!-- End Col -->

				<!-- Start Col -->
				<div class="col-lg-6 col-md-6 col-xs-12 p-0">
					<!-- Start Fetatures -->
					<div class="feature-item featured-border1">
						<div class="feature-icon float-left">
							<i class="lni-files"></i>
						</div>
						<div class="feature-info float-left">
							<h4>Surat Keterangan Kelahiran</h4>
							<p>KTP, KK, Akta Nikah</p>
						</div>
					</div>
					<!-- End Fetatures -->
				</div>
				<!-- End Col -->

				<!-- Start Col -->
				<div class="col-lg-6 col-md-6 col-xs-12 p-0">
					<!-- Start Fetatures -->
					<div class="feature-item featured-border1">
						<div class="feature-icon float-left">
							<i class="lni-files"></i>
						</div>
						<div class="feature-info float-left">
							<h4>Surat Pengantar KTP</h4>
							<p>KK, Akta Kelahiran</p>
						</div>
					</div>
					<!-- End Fetatures -->
				</div>
				<!-- End Col -->

				<!-- Start Col -->
				<div class="col-lg-6 col-md-6 col-xs-12 p-0">
					<!-- Start Fetatures -->
					<div class="feature-item featured-border1">
						<div class="feature-icon float-left">
							<i class="lni-files"></i>
						</div>
						<div class="feature-info float-left">
							<h4>Surat Pengantar KK</h4>
							<p>KTP, Buku Nikah/Akta Perkawinan</p>
						</div>
					</div>
					<!-- End Fetatures -->
				</div>
				<!-- End Col -->

				<!-- Start Col -->
				<div class="col-lg-6 col-md-6 col-xs-12 p-0">
					<!-- Start Fetatures -->
					<div class="feature-item featured-border1">
						<div class="feature-icon float-left">
							<i class="lni-files"></i>
						</div>
						<div class="feature-info float-left">
							<h4>Surat Pengantar Nikah</h4>
							<p>
								Surat Pernyataan Belum Pernah Menikah/Pernah Menikah, KTP, KK,
								Akta Kelahiran, Ijazah Terakhir, Surat Nikah Orang Tua/Akta
								Cerai, KK & KTP Pasangan
							</p>
						</div>
					</div>
					<!-- End Fetatures -->
				</div>
				<!-- End Col -->

				<!-- Start Col -->
				<div class="col-lg-6 col-md-6 col-xs-12 p-0">
					<!-- Start Fetatures -->
					<div class="feature-item featured-border1">
						<div class="feature-icon float-left">
							<i class="lni-files"></i>
						</div>
						<div class="feature-info float-left">
							<h4>Surat Keterangan Penghasilan</h4>
							<p>KTP, KK</p>
						</div>
					</div>
					<!-- End Fetatures -->
				</div>
				<!-- End Col -->

				<!-- Start Col -->
				<div class="col-lg-6 col-md-6 col-xs-12 p-0">
					<!-- Start Fetatures -->
					<div class="feature-item featured-border1">
						<div class="feature-icon float-left">
							<i class="lni-files"></i>
						</div>
						<div class="feature-info float-left">
							<h4>Surat Rekomendasi Izin Mendirikan Bangunan</h4>
							<p>
								KTP, NPWP, SPPT, Bukti Pembayaran PBB, Sertifikat Hak Milik
							</p>
						</div>
					</div>
					<!-- End Fetatures -->
				</div>
				<!-- End Col -->

				<!-- Start Col -->
				<div class="col-lg-6 col-md-6 col-xs-12 p-0">
					<!-- Start Fetatures -->
					<div class="feature-item featured-border1">
						<div class="feature-icon float-left">
							<i class="lni-files"></i>
						</div>
						<div class="feature-info float-left">
							<h4>Surat Keterangan Belum Pernah Menikah</h4>
							<p>KTP, KK</p>
						</div>
					</div>
					<!-- End Fetatures -->
				</div>
				<!-- End Col -->

				<!-- Start Col -->
				<div class="col-lg-6 col-md-6 col-xs-12 p-0">
					<!-- Start Fetatures -->
					<div class="feature-item featured-border1">
						<div class="feature-icon float-left">
							<i class="lni-files"></i>
						</div>
						<div class="feature-info float-left">
							<h4>Surat Keterangan Izin Usaha Mikro</h4>
							<p>KTP, KK</p>
						</div>
					</div>
					<!-- End Fetatures -->
				</div>
				<!-- End Col -->
			</div>
			<!-- End Row -->
		</div>
	</section>
	<!-- Cool Fetatures Section End -->

	<!-- Profil Section -->
	<section id="profil" class="section">
		<!-- Container Starts -->
		<div class="container">
			<!-- Start Row -->
			<div class="row">
				<div class="col-lg-12">
					<div class="contact-text section-header text-center">
						<h2 class="section-title">Profil Kelurahan Mendawai</h2>
					</div>
				</div>
			</div>
			<!-- End Row -->
			<!-- Start Row -->
			<?php foreach ($data_kades as $kades) { ?>
				<div class="row">
					<!-- Start Col -->
					<div class="col-lg-6 col-md-12">
						<p style="text-align: justify;">
							Kelurahan Mendawai adalah sebuah kelurahan atau pembagian wilayah
							administratif di Indonesia dibawah Kecamatan Arut Selatan yang
							tepatnya terletak di Jln. Dewan Amir Husin Hamzah Nomor : 22,
							Kelurahan Mendawai, Kecamatan Arut Selatan, Kabupaten Kotawaringin
							Barat, Provinsi Kalimantan Tengah dengan populasi penduduk sebanyak &#177; 11.000
							yang terbagi dalam 30 Rukun Tetangga. Saat ini Kelurahan Mendawai dipimpin
							oleh <?= $kades->nama; ?>.
						</p>
					</div>
					<!-- End Col -->
					<!-- Start Col -->
					<div class="col-lg-1"></div>
					<!-- End Col -->
					<!-- Start Col -->
					<div class="col-lg-4 col-md-12">
						<div class="contact-img">
							<center>
								<figure>
									<img src="<?= base_url(); ?>/assets/uploads/kades/<?= $kades->foto_profil_kades; ?>" alt="foto profil" class="img-fluid img-thumbnail shadow mb-3" width="300px">
									<center>
										<figcaption>Lurah Kelurahan Mendawai</figcaption>
									</center>
								</figure>
							</center>

						</div>
					</div>
					<!-- End Col -->
					<!-- Start Col -->
					<div class="col-lg-1"></div>
					<!-- End Col -->
				</div>
				<!-- End Row -->
			<?php } ?>
		</div>
	</section>
	<!-- Contact Us Section End -->
	<section id="mantan_lurah" class="section">
		<!-- <div class="container">
			<div class="row">
				<div class="col-md-12"> -->
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<?php
				$no = 1;
				foreach ($data_mantan_kades as $mantan_kades) { ?>
					<div class="swiper-slide">
						<div class="img-area"><img src="<?= base_url(); ?>/assets/uploads/kades/<?= $mantan_kades->foto_profil_kades; ?>" alt=""></div>
						<div class="img-text">
							<h2><u><?php echo $mantan_kades->nama ?></u></h2>
							<p><?= date("Y", strtotime($mantan_kades->masa_awal_jabatan)); ?> - <?= date("Y", strtotime($mantan_kades->tanggal_dinonaktifkan)); ?></p>
						</div>
					</div>
				<?php } ?>
			</div>
			<div class="swiper-pagination"></div>
		</div>
		<!-- Add Pagination -->




		<!-- <div class="carousel slide" id="carouselExampleIndicators" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						</ol>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<div class="row">
									<?php
									$no = 1;
									foreach ($data_mantan_kades as $mantan_kades) { ?>
										<div class="col-md-4">
											<div class="single-box">
												<div class="img-area"><img src="<?= base_url(); ?>/assets/uploads/kades/<?= $mantan_kades->foto_profil_kades; ?>" alt=""></div>
												<div class="img-text">
													<h2><u><?php echo $mantan_kades->nama ?></u></h2>
													<p><?= date("Y", strtotime($mantan_kades->masa_awal_jabatan)); ?> - <?= date("Y", strtotime($mantan_kades->tanggal_dinonaktifkan)); ?></p>
												</div>
											</div>
										</div>
									<?php } ?>
								</div>
							</div>
							<div class="carousel-item">
								<div class="row">
									<div class="col-md-4">
										<div class="single-box">
											<div class="img-area"><img src="<?= base_url('assets/landing_page/') ?>img/4.jpg" alt=""></div>
											<div class="img-text">
												<h2>Rahma Maulani</h2>
												<p>2010 - 2015</p>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="single-box">
											<div class="img-area"><img src="<?= base_url('assets/landing_page/') ?>img/5.jpg" alt=""></div>
											<div class="img-text">
												<h2>Rahma Maulani</h2>
												<p>2010 - 2015</p>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="single-box">
											<div class="img-area"><img src="<?= base_url('assets/landing_page/') ?>img/6.jpg" alt=""></div>
											<div class="img-text">
												<h2>Rahma Maulani</h2>
												<p>2010 - 2015</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> -->
		<!-- </div>
			</div>
		</div> -->
	</section>

	<!-- Contact Us Section -->
	<section id="contact" class="section">
		<!-- Container Starts -->
		<div class="container">
			<!-- Start Row -->
			<div class="row">
				<div class="col-lg-12">
					<div class="contact-text section-header text-center">
						<div>
							<h2 class="section-title">Layanan Pengaduan</h2>
							<div class="desc-text">
								<p>
									Jika Anda mendapati masalah dalam penggunaan aplikasi ini atau ada permasalahan di lingkungan masyarakat.
									Anda dapat melaporkan kepada kami melalui layanan ini agar dapat segera kami tangani.
								</p>
								<p>
									Anda juga boleh untuk meninggalkan kesan dan pesan agar
									SIRA lebih baik lagi kedepannya
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Row -->
			<div class="row">
				<div class="col-md-12">
					<div class="flash-data" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>
					<?php if ($this->session->flashdata('success')) : ?>
					<?php endif; ?>
				</div>
			</div>
			<!-- Start Row -->
			<div class="row">
				<!-- Start Col -->
				<div class="col-lg-6 col-md-12">
					<form id="contactForm" action="<?= base_url('landing_page/aksi_tambah_feedback') ?>" method="POST">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" class="form-control-input" id="nama" name="nama" required data-error="masukkan nama anda" />
									<label class="label-control" for="nama">Nama</label>
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" id="no_hp" class="form-control-input" name="no_hp" required data-error="masukkan no hp anda" />
									<label class="label-control" for="no_hp">No HandPhone</label>
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<textarea class="form-control-input" id="isi" name="isi" rows="4" data-error="Write your message" required></textarea>
									<label class="label-control" for="isi">Kesan atau Pesan</label>
									<div class="help-block with-errors"></div>
								</div>
								<div class="submit-button">
									<button class="btn btn-common" id="submit" type="submit">
										Kirim
									</button>
									<div id="submit" class="h3 hidden"></div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</form>
				</div>
				<!-- End Col -->
				<!-- Start Col -->
				<div class="col-lg-1"></div>
				<!-- End Col -->
				<!-- Start Col -->
				<div class="col-lg-4 col-md-12">
					<div class="contact-img">
						<img src="<?= base_url('assets/landing_page/') ?>img/hubungi.png" class="img-fluid" alt="" />
					</div>
				</div>
				<!-- End Col -->
				<!-- Start Col -->
				<div class="col-lg-1"></div>
				<!-- End Col -->
			</div>
			<!-- End Row -->
		</div>
	</section>
	<!-- Contact Us Section End -->

	<!-- Footer Section Start -->
	<footer>
		<!-- Footer Area Start -->
		<section id="footer-Content">
			<div class="container">
				<!-- Start Row -->
				<div class="row">
					<!-- Start Col -->
					<div class="col-md-3">
						<div class="footer-logo">
							<img src="<?= base_url('assets/landing_page/') ?>img/logo_SIRA.png" alt="" />
						</div>
					</div>
					<!-- End Col -->

					<!-- Start Col -->
					<div class="col-md-4">
						<div class="widget">
							<h3 class="block-title">Menu</h3>
							<ul class="menu">
								<li><a href="#home"> - Beranda</a></li>
								<li><a href="#tatacara">- Tata Cara</a></li>
								<li><a href="#featrures">- Surat dan Persyaratannya</a></li>
								<li><a href="#profil">- Profil</a></li>
								<li><a href="#contact">- Layanan Pengaduan</a></li>
							</ul>
						</div>
					</div>
					<!-- End Col -->
					<!-- Start Col -->
					<div class="col-md-5">
						<div class="widget">
							<h3 class="block-title">Kelurahan Mendawai</h3>
							<p>
								<i class="lni-map-marker"></i> Jln. Dewan Amir Husin Hamzah
								Nomor : 22, Kelurahan Mendawai, Kecamatan Arut Selatan,
								Kabupaten Kotawaringin Barat, Provinsi Kalimantan Tengah,
								74110
							</p>
							<p><i class="lni-comment-alt"></i> mendawaibersinergi84@gmail.com</p>
							<p><i class="lni-facebook-filled"></i> Kelurahan Mendawai</p>
						</div>
					</div>
					<!-- End Col -->
				</div>
				<!-- End Row -->
			</div>
			<!-- Copyright Start  -->

			<div class="copyright">
				<div class="container">
					<!-- Star Row -->
					<div class="row">
						<div class="col-md-12">
							<div class="site-info text-center">
								<p>Copyright &copy; 2020 siramendawaibersinergi.com</p>
							</div>
						</div>
						<!-- End Col -->
					</div>
					<!-- End Row -->
				</div>
			</div>
			<!-- Copyright End -->
		</section>
		<!-- Footer area End -->
	</footer>
	<!-- Footer Section End -->

	<!-- Go To Top Link -->
	<a href="#" class="back-to-top">
		<i class="lni-chevron-up"></i>
	</a>

	<!-- Preloader -->
	<div id="preloader">
		<div class="loader" id="loader-1"></div>
	</div>
	<!-- End Preloader -->

	<!-- jQuery first, then Tether, then Bootstrap JS. -->
	<script src="<?= base_url('assets/landing_page/') ?>js/jquery-min.js"></script>
	<script src="<?= base_url('assets/landing_page/') ?>js/popper.min.js"></script>
	<script src="<?= base_url('assets/landing_page/') ?>js/bootstrap.min.js"></script>
	<script src="<?= base_url('assets/landing_page/') ?>js/owl.carousel.js"></script>
	<script src="<?= base_url('assets/landing_page/') ?>js/jquery.nav.js"></script>
	<script src="<?= base_url('assets/landing_page/') ?>js/scrolling-nav.js"></script>
	<script src="<?= base_url('assets/landing_page/') ?>js/jquery.easing.min.js"></script>
	<script src="<?= base_url('assets/landing_page/') ?>js/nivo-lightbox.js"></script>
	<script src="<?= base_url('assets/landing_page/') ?>js/jquery.magnific-popup.min.js"></script>
	<!-- <script src="<?= base_url('assets/landing_page/') ?>js/form-validator.min.js"></script> -->
	<!-- <script src="<?= base_url('assets/landing_page/') ?>js/contact-form-script.js"></script> -->
	<script src="<?= base_url('assets/landing_page/') ?>js/main.js"></script>

	<!-- Sweet alert -->
	<script src="<?= base_url('assets/dashboard/') ?>js/sweetalert2/dist/sweetalert2.all.min.js"></script>

	<!-- tambah data -->
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
	<!-- Swiper JS -->
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

	<!-- Initialize Swiper -->
	<script>
		var swiper = new Swiper('.swiper-container', {
			slidesPerView: 3,
			spaceBetween: 15,
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
			},
		});
	</script>
</body>

</html>