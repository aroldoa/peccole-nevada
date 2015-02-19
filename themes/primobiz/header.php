<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

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
		<div class="band upperdeck">
			<div class="container">
				<div class="col-sm-7"></div>
				<div class="col-sm-1">
					<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-6')) ?>
				</div>
				<div class="col-sm-2 language">
					<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-7')) ?>
				</div>
				<div class="col-sm-1 social">
					<a href="<?php echo of_get_option('facebook_link','no entry');?>"><span class="flaticon-facebook6"></span></a><a href="<?php echo of_get_option('twitter_link','no entry');?>"><span class="flaticon-social19"></span></a><a href="<?php echo of_get_option('google_link','no entry');?>"><span class="flaticon-google16"></span></a><a href="<?php echo of_get_option('linkedin_link','no entry');?>"><span class="flaticon-linkedin5"></span></a>
				</div>
			</div>
		</div>
			<!-- header -->
			<header class="band header clear" role="banner">
				<div class="container">
					<!-- logo -->
					<div class="col-md-4 logo">
						<a href="<?php echo home_url(); ?>">
							<img src="<?php echo of_get_option('main_logo', 'no entry'); ?>"/>
						</a>
					</div>
					<!-- /logo -->

					<!-- nav -->
				<div class="col-md-8">
					<nav class="navbar navbar-default" role="navigation">
					<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
						<div class="collapse navbar-collapse navHeaderCollapse" id="bs-example-navbar-collapse-1">
					 		<?php html5blank_nav();?>
					 	</div>
					</nav>
				</div>
					<!-- /nav -->
				</div>
			</header>