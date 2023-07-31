<?php
/**
 * @author Koji Kuno
 * @package cormorant
 */

if ( ! function_exists( 'cormorant_register_block_styles' ) ) {
	/**
	 * Register Block Styles
	 *
	 * @since 1.0.0
	 */
	function cormorant_register_block_styles() {
		$block_styles = array (
			'core/image' => array(
				'cormorant-solid-shadow-image' => __( 'Solid Shadow', 'cormorant' ),
				'cormorant-blur-shadow-image'  => __( 'Blur Shadow', 'cormorant' ),
			),
			'core/heading' => array(
				'cormorant-striped-heading' => __( 'Striped', 'cormorant' ),
				'cormorant-dotted-heading'  => __( 'Dotted', 'cormorant' ),
				'cormorant-dashed-heading'  => __( 'Dashed', 'cormorant' ),
			),
			'core/group' => array(
				'cormorant-solid-shadow-group' => __( 'Solid Shadow', 'cormorant' ),
				'cormorant-blur-shadow-group'  => __( 'Blur Shadow', 'cormorant' ),
			),
			'core/query-pagination' => array(
				'cormorant-block-pagination'  => __( 'Block', 'cormorant' ),
				'cormorant-circle-pagination' => __( 'Circle', 'cormorant' ),
			),
			'core/button' => array(
				'cormorant-filled-square-button-base'         => __( 'Base Filled', 'cormorant' ),
				'cormorant-filled-square-button-contrast'     => __( 'Contrast Filled', 'cormorant' ),
				'cormorant-filled-square-button-primary'      => __( 'Primary Filled', 'cormorant' ),
				'cormorant-filled-square-button-secondary'    => __( 'Secondary Filled', 'cormorant' ),
				'cormorant-filled-square-button-tertiary'     => __( 'Tertiary Filled', 'cormorant' ),
				'cormorant-filled-square-button-quaternary'   => __( 'Quaternary Filled', 'cormorant' ),
				'cormorant-outlined-square-button-base'       => __( 'Base Outlined', 'cormorant' ),
				'cormorant-outlined-square-button-contrast'   => __( 'Contrast Outlined', 'cormorant' ),
				'cormorant-outlined-square-button-primary'    => __( 'Primary Outlined', 'cormorant' ),
				'cormorant-outlined-square-button-secondary'  => __( 'Secondary Outlined', 'cormorant' ),
				'cormorant-outlined-square-button-tertiary'   => __( 'Tertiary Outlined', 'cormorant' ),
				'cormorant-outlined-square-button-quaternary' => __( 'Quaternary Outlined', 'cormorant' ),
			),
			'core/pullquote' => array(
				'cormorant-quote-mark-pullquote' => __( 'Quote Mark', 'cormorant' ),
			),
			'core/quote' => array(
				'cormorant-quote-left-bar-quote' => __( 'Left Bar', 'cormorant' ),
			),
			'core/post-terms' => array(
				'cormorant-post-terms-square' => __( 'Square Label', 'cormorant' ),
			),
			'core/columns' => array(
				'cormorant-columns-side-border' => __( 'Side Border', 'cormorant' ),
			),
		);

		/**
		 * Filter hook for adding block style
		 */
		$block_styles = apply_filters( 'cormorant_register_block_styles', $block_styles );

		foreach ( $block_styles as $block => $styles ) {
			foreach ( $styles as $style_name => $style_label ) {
				register_block_style(
					$block,
					array(
						'name'  => $style_name,
						'label' => $style_label,
					)
				);
			}
		}
	}

	add_action( 'init', 'cormorant_register_block_styles' );
}