<?php 
class Elective extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('department_model');

	}
	public function Index()
	{
		$data['department'] = $this->department_model->get_department();
		$this->load->view('elective',$data); 
	}
	public function register_elective()
	{
		$data = $this->input->post();
		$this->department_model->register_department($data);
	}
}
?>