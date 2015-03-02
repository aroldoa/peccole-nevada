<?php get_header(); ?>
<main role="main" class="main">

	<div class="container">

	<?php

	$imgurl = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium');
	?>
	<img " . $src . "class='" . $img_attr['class'] . "' alt='" . $post->post_name . "' width='" . $imgurl[1] . "' height='". $imgurl[2] ."' /> 

	<!-- section -->
		<section class="content">
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
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
	</div><!-- /container -->

</main>
<?php get_footer(); ?>