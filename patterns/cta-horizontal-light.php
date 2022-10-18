<?php
/**
 * Title: CTA Horizontal Light
 * Slug: cormorant/cta-horizontal-light
 * Categories: cormorant-cta
 * Description: Call To Action layout Horizontal colored light
 * Keywords: cormorant
 * Block Types: core/group, core/columns, core/paragraph, core/buttons,
 *
 * @author Koji Kuno
 * @package cormorant
 * @since 1.0.0
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|m","right":"var:preset|spacing|60","bottom":"var:preset|spacing|l","left":"var:preset|spacing|60"},"blockGap":"0"}},"backgroundColor":"background","textColor":"foreground","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-foreground-color has-background-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--m);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--l);padding-left:var(--wp--preset--spacing--60)"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
	<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":3} -->
		<h3 class="has-text-align-center"><strong>Contact Us</strong></h3>
		<!-- /wp:heading -->

		<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small"}}}} -->
		<div class="wp-block-columns are-vertically-aligned-center" style="margin-top:var(--wp--preset--spacing--x-small)"><!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:paragraph {"fontSize":"s"} -->
				<p class="has-s-font-size">Diam elit magnis faucibus arcu duis pulvinar malesuada placerat aenean cubilia purus risus sem, luctus in dictum himenaeos urna id commodo sollicitudin iaculis cursus per. Habitant tortor non nascetur lacus enim rutrum fringilla vivamus integer litora vitae nostra</p>
				<!-- /wp:paragraph --></div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"0"}},"fontSize":"medium"} -->
				<div class="wp-block-buttons has-custom-font-size has-medium-font-size"><!-- wp:button {"backgroundColor":"foreground","className":"is-style-cormorant-foreground-outline-square-button","fontSize":"s"} -->
					<div class="wp-block-button has-custom-font-size is-style-cormorant-foreground-outline-square-button has-s-font-size"><a class="wp-block-button__link has-foreground-background-color has-background wp-element-button">Contact Us</a></div>
					<!-- /wp:button --></div>
				<!-- /wp:buttons --></div>
			<!-- /wp:column --></div>
		<!-- /wp:columns --></div>
	<!-- /wp:group --></div>
<!-- /wp:group -->
