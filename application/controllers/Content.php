<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Content extends MY_Controller {
	public function index() {
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
}
