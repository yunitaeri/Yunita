<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_Alternatif extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model("model_data_alternatif");
		$this->load->model('model_data_user');
	}

	public function index()
	{
		if($this->model_data_user->logged_id())
		{
				//jika memang session sudah terdaftar, maka redirect ke halaman dahsboard
				$data = array(
					'alternatif' => $this->model_data_alternatif->get_semua_data()->result(),
				 );
				$this->load->view('Data_alternatif/list', $data);

		}else{

		$this->load->view("login/login");}


	}
  public function input()
  {
    $this->load->view('Data_alternatif/input');
  }
	public function insert()
	{
		$data=array(
			'id_jenis'=> $this->input->post("kode"),
			'jenis_pupuk'=> $this->input->post("nama_pupuk"),
			'N'=> $this->input->post("nitrogen"),
			'F'=> $this->input->post("fosfor"),
			'K'=> $this->input->post("kalium"),
			'S'=> $this->input->post("sulfur"),
		);
		if ($this->db->insert("jenis_pupuk", $data)){
			redirect ("Data_Alternatif");
		}else {
			echo "gagal";
		}
	}

	public function edit($id_jenis)
  {
		$data = array(
			'alternatif' => $this->model_data_alternatif->get_data($id_jenis)->row_array(),
		 );
    $this->load->view('Data_alternatif/update', $data);
  }

	public function update()
	{
		$data=array(
		'jenis_pupuk'=> $this->input->post("nama_pupuk"),
		'N'=> $this->input->post("nitrogen"),
		'F'=> $this->input->post("fosfor"),
		'K'=> $this->input->post("kalium"),
		'S'=> $this->input->post("sulfur"),
	);
	$this->db->where("id_jenis", $this->input->post("kode"));
	if ($this->db->update("jenis_pupuk", $data)){
		redirect ("Data_Alternatif");
	}else {
		echo "gagal";
	}
	}

	function hapus($id_jenis)
	{
		$this->db->where("id_jenis", $id_jenis);
		if ($this->db->delete("jenis_pupuk")){
			redirect ("Data_Alternatif");
		}else {
			echo "gagal";
		}
	}
}
