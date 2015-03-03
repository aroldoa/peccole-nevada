<?php get_header();

if( is_front_page() ){
	echo '
		<main role="main" class="main">
		<div class="container-fluid content-wrapper">';
}elseif(is_page('developments')){
	echo '
		<main role="main" class="sub-page">
		<div class="container-fluid">';
}else{
	echo '
		<main role="main" class="sub-page">
		<div class="container">';
	}?>
<!-- section -->
	<?php
		if( is_page('contact-us') ){
			echo '<section class="col-sm-9 content">';
		}else{
			echo '<section class="content">';
		}?>
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
			<?php comments_template( '', true ); // Remove if you don't want comments ?>
			<br class="clear">
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
	
	<?php if( is_page('contact-us') ){
		echo '<div class="col-sm-3">';
		dynamic_sidebar( 'contact-us-sidebar' );
		echo "</div>";
	
	}?>
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
}elseif(is_page('about-us')){
	get_template_part('about-us', 'part' );

}
?>
</main>
<?php get_footer(); ?>