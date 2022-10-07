<?php
/**
 * Title: Single Background Image 1
 * Slug: cormorant/banner-simple-background-image-01
 * Categories: cormorant-banner
 * Description: Simple banner has background image
 * Keywords: cormorant
 * Block Types: core/group, core/paragraph, core/buttons, core/heading, core/cover
 *
 * @author Koji Kuno
 * @package cormorant
 * @since 1.0.0
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_3NQ5V9WW0G.jpg'; ?>","id":2178,"dimRatio":30,"overlayColor":"tertiary","minHeight":200,"minHeightUnit":"px","contentPosition":"center center","isDark":false,"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|small","left":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-cover is-light" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--medium);min-height:200px"><span aria-hidden="true" class="wp-block-cover__background has-tertiary-background-color has-background-dim-30 has-background-dim"></span><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_3NQ5V9WW0G.jpg'; ?>" alt="<?php echo esc_attr__( 'Sample Image', 'cormorant' ); ?>" class="wp-block-cover__image-background wp-image-2178" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"left","textColor":"foreground","fontSize":"extra-large"} -->
		<p class="has-text-align-left has-foreground-color has-text-color has-extra-large-font-size">Nature &amp; Silence</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"textColor":"foreground","fontSize":"tiny"} -->
		<p class="has-foreground-color has-text-color has-tiny-font-size">Aenean mi neque habitant hac turpis in facilisis hendrerit a nisl facilisi curae, faucibus rhoncus metus nibh suscipit platea consectetur curabitur dictumst cubilia phasellus. Augue nec dictumst sed taciti vivamus ex nam est cubilia massa varius facilisis, mus pretium metus arcu litora felis luctus congue porta per. Ultrices faucibus consequat blandit lacinia vel </p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small"}}}} -->
		<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--x-small)"><!-- wp:button {"className":"is-style-cormorant-foreground-outline-square-button","fontSize":"tiny"} -->
			<div class="wp-block-button has-custom-font-size is-style-cormorant-foreground-outline-square-button has-tiny-font-size"><a class="wp-block-button__link wp-element-button">Button is here</a></div>
			<!-- /wp:button --></div>
		<!-- /wp:buttons --></div></div>
<!-- /wp:cover -->
