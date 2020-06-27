<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2">Tambah Jadwal Keberangkatan</h1>
</div>
<form action="<?= base_url('./content/schedule') ?>" method="post">
    <div class="form-group row">
        <label class="col-lg-3">Nama Jamaah</label>
        <div class="col-lg-6">
            <select name="jamaah_id" class="form-control">
                <?php foreach ($jamaah as $data) { ?>
                    <option value="<?= $data->id ?>"><?= $data->nama_lengkap ?></option>
                <?php } ?>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-3">Gelombang</label>
        <div class="col-lg-6">
            <input type="text" name="gelombang" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-3">Keloter</label>
        <div class="col-lg-6">
            <input type="text" name="kloter" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-3">Tanggal Berangkat</label>
        <div class="col-lg-6">
            <input type="date" name="tgl_berangkat" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-3">Tanggal Pulang</label>
        <div class="col-lg-6">
            <input type="date" name="tgl_pulang" class="form-control">
        </div>
    </div>
    <div class="d-flex flex-row-reverse col-lg-9">
        <div class="btn-group" role="group" aria-label="Basic example">
            <a href="<?= base_url('content/jadwal') ?>" class="btn btn-outline-warning">Batal</a>
            <input type="submit" name="schedule" value="Simpan" class="btn btn-success">
        </div>
    </div>
</form>