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
		# code...
		# TODO coy ...
	}

	public function changePassword()
	{
		# code...
		# TODO coy ...
	}

}

/* End of file C_profile.php */
/* Location: ./application/controllers/admin/C_profile.php */