<?php 
class B_article_health extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('article_health_model');
	}

	public function Index()
	{
		$data['list'] = $this->article_health_model->get_article_health();
		$this->load->view('Backoffice/article_health',$data); 
	}
	public function create()
	{
		$this->load->view('Backoffice/create_article_health'); 
	}
	public function create_()
	{
		$data = $this->input->post();
		$this->article_health_model->create_article_health($data);
	}
	public function edit($id=-1)
	{
		$res['data'] = $this->article_health_model->get_by_id_edit($id);
		$this->load->view('Backoffice/edit_article_health',$res); 
	}
	public function edit_()
	{
		$data = $this->input->post();
		$this->article_health_model->edit_($data);
	}

	public function del_article_health()
	{
		$data = $this->input->post();
		$status = $this->article_health_model->del_article_health($data['id']);
	}
}
 ?>