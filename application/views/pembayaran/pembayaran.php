<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2">Pembayaran</h1>
</div>
<a href="<?= base_url('content/addPembayaran') ?>" class="btn btn-info">Tambah Data</a>
<div class="table-responsive">
	<table class="table table-striped table-hover">
	  <thead>
	    <tr class="text-nowrap">
	    	<th>No</th>
        	<th>Nama Jama'ah</th>
	    	<th>Jumlah Transfer</th>
	    	<th>Total Pembayaran</th>
	    	<th>Status</th>
	    	<th>Status Pembayaran</th>
	    </tr>
	  </thead>
	  <tbody>
      <?php if (empty($dataPembayaran)) { ?>
      <tr>
          <td colspan="6" class="text-center font-weight-bold">NO DATA</td>
      </tr>
      <?php } ?>
      <?php $no=1; foreach ($dataPembayaran as $data) { ?>
	    <tr>
	    	<td><?= $no++ ?></td>
            <td><?= $data->nama_lengkap ?></td>
	    	<td>Rp <?= number_format($data->jumlah_transfer) ?></td>
	    	<td>Rp <?= number_format($data->sisa_pembayaran) ?></td>
	    	<td><?= $data->status_konfirmasi ?></td>
	    	<td><?= $data->nama_penyetor ?></td>
			<td>
				<!-- <a href="<?= base_url('content/editJadwal/'.$data->id) ?>"><i data-feather="edit"></i></a> -->
				<a href="<?= base_url('content/deletePembayaran/'.$data->id) ?>" onclick="return confirm('Apakah Anda Yakin ?');" class="text-danger"><i data-feather="trash-2"></i></a>
			</td>
	    </tr>
      <?php } ?>
	  </tbody>
	</table>
</div>