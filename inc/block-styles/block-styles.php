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
		$block_styles = [
			[
				'target' => 'core/image',
				'name'   => 'cormorant-solid-shadow-image',
				'label'  => esc_html__( 'Solid Shadow', 'cormorant' ),
			],
			[
				'target' => 'core/image',
				'name'   => 'cormorant-blur-shadow-image',
				'label'  => esc_html__( 'Blur Shadow', 'cormorant' ),
			],
			[
				'target' => 'core/heading',
				'name'   => 'cormorant-striped-heading',
				'label'  => esc_html__( 'Striped', 'cormorant' ),
			],
			[
				'target' => 'core/heading',
				'name'   => 'cormorant-dotted-heading',
				'label'  => esc_html__( 'Dotted', 'cormorant' ),
			],
			[
				'target' => 'core/heading',
				'name'   => 'cormorant-dashed-heading',
				'label'  => esc_html__( 'Dashed', 'cormorant' ),
			],
			[
				'target' => 'core/group',
				'name'   => 'cormorant-solid-shadow-group',
				'label'  => esc_html__( 'Solid Shadow', 'cormorant' ),
			],
			[
				'target' => 'core/group',
				'name'   => 'cormorant-blur-shadow-group',
				'label'  => esc_html__( 'Blur Shadow', 'cormorant' ),
			],
			[
				'target' => 'core/query-pagination',
				'name'   => 'cormorant-block-pagination',
				'label'  => esc_html__( 'Block', 'cormorant' ),
			],
			[
				'target' => 'core/query-pagination',
				'name'   => 'cormorant-circle-pagination',
				'label'  => esc_html__( 'Circle', 'cormorant' ),
			],
			[
				'target' => 'core/button',
				'name'   => 'cormorant-filled-square-button-base',
				'label'  => esc_html__( 'Base Filled', 'cormorant' ),
			],
			[
				'target' => 'core/button',
				'name'   => 'cormorant-filled-square-button-contrast',
				'label'  => esc_html__( 'Contrast Filled', 'cormorant' ),
			],
			[
				'target' => 'core/button',
				'name'   => 'cormorant-filled-square-button-primary',
				'label'  => esc_html__( 'Primary Filled', 'cormorant' ),
			],
			[
				'target' => 'core/button',
				'name'   => 'cormorant-filled-square-button-secondary',
				'label'  => esc_html__( 'Secondary Filled', 'cormorant' ),
			],
			[
				'target' => 'core/button',
				'name'   => 'cormorant-filled-square-button-tertiary',
				'label'  => esc_html__( 'Tertiary Filled', 'cormorant' ),
			],
			[
				'target' => 'core/button',
				'name'   => 'cormorant-filled-square-button-quaternary',
				'label'  => esc_html__( 'Quaternary Filled', 'cormorant' ),
			],
			[
				'target' => 'core/button',
				'name'   => 'cormorant-outline-square-button-base',
				'label'  => esc_html__( 'Base Outline', 'cormorant' ),
			],
			[
				'target' => 'core/button',
				'name'   => 'cormorant-outline-square-button-contrast',
				'label'  => esc_html__( 'Contrast Outline', 'cormorant' ),
			],
			[
				'target' => 'core/button',
				'name'   => 'cormorant-outline-square-button-primary',
				'label'  => esc_html__( 'Primary Outline', 'cormorant' ),
			],
			[
				'target' => 'core/button',
				'name'   => 'cormorant-outline-square-button-secondary',
				'label'  => esc_html__( 'Secondary Outline', 'cormorant' ),
			],
			[
				'target' => 'core/button',
				'name'   => 'cormorant-outline-square-button-tertiary',
				'label'  => esc_html__( 'Tertiary Outline', 'cormorant' ),
			],
			[
				'target' => 'core/button',
				'name'   => 'cormorant-outline-square-button-quaternary',
				'label'  => esc_html__( 'Quaternary Outline', 'cormorant' ),
			],
			[
				'target' => 'core/pullquote',
				'name'   => 'cormorant-quote-mark-pullquote',
				'label'  => esc_html__( 'Quote Mark', 'cormorant' ),
			],
			[
				'target' => 'core/quote',
				'name'   => 'cormorant-quote-left-bar-quote',
				'label'  => esc_html__( 'Left Bar', 'cormorant' ),
			],
			[
				'target' => 'core/post-terms',
				'name'   => 'cormorant-post-terms-square',
				'label'  => esc_html__( 'Square Label', 'cormorant' ),
			]
		];

		/**
		 * Filter hook for adding block style
		 */
		$block_styles = apply_filters( 'cormorant_register_block_styles', $block_styles );

		foreach ( $block_styles as $block_style ) {
			register_block_style(
				$block_style['target'],
				array(
					'name'  => $block_style['name'],
					'label' => $block_style['label'],
				)
			);
		}
	}

	add_action( 'init', 'cormorant_register_block_styles' );
}
