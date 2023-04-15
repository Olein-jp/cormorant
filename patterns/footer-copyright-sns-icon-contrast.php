<?php
/**
 * Title: Copyright and SNS Icon Contrast
 * Slug: cormorant/footer-copyright-sns-icon-contrast
 * Categories: cormorant-footer
 * Description: Copyright and SNS icon link colored contrast color
 * Keywords: cormorant
 * Block Types: core/template-part/footer
 *
 * @author Koji Kuno
 * @package cormorant
 * @since 1.0.0
 */
?>
<!-- wp:group {"tagName":"footer","align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"spacing":{"padding":{"top":"0.8rem","right":"0.8rem","bottom":"0.8rem","left":"0.8rem"}}},"backgroundColor":"base","textColor":"contrast","layout":{"type":"constrained"}} -->
<footer class="wp-block-group alignfull has-contrast-color has-base-background-color has-text-color has-background has-link-color" style="padding-top:0.8rem;padding-right:0.8rem;padding-bottom:0.8rem;padding-left:0.8rem"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontSize":"12px"}}} -->
			<p style="font-size:12px">©️</p>
			<!-- /wp:paragraph -->

			<!-- wp:site-title {"level":0,"isLink":false,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","fontSize":"12px"}}} /--></div>
		<!-- /wp:group -->

		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"12px"}}} -->
		<p class="has-text-align-center" style="font-size:12px"><a href="https://cormorant.kunokoji.com" target="_blank" rel="noreferrer noopener">Privacy Policy</a> / <a href="https://cormorant.kunokoji.com" target="_blank" rel="noreferrer noopener">Terms of Service</a> / <a href="https://cormorant.kunokoji.com" target="_blank" rel="noreferrer noopener">Contact Us</a></p>
		<!-- /wp:paragraph -->

		<!-- wp:social-links {"iconColor":"base","iconColorValue":"#333333","iconBackgroundColor":"contrast","iconBackgroundColorValue":"#ffffff","openInNewTab":true,"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|s"}}},"layout":{"type":"flex","justifyContent":"right","orientation":"horizontal"}} -->
		<ul class="wp-block-social-links has-icon-color has-icon-background-color"><!-- wp:social-link {"url":"https://www.facebook.com/","service":"facebook"} /-->

			<!-- wp:social-link {"url":"https://twitter.com/","service":"twitter"} /-->

			<!-- wp:social-link {"url":"https://instagram.com/","service":"instagram"} /--></ul>
		<!-- /wp:social-links --></div>
	<!-- /wp:group --></footer>
<!-- /wp:group -->
