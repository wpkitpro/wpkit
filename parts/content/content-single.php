<article id="<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

    <?php wk_template( 'partials/entry-meta' ); ?>
  </header>

  <div class="entry-content">
    <?php the_content(); ?>
  </div>

  <footer>
    <?php wp_link_pages( [
      'before' => '<nav class="page-nav"><p>' . __( 'Pages:', 'wpkit' ),
      'after'  => '</p></nav>',
    ] ); ?>
  </footer>
</article>
