<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Download extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url','download'));	//disini kita membutuhkan helper url dan download			
	}
 
	public function index(){		
		$this->load->view('v_download');	//untuk membuka atau meload view v_download
	}
 
	public function lakukan_download(){				
		force_download('gambar/Ferdiansyah E41181181.jpg',NULL); //file yang akan didownload
	}	
 
}