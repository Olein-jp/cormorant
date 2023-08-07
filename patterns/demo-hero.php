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
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() . '/assets/images/cormorant-sample-06.jpg' ); ?>","id":3195,"dimRatio":50,"minHeightUnit":"vh","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|2-xl","bottom":"0","left":"0","right":"0"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--2-xl);padding-right:0;padding-bottom:0;padding-left:0"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-3195" alt="WordPress 100%GPL Block Theme Cormorant Sample Image 06" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/cormorant-sample-06.jpg' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"className":"is-style-cormorant-dotted-background-group","layout":{"type":"default"}} -->
		<div class="wp-block-group alignfull is-style-cormorant-dotted-background-group" style="padding-top:0;padding-bottom:0"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|s"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--s)"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|xs","bottom":"var:preset|spacing|xs","left":"var:preset|spacing|xs","right":"var:preset|spacing|xs"}}},"fontSize":"3-xl"} -->
				<h2 class="wp-block-heading has-text-align-center has-3-xl-font-size" style="padding-top:var(--wp--preset--spacing--xs);padding-right:var(--wp--preset--spacing--xs);padding-bottom:var(--wp--preset--spacing--xs);padding-left:var(--wp--preset--spacing--xs)"><?php esc_html_e( 'You can touch the next generation of WordPress.', 'cormorant' ); ?></h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|xs","bottom":"var:preset|spacing|xs","left":"var:preset|spacing|xs","right":"var:preset|spacing|xs"}}}} -->
				<p class="has-text-align-center" style="padding-top:var(--wp--preset--spacing--xs);padding-right:var(--wp--preset--spacing--xs);padding-bottom:var(--wp--preset--spacing--xs);padding-left:var(--wp--preset--spacing--xs)"><?php esc_html_e( 'Cormorant is Simple WordPress Block Theme for building website.', 'cormorant' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
				<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-cormorant-outlined-square-button-contrast"} -->
					<div class="wp-block-button is-style-cormorant-outlined-square-button-contrast"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'https://wordpress.org/themes/cormorant/' ); ?>"><?php esc_html_e( 'Download on WP.org', 'cormorant' ); ?></a></div>
					<!-- /wp:button -->

					<!-- wp:button {"className":"is-style-cormorant-outlined-square-button-secondary"} -->
					<div class="wp-block-button is-style-cormorant-outlined-square-button-secondary"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'https://cormorant.kunokoji.com' ); ?>"><?php esc_html_e( 'Learn More', 'cormorant' ); ?></a></div>
					<!-- /wp:button --></div>
				<!-- /wp:buttons --></div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"color":{"gradient":"linear-gradient(180deg,rgba(237,237,237,0) 0%,rgb(255,255,255) 100%)"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-background" style="background:linear-gradient(180deg,rgba(237,237,237,0) 0%,rgb(255,255,255) 100%)"></div>
			<!-- /wp:group --></div>
		<!-- /wp:group --></div></div>
<!-- /wp:cover -->