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

if ( ! function_exists( 'collect' ) ) {
    function collect( array $files ) {
        foreach ( $files as &$file ) {
            $file = sprintf( 'app/%s.php', $file );
        }

        if ( ! locate_template( $files, true, true ) ) {
            wp_die(
            /* translators: %s is replaced with the relative file path */
                sprintf( __( 'Error locating <code>%s</code> for inclusion.', 'wpkit' ), $files )
            );
        }
    }
}

/**
 * --------------------------------------------------------------------------
 * Register WpKit Theme Configuration
 * --------------------------------------------------------------------------
 * assets: key-value pairs to match assets to their revved counterparts
 *
 */
if ( ! locate_template( $assets = 'config/assets.php', true, true ) ) {
    wp_die(
    /* translators: %s is replaced with the relative file path */
        sprintf( __( 'Error locating <code>%s</code> for inclusion.', 'wpkit' ), $assets )
    );
}
