<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Servicio
 * @since 1.0.0
 */

get_header();
?>

<main id="site-content" role="main">

<?php

if ( have_posts() ) {

  while ( have_posts() ) {

    the_post();
    the_content();

  }

}

?>

</main>

<?php
get_footer();
