<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cari_pupuk extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("model_hitung");
			$this->load->model('model_data_user');
	}
	public function index()
	{
		if($this->model_data_user->logged_id())
 		{
				//jika memang session sudah terdaftar, maka redirect ke halaman dahsboard
				$data = array('jenis_kandungan' => $this->kandungan() );
				$this->load->view('Tampil_user/cari_pupuk',$data);

		}else{

		$this->load->view("login/login");}

	//	echo json_encode($this->model_hitung->representasi_data(1));

	}
	public function kandungan()
	{
		return $this->model_hitung->ambil_semua("jenis_kandungan");
	}
	public function fuzzy()
	{
			$id = $this->session->userdata("user_id");
			$kandungan = $this->input->post("kandungan");
			$data = $this->model_hitung->fuzzy($kandungan);
			$this->load->view('Tampil_user/kandungan_pupuk', ["hasil" => $data]);
	}
	function hitung()
	{
		$jenis_pupuk = $this->input->post("jenpuk");
		$umur = $this->input->post("umur");
		$pH = $this->input->post("pH");
		$luas = $this->input->post("luas");
		$jarak = $this->input->post("jarak");
		$tinggi = $this->input->post("tinggi");
		$data = array(
			'umur'=> $umur ,
			'pH'=> $pH ,
			'luas'=> $luas ,
			'jarak'=> $jarak ,
			'tinggi'=> $tinggi
	);

		$hasil = $this->model_hitung->TopSis(
			$jenis_pupuk,
			$data
		);

		$this->load->view('Tampil_user/hasil_pupuk',["hasil"=>$hasil,'kandungan'=>$jenis_pupuk]);
	}
}
