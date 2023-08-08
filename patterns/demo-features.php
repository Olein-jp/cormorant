<?php
/**
 * Title: Demo - Features
 * Slug: cormorant/demo/features
 * Categories: cormorant-demo
 * Description: Features for demo
 * Keywords: cormorant
 * Block Types: core/group, core/cover, core/paragraph
 *
 * @author Koji Kuno
 * @package cormorant
 * @since 3.0.0
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|3-xl","right":"var:preset|spacing|s","bottom":"var:preset|spacing|3-xl","left":"var:preset|spacing|s"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--3-xl);padding-right:var(--wp--preset--spacing--s);padding-bottom:var(--wp--preset--spacing--3-xl);padding-left:var(--wp--preset--spacing--s)">
	<!-- wp:group {"tagName":"header","align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|default","bottom":"var:preset|spacing|l"}}},"layout":{"type":"constrained"}} -->
	<header class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--default);margin-bottom:var(--wp--preset--spacing--l)"><!-- wp:heading {"textAlign":"center","fontSize":"3-xl"} -->
		<h2 class="wp-block-heading has-text-align-center has-3-xl-font-size"><?php esc_html_e( 'Simple Design', 'cormorant' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","fontSize":"m"} -->
		<p class="has-text-align-center has-m-font-size"><?php esc_html_e( 'Cormorant is designed to be simple enough to take full advantage of the functionality of WordPress Core.', 'cormorant' ); ?></p>
		<!-- /wp:paragraph --></header>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide"><!-- wp:columns {"verticalAlignment":null,"align":"wide"} -->
		<div class="wp-block-columns alignwide"><!-- wp:column -->
			<div class="wp-block-column"><!-- wp:image {"id":3113,"sizeSlug":"large","linkDestination":"none","style":{"border":{"width":"1px"}},"borderColor":"lighter-gray"} -->
				<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/demo-fluid-typography.png'; ?>" alt="<?php esc_html_e( 'Fluid Typography', 'cormorant' ); ?>" class="has-border-color has-lighter-gray-border-color wp-image-3113" style="border-width:1px"/></figure>
				<!-- /wp:image --></div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading"><?php esc_html_e( 'Comfortable Fluid Typography', 'cormorant' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph -->
				<p><?php esc_html_e( 'Flexible font size depending on the device\'s screen width. It eliminates too small or too large fonts as much as possible.', 'cormorant' ); ?></p>
				<!-- /wp:paragraph --></div>
			<!-- /wp:column --></div>
		<!-- /wp:columns -->

		<!-- wp:columns {"verticalAlignment":null,"align":"wide"} -->
		<div class="wp-block-columns alignwide switch-places"><!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading"><?php esc_html_e( 'User-friendly Spacing', 'cormorant' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph -->
				<p><?php esc_html_e( 'Flexibly scales the spacing unit according to the screen width. Smaller for smaller devices and 1.5 times larger for larger devices.', 'cormorant' ); ?></p>
				<!-- /wp:paragraph --></div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:image {"id":3114,"sizeSlug":"large","linkDestination":"none","style":{"border":{"width":"1px"}},"borderColor":"lighter-gray"} -->
				<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/demo-spacing.png'; ?>" alt="<?php esc_html_e( 'Spacing', 'cormorant' ); ?>" class="has-border-color has-lighter-gray-border-color wp-image-3114" style="border-width:1px"/></figure>
				<!-- /wp:image --></div>
			<!-- /wp:column --></div>
		<!-- /wp:columns -->

		<!-- wp:columns {"verticalAlignment":null,"align":"wide"} -->
		<div class="wp-block-columns alignwide"><!-- wp:column -->
			<div class="wp-block-column"><!-- wp:image {"id":3112,"sizeSlug":"large","linkDestination":"none","style":{"border":{"width":"1px"}},"borderColor":"lighter-gray"} -->
				<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/demo-colors.png'; ?>" alt="<?php esc_html_e( 'Colors', 'cormorant' ); ?>" class="has-border-color has-lighter-gray-border-color wp-image-3112" style="border-width:1px"/></figure>
				<!-- /wp:image --></div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading"><?php esc_html_e( 'Extensive colour palette and gradient presets available', 'cormorant' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph -->
				<p><?php esc_html_e( 'For colour presets, a contrast colour is prepared for the base colour and four other colours are prepared in advance.', 'cormorant' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph -->
				<p><?php esc_html_e( 'There is also a gradient preset based on them.', 'cormorant' ); ?></p>
				<!-- /wp:paragraph --></div>
			<!-- /wp:column --></div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
