<?php get_header(); ?>

<div class="container">
  <header class="page-header alignwide">
    <h1 class="page-title"><?php esc_html_e( 'Nothing here', 'wpkit' ); ?></h1>
  </header>

  <div class="error-404 not-found default-max-width">
    <div class="page-content">
      <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'wpkit' ); ?></p>
      <?php get_search_form(); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
