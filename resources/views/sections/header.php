<header class="banner mb-4">
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <?php if ( get_bloginfo( 'name' ) ): ?>
        <a href="<?= esc_url( home_url( '/' ) ) ?>" class="navbar-brand">
          <img src="<?php echo esc_attr( asset( 'images/logo.svg' ) ); ?>" alt="<?php bloginfo( 'name' ); ?>"/>
          <span class="visually-hidden"><?php bloginfo( 'name' ); ?></span>
        </a>
      <?php endif; ?>

      <?php if ( has_nav_menu( 'primary_navigation' ) ): ?>
        <button class="navbar-toggler"
                type="button"
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
            'theme_location' => 'primary_navigation',
            'menu_class'     => 'navbar-nav me-auto mb-2 mb-lg-0',
            'container'      => false,
            'items_wrap'     => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
            'fallback_cb'    => false,
          ] ); ?>

          <?php wk_template( 'forms/searchform' ); ?>
        </div>
      <?php endif; ?>
    </div>
  </nav>
</header>
