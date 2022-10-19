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
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_FOKZ3FZEKE.jpg'; ?>","id":2179,"dimRatio":90,"overlayColor":"foreground","contentPosition":"center center","style":{"spacing":{"padding":{"top":"var:preset|spacing|m","right":"var:preset|spacing|m","bottom":"var:preset|spacing|m","left":"var:preset|spacing|m"}}}} -->
<div class="wp-block-cover" style="padding-top:var(--wp--preset--spacing--m);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--m);padding-left:var(--wp--preset--spacing--m)"><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-90 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2179" alt="<?php echo esc_attr__( 'Sample Image', 'cormorant' ); ?>" src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_FOKZ3FZEKE.jpg'; ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":3,"fontSize":"3-xl"} -->
		<h3 class="has-text-align-center has-3-xl-font-size">Banner Heading</h3>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"fontSize":"s"} -->
		<p class="has-s-font-size">Dis congue dolor aliquam nulla maximus luctus consequat lacus, massa maecenas ligula ultricies id rutrum sociosqu, cursus sed hendrerit duis</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|s"}}}} -->
		<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--s)"><!-- wp:button {"backgroundColor":"background","textColor":"foreground","className":"is-style-cormorant-background-filled-square-button","fontSize":"tiny"} -->
			<div class="wp-block-button has-custom-font-size is-style-cormorant-background-filled-square-button has-tiny-font-size"><a class="wp-block-button__link has-foreground-color has-background-background-color has-text-color has-background wp-element-button"><strong>Button is here</strong></a></div>
			<!-- /wp:button -->

			<!-- wp:button {"backgroundColor":"background","textColor":"foreground","className":"is-style-cormorant-background-outline-square-button","fontSize":"tiny"} -->
			<div class="wp-block-button has-custom-font-size is-style-cormorant-background-outline-square-button has-tiny-font-size"><a class="wp-block-button__link has-foreground-color has-background-background-color has-text-color has-background wp-element-button"><strong>Button is here</strong></a></div>
			<!-- /wp:button --></div>
		<!-- /wp:buttons --></div></div>
<!-- /wp:cover -->
