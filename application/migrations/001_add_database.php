<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_database extends CI_Migration {
    public function up() {
        $attr = array('ENGINE' => 'InnoDB');
		$this->dbforge->create_database('haji', FALSE, $attr);
    }

    public function down() {
        // 
    }
}