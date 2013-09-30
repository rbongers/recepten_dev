<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
	// authUser object
	public $authUser;
	// Data view object
	public $data;

	public function __construct() 
	{
		// Parent contruct
		parent::__construct();
		$this->data = array();
		$this->data['resource_url'] = $this->config->base_url().'/public/';
		$this->listener();
	}

	private function listener()
	{
		// Login listener
		if($_POST['l_username'] && $_POST['l_password']){
			$auth->login($this->input->post('l_email'), $this->input->post('l_email'), $this->input->post('l_remember'));
		}

		// Register listener
		if($this->input->post('l_email') && $this->input->post('l_password')){
			$auth->register($this->input->post('l_email'), $this->input->post('l_email'), $this->input->post('l_remember'));
		}

		// Lost password listener
		if($this->input->post('l_email') && $this->input->post('l_password')){
			$auth->lostpassword($this->input->post('l_email'), $this->input->post('l_email'), $this->input->post('l_remember'));
		}
	}
}