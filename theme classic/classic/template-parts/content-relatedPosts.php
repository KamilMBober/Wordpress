 <div class="media tm-related-post">
	<div class="media-left media-middle">
		<a href="<?php get_permalink(); ?>">
		<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
		<img class="media-object" src="<?php echo $image[0]; ?>" alt="Generic placeholder image">
		</a>
	</div>
	<div class="media-body">
		<a href="<?php get_permalink();?>?>"><h4 class="media-heading tm-gold-text tm-margin-b-15"><?php  the_title();?></h4></a>
		<p class="tm-small-font tm-media-description"><?php  the_excerpt();?></p>
	</div>
</div>