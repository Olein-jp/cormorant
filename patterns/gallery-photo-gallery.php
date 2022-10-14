<?php
/**
 * Title: Photo Gallery
 * Slug: cormorant/gallery-photo-gallery
 * Categories: cormorant-gallery
 * Description: Photo gallery
 * Keywords: cormorant
 * Block Types: core/group, core/paragraph, core/heading, core/gallery, core/image
 *
 * @author Koji Kuno
 * @package cormorant
 * @since 1.0.0
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|4-xl","bottom":"var:preset|spacing|4-xl"},"blockGap":"var:preset|spacing|m"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--4-xl);padding-bottom:var(--wp--preset--spacing--4-xl)"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
	<div class="wp-block-group"><!-- wp:heading {"level":3} -->
		<h3>Photo Gallery</h3>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","fontSize":"xs"} -->
		<p class="has-text-align-center has-xs-font-size">Tempor ut rutrum sed magnis quisque lobortis pretium dui laoreet, non platea est natoque cursus aliquam quam. Lorem lacus molestie magna tempor quis elementum aliquam mollis convallis pellentesque </p>
		<!-- /wp:paragraph --></div>
	<!-- /wp:group -->

	<!-- wp:gallery {"linkTo":"none","sizeSlug":"full","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|s","left":"var:preset|spacing|s"}}}} -->
	<figure class="wp-block-gallery has-nested-images columns-default is-cropped"><!-- wp:image {"id":2180,"sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_MDRPL8PT36.jpg'; ?>" alt="<?php echo esc_attr__( 'Sample Image', 'cormorant' ); ?>" class="wp-image-2180"/></figure>
		<!-- /wp:image -->

		<!-- wp:image {"id":2181,"sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_MN7N4Q8XMH.jpg'; ?>" alt="<?php echo esc_attr__( 'Sample Image', 'cormorant' ); ?>" class="wp-image-2181"/></figure>
		<!-- /wp:image -->

		<!-- wp:image {"id":2179,"sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_FOKZ3FZEKE.jpg'; ?>" alt="<?php echo esc_attr__( 'Sample Image', 'cormorant' ); ?>" class="wp-image-2179"/></figure>
		<!-- /wp:image -->

		<!-- wp:image {"id":2178,"sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_3NQ5V9WW0G.jpg'; ?>" alt="<?php echo esc_attr__( 'Sample Image', 'cormorant' ); ?>" class="wp-image-2178"/></figure>
		<!-- /wp:image --></figure>
	<!-- /wp:gallery --></div>
<!-- /wp:group -->
