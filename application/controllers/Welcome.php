<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller
{
  public function __construct()
	{
		parent::__construct();
    $this->load->helper('url');

    if ($this->check_login()) {
      redirect(base_url('home'));
    }
	}
  
  public function index()
  {
    $p = $this->load->view('contents/welcome','',true);
    $this->mylayout($p);
  }
}