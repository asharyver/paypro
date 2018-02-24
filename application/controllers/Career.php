<?php
Class Career extends CI_Controller{
       
         
    function __construct() {
        parent::__construct();
        $this->model_squrity->getsqurity();
        $this->load->database();
        $this->load->model(array('model_career', 'model_category'));
        $this->load->library(array('template','pagination', 'upload'));
    }
        
    function index(){
		$isi['judul']    = 'Data Career';
		$isi['career']     = $this->model_career->tampilkan();
		$this->template->admin('career/view_career',$isi);
       }

     function add(){
    	$data['judul']	= 'Add Data Career';
    	$data['cat']	= $this->model_category->tampilkan();
    	$this->template->admin('career/add_career', $data);
	 }
       
    function tambah(){
        $data = array(
			'id_cat' => $this->input->post('cat'),
            'nm_job' => $this->input->post('nama'),
			'deskripsi' => $this->input->post('desk'),
			'responsibility' => $this->input->post('respon'),
			'requirement' => $this->input->post('req')
        );
        $this->model_career->tambah($data);
		$this->session->set_flashdata('success', 'Transaksi Berhasil di Simpan');
       redirect('career');
    }
    
    function edit($id){
    	$data['judul']	=	'Edit Data Career';
		$data['car']	= $this->model_career->get($id);
		$data['cat']	= $this->model_category->tampilkan();
    	$this->template->admin('career/edit_career', $data);
	}
                
    function update(){
            $data = array(
				'id_cat' => $this->input->post('cat'),
				'nm_job' => $this->input->post('nama'),
				'deskripsi' => $this->input->post('desk'),
				'responsibility' => $this->input->post('respon'),
				'requirement' => $this->input->post('req')
			);

       $this->model_career->update(array('id_job' => $this->input->post('id')), $data);
		$this->session->set_flashdata(array('edit' => 'Data Career Berhasil di Update'));
		redirect('career');
    }

	function view($id){
		$data['judul']	=	'View Data Career';
		$data['car']	= $this->model_career->get_view($id);
		$this->template->admin('career/v_career', $data);
	}
    
    function delete($id){
		return $this->model_career->delete_id($id);
		redirect('career');
    }
}
