<?php
/**
 * Title: Big Image Testimonial
 * Slug: cormorant/testimonial/big-image
 * Categories: cormorant-testimonial
 * Description: Testimonial with big image
 * Keywords: cormorant
 * Block Types: core/group, core/columns, core/paragraph, core/paragraph
 *
 * @author Koji Kuno
 * @package cormorant
 * @since 3.0.0
 */
?>
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:columns {"verticalAlignment":null,"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"0","left":"0"}}}} -->
	<div class="wp-block-columns" style="margin-top:0;margin-bottom:0"><!-- wp:column -->
		<div class="wp-block-column"><!-- wp:image {"id":3219,"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/cormorant-sample-12.jpg' ); ?>" alt="" class="wp-image-3219" style="aspect-ratio:1;object-fit:cover"/></figure>
			<!-- /wp:image --></div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"blockGap":"var:preset|spacing|s","padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl","left":"0","right":"0"}}}} -->
		<div class="wp-block-column is-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--xl);padding-right:0;padding-bottom:var(--wp--preset--spacing--xl);padding-left:0"><!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"right":"var:preset|spacing|xl","left":"var:preset|spacing|xl"}}},"fontSize":"l"} -->
			<p class="has-text-align-center has-l-font-size" style="padding-right:var(--wp--preset--spacing--xl);padding-left:var(--wp--preset--spacing--xl)"><strong><?php esc_html_e( 'Since using our product, our business results have improved dramatically! Efficient task management and real-time data analysis capabilities have supported our decision-making and helped us develop strategies to increase sales.', 'cormorant' ); ?></strong></p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"right":"var:preset|spacing|xl","left":"var:preset|spacing|xl"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--xl);padding-left:var(--wp--preset--spacing--xl)"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"12px"}}} -->
				<p class="has-text-align-center" style="font-size:12px"><?php esc_html_e( 'Marketing Director', 'cormorant' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"align":"center","fontSize":"m"} -->
				<p class="has-text-align-center has-m-font-size"><strong><?php esc_html_e( 'Matthias Klaus', 'cormorant' ); ?></strong></p>
				<!-- /wp:paragraph --></div>
			<!-- /wp:group --></div>
		<!-- /wp:column --></div>
	<!-- /wp:columns -->

	<!-- wp:columns {"verticalAlignment":null,"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"0","left":"0"}}},"className":"u-reverse-2-column"} -->
	<div class="wp-block-columns u-reverse-2-column" style="margin-top:0;margin-bottom:0"><!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"blockGap":"var:preset|spacing|s","padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl","left":"0","right":"0"}}}} -->
		<div class="wp-block-column is-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--xl);padding-right:0;padding-bottom:var(--wp--preset--spacing--xl);padding-left:0"><!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"right":"var:preset|spacing|xl","left":"var:preset|spacing|xl"}}},"fontSize":"l"} -->
			<p class="has-text-align-center has-l-font-size" style="padding-right:var(--wp--preset--spacing--xl);padding-left:var(--wp--preset--spacing--xl)"><strong><?php esc_html_e( 'For many years we have been using other companies products, but since we switched to yours, it has made a real difference to our business. We have been particularly surprised by the robustness and customisability of your product. We have been able to add custom functionality to suit our particular needs, which has enabled us to streamline our operations.', 'cormorant' ); ?></strong></p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"right":"var:preset|spacing|xl","left":"var:preset|spacing|xl"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--xl);padding-left:var(--wp--preset--spacing--xl)"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"12px"}}} -->
				<p class="has-text-align-center" style="font-size:12px"><?php esc_html_e( 'Chef Designer', 'cormorant' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"align":"center","fontSize":"m"} -->
				<p class="has-text-align-center has-m-font-size"><strong><?php esc_html_e( 'Natalia Andrea', 'cormorant' ); ?></strong></p>
				<!-- /wp:paragraph --></div>
			<!-- /wp:group --></div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:image {"id":3218,"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/cormorant-sample-11.jpg' ); ?>" alt="" class="wp-image-3218" style="aspect-ratio:1;object-fit:cover"/></figure>
			<!-- /wp:image --></div>
		<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
<!-- /wp:group -->