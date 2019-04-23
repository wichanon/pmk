<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Article_technical_model extends CI_Model{

	public function get_article_technical()
	{
		$this->db->where('is_del' , '0');
		$query = $this->db->get('article_technical');
		return $query->result_array();
	}
	public function get_by_id_edit($id)
	{
		$this->db->where('id' , $id);
		$query = $this->db->get('article_technical');
		return isset($query->result_array()[0]) ? $query->result_array()[0] : array();
	}
	public function del_article_technical($id)
	{
		$this->db->set('is_del','1');
		$this->db->where('id' , $id);
		$this->db->update('article_technical');
		 if ($this->db->affected_rows() == 1) {
		 	$json['status'] =  'del_success';
		 }
		 echo json_encode($json);
	}

	public function create_article_technical($article_technical)
	{
		$image = $this->movefile->move($article_technical['image'],'article_technical');
		$file = $this->movefile->movefileDocument($article_technical['file'],'article_technical/file');
		$data = array(
			'name' => $article_technical['name'],
			'detail' => $article_technical['detail'],
			'author' => $article_technical['author'],
			'author_detail' => $article_technical['author_detail'],
			'image' => $image,
			'file' => $file,
			'create_by' => $this->session->id,
			'create_datetime' => date('Y-m-d H:i:s')
		);
		$this->db->insert('article_technical',$data);
		 if ($this->db->affected_rows() == 1) {
		 	$json['status'] =  'create_success';
		 }
		 echo json_encode($json);
	}
	public function edit_($article_technical)
	{
		$image = $this->movefile->move($article_technical['image'],'article_technical');
		$file = $this->movefile->movefileDocument($article_technical['file'],'article_technical/file');
		$id = $article_technical['id'];
		$data = array(
			'name' => $article_technical['name'],
			'detail' => $article_technical['detail'],
			'author' => $article_technical['author'],
			'author_detail' => $article_technical['author_detail'],
			'image' => $image,
			'file' => $file,
			'modified_by' => $this->session->id,
			'modified_datetime' => date('Y-m-d H:i:s')
		);
		$this->db->where('id' , $id);
		$this->db->update('article_technical',$data);
		if ($this->db->affected_rows() == 1) {
			$json['status'] =  'create_success';
		}
		echo json_encode($json);
	}
	
}

 ?>