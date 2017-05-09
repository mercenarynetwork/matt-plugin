<?php
   /*
   Plugin Name: Matt's Plugin 1.3
   Plugin URI: http://fahmah.com
   Description: Trying to make a shortcode to display the sidebar
   Version: 1.3
   Author: Matt Jackson
   Author URI: http://fahmah.com
   Date: May 8th 2017
   License: None 
   */
   
   
//[foobar]
function sidebar_func( $atts ){
	echo dynamic_sidebar( 'sidebar-1' ); 
	return dynamic_sidebar( 'sidebar-1' ); 
	return "This is displaying the text but not the sidebar. Damn...";
}
add_shortcode( 'sidebar_shorty', 'sidebar_func' );

   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   ?>
