<?php if(!Defined ('BASEPATH')) exit ('No direct script access allowed');

Class product extends CI_Controller
{

    public function index()
    {
        $this->load->model('mproduct');
        $data['result'] = $this->mproduct->findAll();
        $data['resultone'] = $this->mproduct->finditem();
        $this->load->view('cartAdmin', $data);

        //$this->load ->model('mproduct');
        // $data['resultone']= $this->mproduct->finditem();
        // $this->load->view('cartAdmin',$data);

    }


    public function additem(){

        $this->load->model('mproduct');



        $productId = $_POST["productId"];
        $quantity1 = $_POST["qnty"];

        $name = $_POST["name"];
        $price =$_POST["price"];
        $description =$_POST["description"]; 


        $data['id'] = $this->session->userdata('user_id');

        $data['quantity'] = $quantity1;
        $data['name'] = $name;

        $data['price'] = $price;
        $data['description'] = $description;


        
        $this->mproduct->insertItem($data);



    }


    public function ind()
    {
        $this->load->view('cartAdmin');
    }


    public function delete($id)
    {
        $this->load->model('mproduct');
        $this->mproduct->delete($id);
        redirect('product');

    }

    public function edit($id)
    {
        $this->load->model('mproduct');
        $data['user'] = $this->mproduct->edit($id);

        $this->load->view('editcart', $data);


    }

    public function update()
    {

        $this->form_validation->set_rules('name', 'Username', 'required');
        $this->form_validation->set_rules('price', 'Username', 'required');
        $this->form_validation->set_rules('qty', 'Username', 'required');
        $this->form_validation->set_rules('des', 'Username', 'required');

        $id = $this->input->post('name');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('editcart');
        } else {

            $user = array(

                'price' => $this->input->post('price'),
                'quantity' => $this->input->post('qty'),
                'description' => $this->input->post('des'),

            );



            $this->load->model('mproduct');
            $this->mproduct->update($user,$id);
            redirect('product');


        }

    }
}