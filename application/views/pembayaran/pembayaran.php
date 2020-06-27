<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2">Pembayaran</h1>
</div>
<a href="<?= base_url('content/addPembayaran') ?>" class="btn btn-info">Tambah Data</a>
<div class="table-responsive">
	<table class="table table-striped table-hover">
	  <thead>
	    <tr>
	      <th>No</th>
	      <th>Jumlah Transfer</th>
	      <th>Total Pembayaran</th>
	      <th>Status</th>
	      <th>Status Pembayaran</th>
	    </tr>
	  </thead>
	  <tbody>
      <?php if (empty($dataPembayaran)) { ?>
      <tr>
          <td colspan="5" class="text-center font-weight-bold">NO DATA</td>
      </tr>
      <?php } ?>
      <?php $no=1; foreach ($dataPembayaran as $data) { ?>
	    <tr>
	      <td><?= $no++ ?></td>
	      <td><?= $data->jumlah_transfer ?></td>
	      <td>ipsum</td>
	      <td><?= $data->status_konfirmasi ?></td>
	      <td>ipsum</td>
	    </tr>
      <?php } ?>
	  </tbody>
	</table>
</div>