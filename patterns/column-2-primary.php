<?php
/**
 * Title: 2 Column Primary
 * Slug: cormorant/column-2-primary
 * Categories: cormorant-column
 * Description: 2 Columns colored primary
 * Keywords: cormorant
 * Block Types: core/group, core/columns, core/paragraph, core/buttons, core/heading
 *
 * @author Koji Kuno
 * @package cormorant
 * @since 1.0.0
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|2-xl","bottom":"var:preset|spacing|2-xl"}}},"backgroundColor":"primary","textColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-color has-primary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)"><!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|l","right":"var:preset|spacing|l","bottom":"var:preset|spacing|l","left":"var:preset|spacing|l"}}},"backgroundColor":"background","textColor":"foreground"} -->
		<div class="wp-block-column has-foreground-color has-background-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:heading {"level":3,"fontSize":"extra-large"} -->
			<h3 class="has-extra-large-font-size"><strong>Heading Text</strong></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|s"}}}} -->
			<p style="margin-top:var(--wp--preset--spacing--x-small)">Nostra ut condimentum blandit dapibus elementum libero lorem gravida pulvinar, lectus purus nisi cubilia eu donec luctus justo himenaeos, metus posuere ultricies conubia id etiam fringilla elit. Leo pellentesque consectetur mus erat class nunc euismod</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
			<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-cormorant-primary-filled-square-button"} -->
				<div class="wp-block-button is-style-cormorant-primary-filled-square-button"><a class="wp-block-button__link wp-element-button">Learn More</a></div>
				<!-- /wp:button --></div>
			<!-- /wp:buttons --></div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|l","right":"var:preset|spacing|l","bottom":"var:preset|spacing|l","left":"var:preset|spacing|l"}}},"backgroundColor":"background","textColor":"foreground"} -->
		<div class="wp-block-column has-foreground-color has-background-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:heading {"level":3,"fontSize":"extra-large"} -->
			<h3 class="has-extra-large-font-size"><strong>Heading Text</strong></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|s"}}}} -->
			<p style="margin-top:var(--wp--preset--spacing--x-small)">Nostra ut condimentum blandit dapibus elementum libero lorem gravida pulvinar, lectus purus nisi cubilia eu donec luctus justo himenaeos, metus posuere ultricies conubia id etiam fringilla elit. Leo pellentesque consectetur mus erat class nunc euismod</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
			<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-cormorant-primary-filled-square-button"} -->
				<div class="wp-block-button is-style-cormorant-primary-filled-square-button"><a class="wp-block-button__link wp-element-button">Learn More</a></div>
				<!-- /wp:button --></div>
			<!-- /wp:buttons --></div>
		<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
<!-- /wp:group -->
