<?php
Class Merchants extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('model_merchant');
		$this->load->library(array('template', 'pagination', 'upload'));
	}

	function index(){
		$isi['navbar_page'] = 'Merchants';
		$isi['judul']		 = 'Data List Merchant';
		$isi['category']     = $this->model_merchant->getCategory();
		$isi['location']     = $this->model_merchant->getLocation();
		$isi['merchant']	 = $this->model_merchant->tampilkan(null, 4);
		$this->template->utama('web/view_merchant', $isi);
		
		// var_dump($isi['category']);
	}
	
	function reload_category_ajax() {
		if ( ! $this->input->is_ajax_request()) {
			redirect('Merchants');
		}
		$where['kategori'] = $this->input->post('category');
		$where['lokasi']   = $this->input->post('location');
		$where['nama'] = $this->input->post('name');
		$isi['merchant'] = $this->model_merchant->tampilkan($where, 4);
		$this->load->view('web/view_merchant_ajax', $isi);
	}
	
	function reload_location_ajax() {
		if ( ! $this->input->is_ajax_request()) {
			redirect('Merchants');
		}

		$where['kategori'] = $this->input->post('category');
		$where['lokasi']   = $this->input->post('location');
		$where['nama'] = $this->input->post('name');
		$isi['merchant'] = $this->model_merchant->tampilkan($where, 4);
		$this->load->view('web/view_merchant_ajax', $isi);
	}
	
	function get_name_ajax($keyword) {
		if (!$this->input->is_ajax_request()) {
			redirect('merchants');
		}
		$arr = [];
		$arr['query'] = $keyword;
		$arr['suggestions'][0] = [
			'name' => '',
			'value' => ''
		];
		$i = 0;

		$where['kategori'] = $this->input->get('category');
		$where['lokasi']   = $this->input->get('location');
		$where['nama']   = $keyword;
		
		foreach($this->model_merchant->tampilkan($where) as $row)
		{
			$arr['suggestions'][$i] = [
				'name' => $row->nama,
				'value' => $row->nama
			];
			$i++;
		}
		
		echo json_encode($arr);
	}
	
	function reload_name_ajax() {
		if ( ! $this->input->is_ajax_request()) {
			redirect('Merchants');
		}

		$where['kategori'] = $this->input->post('category');
		$where['lokasi']   = $this->input->post('location');
		$where['nama'] = $this->input->post('name');
		$isi['merchant'] = $this->model_merchant->tampilkan($where, 4);
		$this->load->view('web/view_merchant_ajax', $isi);
	}
	
	function load_ajax() {
        // sleep(3);
        if ( ! $this->input->is_ajax_request()) {
            redirect('Promos');
        }
        $offset = $this->input->post('offset');
        
        $where['kategori'] = $this->input->post('category');
		$where['lokasi']   = $this->input->post('location');
		$where['nama'] = $this->input->post('name');
		
        $data['merchant'] = $this->model_merchant->tampilkan($where, 4, $offset);
        
        $this->load->view('web/view_merchant_ajax', $data);
    }

}
