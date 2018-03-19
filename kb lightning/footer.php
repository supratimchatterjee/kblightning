
	
	<footer class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="footer-logo">
						<img src="<?php echo get_option('footer_logo'); ?>">
					</div>
					<div class="copyright">
						<?php echo get_option('footer_copyright'); ?><br>
						Powered by <a href="http://www.brandrevive.com" target="_blank">Brand Revive</a>
					</div>
				</div>
				<div class="col-sm-6" id="footer-menu">
					<?php wp_nav_menu( array( 'menu' => 'nav' ) ); ?>
				</div>
			</div>
		</div>	
	</footer>

	
	<!-- end footer -->
	<?php wp_footer(); ?>

  
  


    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php bloginfo( 'template_url' ); ?>/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/retina.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/validate.js"></script>

    
    </div>
  </body>
</html>