<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perhitungan extends CI_Controller
{

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
				$this->load->view('perhitungan/list',$data);

		}else{

		$this->load->view("login/login");}

	}

	public function kandungan()
	{
		return $this->model_hitung->ambil_semua("jenis_kandungan");
	}
	public function fuzzy()
	{
			$id = $this->session->userdata("user_id");
			$kandungan = $this->input->post("kandungan");
			$data = array(
				"nama_pupuk" => $this->input->post('nama'),
				"kandungan"=> $this->input->post('kandunganmu')
			);
	
			
				$fuzzy_topsis = $this->model_hitung->fuzzy($kandungan);
				$fuzzymu = $this->model_hitung->fuzzy_input($kandungan,$data);
			$this->load->view('perhitungan/kandungan', ["hasil"=>$fuzzy_topsis,'kandungan'=>$fuzzymu]);
			//echo json_encode(["hasil"=>$fuzzy_topsis,'kandungan'=>$fuzzymu]);
	}

	public function tes()
	{
		$data = array(
			"nama_pupuk" => $this->input->post('nama'),
			"kandungan"=> $this->input->post('kandungan')
		);

		$kandungan = 1;

		$respon = $this->model_hitung->fuzzy_input($kandungan,$data);
		echo json_encode($respon);
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

		$this->load->view('perhitungan/hasil',["hasil"=>$hasil,'kandungan'=>$jenis_pupuk]);
	}
}
