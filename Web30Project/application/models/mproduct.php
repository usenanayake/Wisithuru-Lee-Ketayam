<?php

Class mproduct extends CI_Model{

    public function findAll(){

        //return $this->db->get('product')->result();

        $n=  $this->session->userdata('user_id');

        //return $this->db->get('product')->result();
        $query = $this->db->query("SELECT * FROM product WHERE id= $n");

        return $query->result();

    }


    public function finditem(){


        $query = $this->db->query("SELECT * FROM item");

        return $query->result();

    }


    function delete($id){

        $this->db->where('id',$id);
        $this->db->delete('product');

    }

    function edit($id){

        $this->db->select('*');
        $this->db->from('product');
        $this->db->where('id',$id);
        $query= $this->db->get();

        if($query->num_rows()>0){
            return $query->result();
        }else{
            return $query->result();
        }
    }

    function update($user,$id)
    {

        $this->db-> where('name',$id);
        $this->db-> update('product',$user);


    }











    function fetch_data(){
        $query= $this->db->get('product');
        return $query;
    }



}

// WHERE id= $n