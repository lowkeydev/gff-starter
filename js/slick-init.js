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


	jQuery(document).ready(function(){
		$('#menu').slicknav();
	});

jQuery(document).ready(function() {
 $("img.lazy").lazyload({
    effect : "fadeIn",
	effectspeed: 1000,
});
});


jQuery(document).ready(function() {$(".global-widgets, .entry-content, .entry-header").flowtype({
   minimum   : 360,
   maximum   : 1500,
   minFont   : 13,
   maxFont   : 18,
   fontRatio : 30
});});


$(function() {$(".quick-contact").on("click", function(){
	$(this).parent().toggleClass("quick-slide");
});
	});

