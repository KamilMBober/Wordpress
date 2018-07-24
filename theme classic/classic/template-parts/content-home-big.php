

	<div class="tm-2-col-left">
	
		<h3 class="tm-gold-text tm-title"><?php  the_title(); ?></h3>
		
		
		
		<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
		<img src="<?php echo $image[0]; ?>" alt="Image" class="tm-margin-b-40 img-fluid">
	
		<p> <?php 
				$content  = get_the_content();
				custom_content_length($content, 655);
		?></p>
		
		
		
		
		
		<a href="#" class="tm-btn text-uppercase"><?php 
				$categories = get_the_category();
				
				if ( ! empty( $categories ) ) {
					echo esc_html( $categories[0]->name );
				}
		?></a>
	
	</div>
