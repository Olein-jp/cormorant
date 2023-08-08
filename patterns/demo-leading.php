<?php
/**
 * Title: Demo - Leading
 * Slug: cormorant/demo/leading
 * Categories: cormorant-demo
 * Description: Leading Text for demo
 * Keywords: cormorant
 * Block Types: core/group, core/cover, core/paragraph
 *
 * @author Koji Kuno
 * @package cormorant
 * @since 3.0.0
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|3-xl","bottom":"var:preset|spacing|3-xl"},"blockGap":"var:preset|spacing|xl"}},"backgroundColor":"base","textColor":"contrast","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-contrast-color has-base-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--3-xl);padding-bottom:var(--wp--preset--spacing--3-xl)"><!-- wp:heading {"textAlign":"center","fontSize":"3-xl"} -->
	<h2 class="wp-block-heading has-text-align-center has-3-xl-font-size"><?php esc_html_e( 'A new era of WordPress is about to arrive. Is everyone ready for it?', 'cormorant' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column {"style":{"border":{"top":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}}}} -->
		<div class="wp-block-column" style="border-top-style:none;border-top-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px"><!-- wp:paragraph -->
			<p><?php esc_html_e( 'Over the last few years, WordPress has undergone significant changes together with the Gutenberg project. The main thing is that the block editor and site editor are now available.', 'cormorant' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p><?php esc_html_e( 'The new theme format that has been added is called Block Theme. This Cormorant is one of them. By using these, you can build an entire website in a more sensible way, with dramatically less code than before.', 'cormorant' ); ?></p>
			<!-- /wp:paragraph --></div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:paragraph -->
			<p><?php esc_html_e( 'Cormorant is designed to allow you to edit your site while using as many of these WordPress features as possible.', 'cormorant' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p><?php esc_html_e( 'And to make it as customisable as possible, we have reduced the amount of decoration by theme.json and CSS as much as possible.', 'cormorant' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p><?php esc_html_e( 'We invite you to try out the new WordPress.', 'cormorant' ); ?></p>
			<!-- /wp:paragraph --></div>
		<!-- /wp:column --></div>
	<!-- /wp:columns -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-cormorant-outlined-square-button-contrast"} -->
		<div class="wp-block-button is-style-cormorant-outlined-square-button-contrast"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'https://wordpress.org/themes/cormorant/' ); ?>"><?php esc_html_e( 'Download on WP.org', 'cormorant' ); ?></a></div>
		<!-- /wp:button -->

		<!-- wp:button {"className":"is-style-cormorant-outlined-square-button-contrast"} -->
		<div class="wp-block-button is-style-cormorant-outlined-square-button-contrast"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'https://cormorant.kunokoji.com' ); ?>"><?php esc_html_e( 'Demo', 'cormorant' ); ?></a></div>
		<!-- /wp:button -->

		<!-- wp:button {"className":"is-style-cormorant-outlined-square-button-contrast"} -->
		<div class="wp-block-button is-style-cormorant-outlined-square-button-contrast"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'https://github.com/Olein-jp/cormorant' ); ?>"><?php esc_html_e( 'Watch on GitHub', 'cormorant' ); ?></a></div>
		<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
<!-- /wp:group -->
