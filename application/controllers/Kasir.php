<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kasir extends CI_Controller {

	public function index()
	{
        $data['hasil']="masukan jumlah permen";
		$this->load->view('kasir/tampilan_utama' ,$data);
	}
    public function aksi_perhitungan(){
        // deklarasi variabel
        $jumlah=$this->input->post('jumlah');

        // script perhitugan
        if($jumlah>0 and $jumlah<=3){
            $harga=4000;
            $hitung=$jumlah*$harga;
        }elseif($jumlah>3 and $jumlah<=5){
            $harga=2000;
            $hitung=$jumlah*$harga;
        }elseif($jumlah>5 and $jumlah<=10){
            $harga=1000;
            $hitung=$jumlah*$harga;
        }else{
            $harga=500;
            $hitung=$jumlah*$harga;
        }

        // hasil
        $data['hasil']="total = ".$hitung;

        // tampilan
        $this->load->view('kasir/tampilan_utama' ,$data);
    }
}
