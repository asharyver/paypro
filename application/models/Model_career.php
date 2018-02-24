<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_career extends CI_Model {

	var $table = 'job';
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function tampil_merchant()
	{
		return $this->db->get($this->table);
	}
			
    function tampilkan(){
		$this->db->SELECT('*');
       	$this->db->FROM($this->table);
       	$this->db->ORDER_BY('id_job', 'DESC');
       	$this->db->JOIN('category', 'category.id_cat=job.id_cat', 'LEFT');
       	$query=$this->db->get();
       return $query->result();
    }

	function tampilkeun($id){
		$this->db->FROM($this->table);
		$this->db->JOIN('category', 'category.id_cat=job.id_cat', 'LEFT');
		$this->db->WHERE('nama', $id);
		$query = $this->db->get();
		return $query->result();
	}

	function per_id($id){
		$this->db->FROM($this->table);
		$this->db->WHERE('id_job',$id);
		$query=$this->db->get();
		return $query->row();
	}

    function get($id){
		$this->db->FROM($this->table);
		$this->db->WHERE('id_job', $id);
		$this->db->JOIN('category', 'category.id_cat=job.id_cat', 'LEFT');
		$query = $this->db->get();
		return $query->row();
	}

	function get_view($id){
		$this->db->FROM($this->table);
		$this->db->WHERE('id_job', $id);
		$this->db->JOIN('category', 'category.id_cat=job.id_cat', 'LEFT');
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
		$this->db->where('id_job', $id);
		return $this->db->delete($this->table);
	}

}
