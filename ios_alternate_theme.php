<?php
/*
Plugin Name: iOS Alternate Theme
Plugin URI: http://www.svachon.com/
Description: Automatically switch to an alternate theme for Apple iOS devices (iPod, iPhone, iPad).
Version: 0.1
Author: Steven Vachon
Author URI: http://www.svachon.com/
Author Email: prometh@gmail.com
*/

class iOS_Alternate_Theme
{
	public function apply_theme()
	{
		// Eventually, grab this from a database table
		return 'twentyten';
	}
	
	
	public function detect_browser()
	{
		if (!is_admin())
		{
			$ipad = strpos($_SERVER['HTTP_USER_AGENT'], 'iPad');
			$iphone = strpos($_SERVER['HTTP_USER_AGENT'], 'iPhone');
			$ipod = strpos($_SERVER['HTTP_USER_AGENT'], 'iPod');
			
			if ($ipad || $iphone || $ipod)
			{
				if (file_exists(get_theme_root().$ios_theme))
				{
					add_filter('template',   array(&$this,'apply_theme') );
					add_filter('stylesheet', array(&$this,'apply_theme') );
				}
			}
		}
	}
}


$ios_alternate_theme = new iOS_Alternate_Theme();

add_action('setup_theme', array(&$ios_alternate_theme,'detect_browser') );
?>