<?php

defined('BASEPATH') or exit('No direct script access allowed');

class model_Laporan extends CI_Model
{

    public function get_laporan($user_id)
    {
        $data = $this->db->select("*")
            ->from("riwayat as r")
            ->join("jenis_kandungan as k", "r.id_kandungan = k.id_kandungan")
            ->join("tabel_user as u", "u.id_User = r.id_User")
            ->where("r.id_User", $user_id)->get()->result_object();
        return $data;
    }
}

/* End of file Model_Laporan.php */
