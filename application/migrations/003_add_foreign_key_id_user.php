<?php defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Add_Foreign_Key_Id_User extends CI_Migration
{
  public function down()
  {
  }

  public function up()
  {
    $this->dbforge->add_column('biodata', array(
      'COLUMN id_user INT UNSIGNED NOT NULL AFTER id',
      'CONSTRAINT fk_id_user FOREIGN KEY(id_user) REFERENCES user(id)'
    ));
  }
}
