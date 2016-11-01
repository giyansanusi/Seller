<?php

Class C_login extends CI_Controller {

	public function __construct() {
	parent::__construct();

		// Load form helper library
		$this->load->helper('form');

		// Load form validation library
		$this->load->library('form_validation');

		// Load session library
		$this->load->library('session');

		//load model admin
		$this->load->model('Admin','',TRUE);


	}

	// Show login page
	public function index() {
		$this->load->view('admin/v_login');
	}

	// Check for user login process
	public function user_login_process() {

		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/v_login');
		} else {
			
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			
			$result = $this->Admin->login($username, $password);
			if ($result == TRUE) {

				$result = $this->Admin->read_user_information($username, $password);
				if ($result != false) {
					$session_data = array(
						'username' => $result[0]['USERNAME'],
						'nama' => $result[0]['NAMAADMIN'],
						'status' => 'login',
						'gambar' => $result[0]['GAMBAR']
					);
					// Add user data in session
					$this->session->set_userdata($session_data);
					redirect('admin/main','refresh');
				}
			} else {
				$data = array(
					'error_message' => 'Invalid Username or Password'
				);
				$this->load->view('admin/v_login', $data);
			}
		}
	}

	// Logout from admin page
	public function logout() {
	// Removing session data
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('status');
		$this->session->unset_userdata('gambar');
		$data['message_display'] = 'Successfully Logout';
		$this->load->view('admin/v_login', $data);
	}

}

?>