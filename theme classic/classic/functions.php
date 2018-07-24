<?php

// loading scripts 
function load_scripts(){
	
	
	
	//wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(),null,'all');
	wp_enqueue_style('google-fonts','https://fonts.googleapis.com/css?family=Open+Sans:300,400', array(),null,'all');
	wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(),null,'all');
	wp_enqueue_style('templatemo', get_template_directory_uri().'/css/templatemo-style.css', array(),null,'all');
	
	
	wp_enqueue_script('tether','https://www.atlasestateagents.co.uk/javascript/tether.min.js', array(jquery),null,'all');
	wp_enqueue_style('bootstrap',get_template_directory_uri().'/js/bootstrap.min.js', array(jquery),'1.0','all');
}

add_action('wp_enqueue_scripts', 'load_scripts');

// register menues
function register_classic_menus() {
	register_nav_menus(
			array(
					'header-menu' => __( 'Header Menu' ),
					'category-menu'=> __('Category Menu'),
					'links-menu'=>__('Links Menu'),
					'footer-menu'=>__('Footer Menu')
			)
			);
}
add_action( 'init', 'register_classic_menus' );

// register footer sidebar
function footer_sidebar(){
	$args = array(
			'name'          => __( 'Footer Sidebar', 'theme_text_domain' ),
			'id'            => 'footer-sidebar',    // ID should be LOWERCASE  ! ! !
			'description'   => 'This is the footer sidebar.',
			'class'         => 'tm-gray-bg',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h3 class="tm-gold-text tm-title tm-footer-content-box-title">',
			'after_title'   => '</h3>' );
	
	register_sidebar($args);
	
}

add_action('widgets_init', 'footer_sidebar');

function footer_Etiam_sidebar(){
	$args = array(
			'name'          => __( 'Footer Etiam Sidebar', 'theme_text_domain' ),
			'id'            => 'footeretiam-sidebar',    // ID should be LOWERCASE  ! ! !
			'description'   => 'This is the footer Etiam sidebar.',
			'class'         => 'tm-footer-content-box',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h3 class="tm-gold-text tm-title tm-footer-content-box-title">',
			'after_title'   => '</h3>' );
	
	register_sidebar($args);
	
}

add_action('widgets_init', 'footer_Etiam_sidebar');


add_theme_support('custom-header',$args);
add_theme_support('post-thumbnails');
add_theme_support('post-formats',array('video','image','link','gallery'));

/*
	=============================================================
	INCLUDE WALKER FILE
	=============================================================
*/

 require get_template_directory().'/inc/walker.php';
 require get_template_directory().'/inc/walker_footer.php';
 require get_template_directory().'/inc/walker_links.php';
 
 
 
 function custom_content_length( $content, $length) {
 	$count = strlen($content);
 	if($count<$length){
 		$length = $count;
 	}
 	echo substr($content, 0, $length);
 	
 }
 