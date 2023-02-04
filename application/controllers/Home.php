<?php defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MY_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->database();
  }

  public function index()
  {
    if (!$this->check_login()) {
      $is_login = $this->login();

      if (!$is_login) {
        redirect(base_url());
      }
    }

    $data = $this->get();
    $p = $this->load->view('contents/home', $data, true);
    $this->mylayout($p);
  }
  
  private function get()
  {
    $user_input = $this->input_data;
    $user_input = $user_input ? $user_input : array('email' => $_COOKIE['c_email']);
    
    $data_user = $this->db->select('*')->from('user')->where('email', $user_input['email'])->get()->row();

    $query = $this->db->select('*')->from('biodata');
    if (isset($data_user) && $data_user->is_admin == 0) {
      $query->where('id_user', $data_user->id);
    }
    $query = $query->get()->result_array();
    
    $return_data = array('data' => $query, 'data_user' => $data_user);
    return $return_data;
  }

  private function login()
  {
    $user_input = $this->input_data;

    $query = $this->db->select('*')->from('user')->where('user.email', $user_input['email'])->get()->row();

    if (md5($user_input['password']) == $query->password) {

      $urlData = parse_url($_SERVER['HTTP_HOST']);
      $token = md5($query->email . $query->password);

      setcookie('c_email', $query->email, mktime(24), '/', $urlData['host'], false, true);
      setcookie('c_password', $query->password, mktime(24), '/', $urlData['host'], false, true);
      setcookie('token', $token, mktime(24), '/', $urlData['host'], false, true);

      return true;
    }

    return false;
  }

  public function logout()
  {
    setcookie('c_email', null, 0, '/', '', false, true);
    setcookie('c_password', null, 0, '/', '', false, true);
    setcookie('token', null, 0, '/', '', false, true);

    redirect(base_url());
  }

  public function search()
  {
    $search_data = $this->input_data;
    
    $data_user = $this->db->select('*')->from('user')->where('email', $search_data['email'])->get()->row();
    
    $query = $this->db->select('*')->from('biodata')->like("{$search_data['category']}", $search_data['search']);
    if ($data_user->is_admin == 0) {
      $query->where('id_user', $data_user->id);
    }
    $query = $query->get()->result_array();

    $data = array('data' => $query, 'data_user' => $data_user, 'search' => $search_data);
    $p = $this->load->view('contents/home', $data, true);
    $this->mylayout($p);
  }
}
