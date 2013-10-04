<?php

class Auth extends MY_Model {


	private $array;

	public function __construct()
	{
		// Call the Model constructor
		parent::__construct();
		$this->load->library('encrypt');
		// $this->load->helper('cookie');
	}

	public function check_login() 
	{
		if($this->session->userdata('auth'))
		{
			$auth = $this->session->userdata('auth');
			if(@ $auth->logged)
			{
				return $this->session->userdata('auth');
			}
		}
		/*elseif(@ $this->input->cookie('dj_Auth') != null)
		{
			$user = $this->input->cookie('dj_Auth');
			$user = explode('*', $user);
			$user_id = $user[0];
			$secret = $user[1];
			$query = $this->db->get_where('users', array('keysecret' => $secret, 'id' => $user_id));
			if($query->num_rows() > 0)
			{
				$result = $query->result(); $result = $result[0];
				$this->remember($result);
			}
		}*/
		return false;
	}

	public function logout()
	{
		$this->session->unset_userdata('auth');
		$cookie = array(
			'name'   => 'Auth',
			'value'  => '',
			'expire' => '',
			'domain' => '',
			'path'   => '/',
			'prefix' => 'recepten_',
			'secure' => FALSE
		);
		$this->input->set_cookie($cookie);
		return true;
	}

	public function login($fields, $remember=false)
	{
		$this->db->select('*');
		$this->db->where('email', $fields['username']);
		$this->db->or_where('username', $fields['username']); 
		$query = $this->db->get('users');
		if($query->num_rows() > 0)
		{
			if($fields['password'] !== false && $query->row()->password == $this->encrypt->sha1($fields['password']))
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
			} else {
				return 'bath_password';
			}
		}
		return 'not_found';
	}

	public function register($fields)
	{
		$query = $this->db->get_where('users', array('email' => $fields['email']), 1, 0);
		$query2 = $this->db->get_where('users', array('username' => $fields['username']), 1, 0);
		if($query->num_rows() < 1)
		{   
			if($query2->num_rows() < 1)
			{   
				$data = array(
					'username' 	=> $fields['username'],
					'password'	=> $this->encrypt->sha1($fields['password']),
					'created_at' => get_timestamp(),
					'updated_at' => time(),
					'email'		=> $fields['email']
				);
				$this->db->insert('users', $data);
				$object = $this->login($fields['username'], $fields['password']);
				return $object;	
				
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

