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
			'section'   => array( 'label' => __( 'Section', 'cormorant' ) ),
			'hero'      => array( 'label' => __( 'Hero', 'cormorant' ) ),
			'column'    => array( 'label' => __( 'Column', 'cormorant' ) ),
			'banner'    => array( 'label' => __( 'Banner', 'cormorant' ) ),
			'cta'       => array( 'label' => __( 'CTA', 'cormorant' ) ),
			'qa'        => array( 'label' => __( 'QA', 'cormorant' ) ),
			'query'     => array( 'label' => __( 'Query', 'cormorant' ) ),
			'page'      => array( 'label' => __( 'Page', 'cormorant' ) ),
			'header'    => array( 'label' => __( 'Header', 'cormorant' ) ),
			'footer'    => array( 'label' => __( 'Footer', 'cormorant' ) ),
			'paragraph' => array( 'label' => __( 'Paragraph', 'cormorant' ) ),
			'gallery'   => array( 'label' => __( 'Gallery', 'cormorant' ) ),
			'button'    => array( 'label' => __( 'Button', 'cormorant' ) ),
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
