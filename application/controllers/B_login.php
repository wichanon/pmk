<?php 
/**
 * 
 */
class B_login extends CI_Controller 
{
	
	public function Index()
	{
		$this->load->view('Backoffice/login'); 
	}
	public function checklogin()
	{

		$data = $this->input->post();
		$this->load->model('Login_model');
		$login_status = $this->Login_model->check_login($data);
	}

	public function logout()					
	{
		$this->session->sess_destroy();
		redirect(base_url().'B_login','refresh');
	}
	
}
 ?>