<?php
/**
 * Title: CTA Image Banner
 * Slug: cormorant/cta/image-banner
 * Categories: cormorant-cta
 * Description: Call To Action with image like banner
 * Keywords: cormorant
 * Block Types: core/group, core/paragraph, core/buttons,
 *
 * @author Koji Kuno
 * @package cormorant
 * @since 3.0.0
 */
?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() . '/assets/images/cormorant-sample-01.jpg' ); ?>","id":3190,"dimRatio":50,"contentPosition":"center right","align":"wide","style":{"spacing":{"padding":{"right":"var:preset|spacing|xl","left":"var:preset|spacing|xl"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-cover alignwide has-custom-content-position is-position-center-right" style="padding-right:var(--wp--preset--spacing--xl);padding-left:var(--wp--preset--spacing--xl)"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-3190" alt="WordPress 100%GPL Block Theme Cormorant Sample Image 01" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/cormorant-sample-01.jpg' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"right","placeholder":"タイトルを入力...","fontSize":"4-xl"} -->
			<p class="has-text-align-right has-4-xl-font-size"><strong><?php esc_html_e( 'Let\'s join our service', 'cormorant' ); ?></strong></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"align":"right","fontSize":"m"} -->
			<p class="has-text-align-right has-m-font-size"><?php esc_html_e( 'We look forward to exchanging ideas and feedback with you.', 'cormorant' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
			<div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","className":"is-style-cormorant-outlined-square-button-contrast"} -->
				<div class="wp-block-button is-style-cormorant-outlined-square-button-contrast"><a class="wp-block-button__link has-text-align-center wp-element-button"><strong><?php esc_html_e( 'Chat with us', 'cormorant' ); ?></strong></a></div>
				<!-- /wp:button --></div>
			<!-- /wp:buttons --></div></div>
	<!-- /wp:cover --></div>
<!-- /wp:group -->
