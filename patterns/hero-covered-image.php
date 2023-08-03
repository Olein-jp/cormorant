<?php
/**
 * Title: Hero Covered Image
 * Slug: cormorant/hero-covered-image
 * Categories: cormorant-hero
 * Description: Hero Covered Image
 * Keywords: cormorant
 * Block Types: core/group, core/cover, core/paragraph
 *
 * @author Koji Kuno
 * @package cormorant
 * @since 1.0.0
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() . '/assets/images/cormorant-sample-08.jpg' ); ?>","id":3197,"dimRatio":50,"overlayColor":"base","minHeight":50,"minHeightUnit":"vh","style":{"spacing":{"padding":{"top":"var:preset|spacing|4-xl","bottom":"var:preset|spacing|4-xl","left":"var:preset|spacing|xs","right":"var:preset|spacing|xs"}}},"textColor":"contrast","layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-contrast-color has-text-color" style="padding-top:var(--wp--preset--spacing--4-xl);padding-right:var(--wp--preset--spacing--xs);padding-bottom:var(--wp--preset--spacing--4-xl);padding-left:var(--wp--preset--spacing--xs);min-height:50vh"><span aria-hidden="true" class="wp-block-cover__background has-base-background-color has-background-dim"></span><img class="wp-block-cover__image-background wp-image-3197" alt="WordPress 100%GPL Block Theme Cormorant Sample Image 08" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/cormorant-sample-08.jpg' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","fontSize":"4-xl"} -->
		<h2 class="wp-block-heading has-text-align-center has-4-xl-font-size"><strong>WordPress Block Theme<br>Cormorant</strong></h2>
		<!-- /wp:heading -->

		<!-- wp:separator {"backgroundColor":"contrast","className":"is-style-wide"} -->
		<hr class="wp-block-separator has-text-color has-contrast-color has-alpha-channel-opacity has-contrast-background-color has-background is-style-wide"/>
		<!-- /wp:separator -->

		<!-- wp:paragraph {"align":"center","fontSize":"l"} -->
		<p class="has-text-align-center has-l-font-size"><strong><?php echo esc_attr__( 'Simple, Customizable, Flexible, it\'s mean COMFORTABLE.', 'cormorant' ); ?></strong></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p><?php echo esc_attr__( 'WordPress Block Theme Cormorant has been thoughtfully designed to allow you to enjoy as much as possible the pleasing spacing design, fluid typographic design and other great features that WordPress Core has to offer.', 'cormorant' ); ?></p>
		<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->