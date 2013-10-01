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
		$this->data['token'] = $this->security->get_csrf_hash();
		$this->data['resource_url'] = $this->config->base_url().'/public/';
		$this->listener();
	}

	private function listener()
	{
		
		

		// Lost password listener
		if($this->input->post('l_email') && $this->input->post('l_password')){
			$auth->lostpassword($this->input->post('l_email'), $this->input->post('l_email'), $this->input->post('l_remember'));
		}
	}

	public function flashdata($text, $cat, $type)
	{

	}
}