<?php

/* Product Custom Post Type  */

function artiphon_product_post_type() {
  // creating the custom type
  register_post_type( 'artiphon_product',
    array('labels' => array(
      'name' => __('Product', 'jointswp'),
      'singular_name' => __('Product', 'jointswp'),
      'all_items' => __('All Products', 'jointswp'),
      'add_new' => __('Add New', 'jointswp'),
      'add_new_item' => __('Add New Product', 'jointswp'),
      'edit' => __( 'Edit', 'jointswp' ),
      'edit_item' => __('Edit Product', 'jointswp'),
      'new_item' => __('New Product', 'jointswp'),
      'view_item' => __('View Product', 'jointswp'),
      'search_items' => __('Search Products', 'jointswp'),
      'not_found' =>  __('Nothing found in the Database.', 'jointswp'),
      'not_found_in_trash' => __('Nothing found in Trash', 'jointswp'),
      'parent_item_colon' => ''
      ),
      'description' => __( 'Shopify Products', 'jointswp' ),
      'public' => true,
      'publicly_queryable' => true,
      'exclude_from_search' => false,
      'show_ui' => true,
      'show_in_nav_menus' => true,
      'query_var' => true,
      'menu_position' => 20,
      'menu_icon' => 'dashicons-cart',
      'rewrite'  => array( 'slug' => 'store', 'with_front' => false ),
      'has_archive' => true,
      'capability_type' => 'page',
      'hierarchical' => false,
      'supports' => array( 'title', 'editor', 'page-attributes', 'thumbnail'),
      'register_meta_box_cb' => 'add_product_metaboxes'
     )
  );
}
add_action( 'init', 'artiphon_product_post_type');

function add_product_metaboxes() {
  add_meta_box('artiphon_product_meta', 'Product Meta', 'artiphon_product_meta', 'artiphon_product', 'normal', 'high');
}
add_action( 'add_meta_boxes', 'add_product_metaboxes' );

function artiphon_product_meta() {
  global $post;
  echo '<input type="hidden" name="artiphon_product_meta_noncename" id="artiphon_product_meta_noncename" value="' . wp_create_nonce(plugin_basename(__FILE__)) . '" />';
  $shopify_id = get_post_meta($post->ID, 'shopify_id', true);
  ?>
  <table class="form-table">

    <tr valign="top">
      <th scope="row">Shopify ID</th>
      <td>
        <input type="text" name="shopify_id" value="<?php echo esc_attr( $shopify_id ); ?>" class="regular-text" />
      </td>
    </tr>

  </table>
<?php
}

function save_artiphon_product_meta($post_id, $post) {
  if ( !wp_verify_nonce( $_POST['artiphon_product_meta_noncename'], plugin_basename(__FILE__) )) {
    return $post->ID;
  }
  if ( !current_user_can( 'edit_post', $post->ID ))
    return $post->ID;
  $product_meta['shopify_id'] = $_POST['shopify_id'];
  foreach ($product_meta as $key => $value) { // Cycle through the $events_meta array!
    if( $post->post_type == 'revision' ) return; // Don't store custom data twice
    $value = implode(',', (array)$value); // If $value is an array, make it a CSV (unlikely)
    if(get_post_meta($post->ID, $key, FALSE)) { // If the custom field already has a value
      update_post_meta($post->ID, $key, $value);
    } else { // If the custom field doesn't have a value
      add_post_meta($post->ID, $key, $value);
    }
    if(!$value) delete_post_meta($post->ID, $key); // Delete if blank
  }
}
add_action('save_post', 'save_artiphon_product_meta', 1, 2);
