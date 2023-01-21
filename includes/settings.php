<?php
/**
 * Used to set up and fix common variables and include
 */

/**
 * Stores the location of the WpKit directory of functions, classes, and core content.
 */
define( 'WKINC', get_template_directory() . '/includes' );
define( 'WKCONF', get_template_directory() . '/config' );
define( 'VIEWS', get_template_directory() . '/resources/views' );
const VIEWS_DIR = 'resources/views';


require_once WKCONF . '/globals.php';
require_once WKCONF . '/helpers.php';
require_once WKINC . '/template-loader.php';
