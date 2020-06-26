<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2">Jadwal Keberangkatan</h1>
</div>
<a href="<?= base_url('content/addJadwal') ?>" class="btn btn-info">Tambah Data</a>
<div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Gelombang</th>
                <th>Keloter</th>
                <th>Tanggal Berangkat</th>
                <th>Tanggal Pulang</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; foreach ($dataJadwal as $data) { ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $data->gelombang ?></td>
                <td><?= $data->kloter ?></td>
                <td><?= $data->tgl_berangkat ?></td>
                <td><?= $data->tgl_pulang ?></td>
                <!-- <td>
                    <a href="<?= base_url('content/editJadwal/'.$data->id) ?>"><i data-feather="edit"></i></a>
                    <a href="<?= base_url('content/deleteJadwal/'.$data->id) ?>" onclick="return confirm('Apakah Anda Yakin ?');" class="text-danger"><i data-feather="trash-2"></i></a>
                </td> -->
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>