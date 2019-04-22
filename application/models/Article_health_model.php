<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Article_health_model extends CI_Model{

	public function get_article_health()
	{
		$this->db->where('is_del' , '0');
		$query = $this->db->get('article_health');
		return $query->result_array();
	}
	public function get_by_id_edit($id)
	{
		$this->db->where('id' , $id);
		$query = $this->db->get('article_health');
		return isset($query->result_array()[0]) ? $query->result_array()[0] : array();
	}
	public function del_article_health($id)
	{
		$this->db->set('is_del','1');
		$this->db->where('id' , $id);
		$this->db->update('article_health');
		 if ($this->db->affected_rows() == 1) {
		 	$json['status'] =  'del_success';
		 }
		 echo json_encode($json);
	}

	public function create_article_health($article_health)
	{
		$image = $this->movefile->move($article_health['image'],'article_health');
		$data = array(
			'name' => $article_health['name'],
			'detail' => $article_health['detail'],
			'image' => $image,
			'create_by' => $this->session->id,
			'create_datetime' => date('Y-m-d H:i:s')
		);
		$this->db->insert('article_health',$data);
		 if ($this->db->affected_rows() == 1) {
		 	$json['status'] =  'create_success';
		 }
		 echo json_encode($json);
	}
	public function edit_($article_health)
	{
		$image = $this->movefile->move($article_health['image'],'article_health');
		$id = $article_health['id'];
		$data = array(
			'name' => $article_health['name'],
			'detail' => $article_health['detail'],
			'image' => $image,
			'modified_by' => $this->session->id,
			'modified_datetime' => date('Y-m-d H:i:s')
		);
		$this->db->where('id' , $id);
		$this->db->update('article_health',$data);
		if ($this->db->affected_rows() == 1) {
			$json['status'] =  'create_success';
		}
		echo json_encode($json);
	}
	
}

 ?>