<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agent extends CI_Controller {

	public function index() {
		/*if (isset($this->session->userdata['logged_in'])) {
			$this->load->view('layout/layout');
		} else {
			header("location: login");
		}*/

		//judul
		$this->data['primary_title'] = "<i class='fa fa-fw fa-key'></i> Agen";
		$this->data['sub_primary_title'] = "Halaman Utama Agen";

		//breadcrumb
		$this->breadcrumb->clear();
		$this->breadcrumb->add_crumb('Beranda', site_url('home'));
		$this->breadcrumb->add_crumb('Agen');

		$this->layout->create('agent/index', $this->data);
	}

}
