<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index() {
		/*if (isset($this->session->userdata['logged_in'])) {
			$this->load->view('layout/layout');
		} else {
			header("location: login");
		}*/
		//layout
		$this->layout->set_title('Beranda');
		$this->layout->set_meta('Halaman Utama');

		//judul
		$this->data['primary_title'] = "<i class='fa fa-fw fa-key'></i> Beranda";
		$this->data['sub_primary_title'] = "Halaman Utama";

		//breadcrumb
		$this->breadcrumb->clear();
		$this->breadcrumb->add_crumb('Beranda', site_url('home'));
		$this->breadcrumb->add_crumb('Tes');

		$this->layout->create('home/index', $this->data);
	}
}
