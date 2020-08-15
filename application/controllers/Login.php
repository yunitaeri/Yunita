<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			//load model admin
			$this->load->model('model_data_user');
	}

		public function index()
		{
			if($this->model_data_user->logged_id())
			{
					//jika memang session sudah terdaftar, maka redirect ke halaman dahsboard
					if ($this->session->userdata('level')==1) {
						redirect('Home');
					}else {
						redirect('Tampilan');
					}

			}else{

			$this->load->view("login/login");}

		}

		public function login()
		{

						if($this->model_data_user->logged_id())
						{
								//jika memang session sudah terdaftar, maka redirect ke halaman dahsboard
								if ($this->session->userdata('level')==1) {
									redirect('Home');
								}else {
									redirect('Tampilan');
								}

						}else{

								//get data dari FORM
								$username = $this->input->post("username", TRUE);
								$password = MD5($this->input->post('password', TRUE));

								//checking data via model
								$checking = $this->model_data_user->check_login('tabel_user', array('Username' => $username), array('Password' => $password));

								//jika ditemukan, maka create session
								if ($checking != FALSE) {
										foreach ($checking as $apps) {

												$session_data = array(
														'user_id'   => $apps->id_User,
														'nama_lengkap' => $apps->Nama_Lengkap,
														'level'     => $apps->Level,
														'status' => "login"
												);
												//set session userdata
												$this->session->set_userdata($session_data);
												if ($this->session->userdata('level')==1) {
													redirect('Home');
												}else {
													redirect('Tampilan');
												}

										}
								}else{
										$data['error'] = '<div class="alert alert-danger" style="margin-top: 3px">
												<div class="header"><b><i class="fa fa-exclamation-circle"></i> ERROR</b> username atau password salah!</div></div>';
										$this->load->view('login/login', $data);
								}

				}

		}
		function logout()
		{
			$this->session->sess_destroy();
			redirect(base_url('login'));
		}
	}
