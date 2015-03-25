		<?php
			if($post->post_type == 'locations'){
				echo "<section class='pre-footer $post->post_name'>";
			}else{
				echo '<section class="pre-footer non-locations">';
			}?>

			<div class="container">
				<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('pre-footer')) ?>
			</div>
		</section>
		<!-- footer -->
		<?php
		if($post->post_type == 'locations'){
			echo "<footer class='band footer $post->post_name' role='contentinfo'>";
		}else{
			echo "<footer class='band footer non-locations' role='contentinfo'>";
		} ?>
			<div class="container">
			<div class="col-lg-11">
			<!-- copyright -->
			<p class="copyright">
				&copy; Copyright <?php echo date('Y'); ?>  Peccole Nevada Corporation<br/>
			</p>
			</div><!-- /copyright -->

			<div class="col-lg-1">
				<div class="primo">
					<a href="http://www.primomotif.com">&nbsp;</a>
				</div>
			</div>

			</div>
		</footer>
		<!-- /footer -->

		<?php wp_footer(); ?>

		<!-- analytics -->
	</body>
</html>
