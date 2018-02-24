<?php
Class About extends CI_Controller{
       
         
    function __construct() {
        parent::__construct();
        $this->load->database();
		$this->model_squrity->getsqurity();
        $this->load->model('model_about');
        $this->load->library(array('template','pagination', 'upload'));
    }
        
    function index(){
        $data['judul']    = 'Page Slide Paypro';
        $data['about']	  = $this->model_about->tampilkan();
        $this->template->admin('about/view_about',$data);
     }

	function add(){
		$data['judul'] = 'Tambah Slide About';
		$this->template->admin('about/add_about', $data);
	}

	function tambah_slide(){
		$config['upload_path'] = './siminta/assets/about/';
		$config['allowed_types'] = 'jpeg|jpg|png';
		$config['max_size'] = '1000';
		$config['file_name'] = 'slide-' . trim(str_replace(" ", "", date('dmYHi')));

		$this->upload->initialize($config);
		$this->upload->do_upload('foto');
		$gambar = $this->upload->file_name;
		$data = array(
			'nama' => $this->input->post('nama'),
			'ket' => $this->input->post('ket'),
			'gambar' => $gambar
		);

		$this->model_about->add_slide($data);
		$this->session->set_flashdata('success', 'Transaksi Berhasil di Simpan');
		redirect('about/slide');
	}

	function tambah(){
		$config['upload_path'] = './siminta/assets/about/';
		$config['allowed_types'] = 'jpeg|jpg|png';
		$config['max_size'] = '1000';
		$config['file_name'] = 'about-' . trim(str_replace(" ", "", date('dmYHi')));

		$this->upload->initialize($config);
		$this->upload->do_upload('foto');
		$gambar = $this->upload->file_name;
		$data = array(
			'posisi' => $this->input->post('posi'),
			'nama' => $this->input->post('nama'),
			'ket' => $this->input->post('ket'),
			'gambar' => $gambar
		);

		$this->model_about->tambah($data);
		$this->session->set_flashdata('success', 'Transaksi Berhasil di Simpan');
		redirect('about');
	}

	function edit_slide($id){
		$data['judul'] = 'Edit Slide Paypro';
		$data['row'] = $this->model_about->get_slide($id);
		$this->template->admin('about/edit_slide', $data);
	}

	function edit($id){
		$data['judul'] = 'Edit Data About';
		$data['row'] = $this->model_about->get($id);
		$this->template->admin('about/edit_about', $data);
	}

	function update_slide(){
		$filelama = $this->input->post('fotolama');
		$path = './siminta/assets/about/';
		$config['upload_path'] = $path;
		$config['allowed_types'] = 'jpeg|jpg|png';
		$config['max_size'] = '1000';
		$config['file_ext_tolower'] = true;
		$config['file_name'] = 'about-' . trim(str_replace(" ", "", date('dmYHi')));
		$this->upload->initialize($config);
		$gambar = null;
		$data = array(
			'posisi' => $this->input->post('posi'),
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
			$this->model_about->update_slide(array('id_slider' => $this->input->post('id')), $data);
			$this->session->set_flashdata(array('edit' => 'Data Promo Berhasil di Update'));
			redirect('about/slide');
		}
	}

	function update(){
		$filelama = $this->input->post('fotolama');
		$path = './siminta/assets/about/';
		$config['upload_path'] = $path;
		$config['allowed_types'] = 'jpeg|jpg|png';
		$config['max_size'] = '1000';
		$config['file_ext_tolower'] = true;
		$config['file_name'] = 'pro-' . trim(str_replace(" ", "", date('dmYHi')));
		$this->upload->initialize($config);
		$gambar = null;
		$data = array(
			'posisi' => $this->input->post('posi'),
			'nama' => $this->input->post('nama'),
			'ket' => $this->input->post('ket')
		);

		if (!empty($_FILES['foto'])) {
			if ($this->upload->do_upload('foto')) {
				@unlink($path .$filelama);
				$gambar = $this->upload->data('file_name');
				$data['gambar'] = $gambar;
			}
			$this->model_about->update(array('id_about' => $this->input->post('id')), $data);
			$this->session->set_flashdata(array('edit' => 'Data Promo Berhasil di Update'));
			redirect('about');
		}
	}

	function delete_slide($id){
		$this->model_about->delete_id($id);
		redirect('about');
	}

	function delete($id){
		$this->model_about->delete_id($id);
		redirect('about');
	}
}
