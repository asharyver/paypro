<?php
Class Hows extends CI_Controller{
       
         
    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('model_how');
        $this->load->library(array('template','pagination'));
    }
        
    function index(){
        $data['judul']    = 'Page How to Works';
		/*$query = $this->model_how->tampil_cara();
		$res = $this->db->query($query);
		$count = mysqli_num_rows($res);
		$indicators = '';
		$text = '';
		$counter = 0;
		foreach($query AS $key => $value){
			$image = $row['gambar'];
			$title = $row['property_name'];
			if ($counter == 0) {
				$indicators .= '<div class="active item" data-slide-number="' . $counter . '" ></div>';
				$text .= '<div class="item-active"><img src="<?php echo base_url()?>data/images/property_images/' . $image . '" alt="' . $title . '"/></div>';
				$text .= '<div id=slide-content-"' . $counter . '" ></div>';
			} else {
				$indicators .= '<div class="item" data-slide-number="' . $counter . '" ></div>';
				$text .= '<div id=slide-content-"' . $counter . '" ></div>';
			}
			$counter=$counter+1;
		}
		$data['indicators'] = $indicators;
		$data['content']	= $text; */
        $data['hows_daftar']	  = $this->model_how->tampil_cara('daftar');
        $this->template->utama('web/view_how',$data);
       }

}
