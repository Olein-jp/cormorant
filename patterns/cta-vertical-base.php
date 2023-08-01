<?php
/**
 * Title: CTA Vertical Base
 * Slug: cormorant/cta/vertical-base
 * Categories: cormorant-cta
 * Description: Call To Action layout Vertical colored base color
 * Keywords: cormorant
 * Block Types: core/group, core/paragraph, core/buttons,
 *
 * @author Koji Kuno
 * @package cormorant
 * @since 1.0.0
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0"}},"textColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-color has-text-color"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"top":"var:preset|spacing|xl","right":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl","left":"var:preset|spacing|xl"}},"border":{"width":"1px"}},"borderColor":"base","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
	<div class="wp-block-group has-border-color has-base-border-color" style="border-width:1px;padding-top:var(--wp--preset--spacing--xl);padding-right:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl);padding-left:var(--wp--preset--spacing--xl)"><!-- wp:heading {"level":3} -->
		<h3 class="wp-block-heading"><strong><?php esc_html_e( 'Thank you for your interest!', 'cormorant' ); ?></strong></h3>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p><?php esc_html_e( 'New opportunities are waiting for you! If you have any questions or queries, please do not hesitate to let us know. Our expert team will be happy to answer your questions in detail.', 'cormorant' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"0"}},"fontSize":"medium"} -->
		<div class="wp-block-buttons has-custom-font-size has-medium-font-size"><!-- wp:button {"backgroundColor":"background","className":"is-style-cormorant-background-outline-square-button is-style-cormorant-filled-square-button-base","fontSize":"s"} -->
			<div class="wp-block-button has-custom-font-size is-style-cormorant-background-outline-square-button is-style-cormorant-filled-square-button-base has-s-font-size"><a class="wp-block-button__link has-background-background-color has-background wp-element-button"><strong><?php esc_html_e( 'Contact Us', 'cormorant' ); ?></strong></a></div>
			<!-- /wp:button --></div>
		<!-- /wp:buttons --></div>
	<!-- /wp:group --></div>
<!-- /wp:group -->