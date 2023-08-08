<?php
/**
 * Title: 2 Row Standard Header
 * Slug: cormorant/header/2-row-standard
 * Categories: cormorant-header
 * Description: 2 row standard header with Site logo and title with navigation
 * Keywords: cormorant
 * Block Types: core/template-part/header
 *
 * @author Koji Kuno
 * @package cormorant
 * @since 3.0.0
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|m","right":"var:preset|spacing|s","bottom":"var:preset|spacing|m","left":"var:preset|spacing|s"}}},"backgroundColor":"contrast","textColor":"base","className":"site-header _primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull site-header _primary has-base-color has-contrast-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--m);padding-right:var(--wp--preset--spacing--s);padding-bottom:var(--wp--preset--spacing--m);padding-left:var(--wp--preset--spacing--s)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|m"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
	<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xs"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
		<div class="wp-block-group"><!-- wp:site-logo {"className":"is-style-rounded"} /-->

			<!-- wp:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"fontSize":"xl"} /--></div>
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
		<!-- /wp:navigation --></div>
	<!-- /wp:group --></div>
<!-- /wp:group -->
