<?php 
class home extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('slideshow_model');
		$this->load->model('news_model');
		$this->load->model('seminar_model');
		$this->load->model('article_technical_model');
		$this->load->model('publicrelations_model');
		$this->load->model('department_model');
		$this->load->model('about_structure_model');
		$this->load->model('research_model');
		$this->load->model('activity_images_model');
	}
	public function Index()
	{
			$data['slideshow'] = $this->slideshow_model->get_slideshow();
			$data['news'] = $this->news_model->get_news();
			$data['seminar'] = $this->seminar_model->get_seminar();
			$data['article_technical'] = $this->article_technical_model->get_article_technical();
			$data['publicrelations'] = $this->publicrelations_model->get_public();
			$data['department'] = $this->department_model->get_department();
			$data['about_structure'] = $this->about_structure_model->get_about_structure();
			$data['research'] = $this->research_model->get_research();
			$data['activity_images'] = $this->activity_images_model->get_activity_images();
			$this->load->view('index',$data); 
	}
}
?>