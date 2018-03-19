<?php
/* Template Name: Home */
get_header(); ?>

	<!-- Slider -->
	<?php get_template_part( 'brslider' ); ?>
	<!-- Slider End -->
	<div class="container-fluid" id="home-content">
		<div class="container">
			<div class="home-copy">
				<h2><?php echo get_option('hcontent_title'); ?></h2>
				<?php echo get_option('hcontent'); ?>
			</div>
			<div class="home-cta">
				<img class="ctaimg" src="<?php echo get_option('cta_image'); ?>">
				<div class="cta-copy">
					<?php echo get_option('cta_content'); ?>
					<a href="<?php echo site_url('catalog'); ?>">
					<button class="cta-button">
						Click here
					</button>
					</a>
				</div>
				
			</div>
			<a href="http://kblighting.com/prod_type/dlc/"><div class="cta-2">
				View our DLC Listed Products
			</div></a>
		</div>
	</div>
	<div class="container-fluid" id="home-contact">
		<div class="container">
			<div class="home-contact-copy">
				<div class="hc-title col-sm-12">
					<?php echo get_option('hcontact_title'); ?>
				</div>
				<div class="hc-txt col-sm-12">
					<?php echo get_option('hcontact_desc'); ?>
				</div>
				<div class="hc-info">
					<div class="col-sm-6">
						<i class="fa fa-phone"></i> <?php echo get_option('hcontact_phone'); ?><br>
						
					</div>
					<div class="col-sm-6">
						<i class="fa fa-fax"></i> <?php echo get_option('hcontact_fax'); ?>
					</div>
					<div class="col-sm-2"> </div>
					<div class="col-sm-8">
						<i class="fa fa-map-marker"></i> <?php echo get_option('hcontact_loc'); ?>
					</div>
					<div class="col-sm-2"> </div>
				</div>
			</div>
			<div class="home-contact-form">
				<?php echo do_shortcode('[contact-form-7 id="37" title="Contact form 1"]'); ?>
			</div>
		</div>
	</div>



<?php get_footer(); ?>