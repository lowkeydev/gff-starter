
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

	</div><!-- #content -->
    <!-- Global widget sections -->
<section class="container-fluid global-cta-banner"><div class="row"><div class="container"><?php dynamic_sidebar('global-cta');?></div></div></section>
	<footer id="colophon" class="site-footer " role="contentinfo">
    <div class="container">
		<div class="site-info">
			<div class="row"><?php the_field('global_footer_content','option');?></div>
            <div class="row"><?php the_field('global_copyright','option');?></div>
        
		</div><!-- .site-info -->
        </div><!-- .container -->
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
<?php the_field('global_footer_codes');?>
<!-- Important scripts for function, do not remove -->
<script>
	
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
