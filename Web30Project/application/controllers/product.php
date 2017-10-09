<?php if(!Defined ('BASEPATH')) exit ('No direct script access allowed');

Class Users extends CI_Controller{

	public function index($index=1){
		// $this->load ->model('mproduct');
		$data['result']=$this->mproduct->findAll();
		$this->load->view('index',$data);
	}

}