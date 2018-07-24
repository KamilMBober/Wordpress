<?php 
		$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
		 <img src="<?php echo $image[0]; ?>" alt="Image" class="tm-footer-thumbnail">