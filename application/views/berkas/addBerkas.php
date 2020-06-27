<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2">Tambah Kelengkapan Berkas</h1>
</div>
<form action="<?= base_url('content/saveBerkas'); ?>" method="post">
    <div class="form-group row">
        <label class="col-lg-2">Nama Jamaah</label>
        <div class="col-lg-6">
            <select name="jamaah_id" class="form-control">
                <?php foreach ($jamaah as $data) { ?>
                    <option value="<?= $data->id ?>"><?= $data->nama_lengkap ?></option>
                <?php } ?>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-2">KTP</label>
        <div class="col-lg-6">
            <input type="text" name="ktp" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-2">Buku Nikah</label>
        <div class="col-lg-6">
            <input type="text" name="buku_nikah" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-2">Akta Kelahiran</label>
        <div class="col-lg-6">
            <input type="text" name="akta_kelahiran" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-2">Ijazah</label>
        <div class="col-lg-6">
            <input type="text" name="ijazah" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-2">Passpor</label>
        <div class="col-lg-6">
            <input type="text" name="passpor" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-2">Kesehatan</label>
        <div class="col-lg-6">
            <input type="text" name="kesehatan" class="form-control">
        </div>
    </div>
    <div class="d-flex flex-row-reverse col-lg-8">
        <div class="btn-group" role="group" aria-label="Basic example">
            <a href="<?= base_url('content/berkas') ?>" class="btn btn-outline-warning">Batal</a>
            <input type="submit" value="Simpan" class="btn btn-success">
        </div>
    </div>
</form>