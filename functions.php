<?php

/**
 * --------------------------------------------------------------------------
 * Register WpKit Theme Files
 * --------------------------------------------------------------------------
 * Once we have the theme booted, we can handle the incoming request using
 * the application's HTTP kernel. Then, we will send the response back
 * to this client's browser, allowing them to enjoy our application.
 *
 */
require_once __DIR__ . '/bootstrap/app.php';

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
collect(['setup', 'filters']);

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
add_theme_support('wpkit');
