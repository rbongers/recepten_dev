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
		$this->data['token_name'] = $this->security->get_csrf_token_name();
		$this->data['token'] = $this->security->get_csrf_hash();
		$this->data['resource_url'] = $this->config->base_url().'/public/';
		$this->init();
	}

	private function init()
	{
		// Check if user is logged
		$this->authUser = $this->auth->check_login();
		// Fill user object in view 
		$this->data['authUser'] = $this->authUser;

		// Lost password listener
		if($this->input->post('l_email') && $this->input->post('l_password')){
			$auth->lostpassword($this->input->post('l_email'), $this->input->post('l_email'), $this->input->post('l_remember'));
		}
	}

	public function flashdata($text, $cat, $type)
	{

	}
}