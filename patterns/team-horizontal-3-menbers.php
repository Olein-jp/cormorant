<?php
/**
 * Title: Team horizontal 3 members
 * Slug: cormorant/team/horizontal-3-members
 * Categories: cormorant-team
 * Description: Team horizontal 3 members
 * Keywords: cormorant
 * Block Types: core/group, core/columns, core/paragraph, core/buttons, core/heading, core/image
 *
 * @author Koji Kuno
 * @package cormorant
 * @since 3.0.0
 */
?>
<!-- wp:group {"tagName":"section","align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|3-xl","bottom":"var:preset|spacing|3-xl"}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignwide has-base-color has-contrast-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--3-xl);padding-bottom:var(--wp--preset--spacing--3-xl)"><!-- wp:group {"tagName":"header","align":"full","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|xl"},"blockGap":"var:preset|spacing|xs"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
	<header class="wp-block-group alignfull" style="margin-bottom:var(--wp--preset--spacing--xl)"><!-- wp:heading {"textAlign":"center","fontSize":"3-xl"} -->
		<h2 class="wp-block-heading has-text-align-center has-3-xl-font-size"><?php esc_html_e( 'We are the Team', 'cormorant' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","fontSize":"xs"} -->
		<p class="has-text-align-center has-xs-font-size"><?php esc_html_e( 'Our team will support your company to the best of its ability.', 'cormorant' ); ?></p>
		<!-- /wp:paragraph --></header>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|xl","left":"var:preset|spacing|xl"}}}} -->
	<div class="wp-block-columns alignwide"><!-- wp:column -->
		<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|s"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
			<div class="wp-block-group"><!-- wp:image {"id":3205,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"100%"}},"className":"is-style-cormorant-blur-shadow-image"} -->
				<figure class="wp-block-image size-full has-custom-border is-style-cormorant-blur-shadow-image"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/cormorant-sample-09.jpg' ); ?>" alt="WordPress 100%GPL Block Theme Cormorant Sample Image 09" class="wp-image-3205" style="border-radius:100%"/></figure>
				<!-- /wp:image -->

				<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"l"} -->
				<h3 class="wp-block-heading has-text-align-center has-l-font-size"><?php esc_html_e( 'Edward Smith', 'cormorant' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"fontSize":"xs"} -->
				<p class="has-xs-font-size"><?php esc_html_e( 'I am a professional with a passion for design and creativity. My career has been built on a wealth of experience and success, but I am always looking for new challenges and growth.', 'cormorant' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
				<div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","width":100,"className":"is-style-cormorant-filled-square-button-base"} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-cormorant-filled-square-button-base"><a class="wp-block-button__link has-text-align-center wp-element-button" href="#"><?php esc_html_e( 'View Profile', 'cormorant' ); ?></a></div>
					<!-- /wp:button --></div>
				<!-- /wp:buttons --></div>
			<!-- /wp:group --></div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|s"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
			<div class="wp-block-group"><!-- wp:image {"id":3206,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"100%"}},"className":"is-style-cormorant-blur-shadow-image"} -->
				<figure class="wp-block-image size-full has-custom-border is-style-cormorant-blur-shadow-image"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/cormorant-sample-10.jpg' ); ?>" alt="WordPress 100%GPL Block Theme Cormorant Sample Image 10" class="wp-image-3206" style="border-radius:100%"/></figure>
				<!-- /wp:image -->

				<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"l"} -->
				<h3 class="wp-block-heading has-text-align-center has-l-font-size"><?php esc_html_e( 'Fiona Van den Berg', 'cormorant' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"fontSize":"xs"} -->
				<p class="has-xs-font-size"><?php esc_html_e( 'I am focused on increasing brand awareness and loyalty. I am also passionate about team leadership and collaboration, keeping up with the changing marketing industry and spreading the importance of female leadership.', 'cormorant' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons -->
				<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-cormorant-filled-square-button-base"} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-cormorant-filled-square-button-base"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'View Profile', 'cormorant' ); ?></a></div>
					<!-- /wp:button --></div>
				<!-- /wp:buttons --></div>
			<!-- /wp:group --></div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|s"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
			<div class="wp-block-group"><!-- wp:image {"id":3219,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"100%"}},"className":"is-style-cormorant-blur-shadow-image"} -->
				<figure class="wp-block-image size-full has-custom-border is-style-cormorant-blur-shadow-image"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/cormorant-sample-12.jpg' ); ?>" alt="" class="wp-image-3219" style="border-radius:100%"/></figure>
				<!-- /wp:image -->

				<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"l"} -->
				<h3 class="wp-block-heading has-text-align-center has-l-font-size"><?php esc_html_e( 'Hugo Martin', 'cormorant' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"fontSize":"xs"} -->
				<p class="has-xs-font-size"><?php esc_html_e( 'I am a designer with a passion for design and a creative approach. With a focus on the user\'s point of view, he pursues designs that give brands and products appeal and identity.', 'cormorant' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
				<div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","width":100,"className":"is-style-cormorant-filled-square-button-base"} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-cormorant-filled-square-button-base"><a class="wp-block-button__link has-text-align-center wp-element-button" href="#"><?php esc_html_e( 'View Profile', 'cormorant' ); ?></a></div>
					<!-- /wp:button --></div>
				<!-- /wp:buttons --></div>
			<!-- /wp:group --></div>
		<!-- /wp:column --></div>
	<!-- /wp:columns --></section>
<!-- /wp:group -->