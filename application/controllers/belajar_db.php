<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class belajar_db extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
	}
 
	function user(){
		$data['user'] = $this->m_data->ambil_data()->result(); //$data['user'] mengambil data pada model m_data pada fungsi ambil_data
		$this->load->view('v_user.php',$data); //yang kemudian akan diparsing pada view v_user
	}
 
}