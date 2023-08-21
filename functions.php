<?php
/**
 * Template functions and definitions
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Define Constants
 */
define( 'WPKIT_THEME_VERSION', wp_get_theme()->get( 'Version' ) );
define( 'WPKIT_THEME_NAME', wp_get_theme()->get( 'Name' ) );
define( 'WPKIT_THEME_SETTINGS', 'wpkit-settings' );
define( 'WPKIT_THEME_DIR', trailingslashit( get_template_directory() ) );
define( 'WPKIT_THEME_URI', trailingslashit( esc_url( get_template_directory_uri() ) ) );

/**
 * --------------------------------------------------------------------------
 * Register WpKit Theme Files
 * --------------------------------------------------------------------------
 * Out of the box, WpKit ships with categorically named theme files
 * containing common functionality and setup to be bootstrapped with your
 * theme. Simply add (or remove) files from the array below to change what
 * is registered alongside WpKit.
 *
 */
collect( [ 'setup', 'filters', 'theme-functions' ] );

/**
 * --------------------------------------------------------------------------
 * Enable WpKit Theme Support
 * --------------------------------------------------------------------------
 * Once our theme files are registered and available for use, we are almost
 * ready to boot our application. But first, we need to signal to Acorn
 * that we will need to initialize the necessary service providers built in
 * for WpKit when booting.
 *
 */
add_theme_support( 'wpkit' );
