<?php defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Add_Admin extends CI_Migration
{
  public function down()
  {
  }

  public function up()
  {
      $sql = array(
        'email' => 'admin@edii.com',
        'password' => '21232f297a57a5a743894a0e4a801fc3',
        'is_admin' => 1
      );
      $this->db->insert('user',$sql);
  }

}
