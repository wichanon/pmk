<?php 
class Login extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
	}
	public function Index()
	{
		//$data['department'] = $this->department_model->get_department();
		$this->load->view('login'); 
	}
	public function check_login()
	{
		$data = $this->input->post();
		$this->login_model->check_member($data);
	}
}
?>