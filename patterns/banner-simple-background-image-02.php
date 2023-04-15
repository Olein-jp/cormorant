<?php
/**
 * Title: Single Background Image 2
 * Slug: cormorant/banner-simple-background-image-02
 * Categories: cormorant-banner
 * Description: Simple banner has background image
 * Keywords: cormorant
 * Block Types: core/group, core/paragraph, core/buttons, core/heading, core/cover
 *
 * @author Koji Kuno
 * @package cormorant
 * @since 1.0.0
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_FOKZ3FZEKE.jpg'; ?>","id":2179,"dimRatio":90,"overlayColor":"base","contentPosition":"center center","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","right":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl","left":"var:preset|spacing|xl"}}}} -->
<div class="wp-block-cover" style="padding-top:var(--wp--preset--spacing--xl);padding-right:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl);padding-left:var(--wp--preset--spacing--xl)"><span aria-hidden="true" class="wp-block-cover__background has-base-background-color has-background-dim-90 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2179" alt="<?php echo esc_attr__( 'Sample Image', 'cormorant' ); ?>" src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_FOKZ3FZEKE.jpg'; ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|m"}}},"fontSize":"3-xl"} -->
		<h3 class="wp-block-heading has-text-align-center has-3-xl-font-size" style="margin-bottom:var(--wp--preset--spacing--m)">Banner Heading</h3>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|m"}}},"fontSize":"s"} -->
		<p class="has-text-align-center has-s-font-size" style="margin-bottom:var(--wp--preset--spacing--m)">Dis congue dolor aliquam nulla maximus luctus consequat lacus, massa maecenas ligula ultricies id rutrum sociosqu, cursus sed hendrerit duis</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|s"}}}} -->
		<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--s)"><!-- wp:button {"textColor":"foreground","style":{"border":{"radius":"0px"}},"className":"is-style-cormorant-background-filled-square-button is-style-outline","fontSize":"tiny"} -->
			<div class="wp-block-button has-custom-font-size is-style-cormorant-background-filled-square-button is-style-outline has-tiny-font-size"><a class="wp-block-button__link has-foreground-color has-text-color wp-element-button" style="border-radius:0px"><strong>Button is here</strong></a></div>
			<!-- /wp:button -->

			<!-- wp:button {"textColor":"foreground","style":{"border":{"radius":"0px"}},"className":"is-style-cormorant-background-filled-square-button is-style-outline","fontSize":"tiny"} -->
			<div class="wp-block-button has-custom-font-size is-style-cormorant-background-filled-square-button is-style-outline has-tiny-font-size"><a class="wp-block-button__link has-foreground-color has-text-color wp-element-button" style="border-radius:0px"><strong>Button is here</strong></a></div>
			<!-- /wp:button --></div>
		<!-- /wp:buttons --></div></div>
<!-- /wp:cover -->
