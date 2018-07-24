<!DOCTYPE html>

<html class="no-js"  lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico" type="image/x-icon">
<title>:: Picxa :: A Photographer Portfolio Template</title>



<?php wp_head()?>

<!--[if lt IE 9]>

      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>

      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

  <![endif]-->
 


</head>

<body>
<!-- header -->

<header id="header" class="header">
  <div class="container-fluid">
    <hgroup> 
      
      <!-- logo -->
      
      <h1> <a href="<?php echo get_stylesheet_directory_uri(); ?>/index1.html" title="Picxa"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="Picxa" title="Picxa"/></a> </h1>
      
      <!-- logo --> 
      
      <!-- nav -->
      
      <nav>
        <div class="menu-expanded">
          <div class="nav-icon">
            <div id="menu" class="menu"></div>
            <p>menu</p>
          </div>
          <div class="cross"> <span class="linee linea1"></span> <span class="linee linea2"></span> <span class="linee linea3"></span> </div>
         
          </div>
          <?php  wp_nav_menu( array( 
                    					'theme_location' => 'header-menu',
                    					'menu_class'=>'main-menu'
                    					
                    				) 
                    			); ?>
        
        </div>
      </nav>
      
      <!-- nav --> 
      
    </hgroup>
  </div>
</header>

<!-- header -->