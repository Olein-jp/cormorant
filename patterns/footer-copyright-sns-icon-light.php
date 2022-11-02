<?php
/**
 * Title: Copyright and SNS Icon light
 * Slug: cormorant/footer-copyright-sns-icon-light
 * Categories: cormorant-footer
 * Description: Copyright and SNS icon link colored light
 * Keywords: cormorant
 * Block Types: core/group, core/paragraph, core/site-title, core/social-links
 *
 * @author Koji Kuno
 * @package cormorant
 * @since 1.0.0
 */
?>
<!-- wp:group {"tagName":"div","align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"spacing":{"padding":{"top":"0.8rem","right":"0.8rem","bottom":"0.8rem","left":"0.8rem"}}},"backgroundColor":"background","textColor":"foreground","className":"site-footer _light","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-foreground-color has-background-background-color has-text-color has-background has-link-color" style="padding-top:0.8rem;padding-right:0.8rem;padding-bottom:0.8rem;padding-left:0.8rem"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"xs"} -->
			<p class="has-xs-font-size">©️</p>
			<!-- /wp:paragraph -->

			<!-- wp:site-title {"level":0,"isLink":false,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"xs"} /--></div>
		<!-- /wp:group -->

		<!-- wp:paragraph {"fontSize":"xs"} -->
		<p class="has-xs-font-size"><a href="<?php echo esc_url( 'https://cormorant.kunokoji.com' ); ?>" target="_blank" rel="noreferrer noopener">Privacy Policy</a> / <a href="<?php echo esc_url( 'https://cormorant.kunokoji.com' ); ?>" target="_blank" rel="noreferrer noopener">Terms of Service</a> / <a href="<?php echo esc_url( 'https://cormorant.kunokoji.com' ); ?>" target="_blank" rel="noreferrer noopener">Contact Us</a></p>
		<!-- /wp:paragraph -->

		<!-- wp:social-links {"iconColor":"background","iconColorValue":"#ffffff","iconBackgroundColor":"foreground","iconBackgroundColorValue":"#333333","openInNewTab":true,"style":{"spacing":{"blockGap":{"top":"0"}}},"layout":{"type":"flex","justifyContent":"right"}} -->
		<ul class="wp-block-social-links has-icon-color has-icon-background-color"><!-- wp:social-link {"url":"https://www.facebook.com/","service":"facebook"} /-->

			<!-- wp:social-link {"url":"https://twitter.com/","service":"twitter"} /-->

			<!-- wp:social-link {"url":"https://instagram.com/","service":"instagram"} /--></ul>
		<!-- /wp:social-links --></div>
	<!-- /wp:group --></div>
<!-- /wp:group -->
