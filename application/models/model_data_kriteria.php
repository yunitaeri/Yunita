<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_data_kriteria extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function get_semua_data()
  {
    return $this->db->get("tabel_kriteria");
  }
  public function get_data($id_kriteria)
  {
    $this->db->where("id_Kriteria", $id_kriteria);
    return $this->db->get("tabel_kriteria");
  }
}
