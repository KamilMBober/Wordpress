<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Stamina &mdash; Free Website Template, Free HTML5 Template by freehtml5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">
	
	<?php   wp_head(); ?>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	
		<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-right">
						<p class="num">Call: +01 123 456 7890</p>
						<ul class="fh5co-social">
							<li><a href="<?php echo get_stylesheet_directory_uri(); ?>/#"><i class="icon-twitter"></i></a></li>
							<li><a href="<?php echo get_stylesheet_directory_uri(); ?>/#"><i class="icon-dribbble"></i></a></li>
							<li><a href="<?php echo get_stylesheet_directory_uri(); ?>/#"><i class="icon-github"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		    			
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-2">
						<div id="fh5co-logo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/index.html">Stamina<span>.</span></a></div>
					</div>
					
						<?php wp_nav_menu( array( 
                    					'theme_location' => 'header-menu',
                    					
                    					'container_class'=>'col-xs-10 text-right menu-1',
                    					
                    					'walker'=> new Walker_Nav_Primary(),
                    					
                    				) 
                    			); ?>
					<!--  
					<div class="col-xs-10 text-right menu-1">
						<ul>
							<li class="active"><a href="<?php // echo get_stylesheet_directory_uri(); ?>/index.html">Home</a></li>
							<li><a href="<?php // echo get_stylesheet_directory_uri(); ?>/gallery.html">Gallery</a></li>
							<li><a href="<?php // echo get_stylesheet_directory_uri(); ?>/about.html">Trainer</a></li>
							<li><a href="<?php // echo get_stylesheet_directory_uri(); ?>/pricing.html">Pricing</a></li>
							<li class="has-dropdown">
								<a href="<?php // echo get_stylesheet_directory_uri(); ?>/blog.html">Blog</a>
								<ul class="dropdown">
									<li><a href="<?php // echo get_stylesheet_directory_uri(); ?>/#">Web Design</a></li>
									<li><a href="<?php // echo get_stylesheet_directory_uri(); ?>/#">eCommerce</a></li>
									<li><a href="<?php // echo get_stylesheet_directory_uri(); ?>/#">Branding</a></li>
									<li><a href="<?php // echo get_stylesheet_directory_uri(); ?>/#">API</a></li>
								</ul>
							</li>
							<li><a href="<?php echo get_stylesheet_directory_uri(); ?>/contact.html">Contact</a></li>
						</ul>
					</div> -->
				</div>
				
			</div>
		</div>
	</nav>

	<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Make it a lifestyle, not a duty</h1>
							<h2>Free html5 templates Made by <a href="<?php echo get_stylesheet_directory_uri(); ?>/http://freehtml5.co/" target="_blank">freehtml5.co</a></h2>
							<p><a href="https://vimeo.com/channels/staffpicks/93951774" class="btn btn-primary popup-vimeo">Watch Our Video</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	
	
	
	
	
	
	
	
	
	
	
	
	
	