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

if ( ! function_exists( 'cormorant_no_feature_image_replace' ) ) {
		/**
		 * Output set default image when unset featured image
		 *
		 * @param string $block_content The block content.
		 * @param array  $block         The full block, including name and attributes.
		 *
		 * @return mixed
		 */
	function cormorant_no_featured_image_replace( $block_content, $block ) {
		/**
		 * Display without single page
		 */
		if ( ! is_single() ) {
			if ( 'core/post-featured-image' === $block['blockName'] && ! $block_content ) {
				$default_images = array(
					get_template_directory_uri() . '/assets/images/cormorant-shape-background.png',
				);

				$default_images = apply_filters( 'cormorant_add_featured_image', $default_images );

				if ( count( $default_images ) === 1 ) {
					$default_image_url = $default_images[0];
				} else {
					$random_image_key  = array_rand( $default_images, 1 );
					$default_image_url = $default_images[ $random_image_key ];
				}

				$featured_image_markup = '<figure class="wp-block-post-featured-image"><img src="' . esc_url( $default_image_url ) . '" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Default featured image" decoding="async" loading="lazy"></figure>';

				if ( $block['attrs']['isLink'] ) {
					return sprintf(
						'<a href="%1$s">%2$s</a>',
						get_the_permalink(),
						$featured_image_markup
					);
				} else {
					return $featured_image_markup;
				}
			}
		}

		return $block_content;
	}

		add_filter( 'render_block', 'cormorant_no_featured_image_replace', 10, 2 );
}


/**
 * Include Registration of Block Styles
 */
require 'inc/block-styles/block-styles.php';

/**
 * Include Registration of Block Categories and Patterns
 */
require 'inc/block-patterns/block-patterns.php';
