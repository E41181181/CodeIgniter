<?php 
 
class Form extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
	}
 
	function index(){
		$this->load->view('v_form');
	}
 
	function aksi(){
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('konfir_email','Konfirmasi Email','required');
 
		if($this->form_validation->run() != false){
			echo "Form validation oke";
		}else{
			$this->load->view('v_form');
		}
	}//pada method aksi disini pertama kita harus memberikan nama form yang akan divalidasi, pada parameter kedua 
	//berikan kata kata yang akan dimunculkan saat validasi
	// parameter ke3 adalah required yang mana form tersebut wajib diisi agar dapat diproses
}