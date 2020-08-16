<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_data_acuan extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function get_semua_data()
  {
    $this->db->select("acuan.*, jenis_pupuk.jenis_pupuk, jenis_kandungan.jenis_kandungan");
    $this->db->from("acuan");
    $this->db->join("jenis_pupuk","jenis_pupuk.id_jenis = acuan.id_jenis","left");
    $this->db->join('jenis_kandungan', 'jenis_kandungan.id_kandungan = acuan.id_kandungan', 'left');
    
    return $this->db->get();
  }

  public function get_data($ID_ACUAN)
  {
    $this->db->where("id_acuan", $ID_ACUAN);
        return $this->db->get("acuan");
  }

}
