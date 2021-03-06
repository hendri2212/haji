<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2">Edit Akun Jama'ah</h1>
</div>
<form action="<?= base_url('content/updateUser/'.$editUser->id); ?>" method="post">
    <div class="form-group row">
        <label class="col-lg-2">Nama Jamaah</label>
        <div class="col-lg-6">
            <label for=""><?= $editUser->nama_lengkap ?></label>
            <!-- <select name="jamaah_id" class="form-control">
                <option value="<?//= $editUser->id ?>"><?//= $editUser->nama_lengkap ?></option>
                <?php //foreach ($jamaah as $data) { ?>
                    <option value="<?//= $data->id ?>"><?//= $data->nama_lengkap ?></option>
                <?php //} ?>
            </select> -->
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-2">Username</label>
        <div class="col-lg-6">
            <input type="text" name="username" class="form-control" value="<?= $editUser->username ?>">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-2">Password</label>
        <div class="col-lg-6">
            <input type="text" name="password" class="form-control" required>
        </div>
    </div>
    <div class="d-flex flex-row-reverse col-lg-8">
        <div class="btn-group" role="group" aria-label="Basic example">
            <a href="<?= base_url('content/akun') ?>" class="btn btn-outline-warning">Batal</a>
            <input type="submit" value="Update" class="btn btn-success">
        </div>
    </div>
</form>