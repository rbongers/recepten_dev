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

	/**
	 * Managed based functions
	 */
	function getManageString()
	{
		$url = full_url();
		$manageString = substr( $url, strrpos( $url, 'manage=' )+7 );

		if (strpos($url,'manage=') !== false) 
		{
			@$manageString = explode('&', $manageString);
			return $manageString[0];
		}
		return false;
		
	}

	/**
	 * Managed based functions
	 */
	function getManageParams()
	{
		$url = full_url();
		$manageString = substr( $url, strrpos( $url, 'manage=' )+7 );

		if (strpos($url,'manage=') != false) 
		{
			if(strpos($manageString,'&') == false)
			{
				return false;

			}
			else
			{
				@$manageString = explode('&', $manageString);
				unset($manageString[0]);

				$return = '';
				foreach($manageString as $value)
				{

					parse_str($value, $return);
				}
				return $return;
			}
			
		}
		return false;
		
	}

	function getManageModel($manageString)
	{
		include(getcwd().'/app/third_party/djsocial/manage.php');
		if(@ $manageArray[$manageString])
		{
			return $manageArray[$manageString];
		}
		else
		{
			return false;
		}
	}

}


