<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2">Halaman Login</h1>
	<!-- <div class="btn-toolbar mb-2 mb-md-0">
		<div class="btn-group mr-2">
			<input type="text" class="form-control border-secondary" placeholder="Type here">
		</div>
		<input type="button" value="Search" class="btn btn-info">
	</div> -->
</div>
<div class="col-7 mx-auto mt-3">
    <img src="<?= base_url('./assets/img/logo.png') ?>" class="img-fluid w-25 mx-auto d-block">
    <h4 class="text-center text-uppercase mb-3">Kementerian Agama Kotabaru</h4>
	<form action="<?= base_url('./content/masuk') ?>" method="post">
		<input type="text" name="username" placeholder="Ketik ID Jama'ah" class="form-control form-control-lg rounded-0 border-bottom-0 border-secondary">
		<input type="text" name="password" placeholder="Ketik Password" class="form-control form-control-lg rounded-0 border-secondary">
		<input type="submit" name="masuk" value="Masuk" class="btn btn-block btn-success btn-lg rounded-0">
	</form>

	<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#wrong">
		Launch demo modal
	</button> -->
</div>