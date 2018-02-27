<?php
Class Language extends CI_Controller{
	public function change($lang = 'ID') {
		$lang = strtoupper($lang);
		if (($lang == 'ID' or $lang == 'EN')) {
			$this->input->set_cookie('LANG', $lang, 3600 * 24 * 30);
		}
		
		if ($this->input->get('ref')) {
			redirect(base64_decode($this->input->get('ref')));
		} else {
			redirect(base_url());
		}
	}
}
