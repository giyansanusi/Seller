<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Model {

    //Ambil Data Article by id
    public function login($username, $password){
        $query=$this->db->query("SELECT * FROM admin WHERE USERNAME = '$username' AND PASSWORD = '$password'");
        $num_row = $query->num_rows();
        if ($num_row > 0) {
            return TRUE;
        } else{
            return FALSE;
        }
    }

    public function read_user_information($username, $password) {

        $query=$this->db->query("SELECT * FROM admin WHERE USERNAME = '$username' AND PASSWORD = '$password'");

        if ($query->num_rows() == 1) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function insertActivity($nama, $deskripsi)
    {
        date_default_timezone_set("Asia/Jakarta");
        $date = date('Y-m-d');
        $time = date('H:s');
        $hasilSimpan=array(
                'ADMIN'=>$nama,
                'TANGGAL'=>$date,
                'JAM'=>$time,
                'DESKRIPSI'=>$deskripsi
        );
        $this->db->insert('log',$hasilSimpan);
        
    }

    public function getProfileInfo($idAdmin)
    {
        $query=$this->db->query("SELECT * FROM admin WHERE IDADMIN = '$idAdmin'");
        return $query->result_array();
    }

     //Update Article
    public function updateProfile($id, $username, $namaadmin, $gambar){
         $this->db->query("UPDATE admin SET USERNAME = '$username', NAMAADMIN = '$namaadmin',GAMBAR = '$gambar' WHERE IDADMIN = '$id'");
    }

    //Update Article
    public function updatePassword($id, $password){
         $this->db->query("UPDATE admin SET PASSWORD = '$password' WHERE IDADMIN = '$id'");
    }

}