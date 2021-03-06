<?php
// the query

$args = array(
	'post_type' => 'post',
	'posts_per_page'=> 12
);

$get_resources = new WP_Query( $args ); ?>

<?php if ( $get_resources->have_posts() ) : ?>

<?php while ( $get_resources->have_posts() ) : $get_resources->the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<!-- post title -->
		<h2 >
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>
		<!-- /post title -->

		<!-- post details -->
		<div class="post-details">
		<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
		<!-- /post details -->
		</div>
				<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail(array(800,350)); // Declare pixel size you need inside the array ?>
			</a><br/><br/>
		<?php endif; ?>
		<!-- /post thumbnail -->

		<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>

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
