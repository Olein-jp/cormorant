<?php
/**
 * Title: Hero Vertical Dark
 * Slug: cormorant/hero-vertical-dark
 * Categories: cormorant-hero
 * Description: Vertical layout Hero styled dark
 * Keywords: cormorant
 * Block Types: core/group, core/image, core/paragraph, core/buttons, core/header
 *
 * @author Koji Kuno
 * @package cormorant
 * @since 1.0.0
 */
?>
<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|X-large","bottom":"var:preset|spacing|X-large"}}},"backgroundColor":"foreground","textColor":"background","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-background-color has-foreground-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
	<div class="wp-block-group"><!-- wp:image {"id":2180,"sizeSlug":"large","linkDestination":"none"} -->
		<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_MDRPL8PT36.jpg'; ?>" alt="<?php echo esc_attr__( 'Sample Image', 'cormorant' ); ?>" class="wp-image-2180"/></figure>
		<!-- /wp:image -->

		<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"extra-large"} -->
		<h2 class="has-text-align-center has-extra-large-font-size" style="font-style:normal;font-weight:700">Hero header title text</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center">Torquent dolor metus vel a arcu consectetur facilisis euismod nec quam turpis lorem etiam, himenaeos cursus vehicula integer eu conubia suscipit phasellus quis tincidunt dui congue.</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}}} -->
		<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-cormorant-background-filled-square-button"} -->
			<div class="wp-block-button is-style-cormorant-background-filled-square-button"><a class="wp-block-button__link wp-element-button">Click Left Button</a></div>
			<!-- /wp:button -->

			<!-- wp:button {"className":"is-style-cormorant-background-outline-square-button"} -->
			<div class="wp-block-button is-style-cormorant-background-outline-square-button"><a class="wp-block-button__link wp-element-button">Click Right Button</a></div>
			<!-- /wp:button --></div>
		<!-- /wp:buttons --></div>
	<!-- /wp:group --></section>
<!-- /wp:group -->
