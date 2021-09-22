<?php
if ( ! function_exists( 'cormorant_setup' ) ) {
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
				'comment-list'
			)
		);
	}
}
add_action( 'after_setup_theme', 'cormorant_setup' );

if ( ! function_exists( 'cormorant_styles' ) ) {
	function cormorant_styles() {
		wp_enqueue_style(
			'cormorant-style',
			get_stylesheet_uri(),
			null,
			wp_get_theme( 'cormorant' )->get( 'Version' )
		);
	}

	add_action( 'wp_enqueue_scripts', 'cormorant_styles' );
}