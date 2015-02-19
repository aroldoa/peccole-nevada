<?php get_header(); ?>

<main role="main" class="band">

<section class="band intro"><div style="background-image:url('http://staging.primomotif.com/Legend/wp-content/uploads/2014/08/blog-banner.jpg');min-height:inherit;background-size:cover;">
	<div class="container center">
		<h1>Back in Motion</h1>
		<p>Legend Physical Therapy aims to get you back in motion. We have focused our blog on providing information dedicated to this purpose. Please enjoy our Physical Therapy centric articles and shares.</p>
	</div></div>
</section><div class="band end-intro"></div>
<div class="container">
	<!-- section -->
	<section class="col-sm-9 content">

			<h3 style="font-size:30px; margin-bottom:30px;"><?php _e( 'Categories for ', 'html5blank' ); single_cat_title(); ?></h3>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->


	<div class="col-sm-3">
		<?php get_sidebar(); ?>
	</div>
	</main>
<?php get_footer(); ?>
