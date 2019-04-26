
<?php 
class Research extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('research_model');
	}

	public function Index()
	{
		$data['list'] = $this->research_model->get_research();
		$this->load->view('research',$data); 
	}
	public function view_detail($id=-1)
	{
		$res['data'] = $this->research_model->get_by_id_edit($id);
		$this->load->view('research_detail',$res); 
	}
}
 ?>