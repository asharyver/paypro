<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_promo extends CI_Model {

	var $table = 'promo';
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function tampil_promo()
	{
		return $this->db->get($this->table);
	}
			
    function tampilkan($limit = 3, $offset = 0){
		$this->db->SELECT('*');
		$this->db->FROM($this->table);
		$this->db->ORDER_BY('id_promo', 'DESC');
		$this->db->limit($limit);
		$this->db->offset($offset);
       	$query=$this->db->get();
       return $query->result();
    }

    function get($id){
		$this->db->from($this->table);
		$this->db->where('id_promo',$id);
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
		$this->db->where('id_promo', $id);
		return $this->db->delete($this->table);
	}

}
