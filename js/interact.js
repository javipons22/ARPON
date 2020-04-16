
  
jQuery("#overlay-inicio").delay(5000).fadeOut();

jQuery(document).ready(function($){






$(".imgLiquidFill").imgLiquid();
$(".conten2").imgLiquid();

$("#demo").hide();

$(".button").on('click', function(){
	$("#demo").slideToggle();
});

$(".conten").imgLiquid();
$(".pag-proyecto, #slideshow, #slideshow img, .proyectos, #slider").delay(1500).show();
});