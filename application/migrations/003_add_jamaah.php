<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_jamaah extends CI_Migration {
    public function up() {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'no_porsi' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'no_validasi' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'no_ktp' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'nama_lengkap' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'nama_ayah' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'ttl' => array(
                'type' => 'DATE',
            ),
            'jenis_kelamin' => array(
                'type' => 'enum("Laki - Laki", "Perempuan")',
            ),
            'kewarganegaraan' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'alamat' => array(
                'type' => 'text',
            ),
            'desa' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'kecamatan' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'kabupaten' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'provinsi' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'kode_pos' => array(
                'type' => 'VARCHAR',
                'constraint' => '10',
            ),
            'no_hp' => array(
                'type' => 'VARCHAR',
                'constraint' => '15',
            ),
            'pendidikan' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'pekerjaan' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'pergi_haji' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'status_jamaah' => array(
                'type' => 'enum("Reguler", "Khusus")',
            ),
            'gol_darah' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'status_pernikahan' => array(
                'type' => 'enum("Belum Menikah", "Menikah", "Janda", "Duda")',
            ),
            'kode_diagnosis' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'ciri_ciri' => array(
                'type' => 'text',
            ),
            'foto' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'default' => null
            ),
            'tgl_set' => array(
                'type' => 'date',
            ),
            'nama_bank' => array(
                'type' => 'enum("BPD", "BNI", "BRI", "Mandiri", "Danamon")',
            ),
            'rekening' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('jamaah');
    }

    public function down() {
        $this->dbforge->drop_table('jamaah');
    }
}