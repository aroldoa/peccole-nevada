<?php get_header(); ?>
<main role="main" class="band">
<?php
if ( is_front_page() ) {
    // This is to display the
	echo '<section class="band showcase">' . putRevSlider("home") . '</section>';
	echo get_template_part('part','boxes');
} else {
    // This is not the home page
	echo '<section class="band intro"><div style="background-image:url('.wp_get_attachment_url( get_post_thumbnail_id($post->ID) ).');min-height:inherit;background-size:cover;"> <div class="container center"> <h1>';
	echo  the_title() . '</h1><p>';
	echo  the_excerpt() . '</p>';
	echo  '</div></div> </section><div class="band end-intro"></div>';
}
if(is_page(8) || is_front_page()){
	echo '<div class="container full">';
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
</main>
<?php
// if ( is_front_page() ) {
//     // This is callout section on the home page
// 	echo get_template_part('part','callout');
// }
// elseif (is_page(8)) {

// 	echo get_template_part('part','who');
//  	 // if not home page don't display

// } else{


// }
?>
<?php get_footer(); ?>
