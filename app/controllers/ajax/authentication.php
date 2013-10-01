<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class authentication extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		if (!$this->input->is_ajax_request()) {
		   exit('No direct script access allowed');
		}

	}


	public function login()
	{
	   	$auth->login($this->input->post('l_email'), $this->input->post('l_email'), $this->input->post('l_remember'));
	}



	public function register()
	{
		$config = array(
			array(
				'field' => 'r_username',
				'label' => 'gebruikersnaam',
				'rules' => 'trim|required|min_length[5]|max_length[12]|xss_clean'
			),
			array(
				'field' => 'r_password',
				'label' => 'wachtwoord',
				'rules' => 'trim|required|matches[passconf]|sha1'
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
			if($auth->register($fields))
			{
				echo 'success';
			}else{
				echo 'error';
			}
		}
		else
		{
			$this->output
			    ->set_content_type('application/json')
			    ->set_output(json_encode($this->form_validation->get_errors()));
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */