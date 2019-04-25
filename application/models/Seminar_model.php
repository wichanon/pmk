<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Seminar_model extends CI_Model{

	public function get_seminar()
	{
		$this->db->where('is_del' , '0');
		$query = $this->db->get('seminar');
		return $query->result_array();
	}
	public function get_by_id_edit($id)
	{
		$this->db->where('id' , $id);
		$query = $this->db->get('seminar');
		return isset($query->result_array()[0]) ? $query->result_array()[0] : array();
	}
	public function del_seminar($id)
	{
		$this->db->set('is_del','1');
		$this->db->where('id' , $id);
		$this->db->update('seminar');
		 if ($this->db->affected_rows() == 1) {
		 	$json['status'] =  'del_success';
		 }
		 echo json_encode($json);
	}

	public function create_seminar($seminar)
	{
		$image = $this->movefile->move($seminar['image'],'seminar');
		$data = array(
			'name' => $seminar['name'],
			'detail' => $seminar['detail'],
			'image' => $image,
			'create_by' => $this->session->id,
			'create_datetime' => date('Y-m-d H:i:s')
		);
		$this->db->insert('seminar',$data);
		 if ($this->db->affected_rows() == 1) {
		 	$json['status'] =  'create_success';
		 }
		 echo json_encode($json);
	}

	public function edit_($seminar)
	{
		$image = $this->movefile->move($seminar['image'],'seminar');
		$id = $seminar['id'];
		$data = array(
			'name' => $seminar['name'],
			'detail' => $seminar['detail'],
			'image' => $image,
			'modified_by' => $this->session->id,
			'modified_datetime' => date('Y-m-d H:i:s')
		);
		$this->db->where('id' , $id);
		$this->db->update('seminar',$data);
		if ($this->db->affected_rows() == 1) {
			$json['status'] =  'create_success';
		}
		echo json_encode($json);
	}
	public function get_province()
	{
		$query = $this->db->get('provinces');
		return $query->result_array();
	}
	public function register_seminar($data_regis)	
	{
		$data = array(
			'seminar' => $data_regis['seminar'],
			'firstname_th' => $data_regis['firstname'],
			'lastname_th' => $data_regis['lastname'],
			'firstname_eng' => $data_regis['firstname_eng'],
			'lastname_eng' => $data_regis['lastname_eng'],
			'sex' => $data_regis['sex'],
			'office' => $data_regis['office'],
			'province' => $data_regis['province'],
			'phonenumber' => $data_regis['phone'],
			'email' => $data_regis['email'],
			'status' => $data_regis['work'],
			'payment' => $data_regis['payment']
		);
		$this->db->insert('register_online_list',$data);
		 if ($this->db->affected_rows() == 1) {
		 	$json['status'] =  'create_success';
		 }
		 echo json_encode($json);
	}
}

 ?>