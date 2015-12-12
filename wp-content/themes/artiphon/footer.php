		<footer class="footer" role="contentinfo">
			<div id="inner-footer" class="row">
				<div class="medium-6 columns">
					<nav role="navigation">
  					<?php joints_footer_links(); ?>
  				</nav>
  			</div>
				<div class="medium-6 columns">
					<p class="social-links text-right">
						<a href="http://facebook.com/artiphon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-facebook.png"></a>
						<a href="http://twitter.com/artiphon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-twitter.png"></a>
						<a href="https://vimeo.com/artiphon/videos"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-vimeo.png"></a>
						<a href="https://instagram.com/artiphon/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-instagram.png"></a>
						<a href="mailto:support@artiphon.com" style="display: none;"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-mail.png"></a>
					</p>
				</div>
				<div class="large-12 medium-12 columns">
					<p class="source-org copyright"><small>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</small></p>
				</div>
			</div> <!-- end #inner-footer -->
		</footer> <!-- end .footer -->
		<?php wp_footer(); ?>
	</body>
</html> <!-- end page -->
