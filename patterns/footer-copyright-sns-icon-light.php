<?php
/**
 * Title: Copyright and SNS Icon light
 * Slug: cormorant/footer-copyright-sns-icon-light
 * Categories: cormorant-footer
 * Description: Copyright and SNS icon link styled light
 * Block Types: core/group, core/paragraph, core/site-title, core/social-links
 *
 * @author Koji Kuno
 * @package cormorant
 * @since 1.0.0
 */
?>
<!-- wp:group {"tagName":"footer","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","right":"var:preset|spacing|x-small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|x-small"}}},"backgroundColor":"background","textColor":"foreground","layout":{"type":"default"},"fontSize":"tiny"} -->
<footer class="wp-block-group alignfull has-foreground-color has-background-background-color has-text-color has-background has-tiny-font-size" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group"><!-- wp:paragraph -->
			<p>©️</p>
			<!-- /wp:paragraph -->

			<!-- wp:site-title {"level":0,"isLink":false,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"tiny"} /--></div>
		<!-- /wp:group -->

		<!-- wp:paragraph -->
		<p><a href="https://cormorant.kunokoji.com" target="_blank" rel="noreferrer noopener">Privacy Policy</a> / <a href="https://cormorant.kunokoji.com" target="_blank" rel="noreferrer noopener">Terms of Service</a> / <a href="https://cormorant.kunokoji.com" target="_blank" rel="noreferrer noopener">Contact Us</a></p>
		<!-- /wp:paragraph -->

		<!-- wp:social-links {"iconColor":"background","iconColorValue":"#ffffff","iconBackgroundColor":"foreground","iconBackgroundColorValue":"#333333","openInNewTab":true,"style":{"spacing":{"blockGap":{"top":"0"}}},"layout":{"type":"flex","justifyContent":"right"}} -->
		<ul class="wp-block-social-links has-icon-color has-icon-background-color"><!-- wp:social-link {"url":"https://www.facebook.com/","service":"facebook"} /-->

			<!-- wp:social-link {"url":"https://twitter.com/","service":"twitter"} /-->

			<!-- wp:social-link {"url":"https://instagram.com/","service":"instagram"} /--></ul>
		<!-- /wp:social-links --></div>
	<!-- /wp:group --></footer>
<!-- /wp:group -->
