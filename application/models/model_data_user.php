<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_data_user extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function get_semua_data()
  {
    return $this->db->get("tabel_user");
  }

  public function get_data($id_user)
  {
    $this->db->where("id_User", $id_user);
    return $this->db->get("tabel_user");
  }

  function logged_id()
  {
      return $this->session->userdata('user_id');
  }

  //fungsi check login
  function check_login($table, $field1, $field2)
  {
      $this->db->select('*');
      $this->db->from($table);
      $this->db->where($field1);
      $this->db->where($field2);
      $this->db->limit(1);
      $query = $this->db->get();
      if ($query->num_rows() == 0) {
          return FALSE;
      } else {
          return $query->result();
      }
  }

}
