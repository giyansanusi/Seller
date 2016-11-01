<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_item extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('session');
		if ($this->session->userdata('status') != "login") {

			header("location: http://localhost/seller/index.php/admin/c_login/");
		}
        $this->load->helper(array('form', 'url'));
        $this->load->model('Barang','',TRUE);
        $this->load->library('form_validation');
        $this->load->library('pagination');
	}

	public function tampilkanDaftarBarang()
	{

		$config = array();
		$config["base_url"] = base_url() . "index.php/admin/c_item/tampilkanDaftarBarang";
		$total_row = $this->Barang->recordCount();
		$config["total_rows"] = $total_row;
		$config["per_page"] = 3;
		$config['next_link'] = 'Next';
		$config['prev_link'] = 'Previous';

		$this->pagination->initialize($config);
		if($this->uri->segment(4)){
			$page = ($this->uri->segment(4)) ;
		}
		else{
			$page = 0;
		}

		

		$data['vcontent'] = 'admin/v_item';
		$data['listBarang'] = $this->Barang->ambilDaftarBarangWithLimit($config["per_page"], $page);

		// print_r($data['listBarang']);
		// die();
		$str_links = $this->pagination->create_links();
		$data["links"] = explode('&nbsp;',$str_links );
		$data['page'] = $page +1;
		$this->load->view('admin/v_template',$data);

	}

	public function tambahItem()
	{
		$data['vcontent'] = 'admin/v_tambah_item';
		$this->load->view('admin/v_template',$data);
	}

	public function editBarang()
	{
		$id = $this->uri->segment(4);
		$data['listBarang'] = $this->Barang->ambilDataBarangById($id);	
		$data['vcontent']='admin/v_edit_item';
    	$this->load->view('admin/v_template', $data);
	}

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

	public function submitItemEdit()
	{
		$idbarang = $this->uri->segment(4);
		$namabarang=$this->input->post('namabarang');
    	$hargabarang=$this->input->post('hargabarang');
    	$deskripsi=$this->input->post('deskripsi');
    	$namagambar=$this->input->post('image2');   	
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
				$this->Barang->ubahDataBarang($idbarang, $namabarang, $hargabarang, $beratbarang, $kategori, $deskripsi, $namagambar);
			}else{
				unlink("./gambar/".$namagambar);
				$gbr = $this->upload->data();
				$namagambar = $gbr['file_name'];
				$this->Barang->ubahDataBarang($idbarang, $namabarang, $hargabarang, $beratbarang, $kategori, $deskripsi, $namagambar);

			}
    
	    	$data['vcontent'] = 'admin/v_tambah_item';
			$this->load->view('admin/v_template',$data);
        }

		redirect('admin/c_item/tampilkanDaftarBarang');
	}


	public function cariBarang()
	{
        $nama=$this->input->post('search');
		$data['listBarang'] = $this->Barang->cariDataBarang($nama);
		$data['vcontent'] = 'admin/v_item';
        $this->load->view('admin/v_template', $data);
	}

	public function hapusBarang()
	{
		$id = $this->uri->segment(4);
		$namagambar = $this->uri->segment(5);
		$this->Barang->hapusDataBarang($id);
		unlink("./gambar/".$namagambar);
		redirect('admin/C_item/tampilkanDaftarBarang','refresh');
	}

}
