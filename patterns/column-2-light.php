<?php
/**
 * Title: 2 Column Light
 * Slug: cormorant/column-2-light
 * Categories: cormorant-column
 * Description: 2 Columns colored light
 * Keywords: cormorant
 * Block Types: core/group, core/columns, core/paragraph, core/buttons, core/heading
 *
 * @author Koji Kuno
 * @package cormorant
 * @since 1.0.0
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|2-xl","bottom":"var:preset|spacing|2-xl"}}},"backgroundColor":"background","textColor":"foreground","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-foreground-color has-background-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--2-xl);padding-bottom:var(--wp--preset--spacing--2-xl)"><!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|m","right":"var:preset|spacing|m","bottom":"var:preset|spacing|m","left":"var:preset|spacing|m"}}},"backgroundColor":"foreground","textColor":"background"} -->
		<div class="wp-block-column has-background-color has-foreground-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--m);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--m);padding-left:var(--wp--preset--spacing--m)"><!-- wp:heading {"level":3,"fontSize":"3-xl"} -->
			<h3 class="has-3-xl-font-size"><strong>Heading Text</strong></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>Nostra ut condimentum blandit dapibus elementum libero lorem gravida pulvinar, lectus purus nisi cubilia eu donec luctus justo himenaeos, metus posuere ultricies conubia id etiam fringilla elit. Leo pellentesque consectetur mus erat class nunc euismod</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
			<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"background","textColor":"foreground","className":"is-style-cormorant-background-filled-square-button"} -->
				<div class="wp-block-button is-style-cormorant-background-filled-square-button"><a class="wp-block-button__link has-foreground-color has-background-background-color has-text-color has-background wp-element-button">Learn More</a></div>
				<!-- /wp:button --></div>
			<!-- /wp:buttons --></div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|m","right":"var:preset|spacing|m","bottom":"var:preset|spacing|m","left":"var:preset|spacing|m"}}},"backgroundColor":"foreground","textColor":"background"} -->
		<div class="wp-block-column has-background-color has-foreground-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--m);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--m);padding-left:var(--wp--preset--spacing--m)"><!-- wp:heading {"level":3,"fontSize":"3-xl"} -->
			<h3 class="has-3-xl-font-size"><strong>Heading Text</strong></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>Nostra ut condimentum blandit dapibus elementum libero lorem gravida pulvinar, lectus purus nisi cubilia eu donec luctus justo himenaeos, metus posuere ultricies conubia id etiam fringilla elit. Leo pellentesque consectetur mus erat class nunc euismod</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
			<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"background","textColor":"foreground","className":"is-style-cormorant-background-filled-square-button"} -->
				<div class="wp-block-button is-style-cormorant-background-filled-square-button"><a class="wp-block-button__link has-foreground-color has-background-background-color has-text-color has-background wp-element-button">Learn More</a></div>
				<!-- /wp:button --></div>
			<!-- /wp:buttons --></div>
		<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
<!-- /wp:group -->
