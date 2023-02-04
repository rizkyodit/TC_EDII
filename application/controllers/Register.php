<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends MY_Controller
{
  public function __construct()
	{
		parent::__construct();
    $this->load->helper('url');
    $this->load->database();

    if ($this->check_login()) {
      redirect(base_url('home'));
    }
	}

  public function index()
  {
    $p = $this->load->view('contents/register','',true);
    $this->mylayout($p);
  }

  public function insert_user()
  {
    $user_input = $this->input_data;
    
    $user_input['is_admin'] = 0;
    $user_input['password'] = md5($user_input['password']);

    $this->db->insert('user',$user_input);
    redirect(base_url('/'));
  }
}