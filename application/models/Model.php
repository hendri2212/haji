<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model extends CI_Model {
	// pendaftaran----------------------------------------------------
	public function register() {
		$data = [
			"no_porsi"			=> $this->input->post('no_porsi'),
			"no_validasi"		=> $this->input->post('no_validasi'),
			"no_ktp"			=> $this->input->post('no_ktp'),
			"nama_lengkap"		=> $this->input->post('nama_lengkap'),
			"nama_ayah"			=> $this->input->post('nama_ayah'),
			"ttl"				=> $this->input->post('ttl'),
			"jenis_kelamin"		=> $this->input->post('jenis_kelamin'),
			"kewarganegaraan"	=> $this->input->post('kewarganegaraan'),
			"alamat"			=> $this->input->post('alamat'),
			"desa"				=> $this->input->post('desa'),
			"kecamatan"			=> $this->input->post('kecamatan'),
			"kabupaten"			=> $this->input->post('kabupaten'),
			"provinsi"			=> $this->input->post('provinsi'),
			"kode_pos"			=> $this->input->post('kode_pos'),
			"no_hp"				=> $this->input->post('no_hp'),
			"pendidikan"		=> $this->input->post('pendidikan'),
			"pekerjaan"			=> $this->input->post('pekerjaan'),
			"pergi_haji"		=> $this->input->post('pergi_haji'),
			"status_jamaah"		=> $this->input->post('status_jamaah'),
			"gol_darah"			=> $this->input->post('gol_darah'),
			"status_pernikahan"	=> $this->input->post('status_pernikahan'),
			"kode_diagnosis"	=> $this->input->post('kode_diagnosis'),
			"ciri_ciri"			=> $this->input->post('ciri_ciri'),
			"foto"				=> $this->input->post('foto'),
			"tgl_set"			=> $this->input->post('tgl_set'),
			"nama_bank"			=> $this->input->post('nama_bank'),
			"rekening"			=> $this->input->post('rekening'),
		];
		$this->db->insert('jamaah', $data);
		redirect('./content/pendaftaran');
		// $error = $this->db->error();
	}
	
	public function jamaah() {
		return $this->db->get('jamaah')->result();
	}

	public function editJamaah($id) {
		return $this->db->get_where("jamaah", array("id" => $id))->row();
	}

	public function updateJamaah($id) {
		$data = [
			"no_porsi"			=> $this->input->post('no_porsi'),
			"no_validasi"		=> $this->input->post('no_validasi'),
			"no_ktp"			=> $this->input->post('no_ktp'),
			"nama_lengkap"		=> $this->input->post('nama_lengkap'),
			"nama_ayah"			=> $this->input->post('nama_ayah'),
			"ttl"				=> $this->input->post('ttl'),
			"jenis_kelamin"		=> $this->input->post('jenis_kelamin'),
			"kewarganegaraan"	=> $this->input->post('kewarganegaraan'),
			"alamat"			=> $this->input->post('alamat'),
			"desa"				=> $this->input->post('desa'),
			"kecamatan"			=> $this->input->post('kecamatan'),
			"kabupaten"			=> $this->input->post('kabupaten'),
			"provinsi"			=> $this->input->post('provinsi'),
			"kode_pos"			=> $this->input->post('kode_pos'),
			"no_hp"				=> $this->input->post('no_hp'),
			"pendidikan"		=> $this->input->post('pendidikan'),
			"pekerjaan"			=> $this->input->post('pekerjaan'),
			"pergi_haji"		=> $this->input->post('pergi_haji'),
			"status_jamaah"		=> $this->input->post('status_jamaah'),
			"gol_darah"			=> $this->input->post('gol_darah'),
			"status_pernikahan"	=> $this->input->post('status_pernikahan'),
			"kode_diagnosis"	=> $this->input->post('kode_diagnosis'),
			"ciri_ciri"			=> $this->input->post('ciri_ciri'),
			"foto"				=> $this->input->post('foto'),
			"tgl_set"			=> $this->input->post('tgl_set'),
			"nama_bank"			=> $this->input->post('nama_bank'),
			"rekening"			=> $this->input->post('rekening'),
		];
		$this->db->where("id", $id);
		$this->db->update('jamaah', $data);
		redirect('./content/pendaftaran');
	}

	public function deleteJamaah($id) {
		$this->db->where("id", $id);
		$this->db->delete("jamaah");
	}

	// pembayaran-----------------------------------------------------
	public function bayar() {
		$data = [
			"jumlah_transfer" 	=> $this->input->post('jumlah_transfer'),
			"sisa_pembayaran" 	=> $this->input->post('sisa_pembayaran'),
			"status_konfirmasi" => $this->input->post('status_konfirmasi'),
			"nama_penyetor"		=> $this->input->post('nama_penyetor'),
			"jamaah_id" 		=> $this->input->post('jamaah_id')
		];
		$this->db->insert('pembayaran', $data);
		redirect('./content/pembayaran');
	}

	public function dataPembayaran() {
		$this->db->join("jamaah", "jamaah.id = pembayaran.jamaah_id");
		$this->db->select("pembayaran.id, jamaah.nama_lengkap, pembayaran.jumlah_transfer, pembayaran.sisa_pembayaran, pembayaran.status_konfirmasi, pembayaran.nama_penyetor");
		return $this->db->get('pembayaran')->result();
	}

	public function deletePembayaran($id) {
		$this->db->where("id", $id);
		$this->db->delete("pembayaran");
	}
	
	// berkas---------------------------------------------------------
	public function dataBerkas() {
		$this->db->join("jamaah", "jamaah.id = berkas.jamaah_id");
		$this->db->select("berkas.id, jamaah.nama_lengkap, berkas.ktp, berkas.buku_nikah, berkas.akta_kelahiran, berkas.ijazah, berkas.passpor, berkas.kesehatan");
		return $this->db->get('berkas')->result();
	}

	public function saveBerkas() {
		$data = [
			"ktp"				=> $this->input->post("ktp"),
			"buku_nikah"		=> $this->input->post("buku_nikah"),
			"akta_kelahiran"	=> $this->input->post("akta_kelahiran"),
			"ijazah"			=> $this->input->post("ijazah"),
			"passpor"			=> $this->input->post("passpor"),
			"kesehatan"			=> $this->input->post("kesehatan"),
			"jamaah_id"			=> $this->input->post("jamaah_id")
		];
		$this->db->insert("berkas", $data);
		redirect("content/berkas");
	}

	public function deleteBerkas($id) {
		$this->db->where("id", $id);
		$this->db->delete("berkas");
	}

	// jadwal---------------------------------------------------------
	public function schedule() {
		$data = [
			"gelombang" 	=> $this->input->post("gelombang"),
			"kloter" 		=> $this->input->post("kloter"),
			"tgl_berangkat" => $this->input->post("tgl_berangkat"),
			"tgl_pulang" 	=> $this->input->post("tgl_pulang"),
			"jamaah_id"		=> $this->input->post("jamaah_id")
		];
		$this->db->insert('jadwal', $data);
		redirect('./content/jadwal');
	}
	
	public function dataJadwal() {
		$this->db->join("jamaah", "jamaah.id = jadwal.jamaah_id");
		$this->db->select("jadwal.id, jamaah.nama_lengkap, jadwal.gelombang, jadwal.kloter, jadwal.tgl_berangkat, jadwal.tgl_pulang");
		return $this->db->get('jadwal')->result();
	}

	public function deleteJadwal($id) {
		$this->db->where("id", $id);
		$this->db->delete("jadwal");
	}
	
	// akun-----------------------------------------------------------
	public function cek_login($where) {
		return $this->db->get_where('admin', $where);
	}
}