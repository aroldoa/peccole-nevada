<section class="band pre-footer">
			<div class="container">
				<div class="col-lg-4">
					<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-3')) ?>
				</div>
				<div class="col-lg-4">
					<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-4')) ?>
				</div>
				<div class="col-lg-4">
					<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-5')) ?>
				</div>
			</div>
		</section>
			<!-- footer -->
			<footer class="band footer" role="contentinfo">
				<div class="container">
				<div class="col-lg-11">
				<!-- copyright -->
				<p class="copyright">
					&copy; Copyright <?php echo date('Y'); ?> <?php echo of_get_option('copyright', 'no entry'); ?><br/>
					Compliance Hotline <strong>1-866-858-1485</strong>
				</p>
				</div><!-- /copyright -->

				<div class="col-lg-1">
					
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
