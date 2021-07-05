<?php
if ( ! function_exists( 'cormorant_setup' ) ) {
	function cormorant_setup() {
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'editor-styles' );
		add_theme_support( 'wp-block-styles' );
	}
}
add_action( 'after_setup_theme', 'cormorant_setup' );

function cormorant_theme_script() {
	wp_enqueue_style(
		'cormorant-style',
		get_stylesheet_uri(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'cormorant_theme_script' );