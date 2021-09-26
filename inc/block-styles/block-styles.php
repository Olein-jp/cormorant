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

		// No Gutters
		register_block_style(
			'core/columns',
			array(
				'name'  => 'cormorant-no-gutters',
				'label' => esc_html__( 'No Gutters', 'cormorant' ),
			)
		);

	}
	add_action( 'init', 'cormorant_register_block_styles' );
}
