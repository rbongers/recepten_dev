<?php

class Auth extends CI_Model {


	private $array;

	public function __construct()
	{
		// Call the Model constructor
		parent::__construct();
		$this->load->library('encrypt');
		$this->load->helper('cookie');
	}
	
	public function login($email, $password, $remember=false)
	{
		$query = $this->db->get_where('users', array('email' => $email), 1, 0);
		if($query->num_rows() > 0)
		{   
			if(is_array($password)){ $password = $password[0]; }
			if($password !== false && $query->row()->password == $this->encrypt->sha1($password))
			{
				$this->array = $query->row();
				unset($this->array->password);
				$this->array->logged = true;
				if(@ $_POST['remember'])
				{
					$this->remember($this->array);
				}
				$this->session->set_userdata('auth', $this->array);

				return $this->array;
			}
		}
		return false;
	}

	public function register()
	{

	}

	public function lostpassword()
	{

	}

	private function remember($user)
	{
		$key = $this->set_unique_key();
		$array = array(
			'keysecret' => $key
		);
		$this->db->where('id', $user->id);
		$this->db->update('users', $array);
		$this->input->set_cookie('Auth', $user->id.'*'.$key, 6400*24);
		return true;
	}

}

