<?php

/**
 * Application Functions
 */

if (!function_exists('asset')) {
    function asset(...$args)
    {
        return \WpKit\asset(...$args);
    }
}

if (!function_exists('wk_template')) {
    function wk_template(...$args)
    {
        return \WpKit\wk_template(...$args);
    }
}

/**
 * Calculate classes for the main <html> element.
 *
 * @return void
 */
function wk_the_html_classes()
{
    $classes = apply_filters('wpkit_html_classes', '');
    if (!$classes) {
        return;
    }
    echo 'class="' . esc_attr($classes) . '"';
}
