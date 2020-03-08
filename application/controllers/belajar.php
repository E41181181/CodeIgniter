<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Belajar extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		
	}
	//Dibawah ini adalah contoh function atau method dengan nama index
	public function index(){
		echo "ini method index pada controller belajar";
	}
	//Dibawah ini adalah contoh function atau method dengan nama halo
	public function halo(){
        $data= array(
			'judul' => "Cara Membuat View Pada CodeIgniter",
			'tutorial' => "CodeIgniter"
			);
		//$data adalah array yang isinya terdapat judul dan tutorial. array ini yang nantinya akan membantu dalam memparsing data.
		
			
		$this->load->view('view_belajar', $data); 
		//$this berarti file ini 'belajar.php' mengeload view_belajar yang berada pada folder views
        
	}
 
}
?>