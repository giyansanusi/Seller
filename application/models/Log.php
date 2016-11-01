<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log extends CI_Model {

    //Ambil Data Article by id
    public function ambilDaftarLog($date){
        $query=$this->db->query("SELECT * FROM log WHERE TANGGAL = '$date' ORDER BY '$date' ASC");
        return $query->result_array();
    }
}