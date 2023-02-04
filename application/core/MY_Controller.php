<?php defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{

	public function __construct()
	{

		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');

		if ($_POST) {
			$this->input_data = $this->input->post();
		} else if ($_GET) {
			$this->input_data = $this->input->get();
		} else {
			$this->input_data = json_decode(file_get_contents("php://input"), true);
		}

	}

	public function mylayout($data)
	{

		$template["contents"] = $data;

		$this->load->view("main_template", $template, false);

	}

	public function check_login()
	{

		$token = isset($_COOKIE['token']) ? $_COOKIE['token'] : '';
		$email = isset($_COOKIE['c_email']) ? urldecode($_COOKIE['c_email']) : '';
		$password = isset($_COOKIE['c_password']) ? $_COOKIE['c_password'] : '';

		if (($token && $email && $password) && md5($email.$password) == $token) return true;

		return false;

	}
	
}
