<?php
Class Category extends CI_Controller{
       
         
    function __construct() {
        parent::__construct();
        $this->model_squrity->getsqurity();
        $this->load->database();
        $this->load->model('model_category');
        $this->load->library(array('template','pagination'));
    }
        
    function index(){
        $isi['judul']    = 'Data Category';
        $isi['category']     = $this->model_category->tampilkan();
        $this->template->admin('master/view_category',$isi);
       }
       
    function tambah(){
        $data = array(
            'fa' => $this->input->post('fa'),
			'nama' => $this->input->post('nama'),
			'deskrip' => $this->input->post('desk')
        );
        $this->model_category->tambah($data);
       echo json_encode(array("status" => TRUE));
    }
    
    function edit($id){
	$data = $this->model_category->get_id($id);
	echo json_encode($data);
		}
                
    function update(){
            $data = array(
				'fa' => $this->input->post('fa'),
				'nama' => $this->input->post('nama'),
				'deskrip' => $this->input->post('desk')
			);

       $this->model_category->update(array('id_cat' => $this->input->post('id')), $data);
	echo json_encode(array("status" => TRUE));
    }
    
    function delete($id){
	$this->model_category->delete_id($id);
	echo json_encode(array("status" => TRUE));
    }
}
