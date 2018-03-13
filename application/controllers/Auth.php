<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct() {
		parent::__construct();

		//Load form helper library
		$this->load->helper('form');

		//Load form validation library
		$this->load->library('form_validation');

		//Load session library
		$this->load->library('session');

		//Load database
		$this->load->model('m_auth');
	}

	public function login() {
		$this->load->view('layout/common/login');
	}

	public function login_process() {
		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

		if ($this->form_validation->run() == FALSE) {
			if (isset($this->session->userdata['logged_in'])) {
				//$this->load->view('layout/layout');
				redirect('home', 'refresh');
			} else {
				redirect('auth/login', 'refresh');
			}
		} else {
			$data = array(
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password')
			);
			$result = $this->m_auth->login($data);
			if ($result == TRUE) {
				$username = $this->input->post('username');
				$result = $this->m_auth->read_user_information($username);
				if ($result != FALSE) {
					$session_data = array(
						'username' => $result->user_name,
						'email' => $result->user_email
					);
					//Add user data in session
					$this->session->set_userdata('logged_in', $session_data);
					//$this->load->view('layout/layout');
					redirect('home', 'refresh');
				}
			} else {
				$data = array(
					'error_message' => 'Invalid username or password'
				);
				$this->load->view('layout/common/login', $data);
			}
		}
	}

	//Logout
	public function logout() {
		//Removing session data
		$session_array = array(
			'username' => ''
		);
		$this->session->unset_userdata('logged_in', $session_array);
		$data['message_display'] = 'Successfully Logout';
		$this->load->view('layout/common/login', $data);
	}

	public function go() {
		redirect('home', 'refresh');
	}

}
