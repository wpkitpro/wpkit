<?php
/**
 * Displays the site header.
 */

$blog_name = get_bloginfo( 'name' );
?>
<header id="masthead" class="banner">
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <?php if ( $blog_name ): ?>
        <a href="<?= esc_url( home_url( '/' ) ) ?>" class="navbar-brand">
          <img src="<?php echo esc_attr( $nav_brand ); ?>" alt="<?php echo esc_attr( $blog_name ); ?>"/>
          <span class="visually-hidden"><?php echo esc_html( $blog_name ); ?></span>
        </a>
      <?php endif; ?>

      <?php if ( has_nav_menu( 'primary' ) ): ?>
        <button class="navbar-toggler"  type="button"
                data-bs-toggle="collapse"
                data-bs-target="#primaryNavigation"
                aria-controls="primaryNavigation"
                aria-expanded="false"
                aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="primaryNavigation">
          <?php wp_nav_menu( [
            'theme_location' => 'primary',
            'menu_class'     => 'navbar-nav me-auto mb-2 mb-lg-0 gap-3',
            'container'      => false,
            'items_wrap'     => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
            'fallback_cb'    => false,
          ] ); 
          ?>

          <?php get_template_part( 'template-parts/forms/searchform' ); ?>
        </div>
      <?php endif; ?>
    </div>
  </nav>
</header>
