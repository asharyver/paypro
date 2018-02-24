<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_apply extends CI_Model {

	var $table = 'calon';
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function tampil_apply()
	{
		return $this->db->get($this->table);
	}
			
    function tampilkan(){
		$this->db->SELECT('*');
		$this->db->FROM($this->table);
		$this->db->ORDER_BY('id_calon', 'DESC');
       	$query=$this->db->get();
       return $query->result();
    }

    function get_view($id){
		$this->db->from($this->table);
		$this->db->where('id_calon',$id);
		$query = $this->db->get();
		return $query->row();
	}
	
    function tambah($data){
        $this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	function getRows($params = array()){
		$this->db->select('*');
		$this->db->from('calon');
		//$this->db->where('status','1');
		//$this->db->order_by('created','desc');
		if(array_key_exists('id_calon',$params) && !empty($params['id_calon'])){
			$this->db->where('id_calon',$params['id_calon']);
			//get records
			$query = $this->db->get();
			$result = ($query->num_rows() > 0)?$query->row_array():FALSE;
		}else{
			//set start and limit
			if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
				$this->db->limit($params['limit'],$params['start']);
			}elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
				$this->db->limit($params['limit']);
			}
			//get records
			$query = $this->db->get();
			$result = ($query->num_rows() > 0)?$query->result_array():FALSE;
		}
		//return fetched data
		return $result;
	}
    
    function update($where, $data){
       $this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}

    public function delete_id($id)	{
		$this->db->where('id_calon', $id);
		return $this->db->delete($this->table);
	}

}
