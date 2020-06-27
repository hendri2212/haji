<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2">Kelengkapan Berkas</h1>
</div>
<a href="<?= base_url('content/addBerkas') ?>" class="btn btn-info">Tambah Data</a>
<div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>KTP</th>
                <th>Buku Nikah</th>
                <th>Akta</th>
                <th>Ijazah</th>
                <th>Passpor</th>
                <th>Kesetahan</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($dataBerkas)) { ?>
            <tr>
                <td colspan="7" class="text-center font-weight-bold">NO DATA</td>
            </tr>
            <?php } ?>
            <?php $no=1; foreach ($dataBerkas as $data) { ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $data->ktp ?></td>
                <td><?= $data->buku_nikah ?></td>
                <td><?= $data->akta_kelahiran ?></td>
                <td><?= $data->ijazah ?></td>
                <td><?= $data->passpor ?></td>
                <td><?= $data->kesehatan ?></td>
                <!-- <td>
                    <a href="<?= base_url('content/editJadwal/'.$data->id) ?>"><i data-feather="edit"></i></a>
                    <a href="<?= base_url('content/deleteJadwal/'.$data->id) ?>" onclick="return confirm('Apakah Anda Yakin ?');" class="text-danger"><i data-feather="trash-2"></i></a>
                </td> -->
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>