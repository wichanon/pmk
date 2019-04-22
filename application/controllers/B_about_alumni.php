<?php 
class B_about_alumni extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('about_alumni_model');
	}

	public function Index()
	{
		if($this->session->name == null){
			$this->load->view('Backoffice/login'); 
		}
		else{
			$data['list'] = $this->about_alumni_model->get_about_alumni();
			$this->load->view('Backoffice/about_alumni',$data); 
		}
		
	}
	public function create()
	{
		$this->load->view('Backoffice/create_about_alumni'); 
	}
	public function create_()
	{
		$data = $this->input->post();
		$this->about_alumni_model->create_about_alumni($data);
	}
	public function edit($id=-1)
	{
		$res['data'] = $this->about_alumni_model->get_by_id_edit($id);
		$this->load->view('Backoffice/edit_about_alumni',$res);
	}
	public function edit_()
	{
		$data = $this->input->post();
		$this->about_alumni_model->edit_($data);
	}

	public function del_about_alumni()
	{
		$data = $this->input->post();
		$status = $this->about_alumni_model->del_about_alumni($data['id']);
	}
}
 ?>