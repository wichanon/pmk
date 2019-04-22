<?php 
class about_person extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('about_structure_model');
	}
	public function Index()
	{
			$data['list'] = $this->about_structure_model->get_about_structure();
			$this->load->view('about_person',$data); 
	}
}
?>