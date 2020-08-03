<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2">Detail Pembayaran</h1>
</div>
<div class="table-responsive">
	<table class="table table-striped table-hover">
		<thead>
			<tr class="text-nowrap">
				<th class="text-center">No</th>
				<th>Nama Jama'ah</th>
				<th>Tanggal Bayar</th>
				<th>Jumlah Transfer</th>
			</tr>
		</thead>
		<tbody>
            <?php $no = 1; foreach ($detailPembayaran as $data) { ?>
                <tr>
                    <td class="text-center"><?= $no++ ?></td>
                    <td><?= $data->nama_lengkap ?></td>
                    <td><?= $data->tgl_transfer ?></td>
                    <td>Rp <?= number_format($data->jumlah_transfer) ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>