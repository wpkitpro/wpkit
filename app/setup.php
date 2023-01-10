<?php
/**
 * Theme setup.
 */

namespace App;

use function WpKit\asset;

/**
 * Register the theme asset.
 *
 * @return void
 */

/**
 * Register the theme asset.
 *
 * @return void
 */
add_action( 'wp_enqueue_scripts', function () {
    wp_enqueue_script( 'wpkit/vendor.js', asset( 'scripts/vendor.js' ), [ 'jquery' ], null, true );
    wp_enqueue_script( 'wpkit/app.js', asset( 'scripts/app.js' ), [ 'wpkit/vendor.js' ], null, true );

    wp_add_inline_script( 'wpkit/vendor.js', asset( 'scripts/manifest.js' ), 'before' );

    if ( is_single() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

    wp_enqueue_style( 'wpkit/app.css', asset( 'styles/app.css' ), false, null );

}, 100 );

/**
 * Register the theme asset with the block editor.
 *
 * @return void
 */
add_action( 'enqueue_block_editor_assets', function () {
    if ( $manifest = asset( 'scripts/manifest.asset.php' ) ) {
        // wp_enqueue_script( 'wpkit/vendor.js', asset( 'scripts/vendor.js' ), ...array_values( $manifest ) );
        wp_enqueue_script( 'wpkit/editor.js', asset( 'scripts/editor.js' ), '', null, true );

        wp_add_inline_script( 'wpkit/vendor.js', asset( 'scripts/manifest.js' ), 'before' );
    }

    wp_enqueue_style( 'wpkit/editor.css', asset( 'styles/editor.css' ), false, null );
}, 100 );

/**
 * Register the initial theme setup.
 *
 * @return void
 */
add_action( 'after_setup_theme', function () {

}, 20 );

add_action( 'widgets_init', function () {
    $config = [
        'before_widget' => '<section class="widget %1$s %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ];

    register_sidebar( [
                          'name' => __( 'Primary', 'wpkit' ),
                          'id'   => 'sidebar-primary'
                      ] + $config );

    register_sidebar( [
                          'name' => __( 'Footer', 'wpkit' ),
                          'id'   => 'sidebar-footer'
                      ] + $config );
} );
