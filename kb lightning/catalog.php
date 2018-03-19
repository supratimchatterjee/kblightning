<?php
/* Template Name: Catalog */
get_header(); ?>
	<?php while ( have_posts() ) : the_post(); ?>
	<div class="container-fluid" id="catalog-title">
		<div class="container">
			<div class="cat-title">
				<?php the_title(); ?>
			</div>
		</div>
	</div>
	<div class="container" id="catalog-content">
		<div class="cat-desc">
			<?php the_content(); ?>
		</div>
		<div class="cat-search active">
			<!-- Search bar -->
			<?php get_search_form(); ?>
		    <!-- Search Bar Ends -->
		</div>
		<div class="cat-top-loop">
			<?php  
			$args = array(
			    'orderby' => 'count', 
			    'order' => 'DESC',
			); 
			$terms = get_terms( 'prod_type', $args );
 	if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
	 		
    foreach ( $terms as $term ) {



     	$term_link = get_term_link( $term );
     	$slug = $term->slug;
     	if($slug == 'l-e-d'){
	    		$led = 's-led';
	    	}
		else if($slug == 'dlc'){
	    		$led = 's-dlc';
	    	}
	    	else{
	    		$led = '';
	    	}
	    echo '<a href="'. $term_link .'" >';
	    echo '<div class="single-cat '. $led .'">';

    		echo '<div class="s-cat-title">' . $term->name . '</div>';
     		echo '<div class="cat-count">' . $term->count . ' Products</div>';
     	echo "</div></a>";
     }
 }

  ?>	<!-- single cat -->

			<!-- end of cat loop -->
		</div>
	</div>

	<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>