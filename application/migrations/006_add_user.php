<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_user extends CI_Migration {
    public function up() {
		$data = [
			"full_name" => 'admin',
			"jabatan" => 'admin',
            "username" => 'admin',
            "password" => md5('admin'),
            "level" => 'admin'
		];
		$this->db->insert('admin', $data);
    }

    public function down() {
        // 
    }
}