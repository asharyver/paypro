<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_blog_category extends CI_Model {

	public $table = 'post_category';

	public function __construct()
	{
		parent::__construct();
	}
	
	public function tampilkan($tree = false) {
		if ($tree) {
			$result = [];
			foreach ($this->db->order_by('position','asc')->where('parent', null)->get($this->table)->result() as $k) {
				$result[] = [
					'cat_id' => $k->cat_id,
					'name' => $k->name,
					'link' => $k->link,
					'time' => $k->time,
					'parent' => $this->_have_parent($k->cat_id)
				];
			}
			return $result;
		} else {
			return $this->db->get($this->table)->result();
		}
	}
	
	private function _have_parent($id) {
		$parent = [];
		if ( ! empty($query = $this->db->order_by('position','asc')->where('parent', $id)->get($this->table)->result())) {
			foreach ($query as $k) {
				$parent[] = [
					'cat_id' => $k->cat_id,
					'name' => $k->name,
					'link' => $k->link,
					'time' => $k->time
				];
			}
		}
		return $parent;
	}

}

/* End of file Model_blog_category.php */
/* Location: ./application/models/Model_blog_category.php */
