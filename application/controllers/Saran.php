<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saran extends CI_Controller {

	public function __construct()

	{
	parent::__construct();
	$this->load->model('model_data_user');
	}
	public function index()
	{
		if($this->model_data_user->logged_id())
		{
				//jika memang session sudah terdaftar, maka redirect ke halaman dahsboard
				$this->load->view('saran/list');

		}else{

		$this->load->view("login/login");}

	}
}
