<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_admin extends CI_Migration {
    public function up() {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'full_name' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'jabatan' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'username' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'password' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'level' => array(
                'type' => 'ENUM("super", "admin","ketua")',
                'null' => TRUE
            ),
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('admin');
    }

    public function down() {
        $this->dbforge->drop_table('admin');
    }
}