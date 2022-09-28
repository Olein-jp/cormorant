<?php
/**
 * @author Koji Kuno
 * @package cormorant
 */

if ( ! function_exists( 'cormorant_register_block_categories' ) ) {
	/**
	 * Register Block Categories
	 *
	 * @since 1.0.0
	 */
	function cormorant_register_block_pattern_categories() {
		$cormorant_block_pattern_categories = array(
			'cta'    => array( 'label' => __( 'CTA', 'cormorant' ) ),
			'header' => array( 'label' => __( 'Header', 'cormorant' ) ),
		);
		/**
		 * Filter to add block pattern categories
		 */
		$cormorant_block_pattern_categories = apply_filters( 'cormorant_register_block_pattern_categories', $cormorant_block_pattern_categories );

		/**
		 * Register block pattern categories
		 */
		foreach ( $cormorant_block_pattern_categories as $name => $properties ) {
			if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
				register_block_pattern_category( $name, $properties );
			}
		}
	}
	add_action( 'init', 'cormorant_register_block_pattern_categories' );
}

// if ( ! function_exists( 'cormorant_register_block_patterns' ) ) {
// **
// * Register Block Patterns
// *
// * @since 1.0.0
// */
// function cormorant_register_block_patterns() {
// $cormorant_block_patterns = array();
//
// **
// * Filter to add block pattern
// */
// $cormorant_block_patterns = apply_filters( 'cormorant_register_block_patterns', $cormorant_block_patterns );
//
// foreach ( $cormorant_block_patterns as $block_pattern ) {
// $block_pattern_file = untrailingslashit( plugin_dir_path( __FILE__ ) ) . '/patterns/' . $block_pattern . '.php';
//
// **
// * Register Block Pattern from $cormorant_block_patterns
// */
// register_block_pattern(
// 'cormorant/' . $block_pattern,
// require $block_pattern_file
// );
// }
// }
//
// add_action( 'init', 'cormorant_register_block_patterns' );
// }
