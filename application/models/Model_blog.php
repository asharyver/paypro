<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_blog extends CI_Model {

	public $table = 'posts';

	public function __construct()
	{
		parent::__construct();
		
	}

	public function single_post($id = '') {	
		return $this->db->where('post_id', $id)->or_where('link', $id)->get($this->table);
	}
	
	public function tampilkan_news() {
		return $this->db->order_by('post_id', 'desc')->where('type', 'post')->get($this->table)->result();
	}
	
	public function tampilkan_featured() {
		return $this->db->order_by('post_id', 'desc')->where('type', 'featured')->get($this->table)->result();
	}

}

/* End of file Model_blog.php */
/* Location: ./application/models/Model_blog.php */
