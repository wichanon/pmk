<?php 
class News extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('news_model');

	}
	public function Index()
	{
		$data['list'] = $this->news_model->get_news();
		$this->load->view('news',$data); 
	}
}
?>