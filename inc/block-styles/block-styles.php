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
				'name'   => 'cormorant-striped-background-image-foreground',
				'label'  => esc_html__( 'Striped Foreground', 'cormorant' ),
			],
			[
				'target' => 'core/image',
				'name'   => 'cormorant-striped-background-image-background',
				'label'  => esc_html__( 'Striped Background', 'cormorant' ),
			],
			[
				'target' => 'core/image',
				'name'   => 'cormorant-striped-background-image-primary',
				'label'  => esc_html__( 'Striped Primary', 'cormorant' ),
			],
			[
				'target' => 'core/image',
				'name'   => 'cormorant-striped-background-image-secondary',
				'label'  => esc_html__( 'Striped Secondary', 'cormorant' ),
			],
			[
				'target' => 'core/image',
				'name'   => 'cormorant-striped-background-image-tertiary',
				'label'  => esc_html__( 'Striped Tertiary', 'cormorant' ),
			],
			[
				'target' => 'core/image',
				'name'   => 'cormorant-striped-background-image-quaternary',
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
				'name'   => 'cormorant-solid-shadow-group-foreground',
				'label'  => esc_html__( 'Foreground Solid Shadow', 'cormorant' ),
			],
			[
				'target' => 'core/group',
				'name'   => 'cormorant-solid-shadow-group-background',
				'label'  => esc_html__( 'Background Solid Shadow', 'cormorant' ),
			],
			[
				'target' => 'core/group',
				'name'   => 'cormorant-solid-shadow-group-primary',
				'label'  => esc_html__( 'Primary Solid Shadow', 'cormorant' ),
			],
			[
				'target' => 'core/group',
				'name'   => 'cormorant-solid-shadow-group-secondary',
				'label'  => esc_html__( 'Secondary Solid Shadow', 'cormorant' ),
			],
			[
				'target' => 'core/group',
				'name'   => 'cormorant-solid-shadow-group-tertiary',
				'label'  => esc_html__( 'Tertiary Solid Shadow', 'cormorant' ),
			],
			[
				'target' => 'core/group',
				'name'   => 'cormorant-solid-shadow-group-quaternary',
				'label'  => esc_html__( 'Quaternary Solid Shadow', 'cormorant' ),
			],
			[
				'target' => 'core/group',
				'name'   => 'cormorant-blur-shadow-group-foreground',
				'label'  => esc_html__( 'Foreground Blur Shadow', 'cormorant' ),
			],
			[
				'target' => 'core/group',
				'name'   => 'cormorant-blur-shadow-group-background',
				'label'  => esc_html__( 'Background Blur Shadow', 'cormorant' ),
			],
			[
				'target' => 'core/group',
				'name'   => 'cormorant-blur-shadow-group-primary',
				'label'  => esc_html__( 'Primary Blur Shadow', 'cormorant' ),
			],
			[
				'target' => 'core/group',
				'name'   => 'cormorant-blur-shadow-group-secondary',
				'label'  => esc_html__( 'Secondary Blur Shadow', 'cormorant' ),
			],
			[
				'target' => 'core/group',
				'name'   => 'cormorant-blur-shadow-group-tertiary',
				'label'  => esc_html__( 'Tertiary Blur Shadow', 'cormorant' ),
			],
			[
				'target' => 'core/group',
				'name'   => 'cormorant-blur-shadow-group-quaternary',
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
				'target' => 'core/query-pagination',
				'name'   => 'cormorant-circle-pagination-foreground',
				'label'  => esc_html__( 'Circle - Foreground', 'cormorant' ),
			],
			[
				'target' => 'core/query-pagination',
				'name'   => 'cormorant-circle-pagination-primary',
				'label'  => esc_html__( 'Circle - Primary', 'cormorant' ),
			],
			[
				'target' => 'core/query-pagination',
				'name'   => 'cormorant-circle-pagination-secondary',
				'label'  => esc_html__( 'Circle - Secondary', 'cormorant' ),
			],
			[
				'target' => 'core/query-pagination',
				'name'   => 'cormorant-circle-pagination-tertiary',
				'label'  => esc_html__( 'Circle - Tertiary', 'cormorant' ),
			],
			[
				'target' => 'core/query-pagination',
				'name'   => 'cormorant-circle-pagination-quaternary',
				'label'  => esc_html__( 'Circle - Quaternary', 'cormorant' ),
			],
			[
				'target' => 'core/code',
				'name'   => 'cormorant-code-foreground',
				'label'  => esc_html__( 'Foreground Code', 'cormorant' ),
			],
			[
				'target' => 'core/code',
				'name'   => 'cormorant-code-background',
				'label'  => esc_html__( 'Background Code', 'cormorant' ),
			],
			[
				'target' => 'core/code',
				'name'   => 'cormorant-code-primary',
				'label'  => esc_html__( 'Primary Code', 'cormorant' ),
			],
			[
				'target' => 'core/code',
				'name'   => 'cormorant-code-secondary',
				'label'  => esc_html__( 'Secondary Code', 'cormorant' ),
			],
			[
				'target' => 'core/code',
				'name'   => 'cormorant-code-tertiary',
				'label'  => esc_html__( 'Tertiary Code', 'cormorant' ),
			],
			[
				'target' => 'core/code',
				'name'   => 'cormorant-code-quaternary',
				'label'  => esc_html__( 'Quaternary Code', 'cormorant' ),
			],
			[
				'target' => 'core/button',
				'name'   => 'cormorant-filled-square-button-foreground',
				'label'  => esc_html__( 'Foreground Filled Square', 'cormorant' ),
			],
			[
				'target' => 'core/button',
				'name'   => 'cormorant-filled-square-button-background',
				'label'  => esc_html__( 'Background Filled Square', 'cormorant' ),
			],
			[
				'target' => 'core/button',
				'name'   => 'cormorant-filled-square-button-primary',
				'label'  => esc_html__( 'Primary Filled Square', 'cormorant' ),
			],
			[
				'target' => 'core/button',
				'name'   => 'cormorant-filled-square-button-secondary',
				'label'  => esc_html__( 'Secondary Filled Square', 'cormorant' ),
			],
			[
				'target' => 'core/button',
				'name'   => 'cormorant-filled-square-button-tertiary',
				'label'  => esc_html__( 'Tertiary Filled Square', 'cormorant' ),
			],
			[
				'target' => 'core/button',
				'name'   => 'cormorant-filled-square-button-quaternary',
				'label'  => esc_html__( 'Quaternary Filled Square', 'cormorant' ),
			],
			[
				'target' => 'core/button',
				'name'   => 'cormorant-outline-square-button-foreground',
				'label'  => esc_html__( 'Foreground Outline Square', 'cormorant' ),
			],
			[
				'target' => 'core/button',
				'name'   => 'cormorant-outline-square-button-background',
				'label'  => esc_html__( 'Background Outline Square', 'cormorant' ),
			],
			[
				'target' => 'core/button',
				'name'   => 'cormorant-outline-square-button-primary',
				'label'  => esc_html__( 'Primary Outline Square', 'cormorant' ),
			],
			[
				'target' => 'core/button',
				'name'   => 'cormorant-outline-square-button-secondary',
				'label'  => esc_html__( 'Secondary Outline Square', 'cormorant' ),
			],
			[
				'target' => 'core/button',
				'name'   => 'cormorant-outline-square-button-tertiary',
				'label'  => esc_html__( 'Tertiary Outline Square', 'cormorant' ),
			],
			[
				'target' => 'core/button',
				'name'   => 'cormorant-outline-square-button-quaternary',
				'label'  => esc_html__( 'Quaternary Outline Square', 'cormorant' ),
			],
			[
				'target' => 'core/column',
				'name'   => 'cormorant-shadow-column-foreground',
				'label'  => esc_html__( 'Foreground Shadow', 'cormorant' ),
			],
			[
				'target' => 'core/column',
				'name'   => 'cormorant-shadow-column-background',
				'label'  => esc_html__( 'Background Shadow', 'cormorant' ),
			],
			[
				'target' => 'core/query',
				'name'   => 'cormorant-blur-shadow-query',
				'label'  => esc_html__( 'Blur Shadow', 'cormorant' ),
			],
			[
				'target' => 'core/query',
				'name'   => 'cormorant-blur-shadow-query-primary',
				'label'  => esc_html__( 'Blur Shadow Primary', 'cormorant' ),
			],
			[
				'target' => 'core/query',
				'name'   => 'cormorant-blur-shadow-query-secondary',
				'label'  => esc_html__( 'Blur Shadow Secondary', 'cormorant' ),
			],
			[
				'target' => 'core/query',
				'name'   => 'cormorant-blur-shadow-query-tertiary',
				'label'  => esc_html__( 'Blur Shadow Tertiary', 'cormorant' ),
			],
			[
				'target' => 'core/query',
				'name'   => 'cormorant-blur-shadow-query-quaternary',
				'label'  => esc_html__( 'Blur Shadow Quaternary', 'cormorant' ),
			],
			[
				'target' => 'core/query',
				'name'   => 'cormorant-solid-shadow-query',
				'label'  => esc_html__( 'Solid Shadow', 'cormorant' ),
			],
			[
				'target' => 'core/query',
				'name'   => 'cormorant-solid-shadow-query-primary',
				'label'  => esc_html__( 'Solid Shadow Primary', 'cormorant' ),
			],
			[
				'target' => 'core/query',
				'name'   => 'cormorant-solid-shadow-query-secondary',
				'label'  => esc_html__( 'Solid Shadow Secondary', 'cormorant' ),
			],
			[
				'target' => 'core/query',
				'name'   => 'cormorant-solid-shadow-query-tertiary',
				'label'  => esc_html__( 'Solid Shadow Tertiary', 'cormorant' ),
			],
			[
				'target' => 'core/query',
				'name'   => 'cormorant-solid-shadow-query-quaternary',
				'label'  => esc_html__( 'Solid Shadow Quaternary', 'cormorant' ),
			],
			[
				'target' => 'core/query',
				'name'   => 'cormorant-solid-line-query-foreground',
				'label'  => esc_html__( 'Solid Line Foreground', 'cormorant' ),
			],
			[
				'target' => 'core/query',
				'name'   => 'cormorant-solid-line-query-primary',
				'label'  => esc_html__( 'Solid Line Primary', 'cormorant' ),
			],
			[
				'target' => 'core/query',
				'name'   => 'cormorant-solid-line-query-secondary',
				'label'  => esc_html__( 'Solid Line Secondary', 'cormorant' ),
			],
			[
				'target' => 'core/query',
				'name'   => 'cormorant-solid-line-query-tertiary',
				'label'  => esc_html__( 'Solid Line Tertiary', 'cormorant' ),
			],
			[
				'target' => 'core/query',
				'name'   => 'cormorant-solid-line-query-quaternary',
				'label'  => esc_html__( 'Solid Line Quaternary', 'cormorant' ),
			],
			[
				'target' => 'core/gallery',
				'name'   => 'cormorant-striped-background-gallery-foreground',
				'label'  => esc_html__( 'Striped Foreground', 'cormorant' ),
			],
			[
				'target' => 'core/gallery',
				'name'   => 'cormorant-striped-background-gallery-background',
				'label'  => esc_html__( 'Striped Background', 'cormorant' ),
			],
			[
				'target' => 'core/gallery',
				'name'   => 'cormorant-striped-background-gallery-primary',
				'label'  => esc_html__( 'Striped Primary', 'cormorant' ),
			],
			[
				'target' => 'core/gallery',
				'name'   => 'cormorant-striped-background-gallery-secondary',
				'label'  => esc_html__( 'Striped Secondary', 'cormorant' ),
			],
			[
				'target' => 'core/gallery',
				'name'   => 'cormorant-striped-background-gallery-tertiary',
				'label'  => esc_html__( 'Striped Tertiary', 'cormorant' ),
			],
			[
				'target' => 'core/gallery',
				'name'   => 'cormorant-striped-background-gallery-quaternary',
				'label'  => esc_html__( 'Striped Quaternary', 'cormorant' ),
			],
			[
				'target' => 'core/gallery',
				'name'   => 'cormorant-solid-background-gallery-foreground',
				'label'  => esc_html__( 'Solid Foreground', 'cormorant' ),
			],
			[
				'target' => 'core/gallery',
				'name'   => 'cormorant-solid-background-gallery-background',
				'label'  => esc_html__( 'Solid Background', 'cormorant' ),
			],
			[
				'target' => 'core/gallery',
				'name'   => 'cormorant-solid-background-gallery-primary',
				'label'  => esc_html__( 'Solid Primary', 'cormorant' ),
			],
			[
				'target' => 'core/gallery',
				'name'   => 'cormorant-solid-background-gallery-secondary',
				'label'  => esc_html__( 'Solid Secondary', 'cormorant' ),
			],
			[
				'target' => 'core/gallery',
				'name'   => 'cormorant-solid-background-gallery-tertiary',
				'label'  => esc_html__( 'Solid Tertiary', 'cormorant' ),
			],
			[
				'target' => 'core/gallery',
				'name'   => 'cormorant-solid-background-gallery-quaternary',
				'label'  => esc_html__( 'Solid Quaternary', 'cormorant' ),
			],
			[
				'target' => 'core/post-navigation-link',
				'name'   => 'cormorant-block-post-navigation-foreground',
				'label'  => esc_html__( 'Block Foreground', 'cormorant' ),
			],
			[
				'target' => 'core/post-navigation-link',
				'name'   => 'cormorant-block-post-navigation-primary',
				'label'  => esc_html__( 'Block Primary', 'cormorant' ),
			],
			[
				'target' => 'core/post-navigation-link',
				'name'   => 'cormorant-block-post-navigation-secondary',
				'label'  => esc_html__( 'Block Secondary', 'cormorant' ),
			],
			[
				'target' => 'core/post-navigation-link',
				'name'   => 'cormorant-block-post-navigation-tertiary',
				'label'  => esc_html__( 'Block Tertiary', 'cormorant' ),
			],
			[
				'target' => 'core/post-navigation-link',
				'name'   => 'cormorant-block-post-navigation-quaternary',
				'label'  => esc_html__( 'Block Quaternary', 'cormorant' ),
			],
			[
				'target' => 'core/post-navigation-link',
				'name'   => 'cormorant-circle-post-navigation-foreground',
				'label'  => esc_html__( 'Circle Foreground', 'cormorant' ),
			],
			[
				'target' => 'core/post-navigation-link',
				'name'   => 'cormorant-circle-post-navigation-primary',
				'label'  => esc_html__( 'Circle Primary', 'cormorant' ),
			],
			[
				'target' => 'core/post-navigation-link',
				'name'   => 'cormorant-circle-post-navigation-secondary',
				'label'  => esc_html__( 'Circle Secondary', 'cormorant' ),
			],
			[
				'target' => 'core/post-navigation-link',
				'name'   => 'cormorant-circle-post-navigation-tertiary',
				'label'  => esc_html__( 'Circle Tertiary', 'cormorant' ),
			],
			[
				'target' => 'core/post-navigation-link',
				'name'   => 'cormorant-circle-post-navigation-quaternary',
				'label'  => esc_html__( 'Circle Quaternary', 'cormorant' ),
			],
			[
				'target' => 'core/pullquote',
				'name'   => 'cormorant-big-quote-mark-pullquote',
				'label'  => esc_html__( 'Big Quote Mark', 'cormorant' ),
			],
			[
				'target' => 'core/pullquote',
				'name'   => 'cormorant-small-quote-mark-pullquote',
				'label'  => esc_html__( 'Small Quote Mark', 'cormorant' ),
			],
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
