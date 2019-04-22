<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class About_structure_model extends CI_Model{

	public function get_about_structure()
	{
		$this->db->where('is_del' , '0');
		$query = $this->db->get('about_structure');
		return $query->result_array();
	}
	public function get_about_structure_edit($id)
	{
		$this->db->where('id' , $id);
		$query = $this->db->get('about_structure');
		return $query->result_array();
	}
	public function del_about_structure($id)
	{
		$this->db->set('is_del','1');
		$this->db->where('id' , $id);
		$this->db->update('about_structure');
		 if ($this->db->affected_rows() == 1) {
		 	$json['status'] =  'del_success';
		 }
		 echo json_encode($json);
	}

	public function create_about_structure($about_structure)
	{
		$image = $this->movefile->move($about_structure['image'],'about_structure');
		$data = array(
			'name' => $about_structure['name'],
			'rank' => $about_structure['rank'],
			'department' => $about_structure['department'] ,
			'image' => $image,
			'create_by' => $this->session->id,
			'create_datetime' => date('Y-m-d H:i:s')
		);
		$this->db->insert('about_structure',$data);
		 if ($this->db->affected_rows() == 1) {
		 	$json['status'] =  'create_success';
		 }
		 echo json_encode($json);
	}
	public function get_by_id_edit($id)
	{
		$this->db->where('id' , $id);
		$query = $this->db->get('about_structure');
		return isset($query->result_array()[0]) ? $query->result_array()[0] : array();
	}
	public function edit_($about_structure)
	{
		$image = $this->movefile->move($about_structure['image'],'about_structure');
		$id = $about_structure['id'];
		$data = array(
			'name' => $about_structure['name'],
			'rank' => $about_structure['rank'],
			'department' => $about_structure['department'],
			'image' => $image,
			'modified_by' => $this->session->id,
			'modified_datetime' => date('Y-m-d H:i:s')
		);
		$this->db->where('id' , $id);
		$this->db->update('about_structure',$data);
		if ($this->db->affected_rows() == 1) {
			$json['status'] =  'create_success';
		}
		echo json_encode($json);
	}
	
}

 ?>