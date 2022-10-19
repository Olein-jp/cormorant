<?php
/**
 * Title: Hero Vertical Primary
 * Slug: cormorant/hero-vertical-primary
 * Categories: cormorant-hero
 * Description: Hero layout Vertical colored primary
 * Keywords: cormorant
 * Block Types: core/group, core/image, core/paragraph, core/buttons, core/header
 *
 * @author Koji Kuno
 * @package cormorant
 * @since 1.0.0
 */
?>
<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|2-xl","bottom":"var:preset|spacing|2-xl"}}},"backgroundColor":"primary","textColor":"background","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-background-color has-primary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--2-xl);padding-bottom:var(--wp--preset--spacing--2-xl)"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
	<div class="wp-block-group"><!-- wp:image {"id":2180,"sizeSlug":"large","linkDestination":"none"} -->
		<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_MDRPL8PT36.jpg'; ?>" alt="<?php echo esc_attr__( 'Sample Image', 'cormorant' ); ?>" class="wp-image-2180"/></figure>
		<!-- /wp:image -->

		<!-- wp:heading {"textAlign":"center"} -->
		<h2 class="has-text-align-center">Hero header title text</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center">Torquent dolor metus vel a arcu consectetur facilisis euismod nec quam turpis lorem etiam, himenaeos cursus vehicula integer eu conubia suscipit phasellus quis tincidunt dui congue.</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"background","textColor":"primary","className":"is-style-cormorant-background-filled-square-button"} -->
			<div class="wp-block-button is-style-cormorant-background-filled-square-button"><a class="wp-block-button__link has-primary-color has-background-background-color has-text-color has-background wp-element-button">Click Left Button</a></div>
			<!-- /wp:button -->

			<!-- wp:button {"backgroundColor":"background","textColor":"primary","className":"is-style-cormorant-background-outline-square-button"} -->
			<div class="wp-block-button is-style-cormorant-background-outline-square-button"><a class="wp-block-button__link has-primary-color has-background-background-color has-text-color has-background wp-element-button">Click Right Button</a></div>
			<!-- /wp:button --></div>
		<!-- /wp:buttons --></div>
	<!-- /wp:group --></section>
<!-- /wp:group -->
