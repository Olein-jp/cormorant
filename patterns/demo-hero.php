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
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|4-xl","right":"var:preset|spacing|default","bottom":"var:preset|spacing|4-xl","left":"var:preset|spacing|default"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--4-xl);padding-right:var(--wp--preset--spacing--default);padding-bottom:var(--wp--preset--spacing--4-xl);padding-left:var(--wp--preset--spacing--default)"><!-- wp:heading {"textAlign":"center","fontSize":"4-xl"} -->
	<h2 class="wp-block-heading has-text-align-center has-4-xl-font-size"><?php esc_html_e( 'You can touch the next generation of WordPress.', 'cormorant' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center"><?php esc_html_e( 'Cormorant is Simple WordPress Block Theme for building website.', 'cormorant' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"0px"},"spacing":{"padding":{"left":"var:preset|spacing|s","right":"var:preset|spacing|s","top":"var:preset|spacing|s","bottom":"var:preset|spacing|s"}}}} -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#" style="border-radius:0px;padding-top:var(--wp--preset--spacing--s);padding-right:var(--wp--preset--spacing--s);padding-bottom:var(--wp--preset--spacing--s);padding-left:var(--wp--preset--spacing--s)">Download on WP.org</a></div>
		<!-- /wp:button -->

		<!-- wp:button {"backgroundColor":"contrast","textColor":"base","style":{"border":{"radius":"0px","width":"2px"},"spacing":{"padding":{"left":"var:preset|spacing|s","right":"var:preset|spacing|s","top":"var:preset|spacing|s","bottom":"var:preset|spacing|s"}}},"borderColor":"base","className":"is-style-fill"} -->
		<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-base-color has-contrast-background-color has-text-color has-background has-border-color has-base-border-color wp-element-button" href="#" style="border-width:2px;border-radius:0px;padding-top:var(--wp--preset--spacing--s);padding-right:var(--wp--preset--spacing--s);padding-bottom:var(--wp--preset--spacing--s);padding-left:var(--wp--preset--spacing--s)">Learn More</a></div>
		<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
<!-- /wp:group -->
