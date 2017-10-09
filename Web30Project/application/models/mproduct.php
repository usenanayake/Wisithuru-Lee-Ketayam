<?php 

Class mproduct extends CI_Model{

	function findAll(){

return $this->db->get('product')->result();

	}

function find($id){

	$ths->db->where('id',$id);
	return $this->db->get('product')->row();
}
}