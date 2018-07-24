<?php

// loading scripts 
function load_scripts(){
	
	wp_enqueue_style('normalize', get_template_directory_uri().'/css/assets/normalize.css', array(),null,'all');
	wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/assets/bootstrap.min.css', array(),null,'all');
	wp_enqueue_style('fa', get_template_directory_uri().'/css/font-awesome.min.css', array(),null,'all');
	wp_enqueue_style('foundation', get_template_directory_uri().'/css/gallery/foundation.min.css', array(),null,'all');
	wp_enqueue_style('set1', get_template_directory_uri().'/css/gallery/set1.css', array(),null,'all');
	wp_enqueue_style('main', get_template_directory_uri().'/css/main.css', array(),null,'all');
	wp_enqueue_style('responsive', get_template_directory_uri().'/css/responsive.css', array(),null,'all');
	
	
	/*
	wp_enqueue_script('set1', get_template_directory_uri().'https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js', array(),null,'all');
	wp_script_add_data( 'set1', 'conditional', 'lt IE 9' );
	wp_enqueue_script('set2', get_template_directory_uri().'https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js', array(),null,'all');
	wp_script_add_data( 'set2', 'conditional', 'lt IE 9' );*/
	
	
	
	
	wp_enqueue_script('modernizer',get_template_directory_uri().'/js/assets/modernizr-2.8.3.min.js', array('jquery'),null,'all');
	wp_enqueue_script('plugins',get_template_directory_uri().'/js/assets/plugins.js', array('jquery'),null,'all');
	wp_enqueue_script('bootstrap',get_template_directory_uri().'/js/assets/bootstrap.min.js', array('jquery'),null,'all');
	wp_enqueue_script('google-maps','https://maps.googleapis.com/maps/api/js', array(),null,'all');
	wp_enqueue_script('maps',get_template_directory_uri().'/js/maps.js', array('jquery'),null,'all');
	wp_enqueue_script('masonry',get_template_directory_uri().'/js/gallery/masonry.pkgd.min.js', array('jquery'),null,'all');
	wp_enqueue_script('imagesloaded',get_template_directory_uri().'/js/gallery/imagesloaded.pkgd.min.js', array('jquery'),null,'all');
	wp_enqueue_script('infinitescroll',get_template_directory_uri().'/js/gallery/jquery.infinitescroll.min.js', array('jquery'),null,'all');
	wp_enqueue_script('gallery',get_template_directory_uri().'/js/gallery/main.js', array('jquery'),null,'all');
	//wp_enqueue_script('nicescroll',get_template_directory_uri().'/js/jquery.nicescroll.min.js', array(),null,'all');
	
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



