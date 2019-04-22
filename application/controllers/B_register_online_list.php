<?php 
class B_register_online_list extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('register_online_list_model');
	}

	public function Index()
	{
		$data['list'] = $this->register_online_list_model->get_register_online_list();
		$this->load->view('Backoffice/register_online_list',$data); 
	}
	public function create()
	{
		$this->load->view('Backoffice/create_register_online_list'); 
	}
	public function create_()
	{
		$data = $this->input->post();
		$this->register_online_list_model->create_register_online_list($data);
	}
	public function edit_()
	{
		$data = $this->input->post();
		$res = $this->register_online_list_model->get_register_online_list_edit($data['id']);
		$this->load->view('Backoffice/edit_register_online_list',$res);
	}

	public function del_register_online_list()
	{
		$data = $this->input->post();
		$status = $this->register_online_list_model->del_register_online_list($data['id']);
	}
}
 ?>