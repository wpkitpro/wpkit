<?php
/**
 * The template for displaying all single posts
 */

get_header();

while ( have_posts() ) {
  the_post();
  get_template_part( 'parts/content/content-single' );
}

get_footer();
