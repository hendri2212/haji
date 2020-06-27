<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2">Halaman Pendaftaran</h1>
</div>
<a href="<?= base_url('content/addPendaftaran') ?>" class="btn btn-info">Tambah Data</a>
<table class="table table-responsive table-hover table-stripped text-nowrap">
    <thead>
        <tr>
            <th>No</th>
            <th>No. Porsi</th>
            <th>No. Validasi</th>
            <th>No. KTP</th>
            <th>Nama Lengkap</th>
            <th>Nama Ayah</th>
            <th>Tanggal Lahir/th>
            <th>Jenis - Kelamin</th>
            <th>Kewarganegaraan</th>
            <th>Alamat</th>
            <th>Desa</th>
            <th>Kecamatan</th>
            <th>Kabupaten</th>
            <th>Provinsi</th>
            <th>Kode Pos</th>
            <th>No. Handphone</th>
            <th>Pendidikan</th>
            <th>Pekerjaan</th>
            <th>Pergi Haji</th>
            <th>Status Jama'ah</th>
            <th>Gol. Darah</th>
            <th>Status Pernikahan</th>
            <th>Kode Diagnosis</th>
            <th>Ciri - Ciri</th>
            <th>Tanggal Set</th>
            <th>Nama Bank</th>
            <th>Rekening</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; foreach ($jamaah as $data) { ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $data->no_porsi ?></td>
            <td><?= $data->no_validasi ?></td>
            <td><?= $data->no_ktp ?></td>
            <td><?= $data->nama_lengkap ?></td>
            <td><?= $data->nama_ayah ?></td>
            <td><?= $data->ttl ?></td>
            <td><?= $data->jenis_kelamin ?></td>
            <td><?= $data->kewarganegaraan ?></td>
            <td><?= $data->alamat ?></td>
            <td><?= $data->desa ?></td>
            <td><?= $data->kecamatan ?></td>
            <td><?= $data->kabupaten ?></td>
            <td><?= $data->provinsi ?></td>
            <td><?= $data->kode_pos ?></td>
            <td><?= $data->no_hp ?></td>
            <td><?= $data->pendidikan ?></td>
            <td><?= $data->pekerjaan ?></td>
            <td><?= $data->pergi_haji ?></td>
            <td><?= $data->status_jamaah ?></td>
            <td><?= $data->gol_darah ?></td>
            <td><?= $data->status_pernikahan ?></td>
            <td><?= $data->kode_diagnosis ?></td>
            <td><?= $data->ciri_ciri ?></td>
            <td><?= $data->tgl_set ?></td>
            <td><?= $data->nama_bank ?></td>
            <td><?= $data->rekening ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>