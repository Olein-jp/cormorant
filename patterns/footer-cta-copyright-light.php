<?php
/**
 * Title: CTA and Copyright light
 * Slug: cormorant/footer-cta-copyright-light
 * Categories: cormorant-footer
 * Description: CTA and Copyright colored light
 * Keywords: cormorant
 * Block Types: core/group, core/paragraph, core/site-title, core/header, core/button
 *
 * @author Koji Kuno
 * @package cormorant
 * @since 1.0.0
 */
?>
<!-- wp:group {"tagName":"footer","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|x-small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|x-small"}}},"backgroundColor":"background","textColor":"foreground","layout":{"type":"default"},"fontSize":"tiny"} -->
<footer class="wp-block-group alignfull has-foreground-color has-background-background-color has-text-color has-background has-tiny-font-size" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|l","right":"0","bottom":"var:preset|spacing|s","left":"0"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--l);padding-right:0;padding-bottom:var(--wp--preset--spacing--s);padding-left:0"><!-- wp:heading {"textAlign":"center"} -->
		<h2 class="has-text-align-center">Contact Us</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p>Iaculis auctor et blandit leo congue penatibus magna hac, nunc fusce faucibus platea litora quam sit phasellus ornare, elit fermentum amet nisi vel placerat torquent. Placerat arcu rhoncus litora adipiscing purus tellus viverra egestas porttitor quam conubia venenatis dapibus pharetra congue duis, suscipit dictumst hac sagittis </p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"foreground","className":"is-style-cormorant-foreground-outline-square-button"} -->
			<div class="wp-block-button is-style-cormorant-foreground-outline-square-button"><a class="wp-block-button__link has-foreground-background-color has-background wp-element-button">Get in Touch</a></div>
			<!-- /wp:button --></div>
		<!-- /wp:buttons --></div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"5px","margin":{"top":"var:preset|spacing|medium"},"padding":{"top":"var:preset|spacing|s","right":"var:preset|spacing|s","bottom":"var:preset|spacing|s","left":"var:preset|spacing|s"}},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"},"fontSize":"xs"} -->
	<div class="wp-block-group has-link-color has-xs-font-size" style="margin-top:var(--wp--preset--spacing--medium);padding-top:var(--wp--preset--spacing--s);padding-right:var(--wp--preset--spacing--s);padding-bottom:var(--wp--preset--spacing--s);padding-left:var(--wp--preset--spacing--s)"><!-- wp:paragraph -->
		<p>©️</p>
		<!-- /wp:paragraph -->

		<!-- wp:site-title {"level":0,"isLink":false,"fontSize":"xs"} /-->

		<!-- wp:paragraph -->
		<p>/ <a href="<?php echo esc_url( 'https://cormorant.kunokoji.com' ); ?>" target="_blank" rel="noreferrer noopener">Contact Us</a></p>
		<!-- /wp:paragraph --></div>
	<!-- /wp:group --></footer>
<!-- /wp:group -->
