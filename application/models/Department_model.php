<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Department_model extends CI_Model{

	public function get_department()
	{
		$this->db->where('is_del' , '0');
		$query = $this->db->get('department');
		return $query->result_array();
	}
	public function get_by_id_edit($id)
	{
		$this->db->where('id' , $id);
		$query = $this->db->get('department');
		return isset($query->result_array()[0]) ? $query->result_array()[0] : array();
	}
	public function del_department($id)
	{
		$this->db->set('is_del','1');
		$this->db->where('id' , $id);
		$this->db->update('department');
		 if ($this->db->affected_rows() == 1) {
		 	$json['status'] =  'del_success';
		 }
		 echo json_encode($json);
	}

	public function create_department($department)
	{
		$image = $this->movefile->move($department['image'],'department');
		$data = array(
			'name' => $department['title'],
			'name_eng' => $department['detail'],
			'image' => $image,
			'create_by' => $this->session->id,
			'create_datetime' => date('Y-m-d H:i:s')
		);
		$this->db->insert('department',$data);
		 if ($this->db->affected_rows() == 1) {
		 	$json['status'] =  'create_success';
		 }
		 echo json_encode($json);
	}
	public function edit_($department)
	{
		$image = $this->movefile->move($department['image'],'department');
		$id = $department['id'];
		$data = array(
			'name' => $department['name'],
			'name_eng' => $department['name_eng'],
			'image' => $image,
			'modified_by' => $this->session->id,
			'modified_datetime' => date('Y-m-d H:i:s')
		);
		$this->db->where('id' , $id);
		$this->db->update('department',$data);
		if ($this->db->affected_rows() == 1) {
			$json['status'] =  'create_success';
		}
		echo json_encode($json);
	}
	
}

 ?>