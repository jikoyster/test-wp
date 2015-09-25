<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/bootstrap.min.css" media="all">
		<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/bootstrap-responsive.min.css" media="all">
		
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper"><div class="wrapper--inner">

			<!-- header -->
			<header class="header clear row" role="banner">

					<!-- logo -->
					<div class="logo span3">
						<a href="<?php echo home_url(); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img"> -->
							<div>Inventory</div>
							<div>Management</div>
							<div>System</div>
						</a>
					</div>
					<!-- /logo -->

					<!-- nav -->
					<nav class="nav span6" role="navigation">
						<?php html5blank_nav(); ?>
					</nav>
					<!-- /nav -->

					<div class="span3 welcomemsg">
						<?php 
							if(is_user_logged_in()){
								global $current_user;
      							get_currentuserinfo();
								echo "Welcome ". $current_user->user_login ." | ";
							}
						wp_loginout(get_bloginfo('home')); ?>
					</div>

			</header>
			<!-- /header -->
