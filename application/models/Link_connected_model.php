<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Link_connected_model extends CI_Model{

	public function get_link_connected()
	{
		$this->db->where('is_del' , '0');
		$query = $this->db->get('link_connected');
		return $query->result_array();
	}
	public function get_by_id_edit($id)
	{
		$this->db->where('id' , $id);
		$query = $this->db->get('link_connected');
		return isset($query->result_array()[0]) ? $query->result_array()[0] : array();
	}
	public function del_link_connected($id)
	{
		$this->db->set('is_del','1');
		$this->db->where('id' , $id);
		$this->db->update('link_connected');
		 if ($this->db->affected_rows() == 1) {
		 	$json['status'] =  'del_success';
		 }
		 echo json_encode($json);
	}

	public function create_link_connected($link_connected)
	{
		$data = array(
			'name' => $link_connected['name'],
			'url' => $link_connected['url'],
			'create_by' => $this->session->id,
			'create_datetime' => date('Y-m-d H:i:s')
		);
		$this->db->insert('link_connected',$data);
		 if ($this->db->affected_rows() == 1) {
		 	$json['status'] =  'create_success';
		 }
		 echo json_encode($json);
	}
	public function edit_($link_connected)
	{
		$id = $link_connected['id'];
		$data = array(
			'name' => $link_connected['name'],
			'url' => $link_connected['url'],
			'modified_by' => $this->session->id,
			'modified_datetime' => date('Y-m-d H:i:s')
		);
		$this->db->where('id' , $id);
		$this->db->update('link_connected',$data);
		if ($this->db->affected_rows() == 1) {
			$json['status'] =  'create_success';
		}
		echo json_encode($json);
	}
	
}

 ?>