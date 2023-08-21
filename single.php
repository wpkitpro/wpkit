<?php
/**
 * The template for displaying all single posts
 */

get_header();
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
  </header>

  <div class="entry-content">
    <?php the_content(); ?>
  </div>
</article>

<?php get_footer(); ?>
