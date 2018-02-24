<?php
Class Promo extends CI_Controller{
       
         
    function __construct() {
        parent::__construct();
		$this->model_squrity->getsqurity();
        $this->load->database();
        $this->load->model('model_promo');
        $this->load->library(array('template','pagination', 'upload'));
    }
        
    function index(){
		$data['judul']	=	'Page Promo';
		$data['promo']	=	$this->model_promo->tampilkan();
		$this->template->admin('promo/view_promo', $data);
     }

	function add(){
		$data['judul'] = 'Tambah Data Promo';
		$this->template->admin('promo/add_promo', $data);
	}

	function tambah(){
		$config['upload_path'] = './siminta/assets/promo/';
		$config['allowed_types'] = 'jpeg|jpg|png';
		$config['max_size'] = '1000';
		$config['file_name'] = 'pro-' . trim(str_replace(" ", "", date('dmYHi')));

		$this->upload->initialize($config);
		$this->upload->do_upload('foto');
		$gambar = $this->upload->file_name;
		$data = array(
			'nama' => $this->input->post('nama'),
			'ket' => $this->input->post('ket'),
			'periode' => $this->input->post('per'),
			'detail' => $this->input->post('detail'),
			'gambar' => $gambar
		);

		$this->model_promo->tambah($data);
		$this->session->set_flashdata('success', 'Transaksi Berhasil di Simpan');
		redirect('promo');
	}

	function view($id){
		$data['judul'] = 'View Data Promo';
		$data['row'] = $this->model_promo->get($id);
		$this->template->admin('promo/v_promo', $data);
	}

	function edit($id){
		$data['judul'] = 'Edit Data Promo';
		$data['row'] = $this->model_promo->get($id);
		$this->template->admin('promo/edit_promo', $data);
	}

	function update(){
		$filelama = $this->input->post('fotolama');
		$path = './siminta/assets/promo/';
		$config['upload_path'] = $path;
		$config['allowed_types'] = 'jpeg|jpg|png';
		$config['max_size'] = '1000';
		$config['file_ext_tolower'] = true;
		$config['file_name'] = 'pro-' . trim(str_replace(" ", "", date('dmYHi')));
		$this->upload->initialize($config);
		$gambar = null;
		$data = array(
			'nama' => $this->input->post('nama'),
			'ket' => $this->input->post('ket'),
			'detail' => $this->input->post('detail'),
			'periode' => $this->input->post('per')
		);

		if (!empty($_FILES['foto'])) {
			if ($this->upload->do_upload('foto')) {
				@unlink($path .$filelama);
				$gambar = $this->upload->data('file_name');
				$data['gambar'] = $gambar;
			}
			$this->model_promo->update(array('id_promo' => $this->input->post('id')), $data);
			$this->session->set_flashdata(array('edit' => 'Data Promo Berhasil di Update'));
			redirect('promo');
		}
	}

	function delete($id){
		$this->model_promo->delete_id($id);
		redirect('promo');
	}
}
