<?php
/**
 * Loads the correct template based on the visitor's url
 */

if ( wp_using_themes() ) {
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
		// 'index',
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
		add_filter( "{$type}_template_hierarchy", "prefix_template_hierarchy", 20 );
	}
	
	function prefix_template_hierarchy( $templates ) {
		$template_dir = 'resources/views';
		$type         = str_replace( '_template_hierarchy', '', current_filter() );
		
		// add `taxonomy.php` file after last `category.php` and `tag.php` element.
		if ( in_array( $type, [ 'category', 'tag' ] ) ) {
			$templates[] = 'taxonomy.php';
		}
		
		foreach ( $templates as $key => $template ) {
			if ( ! str_starts_with( $template, $template_dir ) ) {
				$templates[ $key ] = "{$template_dir}/$template";
			}
		}
		
		return $templates;
	}
}
