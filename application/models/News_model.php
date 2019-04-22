<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class News_model extends CI_Model{

	public function get_news()
	{
		$this->db->where('is_del' , '0');
		$query = $this->db->get('news');
		return $query->result_array();
	}

	public function del_news($id)
	{
		$this->db->set('is_del','1');
		$this->db->where('id' , $id);
		$this->db->update('news');
		 if ($this->db->affected_rows() == 1) {
		 	$json['status'] =  'del_success';
		 }
		 echo json_encode($json);
	}

	public function create_news($news)
	{
		$image = $this->movefile->move($news['image'],'news');
		$data = array(
			'name' => $news['title'],
			'detail' => $news['detail'],
			'image' => $image,
			'create_by' => $this->session->id,
			'create_datetime' => date('Y-m-d H:i:s')
		);
		$this->db->insert('news',$data);
		 if ($this->db->affected_rows() == 1) {
		 	$json['status'] =  'create_success';
		 }
		 echo json_encode($json);
	}
	public function get_by_id_edit($id)
	{
		$this->db->where('id' , $id);
		$query = $this->db->get('news');
		return isset($query->result_array()[0]) ? $query->result_array()[0] : array();
	}
	public function edit_($news)
	{
		$image = $this->movefile->move($news['image'],'news');
		$id = $news['id'];
		$data = array(
			'name' => $news['name'],
			'detail' => $news['detail'],
			'image' => $image,
			'modified_by' => $this->session->id,
			'modified_datetime' => date('Y-m-d H:i:s')
		);
		$this->db->where('id' , $id);
		$this->db->update('news',$data);
		if ($this->db->affected_rows() == 1) {
			$json['status'] =  'create_success';
		}
		echo json_encode($json);
	}
	
}

 ?>