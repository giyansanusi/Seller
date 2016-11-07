<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Model {
    
    //Ambil Daftar Semua Barang
    public function ambilDaftarBarang(){
        $query=$this->db->query("SELECT * FROM barang ORDER BY IDBARANG ASC");
		return $query->result_array();
	}

    ////Ambil Daftar Semua Barang
    public function ambilDaftarBarangByKategori($kategori){
        $query=$this->db->query("SELECT * FROM barang WHERE KATEGORI = '$kategori' ORDER BY IDBARANG ASC");
        return $query->result_array();
    }

    //Ambil Data Barang by id
    public function ambilDataBarangById($id){
        $query=$this->db->query("SELECT * FROM barang WHERE IDBARANG = '$id'");
        return $query->result_array();
    }

    //Simpan Data Barang
    //TODO : Author masih manual, ntar mah ngambil dari yang login
	public function simpanDataBarang($nama, $harga, $berat, $kategori, $deskripsi, $gambar){
        $hasilSimpan=array(
                'NAMABARANG'=>$nama,
                'HARGABARANG'=>$harga,
                'BERATBARANG'=>$berat,
                'KATEGORI'=>$kategori,
                'DESKRIPSI'=>$deskripsi,
                'GAMBAR'=>$gambar
        );
        $this->db->insert('barang',$hasilSimpan);
	}

    //Update Article
    public function ubahDataBarang($id, $nama, $harga, $berat, $kategori, $deskripsi, $gambar){
         $this->db->query("UPDATE barang SET NAMABARANG = '$nama', HARGABARANG = '$harga',BERATBARANG = '$berat', KATEGORI = '$kategori', DESKRIPSI = '$deskripsi', GAMBAR = '$gambar' WHERE IDBARANG = '$id'");
    }

    //Cari Article
	public function cariDataBarang($nama){
        $query = $this->db->query("SELECT * FROM barang where NAMABARANG LIKE '%$nama%'");
        return $query->result_array();
	}

	//Hapus Data Article
	public function hapusDataBarang($id){
        $query = $this->db->query("DELETE FROM barang WHERE IDBARANG='$id'");
		return $query;
	}

    // Ngitung jumlah row barang buat seluruh barang yang ada
    public function recordCountForAllBarang() {
       return $this->db->count_all("barang");
    }

    // Ngitung jumlah row barang buat seluruh barang yang ada
    public function recordCountForSearchResult($nama) {
       $query = $this->db->query("SELECT * FROM barang where NAMABARANG LIKE '%$nama%'");
       return $query->num_rows();
    }

    // Ngambil data barang per limit (buat pagination)
    public function ambilDaftarBarangWithLimit($limit, $offset) {
            $this->db->limit($limit, $offset);
            $query = $this->db->get('barang');
            return $query->result_array();
    }

    //cari artikel dan di page nya ada pagination
    public function cariDataBarangWithLimit($nama, $limit, $offset)
    {
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->like('NAMABARANG', $nama);
        $this->db->limit($limit, $offset);
        $query = $this->db->get();
        return $query->result_array();
        }
}

