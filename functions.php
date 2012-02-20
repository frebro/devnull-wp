<?php
/**
 * devnull functions and definitions
 *
 * Sets up the theme and provides some helper functions. Some helper functions
 * are used in the theme as custom template tags. Others are attached to action and
 * filter hooks in WordPress to change core functionality.
 *
 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
 *
 * @package WordPress
 * @subpackage DEVNULL
 */


global $post;


/**
 * Tell WordPress to run devnull_setup() when the 'after_setup_theme' hook is run.
 */
add_action( 'after_setup_theme', 'devnull_setup' );

if ( ! function_exists( 'devnull_setup' ) ):
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function devnull_setup() {

  // Add translation support
  $locale = get_locale();
  if( !empty( $locale ) ) {
    $mofile = dirname(__FILE__) . "/lang/" .  $locale . ".mo";
    if(@file_exists($mofile) && is_readable($mofile))
      load_textdomain('devnull', $mofile);
  }

  // Add default posts and comments RSS feed links to <head>.
  add_theme_support( 'automatic-feed-links' );
}
endif; // devnull_setup
