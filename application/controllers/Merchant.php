<?php
Class Merchant extends CI_Controller
{


	function __construct()
	{
		parent::__construct();
		$this->model_squrity->getsqurity();
		$this->load->database();
		$this->load->model('model_merchant');
		$this->load->library(array('template', 'pagination', 'upload'));
	}

	function index(){
		$isi['judul'] = 'Data List Merchant';
		$isi['merchant'] = $this->model_merchant->tampilkan();
		$this->template->admin('merchant/view_merchant', $isi);
	}

	function add()
	{
		$data['judul'] = 'Tambah Merchant';
		$this->template->admin('merchant/add_merchant', $data);
	}

	function tambah()
	{
		$config['upload_path'] = './siminta/assets/merchant/';
		$config['allowed_types'] = 'jpeg|jpg|png';
		$config['max_size'] = '1000';
		$config['file_name'] = 'merch-' . trim(str_replace(" ", "", date('dmYHi')));

		$this->upload->initialize($config);
		$this->upload->do_upload('foto');
			$gambar = $this->upload->file_name;
		$data = array(
			'kategori' => $this->input->post('kat'),
			'nama' => $this->input->post('nama'),
			'lokasi' => $this->input->post('lok'),
			'gambar' => $gambar
		);

		$this->model_merchant->tambah($data);
		$this->session->set_flashdata('success', 'Transaksi Berhasil di Simpan');
		redirect('merchant');
	}

	function edit($id)
	{
		$data['judul'] = 'Edit Merchant';
		$data['row'] = $this->model_merchant->get($id);
		$this->template->admin('merchant/edit_merchant', $data);
	}

	function update()
	{
		$filelama = $this->input->post('fotolama');
		$path = './siminta/assets/merchant/';
		$config['upload_path'] = $path;
		$config['allowed_types'] = 'jpeg|jpg|png';
		$config['max_size'] = '512';
		$config['file_ext_tolower'] = true;
		$config['file_name'] = 'merch-' . trim(str_replace(" ", "", date('dmYHi')));
		$this->upload->initialize($config);
		$gambar = null;
		$data = array(
			'kategori' => $this->input->post('kat'),
			'lokasi' => $this->input->post('lok'),
			'nama' => $this->input->post('nama')
		);

		if (!empty($_FILES['foto'])) {
			if ($this->upload->do_upload('foto')) {
				@unlink($path.$filelama);
				$gambar = $this->upload->data('file_name');
				$data['gambar'] = $gambar;
			}
			$this->model_merchant->update(array('id_merchant' => $this->input->post('id')), $data);
			$this->session->set_flashdata(array('edit' => 'Data Merchant Berhasil di Update'));
			redirect('merchant');
		}
	}

	function delete($id)
	{
		$this->model_merchant->delete_id($id);
		redirect('merchant');
	}
}
