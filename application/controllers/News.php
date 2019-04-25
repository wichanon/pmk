<?php 
class News extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('article_technical_model');
		$this->load->model('news_model');
	}
	public function Index()
	{
		$data['list'] = $this->article_technical_model->get_article_technical();
		$this->load->view('news',$data); 
	}
	public function view_detail($id=-1)
	{
		$res['data'] = $this->article_technical_model->get_by_id_edit($id);
		$this->load->view('news_detail',$res); 
	}
	public function view_detail_home($id=-1)
	{
		$res['data'] = $this->news_model->get_by_id_edit($id);
		$this->load->view('news_home_detail',$res); 
	}
	
}
?>