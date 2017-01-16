<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_profile extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('session');
		if ($this->session->userdata('status') != "login") {

			header("location: http://localhost/seller/index.php/admin/c_login/");
		}
        $this->load->model('Admin','',TRUE);
        $this->load->helper(array('form', 'url'));
        $this->load->helper('text');
        $this->load->library('form_validation');
	}

	public function index()
	{
		$data['IDADMIN'] = $this->session->userdata('idadmin');
		$data['NAMAADMIN'] = $this->session->userdata('nama');
		$data['USERNAME'] = $this->session->userdata('username');
		$data['GAMBAR'] = $this->session->userdata('gambar');
		$data['vcontent'] = 'admin/v_profile';
		$this->load->view('admin/v_template', $data);
	}

	public function editAdmin()
	{

		$data['IDADMIN'] = $this->session->userdata('idadmin');
		$data['NAMAADMIN'] = $this->session->userdata('nama');
		$data['USERNAME'] = $this->session->userdata('username');
		$data['GAMBAR'] = $this->session->userdata('gambar');

		$data['vcontent'] = 'admin/v_edit_profile';
		$this->load->view('admin/v_template',$data);
	}

	public function changePassword()
	{
		# code...
		# TODO coy ...
	}

	public function submit()
	{

		//TODO : Handle apabila gambar tidak di update(di kosongkan) pada saat update
		
		$this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('namaadmin','Nama','required');


        if($this->form_validation->run()==FALSE){
           	$data['IDADMIN'] = $this->session->userdata('idadmin');
			$data['NAMAADMIN'] = $this->session->userdata('nama');
			$data['USERNAME'] = $this->session->userdata('username');
			$data['GAMBAR'] = $this->session->userdata('gambar');

			$data['vcontent'] = 'admin/v_edit_profile';
			$this->load->view('admin/v_template',$data);
        }else{
        	$id = $this->session->userdata('idadmin');
        	$username = $this->input->post('username');
			$namaadmin = $this->input->post('namaadmin');
			$namagambarold = $this->session->userdata('gambar');
			if($namagambarold != ""){
				unlink("./assets/admin/img/admin/".$namagambarold);	
			}

			$config['upload_path']          = './assets/admin/img/admin/';
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
				$this->Admin->updateProfile($id, $username, $namaadmin, $namagambar);

				//set session pake data baru
				$session_data = array(
					'username' => $username,
					'nama' => $namaadmin,
					'status' => 'login',
					'gambar' => $namagambar
				);
				// Add user data in session
				$this->session->set_userdata($session_data);

			}

			redirect('admin/c_profile/index');
        }

		
	}

}

/* End of file C_profile.php */
/* Location: ./application/controllers/admin/C_profile.php */