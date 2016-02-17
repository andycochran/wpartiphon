<div class="top-bar" id="main-menu">
	<div class="row">
		<div class="columns">
			<button id="mainMenuToggler" class="hide-for-medium float-right" type="button" data-toggle="mainMenu"><span class="show-for-sr">Menu</span></button>
			<div class="top-bar-left">
				<ul class="menu">
					<!-- <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo@2x.png" /><span class="show-for-sr"><?php bloginfo('name'); ?></span></a></li> -->
					<li><a href="http://artiphon.com/"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo@2x.png" /><span class="show-for-sr"><?php bloginfo('name'); ?></span></a></li>
				</ul>
			</div>
			<div id="mainMenu" class="top-bar-right show-for-medium" data-toggler=".show-for-medium">
				<?php joints_top_nav(); ?>
			</div>
		</div>
	</div>
</div>
