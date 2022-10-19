<?php
/**
 * Title: Site Logo and Title with Menu - Primary
 * Slug: cormorant/header-site-logo-title-menu-primary
 * Categories: cormorant-header
 * Description: Header with Site logo and title with navigation
 * Keywords: cormorant
 * Block Types: core/group, core/site-title, core/navigation, core/site-logo
 *
 * @author Koji Kuno
 * @package cormorant
 * @since 1.0.0
 */
?>
<!-- wp:group {"tagName":"header","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|s","right":"var:preset|spacing|s","bottom":"var:preset|spacing|s","left":"var:preset|spacing|s"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"backgroundColor":"primary","textColor":"background","className":"site-header _primary","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<header class="wp-block-group alignfull site-header _primary has-background-color has-primary-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--s);padding-right:var(--wp--preset--spacing--s);padding-bottom:var(--wp--preset--spacing--s);padding-left:var(--wp--preset--spacing--s)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
	<div class="wp-block-group"><!-- wp:site-logo {"width":50,"shouldSyncIcon":true,"className":"is-style-rounded"} /-->

		<!-- wp:site-title {"fontSize":"2-xl"} /--></div>
	<!-- /wp:group -->

	<!-- wp:navigation {"textColor":"background","backgroundColor":"primary","overlayBackgroundColor":"primary","overlayTextColor":"background","style":{"spacing":{"blockGap":"var:preset|spacing|s"}},"fontSize":"s"} /--></header>
<!-- /wp:group -->
