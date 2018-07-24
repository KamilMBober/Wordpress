<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Classic - Responsive Bootstrap 4.0 Template</title>
    <?php  wp_head(); ?>
<!--
Classic Template
http://www.templatemo.com/tm-488-classic
-->
    <!-- load stylesheets 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  
    <link rel="stylesheet" href="<?php //echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css">                                      
    <link rel="stylesheet" href="<?php //echo get_stylesheet_directory_uri(); ?>/css/templatemo-style.css">                                    -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
</head>

    <body>
    
            <div class="tm-header">
            <div class="container-fluid">
                <div class="tm-header-inner">
                    <a href="#" class="navbar-brand tm-site-name">Classic</a>
                      <nav class="navbar tm-main-nav">
 						<!-- navbar -->
                        <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
                            &#9776;
                        </button>
                        
                        
                    			<?php wp_nav_menu( array( 
                    					'theme_location' => 'header-menu',
                    					
                    					'container_class'=>'collapse navbar-toggleable-sm',
                    					'container_id'=>'tmNavbar',
                    					'menu_class'=>'nav navbar-nav',
                    					'walker'=> new Walker_Nav_Primary(),
                    					
                    					
                    				) 
                    			); ?>
                    
	                   
	                  		<!--  
	                            <ul class="nav navbar-nav">
	                                <li class="nav-item active">
	                                    <a href="index.html" class="nav-link">Home</a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="about.html" class="nav-link">About</a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="blog.html" class="nav-link">Blog</a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="contact.html" class="nav-link">Contact</a>
	                                </li>
	                            </ul>    
                            
                          -->                    
                     
                        
                    </nav>  

                </div>                                  
            </div>            
        </div>