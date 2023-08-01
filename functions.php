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

		// Add support for editor styles.
		$files = glob( get_template_directory() . '/assets/css/block/*.css' );
		$editor_styles = array( 'assets/css/style.css' );

		foreach ( $files as $file ) {
			$filename        = 'assets/css/block/' . basename( $file, '.css' ) . '.css';
			$editor_styles[] = $filename;
		}

		add_editor_style( $editor_styles );

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

if ( ! function_exists( 'cormorant_enqueue_block_styles' ) ) {
	/**
	 * Enqueue Block Style CSS
	 *
	 * @since 3.0.0
	 */
	function cormorant_enqueue_block_styles() {
		$files = glob( get_template_directory() . '/assets/css/block/*.css' );

		// Enqueue block styles only on frontend.
		if ( ! is_admin() ) {

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
