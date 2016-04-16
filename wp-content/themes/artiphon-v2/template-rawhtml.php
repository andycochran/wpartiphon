<?php
/*
Template Name: Full Width
*/
?>

<?php get_header(); ?>

  <div id="content">

    <div class="row expanded collapse">

        <main id="main" class="large-12 medium-12 columns" role="main">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <?php the_content(); ?>

        <?php endwhile; endif; ?>

      </main> <!-- end #main -->

    </div> <!-- end #inner-content -->

  </div> <!-- end #content -->

<?php get_footer(); ?>
