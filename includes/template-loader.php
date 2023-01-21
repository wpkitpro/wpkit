<?php
/**
 * Loads the correct template based on the visitor's url
 */

// Template types
$types = [
	'404',
	'archive',
	'attachment',
	'author',
	'category',
	'date',
	'embed',
	'frontpage',
	'home',
	'page',
	'paged',
	'privacypolicy',
	'search',
	'single',
	'singular',
	'tag',
	'taxonomy',
];

// Add Filter
foreach ( $types as $type ) {
	add_filter( "{$type}_template_hierarchy", function ( $templates ) {
		$type = str_replace( '_template_hierarchy', '', current_filter() );
		
		// add `taxonomy.php` file after last `category.php` and `tag.php` element.
		if ( in_array( $type, [ 'category', 'tag' ] ) ) {
			$templates[] = 'taxonomy.php';
		}
		
		foreach ( $templates as $key => $template ) {
			if ( ! str_starts_with( $template, VIEWS_DIR ) ) {
				$templates[ $key ] = VIEWS_DIR . '/' . $template;
			}
		}
		
		return $templates;
	}, 20 );
}