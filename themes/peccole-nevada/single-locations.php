<?php get_header(); ?>
<main role="main" class="band">
	<div class="container">
		<!-- section -->
		<section class="col-sm-9 content">

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php

			if($post->post_type == 'locations'){
				echo "<div class='post-meta-wrapper $post->post_name'>";
			}else{
				echo "<div class='post-meta-wrapper'>";
			} ?>
					<!-- post title -->
					<h2 style="font-size:34px;">
						<?php the_title(); ?>
					</h2>
					<!-- /post title -->
					<span class="location-address">
					<?php
						$address = get_post_meta( get_the_ID(), 'location-address', true );
	 
					    // Checks and displays the retrieved value
					    if( !empty( $address ) ) {
					        echo $address;
					    }
				    ?>
					</span>
				</div>

				<div role="tabpanel">
				<!-- Nav tabs -->
				<?php
				if($post->post_type == 'locations'){
					echo "<ul class='nav nav-tabs container $post->post_name' role='tablist'>";
				}else{
					echo '<ul class="nav nav-tabs container non-locations" role="tablist">';
				}?>
				      <li role="presentation" class="active col-md-4"><a href="#property_images" aria-controls="property_images" role="tab" data-toggle="tab">Property Images</a></li>
				      <li role="presentation" class="col-md-4"><a href="#tenants" aria-controls="tenants" role="tab" data-toggle="tab">Tenants</a></li>
				      <li role="presentation" class="col-md-4"><a href="#property_management" aria-controls="property_management" role="tab" data-toggle="tab">Property Management</a></li>
				   </ul>
					<?php the_content(); // Dynamic Content ?>
				</div>

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
			<?php get_sidebar(); ?>
		</div>

	<!-- /section -->
	</div>
</main>
<?php get_footer(); ?>
