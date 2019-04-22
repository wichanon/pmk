
<?php 
class B_seminar extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('seminar_model');
	}

	public function Index()
	{
		$data['list'] = $this->seminar_model->get_seminar();
		$this->load->view('Backoffice/seminar',$data); 
	}
	public function create()
	{
		$this->load->view('Backoffice/create_seminar'); 
	}
	public function create_()
	{
		$data = $this->input->post();
		$this->seminar_model->create_seminar($data);
	}
	public function edit($id=-1)
	{
		$res['data'] = $this->seminar_model->get_by_id_edit($id);
		$this->load->view('Backoffice/edit_seminar',$res); 
	}
	public function edit_()
	{
		$data = $this->input->post();
		$this->seminar_model->edit_($data);
	}

	public function del_seminar()
	{
		$data = $this->input->post();
		$status = $this->seminar_model->del_seminar($data['id']);
	}

	
}
 ?>