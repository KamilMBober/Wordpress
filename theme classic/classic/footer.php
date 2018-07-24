
        <footer class="tm-footer">
            <div class="container-fluid">
                <div class="row">
                
                     <!-- ********************************************************************************************************************************************** -->
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                        
                        <div class="tm-footer-content-box">
                        
                        <?php 
                        
                      
                        
                        get_sidebar('footer');
                        
                        ?>
                        </div>
                                                
                    </div> 
                    <!-- ********************************************************************************************************************************************** -->

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                        <div class="tm-footer-content-box tm-footer-links-container">
                        
                            <h3 class="tm-gold-text tm-title tm-footer-content-box-title">Nulla tortor dolor</h3>
                            	<nav>
                                  <?php wp_nav_menu( array( 
	                    					'theme_location' => 'footer-menu',
	                    					'menu_class'=>'nav ',
                                  			'walker'=> new Walker_Nav_Footer()
		                    				) 
		                    			); ?> 
                            </nav>
                        </div>
                    </div>

                    <!-- Add the extra clearfix for only the required viewport 
                        http://stackoverflow.com/questions/24590222/bootstrap-3-grid-with-different-height-in-each-item-is-it-solvable-using-only
                    -->
                    <div class="clearfix hidden-lg-up"></div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                        <div class="tm-footer-content-box">
                       		<?php	get_sidebar('footeretiam');		?>
                        </div>
                    </div>
				 <!-- ********************************************************************************************************************************************** -->
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">

                        <div class="tm-footer-content-box">
                        
                            <h3 class="tm-gold-text tm-title tm-footer-content-box-title">Fusce non turpis</h3>
                          	  <div class="tm-margin-b-30">
                            	<?php 
			                	//get_template_part('template-parts/contents', get_post_format(););
				                	$args = array (
				                	'post_type' => 'post',
				                	'posts_per_page' => '6',
				                	'order' => 'asc',
				                	'tax_query' => array( array(
					                	'taxonomy' => 'post_format',
					                	'field' => 'slug',
					                	'terms' => array('post-format-gallery'),
				                		'operator' => 'IN'
			                        		) )
			                	);
			                	
			                		$query= new WP_Query($args);
			                	
			                	
			                		if($query->have_posts()):
				                		while ($query->have_posts()):$query->the_post();
				                	
				                			get_template_part('template-parts/content-footer-gallery', get_post_format());
				                	
				                		endwhile;
				                			wp_reset_postdata();
			                		endif;
			                	?>
                            </div>
                            
                            <p class="tm-margin-b-20">Curabitur dui massa, aliquam quis mi sed, tempor vulputate tellus. Sed vestibulum non neque.</p>
                            <a href="#" class="tm-btn tm-btn-gray text-uppercase">Browse</a>

                        </div>
                        
                    </div>
				 <!-- ********************************************************************************************************************************************** -->

                </div>

                <div class="row">
                    <div class="col-xs-12 tm-copyright-col">
                        <p class="tm-copyright-text">Copyright 2016 Your Company Name</p>
                    </div>
                </div>
            </div>
        </footer>
		<?php wp_footer()?>
       
</body>
</html>