<?php
/**
 * Title: 3 Column Introduce Light
 * Slug: cormorant/column-3-introduce-light
 * Categories: cormorant-column
 * Description: 3 Columns for introducing colored light
 * Keywords: cormorant
 * Block Types: core/group, core/columns, core/paragraph, core/buttons, core/heading, core/image
 *
 * @author Koji Kuno
 * @package cormorant
 * @since 1.0.0
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|2-xl","bottom":"var:preset|spacing|2-xl"}}},"backgroundColor":"background","textColor":"foreground","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-foreground-color has-background-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--2-xl);padding-bottom:var(--wp--preset--spacing--2-xl)"><!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group"><!-- wp:heading {"textAlign":"center"} -->
		<h2 class="has-text-align-center">Introduced Services</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center">Et sit condimentum ut ornare montes phasellus aliquam suspendisse, non taciti ultrices himenaeos imperdiet quisque fermentum duis, aptent lectus dictumst curae venenatis</p>
		<!-- /wp:paragraph --></div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column -->
		<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|s"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
			<div class="wp-block-group"><!-- wp:image {"id":2180,"sizeSlug":"large","linkDestination":"none"} -->
				<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_MDRPL8PT36.jpg'; ?>" alt="<?php echo esc_attr__( 'Sample Image', 'cormorant' ); ?>" class="wp-image-2180"/></figure>
				<!-- /wp:image -->

				<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"4-xl"} -->
				<h3 class="has-text-align-center has-4-xl-font-size"><strong>Heading Text</strong></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center"} -->
				<p class="has-text-align-center">Mus amet vivamus pulvinar torquent pharetra facilisis ridiculus a bibendum penatibus egestas ligula eget lobortis, ornare ultricies dictum lorem gravida facilisi maecenas iaculis consectetur mattis aptent tristique ante. A duis nisl elementum fringilla</p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons -->
				<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"foreground"} -->
					<div class="wp-block-button"><a class="wp-block-button__link has-foreground-background-color has-background wp-element-button">Details here</a></div>
					<!-- /wp:button --></div>
				<!-- /wp:buttons --></div>
			<!-- /wp:group --></div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|s"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
			<div class="wp-block-group"><!-- wp:image {"id":2180,"sizeSlug":"large","linkDestination":"none"} -->
				<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_MDRPL8PT36.jpg'; ?>" alt="<?php echo esc_attr__( 'Sample Image', 'cormorant' ); ?>" class="wp-image-2180"/></figure>
				<!-- /wp:image -->

				<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"4-xl"} -->
				<h3 class="has-text-align-center has-4-xl-font-size"><strong>Heading Text</strong></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center"} -->
				<p class="has-text-align-center">Mus amet vivamus pulvinar torquent pharetra facilisis ridiculus a bibendum penatibus egestas ligula eget lobortis, ornare ultricies dictum lorem gravida facilisi maecenas iaculis consectetur mattis aptent tristique ante. A duis nisl elementum fringilla</p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons -->
				<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"foreground"} -->
					<div class="wp-block-button"><a class="wp-block-button__link has-foreground-background-color has-background wp-element-button">Details here</a></div>
					<!-- /wp:button --></div>
				<!-- /wp:buttons --></div>
			<!-- /wp:group --></div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|s"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
			<div class="wp-block-group"><!-- wp:image {"id":2180,"sizeSlug":"large","linkDestination":"none"} -->
				<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_MDRPL8PT36.jpg'; ?>" alt="<?php echo esc_attr__( 'Sample Image', 'cormorant' ); ?>" class="wp-image-2180"/></figure>
				<!-- /wp:image -->

				<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"4-xl"} -->
				<h3 class="has-text-align-center has-4-xl-font-size"><strong>Heading Text</strong></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center"} -->
				<p class="has-text-align-center">Mus amet vivamus pulvinar torquent pharetra facilisis ridiculus a bibendum penatibus egestas ligula eget lobortis, ornare ultricies dictum lorem gravida facilisi maecenas iaculis consectetur mattis aptent tristique ante. A duis nisl elementum fringilla</p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons -->
				<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"foreground"} -->
					<div class="wp-block-button"><a class="wp-block-button__link has-foreground-background-color has-background wp-element-button">Details here</a></div>
					<!-- /wp:button --></div>
				<!-- /wp:buttons --></div>
			<!-- /wp:group --></div>
		<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
<!-- /wp:group -->
