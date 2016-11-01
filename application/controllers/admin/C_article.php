<?php

class C_article extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->library('session');
		if ($this->session->userdata('status') != "login") {

			header("location: http://localhost/seller/index.php/admin/c_login/");
		}
        $this->load->model('Article','',TRUE);
        $this->load->helper(array('form', 'url'));
        $this->load->helper('text');
        $this->load->library('form_validation');
	}


	//Manmpilkan Daftar Article
	function tampilkanDaftarArticle()
	{
		$data['vcontent'] = 'admin/v_article';
		$data['listArticle'] = $this->Article->ambilDaftarArticle();
		// print_r($data['listArticle']);
		// die();
		$this->load->view('admin/v_template',$data);
	}

	public function tambahArticle()
	{
        $data['vcontent']='admin/v_tambah_article';
    	$this->load->view('admin/v_template', $data);
	}

	public function editArticle()
	{
		$id = $this->uri->segment(4);
		$data['listArticle'] = $this->Article->ambilDaftarArticleById($id);	
		$data['vcontent']='admin/v_edit_article';
    	$this->load->view('admin/v_template', $data);
	}

	public function submitArticle()
	{
		$judul=$this->input->post('judul');
    	$konten=$this->input->post('konten');
    	$kategori=$this->input->post('kategori');
    	$tags=$this->input->post('tags');
    
		//check button draft atau publish
		$btn=$this->input->post('btnPublish');
		if ($btn == 1) {
			// status == 1 -> publish
			$status = 1;
		}else{
			//status == 0 -> draft
			$status = 0;
		}
        
        $this->form_validation->set_rules('judul','Judul','required');
        $this->form_validation->set_rules('konten','Konten','required');
        $this->form_validation->set_rules('kategori','Kategori','required');

        if($this->form_validation->run()==FALSE){
           	$data['vcontent']='admin/v_tambah_article';
    		$this->load->view('admin/v_template', $data);
        }else{

        	$sesi = $this->uri->segment(4);

        	if ($sesi == 'tambah') {
        		$this->Article->simpanDataArticle($judul,$konten,$kategori,$tags,$status);
        	}else{
        		$id = $this->input->post('id');
        		$this->Article->ubahDataArticle($id,$judul,$konten,$kategori,$tags,$status);
        	}
    
	    	
	    	redirect('admin/C_article/tampilkanDaftarArticle');
        }
	}

	public function cariArticle()
	{
        $nama=$this->input->post('search');
		$data['listArticle'] = $this->Article->cariDataArticle($nama);
		$data['vcontent'] = 'admin/v_article';
        $this->load->view('admin/v_template', $data);
	}

	public function hapusArticle()
	{
        $vkd = $this->uri->segment(4);
        $judul = $this->uri->segment(5);
		$this->Article->hapusDataArticle($vkd, $judul);
		redirect('admin/C_article/tampilkanDaftarArticle');
	}
}
?>