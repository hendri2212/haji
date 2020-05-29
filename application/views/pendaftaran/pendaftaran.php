<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2">Halaman Pendaftaran</h1>
</div>
<form action="" method="post" class="text-nowrap">
    <div class="d-flex flex-row-reverse">
        <div class="form-group text-center border p-2">
            <label>No. Porsi</label>
            <input type="text" placeholder="No. Porsi" class="form-control form-control-lg">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-2">No. Validasi</label>
        <div class="col-lg-6">
            <input type="text" placeholder="No. Validasi" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-2">No. KTP</label>
        <div class="col-lg-6">
            <input type="number" placeholder="No. KTP" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-2">Nama Lengkap</label>
        <div class="col-lg-6">
            <input type="text" placeholder="Nama Lengkap" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-2">Nama Ayah</label>
        <div class="col-lg-6">
            <input type="text" placeholder="Nama Ayah" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-2">TTL</label>
        <div class="col-lg-6">
            <input type="date" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-2">Jenis Kelamin</label>
        <div class="col-lg-6">
            <input type="radio" name="" id=""> Laki - Laki
            <input type="radio" name="" id=""> Perempuan
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-2">Kewarganegaraan</label>
        <div class="col-lg-6">
            <input type="text" placeholder="Kewarganegaraan" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-2">Desa/Kelurahan</label>
        <div class="col-lg-6">
            <input type="text" placeholder="Desa / Kelurahan" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-2">Kecamatan</label>
        <div class="col-lg-6">
            <input type="text" placeholder="Kecamatan" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-2">Kabupaten</label>
        <div class="col-lg-6">
            <input type="text" placeholder="Kabupaten" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-2">Provinsi</label>
        <div class="col-lg-6">
            <input type="text" placeholder="Provinsi" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-2">Kode POS</label>
        <div class="col-lg-6">
            <input type="text" placeholder="Kode POS" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-2">Handphone</label>
        <div class="col-lg-6">
            <input type="text" placeholder="Nomor Handphone" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-2">Pendidikan</label>
        <div class="col-lg-6">
            <input type="text" placeholder="Pendidikan" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-2">Pekerjaan</label>
        <div class="col-lg-6">
            <input type="text" placeholder="Pekerjaan" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-2">Pergi Haji</label>
        <div class="col-lg-6">
            <input type="text" placeholder="Pergi Haji" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-2">Gol. Darah</label>
        <div class="col-lg-6">
            <input type="text" placeholder="Gol. Darah" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-2">Status Jama'ah</label>
        <div class="col-lg-6">
            <input type="text" placeholder="Status Jama'ah" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-2">Kode Diagnosis</label>
        <div class="col-lg-6">
            <input type="text" placeholder="Kode Diagnosis" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-3">
            <img src="<?= base_url('./assets/img/no-image.png') ?>" class="border img-fluid mb-1">
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input">
                    <label class="custom-file-label">file</label>
                </div>
            </div>
        </div>
        <div class="col-3">
            <textarea placeholder="Ciri - Ciri" class="form-control"></textarea>
        </div>
        <div class="col-6">
            <div class="form-group row">
                <label class="col-lg-4">Tanggal Set</label>
                <div class="col-lg-8">
                    <input type="date" class="form-control form-control-sm">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-4">Bank</label>
                <div class="col-lg-8">
                    <input type="text" class="form-control form-control-sm">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-4">Rekening</label>
                <div class="col-lg-8">
                    <input type="number" class="form-control form-control-sm">
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex flex-row-reverse">
        <input type="button" value="Simpan" class="btn btn-success">
    </div>
</form>