<?php

namespace WpKit;

if ( ! function_exists( 'asset' ) ) {
  /**
   * Get asset from custom path
   *
   * @param string $path
   *
   * @return string
   */
  function asset( string $path ) {
    return get_template_directory_uri() . "/assets/{$path}";
  }
}

/**
 * Loads a template part from resources/views.
 *
 * @param $slug
 * @param $name
 * @param array $args
 *
 * @return false|null
 */
function wk_template( $slug, $name = null, array $args = [] ) {
  return get_template_part( "resources/views/$slug", $name, $args );
}
