<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model{

	public function check_login($data)
	{
		$this->db->where('username' , $data['username']);
    	$this->db->where('password' , $data['password']);
    	$query = $this->db->get('user_admins');

		if($query->num_rows()==1){
			$result = $query->result_array()[0];
			$this->session->id = $result['id'];
			$this->session->name = $result['name'];
      		$json['status'] =  'success';
      		$json['title'] =  'ยินดีต้อนรับ  '.$data['username'];
      		$json['href'] =  'B_home';
      		//$json['name'] =  'admin : '.$session_name;

		}else{
			$json['status'] =  'error';
      		$json['title'] =  'ผิดพลาด';
		}
		echo json_encode($json);
	}
	public function check_member($data)	
	{
		$this->db->where('username' , $data['username']);
    	$this->db->where('password' , $data['password']);
    	$query = $this->db->get('users');

		if($query->num_rows()==1){
			$result = $query->result_array()[0];
			$this->session->id_member = $result['id'];
			$this->session->name_member = $result['firstname'];
      		$json['status'] =  'success';
      		$json['title'] =  'ยินดีต้อนรับ  '.$data['username'];
      		$json['href'] =  'home';
		}else{
			$json['status'] =  'error';
      		$json['title'] =  'ผิดพลาด';
		}
		echo json_encode($json);
	}
	
}

 ?>