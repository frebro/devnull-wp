<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage SWDC
 */
?><!doctype html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" <?php language_attributes(); ?>><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<head>
<?php
  /* Meta is imported in a separate file to make it easier to override in child themes */
  get_template_part( 'header', 'meta' );
?>
<title><?php
  /*
   * Print the <title> tag based on what is being viewed.
   */
  global $page, $paged;

  wp_title( '&rsaquo;', true, 'right' );

  // Add the blog name.
  bloginfo( 'name' );

  // Add the blog description for the home/front page.
  $site_description = get_bloginfo( 'description', 'display' );
  if ( $site_description && ( is_home() || is_front_page() ) )
    echo " &rsaquo; $site_description";

  // Add a page number if necessary:
  if ( $paged >= 2 || $page >= 2 )
    echo ' &rsaquo; ' . sprintf( __( 'Page %s', 'swdc' ), max( $paged, $page ) );

  ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php
  /* Modernizr enables HTML5 elements & feature detects */
  wp_enqueue_script( 'modernizr', get_bloginfo('template_directory').'/js/modernizr.js', false, '2.5.2', false );

  /* Scripts are imported in a separate file to make them easier to override in child themes */
  get_template_part( 'header', 'imports' );

  /* Always have wp_head() just before the closing </head>
   * tag of your theme, or you will break many plugins, which
   * generally use this hook to add elements to <head> such
   * as styles, scripts, and meta tags.
   */
  wp_head();
?>
</head>

<body <?php body_class(); ?>>

<?php if ( is_home() || is_front_page() ) : ?>
<div id="starship"></div><!-- #starship -->
<?php endif; ?>

<div id="container">

  <header id="header" role="banner">
    <?php get_template_part( 'header', 'content' ); ?>
  </header><!-- #header -->
