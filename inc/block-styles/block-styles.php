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
				'target' => 'core/separator',
				'name'   => 'cormorant-foreground-striped-separator',
				'label'  => esc_html__( 'Foreground Stripe', 'cormorant' ),
			],
			[
				'target' => 'core/separator',
				'name'   => 'cormorant-background-striped-separator',
				'label'  => esc_html__( 'Background Stripe', 'cormorant' ),
			],
			[
				'target' => 'core/separator',
				'name'   => 'cormorant-primary-striped-separator',
				'label'  => esc_html__( 'Primary Stripe', 'cormorant' ),
			],
			[
				'target' => 'core/separator',
				'name'   => 'cormorant-secondary-striped-separator',
				'label'  => esc_html__( 'Secondary Stripe', 'cormorant' ),
			],
			[
				'target' => 'core/separator',
				'name'   => 'cormorant-tertiary-striped-separator',
				'label'  => esc_html__( 'Tertiary Stripe', 'cormorant' ),
			],
			[
				'target' => 'core/separator',
				'name'   => 'cormorant-quaternary-striped-separator',
				'label'  => esc_html__( 'Quaternary Stripe', 'cormorant' ),
			],
			[
				'target' => 'core/separator',
				'name'   => 'cormorant-foreground-dotted-separator',
				'label'  => esc_html__( 'Foreground Dotted', 'cormorant' ),
			],
			[
				'target' => 'core/separator',
				'name'   => 'cormorant-background-dotted-separator',
				'label'  => esc_html__( 'Background Dotted', 'cormorant' ),
			],
			[
				'target' => 'core/separator',
				'name'   => 'cormorant-primary-dotted-separator',
				'label'  => esc_html__( 'Primary Dotted', 'cormorant' ),
			],
			[
				'target' => 'core/separator',
				'name'   => 'cormorant-secondary-dotted-separator',
				'label'  => esc_html__( 'Secondary Dotted', 'cormorant' ),
			],
			[
				'target' => 'core/separator',
				'name'   => 'cormorant-tertiary-dotted-separator',
				'label'  => esc_html__( 'Tertiary Dotted', 'cormorant' ),
			],
			[
				'target' => 'core/separator',
				'name'   => 'cormorant-quaternary-dotted-separator',
				'label'  => esc_html__( 'Quaternary Dotted', 'cormorant' ),
			],
			[
				'target' => 'core/separator',
				'name'   => 'cormorant-foreground-dashed-separator',
				'label'  => esc_html__( 'Foreground Dashed', 'cormorant' ),
			],
			[
				'target' => 'core/separator',
				'name'   => 'cormorant-background-dashed-separator',
				'label'  => esc_html__( 'Background Dashed', 'cormorant' ),
			],
			[
				'target' => 'core/separator',
				'name'   => 'cormorant-primary-dashed-separator',
				'label'  => esc_html__( 'Primary Dashed', 'cormorant' ),
			],
			[
				'target' => 'core/separator',
				'name'   => 'cormorant-secondary-dashed-separator',
				'label'  => esc_html__( 'Secondary Dashed', 'cormorant' ),
			],
			[
				'target' => 'core/separator',
				'name'   => 'cormorant-tertiary-dashed-separator',
				'label'  => esc_html__( 'Tertiary Dashed', 'cormorant' ),
			],
			[
				'target' => 'core/separator',
				'name'   => 'cormorant-quaternary-dashed-separator',
				'label'  => esc_html__( 'Quaternary Dashed', 'cormorant' ),
			],
			[
				'target' => 'core/image',
				'name'   => 'cormorant-foreground-striped-image-background',
				'label'  => esc_html__( 'Foreground Stripe', 'cormorant' ),
			],
			[
				'target' => 'core/image',
				'name'   => 'cormorant-background-striped-image-background',
				'label'  => esc_html__( 'Background Stripe', 'cormorant' ),
			],
			[
				'target' => 'core/image',
				'name'   => 'cormorant-primary-striped-image-background',
				'label'  => esc_html__( 'Primary Stripe', 'cormorant' ),
			],
			[
				'target' => 'core/image',
				'name'   => 'cormorant-secondary-striped-image-background',
				'label'  => esc_html__( 'Secondary Stripe', 'cormorant' ),
			],
			[
				'target' => 'core/image',
				'name'   => 'cormorant-tertiary-striped-image-background',
				'label'  => esc_html__( 'Tertiary Stripe', 'cormorant' ),
			],
			[
				'target' => 'core/image',
				'name'   => 'cormorant-quaternary-striped-image-background',
				'label'  => esc_html__( 'Quaternary Stripe', 'cormorant' ),
			],
			[
				'target' => 'core/heading',
				'name'   => 'cormorant-foreground-striped-heading',
				'label'  => esc_html__( 'Foreground Stripe', 'cormorant' ),
			],
			[
				'target' => 'core/heading',
				'name'   => 'cormorant-background-striped-heading',
				'label'  => esc_html__( 'Background Stripe', 'cormorant' ),
			],
			[
				'target' => 'core/heading',
				'name'   => 'cormorant-primary-striped-heading',
				'label'  => esc_html__( 'Primary Stripe', 'cormorant' ),
			],
			[
				'target' => 'core/heading',
				'name'   => 'cormorant-secondary-striped-heading',
				'label'  => esc_html__( 'Secondary Stripe', 'cormorant' ),
			],
			[
				'target' => 'core/heading',
				'name'   => 'cormorant-tertiary-striped-heading',
				'label'  => esc_html__( 'Tertiary Stripe', 'cormorant' ),
			],
			[
				'target' => 'core/heading',
				'name'   => 'cormorant-quaternary-striped-heading',
				'label'  => esc_html__( 'Quaternary Stripe', 'cormorant' ),
			],
			[
				'target' => 'core/query-pagination',
				'name'   => 'cormorant-foreground-block-pagination',
				'label'  => esc_html__( 'Foreground Block', 'cormorant' ),
			],
			[
				'target' => 'core/query-pagination',
				'name'   => 'cormorant-primary-block-pagination',
				'label'  => esc_html__( 'Primary Block', 'cormorant' ),
			],
			[
				'target' => 'core/query-pagination',
				'name'   => 'cormorant-secondary-block-pagination',
				'label'  => esc_html__( 'Secondary Block', 'cormorant' ),
			],
			[
				'target' => 'core/query-pagination',
				'name'   => 'cormorant-tertiary-block-pagination',
				'label'  => esc_html__( 'Tertiary Block', 'cormorant' ),
			],
			[
				'target' => 'core/query-pagination',
				'name'   => 'cormorant-quaternary-block-pagination',
				'label'  => esc_html__( 'Quaternary Block', 'cormorant' ),
			],
		];

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
