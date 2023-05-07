<div class="search-result-count">
  <?php printf(
    esc_html__(
      _n(
        'We found %d result for your search.',
        'We found %d results for your search.',
        (int) $wp_query->found_posts,
        'wpkit'
      )
    ),
    (int) $wp_query->found_posts
  ); ?>
</div>

<?php
// Start Loop
while ( have_posts() ) {
  the_post();
  wk_template( 'partials/content-excerpt', get_post_format() );
} // End Loop

echo get_the_post_navigation();
?>
