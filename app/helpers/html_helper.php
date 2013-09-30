<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Strip all tags
 */
function html_strip_all($fields)
{
	if(is_array($fields))
	{
		foreach ($fields as $key => $value) {
			$fields[$key] = strip_tags($value);
		}
	}
	else
	{
		$fields = strip_tags($fields);
	}
	return $fields;
}

/**
 * Strip all tags except valid tags
 */
function html_strip_except($fields, $tags=array())
{
	$valid_tags = array('<a>', '<p>', '<strong>', '<small>', '<quote>', '<i>', '<ul>', '<li>', '<br>');
	if(is_array($fields))
	{
		foreach ($fields as $key => $value) {
			$fields[$key] = str_replace("<br>", "\n", $value);  
			$fields[$key] = strip_tags($value, implode('', $valid_tags));
		}
	}
	else
	{
		$fields = str_replace("<br>", "\n", $fields);  
		$fields = strip_tags($fields, implode('', $valid_tags));
	}
	
	return $fields;
}

/**
 * Check if field is only int
 */
function html_int_only($field)
{
	$field = intval($field);
	if(is_int($field))
	{
		return $field;
	}
	else
	{
		return 0;
	}
}

/**
 * Check for valid image input
 */
function html_image_id($field)
{
	$field = html_int_only($field);
	return $field;
}
 

 
?>