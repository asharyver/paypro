<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    
     function __construct() {
        parent::__construct();
        $this->model_squrity->getsqurity();
		$this->load->model(array('model_user', 'model_apply', 'model_promo', 'model_merchant'));
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('template','pagination'));
        
    }

	function index(){
		$data['judul']    	= 'Dashboard';
		$data['user']		= $this->model_user->tampil_user()->num_rows();
		$data['apply']		= $this->model_apply->tampil_apply()->num_rows();
		$data['promo']		= $this->model_promo->tampil_promo()->num_rows();
		$data['merchant']	= $this->model_merchant->tampil_merchant()->num_rows();
        $this->template->admin('dashboard',$data);
	}
}
