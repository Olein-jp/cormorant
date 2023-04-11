<?php
/**
 * functions.php
 *
 * @package cormorant
 * @author Olein-jp
 * @license GPL-2.0+
 */
if ( ! function_exists( 'cormorant_setup' ) ) {
	/**
	 * Setup theme
	 */
	function cormorant_setup() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );
	}
}
add_action( 'after_setup_theme', 'cormorant_setup' );

if ( ! function_exists( 'cormorant_disable_default_block_patterns' ) ) {
	/**
	 * Disabled default block patterns
	 */
	function cormorant_disable_default_block_patterns() {
		remove_theme_support( 'core-block-patterns' );
	}

	add_action( 'init', 'cormorant_disable_default_block_patterns' );
}

if ( ! function_exists( 'cormorant_styles' ) ) {
	/**
	 * Enqueue styles
	 */
	function cormorant_styles() {

		wp_enqueue_style(
			'cormorant-styles',
			get_template_directory_uri() . '/assets/css/style.css',
			array(),
			wp_get_theme( 'cormorant' )->get( 'Version' )
		);
	}

	add_action( 'wp_enqueue_scripts', 'cormorant_styles' );
}

if ( ! function_exists( 'cormorant_editor_styles' ) ) {
	/**
	 * Enqueue editor styles
	 */
	function cormorant_editor_styles() {
		add_editor_style( 'assets/css/style.css' );
	}
	add_action( 'admin_init', 'cormorant_editor_styles' );
}

if ( ! function_exists( 'cormorant_add_block_editor_styles' ) ) {
	/**
	 * Enqueue Block Editor Styles
	 * @return void
	 */
	function cormorant_add_block_editor_styles() {
		wp_enqueue_style( 'block-editor-style', get_stylesheet_directory_uri() . '/assets/css/editor-style.css' );
	}
	add_action( 'enqueue_block_editor_assets', 'cormorant_add_block_editor_styles' );
}

/**
 * Include Registration of Block Styles
 */
require 'inc/block-styles/block-styles.php';

/**
 * Include Registration of Block Categories and Patterns
 */
require 'inc/block-patterns/block-patterns.php';
