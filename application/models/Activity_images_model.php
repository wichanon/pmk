<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Activity_images_model extends CI_Model{

	public function get_activity_images()
	{
		$this->db->where('is_del' , '0');
		$query = $this->db->get('activity_images');
		return $query->result_array();
	}
	public function get_by_id_edit($id)
	{
		$this->db->where('id' , $id);
		$query = $this->db->get('activity_images');
		return isset($query->result_array()[0]) ? $query->result_array()[0] : array();
	}
	public function del_activity_images($id)
	{
		$this->db->set('is_del','1');
		$this->db->where('id' , $id);
		$this->db->update('activity_images');
		 if ($this->db->affected_rows() == 1) {
		 	$json['status'] =  'del_success';
		 }
		 echo json_encode($json);
	}

	public function create_activity_images($activity_images)
	{
		$image = $this->movefile->move($activity_images['image'],'activity_images');
		$data = array(
			'name' => $activity_images['name'],
			'detail' => $activity_images['detail'],
			'tag' => $activity_images['tag'],
			'image' => $image,
			'create_by' => $this->session->id,
			'create_datetime' => date('Y-m-d H:i:s')
		);
		$this->db->insert('activity_images',$data);
		 if ($this->db->affected_rows() == 1) {
		 	$json['status'] =  'create_success';
		 }
		 echo json_encode($json);
	}
	public function edit_($activity_images)
	{
		$image = $this->movefile->move($activity_images['image'],'activity_images');
		$id = $activity_images['id'];
		$data = array(
			'name' => $activity_images['name'],
			'detail' => $activity_images['detail'],
			'tag' => $activity_images['tag'],
			'image' => $image,
			'modified_by' => $this->session->id,
			'modified_datetime' => date('Y-m-d H:i:s')
		);
		$this->db->where('id' , $id);
		$this->db->update('activity_images',$data);
		if ($this->db->affected_rows() == 1) {
			$json['status'] =  'create_success';
		}
		echo json_encode($json);
	}
}

 ?>