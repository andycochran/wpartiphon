<?php

/* Press Custom Post Type  */

function artiphon_press_post_type() {
  register_post_type( 'artiphon_press',
    array('labels' => array(
      'name' => __('Press', 'jointswp'),
      'singular_name' => __('Press Item', 'jointswp'),
      'all_items' => __('All Press Items', 'jointswp'),
      'add_new' => __('Add New', 'jointswp'),
      'add_new_item' => __('Add New Press Item', 'jointswp'),
      'edit' => __( 'Edit', 'jointswp' ),
      'edit_item' => __('Edit Press Items', 'jointswp'),
      'new_item' => __('New Press Item', 'jointswp'),
      'view_item' => __('View Press Item', 'jointswp'),
      'search_items' => __('Search Press', 'jointswp'),
      'not_found' =>  __('Nothing found in the Database.', 'jointswp'),
      'not_found_in_trash' => __('Nothing found in Trash', 'jointswp'),
      'parent_item_colon' => ''
      ),
      'description' => __( 'Links to press about Artiphon', 'jointswp' ),
      'public' => true,
      'publicly_queryable' => true,
      'exclude_from_search' => true,
      'show_ui' => true,
      'show_in_nav_menus' => false,
      'query_var' => false,
      'menu_position' => 20,
      'menu_icon' => 'dashicons-testimonial',
      'rewrite'  => array( 'slug' => 'press', 'with_front' => false ),
      'has_archive' => true,
      'capability_type' => 'page',
      'hierarchical' => false,
      'supports' => array( 'title', 'editor', 'page-attributes', 'thumbnail')
     )
  );
}
add_action( 'init', 'artiphon_press_post_type');

// Redirect single post view back to archive
function redirect_artiphon_press_item() {
    $queried_post_type = get_query_var('post_type');
    if ( is_single() && 'artiphon_press' ==  $queried_post_type ) {
        wp_redirect( get_post_type_archive_link('artiphon_press'), 301 );
        exit;
    }
}
add_action( 'template_redirect', 'redirect_artiphon_press_item' );

// Show all press items in archive
function artiphon_press_parse_query( $wp ){
    if( $wp->is_artiphon_press_archive ):
        $wp->query_vars['posts_per_page'] = -1;
    endif;
    return $wp;
}
add_action('parse_query', 'artiphon_press_parse_query');


// Adds submenu page
function artiphon_press_options() {
    add_submenu_page(
        'edit.php?post_type=artiphon_press',
        __( 'Press Options', 'jointswp' ),
        __( 'Options', 'jointswp' ),
        'manage_options',
        'artiphon_press-options',
        'artiphon_press_options_callback'
    );
}
add_action('admin_menu', 'artiphon_press_options');

function register_artiphon_press_options() {
    register_setting( 'artiphon_press-options-group', 'artiphon_press_header_image' );
    register_setting( 'artiphon_press-options-group', 'artiphon_press_header_bgcolor' );
    register_setting( 'artiphon_press-options-group', 'artiphon_press_header_link' );
}
add_action( 'admin_init', 'register_artiphon_press_options' );

// Display callback for the submenu page.
function artiphon_press_options_callback() {
    if ( !current_user_can( 'manage_options' ) )  {
        wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
    }
    ?>
    <div class="wrap">

      <h1>Press Header Options</h1>

      <form method="post" action="options.php"> 
        <?php settings_fields( 'artiphon_press-options-group' ); ?>
        <?php do_settings_sections( 'artiphon_press-options-group' ); ?>
        <table class="form-table">

          <tr valign="top">
            <th scope="row">Image URL</th>
            <td>
              <input type="text" name="artiphon_press_header_image" value="<?php echo esc_attr( get_option('artiphon_press_header_image') ); ?>" placeholder="http://..." class="regular-text" />
            </td>
          </tr>

          <tr valign="top">
            <th scope="row">Background Color</th>
            <td>
              <input type="text" name="artiphon_press_header_bgcolor" value="<?php echo esc_attr( get_option('artiphon_press_header_bgcolor') ); ?>" placeholder="#f37b42" />
            </td>
          </tr>

          <tr valign="top">
            <th scope="row">Link URL <small>(optional)</small></th>
            <td>
              <input type="text" name="artiphon_press_header_link" value="<?php echo esc_attr( get_option('artiphon_press_header_link') ); ?>" placeholder="http://..." class="regular-text" />
            </td>
          </tr>

        </table>
        <?php submit_button(); ?>
      </form>

    </div>
    <?php
}
