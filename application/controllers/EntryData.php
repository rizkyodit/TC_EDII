<?php defined('BASEPATH') OR exit('No direct script access allowed');

class EntryData extends MY_Controller
{
  public function __construct()
	{
		parent::__construct();
    $this->load->database();
    $this->load->helper('url');

    if (!$this->check_login()) {
      redirect(base_url());
    }

	}
  public function index()
  {
    $data = (object) [
      'action' => 'insert'
    ];

    $p = $this->load->view('contents/form',$data,true);
    $this->mylayout($p);
  }

  public function insert()
  {
    $user_input = $this->input_data;

    $query = $this->db->select('id')->from('user')->where('email', urldecode($_COOKIE['c_email']))->get()->row();
    
    $user_input['pendidikan_terakhir'] = json_encode($user_input['pendidikan_terakhir']);
    $user_input['riwayat_pelatihan'] = json_encode($user_input['riwayat_pelatihan']);
    $user_input['riwayat_pekerjaan'] = json_encode($user_input['riwayat_pekerjaan']);
    $user_input['id_user'] = $query->id;

    $this->db->insert('biodata', $user_input);

    redirect(base_url('home'));
  }

  private function get($id)
  {
    $query = $this->db->select('*')->from('biodata')->where('id', $id)->get()->row();

    $query->pendidikan_terakhir = json_decode($query->pendidikan_terakhir);
    $query->riwayat_pelatihan = json_decode($query->riwayat_pelatihan);
    $query->riwayat_pekerjaan = json_decode($query->riwayat_pekerjaan);

    return $query;
  }

  public function edit($id)
  {
    $data = $this->get($id);
    $data->action = 'update';

    $p = $this->load->view('contents/form',$data,true);
    $this->mylayout($p);
  }

  public function update($id)
  {
    $user_input = $this->input_data;

    $user_input['pendidikan_terakhir'] = json_encode($user_input['pendidikan_terakhir']);
    $user_input['riwayat_pelatihan'] = json_encode($user_input['riwayat_pelatihan']);
    $user_input['riwayat_pekerjaan'] = json_encode($user_input['riwayat_pekerjaan']);

    $this->db->where('id', $id)->update('biodata', $user_input);

    redirect(base_url('home'));
  }

  public function show($id)
  {
    $data = $this->get($id);
    $data->action = 'show';
    
    $p = $this->load->view('contents/form',$data,true);
    $this->mylayout($p);
  }

  public function delete($id)
  {
    $this->db->delete('biodata', array('id' => $id));
    redirect(base_url('home'));
  }
}