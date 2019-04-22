<?php 
class B_article_technical extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('article_technical_model');
	}

	public function Index()
	{
		$data['list'] = $this->article_technical_model->get_article_technical();
		$this->load->view('Backoffice/article_technical',$data); 
	}
	public function create()
	{
		$this->load->view('Backoffice/create_article_technical'); 
	}
	public function create_()
	{
		$data = $this->input->post();
		$this->article_technical_model->create_article_technical($data);
	}
	public function edit($id=-1)
	{
		$res['data'] = $this->article_technical_model->get_by_id_edit($id);
		$this->load->view('Backoffice/edit_article_technical',$res); 
	}
	public function edit_()
	{
		$data = $this->input->post();
		$this->article_technical_model->edit_($data);
	}

	public function del_article_technical()
	{
		$data = $this->input->post();
		$status = $this->article_technical_model->del_article_technical($data['id']);
	}
}
 ?>