<?php
/**
 * The default template for displaying content
 *
 * @package WordPress
 * @subpackage DEVNULL
 */
?>

  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="entry-content">
      <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'swdc' ) ); ?>
    </div><!-- .entry-content -->

  </article><!-- #post-<?php the_ID(); ?> -->
