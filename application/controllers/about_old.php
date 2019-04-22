<?php 
class about_old extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('about_alumni_model');
	}
	public function Index()
	{
			$data['list'] = $this->about_alumni_model->get_about_alumni();
			$this->load->view('about_old',$data); 
	}
}
?>