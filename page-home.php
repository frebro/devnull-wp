<?php
/**
 * The template for displaying the home pages.
 *
 * @package WordPress
 * @subpackage DEVNULL
 */

the_post();

get_header(); ?>

    <div id="main" role="main">

        <?php
        /* Run the loop to output the page.
         * If you want to overload this in a child theme then include files
         * called loop-home.php and and loop-page.php and they will be used instead.
         */
        get_template_part( 'loop', 'home' );
        ?>

    </div><!-- #main -->

<?php get_footer(); ?>