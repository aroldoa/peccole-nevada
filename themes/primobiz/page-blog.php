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
<main role="main" class="band">
<section class="band intro">
	<div class="container center">
		<h1><?php the_title();?></h1>
		<p><?php the_excerpt();?></p>
	</div>
</section>
<div class="container">
		<!-- section -->
	<section class="col-sm-9 content">
		<?php get_template_part('loop'); ?>
		<?php get_template_part('pagination'); ?>
	</section>
		<!-- /section -->

	<div class="col-sm-3">
		<?php get_sidebar(); ?>
	</div>

	</div>
</main>

<?php get_footer(); ?>
