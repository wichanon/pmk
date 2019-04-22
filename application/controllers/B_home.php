<?php 
class B_home extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('News_model');
	}

	public function Index()
	{
		$data['list'] = $this->News_model->get_news();
		$this->load->view('Backoffice/news', $data); 
	}
	public function create()
	{
		$this->load->view('Backoffice/create_news'); 
	}
	public function create_()
	{
		$data = $this->input->post();
		$this->News_model->create_news($data);
	}
	public function edit($id=-1)
	{
		$res['data'] = $this->News_model->get_by_id_edit($id);
		$this->load->view('Backoffice/edit_news',$res); 
	}
	public function edit_new()
	{
		$this->load->view('Backoffice/edit_new'); 
	}
	public function edit_()
	{
		$data = $this->input->post();
		$this->News_model->edit_($data);
	}
	public function del_news()
	{
		$data = $this->input->post();
		$status = $this->News_model->del_news($data['id']);
	}

	
}
 ?>