<?php

// The press section custom header
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

// The press category menu
echo '<div class="press-menu"><ul>';

echo '<li><a href="' . get_post_type_archive_link('artiphon_press') . '">All</a> <span class="meta-sep">|</span> </li>';

$args = array( 'hide_empty=0' );
$terms = get_terms( 'artiphon_press_tax', $args );
if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
    $count = count( $terms );
    $i = 0;
    $term_list = '';
    foreach ( $terms as $term ) {
        $i++;
        $term_list .= '<li><a href="' . esc_url( get_term_link( $term ) ) . '" alt="' . esc_attr( sprintf( __( 'View all post filed under %s', 'my_localization_domain' ), $term->name ) ) . '">' . $term->name . '</a>';
        if ( $count != $i ) {
            $term_list .= ' <span class="meta-sep">|</span> </li>';
        }
        else {
            $term_list .= '</li>';
        }
    }
    echo $term_list;
}

echo '</ul></div>';

?>
