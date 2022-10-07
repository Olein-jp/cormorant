<?php
/**
 * Title: Big Banner
 * Slug: cormorant/banner-big-banner
 * Categories: cormorant-banner
 * Description: Big Banner has background image
 * Keywords: cormorant
 * Block Types: core/group, core/paragraph, core/buttons, core/heading, core/cover
 *
 * @author Koji Kuno
 * @package cormorant
 * @since 1.0.0
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_MN7N4Q8XMH.jpg'; ?>","id":2181,"dimRatio":70,"overlayColor":"primary","minHeight":50,"minHeightUnit":"vh","align":"full","style":{"spacing":{"padding":{"top":"25vh","bottom":"25vh"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:25vh;padding-bottom:25vh;min-height:50vh"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-70 has-background-dim"></span><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_MN7N4Q8XMH.jpg'; ?>" alt="<?php echo esc_attr__( 'Sample Image', 'cormorant' ); ?>" class="wp-block-cover__image-background wp-image-2181" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
			<p class="has-text-align-center has-large-font-size">Quam lacinia dictum placerat</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
			<h2 class="has-text-align-center" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">Malesuada platea morbi</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center">Tortor neque cubilia nibh euismod aptent semper interdum molestie porta leo bibendum, iaculis nec ac consectetur dapibus urna nisi laoreet fames. Etiam diam nascetur dapibus mauris  donec pulvinar magna, rutrum ornare tellus laoreet sit curae</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"top":"10px","bottom":"10px"}}},"className":"is-style-cormorant-tertiary-filled-square-button"} -->
				<div class="wp-block-button is-style-cormorant-tertiary-filled-square-button"><a class="wp-block-button__link wp-element-button" style="padding-top:10px;padding-bottom:10px">Button Here</a></div>
				<!-- /wp:button -->

				<!-- wp:button {"style":{"border":{"radius":"0px"},"spacing":{"padding":{"top":"10px","bottom":"10px"}}},"className":"is-style-cormorant-background-outline-square-button"} -->
				<div class="wp-block-button is-style-cormorant-background-outline-square-button"><a class="wp-block-button__link wp-element-button" style="border-radius:0px;padding-top:10px;padding-bottom:10px">Button Here</a></div>
				<!-- /wp:button --></div>
			<!-- /wp:buttons --></div>
		<!-- /wp:group --></div></div>
<!-- /wp:cover -->
