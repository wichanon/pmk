<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class About_alumni_model extends CI_Model{

	public function get_about_alumni()
	{
		$this->db->where('is_del' , '0');
		$query = $this->db->get('about_alumni');
		return $query->result_array();
	}
	public function get_by_id_edit($id)
	{
		$this->db->where('id' , $id);
		$query = $this->db->get('about_alumni');
		return isset($query->result_array()[0]) ? $query->result_array()[0] : array();
	}
	public function del_about_alumni($id)
	{
		$this->db->set('is_del','1');
		$this->db->where('id' , $id);
		$this->db->update('about_alumni');
		 if ($this->db->affected_rows() == 1) {
		 	$json['status'] =  'del_success';
		 }
		 echo json_encode($json);
	}

	public function create_about_alumni($about_alumni)
	{
		$image = $this->movefile->move($about_alumni['image'],'about_alumni');
		$data = array(
			'name' => $about_alumni['name'],
			'generation' => $about_alumni['generation'],
			'year' => $about_alumni['year'] ,
			'branch' => $about_alumni['branch'] ,
			'present' => $about_alumni['present'],
			'image' => $image,
			'create_by' => $this->session->id,
			'create_datetime' => date('Y-m-d H:i:s')
		);
		$this->db->insert('about_alumni',$data);
		 if ($this->db->affected_rows() == 1) {
		 	$json['status'] =  'create_success';
		 }
		 echo json_encode($json);
	}
	public function edit_($about_alumni)
	{
		$image = $this->movefile->move($about_alumni['image'],'about_alumni');
		$id = $about_alumni['id'];
		$data = array(
			'name' => $about_alumni['name'],
			'generation' => $about_alumni['generation'],
			'year' => $about_alumni['year'],
			'branch' => $about_alumni['branch'],
			'present' => $about_alumni['present'],
			'image' => $image,
			'modified_by' => $this->session->id,
			'modified_datetime' => date('Y-m-d H:i:s')
		);
		$this->db->where('id' , $id);
		$this->db->update('about_alumni',$data);
		if ($this->db->affected_rows() == 1) {
			$json['status'] = 'create_success';
		}
		echo json_encode($json);
	}
	
}

 ?>