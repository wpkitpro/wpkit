<?php
/**
 * Displays the site header.
 */

$blog_name = get_bloginfo( 'name' );
?>
<header id="masthead" class="banner">
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <?php if ( $blog_name ): ?>
        <a href="<?= esc_url( home_url( '/' ) ) ?>" class="navbar-brand">
        <?php echo esc_html( $blog_name ); ?>
        </a>
      <?php endif; ?>

      <?php wp_nav_menu( [
        'theme_location'  => 'primary',
        'menu_class'      => 'navbar-nav me-auto mb-2 mb-lg-0 gap-3',
        'container_class' => 'primary-navigation-container',
        'items_wrap'      => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
        'fallback_cb'     => false,
      ] ); 
      ?>
    </div><!-- .container-fluid -->
  </nav>
</header>
