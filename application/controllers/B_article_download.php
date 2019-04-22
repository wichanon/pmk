<?php 
class B_article_download extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('article_download_model');
	}

	public function Index()
	{
		$data['list'] = $this->article_download_model->get_article_download();
		$this->load->view('Backoffice/article_download',$data); 
	}
	public function create()
	{
		$this->load->view('Backoffice/create_article_download'); 
	}
	public function create_()
	{
		$data = $this->input->post();
		$this->article_download_model->create_article_download($data);
	}
	public function edit($id=-1)
	{
		$res['data'] = $this->article_download_model->get_by_id_edit($id);
		$this->load->view('Backoffice/edit_article_download',$res); 
	}
	public function edit_()
	{
		$data = $this->input->post();
		$this->article_download_model->edit_($data);
	}

	public function del_article_download()
	{
		$data = $this->input->post();
		$status = $this->article_download_model->del_article_download($data['id']);
	}
}
 ?>