<?php


class Admin extends CI_Controller {

public function index(){
	$this->load->view('admin');
	}

public function GoAbout(){
	$this->load->view('adminAbout');
	}


public function GoShopping(){
	$this->load->view('adminShop');
	}

public function GoGallery(){
	$this->load->view('adminGallery');
	}

public function GoContact(){
	$this->load->view('adminContact');
	}

}