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

		load_theme_textdomain( 'cormorant', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Add support for post thumbnails.
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1800, 9999 );

		// HTML5 semantic markup.
		add_theme_support(
			'html5',
			array(
				'comment-form',
				'comment-list',
			)
		);
	}
}
add_action( 'after_setup_theme', 'cormorant_setup' );

if ( ! function_exists( 'cormorant_styles' ) ) {
	/**
	 * Enqueue styles
	 */
	function cormorant_styles() {

		wp_register_style(
			'cormorant-styles-google-fonts',
			cormorant_get_google_fonts_url()
		);

		wp_register_style(
			'cormorant-styles-blocks',
			get_template_directory_uri() . '/assets/css/blocks.css'
		);

		wp_register_style(
			'cormorant-styles-commons',
			get_template_directory_uri() . '/assets/css/commons.css'
		);

		$dependencies = apply_filters(
			'cormorant_style_dependencies',
			array(
				'cormorant-styles-google-fonts',
				'cormorant-styles-blocks',
				'cormorant-styles-commons'
			)
		);

		wp_enqueue_style(
			'cormorant-styles-front-end',
			get_template_directory_uri() . '/assets/css/front-end.css',
			$dependencies,
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

		add_editor_style(
			'./assets/css/editor.css'
		);

	}

	add_action( 'admin_init', 'cormorant_editor_styles' );
}

if ( ! function_exists( 'cormorant_get_google_fonts_url' ) ) {
	/**
	 * Get Google Fonts URL
	 *
	 * Builds a Google Fonts request URL from the Google Fonts families used in theme.json.
	 * Based on a solution in the Blockbase and Tove theme (see readme.txt for licensing info).
	 *
	 * @return $cormorant_google_fonts_url
	 */
	function cormorant_get_google_fonts_url() {

		if ( ! class_exists( 'WP_Theme_JSON_Resolver_Gutenberg' ) ) {
			return '';
		}

		$theme_data = WP_Theme_JSON_Resolver_Gutenberg::get_merged_data()->get_settings();

		if ( empty( $theme_data['typography']['fontFamilies'] ) ) {
			return '';
		}

		$theme_families = ! empty( $theme_data['typography']['fontFamilies']['theme'] ) ? $theme_data['typography']['fontFamilies']['theme'] : array();

		$user_families = ! empty( $theme_data['typography']['fontFamilies']['user'] ) ? $theme_data['typography']['fontFamilies']['user'] : array();

		$font_families = array_merge( $theme_families, $user_families );

		if ( ! $font_families ) {
			return '';
		}

		$font_family_urls = array();

		foreach ( $font_families as $font_family ) {
			if ( ! empty( $font_family['google'] ) ) {
				$font_family_urls[] = $font_family['google'];
			}
		}

		if ( ! $font_family_urls ) {
			return '';
		}

		// Return a single request URL for all of the font families.
		return apply_filters(
			'cormorant_google_fonts_url',
			esc_url_raw( 'https://fonts.googleapis.com/css2?' . implode( '&', $font_family_urls ) . '&display=swap' )
		);
	}
}

/**
 * Block patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {
	require get_template_directory() . '/inc/block-patterns/block-patterns.php';
}

/**
 * Block styles..
 */
if ( function_exists( 'register_block_style' ) ) {
	require get_template_directory() . '/inc/block-styles/block-styles.php';
}
