<?php 
class B_department extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('department_model');
	}

	public function Index()
	{
		$data['list'] = $this->department_model->get_department();
		$this->load->view('Backoffice/department',$data); 
	}
	public function create()
	{
		$this->load->view('Backoffice/create_department'); 
	}
	public function create_()
	{
		$data = $this->input->post();
		$this->department_model->create_department($data);
	}
	public function edit($id=-1)
	{
		$res['data'] = $this->department_model->get_by_id_edit($id);
		$this->load->view('Backoffice/edit_department',$res); 
	}
	public function edit_()
	{
		$data = $this->input->post();
		$this->department_model->edit_($data);
	}

	public function del_department()
	{
		$data = $this->input->post();
		$status = $this->department_model->del_department($data['id']);
	}
}
 ?>