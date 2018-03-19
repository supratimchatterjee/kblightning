<?php
/* Template Name: Contact */
get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-md-12 single-page">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="contact-content">
					<?php the_content(); ?>
				</div>
			<?php endwhile; endif; ?>

			<div class="col-sm-6 contact-left contact-form">
				<?php echo do_shortcode('[contact-form-7 id="37" title="Contact form 1"]'); ?>
				
			</div>
			<div class="col-sm-6 contact-right">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3050.494022069806!2d-74.98746144812203!3d40.13127807929821!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c6b2a3e2ca38ff%3A0xc2ac16a00444a8ab!2sK-B+Lighting+Manufacturing+Company!5e0!3m2!1sen!2sus!4v1482858645985" width="570" height="265" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>

		</div>
	</div>
</div>
		
<?php get_footer(); ?>
