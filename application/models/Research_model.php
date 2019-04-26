<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Research_model extends CI_Model{

	public function get_research()
	{
		$this->db->where('is_del' , '0');
		$query = $this->db->get('research');
		return $query->result_array();
	}
	public function get_by_id_edit($id)
	{
		$this->db->where('id' , $id);
		$query = $this->db->get('research');
		return isset($query->result_array()[0]) ? $query->result_array()[0] : array();
	}
	public function del_research($id)
	{
		$this->db->set('is_del','1');
		$this->db->where('id' , $id);
		$this->db->update('research');
		 if ($this->db->affected_rows() == 1) {
		 	$json['status'] =  'del_success';
		 }
		 echo json_encode($json);
	}

	public function create_research($research)
	{
		$image = $this->movefile->move($research['image'],'research');
		$file = $this->movefile->movefileDocument($research['file'],'research/file');
		$data = array(
			'name' => $research['name'],
			'detail' => $research['detail'],
			'abstract' => $research['abstract'],
			'introduction' => $research['introduction'],
			'image' => $image,
			'file' => $file,
			'create_by' => $this->session->id,
			'create_datetime' => date('Y-m-d H:i:s')
		);
		$this->db->insert('research',$data);
		 if ($this->db->affected_rows() == 1) {
		 	$json['status'] =  'create_success';
		 }
		 echo json_encode($json);
	}
	public function edit_($research)
	{
		$image = $this->movefile->move($research['image'],'research');
		$file = $this->movefile->movefileDocument($research['file'],'research/file');
		$id = $research['id'];
		$data = array(
			'name' => $research['name'],
			'detail' => $research['detail'],
			'image' => $image,
			'file' => $file,
			'modified_by' => $this->session->id,
			'modified_datetime' => date('Y-m-d H:i:s')
		);
		$this->db->where('id' , $id);
		$this->db->update('research',$data);
		if ($this->db->affected_rows() == 1) {
			$json['status'] =  'create_success';
		}
		echo json_encode($json);
	}
	
}

 ?>