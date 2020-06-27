<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2">Tambah Dat Pembayaran</h1>
</div>
<form action="<?= base_url('./content/bayar') ?>" method="post">
  <div class="form-group row">
    <label class="col-lg-3">Nama Jamaah</label>
    <div class="col-lg-6">
      <?php if (empty($jamaah)) { ?>
        <input type="text" value="Data jama'ah kosong" class="form-control-plaintext">
      <?php } else {
        echo('<select class="form-control" name="jamaah_id">');
        foreach ($jamaah as $data) {
          echo('<option value='.$data->id.'>'.$data->nama_lengkap.'</option>');
        }
        echo('</select>');
      } ?>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-lg-3">Jumlah Transfer Terakhir</label>
    <div class="col-lg-6">
        <input type="text" name="jumlah_transfer" class="form-control">
    </div>
  </div>
    <div class="form-group row">
        <label class="col-lg-3">Total Pembayaran</label>
        <div class="col-lg-6">
            <input type="text" name="" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-3">Status</label>
        <div class="col-lg-6">
            <input type="text" name="status_konfirmasi" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-3">Status Pembayaran</label>
        <div class="col-lg-6">
            <input type="text" name="" class="form-control">
        </div>
    </div>
    <div class="d-flex flex-row-reverse col-lg-9">
        <div class="btn-group" role="group" aria-label="Basic example">
            <a href="<?= base_url('content/pembayaran') ?>" class="btn btn-outline-warning">Batal</a>
            <input type="submit" name="bayar" value="Simpan" class="btn btn-success">
        </div>
    </div>
</form>