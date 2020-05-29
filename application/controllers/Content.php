<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Content extends MY_Controller {
	public function index() {
		$data_session = array(
			'status'	=> "success"
		);
		$this->session->set_userdata($data_session);

		$this->pages('home/home');
	}

	public function home() {
		$this->pages('home/home');
	}

	public function pembayaran() {
		$this->pages('pembayaran/pembayaran');
	}

	public function login() {
		$this->pages('login/login');
	}

	public function pendaftaran() {
		$this->pages('pendaftaran/pendaftaran');
	}

	public function berkas() {
		$this->pages('berkas/berkas');
	}

	public function jadwal() {
		$this->pages('jadwal/jadwal');
	}

	// Page admin
	public function loginx(){
		// $username = $this->input->post('username');
		// $password = $this->input->post('password');
		// $where = array(
		// 	'username' => $username,
		// 	'password' => md5($password)
		// 	);
		// $akses = $this->adm_model->cek_login($where)->row();
		// $cek = $this->adm_model->cek_login($where)->num_rows();
		// if($cek > 0){
			// $data_session = array(
			// 	'id_pegawai'	=> $akses->id_pegawai,
			// 	'IdBidang'		=> $akses->IdBidang,
			// 	'username'		=> $username,
			// 	'nama_pegawai'	=> $akses->nama_pegawai,
			// 	'level'			=> $akses->level,
			// 	'status'		=> "success"
			// );
			// $this->session->set_userdata($data_session);
			// redirect(base_url("content/"));
		// }else{ echo "<script>alert('Username atau Password yang Anda masukkan SALAH'); window.location.href='../'</script>"; 
		// 	echo "gagal";
		// }
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect (base_url('./'));
	}
}
