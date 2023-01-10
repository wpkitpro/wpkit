<?php

namespace WpKit;

/**
 * Get asset from custom path
 *
 * @param  string  $asset
 * @return string
 */
function asset( string $asset ) {
	return get_theme_file_uri( "/public/$asset" );
}
