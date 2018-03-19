<?php get_header(); ?>
<div class="container">
  <div class="col-md-12 single-page">
    <h1 class="centered">
      <?php _e('Error 404 - Not Found', 'blank'); ?>
    </h1>
    <p class="centered">Sorry, but the page you are looking for cannot be found.</p>
    <a style="text-decoration:none;" href="<?php echo home_url('catalog'); ?>">
      <div class="cat404">
        KB lighting Catalog
      </div>
    </a>
    <p class="centered">Would you like to search for something?</p>
    <div class="cat-search active">
    <?php include (TEMPLATEPATH . "/searchform.php"); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>