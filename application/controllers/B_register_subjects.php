<?php 
class B_register_subjects extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('register_subjects_model');
	}

	public function Index()
	{
		$data['list'] = $this->register_subjects_model->get_register_subjects();
		$this->load->view('Backoffice/register_subjects',$data); 
	}
	public function create()
	{
		$this->load->view('Backoffice/create_register_subjects'); 
	}
	public function create_()
	{
		$data = $this->input->post();
		$this->register_subjects_model->create_register_subjects($data);
	}
	public function edit($id=-1)
	{
		$res['data'] = $this->register_subjects_model->get_by_id_edit($id);
		$this->load->view('Backoffice/edit_register_subjects',$res); 
	}
	public function edit_()
	{
		$data = $this->input->post();
		$this->register_subjects_model->edit_($data);
	}

	public function del_register_subjects()
	{
		$data = $this->input->post();
		$status = $this->register_subjects_model->del_register_subjects($data['id']);
	}
}
 ?>