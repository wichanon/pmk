<?php 
class B_link_connected extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('link_connected_model');
	}

	public function Index()
	{
		$data['list'] = $this->link_connected_model->get_link_connected();
		$this->load->view('Backoffice/link_connected',$data); 
	}
	public function create()
	{
		$this->load->view('Backoffice/create_link_connected'); 
	}
	public function create_()
	{
		$data = $this->input->post();
		$this->link_connected_model->create_link_connected($data);
	}
	public function edit($id=-1)
	{
		$res['data'] = $this->link_connected_model->get_by_id_edit($id);
		$this->load->view('Backoffice/edit_link_connected',$res); 
	}
	public function edit_()
	{
		$data = $this->input->post();
		$this->link_connected_model->edit_($data);
	}

	public function del_link_connected()
	{
		$data = $this->input->post();
		$status = $this->link_connected_model->del_link_connected($data['id']);
	}
}
 ?>