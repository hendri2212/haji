<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_jadwal extends CI_Migration {
    public function up() {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'gelombang' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'kloter' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'tgl_berangkat' => array(
                'type' => 'DATE',
            ),
            'tgl_pulang' => array(
                'type' => 'DATE',
            ),
            'jamaah_id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unique' => TRUE,
                'unsigned' => TRUE,
            ),
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->add_field('CONSTRAINT FOREIGN KEY (jamaah_id) REFERENCES jamaah(id)');
        $this->dbforge->create_table('jadwal');
    }

    public function down() {
        $this->dbforge->drop_table('jadwal');
    }
}