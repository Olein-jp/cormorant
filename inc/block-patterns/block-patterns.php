<?php
/**
 * inc/block-patterns/block-patterns.php
 * Register original block patterns.
 *
 * @package cormorant
 * @author Olein-jp
 * @license GPL-2.0+
 */

if ( ! function_exists( 'cormorant_register_block_patterns' ) ) {
	/**
	 * Register block patterns
	 */
	function cormorant_register_block_patterns() {

		if ( ! function_exists( 'register_block_pattern_category' ) && function_exists( 'register_block_pattern' ) ) {
			return;
		}

		// Block patterns categories in Cormorant
		$cormorant_block_pattern_categories = apply_filters(
			'cormorant_block_pattern_categories',
			array(
				'cormorant-cta' => array(
					'label' => esc_html( 'Cormorant Call to Action', 'cormorant' ),
				),
			)
		);

		// Sort the block pattern categories
		uasort(
			$cormorant_block_pattern_categories,
			function ( $a, $b ) {
				return strcmp( $a['label'], $b['label'] );
			}
		);

		// Register block pattern categories
		foreach ( $cormorant_block_pattern_categories as $slug => $settings ) {
			register_block_pattern_category( $slug, $settings );
		}

		// viewportWidth values
		$viewport = apply_filters(
			'cormorant_block_patterns_viewport',
			array(
				'full'         => 1440,
				'wide'         => 1312,
				'wide_grouped' => 1180,
				'content'      => 640,
			)
		);

		// Block patterns in Cormorant
		$cormorant_block_patterns = apply_filters(
			'cormorant_block_patterns',
			array(

				/* Call to Action */
				'cormorant/cta-horizontal' => array(
					'title'         => esc_html( 'Horizontal call to action.', 'cormorant' ),
					'categories'    => array( 'cormorant-cta' ),
					'viewportWidth' => $viewport['wide'],
					'content'       => cormorant_get_block_pattern_markup( 'cta/cta-horizontal' ),
				),

			)
		);

		// Register block patterns
		foreach ( $cormorant_block_patterns as $slug => $settings ) {
			register_block_pattern( $slug, $settings );
		}

	}

	add_action( 'init', 'cormorant_register_block_patterns' );
}

if ( ! function_exists( 'cormorant_get_block_pattern_markup' ) ) {
	/**
	 * Get Block Pattern Markup
	 *
	 * @param string $pattern_name like `cta/cta-horizontal`.
	 */
	function cormorant_get_block_pattern_markup( $pattern_name ) {

		$path = 'inc/block-patterns/' . $pattern_name . '.php';

		if ( ! locate_template( $path ) ) {
			return;
		}

		ob_start();
		include( locate_template( $path ) );

		return ob_get_clean();
	}
}
