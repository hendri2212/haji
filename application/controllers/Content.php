<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Content extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('model');
	}
	
	// beranda-----------------------------------------
	public function index() {
		$this->pages('home/home');
	}

	public function home() {
		$this->pages('home/home');
	}

	// pendaftaran--------------------------------------
	public function pendaftaran() {
		if ($this->is_logged_in()) {
			$data['jamaah'] = $this->model->jamaah();
			$this->pages('pendaftaran/pendaftaran', $data);
		} else {
			// redirect(base_url("./content/login"));
			// $this->pages('login/login');
			show_404();
		}
	}

	public function register() {
		$this->model->register();
	}

	public function addPendaftaran() {
		$this->pages('pendaftaran/addPendaftaran');
	}

	public function deleteJamaah($id) {
		$this->model->deleteJamaah($id);
		redirect("content/pendaftaran");
	}

	public function editJamaah($id) {
		$data["editJamaah"] = $this->model->editJamaah($id);
		$this->pages("pendaftaran/editPendaftaran", $data);
	}

	public function updateJamaah($id) {
		$this->model->updateJamaah($id);
	}

	public function cetakPendaftaran() {
		$data['jamaah'] = $this->model->jamaah();
		$this->pages("pendaftaran/cetakPendaftaran", $data);
	}
	
	// pembayaran---------------------------------------
	public function pembayaran() {
		$data["dataPembayaran"] = $this->model->dataPembayaran();
		$this->pages('pembayaran/pembayaran', $data);
	}
	
	public function addPembayaran() {
		$data['jamaah'] = $this->model->jamaah();
		$this->pages("pembayaran/addPembayaran", $data);
	}

	public function bayar() {
		$this->model->bayar();
	}

	public function updatePembayaran($id) {
		$this->model->updatePembayaran($id);
	}

	public function deletePembayaran($id) {
		$this->model->deletePembayaran($id);
		redirect("content/pembayaran");
	}

	public function editPembayaran($id) {
		$data['jamaah'] = $this->model->jamaah();
		$data["editPembayaran"] = $this->model->editPembayaran($id);
		$this->pages("pembayaran/editPembayaran", $data);
	}

	public function cetakPembayaran() {
		$data["dataPembayaran"] = $this->model->dataPembayaran();
        $html = $this->pages('pembayaran/cetakPembayaran', $data);
		
		// $mpdf = new \Mpdf\Mpdf();
        // $html = $this->load->view('pembayaran/cetakPembayaran', $data, true);
        // $mpdf->WriteHTML($html);
        // $mpdf->Output();
	}

	public function detailPembayaran($id) {
		$data["detailPembayaran"] = $this->model->detailPembayaran($id);
		$this->pages("pembayaran/detailPembayaran", $data);
	}

	// berkas-------------------------------------------
	public function berkas() {
		$data['dataBerkas'] = $this->model->dataBerkas();
		$this->pages('berkas/berkas', $data);
	}
	
	public function saveBerkas() {
		$this->model->saveBerkas();
	}
	
	public function addBerkas() {
		$data['jamaah']	= $this->model->jamaah();
		$this->pages('berkas/addBerkas', $data);
	}

	public function deleteBerkas($id) {
		$this->model->deleteBerkas($id);
		redirect("content/berkas");
	}

	public function cetakBerkas() {
		$data['dataBerkas'] = $this->model->dataBerkas();
		$this->pages("berkas/cetakBerkas", $data);
	}

	// jadwal-------------------------------------------
	public function addJadwal() {
		$data['jamaah']	= $this->model->jamaah();
		$this->pages('jadwal/addJadwal', $data);
	}

	public function jadwal() {
		$data['dataJadwal'] = $this->model->dataJadwal();
		$this->pages('jadwal/jadwal', $data);
	}

	public function schedule() {
		$this->model->schedule();
	}

	public function deleteJadwal($id) {
		$this->model->deleteJadwal($id);
		redirect('content/jadwal');
	}

	public function cetakJadwal() {
		$data['dataJadwal'] = $this->model->dataJadwal();
		$this->pages('jadwal/cetakJadwal', $data);
	}

	// User---------------------------------------------
	public function akun() {
		$data["user"] = $this->model->user();
		$this->pages("akun/akun", $data);
	}

	public function addUser() {
		$data['jamaah'] = $this->model->jamaah();
		$this->pages("akun/addUser", $data);
	}

	public function saveUser() {
		$this->model->saveUser();
	}

	public function editUser($id) {
		// $data['jamaah'] = $this->model->jamaah();
		$data["editUser"] = $this->model->editUser($id);
		$this->pages("akun/editUser", $data);
	}

	public function updateUser($id) {
		$this->model->updateUser($id);
	}
	
	public function deleteUser($id) {
		$this->model->deleteUser($id);
		redirect('content/akun');
	}


	// akun---------------------------------------------
	public function logout(){
		$this->session->sess_destroy();
		redirect (base_url('./'));
	}

	public function login() {
		$this->pages('login/login');
	}

	public function is_logged_in() {
        $status = $this->session->userdata('status');
        return isset($status);
	}

	public function masuk(){
		$username 	= $this->input->post('username');
		$password 	= $this->input->post('password');
		$level		= $this->input->post('level');
		$where = array(
			'username' 	=> $username,
			'password' 	=> md5($password),
			'level' 	=> $level
			);
		$akses = $this->model->cek_login($where)->row();
		$cek = $this->model->cek_login($where)->num_rows();
		if($cek > 0){
			$data_session = array(
				'id'			=> $akses->id,
				'username'		=> $username,
				'password'		=> $password,
				'full_name'		=> $akses->full_name,
				'level'			=> $akses->level,
				'status'		=> "success"
			);
			$this->session->set_userdata($data_session);
			redirect(base_url("content/"));
		} else {
			echo "<script>alert('Username atau Password yang Anda masukkan SALAH'); window.location.href='../'</script>"; 
		}
	}
}
