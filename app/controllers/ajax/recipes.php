<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class recipes extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		if (!$this->input->is_ajax_request()) {
		   exit('No direct script access allowed');
		}
	}


	public function add()
	{
		$config = array(
			array(
				'field' => 'name',
				'label' => 'Recept naam',
				'rules' => 'trim|required|xss_clean'
			),
			array(
				'field' => 'amount',
				'label' => 'Personen',
				'rules' => 'trim|required|is_natural_no_zero'
			),
			array(
				'field' => 'time',
				'label' => 'Bereidingstijd',
				'rules' => 'trim|required|is_natural_no_zero'
			),
			array(
				'field' => 'menu',
				'label' => 'Menugang',
				'rules' => 'trim|required|is_natural_no_zero'
			),
			array(
				'field' => 'group',
				'label' => 'Hoofdgroep',
				'rules' => 'trim|required|is_natural_no_zero'
			),
			array(
				'field' => 'technique',
				'label' => 'Bereidingstechniek',
				'rules' => 'trim|required|is_natural_no_zero'
			),
			array(
				'field' => 'kitchen',
				'label' => 'Keuken',
				'rules' => 'trim|required|is_natural_no_zero'
			),
			array(
				'field' => 'opening',
				'label' => 'Gelegenheid',
				'rules' => 'trim|is_natural_no_zero'
			),
			array(
				'field' => 'ingredients',
				'label' => 'Ingrediënten',
				'rules' => 'trim|required'
			),
			array(
				'field' => 'helpers',
				'label' => 'Hulpmiddelen',
				'rules' => 'trim|required'
			),
			array(
				'field' => 'preparation',
				'label' => 'Bereidingswijze',
				'rules' => 'trim|required|encode_php_tags'
			),
			array(
				'field' => 'sourcename',
				'label' => 'Bron naam',
				'rules' => 'trim|encode_php_tags'
			),
			array(
				'field' => 'sourceurl',
				'label' => 'Bron link',
				'rules' => 'prep_url'
			),
			array(
				'field' => 'tags',
				'label' => 'Sleutelwoorden',
				'rules' => 'trim|encode_php_tags'
			)
		);
		$this->form_validation->set_rules($config);
		if ($this->form_validation->run() == TRUE)
		{
			$fields = array(
				'user_id' 		=> ($this->authUser->logged) ? $this->authUser->id : 0,
				'type_id' 		=> '',
				'menu_id'		=> $this->input->post('menu'),
				'group_id'		=> $this->input->post('group'),
				'technique_id'	=> $this->input->post('technique'),
				'kitchen_id'	=> $this->input->post('kitchen'),
				'opening_id'	=> $this->input->post('opening'),
				'diet_id'		=> $this->input->post('diets'),
				'created'		=> get_timestamp(),
				'create_time'	=> $this->input->post('time'),
				'ingredients'	=> $this->input->post('ingredients'),
				'helpers'		=> $this->input->post('helpers'),
				'preparation'	=> $this->input->post('preparation'),
				'sourcename'	=> $this->input->post('sourcename'),
				'sourceurl'		=> $this->input->post('sourceurl'),
				'tags'			=> $this->input->post('tags'),
				'persons'		=> $this->input->post('amount'),
			);
			$this->recipesModel->add($fields);
			$this->output
				->set_content_type('application/json')
				->set_output(json_encode(array('status' => 'success', 'data' => null)));
		}
		else
		{
			$this->output
				->set_content_type('application/json')
				->set_output(json_encode(array('status' => 'error', 'data' => $this->form_validation->get_errors())));
		}
	}
}