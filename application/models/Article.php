<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Admin','',TRUE);
    }
    
    //Ambil Daftar Semua Article
    public function ambilDaftarArticle(){
        $query=$this->db->query("SELECT * FROM article ORDER BY ID_ARTICLE ASC");
		return $query->result_array();
	}

    //Ambil Data Article by id
    public function ambilDaftarArticleById($id){
        $query=$this->db->query("SELECT * FROM article WHERE ID_ARTICLE = '$id'");
        return $query->result_array();
    }

    //Simpan Data Article
    //TODO : Author masih manual, ntar mah ngambil dari yang login
	public function simpanDataArticle($judul, $konten, $kategori, $tag, $status){
        $hasilSimpan=array(
                'JUDUL'=>$judul,
                'KONTEN'=>$konten,
                'KATEGORI'=>$kategori,
                'TAG'=>$tag,
                'STATUS'=>$status,
                'AUTHOR'=> 'Muhammad Giyan Sanusi'
        );
        $this->db->insert('article',$hasilSimpan);

        //menyimpan log aktivitas
        $nama = $this->session->userdata('nama');
        $deskripsi = 'Menambah article dengan judul &nbsp'.$judul;
        $this->Admin->insertActivity($nama, $deskripsi);

	}

    //Update Article
    public function ubahDataArticle($id, $judul, $konten, $kategori, $tag, $status){
         $this->db->query("UPDATE article SET JUDUL = '$judul', KONTEN = '$konten', KATEGORI = '$kategori', TAG = '$tag', STATUS = '$status' WHERE ID_ARTICLE = '$id'");
    
        //menyimpan log aktivitas
        $nama = $this->session->userdata('nama');
        $deskripsi = 'Mengubah article dengan judul &nbsp'.$judul;
        $this->Admin->insertActivity($nama, $deskripsi);

    }

    //Cari Article
	public function cariDataArticle($judul){
        $query = $this->db->query("SELECT * FROM article where JUDUL LIKE '%$judul%'");
        return $query->result_array();
	}

	//Hapus Data Article
	public function hapusDataArticle($id, $judul){
        $this->db->query("DELETE FROM article WHERE ID_ARTICLE='$id'");
        
        //menyimpan log aktivitas
        $nama = $this->session->userdata('nama');
        $deskripsi = 'Menghapus article dengan judul &nbsp'.$judul;
        $this->Admin->insertActivity($nama, $deskripsi);

	}
}