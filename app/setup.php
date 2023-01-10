<?php
/**
 * Theme setup.
 */

 namespace App;

use function WpKit\assets;
 
/**
 * Register the theme assets.
 *
 * @return void
 */

 /**
 * Register the theme assets.
 *
 * @return void
 */
 add_action('wp_enqueue_scripts', function() {
    wp_enqueue_script('wpkit/vendor.js', assets('scripts/vendor.js'), ['jquery'], null, true);
    wp_enqueue_script('wpkit/app.js', assets('scripts/app.js'), ['wpkit/vendor.js'], null, true);

    wp_enqueue_style('wpkit/app.css', assets('styles/app.css'), false, null);

 }, 100);

 add_action('after_setup_theme', function(){

 }, 20);

 add_action('widgets_init', function(){
    $config = [
        'before_widget' => '<section class="widget %1$s %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ];

    register_sidebar([
        'name' => __('Primary', 'wpkit'),
        'id' => 'sidebar-primary'
    ] + $config);

    register_sidebar([
        'name' => __('Footer', 'wpkit'),
        'id' => 'sidebar-footer'
    ] + $config);
 });