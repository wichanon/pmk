<?php 
class Publicrelations extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('publicrelations_model');

	}
	public function Index()
	{
		$data['list'] = $this->publicrelations_model->get_article_technical();
		$this->load->view('publicrelations',$data); 
	}
	public function view_detail($id=-1)
	{
		$res['data'] = $this->publicrelations_model->get_by_id_edit($id);
		$this->load->view('publicrelations_detail',$res); 
	}
	
}
?>