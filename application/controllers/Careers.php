<?php
Class Careers extends CI_Controller{
       
         
    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('text');
        $this->load->model(array('model_category', 'model_career', 'model_apply'));
        $this->load->library(array('template','email','upload','pagination'));
    }
        
    function index(){
        $data['judul']    = 'Page Career';
        $data['career']		= $this->model_category->tampilkan();
        $this->template->utama('web/view_career',$data);
     }

	function lis($id){
		$data['judul']    = 'List Career';
		$data['jobs']		= $this->model_career->tampilkeun($id);
		$this->template->utama('web/view_jobs',$data);
	}

	function next(){
		$id=$this->uri->segment(3);
		$data['judul']    = 'Detail Career';
		$data['data']	=	$this->model_career->per_id($id);
		$this->template->utama('web/view_jobdetail', $data);
	}

	function apply($id){
		$data['judul']    = 'Page Apply Career';
		$data['career']		= $this->model_career->get_view($id);
		$this->template->utama('web/view_apply',$data);
	}

	function tambah(){
			$config['upload_path'] = './siminta/assets/doc/';
			$config['allowed_types'] = 'pdf|doc|docx';
			$config['max_size'] = '2000';
			$config['file_name'] = 'doc-' . trim(str_replace(" ", "", date('dmYHi')));

			$this->upload->initialize($config);
			$this->upload->do_upload('resum');
			$gambar = $this->upload->file_name;
		$data = array(
			'nm_depan' => $this->input->post('first'),
			'nm_belakang' => $this->input->post('last'),
			'email' => $this->input->post('email'),
			'no_telp' => $this->input->post('telp'),
			'education' => $this->input->post('edu'),
			'experience' => $this->input->post('exp'),
			'summary' => $this->input->post('sum'),
			'tanggal'	=> date('Y-m-d'),
			'doc'	=>	$gambar
		);
		$this->model_apply->tambah($data);
		$this->session->set_flashdata('success', 'Tank you for apply, we will Check Your Resume');
		redirect('careers');
		//Config Email
		$Pengguna = $this->input->post('first');
		//$emailku = $this->input->post('email');
		$isiEmail = "<h2>Dear Bapak/Ibu,</h2><h3>Apply Job telah di lakukan oleh <strong>$Pengguna</strong>,<br>untuk keterangan lebih detail silahkan kunjungi http://app.dutakarya.co.id/ppu
                    <br><br>Terima Kasih,<br><br><br><strong>Admin Paypro</strong></h3>";
		$config = Array(
			'protokol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => '465',
			'smtp_user' => 'dutakaryadks@gmail.com',
			'smtp_pass' => 'nabhan07',
			'mailtype' => 'html',
			'charset' => 'iso-8859-1'
		);
		$row['first']	= $this->input->post('first');
		$row['last']	= $this->input->post('last');
		$row['email']	= $this->input->post('email');
		$row['telp']	= $this->input->post('sum');
		$row['sum']	= $this->input->post('telp');
		$this->load->library('email',$config);

		$this->email->set_newline("\r\n");
		$this->email->set_mailtype("html");

		$this->email->from('dutakaryadks@gmail.com', 'Paypro.id');
		$this->email->to('nbhnazfar@gmail.com');
		$this->email->subject('Apply Job');
		//$eusi = $this->load->view('web/receive_email', $row, TRUE);
		$this->email->message($isiEmail);

		$this->email->send();
	}

}
