<?php 

Class mproduct extends CI_Model{

	public function findAll(){

		$n=  $this->session->userdata('user_id');

		//return $this->db->get('product')->result();
		$query = $this->db->query("SELECT * FROM product WHERE id= $n");

		return $query->result();

	}

	function find($id){

	$ths->db->where('id',$id);
	return $this->db->get('product')->row();
	}


function fetch_data(){
	$query= $this->db->get('product');
	return $query;	
}
}
?>
<!-- WHERE id= $n  -->