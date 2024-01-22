<?php
/**
 * Theme setup.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


if ( ! function_exists( 'wpkit_scripts' ) ) {
	/**
	 * Enqueues the necessary scripts and styles for the WPKit theme.
	 *
	 * @return void
	 * @since WpKit 3.0.1
	 */
	function wpkit_scripts() {
		wp_enqueue_script( 'wpkit-frontend',
			get_template_directory_uri() . '/assets/js/frontend.js',
			array(),
			wp_get_theme()->get( 'Version' ),
			true );

		if ( is_single() && comments_open()
		     && get_option( 'thread_comments' )
		) {
			wp_enqueue_script( 'comment-reply' );
		}

		wp_enqueue_style(
			'wpkit-theme',
			get_stylesheet_directory_uri() . '/theme.min.css',
			'',
			wp_get_theme()->get( 'Version' )
		);

		wp_enqueue_style(
			'wpkit-frontend',
			get_stylesheet_directory_uri() . '/style.min.css',
			'',
			wp_get_theme()->get( 'Version' )
		);
	}
}
add_action( 'wp_enqueue_scripts', 'wpkit_scripts', 100 );

if ( ! function_exists( 'wpkit_block_editor_assets' ) ) {
	/**
	 * Enqueues the necessary scripts and styles for the WPKit block editor.
	 *
	 * @return void
	 * @since WpKit 3.0.1
	 */
	function wpkit_block_editor_assets() {
		wp_enqueue_script( 'wpkit-editor',
			get_template_directory_uri() . '/assets/js/editor.js',
			array(),
			wp_get_theme()->get( 'Version' ),
			true
		);

		wp_enqueue_style(
			'wpkit-style-editor',
			get_template_directory_uri() . '/style-editor.min.css',
			'',
			wp_get_theme()->get( 'Version' )
		);
	}
}
add_action( 'enqueue_block_editor_assets', 'wpkit_block_editor_assets', 100 );


if ( ! function_exists( 'wpkit_setup' ) ) {
	/**
	 * Setup the theme with necessary support and configurations.
	 *
	 * @since WpKit 3.0.1
	 */
	function wpkit_setup() {
		/**
		 * Disable full-site editing support.
		 *
		 * @link https://wptavern.com/gutenberg-10-5-embeds-pdfs-adds-verse-block-color-options-and-introduces-new-patterns
		 */
		remove_theme_support( 'block-templates' );

		/**
		 * Register the navigation menus.
		 *
		 * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
		 */
		register_nav_menus( [
			'primary' => __( 'Primary Navigation', 'wpkit' ),
		] );

		/**
		 * Register the editor color palette.
		 *
		 * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#block-color-palettes
		 */
		add_theme_support( 'editor-color-palette', [] );

		/**
		 * Register the editor color gradient presets.
		 *
		 * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#block-gradient-presets
		 */
		add_theme_support( 'editor-gradient-presets', [] );

		/**
		 * Register the editor font sizes.
		 *
		 * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#block-font-sizes
		 */
		add_theme_support( 'editor-font-sizes', [] );

		/**
		 * Register relative length units in the editor.
		 *
		 * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#support-custom-units
		 */
		add_theme_support( 'custom-units' );

		/**
		 * Enable support for custom line heights in the editor.
		 *
		 * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#supporting-custom-line-heights
		 */
		add_theme_support( 'custom-line-height' );

		/**
		 * Enable support for custom block spacing control in the editor.
		 *
		 * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#spacing-control
		 */
		add_theme_support( 'custom-spacing' );

		/**
		 * Disable custom colors in the editor.
		 *
		 * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#disabling-custom-colors-in-block-color-palettes
		 */
		add_theme_support( 'disable-custom-colors' );

		/**
		 * Disable custom color gradients in the editor.
		 *
		 * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#disabling-custom-gradients
		 */
		add_theme_support( 'disable-custom-gradients' );

		/**
		 * Disable custom font sizes in the editor.
		 *
		 * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#disabling-custom-font-sizes
		 */
		add_theme_support( 'disable-custom-font-sizes' );

		/**
		 * Disable the default block patterns.
		 *
		 * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#disabling-the-default-block-patterns
		 */
		remove_theme_support( 'core-block-patterns' );

		/**
		 * Enable plugins to manage the document title.
		 *
		 * @link https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
		 */
		add_theme_support( 'title-tag' );

		/**
		 * Enable post thumbnail support.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		/**
		 * Enable wide alignment support.
		 *
		 * @link https://wordpress.org/gutenberg/handbook/designers-developers/developers/themes/theme-support/#wide-alignment
		 */
		add_theme_support( 'align-wide' );

		/**
		 * Enable responsive embed support.
		 *
		 * @link https://wordpress.org/gutenberg/handbook/designers-developers/developers/themes/theme-support/#responsive-embedded-content
		 */
		add_theme_support( 'responsive-embeds' );

		/**
		 * Enable HTML5 markup support.
		 *
		 * @link https://developer.wordpress.org/reference/functions/add_theme_support/#html5
		 */
		add_theme_support( 'html5', [
			'caption',
			'comment-form',
			'comment-list',
			'gallery',
			'search-form',
			'script',
			'style',
		] );

		/**
		 * Enable selective refresh for widgets in customizer.
		 *
		 * @link https://developer.wordpress.org/themes/advanced-topics/customizer-api/#theme-support-in-sidebars
		 */
		add_theme_support( 'customize-selective-refresh-widgets' );
	}
}

add_action( 'after_setup_theme', 'wpkit_setup', 20 );

if ( ! function_exists( 'wpkit_widgets_init' ) ) {
	/**
	 * This function initializes and registers the sidebars for the WPKit theme.
	 *
	 * @return void
	 * @since WpKit 1.0.0
	 *
	 */
	function wpkit_widgets_init() {
		$config = [
			'before_widget' => '<section class="widget %1$s %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		];

		register_sidebar(
			[
				'name' => __( 'Primary', 'wpkit' ),
				'id'   => 'sidebar-primary',
			] + $config
		);

		register_sidebar(
			[
				'name' => __( 'Footer', 'wpkit' ),
				'id'   => 'sidebar-footer',
			] + $config
		);
	}
}
add_action( 'widgets_init', 'wpkit_widgets_init' );
