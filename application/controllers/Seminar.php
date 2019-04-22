<?php 
class Seminar extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('seminar_model');

	}
	public function Index()
	{
		$data['seminar'] = $this->seminar_model->get_seminar();
		$this->load->view('seminar',$data); 
	}
}
?>