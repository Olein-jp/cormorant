<?php
/**
 * Title: Hero Covered Image
 * Slug: cormorant/hero-covered-image
 * Categories: cormorant-hero
 * Description: Hero Covered Image
 * Keywords: cormorant
 * Block Types: core/group, core/cover, core/paragraph
 *
 * @author Koji Kuno
 * @package cormorant
 * @since 1.0.0
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_MDRPL8PT36.jpg'; ?>","id":2180,"dimRatio":50,"overlayColor":"primary","focalPoint":{"x":0.37,"y":0.34},"minHeight":60,"minHeightUnit":"vh","align":"full","className":"negative-margin-left-s negative-margin-right-s","style":{"spacing":{"padding":{"top":"var:preset|spacing|s","right":"var:preset|spacing|s","bottom":"var:preset|spacing|s","left":"var:preset|spacing|s"}}}} -->
	<div class="wp-block-cover alignfull negative-margin-left-s negative-margin-right-s" style="padding-top:var(--wp--preset--spacing--s);padding-right:var(--wp--preset--spacing--s);padding-bottom:var(--wp--preset--spacing--s);padding-left:var(--wp--preset--spacing--s);min-height:60vh"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2180" alt="Sample Image" src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_MDRPL8PT36.jpg'; ?>" style="object-position:37% 34%" data-object-fit="cover" data-object-position="37% 34%"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","style":{"typography":{"lineHeight":"1.2"}},"fontSize":"4-xl"} -->
			<p class="has-text-align-center has-4-xl-font-size" style="line-height:1.2"><strong>Cormorant</strong>,<br>the Block Theme.</p>
			<!-- /wp:paragraph --></div></div>
	<!-- /wp:cover --></div>
<!-- /wp:group -->
