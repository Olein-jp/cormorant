<?php
/**
 * Title: Section title - horizontal
 * Slug: cormorant/section-section-title-horizontal
 * Categories: section
 * Description: Layout horizontally title and description text in section with gradient background which you can change via color palette.
 * Block Types: core/group, core/columns, core/spacer, core/paragraph, core/buttons,
 *
 * @author Koji Kuno
 * @package cormorant
 * @since 1.0.0
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"textColor":"background","gradient":"quaternary-to-secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-color has-quaternary-to-secondary-gradient-background has-text-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:spacer {"height":"50px"} -->
	<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:columns {"align":"wide"} -->
		<div class="wp-block-columns alignwide">
			<!-- wp:column {"width":"33.33%"} -->
			<div class="wp-block-column" style="flex-basis:33.33%">
				<!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"className":"is-style-cormorant-background-striped-heading"} -->
				<h3 class="is-style-cormorant-background-striped-heading" style="font-style:normal;font-weight:700">Section title</h3>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"66.66%"} -->
			<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:paragraph {"align":"left"} -->
				<p class="has-text-align-left">Molestie massa ante malesuada pharetra fames velit parturient blandit purus nisi senectus vestibulum quisque ex habitant, facilisis adipiscing porta aptent cras ornare magnis urna sed euismod iaculis platea auctor. Posuere condimentum suscipit tempus hac in porttitor neque sociosqu nibh tincidunt viverra, magnis sodales at scelerisque leo orci dolor sed vehicula. Facilisi sollicitudin venenatis sagittis amet taciti libero diam tempus pharetra enim faucibus, tincidunt varius malesuada maximus curae imperdiet tempor quam sociosqu non.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->

	<!-- wp:spacer {"height":"50px"} -->
	<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
</div>
<!-- /wp:group -->
