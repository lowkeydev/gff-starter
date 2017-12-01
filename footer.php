
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
			<div class="row"><?php dynamic_sidebar('footer-widget-1');?></div>
            <div class="row"><?php dynamic_sidebar('copyright-widget');?></div>
        
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

<!-- Important scripts for function, do not remove -->
<script>
	
	//Slider 
	jQuery(document).ready(function($){
     $('.slider').slick({
   
  dots: true,
  infinite: true,
  speed: 500,
  fade: true,
  cssEase: 'linear',
   autoplay: true,
   arrows: true,
  autoplaySpeed: 2000,
});
});


jQuery(document).ready(function($){
     $('.slideshow').slick({
dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  centerMode: true,
  arrows: true,
  adaptiveHeight: true,
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
