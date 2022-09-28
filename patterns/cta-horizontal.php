<?php
/**
 * Title: CTA Horizontal
 * Slug: cormorant/cta-horizontal
 * Categories: cta
 * Description: Call To Action styled Horizontal
 * Block Types: core/group, core/columns, core/paragraph, core/buttons,
 *
 * @author Koji Kuno
 * @package cormorant
 * @since 1.0.0
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"},"blockGap":"0"}},"textColor":"background","gradient":"tertiary-to-foreground","className":"cormorant-block-pattern-cta-horizontal","layout":{"type":"constrained"}} -->
<div class="wp-block-group cormorant-block-pattern-cta-horizontal has-background-color has-tertiary-to-foreground-gradient-background has-text-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)">
	<!-- wp:columns {"verticalAlignment":"center"} -->
	<div class="wp-block-columns are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%">
			<!-- wp:paragraph -->
			<p>Diam elit magnis faucibus arcu duis pulvinar malesuada placerat aenean cubilia purus risus sem, luctus in dictum himenaeos urna id commodo sollicitudin iaculis cursus per. Habitant tortor non nascetur lacus enim rutrum fringilla vivamus integer litora vitae nostra</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%">
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"0"}},"fontSize":"medium"} -->
			<div class="wp-block-buttons has-custom-font-size has-medium-font-size">
				<!-- wp:button {"backgroundColor":"background","textColor":"tertiary","width":100,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
				<div class="wp-block-button has-custom-width wp-block-button__width-100" style="font-style:normal;font-weight:700">
					<a class="wp-block-button__link has-tertiary-color has-background-background-color has-text-color has-background wp-element-button" href="https://cormorant.kunokoji.com" target="_blank" rel="noreferrer noopener">Contact Me</a>
				</div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
