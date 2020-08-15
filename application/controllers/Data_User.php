<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_User extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model("model_data_user");
	}

	public function index()
	{
		if($this->model_data_user->logged_id())
		{
				//jika memang session sudah terdaftar, maka redirect ke halaman dahsboard
				$data = array(
					'user' => $this->model_data_user->get_semua_data()->result(),
				 );
				$this->load->view('Data_user/list', $data);

		}else{

		$this->load->view("login/login");}

	}
  public function input()
  {
    $this->load->view('Data_user/input');
  }
	public function insert()
	{
		$data=array(
			'Username'=> $this->input->post("username"),
			'Password'=> MD5($this->input->post('password', TRUE)),
      'Level'=> $this->input->post("level"),
			'nama_lengkap'=> $this->input->post("Nama_Lengkap")
		);
		if ($this->db->insert("tabel_user", $data)){
			redirect ("Data_User");
		}else {
			echo "gagal";
		}
	}
  public function edit($id_user)
  {
		$data = array(
			'user' => $this->model_data_user->get_data($id_user)->row_array(),
		 );
    $this->load->view('Data_user/update', $data);
  }
  public function update()
	{
		$data=array(
      'id_User'=> $this->input->post("kode"),
			'Username'=> $this->input->post("username"),
			'Password'=> $this->input->post("password"),
      'Level'=> $this->input->post("level"),
      'Status'=> $this->input->post("status"),
	);
	$this->db->where("id_User", $this->input->post("kode"));
	if ($this->db->update("tabel_user", $data)){
		redirect ("Data_User");
	}else {
		echo "gagal";
	}
	}

	function hapus($id_user)
	{
		$this->db->where("id_User", $id_user);
		if ($this->db->delete("tabel_user")){
			redirect ("Data_User");
		}else {
			echo "gagal";
		}
	}
}
