<?php

Class C_log extends CI_Controller {

	public function __construct() {
	parent::__construct();

		$this->load->library('session');
		if ($this->session->userdata('status') != "login") {

			header("location: http://localhost/seller/index.php/admin/c_login/");
		}
        $this->load->model('Log','',TRUE);
        $this->load->helper(array('form', 'url'));
        $this->load->helper('text');
        $this->load->library('form_validation');

	}

	public function tampilkanDaftarLog()
	{
		if (empty($date = $this->input->post('date'))) {
			$date = date("Y-m-d");
		}
		$data['vcontent'] = 'admin/v_log';
		$data['listLog'] = $this->Log->ambilDaftarLog($date);
		$this->load->view('admin/v_template',$data);


	}
}

?>