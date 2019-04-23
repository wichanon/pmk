<?php 
class Department extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('department_model');
		$this->load->model('about_structure_model');
	}
	public function Index()
	{
			$data['list'] = $this->department_model->get_department();
			$this->load->view('department',$data); 
	}
	public function view_detail($id=-1)
	{
		$res['data'] = $this->department_model->get_by_id_edit($id);
		$str['structure'] = $this->about_structure_model->get_by_structure($res['data']);
		$this->load->view('department_person',$str,$res); 
	}
}
?>