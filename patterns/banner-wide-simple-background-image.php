<?php
/**
 * Title: Wide Single Background Image
 * Slug: cormorant/banner-wide-simple-background-image
 * Categories: cormorant-banner
 * Description: Wide simple banner has background image
 * Keywords: cormorant
 * Block Types: core/group, core/paragraph, core/buttons, core/heading, core/cover
 *
 * @author Koji Kuno
 * @package cormorant
 * @since 1.0.0
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_FOKZ3FZEKE.jpg'; ?>","id":2179,"dimRatio":90,"overlayColor":"foreground","focalPoint":{"x":0.27,"y":0.43},"minHeight":331,"minHeightUnit":"px","contentPosition":"center center","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|X-large","right":"0","bottom":"var:preset|spacing|X-large","left":"0"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--x-large);padding-right:0;padding-bottom:var(--wp--preset--spacing--x-large);padding-left:0;min-height:331px"><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-90 has-background-dim"></span><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_FOKZ3FZEKE.jpg'; ?>" alt="<?php echo esc_attr__( 'Sample Image', 'cormorant' ); ?>" class="wp-block-cover__image-background wp-image-2179" style="object-position:27% 43%" data-object-fit="cover" data-object-position="27% 43%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
			<p style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">Platea mattis primis consectetur laoreet eget leo</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"var:preset|spacing|x-small","left":"0"}},"typography":{"lineHeight":"1.2"}},"fontSize":"huge"} -->
			<p class="has-text-align-left has-huge-font-size" style="margin-top:0;margin-right:0;margin-bottom:var(--wp--preset--spacing--x-small);margin-left:0;line-height:1.2">Banner Heading</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"fontSize":"small"} -->
			<p class="has-small-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">Dignissim vestibulum lobortis ante tincidunt elit gravida lacinia orci torquent iaculis ultrices nulla, est cubilia bibendum arcu venenatis leo ad varius suspendisse mus. Ornare ultrices volutpat montes bibendum diam consequat porta fringilla </p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small"},"blockGap":"0"}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--x-small)"><!-- wp:button {"className":"is-style-cormorant-background-filled-square-button","fontSize":"tiny"} -->
				<div class="wp-block-button has-custom-font-size is-style-cormorant-background-filled-square-button has-tiny-font-size"><a class="wp-block-button__link wp-element-button">Button is here</a></div>
				<!-- /wp:button -->

				<!-- wp:button {"className":"is-style-cormorant-background-outline-square-button","fontSize":"tiny"} -->
				<div class="wp-block-button has-custom-font-size is-style-cormorant-background-outline-square-button has-tiny-font-size"><a class="wp-block-button__link wp-element-button">Button is here</a></div>
				<!-- /wp:button --></div>
			<!-- /wp:buttons --></div>
		<!-- /wp:group --></div></div>
<!-- /wp:cover -->
