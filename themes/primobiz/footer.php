		<section class="band pre-footer">
			<div class="container">
				<div class="col-sm-4">
					<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-3')) ?>
				</div>
				<div class="col-sm-4">
					<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-4')) ?>
				</div>
				<div class="col-sm-4">
					<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-5')) ?>
				</div>
			</div>
		</section>
			<!-- footer -->
			<footer class="band footer" role="contentinfo">
				<div class="container">
				<div class="col-sm-4">
				<!-- copyright -->
				<p class="copyright">
					&copy; Copyright <?php echo date('Y'); ?> <?php echo of_get_option('copyright', 'no entry'); ?>
				</p>
				</div><!-- /copyright -->

				<div class="col-sm-6">
					<?php second_nav(); ?>
				</div>
				<div class="col-sm-2">
					Site by: <a href="http://www.primomotif.com" target="_blank">Primo Motif</a>
				</div>
				</div>
			</footer>
			<!-- /footer -->


		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
			<?php echo of_get_option('site_analytics', 'no entry'); ?>
		</script>

	</body>
</html>
