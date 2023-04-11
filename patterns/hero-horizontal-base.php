<?php
/**
 * Title: Hero Horizontal Base
 * Slug: cormorant/hero-horizontal-base
 * Categories: cormorant-hero
 * Description: Hero layout Horizontal colored base color
 * Keywords: cormorant
 * Block Types: core/group, core/image, core/paragraph, core/buttons, core/header
 *
 * @author Koji Kuno
 * @package cormorant
 * @since 1.0.0
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|4-xl","bottom":"var:preset|spacing|4-xl"}}},"textColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-color has-text-color" style="padding-top:var(--wp--preset--spacing--4-xl);padding-bottom:var(--wp--preset--spacing--4-xl)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|large","left":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":""} -->
		<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading"><strong>Left text, Right image</strong></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>Ipsum commodo turpis luctus ante lacinia ut nullam natoque posuere, suspendisse mattis magna platea dis sagittis molestie pulvinar aliquam consequat, tempor maecenas tristique quis fermentum sed etiam tortor. Rhoncus ac conubia justo sit dui nibh cursus amet maximus dolor velit, adipiscing odio vehicula ullamcorper </p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
			<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"background","style":{"border":{"radius":"0px"}},"className":"is-style-cormorant-background-filled-square-button"} -->
				<div class="wp-block-button is-style-cormorant-background-filled-square-button"><a class="wp-block-button__link has-background-background-color has-background wp-element-button" style="border-radius:0px">Click Left Button</a></div>
				<!-- /wp:button -->

				<!-- wp:button {"backgroundColor":"background","style":{"border":{"radius":"0px"}},"className":"is-style-cormorant-background-outline-square-button"} -->
				<div class="wp-block-button is-style-cormorant-background-outline-square-button"><a class="wp-block-button__link has-background-background-color has-background wp-element-button" style="border-radius:0px">Click Right Button</a></div>
				<!-- /wp:button --></div>
			<!-- /wp:buttons --></div>
		<!-- /wp:column -->

		<!-- wp:column {"width":""} -->
		<div class="wp-block-column"><!-- wp:image {"id":2180,"sizeSlug":"large","linkDestination":"none"} -->
			<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_MDRPL8PT36.jpg'; ?>" alt="<?php echo esc_attr__( 'Sample Image', 'cormorant' ); ?>" class="wp-image-2180"/></figure>
			<!-- /wp:image --></div>
		<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
<!-- /wp:group -->