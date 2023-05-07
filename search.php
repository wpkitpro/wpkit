<?php
/**
 * The template for displaying search results pages
 *
 * @link @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 */

get_header();
?>

<?php if ( have_posts() ): ?>
  <header class="page-header">
    <h1 class="page-title">
      <?php echo __( 'Search Results', 'wpkit' ); ?>
    </h1>
  </header>

  <?php get_template_part( 'parts/content/content-search' ); ?>
<?php else: ?>
  <?php get_template_part( 'parts/content/content-none' ); ?>
<?php endif; ?>

<?php get_footer(); ?>
