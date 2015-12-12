<div class="top-bar" id="main-menu">
	<div class="row">
		<div class="columns">
			<div class="top-bar-left">
				<ul class="menu">
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo@2x.png" /><span class="show-for-sr"><?php bloginfo('name'); ?></span></a></li>
				</ul>
			</div>
			<div class="top-bar-right">
				<?php joints_top_nav(); ?>
			</div>
		</div>
	</div>
</div>
