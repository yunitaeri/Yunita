<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_data_alternatif extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function get_semua_data()
  {
    return $this->db->get("jenis_pupuk");
  }

  public function get_data($id_jenis)
  {
    $this->db->where("id_jenis", $id_jenis);
    return $this->db->get("jenis_pupuk");
  }

}
