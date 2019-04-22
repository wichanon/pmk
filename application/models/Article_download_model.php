<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Article_download_model extends CI_Model{

	public function get_article_download()
	{
		$this->db->where('is_del' , '0');
		$query = $this->db->get('article_download');
		return $query->result_array();
	}
	public function get_by_id_edit($id)
	{
		$this->db->where('id' , $id);
		$query = $this->db->get('article_download');
		return isset($query->result_array()[0]) ? $query->result_array()[0] : array();
	}
	public function del_article_download($id)
	{
		$this->db->set('is_del','1');
		$this->db->where('id' , $id);
		$this->db->update('article_download');
		 if ($this->db->affected_rows() == 1) {
		 	$json['status'] =  'del_success';
		 }
		 echo json_encode($json);
	}

	public function create_article_download($article_download)
	{
		$image = $this->movefile->move($article_download['image'],'article_download');
		$data = array(
			'name' => $article_download['name'],
			'detail' => $article_download['detail'],
			'date_update' => date('Y-m-d'),
			'file' => $image,
			'create_by' => $this->session->id,
			'create_datetime' => date('Y-m-d H:i:s')
		);
		$this->db->insert('article_download',$data);
		 if ($this->db->affected_rows() == 1) {
		 	$json['status'] =  'create_success';
		 }
		 echo json_encode($json);
	}
	public function edit_($article_download)
	{
		$image = $this->movefile->move($article_download['image'],'article_download');
		$id = $article_download['id'];
		$data = array(
			'name' => $article_download['name'],
			'detail' => $article_download['detail'],
			'file' => $image,
			'modified_by' => $this->session->id,
			'modified_datetime' => date('Y-m-d H:i:s')
		);
		$this->db->where('id' , $id);
		$this->db->update('article_download',$data);
		if ($this->db->affected_rows() == 1) {
			$json['status'] =  'create_success';
		}
		echo json_encode($json);
	}
	
}

 ?>