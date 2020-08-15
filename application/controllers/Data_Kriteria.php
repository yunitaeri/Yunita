<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_Kriteria extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model("model_data_kriteria");
		$this->load->model('model_data_user');
	}

	public function index()
	{
		if($this->model_data_user->logged_id())
		{
				//jika memang session sudah terdaftar, maka redirect ke halaman dahsboard
				$data = array(
					'kriteria' => $this->model_data_kriteria->get_semua_data()->result(),
				 );
				$this->load->view('Data_kriteria/list', $data);

		}else{

		$this->load->view("login/login");}

	}
	//public function input()
	//{
		//$this->load->view('Data_kriteria/input');
	//}
	//public function insert()
	//{
	//	$data = array(
	//		'id_Kriteria' => $this->input->post("kode"),
	//		'Nama_Kriteria' => $this->input->post("nama_kriteria"),
	//	);
	//	if ($this->db->insert("tabel_kriteria", $data)){
		//	redirect ("Data_Kriteria");
	//	}else {
		//	echo "gagal";
	//	}
//	}
//	public function edit($id_kriteria)
  //{
	//	$data = array(
		//	'kriteria' => $this->model_data_kriteria->get_data($id_kriteria)->row_array(),
		 //);
    //$this->load->view('Data_kriteria/update', $data);
//  }
	//public function update()
	//{
		//$data=array(
		//'Nama_Kriteria'=> $this->input->post("nama_kriteria"),
	//);
	//$this->db->where("id_Kriteria", $this->input->post("kode"));
	//if ($this->db->update("tabel_kriteria", $data)){
		//redirect ("Data_Kriteria");
//	}else {
	//	echo "gagal";
	//}
	//}

	//function hapus($id_kriteria)
//	{
//		$this->db->where("id_Kriteria", $id_kriteria);
	//	if ($this->db->delete("tabel_kriteria")){
		//	redirect ("Data_Kriteria");
		//}else {
			//echo "gagal";
	//	}
	//}
}
