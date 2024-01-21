<?php
/**
 * The template for displaying header.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>

<header id="masthead" class="banner">
	<nav class="navbar navbar-expand-lg bg-body-tertiary">
		<div class="container-fluid">
			<a href="<?php echo esc_url( home_url( '/' ) ) ?>" class="navbar-brand">
				<?php echo esc_html( get_bloginfo( 'name' ) ); ?>
			</a>

			<?php wp_nav_menu( [ 'theme_location' => 'primary', 'fallback_cb' => false ] ); ?>
		</div><!-- .container-fluid -->
	</nav>
</header>
