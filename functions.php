<?php 

add_theme_support ( 'post-thumbnails' );

function wpt_theme_styles() { //wpt es un nombre dado por nosotros para diferenciar con otros plugins
	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'fuentegoogle' , 'https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet' );
	wp_enqueue_style( 'fuentegoogle2' , 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600" rel="stylesheet' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'style2_css', get_template_directory_uri() . '/css/style2.css' );
	wp_enqueue_style( 'stylemovil_css', get_template_directory_uri() . '/css/style-movil.css' );
	wp_enqueue_style( 'overlay_css', get_template_directory_uri() . '/css/overlay.css' );
	wp_enqueue_style( 'slideshow_css', get_template_directory_uri() . '/css/slideshow.css' );
	
}
add_action( 'wp_enqueue_scripts', 'wpt_theme_styles' );

?>

<?php
function wpt_theme_js() {
	wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery') , '' , true);
	wp_enqueue_script('interact_js', get_template_directory_uri() . '/js/interact.js', array('jquery') , '' , true);
	wp_enqueue_script('imgliquid_js', get_template_directory_uri() . '/js/imgLiquid-min.js', array('jquery') , '' , true);
	wp_enqueue_script('slideshow_js', get_template_directory_uri() . '/js/slider.js', array('jquery') , '' , true );
	wp_enqueue_script('style2_js', get_template_directory_uri() . '/js/script2.js', array('jquery') , '' , true);
}
add_action( 'wp_enqueue_scripts', 'wpt_theme_js' );

