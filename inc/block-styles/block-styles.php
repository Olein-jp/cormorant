<?php
/**
 * inc/block-styles/block-styles.php
 * Register original block styles.
 *
 * @package cormorant
 * @author Olein-jp
 * @license GPL-2.0+
 */

if ( ! function_exists( 'cormorant_register_block_styles' ) ) {
	/**
	 * Register Block styles
	 */
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
