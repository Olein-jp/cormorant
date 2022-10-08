<?php
/**
 * Title: Hero Vertical Light
 * Slug: cormorant/hero-vertical-light
 * Categories: cormorant-hero
 * Description: Hero layout Vertical colored light
 * Keywords: cormorant
 * Block Types: core/group, core/image, core/paragraph, core/buttons, core/header
 *
 * @author Koji Kuno
 * @package cormorant
 * @since 1.0.0
 */
?>
<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|2-xl","bottom":"var:preset|spacing|2-xl"}}},"backgroundColor":"background","textColor":"foreground","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-foreground-color has-background-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
	<div class="wp-block-group"><!-- wp:image {"id":2180,"sizeSlug":"large","linkDestination":"none"} -->
		<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_MDRPL8PT36.jpg'; ?>" alt="<?php echo esc_attr__( 'Sample Image', 'cormorant' ); ?>" class="wp-image-2180"/></figure>
		<!-- /wp:image -->

		<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"xl"} -->
		<h2 class="has-text-align-center has-extra-large-font-size" style="font-style:normal;font-weight:700">Hero header title text</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center">Torquent dolor metus vel a arcu consectetur facilisis euismod nec quam turpis lorem etiam, himenaeos cursus vehicula integer eu conubia suscipit phasellus quis tincidunt dui congue.</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|s"}}} -->
		<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-cormorant-foreground-filled-square-button"} -->
			<div class="wp-block-button is-style-cormorant-foreground-filled-square-button"><a class="wp-block-button__link wp-element-button">Click Left Button</a></div>
			<!-- /wp:button -->

			<!-- wp:button {"className":"is-style-cormorant-foreground-outline-square-button"} -->
			<div class="wp-block-button is-style-cormorant-foreground-outline-square-button"><a class="wp-block-button__link wp-element-button">Click Right Button</a></div>
			<!-- /wp:button --></div>
		<!-- /wp:buttons --></div>
	<!-- /wp:group --></section>
<!-- /wp:group -->
