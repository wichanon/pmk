<?php 
class Register extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('register_model');
		$this->load->model('department_model');
	}
	public function Index()
	{
		$data['department'] = $this->department_model->get_department();
		$this->load->view('register',$data); 
	}
	public function register()
	{
		$data = $this->input->post();
		$this->register_model->register_member($data);
	}
}
?>