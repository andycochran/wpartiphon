<?php /* Template Name: Homepage */ ?>

<?php get_header(); ?>

  <div id="content">

    <div class="row expanded collapse">

      <main id="main" class="large-12 medium-12 columns" role="main">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <?php the_content(); ?>

        <?php endwhile; endif; ?>

      </main> <!-- end #main -->

      <div class="columns" style="padding-top: 3rem; padding-bottom: 3rem;" id="order-now">

        <?php
        $first_product_query = new WP_Query(
            array(
                'post_type' => 'artiphon_product',
                'order' => 'ASC',
                'orderby' => 'menu_order',
                'posts_per_page'=> 1
            )
        );
        while ( $first_product_query->have_posts() ) : $first_product_query->the_post(); ?>

          <div class="shopify">
            <div class="product" id="product" data-shopify-id="<?php echo get_post_meta($post->ID, 'shopify_id', true); ?>">
              <div class="row">
                <div class="columns phablet-7 phablet-push-5">
                  <img class="variant-image">
                </div>
                <div class="columns phablet-5 phablet-pull-7">
                  <h1 class="product-title"></h1>
                  <h2 class="variant-price"></h2>
                  <div class="variant-selectors"></div>
                  <div><button class="buy-button button">Add to Cart</button></div>
                  <div class="product-description"></div>
                  <?php the_content(); ?>
                </div>
                <div class="columns">
                  <hr>
                </div>
              </div>
            </div>
          </div>
          <?php $current_product_ID = get_the_ID(); ?>
        <?php endwhile; ?>

        <div class="row small-up-1 medium-up-2 large-up-4">

            <?php
            $products_query = new WP_Query(
                array(
                    'post_type' => 'artiphon_product',
                    'order' => 'ASC'
                )
            );
            while ( $products_query->have_posts() ) : $products_query->the_post();
              if ( $current_product_ID != get_the_ID() ) { ?>

                <div class="column text-center">
                  <a href="<?php the_permalink(); ?>">
                    <?php if ( has_post_thumbnail() ) { the_post_thumbnail('large'); } ?>
                    <br><?php the_title(); ?>
                  </a>
                </div>

              <?php }
            endwhile; ?>

        </div>

      </div>




    </div> <!-- end #inner-content -->

  </div> <!-- end #content -->

<?php get_footer(); ?>
