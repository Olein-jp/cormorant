<?php
/**
 * Block Styles
 * Register original block styles.
 */

if ( ! function_exists( 'cormorant_register_block_styles' ) ) {
	function cormorant_register_block_styles() {

		if ( ! function_exists( 'register_block_style' ) ) {
			return;
		}

		// Sample style
		register_block_style(
			'core/heading',
			array(
				'name'  => 'cormorant-sample-block-style',
				'label' => esc_html__( 'Sample', 'cormorant' ),
			)
		);

	}

	add_action( 'init', 'cormorant_register_block_styles' );
}