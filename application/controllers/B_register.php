
<?php 
class B_register extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Register_model');
	}

	public function Index()
	{
		$data['list'] = $this->Register_model->get_register();
		$this->load->view('Backoffice/register_online',$data); 
	}
	public function create()
	{
		$this->load->view('Backoffice/create_register'); 
	}
	public function create_()
	{
		$data = $this->input->post();
		$this->Register_model->create_register($data);
	}
	public function edit_()
	{
		$data = $this->input->post();
		$res = $this->Register_model->get_register_edit($data['id']);
		$this->load->view('Backoffice/edit_public',$res);
	}

	public function del_register()
	{
		$data = $this->input->post();
		$status = $this->Register_model->del_register($data['id']);
	}

	
}
 ?>