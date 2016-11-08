<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carousel extends CI_Model {

	function updateGambarCarousel($idGambar, $namaGambar)
	{
		$this->db->query("UPDATE carousel SET NAMAGAMBAR = '$namaGambar' WHERE IDGAMBAR = '$idGambar'");
	}

	function getNamaGambar($idGambar)
	{
		$query=$this->db->query("SELECT NAMAGAMBAR FROM carousel WHERE IDGAMBAR = '$idGambar'");
		return $query->result_array();
	}

	public function getAllNamaGambar()
	{
		$query=$this->db->query("SELECT NAMAGAMBAR FROM carousel ORDER BY IDGAMBAR ASC");
		return $query->result_array();	
	}

}

/* End of file Carousel.php */
/* Location: ./application/models/Carousel.php */