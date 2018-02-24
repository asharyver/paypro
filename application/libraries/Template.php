<?php
    class Template{
        protected $_ci;
    
    function __construct(){
        $this->_ci = &get_instance();
    }
    
  function utama($content,$data=NULL){
        $data['headernya'] = $this->_ci->load->view('template/head', $data, TRUE);
        $data['topbarnya'] = $this->_ci->load->view('template/topbar', $data, TRUE);
        $data['contentnya'] = $this->_ci->load->view($content, $data, TRUE);
        $data['jsnya'] = $this->_ci->load->view('template/js', $data, TRUE);
        $data['footnya'] = $this->_ci->load->view('template/foot', $data, TRUE);
        $this->_ci->load->view('template', $data);
    }

		function admin($content,$data=NULL){
			$data['headAdmin'] = $this->_ci->load->view('template_admin/head', $data, TRUE);
			$data['topbarAdmin'] = $this->_ci->load->view('template_admin/topbar', $data, TRUE);
			$data['sidebarAdmin'] = $this->_ci->load->view('template_admin/sidebar', $data, TRUE);
			$data['contentAdmin'] = $this->_ci->load->view($content, $data, TRUE);
			$data['jsAdmin'] = $this->_ci->load->view('template_admin/js', $data, TRUE);
			$data['footAdmin'] = $this->_ci->load->view('template_admin/foot', $data, TRUE);
			$this->_ci->load->view('template_admin', $data);
		}

		function adm($content,$data=NULL){
			$data['headadm'] = $this->_ci->load->view('template_adm/head', $data, TRUE);
			$data['topbaradm'] = $this->_ci->load->view('template_adm/topbar', $data, TRUE);
			$data['sidebaradm'] = $this->_ci->load->view('template_adm/sidebar', $data, TRUE);
			$data['contentadm'] = $this->_ci->load->view($content, $data, TRUE);
			$data['jsadm'] = $this->_ci->load->view('template_adm/js', $data, TRUE);
			$data['footadm'] = $this->_ci->load->view('template_adm/foot', $data, TRUE);
			$this->_ci->load->view('template_adm', $data);
		}
}
