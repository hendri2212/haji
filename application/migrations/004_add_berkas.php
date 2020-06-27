<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_berkas extends CI_Migration {
    public function up() {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'ktp' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'kartu_keluarga' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'surat_pernyataan_desa' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'buku_nikah' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'akta_kelahiran' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'ijazah' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'passpor' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'kesehatan' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'status_kelengkapan' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'foto' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'jamaah_id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
            ),
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->add_field('CONSTRAINT FOREIGN KEY (jamaah_id) REFERENCES jamaah(id)');
        $this->dbforge->create_table('berkas');
    }

    public function down() {
        $this->dbforge->drop_table('berkas');
    }
}