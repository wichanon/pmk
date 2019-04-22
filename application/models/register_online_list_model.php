<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_online_list_model extends CI_Model{

	public function get_register_online_list()
	{
		$query = $this->db->get('register_online_list');
		return $query->result_array();
	}
	public function get_register_online_list_edit($id)
	{
		$this->db->where('id' , $id);
		$query = $this->db->get('register_online_list');
		return $query->result_array();
	}
	public function del_register_online_list($id)
	{
		$this->db->set('is_del','1');
		$this->db->where('id' , $id);
		$this->db->update('register_online_list');
		 if ($this->db->affected_rows() == 1) {
		 	$json['status'] =  'del_success';
		 }
		 echo json_encode($json);
	}

	public function create_register_online_list($register_online_list)
	{
		$data = array(
			'name' => $register_online_list['name']
		);
		$this->db->insert('register_online_list',$data);
		 if ($this->db->affected_rows() == 1) {
		 	$json['status'] =  'create_success';
		 }
		 echo json_encode($json);
	}
	
}

 ?>