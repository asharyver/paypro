<?php
Class User extends CI_Controller{
       
         
    function __construct() {
        parent::__construct();
        $this->model_squrity->getsqurity();
        $this->load->database();
        $this->load->model('model_user');
        $this->load->library(array('template','pagination'));
    }
        
    function index(){
        $isi['judul']    = 'Data User';
        $isi['user']     = $this->model_user->tampilkan();
        $this->template->admin('master/view_user',$isi);
        
       }
       
       function tambah(){
        $data = array(            
            'username' => $this->input->post('user'),
            'password' => md5($this->input->post('pass')),
            'nama_lengkap' => $this->input->post('nama'),
            'no_telp' => $this->input->post('telp'),
            'email'=>  $this->input->post('email'),			    
        );
        $this->model_user->tambah($data);
       echo json_encode(array("status" => TRUE));
    }
    
    function edit($id){
	$data = $this->model_user->get_id($id);
	echo json_encode($data);
		}
                
    function update(){
         if ($this->input->post('pass')) { 
         $data = array(            
            'username' => $this->input->post('user'),
            'password' => md5($this->input->post('pass')),
            'nama_lengkap' => $this->input->post('nama'),
            'no_telp' => $this->input->post('telp'),
            'email'=>  $this->input->post('email'),                         
        );
        } else {
            $data = array(            
            'username' => $this->input->post('user'),            
            'nama_lengkap' => $this->input->post('nama'),
            'no_telp' => $this->input->post('telp'),
            'email'=>  $this->input->post('email'),                        
			);
        }	
       $this->model_user->update(array('id_user' => $this->input->post('id_user')), $data);
	echo json_encode(array("status" => TRUE));
    }
    
    function delete($id){
	$this->model_user->delete_id($id);
	echo json_encode(array("status" => TRUE));
    }
}
