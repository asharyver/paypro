<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_how extends CI_Model {

	var $table = 'how';
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

    function tampilkan(){
		$this->db->SELECT('*');
		$this->db->FROM($this->table);
		$this->db->ORDER_BY('id_how', 'DESC');
       	$query=$this->db->get();
       return $query->result();
    }

	function tampil_cara(){
		$this->db->SELECT('*');
		$this->db->FROM($this->table);
		$this->db->WHERE('bagian=', 'cara');
		$this->db->ORDER_BY('id_how', 'DESC');
		$query=$this->db->get();
		return $query->result();
	}

	function add_slide($data){
		$this->db->insert('slider', $data);
		return $this->db->insert_id();
	}

	function get_slide($id){
		$this->db->from('slider');
		$this->db->where('id_slider',$id);
		$query = $this->db->get();
		return $query->row();
	}

	function update_slide($where, $data){
		$this->db->update('slider', $data, $where);
		return $this->db->affected_rows();
	}

    function get($id){
		$this->db->from($this->table);
		$this->db->where('id_about',$id);
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
		$this->db->where('id_about', $id);
		return $this->db->delete($this->table);
	}

	public function delete($id)	{
		$this->db->where('id_slider', $id);
		return $this->db->delete('slider');
	}

}
