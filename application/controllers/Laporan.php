<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct()

	{
	parent::__construct();
	$this->load->model("model_laporan");
	$this->load->model('model_data_user');
	}
	public function index()
	{
		if($this->model_data_user->logged_id())
		{
				//jika memang session sudah terdaftar, maka redirect ke halaman dahsboard
		$user_id = $this->session->userdata("user_id");
		$data = $this->model_laporan->get_laporan($user_id);
		$this->load->view('laporan/list', ["data" => $data]);

		}else{

		$this->load->view("login/login");}
	}
}
