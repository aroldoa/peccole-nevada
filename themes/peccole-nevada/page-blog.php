<?php
/**
 * Template Name: Blog
 *
 * A custom blog
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 */
get_header(); ?>
<main role="main" class="blog sub-page">
<div class="container">
		<!-- section -->
	<section class="col-sm-9 content">
		<?php get_template_part('loop'); ?>
		<?php get_template_part('pagination'); ?>
	</section>
		<!-- /section -->

	<div class="col-sm-3">
		<?php  dynamic_sidebar( 'posts-sidebar' ); ?>
	</div>

	</div>
</main>

<?php get_footer(); ?>
