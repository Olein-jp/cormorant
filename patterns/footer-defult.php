<?php
/**
 * Title: Footer Default
 * Slug: cormorant/footer-default
 * Categories: cormorant-footer
 * Description: Default footer template parts
 * Keywords: cormorant
 * Block Types: core/group, core/paragraph, core/site-title
 *
 * @author Koji Kuno
 * @package cormorant
 * @since 1.0.0
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|s","right":"var:preset|spacing|s","bottom":"var:preset|spacing|s","left":"var:preset|spacing|s"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","layout":{"type":"default"},"fontSize":"xs"} -->
<div class="wp-block-group alignfull has-background-color has-text-color has-link-color has-xs-font-size" style="padding-top:var(--wp--preset--spacing--s);padding-right:var(--wp--preset--spacing--s);padding-bottom:var(--wp--preset--spacing--s);padding-left:var(--wp--preset--spacing--s)"><!-- wp:group {"style":{"spacing":{"blockGap":"3px"}},"layout":{"type":"flex","flexWrap":"nowrap","orientation":"horizontal","justifyContent":"center"}} -->
	<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"xs"} -->
		<p class="has-xs-font-size">Copyright</p>
		<!-- /wp:paragraph -->

		<!-- wp:site-title {"level":0,"isLink":false,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"xs"} /-->

		<!-- wp:paragraph {"fontSize":"xs"} -->
		<p class="has-xs-font-size">. </p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"fontSize":"xs"} -->
		<p class="has-xs-font-size">Powered by <a href="https://wordpress.org">WordPress</a>.</p>
		<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
<!-- /wp:group -->