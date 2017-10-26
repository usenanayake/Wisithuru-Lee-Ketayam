<?php 

Class Model_user extends CI_Model{

	function insertUserdata(){
	 

	 $data = array(
	 	'username' => $this->input->post('userName',TRUE),
	 	'fname' => $this->input->post('fristName',TRUE),
	 	'lname' => $this->input->post('lastName',TRUE),
	 	'password' => sha1($this->input->post('password',TRUE)),
	 	'password2' => sha1($this->input->post('confirmPassword',TRUE)),
	 	'email' => $this->input->post('email',TRUE),

	 );
	
	 return $this->db->insert('reg',$data);

	}



	function LoginUser(){

	$email = $this->input->post('email');
	$password = sha1($this->input->post('password'));

	$this->db->where('email',$email);
	$this->db->where('password',$password);

	$respond= $this->db->get('reg');
	if($respond->num_rows()==1){
		return $respond->row(0);
		
	}else{
		return false;
	}
}
}