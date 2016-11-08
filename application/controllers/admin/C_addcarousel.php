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
        $this->load->model('Carousel','',TRUE);
        $this->load->library('form_validation');
        $this->load->library('pagination');
	}

	public function index()
	{
		$data['listGambar'] = $this->Carousel->getAllNamaGambar();
		$data['vcontent'] = 'admin/v_carousel';
		$this->load->view('admin/v_template',$data);
	}

	public function editCarousel()
	{
		$idgambar = $this->uri->segment(4);
		$namagambarold = $this->Carousel->getNamaGambar($idgambar);

		$data['namagambarold'] = $namagambarold[0]['NAMAGAMBAR'];
		$data['idgambar'] = $idgambar;
		$data['vcontent'] = 'admin/v_edit_carousel';
		$this->load->view('admin/v_template',$data);
	}

	public function submitItem()
	{
		$idgambar = $this->uri->segment(4); 
		$namagambarold = $this->uri->segment(5); 
		if($namagambarold != ""){
			unlink("./assets/admin/img/carousel/".$namagambarold);	
		}

		$config['upload_path']          = './assets/admin/img/carousel/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 1000;
		$config['max_width']            = 2024;
		$config['max_height']           = 1200;
	 
		$this->load->library('upload', $config);
	 
		if ( ! $this->upload->do_upload('image')){
			$error = array('error' => $this->upload->display_errors());
			echo $error['error'];
			die();
		}else{

			$gbr = $this->upload->data();
			$namagambar = $gbr['file_name'];
			$this->Carousel->updateGambarCarousel($idgambar, $namagambar);

		}

		redirect('admin/c_addcarousel/index');


		
	}

}

/* End of file C_addcarousel.php */
/* Location: ./application/controllers/admin/C_addcarousel.php */