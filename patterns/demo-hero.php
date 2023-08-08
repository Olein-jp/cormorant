<?php
/**
 * Title: Demo - Hero
 * Slug: cormorant/demo/hero
 * Categories: cormorant-demo
 * Description: Hero for demo
 * Keywords: cormorant
 * Block Types: core/group, core/cover, core/paragraph
 *
 * @author Koji Kuno
 * @package cormorant
 * @since 3.0.0
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() . '/assets/images/cormorant-sample-06.jpg' ); ?>","id":3195,"dimRatio":50,"minHeightUnit":"vh","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|3-xl","bottom":"var:preset|spacing|3-xl"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--3-xl);padding-bottom:var(--wp--preset--spacing--3-xl)"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-3195" alt="WordPress 100%GPL Block Theme Cormorant Sample Image 06" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/cormorant-sample-06.jpg' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignfull" style="padding-top:0;padding-bottom:0"><!-- wp:group {"layout":{"type":"constrained"}} -->
			<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","fontSize":"3-xl"} -->
				<h2 class="wp-block-heading has-text-align-center has-3-xl-font-size"><?php esc_html_e( 'You can touch the next generation of WordPress.', 'cormorant' ); ?></h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center"} -->
				<p class="has-text-align-center"><?php esc_html_e( 'Cormorant is Simple WordPress Block Theme for building website.', 'cormorant' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
				<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-cormorant-outlined-square-button-contrast"} -->
					<div class="wp-block-button is-style-cormorant-outlined-square-button-contrast"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'https://wordpress.org/themes/cormorant/' ); ?>"><?php esc_html_e( 'Download on WP.org', 'cormorant' ); ?></a></div>
					<!-- /wp:button -->

					<!-- wp:button {"className":"is-style-cormorant-outlined-square-button-secondary"} -->
					<div class="wp-block-button is-style-cormorant-outlined-square-button-secondary"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'https://cormorant.kunokoji.com' ); ?>"><?php esc_html_e( 'Getting Started!', 'cormorant' ); ?></a></div>
					<!-- /wp:button --></div>
				<!-- /wp:buttons --></div>
			<!-- /wp:group --></div>
		<!-- /wp:group --></div></div>
<!-- /wp:cover -->
