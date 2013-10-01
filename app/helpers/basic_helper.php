<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (! function_exists('get_timestamp'))
{
	function get_timestamp($date='')
	{
		$datetime = new DateTime($date);
		return $datetime->getTimestamp();
	}

	function full_url()
	{
		$s = empty($_SERVER["HTTPS"]) ? '' : ($_SERVER["HTTPS"] == "on") ? "s" : "";
		$sp = strtolower($_SERVER["SERVER_PROTOCOL"]);
		$protocol = substr($sp, 0, strpos($sp, "/")) . $s;
		$port = ($_SERVER["SERVER_PORT"] == "80") ? "" : (":".$_SERVER["SERVER_PORT"]);
		return $protocol . "://" . $_SERVER['SERVER_NAME'] . $port . $_SERVER['REQUEST_URI'];
	}

}


