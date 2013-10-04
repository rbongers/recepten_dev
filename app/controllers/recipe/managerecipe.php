<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ManageRecipe extends MY_Controller {

	
	public function add()
	{
		$this->twig->display('manage/addrecipe.twig', $this->data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */