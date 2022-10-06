<?php
/**
 * Title: CTA Vertical Primary
 * Slug: cormorant/cta-vertical-primary
 * Categories: cormorant-cta
 * Description: Call To Action layout Vertical colored primary
 * Keywords: cormorant
 * Block Types: core/group, core/paragraph, core/buttons,
 *
 * @author Koji Kuno
 * @package cormorant
 * @since 1.0.0
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|X-large","right":"var:preset|spacing|60","bottom":"var:preset|spacing|X-large","left":"var:preset|spacing|60"},"blockGap":"0"}},"backgroundColor":"primary","textColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-color has-primary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--60)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
	<div class="wp-block-group"><!-- wp:heading {"level":3} -->
		<h3><strong>Contact Us</strong></h3>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p>Diam elit magnis faucibus arcu duis pulvinar malesuada placerat aenean cubilia purus risus sem, luctus in dictum himenaeos urna id commodo sollicitudin iaculis cursus per. Habitant tortor non nascetur lacus enim rutrum fringilla vivamus integer litora vitae nostra</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"0"}},"fontSize":"medium"} -->
		<div class="wp-block-buttons has-custom-font-size has-medium-font-size"><!-- wp:button {"className":"is-style-cormorant-background-outline-square-button"} -->
			<div class="wp-block-button is-style-cormorant-background-outline-square-button"><a class="wp-block-button__link wp-element-button">Contact Us</a></div>
			<!-- /wp:button --></div>
		<!-- /wp:buttons --></div>
	<!-- /wp:group --></div>
<!-- /wp:group -->
