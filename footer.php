
<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package GFF_Starter
 */

?>
 <div class="container-fluid">
		<div class="testimonials-wrapper" >



<?php if( have_rows('testimonial', 'option') ):

echo '<div class="testimonials">';

 // loop through the rows of data

 while ( have_rows('testimonial','option') ) : the_row();

 // display a sub field value

 //vars

	$content = get_sub_field('testimonial_content','option');

 $client = get_sub_field('testimonial_client','option'); 

	$city = get_sub_field('city','option');

	$state = get_sub_field('state','option');

 ?>

	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center customer"><?php echo $content;?><span class="customer_name"><?php echo $client;?><br><em><?php echo $city;?> <?php echo $state;?></em></span></div>



 <?php 

 endwhile;

echo '</div>';



else :

 // no rows found

endif;

?>

			</div></div>

	</div><!-- #content -->
    <!-- Global widget sections -->
<section class="container-fluid global-cta-banner"><div class="row"><div class="container"><?php dynamic_sidebar('global-cta');?></div></div></section>
	<footer id="colophon" class="site-footer " role="contentinfo">
  
		<div class="site-info">
			<!--Begin Header Modules ACF-->  
		<?php

// check if the flexible content field has rows of data
if( have_rows('global_footer_modules','option') ):

     // loop through the rows of data
    while ( have_rows('global_footer_modules','option') ) : the_row();

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
			
        
		</div><!-- .site-info -->
      
	</footer><!-- #colophon -->
</div><!-- #page -->


<!-- slideout form --> 
   

    <div class="pos-fix envelop">
	<div class="quick-contact grow">
       
       FREE ESTIMATE!
    </div>
   <!--Don't remove this, needed for GFF backend -->
	   <?php dynamic_sidebar('slideout-widget');?>
     
   

</div>


<?php wp_footer(); ?>
<?php the_field('global_footer_code');?>
<!-- Important scripts for function, do not remove -->
<script>
	
	$(document).ready(function($){

     $('.testimonials').slick({

		 autoplay: true,

dots: false,

  infinite: true,

		 autoplaySpeed: 6000,

  speed: 1000,

  slidesToShow: 1,

		 slidesToScroll: 1,

  adaptiveHeight: true,

  arrows: true,

  adaptiveHeight: true,

	
});

});





$('.testimonials').on('setPosition', function () {

 jbResizeSlider();

});

 

//we need to maintain a set height when a resize event occurs.

//Some events will through a resize trigger: $(window).trigger('resize');

$(window).on('resize', function(e) {

 jbResizeSlider();

});

 

//since multiple events can trigger a slider adjustment, we will control that adjustment here

function jbResizeSlider(){

 $slickSlider = $('.testimonials');

 $slickSlider.find('.slick-slide').height('auto');

 

 var slickTrack = $slickSlider.find('.slick-track');

 var slickTrackHeight = $(slickTrack).height();

 

 $slickSlider.find('.slick-slide').css('height', slickTrackHeight + 'px');

}


	
	
	$(document).ready(function () {
  $('.slider').slick({
    autoplay: true,
    autoplaySpeed: 5000,
    dots: true,
    draggable: false,
    fade: true,
    speed: 1000
  });
  
  $('.slider').on('beforeChange', function(event, slick, currentSlide, nextSlide) {
    $(slick.$slides).removeClass('is-animating');
  });
  
  $('.slider').on('afterChange', function(event, slick, currentSlide, nextSlide) {
    $(slick.$slides.get(currentSlide)).addClass('is-animating');
  });
});
//Mobile Menu
	jQuery(document).ready(function(){
		$('#menu').slicknav();
	});
//Lazy Load
jQuery(document).ready(function() {
 $("img.lazy").lazyload({
    effect : "fadeIn",
	effectspeed: 1000,
});
});


//Slideout Form

jQuery(function() {$(".quick-contact").on("click", function(){
	jQuery(this).parent().toggleClass("quick-slide");
});
				  });</script>
</body>
</html>
