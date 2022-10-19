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
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_FOKZ3FZEKE.jpg'; ?>","id":2179,"dimRatio":90,"overlayColor":"foreground","focalPoint":{"x":0.27,"y":0.43},"contentPosition":"center center","align":"full"} -->
<div class="wp-block-cover alignfull"><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-90 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2179" alt="<?php echo esc_attr__( 'Sample Image', 'cormorant' ); ?>" src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_FOKZ3FZEKE.jpg'; ?>" style="object-position:27% 43%" data-object-fit="cover" data-object-position="27% 43%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"fontSize":"xs"} -->
			<p class="has-xs-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">Platea mattis primis consectetur laoreet eget leo</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"textAlign":"left","level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
			<h3 class="has-text-align-left" style="margin-top:0;margin-bottom:0">Banner Heading</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"fontSize":"s"} -->
			<p class="has-s-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">Dignissim vestibulum lobortis ante tincidunt elit gravida lacinia orci torquent iaculis ultrices nulla, est cubilia bibendum arcu venenatis leo ad varius suspendisse mus. Ornare ultrices volutpat montes bibendum diam consequat porta fringilla </p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"background","textColor":"foreground","className":"is-style-cormorant-background-filled-square-button","fontSize":"tiny"} -->
				<div class="wp-block-button has-custom-font-size is-style-cormorant-background-filled-square-button has-tiny-font-size"><a class="wp-block-button__link has-foreground-color has-background-background-color has-text-color has-background wp-element-button"><strong>Button is here</strong></a></div>
				<!-- /wp:button -->

				<!-- wp:button {"backgroundColor":"background","textColor":"foreground","className":"is-style-cormorant-background-outline-square-button","fontSize":"tiny"} -->
				<div class="wp-block-button has-custom-font-size is-style-cormorant-background-outline-square-button has-tiny-font-size"><a class="wp-block-button__link has-foreground-color has-background-background-color has-text-color has-background wp-element-button"><strong>Button is here</strong></a></div>
				<!-- /wp:button --></div>
			<!-- /wp:buttons --></div>
		<!-- /wp:group --></div></div>
<!-- /wp:cover -->
