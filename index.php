<?php get_header(); ?>

<?php if (have_posts()) {
  while (have_posts()) {
    the_post();
    wk_template('partials/content', get_theme_mod('display_excerpt_or_full_post', 'excerpt'));
  }
}
?>

<?php get_footer(); ?>
