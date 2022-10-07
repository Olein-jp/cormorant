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
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_FOKZ3FZEKE.jpg'; ?>","id":2179,"dimRatio":90,"overlayColor":"foreground","minHeight":331,"minHeightUnit":"px","contentPosition":"center center","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-cover" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium);min-height:331px"><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-90 has-background-dim"></span><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_FOKZ3FZEKE.jpg'; ?>" alt="<?php echo esc_attr__( 'Sample Image', 'cormorant' ); ?>" class="wp-block-cover__image-background wp-image-2179" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","fontSize":"huge"} -->
		<p class="has-text-align-center has-huge-font-size">Banner Heading</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"fontSize":"small"} -->
		<p class="has-small-font-size">Dis congue dolor aliquam nulla maximus luctus consequat lacus, massa maecenas ligula ultricies id rutrum sociosqu, cursus sed hendrerit duis</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small"}}}} -->
		<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--x-small)"><!-- wp:button {"className":"is-style-cormorant-background-filled-square-button","fontSize":"tiny"} -->
			<div class="wp-block-button has-custom-font-size is-style-cormorant-background-filled-square-button has-tiny-font-size"><a class="wp-block-button__link wp-element-button">Button is here</a></div>
			<!-- /wp:button -->

			<!-- wp:button {"className":"is-style-cormorant-background-outline-square-button","fontSize":"tiny"} -->
			<div class="wp-block-button has-custom-font-size is-style-cormorant-background-outline-square-button has-tiny-font-size"><a class="wp-block-button__link wp-element-button">Button is here</a></div>
			<!-- /wp:button --></div>
		<!-- /wp:buttons --></div></div>
<!-- /wp:cover -->
