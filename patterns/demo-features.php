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
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|3-xl","right":"var:preset|spacing|default","bottom":"var:preset|spacing|3-xl","left":"var:preset|spacing|default"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--3-xl);padding-right:var(--wp--preset--spacing--default);padding-bottom:var(--wp--preset--spacing--3-xl);padding-left:var(--wp--preset--spacing--default)"><!-- wp:group {"tagName":"header","align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|default","bottom":"var:preset|spacing|l"}}},"layout":{"type":"constrained"}} -->
	<header class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--default);margin-bottom:var(--wp--preset--spacing--l)"><!-- wp:heading {"textAlign":"center","fontSize":"3-xl"} -->
		<h2 class="wp-block-heading has-text-align-center has-3-xl-font-size">Simple Design</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","fontSize":"m"} -->
		<p class="has-text-align-center has-m-font-size">Cormorant is designed to be simple enough to take full advantage of the functionality of WordPress Core.</p>
		<!-- /wp:paragraph --></header>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide"><!-- wp:columns {"verticalAlignment":null,"align":"wide"} -->
		<div class="wp-block-columns alignwide"><!-- wp:column -->
			<div class="wp-block-column"><!-- wp:image {"id":3113,"sizeSlug":"large","linkDestination":"none","style":{"border":{"width":"1px"}},"borderColor":"lighter-gray"} -->
				<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/demo-fluid-typography.png'; ?>" alt="<?php echo esc_attr__( 'Fluid Typography', 'cormorant' ); ?>" class="has-border-color has-lighter-gray-border-color wp-image-3113" style="border-width:1px"/></figure>
				<!-- /wp:image --></div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading">Comfortable<br>Fluid Typography</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph -->
				<p>Flexible font size depending on the device's screen width. It eliminates too small or too large fonts as much as possible.</p>
				<!-- /wp:paragraph --></div>
			<!-- /wp:column --></div>
		<!-- /wp:columns -->

		<!-- wp:columns {"verticalAlignment":null,"align":"wide"} -->
		<div class="wp-block-columns alignwide switch-places"><!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading">User-friendly Spacing</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph -->
				<p>Flexibly scales the spacing unit according to the screen width. Smaller for smaller devices and 1.5 times larger for larger devices.</p>
				<!-- /wp:paragraph --></div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:image {"id":3114,"sizeSlug":"large","linkDestination":"none","style":{"border":{"width":"1px"}},"borderColor":"lighter-gray"} -->
				<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/demo-spacing.png'; ?>" alt="<?php echo esc_attr__( 'Spacing', 'cormorant' ); ?>" class="has-border-color has-lighter-gray-border-color wp-image-3114" style="border-width:1px"/></figure>
				<!-- /wp:image --></div>
			<!-- /wp:column --></div>
		<!-- /wp:columns -->

		<!-- wp:columns {"verticalAlignment":null,"align":"wide"} -->
		<div class="wp-block-columns alignwide"><!-- wp:column -->
			<div class="wp-block-column"><!-- wp:image {"id":3112,"sizeSlug":"large","linkDestination":"none","style":{"border":{"width":"1px"}},"borderColor":"lighter-gray"} -->
				<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/demo-colors.png'; ?>" alt="<?php echo esc_attr__( 'Colors', 'cormorant' ); ?>" class="has-border-color has-lighter-gray-border-color wp-image-3112" style="border-width:1px"/></figure>
				<!-- /wp:image --></div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading">Extensive colour palette and gradient presets available</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph -->
				<p>For colour presets, a contrast colour is prepared for the base colour and four other colours are prepared in advance.</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph -->
				<p>There is also a gradient preset based on them.</p>
				<!-- /wp:paragraph --></div>
			<!-- /wp:column --></div>
		<!-- /wp:columns --></div>
	<!-- /wp:group --></div>
<!-- /wp:group -->