<?php 
class Health extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('article_health_model');

	}
	public function Index()
	{
		$data['list'] = $this->article_health_model->get_article_health();
		$this->load->view('health',$data); 
	}
	public function view_detail($id=-1)
	{
		$res['data'] = $this->article_health_model->get_by_id_edit($id);
		$this->load->view('health_detail',$res); 
	}
}
?>