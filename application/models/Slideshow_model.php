<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Slideshow_model extends CI_Model{

	public function get_slideshow()
	{
		$this->db->where('is_del' , '0');
		$query = $this->db->get('slideshow');
		return $query->result_array();
	}
	public function get_by_id_edit($id)
	{
		$this->db->where('id' , $id);
		$query = $this->db->get('slideshow');
		return isset($query->result_array()[0]) ? $query->result_array()[0] : array();
	}
	public function del_slideshow($id)
	{
		$this->db->set('is_del','1');
		$this->db->where('id' , $id);
		$this->db->update('slideshow');
		 if ($this->db->affected_rows() == 1) {
		 	$json['status'] =  'del_success';
		 }
		 echo json_encode($json);
	}

	public function create_slideshow($slideshow)
	{
		$image = $this->movefile->move($slideshow['image'],'slideshow');
		$data = array(
			'name' => $slideshow['name'],
			'image' => $image,
			'create_by' => $this->session->id,
			'create_datetime' => date('Y-m-d H:i:s'),
			'modified_datetime' => date('Y-m-d H:i:s')
		);
		$this->db->insert('slideshow',$data);
		 if ($this->db->affected_rows() == 1) {
		 	$json['status'] =  'create_success';
		 }
		 echo json_encode($json);
	}
	public function edit_($slideshow)
	{
		$image = $this->movefile->move($slideshow['image'],'slideshow');
		$id = $slideshow['id'];
		$data = array(
			'name' => $slideshow['name'],
			'image' => $image,
			'modified_by' => $this->session->id,
			'modified_datetime' => date('Y-m-d H:i:s')
		);
		$this->db->where('id' , $id);
		$this->db->update('slideshow',$data);
		if ($this->db->affected_rows() == 1) {
			$json['status'] = 'create_success';
		}
		echo json_encode($json);
	}
	
}

 ?>