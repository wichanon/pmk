<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Publicrelations_model extends CI_Model{

	public function get_public()
	{
		$this->db->where('is_del' , '0');
		$query = $this->db->get('publicrelations');
		return $query->result_array();
	}
	public function get_public_edit($id)
	{
		$this->db->where('id' , $id);
		$query = $this->db->get('publicrelations');
		return isset($query->result_array()[0]) ? $query->result_array()[0] : array();
	}
	public function del_public($id)
	{
		$this->db->set('is_del','1');
		$this->db->where('id' , $id);
		$this->db->update('publicrelations');
		if ($this->db->affected_rows() == 1) {
			$json['status'] =  'del_success';
		}
		echo json_encode($json);
	}

	public function create_public($public)
	{
		$image = $this->movefile->move($public['image'],'public');

		$data = array(
			'name' => $public['title'],
			'detail' => $public['detail'],
			'image' => $image,
			'create_by' => $this->session->id,
			'create_datetime' => date('Y-m-d H:i:s')
		);
		$this->db->insert('publicrelations',$data);
		if ($this->db->affected_rows() == 1) {
			$json['status'] =  'create_success';
		}
		echo json_encode($json);
	}
	public function get_by_id_edit($id)
	{
		$this->db->where('id' , $id);
		$query = $this->db->get('publicrelations');
		return isset($query->result_array()[0]) ? $query->result_array()[0] : array();
	}
	public function edit_public($public)
	{
		$image = $this->movefile->move($public['image'],'public');
		$id = $public['id'];
		$data = array(
			'name' => $public['name'],
			'detail' => $public['detail'],
			'image' => $image,
			'modified_by' => $this->session->id,
			'modified_datetime' => date('Y-m-d H:i:s')
		);
		$this->db->where('id' , $id);
		$this->db->update('publicrelations',$data);
		if ($this->db->affected_rows() == 1) {
			$json['status'] =  'create_success';
		}
		echo json_encode($json);
	}
}

?>