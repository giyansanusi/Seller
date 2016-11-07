<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_addcarousel extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		if ($this->session->userdata('status') != "login") {

			header("location: http://localhost/seller/index.php/admin/c_login/");
		}
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('pagination');
	}

	public function index()
	{
		$data['vcontent'] = 'admin/v_carousel';
		$this->load->view('admin/v_template',$data);
	}

	public function editCarousel()
	{
		$data['vcontent'] = 'admin/v_edit_carousel';
		$this->load->view('admin/v_template',$data);
	}

	// todo disini bang!!!!!!!!!!!!
	public function submitItem()
	{
		$namabarang=$this->input->post('namabarang');
    	$hargabarang=$this->input->post('hargabarang');
    	$deskripsi=$this->input->post('deskripsi');
    	$beratbarang=$this->input->post('beratbarang');
    	$kategori=$this->input->post('kategori');

		$this->form_validation->set_rules('namabarang','Nama Barang','required');
        $this->form_validation->set_rules('hargabarang','Harga Barang','required');
        $this->form_validation->set_rules('deskripsi','Deskripsi','required');
        $this->form_validation->set_rules('beratbarang','Berat Barang','required');
        $this->form_validation->set_rules('kategori','Kategori','required');



        if($this->form_validation->run()==FALSE){
           	$data['vcontent']='admin/v_tambah_item';
    		$this->load->view('admin/v_template', $data);
        }else{
        	$config['upload_path']          = './gambar/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 100;
			$config['max_width']            = 1024;
			$config['max_height']           = 768;
		 
			$this->load->library('upload', $config);
		 
			if ( ! $this->upload->do_upload('image')){
				$error = array('error' => $this->upload->display_errors());
				// $this->load->view('v_upload', $error);
				echo $error['error'];
				die();
			}else{
				$gbr = $this->upload->data();
				$namagambar = $gbr['file_name'];
				$this->Barang->simpanDataBarang($namabarang, $hargabarang, $beratbarang, $kategori, $deskripsi, $namagambar);

			}
    
	    	redirect('admin/c_item/tampilkanDaftarBarang');
        }

		
	}

}

/* End of file C_addcarousel.php */
/* Location: ./application/controllers/admin/C_addcarousel.php */