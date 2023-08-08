<?php
/**
 * Title: 404 Page
 * Slug: cormorant/page/404
 * Categories: cormorant-page
 * Description: Simple 404 page
 * Keywords: cormorant
 * Block Types: core/group, core/paragraph, core/buttons,
 *
 * @author Koji Kuno
 * @package cormorant
 * @since 3.0.0
 */
?>
<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"10rem"}}} -->
<p class="has-text-align-center" style="font-size:10rem"><strong>404</strong></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|m","bottom":"var:preset|spacing|m","left":"var:preset|spacing|m","right":"var:preset|spacing|m"}},"border":{"radius":"0px"}},"backgroundColor":"wild-sand","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-wild-sand-background-color has-background" style="border-radius:0px;padding-top:var(--wp--preset--spacing--m);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--m);padding-left:var(--wp--preset--spacing--m)"><!-- wp:paragraph -->
	<p><?php esc_html_e( 'Unfortunately the page you have accessed does not exist or has an incorrect URL.', 'cormorant' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph -->
	<p><?php esc_html_e( 'Please use the search form below to search the site, or try to find similar information by keyword categories or tags.', 'cormorant' ); ?></p>
	<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Search', 'cormorant' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:search {"label":"","showLabel":false,"width":100,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-inside","style":{"border":{"width":"0px","style":"none"}},"fontSize":"s"} /-->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Category', 'cormorant' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:tag-cloud {"numberOfTags":40,"taxonomy":"category","showTagCounts":true,"smallestFontSize":"1rem","largestFontSize":"1rem","className":"is-style-default"} /-->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Tag', 'cormorant' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:tag-cloud {"numberOfTags":40,"showTagCounts":true,"smallestFontSize":"1rem","largestFontSize":"1rem"} /-->