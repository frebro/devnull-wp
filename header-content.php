<?php
/**
 * The template used for displaying header content in header.php
 *
 * @package WordPress
 * @subpackage DEVNULL
 */

$options = get_option('conference_options');

if ( $options['conference_general_logo_url'] ) :
  $logo_size = getimagesize( $options['conference_general_logo_url'] );
?>

<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img class="site-logo" src="<?php echo $options['conference_general_logo_url']; ?>" alt="<?php bloginfo( 'name' ); ?>" style="width:<?php echo ( .5 * $logo_size[0] ).'px'; ?>;height:auto;"></a>

<?php else : ?>

<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

<?php endif; ?>