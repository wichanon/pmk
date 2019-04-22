
<?php 
class B_publicrelations extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Publicrelations_model');
	}

	public function Index()
	{
		$data['list'] = $this->Publicrelations_model->get_public();
		$this->load->view('Backoffice/publicrelations',$data); 
	}
	public function create()
	{
		$this->load->view('Backoffice/create_public'); 
	}
	public function create_()
	{
		$data = $this->input->post();
		$this->Publicrelations_model->create_public($data);
	}
	public function edit($id=-1)
	{
		$res['data'] = $this->Publicrelations_model->get_public_edit($id);
		$this->load->view('Backoffice/edit_public',$res); 
	}
	public function edit_()
	{
		$data = $this->input->post();
		$this->Publicrelations_model->edit_public($data);
	}
	public function del_public()
	{
		$data = $this->input->post();
		$status = $this->Publicrelations_model->del_public($data['id']);
	}
}
 ?>