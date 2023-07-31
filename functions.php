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

		// Remove default block patterns.
		remove_theme_support( 'core-block-patterns' );
	}
}
add_action( 'after_setup_theme', 'cormorant_setup' );

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
	 *
	 * @return void
	 */
	function cormorant_add_block_editor_styles() {
		wp_enqueue_style( 'block-editor-style', get_stylesheet_directory_uri() . '/assets/css/editor-style.css' );
	}
	add_action( 'enqueue_block_editor_assets', 'cormorant_add_block_editor_styles' );
}

if ( ! function_exists( 'cormorant_enqueue_block_styles' ) ) {
	/**
	 * Enqueue Block Style CSS
	 *
	 * @since 3.0.0
	 */
	function cormorant_enqueue_block_styles() {
		$files = glob( get_template_directory() . '/assets/css/block/*.css' );

		foreach ( $files as $file ) {

			$filename   = basename( $file, '.css' );
			$block_name = str_replace( 'wp-block-', 'core/', $filename );

			wp_enqueue_block_style(
				$block_name,
				array(
					'handle' => "cormorant-block-{$filename}",
					'src'    => get_theme_file_uri( "/assets/css/block/{$filename}.css" ),
					'path'   => get_theme_file_path( "/assets/css/block/{$filename}.css" ),
				)
			);
		}
	}
	add_action( 'init', 'cormorant_enqueue_block_styles' );
}

/**
 * Include Registration of Block Styles
 */
require 'inc/block-styles/block-styles.php';

/**
 * Include Registration of Block Categories and Patterns
 */
require 'inc/block-patterns/block-patterns.php';
