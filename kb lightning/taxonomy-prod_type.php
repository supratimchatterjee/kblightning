<?php get_header(); ?>

	<div class="container-fluid" id="catalog-title">
		<div class="container">
			<div class="cat-title">
			<?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); ?>
				<?php echo $term->name; ?>
			</div>
		</div>
	</div>
	<div class="container" id="catalog-content">
		<div class="cat-desc">
			<?php
				$t_id = $term->id;
				echo term_description( $t_id, 'prod_type' );
			?>
		</div>
		<div class="cat-search active">
			<!-- Search bar -->
			<?php get_search_form(); ?>
		    <!-- Search Bar Ends -->
		    <div class="cat-filter">
		    	<div class="filter-tog tog-active">

		    	</div>
		    	<div class="filters f-active">
		    		<div class="s-filter f-fluorescent" title="s-incan">
		    			Fluorescent
		    		</div>
		    		<div class="s-filter" title="s-led">
		    			L.e.d
		    		</div>
		    		<div class="s-filter s-filter-dlc" title="s-dlc">
		    			D.L.C.
		    		</div>
		    	</div>
		    </div>
		</div>
		<div class="cat-top-loop single-cat-loop">

		<?php

			$tname = $term->slug;
			$args = array(
				'post_type'      => 'kb_product',
				'tax_query' => array(
					array(
						'taxonomy' => 'prod_type',
						'field'    => 'slug',
						'terms'    => $tname,
					),
				),
				'posts_per_page' => -1,
				'order' => 'ASC',
				'orderby' => 'name'
			);
			$query = new WP_Query( $args );
		?>

	<?php while ( $query->have_posts() ) : $query->the_post(); ?>
		<?php
			if (get_field('light_type') == 'led') {
				$led = 's-led';
			}
			else if (get_field('light_type') == 'dlc') {
				$led = 's-dlc';
			}
			else{
				$led = 's-incan';
			}


		 ?>



				<div class="single-cat <?php echo $led; ?>">					<div class="single-image">						<?php the_post_thumbnail(array(273,176)); ?>						<div class="s-cat-title">							<?php the_title(); ?>						</div>					</div>						<?php $code = get_field('second_title'); ?>					 <?php if($code): ?>					<div class="product-sub-title <?php echo $led; ?>">						<?php the_field('second_title')?>					</div>					 <?php endif;?>					<a class="tm-position-cover" href="<?php the_permalink(); ?>">					</a>				</div>
			<!-- single cat -->
	<?php endwhile; // end of the loop. ?>

			<!-- end of cat loop -->
		</div>
	</div>



<?php get_footer(); ?>
