<?php get_header(); ?>

<?php
$headerImage = esc_attr( get_option('artiphon_press_header_image') );
$headerBGColor = esc_attr( get_option('artiphon_press_header_bgcolor') );
$headerLink = esc_attr( get_option('artiphon_press_header_link') );

if ( $headerImage && $headerBGColor ) {
  ?>
  <div class="text-center" style="background-color:<?php echo $headerBGColor ?>">
    <?php
    if ( $headerLink ) {
      ?><a href="<?php echo $headerLink ?>"><img src="<?php echo $headerImage ?>" /></a><?php
    } else {
      ?><img src="<?php echo $headerImage ?>" /><?php
    }
    ?>
  </div>
  <?php
}
?>

  <div id="content">

    <div id="inner-content" class="row">

        <main id="main" class="columns" role="main">

          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
            <?php if ( has_post_thumbnail() ) {
              ?>
              <div class="media-object">
                <div class="media-object-section"><?php the_post_thumbnail( 'medium' ); ?></div>
                <div class="media-object-section">
                  <?php the_content(); ?>
                </div>
              </div>
              <?php
            } else {
              the_content();
            } ?>
          </article>

          <?php endwhile; ?>

          <?php joints_page_navi(); ?>

        <?php else : ?>

          <?php get_template_part( 'parts/content', 'missing' ); ?>

        <?php endif; ?>

        </main> <!-- end #main -->

    </div> <!-- end #inner-content -->

  </div> <!-- end #content -->

<?php get_footer(); ?>
