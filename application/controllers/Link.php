<?php 
class Link extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('link_connected_model');

	}
	public function Index()
	{
		$data['list'] = $this->link_connected_model->get_link_connected();
		$this->load->view('link',$data); 
	}
}
?>