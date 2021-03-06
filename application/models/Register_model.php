<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends CI_Model{

	public function get_register()
	{
		$this->db->where('is_del' , '0');
		$query = $this->db->get('register_online');
		return $query->result_array();
	}
	public function get_register_edit($id)
	{
		$this->db->where('id' , $id);
		$query = $this->db->get('register_online');
		return $query->result_array();
	}
	public function del_register($id)
	{
		$this->db->set('is_del','1');
		$this->db->where('id' , $id);
		$this->db->update('register_online');
		 if ($this->db->affected_rows() == 1) {
		 	$json['status'] =  'del_success';
		 }
		 echo json_encode($json);
	}

	public function create_register($regiser)
	{
		$data = array(
			'name' => $regiser['title'],
			'detail' => $regiser['detail'] 
		);
		$this->db->insert('register_online',$data);
		 if ($this->db->affected_rows() == 1) {
		 	$json['status'] =  'create_success';
		 }
		 echo json_encode($json);
	}
	public function register_member($user_data)	
	{

		$data = array(
			'firstname' => $user_data['firstname'],
			'lastname' => $user_data['lastname'],
			'username' => $user_data['username'],
			'password' => $user_data['password'],
			'email' => $user_data['email'],
			'phone' => $user_data['tel'],
			'department' => $user_data['department'],
			'rank' => $user_data['rank']
		);
		$this->db->insert('users',$data);
		 if ($this->db->affected_rows() == 1) {
		 	$json['status'] =  'create_success';
		 }
		 echo json_encode($json);
	}
	
}

 ?>