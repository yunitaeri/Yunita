<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_login extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function get_semua_data()
  {
    return $this->db->get("tabel_user");
  }
}
