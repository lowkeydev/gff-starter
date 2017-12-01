<?php
/**
 * Custom Fields for ACF 
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

/**
 * Header code for retargeting tags
 */


function gff_header_code() {
	the_field('header_code', 'option');
}	
add_action ('wp_head','gff_header_code');	
	

/**
 * Footer code for retargeting tags
 */


function gff_footer_code() {
	the_field('footer_code', 'option');
	the_field('page_code');
}	
add_action ('wp_footer','gff_footer_code');	
	
 
/**
 * Auto Include ACF in theme
 */

