<?php
/**
 * --------------------------------------------------------------------------
 * Function Register WpKit Theme Files
 * --------------------------------------------------------------------------
 * Out of the box, WpKit ships with categorically named theme files
 * containing common functionality and setup to be bootstrapped with your
 * theme. Simply add (or remove) files from the array below to change what
 * is registered alongside WpKit.
 *
 */

function collect( $file_names ) {
    foreach ( (array) $file_names as $file_name ) {
        if ( ! $file_name ) {
            continue;
        }

        if ( file_exists( TEMPLATEPATH . "/app/{$file_name}.php" ) ) {
            require_once TEMPLATEPATH . "/app/{$file_name}.php";
        }
    }
}

/**
 * --------------------------------------------------------------------------
 * Register The Auto Loader
 * --------------------------------------------------------------------------
 * Composer provides a convenient, automatically generated class loader for
 * our theme. We will simply require it into the script here so that we
 * don't have to worry about manually loading any of our classes later on.
 *
 */
if ( ! file_exists( $composer = TEMPLATEPATH . '/vendor/autoload.php' ) ) {
    wp_die( __( 'Error locating autoloader. Please run <code>composer install</code>.', 'WpKit' ) );
}

require $composer;

/**
 * --------------------------------------------------------------------------
 * Register WpKit Theme Configuration
 * --------------------------------------------------------------------------
 * assets: key-value pairs to match assets to their revved counterparts
 *
 */

require_once get_template_directory() . '/config/globals.php';
require_once get_template_directory() . '/config/helpers.php';
