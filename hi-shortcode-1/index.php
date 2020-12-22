<?php

/**
 * Plugin Name: Test shortcode 1
 * Description: Test show Hi on display
 * Author: Bank
 * Version: 1.0
 */


 if(!defined('ABSPATH')){
     exit;
 }

 function test_shortcode(){
     return '<b>Hi!!! I am Shortcode</b> <br>';
 }

 add_shortcode('tsc1' , 'test_shortcode');



 add_shortcode( 'get_recent_comments', 'wpshout_get_recent_comments' );
function wpshout_get_recent_comments() {
	$args = array(
		'status' => 'approve',
		'number' => '10'
	);
	$comments = get_comments($args);
	
	ob_start();
	foreach($comments as $comment) :
		echo $comment->comment_content . '<hr>';
	endforeach;
	return ob_get_clean();
}




?>