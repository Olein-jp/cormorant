<?php
/**
 * Title: Section title - vertical
 * Slug: cormorant/section-section-title-vertical
 * Categories: section
 * Description: Layout vertical title and description text in section with gradient background which you can change via color palette.
 * Block Types: core/group, core/columns, core/spacer, core/paragraph, core/buttons,
 *
 * @author Koji Kuno
 * @package cormorant
 * @since 1.0.0
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"textColor":"background","gradient":"quaternary-to-secondary","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-background-color has-quaternary-to-secondary-gradient-background has-text-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:spacer {"height":"50px"} -->
	<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"className":"is-style-cormorant-background-striped-heading"} -->
		<h3 class="is-style-cormorant-background-striped-heading" style="font-style:normal;font-weight:700">Section title</h3>
		<!-- /wp:heading -->

		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center">Mattis fringilla accumsan porttitor ridiculus litora bibendum turpis consequat, auctor ad enim cursus imperdiet urna ligula ultrices tempus, eget posuere pulvinar hendrerit orci pretium primis. Curabitur dictum vulputate cursus ultrices nisi semper facilisi tortor ante ullamcorper magnis, odio feugiat vestibulum molestie nascetur magna consequat imperdiet a. Fermentum pellentesque odio habitant bibendum duis </p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:spacer {"height":"50px"} -->
	<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
</div>
<!-- /wp:group -->
