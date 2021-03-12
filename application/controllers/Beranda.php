<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function index()
	{
		$data['nama_website']="Alicxiis group";
		$data['nama_halaman']="HALAMAN BERANDA";
		$this->load->view('header' ,$data);
		$this->load->view('Beranda');
		$this->load->view('footer');
	}
}
