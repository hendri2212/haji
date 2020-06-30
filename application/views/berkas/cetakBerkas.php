<div class="d-flex my-2 pb-2 justify-content-end">
    <div class="btn-group" role="group" aria-label="Basic example">
        <button class="btn btn-sm btn-primary" onclick="printContent('cetak');"><i data-feather="printer"></i> Cetak Data</button>
        <a href="<?= base_url('content/berkas') ?>" class="btn btn-sm btn-outline-warning">Batal</a>
    </div>
</div>
<div id="cetak">
    <div class="d-flex pb-2 border-bottom">
        <img src="<?= base_url('./assets/img/logo.png') ?>" class="logo img-fluid mr-3">
        <div class="col text-center text-uppercase">
            <h4>pelayanan haji</h4>
            <h6>kementerian agama kabupaten kotabaru</h6>
        </div>
    </div>
    <h5 class="text-center mt-3 text-uppercase font-weight-bold">data berkas</h5>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Jama'ah</th>
                <th>KTP</th>
                <th>Buku Nikah</th>
                <th>Akta</th>
                <th>Ijazah</th>
                <th>Passpor</th>
                <th>Kesehatan</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($dataBerkas)) { ?>
            <tr>
                <td colspan="8" class="text-center font-weight-bold">NO DATA</td>
            </tr>
            <?php } ?>
            <?php $no=1; foreach ($dataBerkas as $data) { ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $data->nama_lengkap ?></td>
                <td><?= $data->ktp ?></td>
                <td><?= $data->buku_nikah ?></td>
                <td><?= $data->akta_kelahiran ?></td>
                <td><?= $data->ijazah ?></td>
                <td><?= $data->passpor ?></td>
                <td><?= $data->kesehatan ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>