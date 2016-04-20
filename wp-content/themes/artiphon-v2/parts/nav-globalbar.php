<div class="row columns">
  <a href="<?php echo home_url(); ?>"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo@2x.png" /><span class="show-for-sr"><?php bloginfo('name'); ?></span></a>
  <button class="menu-icon dark" type="button" data-toggle="main-menu"><span class="show-for-sr">Menu</span></button>
  <div class="dropdown-pane" id="main-menu" data-dropdown data-auto-focus="false" data-hover="true" data-hover-pane="true">
    <?php joints_top_nav(); ?>
  </div>
</div>
