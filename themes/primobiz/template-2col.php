<?php /* Template Name: Two Column Layout*/ get_header(); ?>
<main role="main" class="band">

<?php
if ( is_front_page() ) {
    // This is the blog posts index

	echo '<section class="band showcase">' . putRevSlider("home") . '</section>';


} else {
    // This is not the home page

	echo '<section class="band intro"> <div class="container center"> <h1>';
	echo  the_title() . '</h1><p>';
	echo  the_excerpt() . '</p>';
	echo  '</div> </section>';
}

?>
		<div class="container">
		<!-- section -->
		<section class="col-sm-9 content">

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
		<div class="col-sm-3">

		<?php
if ( is_front_page() ) {
    // This is the blog posts index

	echo '';


} else {
    // This is not the home page

	echo get_sidebar();
}

?>
		</div>

		</div><!-- /container -->
	</main>

<?php get_footer(); ?>
