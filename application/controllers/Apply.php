<?php
Class Apply extends CI_Controller{
       
         
    function __construct() {
        parent::__construct();
        $this->model_squrity->getsqurity();
        $this->load->database();
        $this->load->model(array('model_apply', 'model_category'));
        $this->load->library(array('template','upload'));
    }
        
    function index(){
		$isi['judul']    = 'Data Personal';
		$isi['apply']     = $this->model_apply->tampilkan();
		$this->template->admin('apply/view_apply',$isi);
       }

     function add(){
    	$data['judul']	= 'Add Data Apply';
    	$this->template->admin('apply/add_apply', $data);
	 }
       
    function tambah(){
        $data = array(
			'nm_depan' => $this->input->post('nm'),
            'nm_belakang' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'no_telp' => $this->input->post('telp'),
			'education' => $this->input->post('edu'),
			'experience' => $this->input->post('exp'),
			'tanggal'	=> date('Y-m-d'),
			'doc'	=>	$this->input->post('doc')
        );
        $this->model_apply->tambah($data);
		$this->session->set_flashdata('success', 'Transaksi Berhasil di Simpan');
       redirect('apply');
    }
    
    function edit($id){
    	$data['judul']	=	'Edit Data Career';
		$data['apply']	= $this->model_apply->get($id);
    	$this->template->admin('apply/edit_apply', $data);
	}
                
    function update(){
            $data = array(
				'nm_depan' => $this->input->post('nm'),
				'nm_belakang' => $this->input->post('nama'),
				'email' => $this->input->post('email'),
				'no_telp' => $this->input->post('telp'),
				'education' => $this->input->post('edu'),
				'experience' => $this->input->post('exp'),
				'doc'	=>	$this->input->post('doc')
			);

       $this->model_apply->update(array('id_job' => $this->input->post('id')), $data);
		$this->session->set_flashdata(array('edit' => 'Data Career Berhasil di Update'));
		redirect('apply');
    }

	function view($id){
		$data['judul']	=	'View Data Apply';
		$data['apply']	= $this->model_apply->get_view($id);
		$this->template->admin('apply/v_apply', $data);
	}

	/*function download_file($id) {
		if(!empty($id)){
			//load download helper
			$this->load->helper('download');

			//get file info from database
			$fileInfo = $this->model_apply->getRows(array('id_calon' => $id));

			//file path
			$file = './siminta/assets/doc/'.$fileInfo->doc;

			//download file from directory
			force_download($file, NULL);
		}
	} */
    
    function delete($id){
		return $this->model_apply->delete_id($id);
		redirect('apply');
    }
}
