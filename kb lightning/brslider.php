<script src="<?php bloginfo('template_directory'); ?>/fullslider/jquery-1.8.0.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/fullslider/jquery.royalslider.min.js"></script>
<link href="<?php bloginfo('template_directory'); ?>/fullslider/royalslider.css" rel="stylesheet">
<script type="text/javascript">

	jQuery(document).ready(function() {
		$('#full-width-sliderr').royalSlider({
			arrowsNav: true,
			loop: true,
			keyboardNavEnabled: true,
			controlsInside: false,
			imageScaleMode: 'fill',
			arrowsNavAutoHide: false,
			autoScaleSlider: true, 
			autoScaleSliderWidth: 970,     
			autoScaleSliderHeight: 321,
			controlNavigation: 'bullets',
			thumbsFitInViewport: false,
			navigateByClick: false,
			startSlideId: 0,
			autoPlay: {
	    		// autoplay options go gere

	    		enabled: true,
	    		pauseOnHover: true,
	    		delay: 5000
	    	},
			transitionType:'move',
			globalCaption: true
		});
	});

</script>


<div class="container-fluid" id="slider">
	<div class="row">
		<div class="" id="">
		<!-- full width slider starts here -->
			<div id="full-width-sliderr" class="royalSlider heroSlider rsMinW">

					<?php 
						 $args = array (
						 'post_type'              => 'slider',
						 'posts_per_page'         => '-1',
						 'ignore_sticky_posts'    => true,
						 'orderby'                => 'menu_order',
						 'order'					 => 'ASC' );
						 $query = new WP_Query( $args ); 
					?>
					<?php  while ( $query->have_posts() ) : $query->the_post(); ?>

				

				<div class="rsContent"> <!-- single slide  -->
				    <img class="rsImg" src="<?php the_field('slide_image'); ?>" alt=""> <!-- SLIDER IMAGE IS HERE -->
			    <?php if(get_field('slide_content') == '') : ?>
				<?php else : ?>
					<?php if(get_field('slide_link') == ''){
							$sl = '';
							$sle = '';
						}
						else{
							$sl ='<a href="'. get_field('slide_link') .'">';
							$sle ='</a>';
						} ?>
						
					<div class="slide-c-holder">
						<?php echo $sl; ?>
					    <div class="slide-content <?php echo get_field('slide_content_position'); ?>"> <!-- Slider Content starts here -->
						    <div class="slide-subtitle">
							    <?php the_field('slide_content'); ?>
						    </div>
						</div>
						<?php echo $sle; ?>
					</div>
						
				<?php endif ; ?>
				
				</div>
					<?php  endwhile; ?>
					<?php  wp_reset_postdata(); ?>

			</div> <!-- full width slider end -->
		</div> <!-- slider holder div  -->
		<!-- full width slider ends here -->
	</div> <!-- row -->
</div> <!-- container fluid -->