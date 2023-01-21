<?php
/**
 * Loads the correct template based on the visitor's url
 */

$types = [
	'404',
	'frontpage',
	'page',
];

foreach ( $types as $type ) {
	add_filter( "{$type}_template_hierarchy", "prefix_template_hierarchy", 20 );
}

function prefix_template_hierarchy( $templates ) {
	echo '<pre>';
	print_r( $templates );
	echo '</pre>';
	
	return $templates;
}