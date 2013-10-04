<?php

class recipesModel extends MY_Model {
	
	function __construct()
	{

	}

	public function add($fields)
	{
		$this->db->insert('recipes', $fields);
		return true;
	}
	
	public function menugang()
	{
		$query = $this->db->get('menus');
		return $query->result();
	}

	public function hoofdgroup()
	{
		$query = $this->db->get('recipe_groups');
		return $query->result();
	}

	public function technique()
	{
		$query = $this->db->get('technique');
		return $query->result();
	}

	public function kitchen()
	{
		$query = $this->db->get('kitchens');
		return $query->result();
	}

	public function opening()
	{
		$query = $this->db->get('opening');
		return $query->result();
	}

	public function dieten()
	{
		$query = $this->db->get('diets');
		return $query->result();
	}
}
