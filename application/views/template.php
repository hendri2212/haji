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
	<div class="p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
		<div class="container">
			<div class="d-flex flex-column flex-md-row align-items-center">
				<!-- <h5 class="my-0 mr-md-auto font-weight-normal">Company name</h5> -->
				<h5 class="my-2 mr-md-auto font-weight-normal">Company name</h5>
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
							<a class="nav-link active" href="#">
							  	<span data-feather="home"></span>
							  	Home
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">
								<span data-feather="log-in"></span>
								Login
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">
								<span data-feather="monitor"></span>
								Pendaftaran
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">
								<span data-feather="dollar-sign"></span>
								Pembayaran
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">
								<span data-feather="file-text"></span>
								Kelengkapan Berkas
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">
								<span data-feather="clock"></span>
								Jadwal Keberangkatan
							</a>
						</li>
					</ul>
				</div>
			</nav>
			<main role="main" class="col-md-8 ml-sm-auto col-lg-9 px-md-4">
				<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
					<h1 class="h2">Dashboard</h1>
					<div class="btn-toolbar mb-2 mb-md-0">
						<div class="btn-group mr-2">
							<input type="text" class="form-control border-secondary" placeholder="Type here">
						</div>
						<input type="button" value="Search" class="btn btn-info">
					</div>
				</div>
				<?php echo $content ?>
			</main>
		</div>
	</div>	
	<p class="text-center">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
	<script>
      feather.replace()
    </script>
</body>
</html>