<?php get_header(); ?>
<main role="main" class="main">
<?php

if( is_front_page() ){
	echo '<div class="container-fluid content-wrapper">';
}else{
	echo '<div class="container">';
}?>
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

<?php

if( is_front_page()){
	echo '
		<div class="map-area-wrapper">
			<div id="gmap"></div>
			<div class="locations-box-wrapper clearfix">';
			if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('locations-box'));				
	echo '</div>
		</div>';
}
?>
</main>
<?php get_footer(); ?>