<?php 
class Seminar extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('seminar_model');

	}
	public function Index()
	{
		$data['seminar'] = $this->seminar_model->get_seminar();
		$this->load->view('seminar',$data); 
	}
	public function view_detail($id=-1)
	{
		$res['data'] = $this->seminar_model->get_by_id_edit($id);
		$this->load->view('seminar_detail',$res); 
	}
	public function register_online($id=-1)	
	{
		$res['data'] = $this->seminar_model->get_by_id_edit($id);
		$res['province'] = $this->seminar_model->get_province();
		$this->load->view('register_online_regis',$res); 
	}
	public function register_seminar()
	{
		$data = $this->input->post();
		$this->seminar_model->register_seminar($data);
	}
}
?>