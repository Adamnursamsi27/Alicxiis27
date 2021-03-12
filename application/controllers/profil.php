<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class profil extends CI_Controller {

	public function index()
	{
        $data['nama_website']="Alicxiis group";
        $data['nama_halaman']="HALAMAN PROFIL";
        $this->load->view('header' ,$data);
		$this->load->view('profil');
        $this->load->view('footer');
	}
}
