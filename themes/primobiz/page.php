<?php get_header(); ?>
<main role="main" class="band">
<?php
if ( is_front_page() ) {
    // This is to display the
	echo '<section class="band showcase">' . putRevSlider("home") . '</section>';
	echo get_template_part('part','boxes');
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
	<section class="content">
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
			<?php comments_template( '', true ); // Remove if you don't want comments ?>
			<br class="clear">
			<?php edit_post_link(); ?>
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
	</div><!-- /container -->
</main>
<?php
if ( is_front_page() ) {
    // This is callout section on the home page
	echo get_template_part('part','callout');
} else {
    // if not home page don't display
}
?>
<?php get_footer(); ?>
