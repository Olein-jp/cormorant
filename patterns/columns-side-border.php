<?php
/**
 * Title: Side Border Columns
 * Slug: cormorant/columns-side-border
 * Categories: cormorant-columns
 * Description: Side border columns
 * Keywords: cormorant
 * Block Types: core/group, core/paragraph, core/buttons, core/heading, core/columns
 *
 * @author Koji Kuno
 * @package cormorant
 * @since 2.0.0
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|4-xl","bottom":"var:preset|spacing|4-xl"}}},"textColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-color has-text-color" style="padding-top:var(--wp--preset--spacing--4-xl);padding-bottom:var(--wp--preset--spacing--4-xl)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"0","left":"0"}}},"className":"is-style-cormorant-columns-side-border"} -->
	<div class="wp-block-columns alignwide is-style-cormorant-columns-side-border"><!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|l","right":"var:preset|spacing|l","bottom":"var:preset|spacing|l","left":"var:preset|spacing|l"}}},"textColor":"foreground"} -->
		<div class="wp-block-column has-foreground-color has-text-color" style="padding-top:var(--wp--preset--spacing--l);padding-right:var(--wp--preset--spacing--l);padding-bottom:var(--wp--preset--spacing--l);padding-left:var(--wp--preset--spacing--l)"><!-- wp:heading {"level":3,"fontSize":"2-xl"} -->
			<h3 class="wp-block-heading has-2-xl-font-size"><?php echo esc_html__( 'How to change color', 'cormorant' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'The border colour can be changed <strong>by changing the text colour of the column.</strong> Libero fames porttitor eget primis turpis sollicitudin orci et dis urna augue, himenaeos felis semper non tempor fusce nam sit elit rhoncus.', 'cormorant' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
			<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"0px"}},"className":"is-style-cormorant-primary-filled-square-button"} -->
				<div class="wp-block-button is-style-cormorant-primary-filled-square-button"><a class="wp-block-button__link wp-element-button" style="border-radius:0px"><?php echo esc_html__( 'Learn More', 'cormorant' ); ?></a></div>
				<!-- /wp:button --></div>
			<!-- /wp:buttons --></div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|l","right":"var:preset|spacing|l","bottom":"var:preset|spacing|l","left":"var:preset|spacing|l"}}},"textColor":"foreground"} -->
		<div class="wp-block-column has-foreground-color has-text-color" style="padding-top:var(--wp--preset--spacing--l);padding-right:var(--wp--preset--spacing--l);padding-bottom:var(--wp--preset--spacing--l);padding-left:var(--wp--preset--spacing--l)"><!-- wp:heading {"level":3,"fontSize":"2-xl"} -->
			<h3 class="wp-block-heading has-2-xl-font-size"><?php echo esc_html__( 'How to change color', 'cormorant' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'The border colour can be changed <strong>by changing the text colour of the column.</strong> Libero fames porttitor eget primis turpis sollicitudin orci et dis urna augue, himenaeos felis semper non tempor fusce nam sit elit rhoncus.', 'cormorant' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
			<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"0px"}},"className":"is-style-cormorant-primary-filled-square-button"} -->
				<div class="wp-block-button is-style-cormorant-primary-filled-square-button"><a class="wp-block-button__link wp-element-button" style="border-radius:0px"><?php echo esc_html__( 'Learn More', 'cormorant' ); ?></a></div>
				<!-- /wp:button --></div>
			<!-- /wp:buttons --></div>
		<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
<!-- /wp:group -->
