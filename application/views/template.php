<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	$status = $this->session->userdata("status");
?>
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
	<div class="p-2 px-md-4 mb-3 bg-info border-bottom shadow-sm">
		<div class="container">
			<div class="d-flex align-items-center">
				<img src="<?= base_url('./assets/img/logo.png') ?>" class="logo img-fluid mr-3">
				<div class="">
					<h4 class="mr-md-auto font-weight-normal mb-0 text-white text-uppercase">Website pelayanan haji</h4>
					<h6 class="mr-md-auto font-weight-normal mb-0 text-white text-uppercase">Kementerian Agama Kabupaten Kotabaru</h6>
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
						<?php if ($status!="success") { ?>
						<li class="nav-item">
							<a class="nav-link" href="<?= base_url('./content/login') ?>">
								<span data-feather="log-in"></span>
								Login
							</a>
						</li>
						<?php } ?>
						<?php if ($status=="success") { ?>
						<li class="nav-item">
							<a class="nav-link" href="<?= base_url('./content/pendaftaran') ?>">
								<span data-feather="monitor"></span>
								Pendaftaran
							</a>
						</li>
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
						<li class="nav-item">
							<a class="nav-link" href="<?= base_url('./content/logout') ?>">
								<span data-feather="log-out"></span>
								Log Out
							</a>
						</li>
						<?php } ?>
					</ul>
				</div>
			</nav>
			<main role="main" class="col-md-8 ml-sm-auto col-lg-9 px-md-4">
				<?php echo $content ?>
				<!-- <p class="text-center">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p> -->
				<!-- <p class="text-center border-top mt-5">Page rendered in <strong>{elapsed_time}</strong> seconds. Powered by <a href="https://tukarjual.com/bio" target="_blank">Hendri Arifin, S.Kom</a></p> -->
				<p class="text-center border-top mt-5"><a href="https://tukarjual.com/bio" target="_blank">STIMIK Copyright 2020</a></p>
			</main>
		</div>
	</div>

	<!-- <div class="modal fade" tabindex="-1" role="dialog" id="wrong">
		<div class="modal-dialog modal-dialog-centered modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Login Gagal</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p class="text-center">username atau password Anda salah</p>
				</div>
			</div>
		</div>
	</div> -->
	<script src="<?= base_url('./assets/js/nicEdit.js') ?>"></script>
	<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
						
	<script src="<?= base_url('./assets/js/jquery.min.js') ?>"></script>
	<script src="<?= base_url('./assets/js/popper.min.js') ?>"></script>
	<script src="<?= base_url('./assets/js/bootstrap.min.js') ?>"></script>
	<script>
		feather.replace()
    </script>
</body>
</html>