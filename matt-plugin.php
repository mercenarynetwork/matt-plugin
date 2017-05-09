<?php
   /*
   Plugin Name: Matt's Plugin 1.2
   Plugin URI: http://fahmah.com
   Description: An updated plugin for testing the Wp-Pusher thing
   Version: 1.2
   Author: Matt Jackson
   Author URI: http://fahmah.com
   Date: May 8th 2017
   License: None 
   */
   
   
//[foobar]
function sidebar_func( $atts ){
	dynamic_sidebar( 'sidebar-1' ); 
}
add_shortcode( 'sidebar_shorty', 'sidebar_func' );

   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   ?>
