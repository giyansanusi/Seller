<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log extends CI_Model {

    //Ambil Data log by date
    public function ambilDaftarLogById($date){
        $query=$this->db->query("SELECT * FROM log WHERE TANGGAL = '$date' ORDER BY '$date' ASC");
        return $query->result_array();
    }

    public function ambilDaftarLog(){
        $query=$this->db->query("SELECT * FROM log ORDER BY TANGGAL ASC");
        return $query->result_array();
    }
}

