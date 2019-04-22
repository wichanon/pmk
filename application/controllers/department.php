<?php 
class Department extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('department_model');
	}
	public function Index()
	{
			$data['list'] = $this->department_model->get_department();
			$this->load->view('department',$data); 
	}
}
?>