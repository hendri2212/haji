<div class="d-flex my-2 pb-2 justify-content-end">
    <button class="btn btn-sm btn-primary" onclick="printContent('cetak');"><i data-feather="printer"></i> Cetak Data</button>
</div>
<div id="cetak">
    <!-- <div class="border-bottom"> -->
        <!-- <div class="d-flex pb-2 col-10 mx-auto"> -->
        <div class="d-flex pb-2 border-bottom">
            <img src="<?= base_url('./assets/img/logo.png') ?>" class="logo img-fluid mr-3">
            <div class="col text-center text-uppercase">
                <h4>pelayanan haji</h4>
                <h6>kementerian agama kabupaten kotabaru</h6>
            </div>
        </div>
    <!-- </div> -->
    <h5 class="text-center mt-3 text-uppercase font-weight-bold">data pembayaran</h5>
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
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>