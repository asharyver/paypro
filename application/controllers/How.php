<?php
Class How extends CI_Controller{
       
         
    function __construct() {
        parent::__construct();
        $this->load->database();
		$this->model_squrity->getsqurity();
        $this->load->model('model_how');
        $this->load->library(array('template','pagination', 'upload'));
    }
        
    function index(){
        $data['judul']    = 'Page Cara Kerja Paypro';
        $data['how']	  = $this->model_how->tampilkan();
        $this->template->admin('about/view_slide',$data);
     }

	function add(){
		$data['judul'] = 'Tambah Slide Paypro';
		$this->template->admin('about/add_slide', $data);
	}

	function tambah(){
		$config['upload_path'] = './siminta/assets/about/';
		$config['allowed_types'] = 'jpeg|jpg|png';
		$config['max_size'] = '1000';
		$config['file_name'] = 'slide-' . trim(str_replace(" ", "", date('dmYHi')));

		$this->upload->initialize($config);
		$this->upload->do_upload('foto');
		$gambar = $this->upload->file_name;
		$data = array(
			'bagian' => $this->input->post('bag'),
			'active' => $this->input->post('act'),
			'nama' => $this->input->post('nama'),
			'ket' => $this->input->post('ket'),
			'gambar' => $gambar
		);

		$this->model_how->tambah($data);
		$this->session->set_flashdata('success', 'Transaksi Berhasil di Simpan');
		redirect('How');
	}

	function edit($id){
		$data['judul'] = 'Edit Slide Paypro';
		$data['row'] = $this->model_how->get_slide($id);
		$this->template->admin('about/edit_slide', $data);
	}

	function update(){
		$filelama = $this->input->post('fotolama');
		$path = './siminta/assets/about/';
		$config['upload_path'] = $path;
		$config['allowed_types'] = 'jpeg|jpg|png';
		$config['max_size'] = '1000';
		$config['file_ext_tolower'] = true;
		$config['file_name'] = 'slide-' . trim(str_replace(" ", "", date('dmYHi')));
		$this->upload->initialize($config);
		$gambar = null;
		$data = array(
			'bagian' => $this->input->post('bag'),
			'active' => $this->input->post('act'),
			'nama' => $this->input->post('nama'),
			'ket' => $this->input->post('ket')
		);

		if (!empty($_FILES['foto'])) {
			if ($this->upload->do_upload('foto')) {
				@unlink($path .$filelama);
				$gambar = $this->upload->data('file_name');
				$data['gambar'] = $gambar;
			}
			$this->model_how->update(array('id_slider' => $this->input->post('id')), $data);
			$this->session->set_flashdata(array('edit' => 'Data Promo Berhasil di Update'));
			redirect('How');
		}
	}

	function delete($id){
		$this->model_how->delete($id);
		redirect('How');
	}
}
