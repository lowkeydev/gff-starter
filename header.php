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
<!-- ACF field for header codes, do not remove--><?php the_field('global_header_code','option');?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'gff-starter' ); ?></a>

	<header id="masthead" class="site-header header-modules" role="banner">
    
		<div class="container "><div class="site-branding row ">
      
  <!--Begin Page Builder ACF-->  
		<?php

// check if the flexible content field has rows of data
if( have_rows('global_header_modules','option') ):

     // loop through the rows of data
    while ( have_rows('global_header_modules','option') ) : the_row();

        if( get_row_layout() == 'one_column_module' ): ?>
			
				<div class="container">
				<div class="row header-module">
			
				<div class="col-lg-12 col-md-12 col-sm-12">
					<?php echo get_sub_field('first_one_col_content');?>
				</div>
				</div>
				</div>
				
				
				
				
			<?php
				elseif( get_row_layout() == 'two_column_module' ): ?>
			
				<div class="container">
				<div class="row header-module">
			
				<div class="col-lg-6 col-md-6 col-sm-12">
					<?php echo get_sub_field('first_two_col_content');?>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<?php echo get_sub_field('second_two_col_content');?>
				</div>
				</div>
				</div>
				
	<?php
				elseif( get_row_layout() == 'three_column_module' ): ?>
			
				<div class="container">
				<div class="row header-module">
			
				<div class="col-lg-4 col-md-4 col-sm-12">
					<?php echo get_sub_field('first_three_col_content');?>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12">
					<?php echo get_sub_field('second_three_col_content');?>
				</div>
						<div class="col-lg-4 col-md-4 col-sm-12">
					<?php echo get_sub_field('third_three_col_content');?>
				</div>
				</div>
				</div>
				
				<?php
				elseif( get_row_layout() == 'four_column_module' ): ?>
			
				<div class="container">
				<div class="row module-section">
			
				<div class="col-lg-3 col-md-3 col-sm-12">
					<?php echo get_sub_field('first_four_col_content');?>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-12">
					<?php echo get_sub_field('second_four_col_content');?>
				</div>
						<div class="col-lg-3 col-md-3 col-sm-12">
					<?php echo get_sub_field('third_four_col_content');?>
				</div>
						<div class="col-lg-3 col-md-3 col-sm-12">
					<?php echo get_sub_field('fourth_four_col_content');?>
				</div>
				</div>
				</div>
				
				<?php
				elseif( get_row_layout() == 'five_column_module' ): ?>
			
				<div class="container">
				<div class="row header-module">
			
				<div class="offset-lg-1 col-lg-2 col-md-2 col-sm-12 ">
					<?php echo get_sub_field('first_five_col_content');?>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-12 ">
					<?php echo get_sub_field('second_five_col_content');?>
				</div>
						<div class="col-lg-2 col-md-2 ">
					<?php echo get_sub_field('third_five_col_content');?>
				</div>
						<div class="col-lg-2 col-md-2 ">
					<?php echo get_sub_field('fourth_five_col_content');?>
				</div>
					<div class="col-lg-2 col-md-2 col-sm-12 ">
					<?php echo get_sub_field('fifth_five_col_content');?>
				</div>
				
				</div>
				</div>
				
				
						<?php
				elseif( get_row_layout() == 'custom_column_module' ): ?>
			
				<div class="container">
				<div class="row header-module">
			
				<div class="col-lg-12 col-md-12 col-sm-12">
					<?php echo get_sub_field('custom_column_content');?>
				</div>
				</div>
				</div>
				
				
<?php
        endif;

    endwhile;

else :

    // no layouts found

endif;

?>
			
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
