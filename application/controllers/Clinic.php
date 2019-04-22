<?php 
class Clinic extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('article_download_model');

	}
	public function Index()
	{
		$data['list'] = $this->article_download_model->get_article_download();
		$this->load->view('clinic',$data); 
	}
}
?>