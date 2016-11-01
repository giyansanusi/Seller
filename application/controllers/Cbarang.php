<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cbarang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Barang','',TRUE);
	}

	public function tampilkanDaftarBarang()
	{
		$data['listBarang'] = $this->Barang->ambilDaftarBarang(); 
		$data['listMakanan'] = $this->Barang->ambilDaftarBarangByKategori(1); 
		$data['listMerchandise'] = $this->Barang->ambilDaftarBarangByKategori(2); 
		$data['vcontent'] = 'web/content';
		$this->load->view('web/vtemplate', $data);
	}

}

/* End of file Barang.php */
/* Location: ./application/controllers/Barang.php */