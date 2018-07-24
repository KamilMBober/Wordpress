<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">	
	 <div class="tm-content-box">
	 	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
		<img src="<?php echo $image[0]; ?>" alt="Image" class="tm-margin-b-20 img-fluid">
		
		<h4 class="tm-margin-b-20 tm-gold-text"><?php the_title();?></h4>
		<p class="tm-margin-b-20"><?php the_excerpt(); ?></p>
		<a href="#" class="tm-btn text-uppercase"><?php 
				$categories = get_the_category();
				
				if ( ! empty( $categories ) ) {
					echo esc_html( $categories[0]->name );
				}
		?></a>    
	</div> 
	</div>