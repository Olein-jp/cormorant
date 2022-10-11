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
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_3NQ5V9WW0G.jpg'; ?>","id":2178,"dimRatio":30,"overlayColor":"tertiary","contentPosition":"center center","isDark":false,"style":{"spacing":{"padding":{"top":"var:preset|spacing|m","right":"var:preset|spacing|m","bottom":"var:preset|spacing|m","left":"var:preset|spacing|m"}}}} -->
<div class="wp-block-cover is-light" style="padding-top:var(--wp--preset--spacing--m);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--m);padding-left:var(--wp--preset--spacing--m)"><span aria-hidden="true" class="wp-block-cover__background has-tertiary-background-color has-background-dim-30 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2178" alt="<?php echo esc_attr__( 'Sample Image', 'cormorant' ); ?>" src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_3NQ5V9WW0G.jpg'; ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"left","level":3,"textColor":"foreground","fontSize":"3-xl"} -->
		<h3 class="has-text-align-left has-foreground-color has-text-color has-3-xl-font-size">Nature &amp; Silence</h3>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"textColor":"foreground","fontSize":"s"} -->
		<p class="has-foreground-color has-text-color has-s-font-size">Aenean mi neque habitant hac turpis in facilisis hendrerit a nisl facilisi curae, faucibus rhoncus metus nibh suscipit platea consectetur curabitur dictumst cubilia phasellus. Augue nec dictumst sed taciti vivamus ex nam est cubilia massa varius facilisis, mus pretium metus arcu litora felis luctus congue porta per. Ultrices faucibus consequat blandit lacinia vel </p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|s"}}},"fontSize":"s"} -->
		<div class="wp-block-buttons has-custom-font-size has-s-font-size" style="margin-top:var(--wp--preset--spacing--s)"><!-- wp:button {"className":"is-style-cormorant-foreground-outline-square-button","fontSize":"tiny"} -->
			<div class="wp-block-button has-custom-font-size is-style-cormorant-foreground-outline-square-button has-tiny-font-size"><a class="wp-block-button__link wp-element-button">Button is here</a></div>
			<!-- /wp:button --></div>
		<!-- /wp:buttons --></div></div>
<!-- /wp:cover -->
