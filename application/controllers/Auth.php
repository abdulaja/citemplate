<?php
/**
 * Created by IntelliJ IDEA.
 * User: muhammad.azis
 * Date: 16/12/2017
 * Time: 22.58
 */

class Auth extends CI_Controller {

	public function login() {
		$this->load->view('layout/common/login');
	}

	public function go() {
		redirect('home', 'refresh');
	}

}
