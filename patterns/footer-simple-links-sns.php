<?php
/**
 * Title: Simple Links and SNS
 * Slug: cormorant/footer/simple-links-sns
 * Categories: cormorant-footer
 * Description: Show copyrights, links, and SNS
 * Keywords: cormorant
 * Block Types: core/template-part/footer
 *
 * @author Koji Kuno
 * @package cormorant
 * @since 3.0.0
 */
?>
<!-- wp:group {"tagName":"footer","align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"padding":{"top":"0.8rem","right":"0.8rem","bottom":"0.8rem","left":"0.8rem"}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"}} -->
<footer class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="padding-top:0.8rem;padding-right:0.8rem;padding-bottom:0.8rem;padding-left:0.8rem"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap"},"fontSize":"xs"} -->
		<div class="wp-block-group has-xs-font-size"><!-- wp:paragraph {"fontSize":"xs"} -->
			<p class="has-xs-font-size">©️</p>
			<!-- /wp:paragraph -->

			<!-- wp:site-title {"level":0,"isLink":false,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"xs"} /--></div>
		<!-- /wp:group -->

		<!-- wp:paragraph {"align":"center","fontSize":"xs"} -->
		<p class="has-text-align-center has-xs-font-size"><a href="#" target="_blank" rel="noreferrer noopener">Privacy Policy</a> / <a href="#" target="_blank" rel="noreferrer noopener">Terms of Service</a> / <a href="#" target="_blank" rel="noreferrer noopener">Contact Us</a></p>
		<!-- /wp:paragraph -->

		<!-- wp:social-links {"iconColor":"contrast","iconColorValue":"#ffffff","iconBackgroundColor":"base","iconBackgroundColorValue":"#333333","openInNewTab":true,"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|s"}}},"layout":{"type":"flex","justifyContent":"right","orientation":"horizontal"}} -->
		<ul class="wp-block-social-links has-icon-color has-icon-background-color"><!-- wp:social-link {"url":"https://www.facebook.com/","service":"facebook"} /-->

			<!-- wp:social-link {"url":"https://twitter.com/","service":"twitter"} /-->

			<!-- wp:social-link {"url":"https://instagram.com/","service":"instagram"} /--></ul>
		<!-- /wp:social-links --></div>
	<!-- /wp:group --></footer>
<!-- /wp:group -->
