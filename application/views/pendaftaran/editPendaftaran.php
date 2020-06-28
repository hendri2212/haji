<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2">Tambah Halaman Pendaftaran</h1>
</div>
<form action="<?= base_url('./content/updateJamaah/'.$editJamaah->id) ?>" method="post" class="text-nowrap">
    <div class="d-flex flex-row-reverse">
        <div class="form-group text-center border p-2">
            <label>No. Porsi</label>
            <input type="text" name="no_porsi" value="<?= $editJamaah->no_porsi ?>" class="form-control form-control-lg">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-2">No. Validasi</label>
        <div class="col-lg-6">
            <input type="text" name="no_validasi" value="<?= $editJamaah->no_validasi ?>" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-2">No. KTP</label>
        <div class="col-lg-6">
            <input type="number" name="no_ktp" value="<?= $editJamaah->no_ktp ?>" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-2">Nama Lengkap</label>
        <div class="col-lg-6">
            <input type="text" name="nama_lengkap" value="<?= $editJamaah->nama_lengkap ?>" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-2">Nama Ayah</label>
        <div class="col-lg-6">
            <input type="text" name="nama_ayah" value="<?= $editJamaah->nama_ayah ?>" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-2">TTL</label>
        <div class="col-lg-6">
            <input type="date" name="ttl" class="form-control" value="<?= $editJamaah->ttl ?>">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-2">Jenis Kelamin</label>
        <div class="col-lg-6">
            <?php if ($editJamaah->jenis_kelamin=="Laki - Laki") { ?>
                <input type="radio" name="jenis_kelamin" value="Laki - Laki" checked> Laki - Laki
            <?php } else { ?>
                <input type="radio" name="jenis_kelamin" value="Laki - Laki"> Laki - Laki
            <?php } ?>

            <?php if ($editJamaah->jenis_kelamin=="Perempuan") { ?>
                <input type="radio" name="jenis_kelamin" value="Perempuan" checked> Perempuan
            <?php } else { ?>
                <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
            <?php } ?>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-2">Kewarganegaraan</label>
        <div class="col-lg-6">
            <input type="text" name="kewarganegaraan" value="<?= $editJamaah->kewarganegaraan ?>" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-2">Alamat</label>
        <div class="col-lg-6">
            <textarea name="alamat" class="form-control"><?= $editJamaah->alamat ?></textarea>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-2">Desa/Kelurahan</label>
        <div class="col-lg-6">
            <input type="text" name="desa" value="<?= $editJamaah->desa ?>" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-2">Kecamatan</label>
        <div class="col-lg-6">
            <input type="text" name="kecamatan" value="<?= $editJamaah->kecamatan ?>" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-2">Kabupaten</label>
        <div class="col-lg-6">
            <input type="text" name="kabupaten" value="<?= $editJamaah->kabupaten ?>" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-2">Provinsi</label>
        <div class="col-lg-6">
            <input type="text" name="provinsi" value="<?= $editJamaah->provinsi ?>" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-2">Kode POS</label>
        <div class="col-lg-6">
            <input type="text" name="kode_pos" value="<?= $editJamaah->kode_pos ?>" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-2">Handphone</label>
        <div class="col-lg-6">
            <input type="text" name="no_hp" value="<?= $editJamaah->no_hp ?>" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-2">Pendidikan</label>
        <div class="col-lg-6">
            <input type="text" name="pendidikan" value="<?= $editJamaah->pendidikan ?>" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-2">Pekerjaan</label>
        <div class="col-lg-6">
            <input type="text" name="pekerjaan" value="<?= $editJamaah->pekerjaan ?>" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-2">Pergi Haji</label>
        <div class="col-lg-6">
            <input type="text" name="pergi_haji" value="<?= $editJamaah->pergi_haji ?>" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-2">Gol. Darah</label>
        <div class="col-lg-6">
            <input type="text" name="gol_darah" value="<?= $editJamaah->gol_darah ?>" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-2">Status Jama'ah</label>
        <div class="col-lg-6">
            <select name="status_jamaah" class="form-control">
                <option value="<?= $editJamaah->status_jamaah ?>"><?= $editJamaah->status_jamaah ?></option>
                <option value="reguler">Reguler</option>
                <option value="khusus">Khusus</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-2">Status Pernikahan</label>
        <div class="col-lg-6">
            <select name="status_pernikahan" class="form-control">
                <option value="<?= $editJamaah->status_pernikahan ?>"><?= $editJamaah->status_pernikahan ?></option>
                <option value="Belum Menikah">Belum Menikah</option>
                <option value="Menikah">Menikah</option>
                <option value="Janda">Janda</option>
                <option value="Duda">Duda</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-2">Kode Diagnosis</label>
        <div class="col-lg-6">
            <input type="text" name="kode_diagnosis" value="<?= $editJamaah->kode_diagnosis ?>" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-3">
            <img src="<?= base_url('./assets/img/no-image.png') ?>" class="border img-fluid mb-1">
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input">
                    <label class="custom-file-label" name="foto">file</label>
                </div>
            </div>
        </div>
        <div class="col-3">
            <textarea name="ciri_ciri" class="form-control"><?= $editJamaah->ciri_ciri ?></textarea>
        </div>
        <div class="col-6">
            <div class="form-group row">
                <label class="col-lg-4">Tanggal Set</label>
                <div class="col-lg-8">
                    <input type="date" name="tgl_set" class="form-control form-control-sm" value="<?= $editJamaah->tgl_set ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-4">Bank</label>
                <div class="col-lg-8">
                    <select name="nama_bank" class="form-control">
                        <option value="<?= $editJamaah->nama_bank ?>"><?= $editJamaah->nama_bank ?></option>
                        <option value="BPD">BPD</option>
                        <option value="BNI">BNI</option>
                        <option value="BRI">BRI</option>
                        <option value="Mandiri">Mandiri</option>
                        <option value="Danamon">Danamon</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-4">No. Rekening</label>
                <div class="col-lg-8">
                    <input type="number" name="rekening" class="form-control form-control-sm" value="<?= $editJamaah->rekening ?>">
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex flex-row-reverse">
        <div class="btn-group" role="group" aria-label="Basic example">
            <a href="<?= base_url('content/pendaftaran') ?>" class="btn btn-outline-warning">Batal</a>
            <input type="submit" name="update" value="Update" class="btn btn-success">
        </div>
    </div>
</form>