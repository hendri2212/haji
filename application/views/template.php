<?php defined('BASEPATH') OR exit('No direct script access allowed') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Pendaftaran Jamaah Haji</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('./assets/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('./assets/css/style.css') ?>">
	<script src="<?= base_url('./assets/js/feather.min.js') ?>"></script>
</head>
<body>
	<div class="p-2 px-md-4 mb-3 bg-white border-bottom shadow-sm">
		<div class="container">
			<div class="d-flex align-items-center">
				<img src="<?= base_url('./assets/img/logo.png') ?>" class="logo img-fluid mr-3">
				<div class="">
					<h4 class="mr-md-auto font-weight-normal mb-0 text-uppercase">Website Resmi</h4>
					<h6 class="mr-md-auto font-weight-normal mb-0 text-muted text-uppercase">Kementerian Agama Kabupaten Kotabaru</h6>
				</div>
				<!-- <nav class="my-2 my-md-0 mr-md-3">
					<a class="p-2 text-dark" href="#">Features</a>
					<a class="p-2 text-dark" href="#">Enterprise</a>
					<a class="p-2 text-dark" href="#">Support</a>
					<a class="p-2 text-dark" href="#">Pricing</a>
				</nav>
				<a class="btn btn-outline-primary" href="#">Sign up</a> -->
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<nav id="sidebarMenu" class="col-md-4 col-lg-3 d-md-block bg-light sidebar collapse">
				<div class="sidebar-sticky pt-3">
					<ul class="nav flex-column">
						<li class="nav-item">
							<a class="nav-link active" href="<?= base_url('./content/home') ?>">
								<span data-feather="home"></span>
								Home
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= base_url('./content/login') ?>">
								<span data-feather="log-in"></span>
								Login
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= base_url('./content/pendaftaran') ?>">
								<span data-feather="monitor"></span>
								Pendaftaran
							</a>
						</li>
						<?php if ($this->session->userdata("status")=='success') { ?>
						<li class="nav-item">
							<a class="nav-link" href="<?= base_url('./content/pembayaran') ?>">
								<span data-feather="dollar-sign"></span>
								Pembayaran
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= base_url('./content/berkas') ?>">
								<span data-feather="file-text"></span>
								Kelengkapan Berkas
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= base_url('./content/jadwal') ?>">
								<span data-feather="clock"></span>
								Jadwal Berangkat
							</a>
						</li>
						<?php } ?>
					</ul>
				</div>
			</nav>
			<main role="main" class="col-md-8 ml-sm-auto col-lg-9 px-md-4">
				<?php echo $content ?>
				<!-- <p class="text-center">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p> -->
				<p class="text-center border-top mt-5">Page rendered in <strong>{elapsed_time}</strong> seconds. Powered by <a href="https://tukarjual.com/bio" target="_blank">Hendri Arifin, S.Kom</a></p>
			</main>
		</div>
	</div>	
	<script>
		feather.replace()
    </script>
</body>
</html>