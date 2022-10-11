<?php
/**
 * Title: Profile Simple Primary
 * Slug: cormorant/profile-simple-primary
 * Categories: cormorant-profile
 * Description: Simple profile colored primary
 * Keywords: cormorant
 * Block Types: core/group, core/image, core/paragraph, core/social-icons, core/heading
 *
 * @author Koji Kuno
 * @package cormorant
 * @since 1.0.0
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"25vh","bottom":"25vh"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"backgroundColor":"primary","textColor":"background","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group alignfull has-background-color has-primary-background-color has-text-color has-background has-link-color" style="padding-top:25vh;padding-bottom:25vh"><!-- wp:image {"id":2194,"width":150,"height":150,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
	<figure class="wp-block-image size-large is-resized is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/cormorant-shape-foreground.png'; ?>" alt="<?php echo esc_attr__( 'Sample Image', 'cormorant' ); ?>" class="wp-image-2194" width="150" height="150"/></figure>
	<!-- /wp:image -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
	<div class="wp-block-group"><!-- wp:heading {"fontSize":"medium"} -->
		<h2 class="has-medium-font-size">My Name Is Here</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p>Own title name</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p><a href="mailto:mail@wpcormorant.theme">mail@wpcormorant.theme</a></p>
		<!-- /wp:paragraph --></div>
	<!-- /wp:group -->

	<!-- wp:social-links {"iconColor":"primary","iconColorValue":"#024059","iconBackgroundColor":"background","iconBackgroundColorValue":"#ffffff","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|s","left":"var:preset|spacing|s"}}}} -->
	<ul class="wp-block-social-links has-icon-color has-icon-background-color"><!-- wp:social-link {"url":"https://facebook.com","service":"facebook"} /-->

		<!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /-->

		<!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /-->

		<!-- wp:social-link {"url":"https://youtube.com","service":"youtube"} /-->

		<!-- wp:social-link {"url":"https://linkedin.com","service":"linkedin"} /--></ul>
	<!-- /wp:social-links --></div>
<!-- /wp:group -->
