<?php 
class B_activity_images extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('activity_images_model');
	}

	public function Index()
	{
		$data['list'] = $this->activity_images_model->get_activity_images();
		$this->load->view('Backoffice/activity_images',$data); 
	}
	public function create()
	{
		$this->load->view('Backoffice/create_activity_images'); 
	}
	public function create_()
	{
		$data = $this->input->post();
		$this->activity_images_model->create_activity_images($data);
	}
	public function edit($id=-1)
	{
		$res['data'] = $this->activity_images_model->get_by_id_edit($id);
		$this->load->view('Backoffice/edit_activity_images',$res);
	}
	public function edit_()
	{
		$data = $this->input->post();
		$this->activity_images_model->edit_($data);
	}

	public function del_activity_images()
	{
		$data = $this->input->post();
		$status = $this->activity_images_model->del_activity_images($data['id']);
	}
}
 ?>