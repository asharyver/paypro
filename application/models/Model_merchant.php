<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_merchant extends CI_Model {

	var $table = 'merchant';
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function tampil_merchant()
	{
		return $this->db->get($this->table);
	}
	
	function getCategory() {
		$category = [];
		foreach ($this->db->select('kategori')->distinct()->get($this->table)->result() as $cat) {
			$category[] = $cat->kategori;
		}
		
		return $category;
	}
	
	function getLocation() {
		$location = [];
		foreach ($this->db->select('lokasi')->distinct()->get($this->table)->result() as $cat) {
			$location[] = $cat->lokasi;
		}
		
		return $location;
	}
			
    function tampilkan($search = null, $limit = 4, $offset = 0){
    	if ( ! empty($search)) {
    		foreach ($search as $k => $v) {
	    		if ( ! empty($v)) {
	    			$this->db->like($k, $v);
	    		}
    		}
    	}
		$this->db->SELECT('*');
        $this->db->FROM($this->table);
        $this->db->ORDER_BY('id_merchant', 'DESC');
        $this->db->limit($limit);
        $this->db->offset($offset);
        $query=$this->db->get();
        return $query->result();
    }

	function get1(){
		$this->db->FROM($this->table);
		$this->db->WHERE('kategori','Makanan & Minuman');
		$query=$this->db->get();
		return $query->result();
	}

	function get2(){
		$this->db->FROM($this->table);
		$this->db->WHERE('kategori','Kecantikan');
		$query=$this->db->get();
		return $query->result();
	}

    function get($id){
		$this->db->FROM($this->table);
		$this->db->where('id_merchant',$id);
		$query = $this->db->get();
		return $query->row();
	}
	
    function tambah($data){
        $this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}
    
    function update($where, $data){
       $this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}

    public function delete_id($id)	{
		$this->db->where('id_merchant', $id);
		return $this->db->delete($this->table);
	}

}
