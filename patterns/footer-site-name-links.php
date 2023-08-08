<?php
/**
 * Title: Site Name and Links
 * Slug: cormorant/footer/site-name-links
 * Categories: cormorant-footer
 * Description: Show site name and links
 * Keywords: cormorant
 * Block Types: core/template-part/footer
 *
 * @author Koji Kuno
 * @package cormorant
 * @since 3.0.0
 */
?>
<!-- wp:group {"tagName":"footer","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","right":"0","bottom":"0","left":"0"},"blockGap":"0"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"}} -->
<footer class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--xl);padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"100px"}}}} -->
	<div class="wp-block-columns alignwide"><!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%"><!-- wp:site-title {"isLink":false} /-->

			<!-- wp:site-tagline /-->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
			<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"background","style":{"border":{"radius":"0px"}},"className":"is-style-cormorant-background-outline-square-button is-style-cormorant-outline-square-button-base is-style-cormorant-filled-square-button-base","fontSize":"s"} -->
				<div class="wp-block-button has-custom-font-size is-style-cormorant-background-outline-square-button is-style-cormorant-outline-square-button-base is-style-cormorant-filled-square-button-base has-s-font-size"><a class="wp-block-button__link has-background-background-color has-background wp-element-button" href="#" style="border-radius:0px">Chat with us</a></div>
				<!-- /wp:button --></div>
			<!-- /wp:buttons --></div>
		<!-- /wp:column -->

		<!-- wp:column {"layout":{"type":"default"}} -->
		<div class="wp-block-column"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
			<div class="wp-block-columns"><!-- wp:column -->
				<div class="wp-block-column"><!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|s"}}},"fontSize":"m"} -->
					<h5 class="wp-block-heading has-m-font-size" style="margin-bottom:var(--wp--preset--spacing--s)">About Us</h5>
					<!-- /wp:heading -->

					<!-- wp:list {"style":{"spacing":{"padding":{"left":"var:preset|spacing|xs"}}},"fontSize":"xs"} -->
					<ul class="has-xs-font-size" style="padding-left:var(--wp--preset--spacing--xs)"><!-- wp:list-item -->
						<li><?php esc_html_e( 'Menu Item', 'cormorant' ); ?></li>
						<!-- /wp:list-item -->

						<!-- wp:list-item -->
						<li><?php esc_html_e( 'Menu Item', 'cormorant' ); ?></li>
						<!-- /wp:list-item -->

						<!-- wp:list-item -->
						<li><?php esc_html_e( 'Menu Item', 'cormorant' ); ?></li>
						<!-- /wp:list-item -->

						<!-- wp:list-item -->
						<li><?php esc_html_e( 'Menu Item', 'cormorant' ); ?></li>
						<!-- /wp:list-item --></ul>
					<!-- /wp:list --></div>
				<!-- /wp:column -->

				<!-- wp:column -->
				<div class="wp-block-column"><!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|s"}}},"fontSize":"m"} -->
					<h5 class="wp-block-heading has-m-font-size" style="margin-bottom:var(--wp--preset--spacing--s)">Services</h5>
					<!-- /wp:heading -->

					<!-- wp:list {"style":{"spacing":{"padding":{"left":"var:preset|spacing|xs"}}},"fontSize":"xs"} -->
					<ul class="has-xs-font-size" style="padding-left:var(--wp--preset--spacing--xs)"><!-- wp:list-item -->
						<li><?php esc_html_e( 'Menu Item', 'cormorant' ); ?></li>
						<!-- /wp:list-item -->

						<!-- wp:list-item -->
						<li><?php esc_html_e( 'Menu Item', 'cormorant' ); ?></li>
						<!-- /wp:list-item -->

						<!-- wp:list-item -->
						<li><?php esc_html_e( 'Menu Item', 'cormorant' ); ?></li>
						<!-- /wp:list-item -->

						<!-- wp:list-item -->
						<li><?php esc_html_e( 'Menu Item', 'cormorant' ); ?></li>
						<!-- /wp:list-item --></ul>
					<!-- /wp:list --></div>
				<!-- /wp:column -->

				<!-- wp:column -->
				<div class="wp-block-column"><!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|s"}}},"fontSize":"m"} -->
					<h5 class="wp-block-heading has-m-font-size" style="margin-bottom:var(--wp--preset--spacing--s)">Contact</h5>
					<!-- /wp:heading -->

					<!-- wp:list {"style":{"spacing":{"padding":{"left":"var:preset|spacing|xs"}}},"fontSize":"xs"} -->
					<ul class="has-xs-font-size" style="padding-left:var(--wp--preset--spacing--xs)"><!-- wp:list-item -->
						<li><?php esc_html_e( 'Menu Item', 'cormorant' ); ?></li>
						<!-- /wp:list-item -->

						<!-- wp:list-item -->
						<li><?php esc_html_e( 'Menu Item', 'cormorant' ); ?></li>
						<!-- /wp:list-item -->

						<!-- wp:list-item -->
						<li><?php esc_html_e( 'Menu Item', 'cormorant' ); ?></li>
						<!-- /wp:list-item -->

						<!-- wp:list-item -->
						<li><?php esc_html_e( 'Menu Item', 'cormorant' ); ?></li>
						<!-- /wp:list-item --></ul>
					<!-- /wp:list --></div>
				<!-- /wp:column --></div>
			<!-- /wp:columns --></div>
		<!-- /wp:column --></div>
	<!-- /wp:columns -->

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|s","right":"var:preset|spacing|s","bottom":"var:preset|spacing|s","left":"var:preset|spacing|s"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"},"fontSize":"tiny"} -->
	<div class="wp-block-group has-tiny-font-size" style="padding-top:var(--wp--preset--spacing--s);padding-right:var(--wp--preset--spacing--s);padding-bottom:var(--wp--preset--spacing--s);padding-left:var(--wp--preset--spacing--s)"><!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
		<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"xs"} -->
			<p class="has-xs-font-size">©️</p>
			<!-- /wp:paragraph -->

			<!-- wp:site-title {"level":0,"isLink":false,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"xs"} /--></div>
		<!-- /wp:group --></div>
	<!-- /wp:group --></footer>
<!-- /wp:group -->
