<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_pembayaran extends CI_Migration {
    public function up() {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'tgl_transfer' => array(
                'type' => 'date',
            ),
            'no_rekening' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'no_rekening_tujuan' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'nama_penyetor' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'nama_bank' => array(
                'type' => 'enum("BPD", "BNI", "BRI", "Mandiri", "Danamon")',
            ),
            'jumlah_transfer' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'sisa_pembayaran' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'tgl_konfirmasi' => array(
                'type' => 'date',
            ),
            'status_konfirmasi' => array(
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
        $this->dbforge->create_table('pembayaran');
    }

    public function down() {
        $this->dbforge->drop_table('pembayaran');
    }
}