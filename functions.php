<?php
/**
 * Template functions and definitions
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/** Include template functions */
require_once get_template_directory() . '/inc/setup.php';
require_once get_template_directory() . '/inc/template-functions.php';

/**
 * --------------------------------------------------------------------------
 * Enable WPKit Theme Support
 * --------------------------------------------------------------------------
 * Once our theme files are registered and available for use, we are almost
 * ready to boot our application. But first, we need to signal to Acorn
 * that we will need to initialize the necessary service providers built in
 * for WPKit when booting.
 *
 */
add_theme_support( 'wpkit' );
