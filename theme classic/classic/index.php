<?php get_header(); ?>
       


        <div class="tm-home-img-container">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/tm-home-img.jpg" alt="Image" class="hidden-lg-up img-fluid">
        </div>

        <section class="tm-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-xs-center">
                        <h2 class="tm-gold-text tm-title">Introduction</h2>
                        <p class="tm-subtitle">Suspendisse ut magna vel velit cursus tempor ut nec nunc. Mauris vehicula, augue in tincidunt porta, purus ipsum blandit massa.</p>
                    </div>
                </div>
                
                <!-- ******************************************************************************************************************************************************************** -->
                <div class="row"> <!--  Row  -->
                
                	<?php 
                	//get_template_part('template-parts/contents', get_post_format(););
                	$args = array (
                	'post_type' => 'post',
                	'posts_per_page' => '4',
                	'order' => 'asc',
                	'tax_query' => array( array(
	                	'taxonomy' => 'post_format',
	                	'field' => 'slug',
	                	'terms' => array('post-format-image'),
	                	'operator' => 'IN'
                        		) )
                	);
                	
                	$query= new WP_Query($args);
                	
                	
                	if($query->have_posts()):
	                	while ($query->have_posts()):$query->the_post();
	                	
	                		get_template_part('template-parts/content', get_post_format());
	                	
	                	endwhile;
	                		wp_reset_postdata();
                	endif;
                	?>
                
                </div> <!-- End Row -->
                
              

                <!-- ******************************************************************************************************************************************************************** -->
			
                <div class="row tm-margin-t-big">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                        

						
						 <?php 
                	//get_template_part('template-parts/contents', get_post_format(););
                	$args = array (
                	'cat' => '5',
                	'posts_per_page' => '1');
                	
                	
                	$query= new WP_Query($args);
                	
                	
                	if($query->have_posts()):
	                	while ($query->have_posts()):$query->the_post();
	                	
	                		get_template_part('template-parts/content-home-big', get_post_format());
	                	
	                	endwhile;
	                		wp_reset_postdata();
                	endif;
                	?>
						
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">

                        <div class="tm-2-col-right">

                            <div class="tm-2-rows-md-swap">
                                <div class="tm-overflow-auto row tm-2-rows-md-down-2">
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                        <h3 class="tm-gold-text tm-title">
                                            Categories
                                        </h3>
                                         <nav>
	                                        <?php wp_nav_menu( array( 
		                    					'theme_location' => 'category-menu',
		                    					'menu_class'=>'nav ',	
			                    				) 
			                    			); ?>  
		                    			</nav> 
		                           </div> <!-- col -->

                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 tm-xs-m-t">
                                        <h3 class="tm-gold-text tm-title">
                                            Useful Links
                                        </h3>
                                        <nav>
                                             <?php wp_nav_menu( array( 
	                    					'theme_location' => 'links-menu',
	                    					'menu_class'=>'nav ',	
		                    				) 
		                    			); ?> 
		                    			
                                        </nav>    
                                    </div> <!-- col -->
                                </div>                        
                                
                                <div class="row tm-2-rows-md-down-1 tm-margin-t-mid">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                        <h3 class="tm-gold-text tm-title tm-margin-b-30">Related Posts</h3>
                                        <div class="media tm-related-post">
                                          <div class="media-left media-middle">
                                            <a href="#">
                                              <img class="media-object" src="<?php echo get_stylesheet_directory_uri(); ?>/img/tm-img-240x120-1.jpg" alt="Generic placeholder image">
                                            </a>
                                          </div>
                                          <div class="media-body">
                                            <a href="#"><h4 class="media-heading tm-gold-text tm-margin-b-15">Lorem ipsum dolor</h4></a>
                                            <p class="tm-small-font tm-media-description">Aenean cursus tellus mauris, quis consequat mauris dapibus id. Donec scelerisque porttitor pharetra.</p>
                                          </div>
                                        </div>
                                        <div class="media tm-related-post">
                                          <div class="media-left media-middle">
                                            <a href="#">
                                              <img class="media-object" src="<?php echo get_stylesheet_directory_uri(); ?>/img/tm-img-240x120-2.jpg" alt="Generic placeholder image">
                                            </a>
                                          </div>
                                          <div class="media-body">
                                            <a href="#"><h4 class="media-heading tm-gold-text tm-margin-b-15">Lorem ipsum dolor</h4></a>
                                            <p class="tm-small-font tm-media-description">Aenean cursus tellus mauris, quis consequat mauris dapibus id. Donec scelerisque porttitor pharetra.</p>
                                          </div>
                                        </div>
                                        <div class="media tm-related-post">
                                          <div class="media-left media-middle">
                                            <a href="#">
                                              <img class="media-object" src="<?php echo get_stylesheet_directory_uri(); ?>/img/tm-img-240x120-3.jpg" alt="Generic placeholder image">
                                            </a>
                                          </div>
                                          <div class="media-body">
                                            <a href="#"><h4 class="media-heading tm-gold-text tm-margin-b-15">Lorem ipsum dolor</h4></a>
                                            <p class="tm-small-font tm-media-description">Aenean cursus tellus mauris, quis consequat mauris dapibus id. Donec scelerisque porttitor pharetra.</p>
                                          </div>
                                        </div>
                                    </div>
                                </div>    
                            </div>

                        </div>
                        
                    </div>
                </div> <!-- row -->

            </div>
        </section>
          <?php get_footer();?>