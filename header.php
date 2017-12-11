<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package GFF_Starter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
<!-- ACF field for header codes, do not remove--><?php the_field('global_header_codes','option');?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'gff-starter' ); ?></a>

	<header id="masthead" class="site-header " role="banner">
    
		<div class="container"><div class="site-branding row">
      
	 <!--ACF field for global header content, do not remove--><?php the_field('global_header_content','option');?>
			
		</div></div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
		
			<?php wp_nav_menu( array(
	'menu' => 'Main Menu',
	'theme_location' => 'menu-1',
	'menu_id' => 'menu',
	'depth' => 3,
	'container'         => 'div',
	'container_class'   => 'container',
	'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
	'walker'            => /*important for dropdown effect */new wp_bootstrap_navwalker()));?>
			
			
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
 
    
	<div id="content" class="site-content">
