<?php


class Register extends CI_Controller {

public function RegisterUser(){

$this->form_validation->set_rules('userName', 'Username', 'required');
$this->form_validation->set_rules('fristName', 'First Name', 'required');
$this->form_validation->set_rules('lastName', 'Last Name', 'required');
$this->form_validation->set_rules('password', 'Password', 'required');
$this->form_validation->set_rules('confirmPassword', 'Confirm Password', 'required|matches[password]');


 $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

 if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('signup');
                }
                else
                {
                       $this->load ->model('Model_user');
                       $response= $this->Model_user ->insertUserdata();

                       if($response){
                       	$this->session->set_flashdata('msg','register sucess');
                       	redirect('Users');
                       }else{
                       	$this->session->set_flashdata('msg','register not sucess');
                       	redirect('Users');
                       }
                }

}

}