<?php
/**
 * Functions and definitions
 * 
 * @package Alphonse Theme Template
 * @subpackage Alphonse Theme Template
 * @version 1.0
 */

if ( version_compare( $GLOBALS['wp_version'], '5.2.2', '<' ) ) {
  return;
}

/**
 * Alphonse Setup
 * 
 * @package Alphonse Theme Template
 * @subpackage Alphonse Theme Template
 * @since 1.0
 * 
 * This function help us for configure our theme when Wordpress mounth the theme. There are differents configurations for Wordpress and you can enable or desenable.
 */
if ( !function_exists( 'alphonse_setup' ) ) {

  function alphonse_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'comment-list', 'gallery', 'caption', ) );
  }

}
add_action( 'after_setup_theme', 'alphonse_setup' );

/**
 * Enqueues styles and scripts
 * 
 * @package Alphonse Theme Template
 * @subpackage Alphonse Theme Template
 * @since 1.0
 * 
 * This function enqueue all styles and scripts for Wordpress Theme works. You can add third party styles or scripts
 * for Wordpress enqueue in header.php dynamically.
 */
function alphonse_enqueues() {
  wp_enqueue_style( 'style', get_template_directory_uri() . '/dist/style.css', array(), filemtime(get_template_directory()) . '/dist/style.css', false );
  wp_enqueue_script( 'bundle', get_template_directory_uri() . '/dist/bundle.js', ['jquery'], null, true );
}
add_action( 'wp_enqueue_scripts', 'alphonse_enqueues' );
