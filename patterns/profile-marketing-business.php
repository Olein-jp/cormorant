<?php
/**
 * Title: Profile Marketing Business
 * Slug: cormorant/profile/marketing-business
 * Categories: cormorant-profile
 * Description: Simple layout for marketing business
 * Keywords: cormorant
 * Block Types: core/group, core/image, core/paragraph, core/social-icons, core/heading
 *
 * @author Koji Kuno
 * @package cormorant
 * @since 3.0.0
 */
?>
<!-- wp:group {"style":{"color":{"gradient":"linear-gradient(86deg,rgb(82,85,247) 0%,rgb(0,84,174) 28%,rgb(255,255,255) 28%)"},"spacing":{"padding":{"top":"var:preset|spacing|3-xl","bottom":"var:preset|spacing|3-xl"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="background:linear-gradient(86deg,rgb(82,85,247) 0%,rgb(0,84,174) 28%,rgb(255,255,255) 28%);padding-top:var(--wp--preset--spacing--3-xl);padding-bottom:var(--wp--preset--spacing--3-xl)"><!-- wp:columns {"verticalAlignment":null,"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column -->
		<div class="wp-block-column"><!-- wp:image {"id":3206,"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/cormorant-sample-10.jpg' ); ?>" alt="WordPress 100%GPL Block Theme Cormorant Sample Image 10" class="wp-image-3206" style="aspect-ratio:1;object-fit:cover"/></figure>
			<!-- /wp:image --></div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"xs"} -->
				<p class="has-xs-font-size"><?php esc_html_e( 'Marketing Director', 'cormorant' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading"><?php esc_html_e( 'Fiona Van den Berg', 'cormorant' ); ?></h3>
				<!-- /wp:heading --></div>
			<!-- /wp:group -->

			<!-- wp:paragraph -->
			<p><?php esc_html_e( 'As Marketing Director, she is passionate about brand strategy and effective communication, with a strong focus on customer engagement.Using data-driven insights and under my leadership through an omni-channel approach, I am focused on increasing brand awareness and loyalty.', 'cormorant' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p><?php esc_html_e( 'I am also passionate about team leadership and collaboration, keeping up with the changing marketing industry and spreading the importance of female leadership.', 'cormorant' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p><?php esc_html_e( 'I am committed to using my successful experience and skills to help the company realise its vision and goals.', 'cormorant' ); ?></p>
			<!-- /wp:paragraph --></div>
		<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
<!-- /wp:group -->
