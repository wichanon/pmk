
<?php 
class Picture_event extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('activity_images_model');

	}
	public function Index()
	{
		$data['list'] = $this->activity_images_model->get_activity_images();
		$this->load->view('picture_event',$data); 
	}
}
?>