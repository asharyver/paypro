<?php
Class Contacts extends CI_Controller{
       
         
    function __construct() {
        parent::__construct();
        $this->load->database();
        //$this->load->model('model_promo');
        $this->load->library(array('template','pagination', 'upload'));
    }
        
    function index(){
        $data['navbar_page'] = 'Contacts';
        $data['judul']    = 'Page Contact Us';
        $this->template->utama('web/view_contact',$data);
     }


}
