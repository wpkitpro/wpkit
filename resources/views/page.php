<?php
/**
 * The template for displaying all single posts
 */

get_header();

while ( have_posts() ) { the_post();
  wk_template( 'partials/page', 'header' );
  wk_template( 'partials/content', 'page' );
}

get_footer();
