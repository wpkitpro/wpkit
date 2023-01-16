<?php
/**
 * The template for displaying all single posts
 */

get_header();

while ( have_posts() ) { the_post();
  wk_template( 'partials/content', 'single' );
}

get_footer();
