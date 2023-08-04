<?php
/**
 * Title: Standard Header with Button
 * Slug: cormorant/header/standard-button
 * Categories: cormorant-header
 * Description: Standard header with button
 * Keywords: cormorant
 * Block Types: core/template-part/header
 *
 * @author Koji Kuno
 * @package cormorant
 * @since 3.0.0
 */
?>
<!-- wp:group {"tagName":"header","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|s","right":"var:preset|spacing|s","bottom":"var:preset|spacing|s","left":"var:preset|spacing|s"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<header class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--s);padding-right:var(--wp--preset--spacing--s);padding-bottom:var(--wp--preset--spacing--s);padding-left:var(--wp--preset--spacing--s)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xs"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
	<div class="wp-block-group"><!-- wp:site-logo {"shouldSyncIcon":true,"className":"is-style-rounded"} /-->

		<!-- wp:site-title {"style":{"typography":{"lineHeight":"1"}}} /--></div>
	<!-- /wp:group -->

	<!-- wp:navigation {"layout":{"type":"flex","orientation":"horizontal"}} -->
		<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Home', 'cormorant' ); ?>","url":"#"} /-->
		<!-- wp:navigation-link {"label":"<?php esc_html_e( 'About', 'cormorant' ); ?>","url":"#"} /-->
		<!-- wp:navigation-submenu {"label":"<?php esc_html_e( 'Services', 'cormorant' ); ?>","url":"#"} -->
			<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Service A', 'cormorant' ); ?>","url":"#"} /-->
			<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Service B', 'cormorant' ); ?>","url":"#"} /-->
			<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Service C', 'cormorant' ); ?>","url":"#"} /-->
		<!-- /wp:navigation-submenu -->
		<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Blog', 'cormorant' ); ?>","url":"#"} /-->
		<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Contact', 'cormorant' ); ?>","url":"#"} /-->
	<!-- /wp:navigation -->

	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"left":"var:preset|spacing|m","right":"var:preset|spacing|m","top":"var:preset|spacing|xs","bottom":"var:preset|spacing|xs"}}},"className":"is-style-cormorant-filled-square-button-base u-sm-hidden","fontSize":"xs"} -->
		<div class="wp-block-button has-custom-font-size is-style-cormorant-filled-square-button-base u-sm-hidden has-xs-font-size"><a class="wp-block-button__link wp-element-button" style="padding-top:var(--wp--preset--spacing--xs);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--xs);padding-left:var(--wp--preset--spacing--m)">Contact us</a></div>
		<!-- /wp:button --></div>
	<!-- /wp:buttons --></header>
<!-- /wp:group -->