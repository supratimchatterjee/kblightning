<?php get_header(); ?>
	<?php while ( have_posts() ) : the_post(); ?>
	<div class="container-fluid" id="catalog-title">
		<div class="container">
			<div class="cat-title">
				<?php the_title(); ?>
			</div>
		</div>
	</div>
	<div class="container" id="single-catalog-content">
		<div class="s-prod-top">
			<div class="sp-right">
				<?php $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>
				<img src="<?php echo $image; ?>">
			</div>
			<div class="sp-left">
				<div class="sp-title">
					<?php the_field('second_title'); ?>
				</div>
				<div class="sp-desc">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
		<div class="s-prod-download">
			<?php if(get_field('pdf_download') == '') : ?>
			<?php else : ?>
			<div class="pdf-download">
				<a target="_blank" href="<?php the_field('pdf_download') ?>">
					<i class="fa fa-download"></i>
				</a>
			</div>
			<a target="_blank" href="<?php the_field('pdf_download') ?>">
			<div class="pdf-text">
					Download Page
			</div>
			</a>
				<?php if (get_option('catalog_file') == '') : ?>
				<?php else : ?>
			<a href="<?php echo get_option('catalog_file'); ?>">
			<div class="pdf-text">
			| Download Entire Catalog
			</div>
			</a>
				<?php endif ; ?>
			<?php endif; ?>
		</div>
		<div class="s-prod-bottom">
			<div class="specs-img">
				<img src="<?php the_field('specs_image'); ?>">
			</div>
			<?php if(get_field('application_content') == '') : ?>
			<?php else : ?>
			<div class="sp-bottom-section">
				<div class="sp-btitle">
					Application
				</div>
				<div class="sp-bcontent">
					<?php the_field('application_content'); ?>
				</div>
			</div> <!-- Application Section End -->
			<?php endif; ?>

			<?php if(get_field('construction_content') == '') : ?>
			<?php else : ?>
			<div class="sp-bottom-section">
				<div class="sp-btitle">
					Construction
				</div>
				<div class="sp-bcontent">
					<?php the_field('construction_content'); ?>
				</div>
			</div> <!-- Construction Section Ends -->
			<?php endif; ?>

			<?php if(get_field('electrical_content') == '') : ?>
			<?php else : ?>
			<div class="sp-bottom-section">
				<div class="sp-btitle">
					Electrical
				</div>
				<div class="sp-bcontent">
					<?php the_field('electrical_content'); ?>
				</div>
			</div> <!-- Electrical Section End -->
			<?php endif; ?>

			<?php if(get_field('mounting_content') == '') : ?>
			<?php else : ?>
			<div class="sp-bottom-section">
				<div class="sp-btitle">
					Mounting
				</div>
				<div class="sp-bcontent">
					<?php the_field('mounting_content'); ?>
				</div>
			</div> <!-- Mounting Section End -->
			<?php endif; ?>

		</div>


	</div>

	<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>