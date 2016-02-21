<?php
/*
Template Name: User Guide
*/
?>

<?php get_header(); ?>


	<div id="content">

    <?php
      if( is_page() && $post->post_parent == 0 && has_post_thumbnail() ) {

        $thumb_id = get_post_thumbnail_id( $post->ID );
        $thumb_img = wp_get_attachment_image_src( $thumb_id, 'full' );
        $thumb_width = $thumb_img[1];
        $thumb_height = $thumb_img[2];
        $ratio = $thumb_height / $thumb_width;
        $percent = (float)$ratio * 100 . '%';
      ?>

    <div class="user-guide-diagram">
      <div class="user-guide-image" style="padding-bottom:<?php echo $percent; ?>">
        <?php the_post_thumbnail('full'); ?>
        <?php
        $pagechildren = get_pages( array( 'child_of' => $post->ID ) );
        foreach ( $pagechildren as $post ) :
          setup_postdata( $post );
          ?><button class="user-guide-button" style="<?php
          $mykey_values = get_post_custom_values( 'popup-position' );
            foreach ( $mykey_values as $key => $value ) {
              echo $value;
            }
          ?>" data-popup="popup-<?php the_ID(); ?>">&nbsp;</button><?php
        endforeach; ?>
        <?php wp_reset_postdata(); ?>
      </div>

      <?php
      $pagechildren = get_pages( array( 'child_of' => $post->ID ) );
      foreach ( $pagechildren as $post ) :
        setup_postdata( $post );
        ?><div class="user-guide-callout callout hide" id="popup-<?php the_ID(); ?>" style="<?php
        $mykey_values = get_post_custom_values( 'popup-position' );
          foreach ( $mykey_values as $key => $value ) {
            echo $value;
          }
        ?>">
          <h6><?php
            $popupTitle = get_post_custom_values( 'popup-title' );
              foreach ( $popupTitle as $key => $value ) {
                echo $value;
              }
          ?></h6>

          <small><?php
            $popupText = get_post_custom_values( 'popup-text' );
              foreach ( $popupText as $key => $value ) {
                echo $value;
              }
          ?></small>
          <a href="<?php the_permalink(); ?>" class="button small expanded">LEARN MORE</a>
          <button class="close-button popup-close-button" type="button">&times;</button>
        </div>
      <?php endforeach; ?>
      <?php wp_reset_postdata(); ?>
    </div>
    <?php } ?>

  		<div id="inner-content" class="row">

		    <main id="main" class="medium-8 large-9 columns" role="main">

				  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			    	<?php get_template_part( 'parts/loop', 'page' ); ?>

			    <?php endwhile; endif; ?>

			</main> <!-- end #main -->

		    <?php get_sidebar('user-guide'); ?>

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
