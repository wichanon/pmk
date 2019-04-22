<?php 
class B_about_structure extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('about_structure_model');
	}

	public function Index()
	{
		$data['list'] = $this->about_structure_model->get_about_structure();
		$this->load->view('Backoffice/about_structure',$data); 
	}
	public function create()
	{
		$this->load->view('Backoffice/create_about_structure'); 
	}
	public function create_()
	{
		$data = $this->input->post();
		$this->about_structure_model->create_about_structure($data);
	}
	public function edit($id=-1)
	{
		$res['data'] = $this->about_structure_model->get_by_id_edit($id);
		$this->load->view('Backoffice/edit_about_structure',$res); 
	}
	public function edit_()
	{
		$data = $this->input->post();
		$this->about_structure_model->edit_($data);
	}

	public function del_about_structure()
	{
		$data = $this->input->post();
		$status = $this->about_structure_model->del_about_structure($data['id']);
	}
}
 ?>