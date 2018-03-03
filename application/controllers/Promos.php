<?php
Class Promos extends CI_Controller{
       
         
    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('model_promo');
        $this->load->library(array('template','pagination', 'upload'));
    }
        
    function index(){
        $isi['navbar_page'] = 'Promos';
        $isi['judul']    = 'Page Promo';
        $isi['promo']	= $this->model_promo->tampilkan();
        $this->template->utama('web/view_promo',$isi);
     }


}
