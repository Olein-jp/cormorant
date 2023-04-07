<?php
/**
 * Title: CTA Horizontal Base
 * Slug: cormorant/cta-horizontal-base
 * Categories: cormorant-cta
 * Description: Call To Action layout Horizontal colored base
 * Keywords: cormorant
 * Block Types: core/group, core/columns, core/paragraph, core/buttons,
 *
 * @author Koji Kuno
 * @package cormorant
 * @since 1.0.0
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0"}},"textColor":"background","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide has-background-color has-text-color"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","right":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl","left":"var:preset|spacing|xl"}},"border":{"width":"1px"}},"borderColor":"base","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
	<div class="wp-block-group has-border-color has-base-border-color" style="border-width:1px;padding-top:var(--wp--preset--spacing--xl);padding-right:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl);padding-left:var(--wp--preset--spacing--xl)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small"},"padding":{"top":"0"}}}} -->
		<div class="wp-block-columns are-vertically-aligned-center" style="margin-top:var(--wp--preset--spacing--x-small);padding-top:0"><!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:paragraph {"fontSize":"xs"} -->
				<p class="has-xs-font-size">Diam elit magnis faucibus arcu duis pulvinar malesuada placerat aenean cubilia purus risus sem, luctus in dictum himenaeos urna id </p>
				<!-- /wp:paragraph --></div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"0"}},"fontSize":"medium"} -->
				<div class="wp-block-buttons has-custom-font-size has-medium-font-size"><!-- wp:button {"backgroundColor":"background","className":"is-style-cormorant-background-outline-square-button is-style-cormorant-filled-square-button-base","fontSize":"xs"} -->
					<div class="wp-block-button has-custom-font-size is-style-cormorant-background-outline-square-button is-style-cormorant-filled-square-button-base has-xs-font-size"><a class="wp-block-button__link has-background-background-color has-background wp-element-button">Contact us</a></div>
					<!-- /wp:button --></div>
				<!-- /wp:buttons --></div>
			<!-- /wp:column --></div>
		<!-- /wp:columns --></div>
	<!-- /wp:group --></div>
<!-- /wp:group -->
