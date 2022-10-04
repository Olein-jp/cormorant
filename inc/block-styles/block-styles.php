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
				'name'   => 'cormorant-striped-separator-foreground',
				'label'  => esc_html__( 'Striped Foreground', 'cormorant' ),
			],
			[
				'target' => 'core/separator',
				'name'   => 'cormorant-striped-separator-background',
				'label'  => esc_html__( 'Striped Background', 'cormorant' ),
			],
			[
				'target' => 'core/separator',
				'name'   => 'cormorant-striped-separator-primary',
				'label'  => esc_html__( 'Striped Primary', 'cormorant' ),
			],
			[
				'target' => 'core/separator',
				'name'   => 'cormorant-striped-separator-secondary',
				'label'  => esc_html__( 'Striped Secondary', 'cormorant' ),
			],
			[
				'target' => 'core/separator',
				'name'   => 'cormorant-striped-separator-tertiary',
				'label'  => esc_html__( 'Striped Tertiary', 'cormorant' ),
			],
			[
				'target' => 'core/separator',
				'name'   => 'cormorant-striped-separator-quaternary',
				'label'  => esc_html__( 'Striped Quaternary', 'cormorant' ),
			],
			[
				'target' => 'core/separator',
				'name'   => 'cormorant-dotted-separator-foreground',
				'label'  => esc_html__( 'Dotted Foreground', 'cormorant' ),
			],
			[
				'target' => 'core/separator',
				'name'   => 'cormorant-dotted-separator-background',
				'label'  => esc_html__( 'Dotted Background', 'cormorant' ),
			],
			[
				'target' => 'core/separator',
				'name'   => 'cormorant-dotted-separator-primary',
				'label'  => esc_html__( 'Dotted Primary', 'cormorant' ),
			],
			[
				'target' => 'core/separator',
				'name'   => 'cormorant-dotted-separator-secondary',
				'label'  => esc_html__( 'Dotted Secondary', 'cormorant' ),
			],
			[
				'target' => 'core/separator',
				'name'   => 'cormorant-dotted-separator-tertiary',
				'label'  => esc_html__( 'Dotted Tertiary', 'cormorant' ),
			],
			[
				'target' => 'core/separator',
				'name'   => 'cormorant-dotted-separator-quaternary',
				'label'  => esc_html__( 'Dotted Quaternary', 'cormorant' ),
			],
			[
				'target' => 'core/separator',
				'name'   => 'cormorant-dashed-separator-foreground',
				'label'  => esc_html__( 'Dashed Foreground', 'cormorant' ),
			],
			[
				'target' => 'core/separator',
				'name'   => 'cormorant-dashed-separator-background',
				'label'  => esc_html__( 'Dashed Background', 'cormorant' ),
			],
			[
				'target' => 'core/separator',
				'name'   => 'cormorant-dashed-separator-primary',
				'label'  => esc_html__( 'Dashed Primary', 'cormorant' ),
			],
			[
				'target' => 'core/separator',
				'name'   => 'cormorant-dashed-separator-secondary',
				'label'  => esc_html__( 'Dashed Secondary', 'cormorant' ),
			],
			[
				'target' => 'core/separator',
				'name'   => 'cormorant-dashed-separator-tertiary',
				'label'  => esc_html__( 'Dashed Tertiary', 'cormorant' ),
			],
			[
				'target' => 'core/separator',
				'name'   => 'cormorant-dashed-separator-quaternary',
				'label'  => esc_html__( 'Dashed Quaternary', 'cormorant' ),
			],
			[
				'target' => 'core/image',
				'name'   => 'cormorant-striped-image-background-foreground',
				'label'  => esc_html__( 'Striped Foreground', 'cormorant' ),
			],
			[
				'target' => 'core/image',
				'name'   => 'cormorant-striped-image-background-background',
				'label'  => esc_html__( 'Striped Background', 'cormorant' ),
			],
			[
				'target' => 'core/image',
				'name'   => 'cormorant-striped-image-background-primary',
				'label'  => esc_html__( 'Striped Primary', 'cormorant' ),
			],
			[
				'target' => 'core/image',
				'name'   => 'cormorant-striped-image-background-secondary',
				'label'  => esc_html__( 'Striped Secondary', 'cormorant' ),
			],
			[
				'target' => 'core/image',
				'name'   => 'cormorant-striped-image-background-tertiary',
				'label'  => esc_html__( 'Striped Tertiary', 'cormorant' ),
			],
			[
				'target' => 'core/image',
				'name'   => 'cormorant-striped-image-background-quaternary',
				'label'  => esc_html__( 'Striped Quaternary', 'cormorant' ),
			],
			[
				'target' => 'core/heading',
				'name'   => 'cormorant-striped-heading-foreground',
				'label'  => esc_html__( 'Striped Foreground', 'cormorant' ),
			],
			[
				'target' => 'core/heading',
				'name'   => 'cormorant-striped-heading-background',
				'label'  => esc_html__( 'Striped Background', 'cormorant' ),
			],
			[
				'target' => 'core/heading',
				'name'   => 'cormorant-striped-heading-primary',
				'label'  => esc_html__( 'Striped Primary', 'cormorant' ),
			],
			[
				'target' => 'core/heading',
				'name'   => 'cormorant-striped-heading-secondary',
				'label'  => esc_html__( 'Striped Secondary', 'cormorant' ),
			],
			[
				'target' => 'core/heading',
				'name'   => 'cormorant-striped-heading-tertiary',
				'label'  => esc_html__( 'Striped Tertiary', 'cormorant' ),
			],
			[
				'target' => 'core/heading',
				'name'   => 'cormorant-striped-heading-quaternary',
				'label'  => esc_html__( 'Striped Quaternary', 'cormorant' ),
			],
			[
				'target' => 'core/heading',
				'name'   => 'cormorant-dotted-heading-foreground',
				'label'  => esc_html__( 'Dotted Foreground', 'cormorant' ),
			],
			[
				'target' => 'core/heading',
				'name'   => 'cormorant-dotted-heading-background',
				'label'  => esc_html__( 'Dotted Background', 'cormorant' ),
			],
			[
				'target' => 'core/heading',
				'name'   => 'cormorant-dotted-heading-primary',
				'label'  => esc_html__( 'Dotted Primary', 'cormorant' ),
			],
			[
				'target' => 'core/heading',
				'name'   => 'cormorant-dotted-heading-secondary',
				'label'  => esc_html__( 'Dotted Secondary', 'cormorant' ),
			],
			[
				'target' => 'core/heading',
				'name'   => 'cormorant-dotted-heading-tertiary',
				'label'  => esc_html__( 'Dotted Tertiary', 'cormorant' ),
			],
			[
				'target' => 'core/heading',
				'name'   => 'cormorant-dotted-heading-quaternary',
				'label'  => esc_html__( 'Dotted Quaternary', 'cormorant' ),
			],
			[
				'target' => 'core/heading',
				'name'   => 'cormorant-dashed-heading-foreground',
				'label'  => esc_html__( 'Dashed Foreground', 'cormorant' ),
			],
			[
				'target' => 'core/heading',
				'name'   => 'cormorant-dashed-heading-background',
				'label'  => esc_html__( 'Dashed Background', 'cormorant' ),
			],
			[
				'target' => 'core/heading',
				'name'   => 'cormorant-dashed-heading-primary',
				'label'  => esc_html__( 'Dashed Primary', 'cormorant' ),
			],
			[
				'target' => 'core/heading',
				'name'   => 'cormorant-dashed-heading-secondary',
				'label'  => esc_html__( 'Dashed Secondary', 'cormorant' ),
			],
			[
				'target' => 'core/heading',
				'name'   => 'cormorant-dashed-heading-tertiary',
				'label'  => esc_html__( 'Dashed Tertiary', 'cormorant' ),
			],
			[
				'target' => 'core/heading',
				'name'   => 'cormorant-dashed-heading-quaternary',
				'label'  => esc_html__( 'Dashed Quaternary', 'cormorant' ),
			],
			[
				'target' => 'core/group',
				'name'   => 'cormorant-solid-shadow-foreground',
				'label'  => esc_html__( 'Foreground Solid Shadow', 'cormorant' ),
			],
			[
				'target' => 'core/group',
				'name'   => 'cormorant-solid-shadow-background',
				'label'  => esc_html__( 'Background Solid Shadow', 'cormorant' ),
			],
			[
				'target' => 'core/group',
				'name'   => 'cormorant-solid-shadow-primary',
				'label'  => esc_html__( 'Primary Solid Shadow', 'cormorant' ),
			],
			[
				'target' => 'core/group',
				'name'   => 'cormorant-solid-shadow-secondary',
				'label'  => esc_html__( 'Secondary Solid Shadow', 'cormorant' ),
			],
			[
				'target' => 'core/group',
				'name'   => 'cormorant-solid-shadow-tertiary',
				'label'  => esc_html__( 'Tertiary Solid Shadow', 'cormorant' ),
			],
			[
				'target' => 'core/group',
				'name'   => 'cormorant-solid-shadow-quaternary',
				'label'  => esc_html__( 'Quaternary Solid Shadow', 'cormorant' ),
			],
			[
				'target' => 'core/group',
				'name'   => 'cormorant-blur-shadow-foreground',
				'label'  => esc_html__( 'Foreground Blur Shadow', 'cormorant' ),
			],
			[
				'target' => 'core/group',
				'name'   => 'cormorant-blur-shadow-background',
				'label'  => esc_html__( 'Background Blur Shadow', 'cormorant' ),
			],
			[
				'target' => 'core/group',
				'name'   => 'cormorant-blur-shadow-primary',
				'label'  => esc_html__( 'Primary Blur Shadow', 'cormorant' ),
			],
			[
				'target' => 'core/group',
				'name'   => 'cormorant-blur-shadow-secondary',
				'label'  => esc_html__( 'Secondary Blur Shadow', 'cormorant' ),
			],
			[
				'target' => 'core/group',
				'name'   => 'cormorant-blur-shadow-tertiary',
				'label'  => esc_html__( 'Tertiary Blur Shadow', 'cormorant' ),
			],
			[
				'target' => 'core/group',
				'name'   => 'cormorant-blur-shadow-quaternary',
				'label'  => esc_html__( 'Quaternary Blur Shadow', 'cormorant' ),
			],
			[
				'target' => 'core/query-pagination',
				'name'   => 'cormorant-block-pagination-foreground',
				'label'  => esc_html__( 'Block - Foreground', 'cormorant' ),
			],
			[
				'target' => 'core/query-pagination',
				'name'   => 'cormorant-block-pagination-primary',
				'label'  => esc_html__( 'Block - Primary', 'cormorant' ),
			],
			[
				'target' => 'core/query-pagination',
				'name'   => 'cormorant-block-pagination-secondary',
				'label'  => esc_html__( 'Block - Secondary', 'cormorant' ),
			],
			[
				'target' => 'core/query-pagination',
				'name'   => 'cormorant-block-pagination-tertiary',
				'label'  => esc_html__( 'Block - Tertiary', 'cormorant' ),
			],
			[
				'target' => 'core/query-pagination',
				'name'   => 'cormorant-block-pagination-quaternary',
				'label'  => esc_html__( 'Block - Quaternary', 'cormorant' ),
			],
			[
				'target' => 'core/code',
				'name'   => 'cormorant-foreground-code',
				'label'  => esc_html__( 'Foreground Code', 'cormorant' ),
			],
			[
				'target' => 'core/code',
				'name'   => 'cormorant-background-code',
				'label'  => esc_html__( 'Background Code', 'cormorant' ),
			],
			[
				'target' => 'core/code',
				'name'   => 'cormorant-primary-code',
				'label'  => esc_html__( 'Primary Code', 'cormorant' ),
			],
			[
				'target' => 'core/code',
				'name'   => 'cormorant-secondary-code',
				'label'  => esc_html__( 'Secondary Code', 'cormorant' ),
			],
			[
				'target' => 'core/code',
				'name'   => 'cormorant-tertiary-code',
				'label'  => esc_html__( 'Tertiary Code', 'cormorant' ),
			],
			[
				'target' => 'core/code',
				'name'   => 'cormorant-quaternary-code',
				'label'  => esc_html__( 'Quaternary Code', 'cormorant' ),
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
