<?php
/**
 * Title: Site Logo and Title with Menu - Contrast
 * Slug: cormorant/header-site-logo-title-menu-contrast
 * Categories: cormorant-header
 * Description: Header with Site logo and title with navigation colored contrast color
 * Keywords: cormorant
 * Block Types: core/template-part/header
 *
 * @author Koji Kuno
 * @package cormorant
 * @since 1.0.0
 */
?>
<!-- wp:group {"tagName":"header","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|s","right":"var:preset|spacing|s","bottom":"var:preset|spacing|s","left":"var:preset|spacing|s"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"backgroundColor":"base","textColor":"contrast","className":"site-header _primary","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<header class="wp-block-group alignfull site-header _primary has-contrast-color has-base-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--s);padding-right:var(--wp--preset--spacing--s);padding-bottom:var(--wp--preset--spacing--s);padding-left:var(--wp--preset--spacing--s)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
	<div class="wp-block-group"><!-- wp:site-logo {"width":50,"shouldSyncIcon":true,"className":"is-style-rounded"} /-->

		<!-- wp:site-title {"fontSize":"2-xl"} /--></div>
	<!-- /wp:group -->

	<!-- wp:navigation {"ref":1979,"textColor":"contrast","backgroundColor":"base","overlayBackgroundColor":"base","overlayTextColor":"contrast","style":{"spacing":{"blockGap":"var:preset|spacing|s"}},"fontSize":"s"} /--></header>
<!-- /wp:group -->
