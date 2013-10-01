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

	public function register($fields)
	{
		$query = $this->db->get_where('users', array('email' => $fields['email']), 1, 0);
		$query2 = $this->db->get_where('users', array('username' => $fields['username']), 1, 0);
		if($query->num_rows() < 1)
		{   
			if($query2->num_rows() < 1)
			{   
				if(is_array($password)){ $password = $password[0]; }
				if($password !== false && $query->row()->password == $this->encrypt->sha1($password))
				{
					$data = array(
						'username' 	=> $fields['username'],
						'password'	=> $this->encrypt->sha1($password),
						'created_at' => get_timestamp(),
						'updated_at' => get_timestamp(),
						'email'		=> $fields['email']
					);
					$this->db->insert('users', $data);
					$object = $this->login($fields['username'], $fields['password']);
					return $object;	
				}
			}
			else{
				return 'username_exists';
			}
		}else{
			return 'email_exists';
		}
		return false;
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

