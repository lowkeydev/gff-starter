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

</body>
</html>
