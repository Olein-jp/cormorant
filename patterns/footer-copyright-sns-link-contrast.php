<?php
/**
 * Title: Copyright and SNS Links Contrast
 * Slug: cormorant/footer-copyright-sns-link-contrast
 * Categories: cormorant-footer
 * Description: Copyright and SNS text link colored contrast color
 * Keywords: cormorant
 * Block Types: core/template-part/footer
 *
 * @author Koji Kuno
 * @package cormorant
 * @since 1.0.0
 */
?>
<!-- wp:group {"tagName":"footer","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|s","right":"var:preset|spacing|s","bottom":"var:preset|spacing|s","left":"var:preset|spacing|s"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"backgroundColor":"base","textColor":"contrast","layout":{"type":"default"},"fontSize":"xs"} -->
<footer class="wp-block-group alignfull has-contrast-color has-base-background-color has-text-color has-background has-link-color has-xs-font-size" style="padding-top:var(--wp--preset--spacing--s);padding-right:var(--wp--preset--spacing--s);padding-bottom:var(--wp--preset--spacing--s);padding-left:var(--wp--preset--spacing--s)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|l"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
	<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"5px"},"typography":{"fontSize":"12px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group" style="font-size:12px"><!-- wp:paragraph {"style":{"typography":{"fontSize":"12px"}}} -->
			<p style="font-size:12px">©️</p>
			<!-- /wp:paragraph -->

			<!-- wp:site-title {"level":0,"isLink":false,"style":{"typography":{"fontSize":"12px","fontStyle":"normal","fontWeight":"400"}}} /--></div>
		<!-- /wp:group -->

		<!-- wp:paragraph {"align":"right","style":{"typography":{"fontSize":"12px"}}} -->
		<p class="has-text-align-right" style="font-size:12px"><a href="https://www.facebook.com/" target="_blank" rel="noreferrer noopener">Facebook</a>&nbsp;·&nbsp;<a href="https://twitter.com/" target="_blank" rel="noreferrer noopener">Twitter</a>&nbsp;·&nbsp;<a href="https://instagram.com/" target="_blank" rel="noreferrer noopener">Instagram</a></p>
		<!-- /wp:paragraph --></div>
	<!-- /wp:group --></footer>
<!-- /wp:group -->
