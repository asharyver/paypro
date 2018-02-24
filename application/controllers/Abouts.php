<?php
Class Abouts extends CI_Controller{
       
         
    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('model_about');
        $this->load->library(array('template','pagination'));
    }
        
    function index(){
        $data['judul']    = 'Page Home';
        $data['atas']	  = $this->model_about->tampil_atas();
		$data['mid']	  = $this->model_about->tampil_mid();
		$data['down']	  = $this->model_about->tampil_down();
        $this->template->utama('web/view_home',$data);
       }

}
