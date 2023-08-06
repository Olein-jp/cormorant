<?php
/**
 * Title: Demo - Hero
 * Slug: cormorant/demo/hero
 * Categories: cormorant-demo
 * Description: Hero for demo
 * Keywords: cormorant
 * Block Types: core/group, core/cover, core/paragraph
 *
 * @author Koji Kuno
 * @package cormorant
 * @since 3.0.0
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|3-xl","right":"var:preset|spacing|default","bottom":"var:preset|spacing|3-xl","left":"var:preset|spacing|default"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--3-xl);padding-right:var(--wp--preset--spacing--default);padding-bottom:var(--wp--preset--spacing--3-xl);padding-left:var(--wp--preset--spacing--default)"><!-- wp:heading {"textAlign":"center","fontSize":"3-xl"} -->
	<h2 class="wp-block-heading has-text-align-center has-3-xl-font-size"><?php esc_html_e( 'You can touch the next generation of WordPress.', 'cormorant' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center"><?php esc_html_e( 'Cormorant is Simple WordPress Block Theme for building website.', 'cormorant' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-cormorant-filled-square-button-base"} -->
		<div class="wp-block-button is-style-cormorant-filled-square-button-base"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Download on WP.org', 'cormorant' ); ?></a></div>
		<!-- /wp:button -->

		<!-- wp:button {"className":"is-style-cormorant-outlined-square-button-base"} -->
		<div class="wp-block-button is-style-cormorant-outlined-square-button-base"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Learn More', 'cormorant' ); ?></a></div>
		<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
<!-- /wp:group -->