<?php get_header(); ?>

<?php get_template_part( 'parts/pressheader' ); ?>

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

        <?php endif; ?>

      </main> <!-- end #main -->

  </div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>
