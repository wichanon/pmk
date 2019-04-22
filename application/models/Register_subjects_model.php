<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_subjects_model extends CI_Model{

	public function get_register_subjects()
	{
		$this->db->where('is_del' , '0');
		$query = $this->db->get('register_subjects');
		return $query->result_array();
	}
	public function get_by_id_edit($id)
	{
		$this->db->where('id' , $id);
		$query = $this->db->get('register_subjects');
		return isset($query->result_array()[0]) ? $query->result_array()[0] : array();
	}
	public function del_register_subjects($id)
	{
		$this->db->set('is_del','1');
		$this->db->where('id' , $id);
		$this->db->update('register_subjects');
		 if ($this->db->affected_rows() == 1) {
		 	$json['status'] =  'del_success';
		 }
		 echo json_encode($json);
	}

	public function create_register_subjects($register_subjects)
	{
		$image = $this->movefile->move($register_subjects['image'],'register_subjects');
		$data = array(
			'name' => $register_subjects['name'],
			'detail' => $register_subjects['detail'],
			'image' => $image,
			'create_by' => $this->session->id,
			'create_datetime' => date('Y-m-d H:i:s')
		);
		$this->db->insert('register_subjects',$data);
		 if ($this->db->affected_rows() == 1) {
		 	$json['status'] =  'create_success';
		 }
		 echo json_encode($json);
	}
	public function edit_($register_subjects)
	{
		$image = $this->movefile->move($register_subjects['image'],'register_subjects');
		$id = $register_subjects['id'];
		$data = array(
			'name' => $register_subjects['name'],
			'detail' => $register_subjects['detail'],
			'image' => $image,
			'modified_by' => $this->session->id,
			'modified_datetime' => date('Y-m-d H:i:s')
		);
		$this->db->where('id' , $id);
		$this->db->update('register_subjects',$data);
		if ($this->db->affected_rows() == 1) {
			$json['status'] =  'create_success';
		}
		echo json_encode($json);
	}
	
}

 ?>