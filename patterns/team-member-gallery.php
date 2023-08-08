<?php
/**
 * Title: Team member gallery
 * Slug: cormorant/team/member-gallery
 * Categories: cormorant-team
 * Description: Team member gallery
 * Keywords: cormorant
 * Block Types: core/group, core/columns, core/paragraph, core/buttons, core/heading, core/image
 *
 * @author Koji Kuno
 * @package cormorant
 * @since 3.0.0
 */
?>
<!-- wp:group {"layout":{"type":"constrained","wideSize":"1200px"}} -->
<div class="wp-block-group"><!-- wp:columns {"className":"u-reverse-2-column"} -->
	<div class="wp-block-columns u-reverse-2-column"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|2-xl","bottom":"var:preset|spacing|2-xl","left":"var:preset|spacing|l","right":"var:preset|spacing|l"}}}} -->
		<div class="wp-block-column is-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--2-xl);padding-right:var(--wp--preset--spacing--l);padding-bottom:var(--wp--preset--spacing--2-xl);padding-left:var(--wp--preset--spacing--l)"><!-- wp:heading {"textAlign":"center"} -->
			<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Our Team', 'cormorant' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p><?php esc_html_e( 'As a web production company, we combine creative design with effective technology to deliver value to our clients businesses.', 'cormorant' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p><?php esc_html_e( 'We design and develop fit-for-purpose websites and applications with a focus on user experience. During the design phase, we gain a deep understanding of user needs and requirements and create attractive, easy-to-use designs that reflect your brand identity.', 'cormorant' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p><?php esc_html_e( 'Meanwhile, during the development phase, we utilise the latest technologies to deliver highly functional and high-performing websites and applications. We also pay close attention to security and performance, providing the best solutions for our clients businesses.', 'cormorant' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p><?php esc_html_e( 'What sets us apart is the strong partnership we build with our clients by working with a team of experienced professionals.We focus on communication and responding to our clients requirements, which leads to successful projects.', 'cormorant' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|l"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--l)"><!-- wp:button {"width":50,"style":{"spacing":{"padding":{"top":"var:preset|spacing|xs","bottom":"var:preset|spacing|xs"}}},"className":"is-style-cormorant-filled-square-button-base","fontSize":"s"} -->
				<div class="wp-block-button has-custom-width wp-block-button__width-50 has-custom-font-size is-style-cormorant-filled-square-button-base has-s-font-size"><a class="wp-block-button__link wp-element-button" style="padding-top:var(--wp--preset--spacing--xs);padding-bottom:var(--wp--preset--spacing--xs)"><?php esc_html_e( 'More Information', 'cormorant' ); ?></a></div>
				<!-- /wp:button --></div>
			<!-- /wp:buttons --></div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:gallery {"columns":2,"linkTo":"none","sizeSlug":"full","className":"u-gallery-no-gap is-style-cormorant-gallery-tiles"} -->
			<figure class="wp-block-gallery has-nested-images columns-2 is-cropped u-gallery-no-gap is-style-cormorant-gallery-tiles"><!-- wp:image {"id":3206,"sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/cormorant-sample-10.jpg' ); ?>" alt="WordPress 100%GPL Block Theme Cormorant Sample Image 10" class="wp-image-3206"/></figure>
				<!-- /wp:image -->

				<!-- wp:image {"id":3205,"sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/cormorant-sample-09.jpg' ); ?>" alt="WordPress 100%GPL Block Theme Cormorant Sample Image 09" class="wp-image-3205"/></figure>
				<!-- /wp:image -->

				<!-- wp:image {"id":3218,"sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/cormorant-sample-11.jpg' ); ?>" alt="" class="wp-image-3218"/></figure>
				<!-- /wp:image -->

				<!-- wp:image {"id":3219,"sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/cormorant-sample-12.jpg' ); ?>" alt="" class="wp-image-3219"/></figure>
				<!-- /wp:image --></figure>
			<!-- /wp:gallery --></div>
		<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
<!-- /wp:group -->
