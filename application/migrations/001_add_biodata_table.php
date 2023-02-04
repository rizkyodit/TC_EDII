<?php defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Add_Biodata_Table extends CI_Migration
{
        public function down()
        {
        }

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'nama' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100'
                        ),
                        'posisi_dilamar' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100'
                        ),
                        'ktp' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100'
                        ),
                        'ttl' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100'
                        ),
                        'jk' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100'
                        ),
                        'agama' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100'
                        ),
                        'golongan_darah' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100'
                        ),
                        'status' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100'
                        ),
                        'alamat_ktp' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100'
                        ),
                        'alamat_tinggal' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100'
                        ),
                        'email' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100'
                        ),
                        'no_telp' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100'
                        ),
                        'emergency' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100'
                        ),
                        'pendidikan_terakhir' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255'
                        ),
                        'riwayat_pelatihan' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255'
                        ),
                        'riwayat_pekerjaan' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255'
                        ),
                        'skill' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100'
                        ),
                        'kesediaan' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100'
                        ),
                        'expected' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100'
                        ),
                ));
                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('biodata');
        }
}
