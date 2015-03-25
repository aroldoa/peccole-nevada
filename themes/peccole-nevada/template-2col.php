<?php /* Template Name: Two Column Layout*/ get_header(); ?>
<main role="main" class="sub-page">

<?php
if ( is_front_page() ) {
    // This is the blog posts index

	echo '<section class="band showcase">' . putRevSlider("home") . '</section>';


} else {
    // This is not the home page

}

?>
		<div class="container">
		<!-- section -->
		<section class="col-lg-8 content">

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

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
		<div class="col-lg-4">

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
