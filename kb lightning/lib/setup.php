<?php

add_action( 'after_switch_theme', 'bson_setup' );
 
 
function bson_setup() {
	
	
		
	// Update example page to startsida
	$post_home = array(
	  'ID'             => 2,
	  'post_name'      => "home",
	  'post_title'     => "Home",
	  'post_type'	   => 'page',
	  'post_status'    => 'publish',
	); 
	$update_home = wp_insert_post( $post_home );
	
	if( $update_home ) {
		update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', 2 );
	}
	
	register_nav_menu( 'main-menu', 'Main menu' );
		
}



?>