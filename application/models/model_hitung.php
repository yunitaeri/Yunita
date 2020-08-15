<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_Hitung extends CI_Model
{

    // TABEL JENIS PUPUK
    private $TABEL_JENIS = "jenis_pupuk";
    private $ID_JENIS = "id_jenis";
    private $JENIS_PUPUK = "jenis_pupuk";

    //TABEl JENIS KANDUNGAN
    private $TABEL_KANDUNGAN = "jenis_kandungan";
    private $ID_KANDUNGAN = "id_kandungan";
    private $JENIS_KANDUNGAN = "jenis_kandungan";

    //TABEL ACUAN
    private $TABEL_ACUAN = "acuan";
    private $ID_ACUAN = "id_acuan";
    private $UMUR = "umur";
    private $PH = "pH";
    private $LUAS = "luas";
    private $JARAK = "jarak";
    private $TINGGI = "tinggi";

    //TABEL riwayat
    private $TABEL_RIWAYAT = "riwayat" ;
    private $ID_RIWAYAT = "id_riwayat";
    private $TABEL_DETAIL_RIWAYAT = "detail_riwayat";
    private $ID_DETAIL_RIWAYAT = "id_detail";
    private $RANGKING = "rangking";

    public function ambil_semua($tabel)
    {
      return $this->db->get($tabel)->result_array();
    }

    public function simpan($jenis, $input, $jarak)
    {
      $data = array(
        $this->ID_RIWAYAT => "",
        $this->UMUR => $input["umur"],
        $this->PH => $input["pH"],
        $this->LUAS => $input["luas"],
        $this->JARAK => $input["jarak"],
        $this->TINGGI => $input["tinggi"],
        $this->ID_KANDUNGAN => $jenis,
        "id_User" => $this->session->userdata("user_id")
      );
      $this->db->insert($this->TABEL_RIWAYAT, $data);
      $id = $this->db->insert_id();
      foreach ($jarak as $key => $value) {
          $data2 = array(
            $this->ID_DETAIL_RIWAYAT => "",
            $this->ID_RIWAYAT => $id,
            $this->ID_JENIS =>$value[$this->ID_JENIS],
            $this->RANGKING => $value["rank"]
          );
          $this->db->insert($this->TABEL_DETAIL_RIWAYAT,$data2);
    }
  }

    public function TopSis($jenis, $input)
    {

        $rule = $this->representasi_data($jenis);
        $kuadrat = $this->kuadrat_alternatif($rule);
        $normalisasi = $this->normalisasi($kuadrat);
        $terbobot = $this->normalisasi_terbobot($normalisasi, $input);
        $ideal = $this->pencarian_ideal($terbobot, $jenis);
        $jarak = $this->jarak_solusi($terbobot, $ideal);
        $this->simpan($jenis,$input,$jarak);
      return $jarak;

    }

    public function fuzzy($kandungan)
    {
      $data = [];
          switch ($kandungan) {
              case 1:
                  $pupuk = $this->db->select("*")
                      ->from($this->TABEL_JENIS)
                      ->where("N !=", 0)->get()->result_array();

                  foreach ($pupuk as $value) {
                      $RENDAH = 0;
                      $NORMAL = 0;
                      $TINGGI = 0;
                      if ($value["N"] <= 15) {
                          $RENDAH = ($value["N"] - 0) / (15 - 0);
                      } else if ($value["N"] >= 15 && $value["N"] <= 30) {
                          $RENDAH = (30 - $value["N"]) / (30 - 15);
                          $NORMAL = ($value["N"] - 15) / (30 - 15);
                      } else if ($value["N"] >= 30 && $value["N"] <= 45) {
                          $NORMAL = (45 - $value["N"]) / (45 - 30);
                          $TINGGI = ($value["N"] - 30) / (45 - 30);
                      } else if ($value["N"] > 45) {
                          $TINGGI = 1;
                      }

                      $baris = array(
                          "id_jenis" => $value["id_jenis"],
                          "jenis_pupuk" => $value["jenis_pupuk"],
                          "rendah" => $RENDAH,
                          "normal" => $NORMAL,
                          "tinggi" => $TINGGI
                      );

                      array_push($data, $baris);
                  }

                  break;

              case 2:
                  $pupuk = $this->db->select("*")
                      ->from($this->TABEL_JENIS)
                      ->where("F !=", 0)->get()->result_array();

                  foreach ($pupuk as $value) {
                      $RENDAH = 0;
                      $NORMAL = 0;
                      $TINGGI = 0;

                      if ($value["F"] <= 12) {
                          $RENDAH = ($value["F"] - 0) / (12 - 0);
                      } else if ($value["F"] >= 12 && $value["F"] <= 24) {
                          $RENDAH = (24 - $value["F"]) / (24 - 12);
                          $NORMAL = ($value["F"] - 12) / (24 - 12);
                      } else if ($value["F"] >= 24 && $value["F"] <= 36) {
                          $NORMAL = (36 - $value["F"]) / (36 - 24);
                          $TINGGI = ($value["F"] - 24) / (36 - 24);
                      } else {
                          $TINGGI = 1;
                      }

                      $baris = array(
                          "id_jenis" => $value["id_jenis"],
                          "jenis_pupuk" => $value["jenis_pupuk"],
                          "rendah" => $RENDAH,
                          "normal" => $NORMAL,
                          "tinggi" => $TINGGI
                      );

                      array_push($data, $baris);
                  }
                  break;

              case 3:
                  $pupuk = $this->db->select("*")
                      ->from($this->TABEL_JENIS)
                      ->where("K !=", 0)->get()->result_array();

                  foreach ($pupuk as $value) {
                      $RENDAH = 0;
                      $NORMAL = 0;
                      $TINGGI = 0;

                      if ($value["K"] <= 20) {
                          $RENDAH = ($value["K"] - 0) / (20 - 0);
                      } else if ($value["K"] >= 20 && $value["K"] <= 40) {
                          $RENDAH = (40 - $value["K"]) / (40 - 20);
                          $NORMAL = ($value["K"] - 20) / (40 - 20);
                      } else if ($value["K"] >= 40 && $value["K"] <= 60) {
                          $NORMAL = (60 - $value["K"]) / (60 - 40);
                          $TINGGI = ($value["K"] - 40) / (60 - 40);
                      } else {
                          $TINGGI = 1;
                      }

                      $baris = array(
                          "id_jenis" => $value["id_jenis"],
                          "jenis_pupuk" => $value["jenis_pupuk"],
                          "rendah" => $RENDAH,
                          "normal" => $NORMAL,
                          "tinggi" => $TINGGI
                      );

                      array_push($data, $baris);
                  }
                  break;
          }

          for ($i = 0; $i < count($data); $i++) {
              $max = 0;
              $tingkat = "";
              foreach ($data[$i] as $key => $value) {
                  if ($max < $value && $key != "id_jenis" && $key != "jenis_pupuk") {
                      $max = $value;
                      $tingkat = $key;
                  }
              }
              $data[$i]["tingkat"] = $tingkat;
          }

          return $data;
    }

    public function representasi_data($jenis)
    {
        $data = $this->db->select("a.{$this->ID_JENIS},
                                    a.{$this->JENIS_PUPUK},
                                    c.{$this->UMUR},
                                    c.{$this->PH},
                                    c.{$this->LUAS},
                                    c.{$this->JARAK},
                                    c.{$this->TINGGI}")
            ->from("{$this->TABEL_JENIS} as a, {$this->TABEL_KANDUNGAN} as b, {$this->TABEL_ACUAN} as c")
            ->where("c.{$this->ID_JENIS} = a.{$this->ID_JENIS}
                    AND c.{$this->ID_KANDUNGAN} = b.{$this->ID_KANDUNGAN}
                    AND c.{$this->ID_KANDUNGAN} = $jenis")
            ->get()->result_array();

        return $data;
    }

    public function kuadrat_alternatif($data)
    {
        $kuadrat = array();
        $keys = array_keys($data[0]);
        $sum = array();

        foreach ($keys as $sumIdx) {
            $sum[$sumIdx] = 0;
        }

        foreach ($data as $row) {
            $element = array();

            foreach ($keys as $rows) {
                if ($rows == "id_jenis") {
                    $element[$rows] = $row[$rows];
                    $sum[$rows] = " - ";
                } else if ($rows == "jenis_pupuk") {
                    $element[$rows] = $row[$rows];
                    $sum[$rows] = "Total";
                } else {
                    $element[$rows] = pow($row[$rows], 2);
                    $sum[$rows] += $element[$rows];
                }
            }

            array_push($kuadrat, $element);
        }

        array_push($kuadrat, $sum);


        return $kuadrat;
    }

    public function normalisasi($data)
    {
        //hasil kuadrat dibagi akar dari total parameter
        $normalisasi = array();
        $keys = array_keys($data[0]);
        $last = end($data);
        array_pop($data);

        foreach ($data as $row) {
            $element = array();

            foreach ($keys as $rows) {
                if ($rows == "id_jenis") {
                    $element[$rows] = $row[$rows];
                } else if ($rows == "jenis_pupuk") {
                    $element[$rows] = $row[$rows];
                } else {
                    $element[$rows] = $row[$rows] / sqrt($last[$rows]);
                }
            }

            array_push($normalisasi, $element);
        }

        return $normalisasi;
    }

    public function normalisasi_terbobot($data, $input)
    {
        //normalisasi parameter dikali nilai input petani

        $terbobot = array();
        $keys = array_keys($data[0]);

        foreach ($data as $row) {
            $element = array();

            foreach ($keys as $rows) {
                if ($rows == "id_jenis") {
                    $element[$rows] = $row[$rows];
                } else if ($rows == "jenis_pupuk") {
                    $element[$rows] = $row[$rows];
                } else {
                    $element[$rows] = $row[$rows] * $input[$rows];
                }
            }

            array_push($terbobot, $element);
        }

        return $terbobot;
    }

    public function pencarian_ideal($data, $jenis)
    {
        $ideal = [];
        //ideal positif  = min dari cost dan max dari benefit
        $ideal["positif"] = [];
        //ideal negatif  = min dari benefit dan max dari cost
        $ideal["negatif"] = [];


        $keys = array_keys($data[0]);
        //inisialisasi array
        foreach ($keys as $index) {
            $ideal[$index] = [];
        }
        //pembentukan ulang array
        foreach ($data as $row) {
            foreach ($keys as $rows) {
                array_push($ideal[$rows], $row[$rows]);
            }
        }
        // pencarian cost dan benefit

        if ($jenis == 1) {
            foreach ($keys as $idx) {
                if ($idx == "id_jenis") {
                    $ideal["positif"][$idx] = "(+)";
                    $ideal["negatif"][$idx] = "(-)";
                } else if ($idx == "jenis_pupuk") {
                    $ideal["positif"][$idx] = "";
                    $ideal["negatif"][$idx] = "";
                    //Menghitung Cost
                } else if ($idx == "umur" || $idx == "tinggi") {
                    $ideal["positif"][$idx] = min($ideal[$idx]);
                    $ideal["negatif"][$idx] = max($ideal[$idx]);
                    //Menghitung Benefit
                } else {
                    $ideal["positif"][$idx] = max($ideal[$idx]);
                    $ideal["negatif"][$idx] = min($ideal[$idx]);
                }
            }
        } else if ($jenis == 2) {
            foreach ($keys as $idx) {
                if ($idx == "id_jenis") {
                    $ideal["positif"][$idx] = "(+)";
                    $ideal["negatif"][$idx] = "(-)";
                } else if ($idx == "jenis_pupuk") {
                    $ideal["positif"][$idx] = "";
                    $ideal["negatif"][$idx] = "";
                    //Menghitung Cost
                } else {
                    $ideal["positif"][$idx] = max($ideal[$idx]);
                    $ideal["negatif"][$idx] = min($ideal[$idx]);
                }
            }
        } else if ($jenis == 3) {
            foreach ($keys as $idx) {
                if ($idx == "id_jenis") {
                    $ideal["positif"][$idx] = "(+)";
                    $ideal["negatif"][$idx] = "(-)";
                } else if ($idx == "jenis_pupuk") {
                    $ideal["positif"][$idx] = "";
                    $ideal["negatif"][$idx] = "";
                    //Menghitung Cost
                } else if ($idx == "pH" || $idx == "tinggi") {
                    $ideal["positif"][$idx] = min($ideal[$idx]);
                    $ideal["negatif"][$idx] = max($ideal[$idx]);
                    //Menghitung Benefit
                } else {
                    $ideal["positif"][$idx] = max($ideal[$idx]);
                    $ideal["negatif"][$idx] = min($ideal[$idx]);
                }
            }
        }




        return $ideal;
    }

    public function jarak_solusi($terbobot, $ideal)
    {
        $jarak = [];
        $positif = $ideal["positif"];
        $negatif = $ideal["negatif"];
        $RC = [];
        $keys = array_keys($terbobot[0]);

        foreach ($terbobot as $row) {
            $element = [];
            $element[$keys[0]] = $row[$keys[0]];
            $element[$keys[1]] = $row[$keys[1]];
            $element["d+"] = sqrt(
                pow(($row[$keys[2]] - $positif[$keys[2]]), 2) +
                    pow(($row[$keys[3]] - $positif[$keys[3]]), 2) +
                    pow(($row[$keys[4]] - $positif[$keys[4]]), 2) +
                    pow(($row[$keys[5]] - $positif[$keys[5]]), 2) +
                    pow(($row[$keys[6]] - $positif[$keys[6]]), 2)
            );
            $element["d-"] = sqrt(
                pow(($row[$keys[2]] - $negatif[$keys[2]]), 2) +
                    pow(($row[$keys[3]] - $negatif[$keys[3]]), 2) +
                    pow(($row[$keys[4]] - $negatif[$keys[4]]), 2) +
                    pow(($row[$keys[5]] - $negatif[$keys[5]]), 2) +
                    pow(($row[$keys[6]] - $negatif[$keys[6]]), 2)
            );
            $element["RC+"] = $element["d-"] / ($element["d+"] + $element["d-"]);
            array_push($jarak, $element);
            array_push($RC, $element["RC+"]);
        }

        //perankingan RC+
        $rank = [];
        for ($i = 0, $j = 1; $i < count($RC); $i++, $j++) {
            $rank[$i] = $j;
        }
        array_multisort($RC, SORT_DESC, $rank);

        for ($i = 0; $i < count($jarak); $i++) {
            $jarak[$i]["rank"] = $rank[$i];
        }

        return $jarak;
    }
}
