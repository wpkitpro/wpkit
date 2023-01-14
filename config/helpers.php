<?php

namespace WpKit;

/**
 * Get asset from custom path
 *
 * @param  string  $asset
 * @return string
 */
function asset(string $asset)
{
    return get_theme_file_uri("/public/$asset");
}

/**
 * Loads a template part from resources/views.
 *
 * @param $slug
 * @param $name
 * @param  array  $args
 * @return false|null
 */
function wk_template($slug, $name = null, array $args = [])
{
    return get_template_part("resources/views/$slug", $name, $args);
}
