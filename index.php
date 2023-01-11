<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php do_action( 'get_header' ) ?>

<div id="app">
  <?php if ( have_posts() ) {
    while ( have_posts() ) { the_post();
      wk_template( 'partials/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) );
    }
  } ?>
</div>

<?php do_action( 'get_footer' ) ?>
<?php wp_footer(); ?>
</body>

</html>
