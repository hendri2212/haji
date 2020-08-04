<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h2>Data Akun Jamaah</h2>
</div>
<a href="<?= base_url('content/addUser') ?>" class="btn btn-info">Tambah Data</a>
<a href="<?= base_url('content/cetakUser') ?>" class="btn btn-primary"><i data-feather="printer"></i> Export</a>

<div class="table-responsive">
    <table class="table table-hover table-stripped">
        <thead>
            <tr class="text-nowrap">
                <th>No</th>
                <th>Nama Jama'ah</th>
                <th>Username</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; foreach ($user as $data) { ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $data->nama_lengkap ?></td>
                    <!-- <td><?= $data->full_name ?></td> -->
                    <td><?= $data->username ?></td>
                    <td>
                        <a href="<?= base_url('content/editUser/'.$data->id) ?>"><i data-feather="edit"></i></a>
                        <a href="<?= base_url('content/deleteUser/'.$data->id) ?>" onclick="return confirm('Apakah Anda Yakin ?');" class="text-danger"><i data-feather="trash-2"></i></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>