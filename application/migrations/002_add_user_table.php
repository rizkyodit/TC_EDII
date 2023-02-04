<?php defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Add_User_Table extends CI_Migration
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
      'email' => array(
        'type' => 'VARCHAR',
        'constraint' => '100'
      ),
      'password' => array(
        'type' => 'VARCHAR',
        'constraint' => '255'
      ),
      'is_admin' => array(
        'type' => 'INT',
        'constraint' => '1'
      ),

    ));
    $this->dbforge->add_key('id', TRUE);
    $this->dbforge->create_table('user');
  }
}
