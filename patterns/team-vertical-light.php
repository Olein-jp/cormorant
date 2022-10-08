<?php
/**
 * Title: Team vertical Light
 * Slug: cormorant/team-vertical-light
 * Categories: cormorant-team
 * Description: Team vertical colored light
 * Keywords: cormorant
 * Block Types: core/group, core/columns, core/paragraph, core/buttons, core/heading, core/image
 *
 * @author Koji Kuno
 * @package cormorant
 * @since 1.0.0
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"150px","bottom":"150px"}}},"backgroundColor":"background","textColor":"foreground","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-foreground-color has-background-background-color has-text-color has-background" style="padding-top:150px;padding-bottom:150px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|s"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
	<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","fontSize":"extra-large"} -->
		<h2 class="has-text-align-center has-extra-large-font-size">We are the Team</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center">Nullam ullamcorper enim sollicitudin curae eleifend arcu</p>
		<!-- /wp:paragraph --></div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|s","margin":{"top":"var:preset|spacing|l"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
	<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--medium)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group"><!-- wp:columns -->
			<div class="wp-block-columns"><!-- wp:column {"width":"33.33%"} -->
				<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:image {"id":2193,"sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/cormorant-shape-background.png'; ?>" alt="<?php echo esc_attr__( 'Sample Image', 'cormorant' ); ?>" class="wp-image-2193"/></figure>
					<!-- /wp:image --></div>
				<!-- /wp:column -->

				<!-- wp:column {"width":"66.66%","style":{"spacing":{"blockGap":"var:preset|spacing|s"}}} -->
				<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:paragraph {"fontSize":"large"} -->
					<p class="has-large-font-size"><strong>Member Name</strong></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p>Felis at ultrices amet tristique cursus porttitor erat leo massa egestas dignissim, velit gravida sapien odio ultricies lacinia ligula feugiat lobortis. Auctor quis nibh phasellus penatibus</p>
					<!-- /wp:paragraph -->

					<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
					<div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"var:preset|spacing|m","right":"var:preset|spacing|m"}}},"className":"is-style-cormorant-foreground-outline-square-button"} -->
						<div class="wp-block-button is-style-cormorant-foreground-outline-square-button"><a class="wp-block-button__link wp-element-button" style="padding-top:10px;padding-right:var(--wp--preset--spacing--small);padding-bottom:10px;padding-left:var(--wp--preset--spacing--small)">Read more.</a></div>
						<!-- /wp:button --></div>
					<!-- /wp:buttons --></div>
				<!-- /wp:column --></div>
			<!-- /wp:columns --></div>
		<!-- /wp:group -->

		<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group"><!-- wp:columns -->
			<div class="wp-block-columns"><!-- wp:column {"width":"33.33%"} -->
				<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:image {"id":2193,"sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/cormorant-shape-background.png'; ?>" alt="<?php echo esc_attr__( 'Sample Image', 'cormorant' ); ?>" class="wp-image-2193"/></figure>
					<!-- /wp:image --></div>
				<!-- /wp:column -->

				<!-- wp:column {"width":"66.66%","style":{"spacing":{"blockGap":"var:preset|spacing|s"}}} -->
				<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:paragraph {"fontSize":"large"} -->
					<p class="has-large-font-size"><strong>Member Name</strong></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p>Felis at ultrices amet tristique cursus porttitor erat leo massa egestas dignissim, velit gravida sapien odio ultricies lacinia ligula feugiat lobortis. Auctor quis nibh phasellus penatibus</p>
					<!-- /wp:paragraph -->

					<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
					<div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"var:preset|spacing|m","right":"var:preset|spacing|m"}}},"className":"is-style-cormorant-foreground-outline-square-button"} -->
						<div class="wp-block-button is-style-cormorant-foreground-outline-square-button"><a class="wp-block-button__link wp-element-button" style="padding-top:10px;padding-right:var(--wp--preset--spacing--small);padding-bottom:10px;padding-left:var(--wp--preset--spacing--small)">Read more.</a></div>
						<!-- /wp:button --></div>
					<!-- /wp:buttons --></div>
				<!-- /wp:column --></div>
			<!-- /wp:columns --></div>
		<!-- /wp:group -->

		<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group"><!-- wp:columns -->
			<div class="wp-block-columns"><!-- wp:column {"width":"33.33%"} -->
				<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:image {"id":2193,"sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/cormorant-shape-background.png'; ?>" alt="<?php echo esc_attr__( 'Sample Image', 'cormorant' ); ?>" class="wp-image-2193"/></figure>
					<!-- /wp:image --></div>
				<!-- /wp:column -->

				<!-- wp:column {"width":"66.66%","style":{"spacing":{"blockGap":"var:preset|spacing|s"}}} -->
				<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:paragraph {"fontSize":"large"} -->
					<p class="has-large-font-size"><strong>Member Name</strong></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p>Felis at ultrices amet tristique cursus porttitor erat leo massa egestas dignissim, velit gravida sapien odio ultricies lacinia ligula feugiat lobortis. Auctor quis nibh phasellus penatibus</p>
					<!-- /wp:paragraph -->

					<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
					<div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"var:preset|spacing|m","right":"var:preset|spacing|m"}}},"className":"is-style-cormorant-foreground-outline-square-button"} -->
						<div class="wp-block-button is-style-cormorant-foreground-outline-square-button"><a class="wp-block-button__link wp-element-button" style="padding-top:10px;padding-right:var(--wp--preset--spacing--small);padding-bottom:10px;padding-left:var(--wp--preset--spacing--small)">Read more.</a></div>
						<!-- /wp:button --></div>
					<!-- /wp:buttons --></div>
				<!-- /wp:column --></div>
			<!-- /wp:columns --></div>
		<!-- /wp:group -->

		<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group"><!-- wp:columns -->
			<div class="wp-block-columns"><!-- wp:column {"width":"33.33%"} -->
				<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:image {"id":2193,"sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/cormorant-shape-background.png'; ?>" alt="<?php echo esc_attr__( 'Sample Image', 'cormorant' ); ?>" class="wp-image-2193"/></figure>
					<!-- /wp:image --></div>
				<!-- /wp:column -->

				<!-- wp:column {"width":"66.66%","style":{"spacing":{"blockGap":"var:preset|spacing|s"}}} -->
				<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:paragraph {"fontSize":"large"} -->
					<p class="has-large-font-size"><strong>Member Name</strong></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p>Felis at ultrices amet tristique cursus porttitor erat leo massa egestas dignissim, velit gravida sapien odio ultricies lacinia ligula feugiat lobortis. Auctor quis nibh phasellus penatibus</p>
					<!-- /wp:paragraph -->

					<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
					<div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"var:preset|spacing|m","right":"var:preset|spacing|m"}}},"className":"is-style-cormorant-foreground-outline-square-button"} -->
						<div class="wp-block-button is-style-cormorant-foreground-outline-square-button"><a class="wp-block-button__link wp-element-button" style="padding-top:10px;padding-right:var(--wp--preset--spacing--small);padding-bottom:10px;padding-left:var(--wp--preset--spacing--small)">Read more.</a></div>
						<!-- /wp:button --></div>
					<!-- /wp:buttons --></div>
				<!-- /wp:column --></div>
			<!-- /wp:columns --></div>
		<!-- /wp:group --></div>
	<!-- /wp:group --></div>
<!-- /wp:group -->
