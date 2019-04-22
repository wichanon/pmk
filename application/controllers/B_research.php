<?php 
class B_research extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('research_model');
	}

	public function Index()
	{
		$data['list'] = $this->research_model->get_research();
		$this->load->view('Backoffice/research',$data); 
	}
	public function create()
	{
		$this->load->view('Backoffice/create_research'); 
	}
	public function create_()
	{
		$data = $this->input->post();
		$this->research_model->create_research($data);
	}
	public function edit($id=-1)
	{
		$res['data'] = $this->research_model->get_by_id_edit($id);
		$this->load->view('Backoffice/edit_research',$res); 
	}
	public function edit_()
	{
		$data = $this->input->post();
		$this->research_model->edit_($data);
	}

	public function del_research()
	{
		$data = $this->input->post();
		$status = $this->research_model->del_research($data['id']);
	}
}
 ?>