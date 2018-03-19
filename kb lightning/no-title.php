<?php
/* Template Name: - Default No Title */
get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-md-12 single-page">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<?php if ( has_post_thumbnail() ) : ?>
						<?php $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>
					<div class="page-featured">
						<img src="<?php echo $image; ?>">
					</div>
					<?php endif; ?>
						
					<?php the_content(); ?>
					
			<?php endwhile; endif; ?>
		</div>
	</div>
</div>



<?php get_footer(); ?>