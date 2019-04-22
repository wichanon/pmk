<?php 
class B_slideshow extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('slideshow_model');
	}

	public function Index()
	{
		$data['list'] = $this->slideshow_model->get_slideshow();
		$this->load->view('Backoffice/slideshow',$data); 
	}
	public function create()
	{
		$this->load->view('Backoffice/create_slideshow'); 
	}
	public function create_()
	{
		$data = $this->input->post();
		$this->slideshow_model->create_slideshow($data);
	}
	public function edit($id=-1)
	{
		$res['data'] = $this->slideshow_model->get_by_id_edit($id);
		$this->load->view('Backoffice/edit_slideshow',$res);
	}
	public function edit_()
	{
		$data = $this->input->post();
		$this->slideshow_model->edit_($data);
	}

	public function del_slideshow()
	{
		$data = $this->input->post();
		$status = $this->slideshow_model->del_slideshow($data['id']);
	}
}
 ?>