<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2">Tambah Dat Pembayaran</h1>
</div>
<form action="<?= base_url('./content/updatePembayaran/'.$editPembayaran->id) ?>" method="post">
  <div class="form-group row">
    <label class="col-lg-3">Nama Jamaah</label>
    <div class="col-lg-6">
        <select class="form-control" name="jamaah_id">
          <option value="<?= $editPembayaran->jamaah_id ?>"><?= $editPembayaran->nama_lengkap ?></option>
          <?php foreach ($jamaah as $data) {
          echo('<option value='.$data->id.'>'.$data->nama_lengkap.'</option>');
          } ?>
        </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-lg-3">Jumlah Transfer Terakhir</label>
    <div class="col-lg-6">
        <input type="text" name="jumlah_transfer" class="form-control" value="<?= $editPembayaran->jumlah_transfer ?>">
    </div>
  </div>
    <div class="form-group row">
        <label class="col-lg-3">Total Pembayaran</label>
        <div class="col-lg-6">
            <input type="text" name="sisa_pembayaran" class="form-control" value="<?= $editPembayaran->sisa_pembayaran ?>">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-3">Status</label>
        <div class="col-lg-6">
            <input type="text" name="status_konfirmasi" class="form-control" value="<?= $editPembayaran->status_konfirmasi ?>">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-3">Status Pembayaran</label>
        <div class="col-lg-6">
            <input type="text" name="nama_penyetor" class="form-control" value="<?= $editPembayaran->nama_penyetor ?>">
        </div>
    </div>
    <div class="d-flex flex-row-reverse col-lg-9">
        <div class="btn-group" role="group" aria-label="Basic example">
            <a href="<?= base_url('content/pembayaran') ?>" class="btn btn-outline-warning">Batal</a>
            <input type="submit" name="bayar" value="Update" class="btn btn-success">
        </div>
    </div>
</form>