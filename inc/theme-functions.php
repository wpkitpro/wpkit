<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 */

if ( ! function_exists( 'wpkit_html_classes' ) ) {
  /**
   * Calculate classes for the main <html> element.
   *
   * @return void
   */
  function wpkit_html_classes() {
    $classes = apply_filters( 'wpkit_html_classes', '' );
    if ( ! $classes ) {
      return;
    }
    echo 'class="' . esc_attr( $classes ) . '"';
  }
}
