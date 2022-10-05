<?php
/**
 * Title: CTA and Copyright dark
 * Slug: cormorant/footer-cta-copyright-dark
 * Categories: cormorant-footer
 * Description: CTA and Copyright styled dark
 * Block Types: core/group, core/paragraph, core/site-title, core/header, core/button
 *
 * @author Koji Kuno
 * @package cormorant
 * @since 1.0.0
 */
?>
<!-- wp:group {"tagName":"footer","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|x-small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|x-small"}}},"backgroundColor":"foreground","textColor":"background","layout":{"type":"default"},"fontSize":"tiny"} -->
<footer class="wp-block-group alignfull has-background-color has-foreground-background-color has-text-color has-background has-tiny-font-size" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group"><!-- wp:heading {"textAlign":"center"} -->
		<h2 class="has-text-align-center">Contact Us</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p>Iaculis auctor et blandit leo congue penatibus magna hac, nunc fusce faucibus platea litora quam sit phasellus ornare, elit fermentum amet nisi vel placerat torquent. Placerat arcu rhoncus litora adipiscing purus tellus viverra egestas porttitor quam conubia venenatis dapibus pharetra congue duis, suscipit dictumst hac sagittis </p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-cormorant-background-outline-square-button"} -->
			<div class="wp-block-button is-style-cormorant-background-outline-square-button"><a class="wp-block-button__link wp-element-button">Get in Touch</a></div>
			<!-- /wp:button --></div>
		<!-- /wp:buttons --></div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"5px","margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
	<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--medium)"><!-- wp:paragraph -->
		<p>©️</p>
		<!-- /wp:paragraph -->

		<!-- wp:site-title {"level":0,"isLink":false,"fontSize":"tiny"} /-->

		<!-- wp:paragraph -->
		<p>/ <a href="https://cormorant.kunokoji.com" target="_blank" rel="noreferrer noopener">Contact Us</a></p>
		<!-- /wp:paragraph --></div>
	<!-- /wp:group --></footer>
<!-- /wp:group -->
