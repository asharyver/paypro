<?php
Class Home extends CI_Controller{
       
         
    function __construct() {
        parent::__construct();
        $this->load->database();
        //$this->load->model('model_user');
        $this->load->library(array('template','pagination'));
    }
        
    function index(){
        $data['judul']    = 'Page Home';
        $this->template->utama('web/view_home',$data);
       }

}
