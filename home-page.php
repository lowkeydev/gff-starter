<?php
/**
 * Template Name: Home
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package GFF_Starter
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
     <!--Begin Page Builder ACF-->  
		<?php

// check if the flexible content field has rows of data
if( have_rows('page_modules') ):

     // loop through the rows of data
    while ( have_rows('page_modules') ) : the_row();

        if( get_row_layout() == 'slider_module' ):

        	$images = get_sub_field('page_slider');
			$content = get_sub_field('page_slider_content');
			
			if ($images);?>
			<div class="row module-section">
			<div class="slick-slider-content"><?php echo $content; ?></div>
			<div class="slider">
				
        <?php foreach( $images as $image ): ?>
                <div class="slick-container">
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					
                </div>
				
				
            <?php endforeach; ?>
			
			</div>
			</div>

       <?php  elseif( get_row_layout() == 'banner_module' ): ?>
			<div class="row module-section">
			<div class="banner-img" style="background: url('<?php echo get_sub_field('banner');?>')"><div class="banner-content"><?php echo get_sub_field('banner_content');?></div></div>
			<?php
				
				
				   elseif( get_row_layout() == 'one_column_module' ): ?>
			
				<div class="container">
				<div class="row module-section">
			
				<div class="col-lg-12 col-md-12 col-sm-12">
					<?php echo get_sub_field('first_one_col_content');?>
				</div>
				</div>
				</div>
				
				
				
				
			<?php
				elseif( get_row_layout() == 'two_column_module' ): ?>
			
				<div class="container">
				<div class="row module-section">
			
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
				<div class="row module-section">
			
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
				<div class="row module-section">
			
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
				<div class="row module-section">
			
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

?></main>
		
	</div><!-- #primary -->

<?php

get_footer();
