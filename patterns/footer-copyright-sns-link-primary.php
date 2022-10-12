<?php
/**
 * Title: Copyright and SNS Links Primary
 * Slug: cormorant/footer-copyright-sns-link-primary
 * Categories: cormorant-footer
 * Description: Copyright and SNS text link colored primary
 * Keywords: cormorant
 * Block Types: core/group, core/paragraph, core/site-title
 *
 * @author Koji Kuno
 * @package cormorant
 * @since 1.0.0
 */
?>
<!-- wp:group {"tagName":"footer","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|s","right":"var:preset|spacing|s","bottom":"var:preset|spacing|s","left":"var:preset|spacing|s"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"backgroundColor":"primary","textColor":"background","layout":{"type":"default"},"fontSize":"xs"} -->
<footer class="wp-block-group alignfull has-background-color has-primary-background-color has-text-color has-background has-link-color has-xs-font-size" style="padding-top:var(--wp--preset--spacing--s);padding-right:var(--wp--preset--spacing--s);padding-bottom:var(--wp--preset--spacing--s);padding-left:var(--wp--preset--spacing--s)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"xs"} -->
			<p class="has-xs-font-size">©️</p>
			<!-- /wp:paragraph -->

			<!-- wp:site-title {"level":0,"isLink":false,"fontSize":"xs"} /--></div>
		<!-- /wp:group -->

		<!-- wp:paragraph {"fontSize":"xs"} -->
		<p class="has-xs-font-size"><a href="https://www.facebook.com/" target="_blank" rel="noreferrer noopener">Facebook</a>&nbsp;·&nbsp;<a href="https://twitter.com/" target="_blank" rel="noreferrer noopener">Twitter</a>&nbsp;·&nbsp;<a href="https://instagram.com/" target="_blank" rel="noreferrer noopener">Instagram</a></p>
		<!-- /wp:paragraph --></div>
	<!-- /wp:group --></footer>
<!-- /wp:group -->