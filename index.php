<?php
/**
 * The main template file
 */

get_header();

while ( have_posts() ) {
  the_post();
  get_template_part( 'template-parts/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) );
}

get_footer();
