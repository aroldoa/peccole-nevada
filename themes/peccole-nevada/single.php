<?php get_header(); ?>

<main role="main" class="sub-page">

<div class="container">
	<!-- section -->
	<section class="col-sm-9 content">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- post title -->
			<h2 style="font-size:34px;">
				<?php the_title(); ?>
			</h2>
			<!-- /post title -->

			<!-- post details -->
			<div class="post-details">
			<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
			<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
			</div>
			<!-- /post details -->

			<hr/>

			<?php the_content(); // Dynamic Content ?>

			<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

			<p><?php _e( 'Categorised in: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>

			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>

	<div class="col-sm-3">
		<?php
			dynamic_sidebar('posts-sidebar' );
		 ?>
	</div>

	<!-- /section -->
	</div>
</main>
<?php get_footer(); ?>
