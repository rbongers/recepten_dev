<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Start extends MY_Controller {

	
	public function index()
	{
		$this->twig->display('start.twig', $this->data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */