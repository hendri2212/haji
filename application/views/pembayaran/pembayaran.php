<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2">Pembayaran</h1>
</div>
<?php if ($this->session->userdata("level")=="admin") { ?>
	<a href="<?= base_url('content/addPembayaran') ?>" class="btn btn-info">Tambah Data</a>
	<a href="<?= base_url('content/cetakPembayaran') ?>" class="btn btn-primary"><i data-feather="printer"></i> Export</a>
<?php } ?>
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
				<td><a href="<?= base_url("content/detailPembayaran/$data->jamaah_id") ?>"><?= $data->nama_lengkap ?></a></td>
				<td>Rp <?= number_format($data->jumlah_transfer) ?></td>
				<td>Rp <?= number_format($data->sisa_pembayaran) ?></td>
				<td><?= $data->status_konfirmasi ?></td>
				<td><?= $data->nama_penyetor ?></td>
				<?php if ($this->session->userdata("level")=="admin") { ?>
				<td>
					<a href="<?= base_url('content/editPembayaran/'.$data->id) ?>"><i data-feather="edit"></i></a>
					<a href="<?= base_url('content/deletePembayaran/'.$data->id) ?>" onclick="return confirm('Apakah Anda Yakin ?');" class="text-danger"><i data-feather="trash-2"></i></a>
				</td>
				<?php } ?>
			</tr>
		<?php } ?>
		</tbody>
	</table>
</div>