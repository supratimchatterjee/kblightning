<?php get_header(); ?>
<!-- content start -->
<div class="container">
	<div class="row">
		<div class="col-md-12 single-page">


		<div class="search-title">
			<h1 class="centered">Looking For: <i><?php the_search_query(); ?></i></h1>
		</div>
		  <?php if (have_posts()) : ?>
		  <?php while (have_posts()) : the_post(); ?>
		  	
		  	<?php 
			if (get_field('light_type') == 'led') {
				$led = 's-led';
			}
			else{
				$led = 's-incan';
			}


		 ?>

			<a href="<?php the_permalink(); ?>">
			<div class="single-cat <?php echo $led; ?>">
				<div class="s-cat-title">
					<?php the_title(); ?>
				</div>
			</div>
			</a>
		 
		  <?php endwhile; ?>
		  
		  <?php else : ?>
		  <h2 class="centered">Not Found</h2>
		  <p class="centered">Sorry, but you are looking for something that isn't here.</p>
		  <div class="cat-search active">
		  <?php include (TEMPLATEPATH . "/searchform.php"); ?>
		  <br>
		  <br>
		  </div>
		  <?php endif; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>