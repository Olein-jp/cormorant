<?php
/**
 * Title: Profile Simple Base
 * Slug: cormorant/profile-simple-base
 * Categories: cormorant-profile
 * Description: Simple profile colored base color
 * Keywords: cormorant
 * Block Types: core/group, core/image, core/paragraph, core/social-icons, core/heading
 *
 * @author Koji Kuno
 * @package cormorant
 * @since 1.0.0
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|4-xl","bottom":"var:preset|spacing|4-xl"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--4-xl);padding-bottom:var(--wp--preset--spacing--4-xl)"><!-- wp:image {"id":2193,"width":150,"height":150,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
	<figure class="wp-block-image size-large is-resized is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/cormorant-shape-black.png'; ?>" alt="<?php echo esc_attr__( 'Sample Image', 'cormorant' ); ?>" class="wp-image-2193" width="150" height="150"/></figure>
	<!-- /wp:image -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
	<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"xs"} -->
		<p class="has-xs-font-size">Own title name</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"fontSize":"xl"} -->
		<h2 class="wp-block-heading has-xl-font-size">My Name Is Here</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"fontSize":"xs"} -->
		<p class="has-xs-font-size"><a href="no-reply@cormorant.kunokoji.com">no-reply@cormorant.kunokoji.com</a></p>
		<!-- /wp:paragraph --></div>
	<!-- /wp:group -->

	<!-- wp:social-links {"iconColor":"contrast","iconColorValue":"#ffffff","iconBackgroundColor":"base","iconBackgroundColorValue":"#333333","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|s","left":"var:preset|spacing|s"}}}} -->
	<ul class="wp-block-social-links has-icon-color has-icon-background-color"><!-- wp:social-link {"url":"https://facebook.com","service":"facebook"} /-->

		<!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /-->

		<!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /-->

		<!-- wp:social-link {"url":"https://youtube.com","service":"youtube"} /-->

		<!-- wp:social-link {"url":"https://linkedin.com","service":"linkedin"} /--></ul>
	<!-- /wp:social-links --></div>
<!-- /wp:group -->