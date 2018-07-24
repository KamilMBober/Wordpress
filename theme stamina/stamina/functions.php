<?php

// loading scripts 
function load_scripts(){
	
	
	
	wp_enqueue_style('animate', get_template_directory_uri().'/css/animate.css', array(),null,'all');
	wp_enqueue_style('icomoon', get_template_directory_uri().'./css/icomoon.css', array(),null,'all');
	wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(),null,'all');
	wp_enqueue_style('popup', get_template_directory_uri().'/css/magnific-popup.css', array(),null,'all');
	wp_enqueue_style('carousel', get_template_directory_uri().'/css/owl.carousel.min.css', array(),null,'all');
	wp_enqueue_style('default', get_template_directory_uri().'/css/owl.theme.default.min.css', array(),null,'all');
	wp_enqueue_style('style', get_template_directory_uri().'/css/style.css', array(),null,'all');
	wp_enqueue_style('modernizr', get_template_directory_uri().'/js/modernizr-2.6.2.min.js', array(),null,'all');
	
	wp_enqueue_script('min',get_template_directory_uri().'/js/jquery.min.js', array(),null,'all');
	wp_enqueue_script('easing',get_template_directory_uri().'/js/jquery.easing.1.3.js', array(),null,'all');
	wp_enqueue_script('bootstrap',get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'),null,'all');
	wp_enqueue_script('countTo',get_template_directory_uri().'/js/jquery.countTo.js', array(),null,'all');
	wp_enqueue_script('magnific_popup',get_template_directory_uri().'/js/jquery.magnific-popup.min.js', array(),null,'all');
	wp_enqueue_script('options_popup',get_template_directory_uri().'/js/magnific-popup-options.js', array(),null,'all');
	wp_enqueue_script('carousel',get_template_directory_uri().'/js/owl.carousel.min.js', array(),null,'all');
	wp_enqueue_script('main',get_template_directory_uri().'/js/main.js', array(),null,'all');
	wp_enqueue_script('waypoints',get_template_directory_uri().'/js/jquery.waypoints.min.js', array(),null,'all');
	
	
}

add_action('wp_enqueue_scripts', 'load_scripts');

function register_classic_menus() {
	register_nav_menus(
			array(
					'header-menu' => __( 'Header Menu' ),
					'footer-menu' => __( 'Footer Menu' )
			)
			);
}
add_action( 'init', 'register_classic_menus' );

require get_template_directory().'/inc/walker.php';