<?php
/**
 * WP Gold King Arts functions
 * 
 * @package WordPress
 * @subpackage wp_gold_king_arts
 * @since 1.0
 */

/**
 * enqueue scripts and styles
 */

function theme_scripts() {
  wp_enqueue_style ('stylesheet', get_stylesheet_uri() );

}
add_action( 'wp_enqueue_scripts', 'theme_scripts');


/**
 * setup theme settings
 */
function wp_gold_king_arts_setup() {
  
  //title tag support
  add_theme_support( 'title-tag' );

  //Post Thumbnails on posts and pages
  add_theme_support( 'post-thumbnails' );

  add_image_size( 'wp_gold_king_arts-featured-image', 2000, 1200, true);

  add_image_size( 'wp_gold_king_arts-thumbnail-avatar', 100, 100, true);

  //theme support for custom header
  add_theme_support( 'custom-header', apply_filters( 'wp_gold_king_arts', array(
    'width' => 2000,
    'height' => 1200,
    'flex-height' => true,
    'video' => false
  ) ) );

  //registers nav menus
  register_nav_menus(
    array(
      'nav_menu' => __( 'Nav Menu' )
    )
  );
}
add_action ( 'after_setup_theme', 'wp_gold_king_arts_setup' );

//might want to add widget functionality for footers in future iterations
?>
