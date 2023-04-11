<?php
/**
 * Title: CTA Vertical Contrast
 * Slug: cormorant/cta-vertical-contrast
 * Categories: cormorant-cta
 * Description: Call To Action layout Vertical colored contrast
 * Keywords: cormorant
 * Block Types: core/group, core/paragraph, core/buttons,
 *
 * @author Koji Kuno
 * @package cormorant
 * @since 1.0.0
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0"}},"textColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-color has-text-color"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"top":"var:preset|spacing|xl","right":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl","left":"var:preset|spacing|xl"}},"border":{"width":"0px","style":"none"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"backgroundColor":"base","textColor":"contrast","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
	<div class="wp-block-group has-contrast-color has-base-background-color has-text-color has-background has-link-color" style="border-style:none;border-width:0px;padding-top:var(--wp--preset--spacing--xl);padding-right:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl);padding-left:var(--wp--preset--spacing--xl)"><!-- wp:heading {"level":3} -->
		<h3 class="wp-block-heading"><strong>Contact us</strong></h3>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p>Diam elit magnis faucibus arcu duis pulvinar malesuada placerat aenean cubilia purus risus sem, luctus in dictum himenaeos urna id commodo sollicitudin iaculis cursus per. Habitant tortor non nascetur lacus enim rutrum fringilla vivamus integer litora vitae nostra</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"0"}},"fontSize":"medium"} -->
		<div class="wp-block-buttons has-custom-font-size has-medium-font-size"><!-- wp:button {"backgroundColor":"background","className":"is-style-cormorant-background-outline-square-button is-style-cormorant-filled-square-button-contrast","fontSize":"xs"} -->
			<div class="wp-block-button has-custom-font-size is-style-cormorant-background-outline-square-button is-style-cormorant-filled-square-button-contrast has-xs-font-size"><a class="wp-block-button__link has-background-background-color has-background wp-element-button">Contact Us</a></div>
			<!-- /wp:button --></div>
		<!-- /wp:buttons --></div>
	<!-- /wp:group --></div>
<!-- /wp:group -->
