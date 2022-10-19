<?php
/**
 * Title: Title and Menu - horizontal - Primary
 * Slug: cormorant/header-title-menu-horizontal-primary
 * Categories: cormorant-header
 * Description: Header with Title and Menu layout horizontal colored primary
 * Keywords: cormorant
 * Block Types: core/group, core/site-title, core/navigation
 *
 * @author Koji Kuno
 * @package cormorant
 * @since 1.0.0
 */
?>
<!-- wp:group {"tagName":"div","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|s","right":"var:preset|spacing|s","bottom":"var:preset|spacing|s","left":"var:preset|spacing|s"}}},"backgroundColor":"primary","textColor":"background","className":"site-header _primary","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull site-header _primary has-background-color has-primary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--s);padding-right:var(--wp--preset--spacing--s);padding-bottom:var(--wp--preset--spacing--s);padding-left:var(--wp--preset--spacing--s)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group"><!-- wp:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"fontSize":"s"} /-->

		<!-- wp:navigation {"fontSize":"s"} /--></div>
	<!-- /wp:group --></div>
<!-- /wp:group -->
