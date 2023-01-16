<?php
/**
 * The main template file
 */

get_header();

while ( have_posts() ) { the_post();
  wk_template( 'partials/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) );
}

get_footer();
