<?php
/**
* Plugin Name: Facebook Footer Link
* Description: Ads a Facebook profile link to the end of posts
* Version: 1.0
* Author: Gnext Developer Team
*
**/

// Exit if Accessed Directly
if(!defined('ABSPATH')){
	exit;
}


$ffl_options = get_option('ffl_settings');

// Load Scripts
require_once(plugin_dir_path(__FILE__).'/includes/facebook-footer-link-scripts.php');

// Load Content
require_once(plugin_dir_path(__FILE__).'/includes/facebook-footer-link-content.php');

if(is_admin()){
	// Load Settings
	require_once(plugin_dir_path(__FILE__).'/includes/facebook-footer-link-settings.php');
}