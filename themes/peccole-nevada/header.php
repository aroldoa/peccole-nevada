<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">


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
			<!-- header -->
			<header class="header-wrapper clear" role="banner">
				<div class="header">
					<div class="container">
						<!-- logo -->
						<div class="col-md-4 logo">
							<a href="">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="Peccole Neveda Corporation"/>
							</a>
						</div>
						<!-- /logo -->
					</div>
				</div>
				<div class="slider">
					<ul>
						<?php
							$args = array(
						            'post_type'			=> 'sliders',
						            'post_status'  		=> 'publish',
						            'posts_per_page'	=> 8,
						            'orderby'			=> 'title',
						            'order'				=> 'ASC'
						            );
							
						    $loop = new WP_Query( $args );
						    global $post;
						    while ($loop->have_posts() ) : $loop->the_post();
								$image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
								$excerpt = apply_filters('the_excerpt', get_post_field('post_excerpt', $post->ID));
								echo "<li style='min-height:670px; background-image:url(" . $image . "); background-size:cover; background-position:center; '></li>";
							endwhile;
					        
					        wp_reset_query();
						?>
				    </ul>
				</div>
			</header>
			<div class="nav-wrapper">
				<div class=" container">
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
					<div class="breadcrumbs">
					</div>
				</div>
			</div>