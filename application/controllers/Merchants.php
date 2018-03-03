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
		$isi['merchant']	 = $this->model_merchant->tampilkan();
		$this->template->utama('web/view_merchant', $isi);
	}

}
