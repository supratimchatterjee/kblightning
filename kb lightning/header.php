<!DOCTYPE html>
<html>
	<head>
		<title><?php wp_title(); ?></title>
		<link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
		<link rel="manifest" href="favicon/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
		
		<!-- Bootstrap -->
	    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	    <script src="<?php bloginfo( 'template_url' ); ?>/js/jquery-1.9.1.js"></script>
		<link href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php bloginfo( 'template_url' ); ?>/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<link rel="stylesheet/less" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/styles.less" />
			
		<!-- Google Fonts Here -->
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>


		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
		<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/less.js"></script>
		<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/jquery.matchHeight.js"></script>
		
	    <script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/scripts.js"></script>
	    <script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/doubletaptogo.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />

		<?php wp_head(); ?>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-61346264-1', 'auto');
		  ga('send', 'pageview');

		</script>
	</head>
	<body>
		<div class="bwrap">
		<header class="container-fluid">
			<div class="container">
				<div class="header-top">
					<div class="logo">
						<a href="<?php echo site_url(); ?>">
						<img src="<?php echo get_option('header_logo'); ?>">
						</a>
					</div>
					<div class="header-copy">
						<?php echo get_option('header_copy'); ?>
					</div>
				</div>
				
			</div>
			<div class="row">
				<div class="header-bottom">
					<div class="mobile-nav tquarter">
						<span></span>
					</div>
					<nav>
						<?php wp_nav_menu( array( 'menu' => 'nav' ) ); ?>
					</nav>
				</div>
			</div>
		</header>
		