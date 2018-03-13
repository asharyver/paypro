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
        $isi['promo']	= $this->model_promo->tampilkan(3);
        $this->template->utama('web/view_promo',$isi);
     }
     
    function load_ajax() {
        // sleep(3);
        if ( ! $this->input->is_ajax_request()) {
            redirect('Promos');
        }
        $offset = $this->input->post('offset');
        $data['promo'] = $this->model_promo->tampilkan(3, $offset);
        
        $this->load->view('web/view_promo_ajax', $data);
    }
}
