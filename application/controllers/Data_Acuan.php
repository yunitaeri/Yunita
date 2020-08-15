<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_Acuan extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model("model_data_acuan");
		$this->load->model('model_data_user');
	}

	public function index()
	{
		if($this->model_data_user->logged_id())
		{
				//jika memang session sudah terdaftar, maka redirect ke halaman dahsboard
				$data = array(
					'acuan' => $this->model_data_acuan->get_semua_data()->result(),
				 );
				$this->load->view('Data_acuan/list', $data);

		}else{

		$this->load->view("login/login");}


	}
  public function input()
  {
    $this->load->view('Data_acuan/input');
  }
	public function insert()
	{
		$data=array(
			'id_acuan'=> $this->input->post("kode"),
			'umur'=> $this->input->post("Umur"),
			'pH'=> $this->input->post("ph"),
			'luas'=> $this->input->post("luas"),
			'jarak'=> $this->input->post("jarak"),
			'tinggi'=> $this->input->post("tinggi"),
		);
		if ($this->db->insert("acuan", $data)){
			redirect ("Data_Acuan");
		}else {
			echo "gagal";
		}
	}

	public function edit($ID_ACUAN)
  {
		$data = array(
			'acuan' => $this->model_data_alternatif->get_data($ID_ACUAN)->row_array(),
		 );
    $this->load->view('Data_acuan/update', $data);
  }

	public function update()
	{
		$data=array(
			'umur'=> $this->input->post("Umur"),
			'pH'=> $this->input->post("ph"),
			'luas'=> $this->input->post("luas"),
			'jarak'=> $this->input->post("jarak"),
			'tinggi'=> $this->input->post("tinggi"),
	);
	$this->db->where("id_acuan", $this->input->post("kode"));
	if ($this->db->update("acuan", $data)){
		redirect ("Data_Acuan");
	}else {
		echo "gagal";
	}
	}

	function hapus($ID_ACUAN)
	{
		$this->db->where("id_acuan", $ID_ACUAN);
		if ($this->db->delete("acuan")){
			redirect ("Data_Acuan");
		}else {
			echo "gagal";
		}
	}
}
