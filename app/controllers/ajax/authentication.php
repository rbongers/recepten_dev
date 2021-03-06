<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class authentication extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		if (!$this->input->is_ajax_request()) {
		   exit('No direct script access allowed');
		}
		$this->load->database();

	}


	public function login()
	{	
		$config = array(
			array(
				'field' => 'l_username',
				'label' => 'gebruikersnaam',
				'rules' => 'trim|required|min_length[4]|max_length[12]|xss_clean'
			),
			array(
				'field' => 'l_password',
				'label' => 'wachtwoord',
				'rules' => 'trim|required|sha1'
			)
		);
		$this->form_validation->set_rules($config);
		if ($this->form_validation->run() == TRUE)
		{
			$fields = array(
				'username'	=> $this->input->post('l_username'),
				'password'	=> $this->input->post('l_password'),
			);
			$object = $this->auth->login($fields);
			if(is_object($object))
			{
				$this->output
					->set_content_type('application/json')
					->set_output(json_encode(array('status' => 'success', 'data' => $object)));
			} else {
				$this->output
					->set_content_type('application/json')
					->set_output(json_encode(array('status' => 'error', 'data' => $object)));
			}
		} else {
			$this->output
				->set_content_type('application/json')
				->set_output(json_encode(array('status' => 'error', 'data' => $this->form_validation->get_errors())));
		}
		
	}

	public function logout()
	{
		$this->auth->logout();
		$this->output
			->set_content_type('application/json')
			->set_output(json_encode(array('status' => 'success', 'data' => null)));
	}

	public function register()
	{
		$config = array(
			array(
				'field' => 'r_username',
				'label' => 'gebruikersnaam',
				'rules' => 'trim|required|min_length[4]|max_length[12]|xss_clean'
			),
			array(
				'field' => 'r_password',
				'label' => 'wachtwoord',
				'rules' => 'trim|required|matches[r_passwordconfirm]|sha1'
			),
			array(
				'field' => 'r_passwordconfirm',
				'label' => 'PasswordConfirmation',
				'rules' => 'trim|required'
			),
			array(
				'field' => 'r_email',
				'label' => 'E-mailadres',
				'rules' => 'trim|required|valid_email'
			),
			array(
				'field' => 'r_terms',
				'label' => 'Terms',
				'rules' => 'required'
			)
		);
		$this->form_validation->set_rules($config);
		if ($this->form_validation->run() == TRUE)
		{
			
			$fields = array(
				'username'	=> $this->input->post('r_username'),
				'password'	=> $this->input->post('r_password'),
				'email'		=> $this->input->post('r_email')
			);
			if($object = $this->auth->register($fields))
			{
				$this->output
				->set_content_type('application/json')
				->set_output(json_encode(array('status' => 'success', 'data' => $object)));
			}else{
				$this->output
				->set_content_type('application/json')
				->set_output(json_encode(array('status' => 'error', 'data' => $object)));
			}
		}
		else
		{
			$this->output
				->set_content_type('application/json')
				->set_output(json_encode(array('status' => 'error', 'data' => $this->form_validation->get_errors())));
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */