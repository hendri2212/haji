<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2">Jadwal Keberangkatan</h1>
</div>
<?php if ($this->session->userdata("level")=="admin") { ?>
    <a href="<?= base_url('content/addJadwal') ?>" class="btn btn-info">Tambah Data</a>
    <a href="<?= base_url('content/cetakJadwal') ?>" class="btn btn-primary"><i data-feather="printer"></i> Export</a>
<?php } ?>
<div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Jama'ah</th>
                <th class="text-right">Umur Jama'ah</th>
                <th class="text-center">Gelombang</th>
                <th class="text-center">Keloter</th>
                <th>Prediksi Pergi Haji</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($dataJadwal)) { ?>
            <tr>
                <td colspan="6" class="text-center font-weight-bold">NO DATA</td>
            </tr>
            <?php } ?>
            <?php $no=1; foreach ($dataJadwal as $data) { ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $data->nama_lengkap ?></td>
                <td class="text-right"><?= date("Y")-date("Y", strtotime($data->ttl)) ?> Tahun</td>
                <td class="text-center"><?= $data->gelombang ?></td>
                <td class="text-center"><?= $data->kloter ?></td>
                <td><?= $data->tgl_berangkat ?></td>
                <td>
                    <!-- <a href="<?= base_url('content/editJadwal/'.$data->id) ?>"><i data-feather="edit"></i></a> -->
                    <a href="<?= base_url('content/deleteJadwal/'.$data->id) ?>" onclick="return confirm('Apakah Anda Yakin ?');" class="text-danger"><i data-feather="trash-2"></i></a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>