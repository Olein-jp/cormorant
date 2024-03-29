<?php
/**
 * Title: Standard Header
 * Slug: cormorant/header/standard
 * Categories: cormorant-header
 * Description: Standard header with Site logo and title with navigation
 * Keywords: cormorant
 * Block Types: core/template-part/header
 *
 * @author Koji Kuno
 * @package cormorant
 * @since 1.0.0
 */
?>
<!-- wp:group {"tagName":"header","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|s","right":"var:preset|spacing|s","bottom":"var:preset|spacing|s","left":"var:preset|spacing|s"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<header class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--s);padding-right:var(--wp--preset--spacing--s);padding-bottom:var(--wp--preset--spacing--s);padding-left:var(--wp--preset--spacing--s)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
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
</header>
<!-- /wp:group -->
