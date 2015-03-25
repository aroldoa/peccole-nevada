<?php 
//  Template Name: Developments
get_header();

echo '<main role="main" class="sub-page">
		<div class="container-fluid content-wrapper">';?>
<!-- section -->
	<section class="content">
		<div class="container-fluid subintro">
			<pre>OUR RETAIL LOCATIONS</pre>
			<h1>Our Retail Developments</h1>
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">

				Fusce sollicitudin ligula eu libero condimentum, at volutpat quam gravida. Nullam sed vulputate nisi. Nam aliquam eu dui id auctor. Nunc leo metus, maximus non odio id, faucibus vehicula augue. Donec diam sem, imperdiet vitae lorem non, rhoncus feugiat metus. Fusce maximus eu nisi sit amet sagittis. Cras facilisis massa nec ante tristique, dapibus faucibus neque auctor. Integer metus magna, luctus consequat lorem in, aliquam lacinia est. Sed iaculis metus et felis vulputate maximus. Vivamus magna eros, euismod ut felis quis, viverra mollis dolor. Ut vulputate, dolor sit amet finibus imperdiet, enim mi bibendum neque, sit amet finibus magna ex ac nulla. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut eu nunc venenatis, sagittis lorem id, ultrices nisl.

				</div>
			</div>
		</div>
	<?php
		echo do_shortcode('[posts gridtype="flat" cptname=developments orderby=title order=asc numposts=-1 buttontext="View Location" numcols=3 lazyload=true]' );
	?>
			<br class="clear">
	</section>
<!-- /section -->
	</div><!-- /container -->
</main>
<?php get_footer(); ?>